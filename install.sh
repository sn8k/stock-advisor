#!/bin/bash
# Project installer
# Version: 0.1.3
# Date: 2025-07-06

LOG_FILE="logs/install.log"
mkdir -p "$(dirname "$LOG_FILE")"
exec > >(tee -a "$LOG_FILE") 2>&1
set -x

echo "Installing dependencies..."
sudo apt-get update -y
sudo apt-get install -y php php-sqlite3 mysql-server

php src/portfolio_manager.php --install
php src/market_data_fetcher.php --install
php admin/db_check.php --create
./tools/log_create.sh
