#!/bin/bash

# Install system deps
apt-get update && apt-get install -qq php7.0-apcu php7.0-soap php-zmq libfontconfig1 libxrender1 moreutils libunwind8
curl -SLO https://github.com/PowerShell/PowerShell/releases/download/v6.0.0-alpha.18/powershell_6.0.0-alpha.18-1ubuntu1.14.04.1_amd64.deb
dpkg -i powershell_6.0.0-alpha.18-1ubuntu1.14.04.1_amd64.deb
wget https://download3.vmware.com/software/vmw-tools/powerclicore/PowerCLI_Core.zip
mkdir -p /usr/local/share/powershell/Modules
unzip PowerCLI_Core.zip -d PowerCLI_Core
cd PowerCLI_Core
unzip PowerCLI.Cis.zip -d /usr/local/share/powershell/Modules
unzip PowerCLI.Vds.zip -d /usr/local/share/powershell/Modules
unzip PowerCLI.ViCore.zip -d /usr/local/share/powershell/Modules
cd ..
rm -rf PowerCLI_Core*
rm powershell_6.0.0-alpha.18-1ubuntu1.14.04.1_amd64.deb
powershell 'Get-Module -ListAvailable PowerCLI* | Import-Module; Set-PowerCLIConfiguration -InvalidCertificateAction Ignore -Confirm:$false'
