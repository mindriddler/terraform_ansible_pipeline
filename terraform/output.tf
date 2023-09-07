# Outputs är variabler som vi kan använda oss av i andra filer. I detta fall så vill vi kunna använda oss av IP-adressen
# till VM:n i en senare fil.
# Tillexempel Ansible
output "instance_ip_addr" {
  value = google_compute_instance.gear5_instance.network_interface[0].access_config[0].nat_ip
}

output "instance_name" {
  value = google_compute_instance.gear5_instance.name
  description = "The name of the created instance."
}
