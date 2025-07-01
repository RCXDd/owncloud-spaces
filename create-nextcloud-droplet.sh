#!/bin/bash

# NextCloud Droplet Setup Script following DigitalOcean Tutorial
# Run this script on a fresh Ubuntu 20.04 Droplet

set -e

echo "🚀 Setting up NextCloud on Ubuntu 20.04..."

# Update system
echo "📦 Updating system packages..."
sudo apt update && sudo apt upgrade -y

# Install NextCloud via Snap (following DO tutorial)
echo "📁 Installing NextCloud via Snap..."
sudo snap install nextcloud

# Configure admin account
echo "👤 Configuring NextCloud admin account..."
sudo nextcloud.manual-install admin AdminPass123!

# Configure trusted domains (replace with your domain/IP)
echo "🌐 Configuring trusted domains..."
DROPLET_IP=$(curl -s http://ifconfig.me)
sudo nextcloud.occ config:system:set trusted_domains 1 --value=$DROPLET_IP

echo "🔐 Configuring SSL..."
# Open firewall ports for SSL
sudo ufw allow 80,443/tcp

# Option 1: Let's Encrypt (if you have a domain)
# sudo nextcloud.enable-https lets-encrypt

# Option 2: Self-signed certificate (for IP access)
sudo nextcloud.enable-https self-signed

echo "✅ NextCloud installation complete!"
echo "🌐 Access URL: https://$DROPLET_IP"
echo "👤 Admin: admin"
echo "🔑 Password: AdminPass123!"
echo ""
echo "📋 Next steps:"
echo "1. Access NextCloud web interface"
echo "2. Configure DigitalOcean Spaces integration"
echo "3. Set up team collaboration features"