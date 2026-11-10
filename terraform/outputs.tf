output "web_server_public_ip" {
  value       = azurerm_public_ip.web_pip.ip_address
  description = "Public IP address of the Linux Web Server"
}

output "database_server_private_ip" {
  value       = azurerm_network_interface.db_nic.private_ip_address
  description = "Private IP address of the Linux Database Server"
}

output "key_vault_name" {
  value       = azurerm_key_vault.kv.name
  description = "Name of the Azure Key Vault"
}