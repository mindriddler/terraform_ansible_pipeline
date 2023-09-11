# Variablar som kan användas i alla moduler
variable "gce_config" {
  type = object({
    zone : string
    region : string
    project_id : string
  })


  description = "General GCE configuration"


  default = {
    zone       = "europe-north1-a"
    region     = "europe-north1"
    project_id = "interns-fredrik"
  }
}

variable "compute_config" {
  type = object({
    name : string
    type : string
    hostname : string
  })

  description = "Compute configuration"

  default = {
    name     = "gear5-staging-srv1"
    type     = "e2-medium"
    hostname = "internal.gear5.staging"
  }
}
