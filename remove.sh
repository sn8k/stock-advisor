#!/bin/bash
# Project uninstaller
# Version: 0.1.2
# Date: 2025-07-06

php src/portfolio_manager.php --remove
php src/market_data_fetcher.php --remove
rm -rf logs
rm -rf data
