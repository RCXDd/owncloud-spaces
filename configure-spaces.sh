#!/bin/bash

# NextCloud DigitalOcean Spaces Integration Script

set -e

echo "🪣 Configuring NextCloud with DigitalOcean Spaces..."

# Configure external storage
echo "📋 Setting up Spaces as external storage..."

# Install S3 app for NextCloud
sudo nextcloud.occ app:install files_external

# Configure S3 external storage
sudo nextcloud.occ files_external:create "DigitalOcean Spaces" amazons3 amazons3::accesskey \
  -c hostname=fra1.digitaloceanspaces.com \
  -c bucket=owncloud-storage \
  -c region=fra1 \
  -c use_ssl=true \
  -c use_path_style=false \
  -c key=DO00L8TYXMPJ2BE37L8X \
  -c secret=M1LCGGp7wKzfM3C2ERiAylzRvWx9FrzFhmy2tVBq97I

echo "✅ Spaces integration configured!"
echo "📁 Files are now stored in DigitalOcean Spaces"
echo "💾 250GB storage available"