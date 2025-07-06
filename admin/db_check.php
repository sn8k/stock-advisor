<?php
/**
 * DB Check Script
 * Version: 0.2.1
 * Date: 2025-07-06
 */

const DB_FILE = __DIR__ . '/../data/portfolio.db';

function checkDatabase(): bool {
    return file_exists(DB_FILE);
}

function createDatabase(): bool {
    $dir = dirname(DB_FILE);
    if (!is_dir($dir) && !mkdir($dir, 0777, true)) {
        echo "Failed to create data directory.\n";
        return false;
    }
    try {
        $db = new SQLite3(DB_FILE);
        $db->exec('CREATE TABLE IF NOT EXISTS portfolio (id INTEGER PRIMARY KEY)');
        $db->close();
        return true;
    } catch (Exception $e) {
        echo "Error creating database: {$e->getMessage()}\n";
        return false;
    }
}

function interactiveSetup(): void {
    if (checkDatabase()) {
        echo "Database already exists.\n";
        return;
    }
    echo "Database not found. Create it now? (y/n): ";
    $answer = trim(fgets(STDIN));
    if (strtolower($answer) === 'y') {
        if (createDatabase()) {
            echo "Database created successfully.\n";
        } else {
            echo "Database creation failed.\n";
        }
    } else {
        echo "Database not created.\n";
    }
}

if (php_sapi_name() === 'cli') {
    if (in_array('--version', $argv)) {
        echo "db_check.php version 0.2.1\n";
        exit(0);
    }
    if (in_array('--create', $argv)) {
        if (createDatabase()) {
            echo "Database created successfully.\n";
            exit(0);
        }
        echo "Database creation failed.\n";
        exit(1);
    }
    if (checkDatabase()) {
        echo "Database is present.\n";
    } else {
        echo "Database is missing.\n";
        interactiveSetup();
    }
}
?>
