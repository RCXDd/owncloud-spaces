# NextCloud auf DigitalOcean Droplet - Setup Guide

## Schritt 1: Droplet erstellen

**Über DigitalOcean Dashboard:**
1. Gehen Sie zu: https://cloud.digitalocean.com
2. Klicken Sie **"Create"** → **"Droplets"**
3. **Konfiguration:**
   - **Image:** Ubuntu 20.04 (LTS) x64
   - **Plan:** Basic $6/month (1 vCPU, 1GB RAM, 25GB SSD)
   - **Region:** Frankfurt (fra1)
   - **Authentication:** SSH Key oder Root Password
   - **Hostname:** nextcloud-server

## Schritt 2: Auf Droplet zugreifen

```bash
# SSH-Verbindung (ersetzen Sie IP-Adresse)
ssh root@YOUR_DROPLET_IP
```

## Schritt 3: NextCloud installieren

```bash
# Setup-Script herunterladen und ausführen
curl -O https://raw.githubusercontent.com/RCXDd/owncloud-spaces/main/create-nextcloud-droplet.sh
chmod +x create-nextcloud-droplet.sh
./create-nextcloud-droplet.sh
```

## Schritt 4: Spaces-Integration

```bash
# Spaces-Konfiguration
curl -O https://raw.githubusercontent.com/RCXDd/owncloud-spaces/main/configure-spaces.sh
chmod +x configure-spaces.sh
./configure-spaces.sh
```

## Zugriff

- **URL:** `https://YOUR_DROPLET_IP`
- **Admin:** admin
- **Passwort:** AdminPass123!

## Kosten

- **$6/Monat** Droplet (1GB RAM)
- **$5/Monat** Spaces (250GB)
- **Total: $11/Monat**

## Features

✅ **NextCloud 29** (neueste Version)  
✅ **DigitalOcean Spaces** Integration  
✅ **SSL-Verschlüsselung**  
✅ **Team-Kollaboration**  
✅ **Mobile & Desktop Apps**  
✅ **250GB Cloud-Storage**  

## Support

Bei Problemen: [DigitalOcean Community](https://www.digitalocean.com/community/questions)