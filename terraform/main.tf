# Det jag gjort här och har alla olika typer av resurser i samma fil är egentligen "fel".
# Det är generellt sett bättre att ha en fil per resurs.
# Men vårt scope är så litet att det inte spelar någon roll.

terraform {
  # Här säger vi att vi vill använda oss av Google Cloud Storage som backend för att lagra vår state fil.
  # Detta är för att vi vill kunna dela state filen med varandra och för att vi vill kunna köra terraform från
  # flera olika datorer.
  backend "gcs" {
    bucket = "gear5_state_bucket"
    prefix = "terraform/state"
  }


  required_providers {
    google = {
      source  = "hashicorp/google"
      version = ">= 4.81.0"
    }
  }
}

provider "google" {
  region  = var.gce_config.region
  zone    = var.gce_config.zone
  project = var.gce_config.project_id
}

resource "google_compute_instance" "gear5_instance" {
  name         = var.compute_config.name
  machine_type = var.compute_config.type


  # Detta behövs för att Devoteam hatar project wide ssh keys och jag har redan fått linjalen på fingrarna för att jag
  # skapade en VM med project wide ssh key. ¯\_(ツ)_/¯ 
  # Så jag vill inte göra om det misstaget igen.
  # Detta är inget som är viktigt egentligen för oss.
  metadata = {
    block-project-ssh-keys = "true"
  }


  boot_disk {
    initialize_params {
      image = "debian-cloud/debian-11"
    }
  }

  network_interface {
    network = google_compute_network.vpc_network.name
    access_config {
    }
  }
  tags = ["http-server", "https-server"]

  # Eftersom jag inte vill använda mitt konto för att autentisera mot GCP så har jag skapat ett service account
  # som vi använder oss av för att autentisera oss mot GCP.
  # Här säger vi bara till terraform att skapa VM:n och använda detta specifika service account.
  service_account {
    email = "gear5-linux@interns-fredrik.iam.gserviceaccount.com"
    scopes = [
      "https://www.googleapis.com/auth/compute",
      "https://www.googleapis.com/auth/devstorage.read_only"
    ]
  }
}

resource "google_compute_network" "vpc_network" {
  name                    = "gear5-staging-vpc"
  auto_create_subnetworks = true
  mtu                     = 1460
}


# Detta är en firewall regel som tillåter trafik från en viss ip range
# Detta behövs för att jag har satt upp IAP (Identity Aware Proxy) på mitt GCP projekt.
# Detta är inget som är viktigt egentligen för oss.
resource "google_compute_firewall" "allow_tcp_from_ip_range" {
  name    = "allow-ingress-from-iap"
  network = google_compute_network.vpc_network.self_link

  allow {
    protocol = "tcp"
    ports    = ["22", "3389"]
  }

  source_ranges = ["35.235.240.0/20"]
}
