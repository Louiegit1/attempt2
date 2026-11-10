variable "resource_group_name" {
  type        = string
  default     = "rg-cs7504-assignment1"
  description = "Name of the Azure Resource Group"
}

variable "location" {
  type        = string
  default     = "japaneast"
  description = "Azure Region for deployment"
}

variable "admin_username" {
  type        = string
  default     = "azureuser"
  description = "Admin username for Web and DB Virtual Machines"
}

variable "admin_password" {
  type        = string
  default     = "MySecurePassword123!"
  description = "Admin password for Virtual Machines"
}

variable "key_vault_secret_val" {
  type        = string
  default     = "MySecurePassword123"
  description = "Secret value stored in Azure Key Vault"
}