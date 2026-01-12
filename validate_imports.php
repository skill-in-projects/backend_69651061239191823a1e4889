#!/usr/bin/env php
<?php
/**
 * Import validation script for PHP backend
 * This script validates that all controllers can be imported without errors.
 * Run during build phase to catch import-time errors before deployment.
 */

require_once __DIR__ . '/vendor/autoload.php';

try {
    // Import controller class - let it fail if there are errors
    require_once __DIR__ . '/Controllers/TestController.php';
    echo "✓ Successfully imported Controllers/TestController.php\n";
} catch (Throwable $e) {
    echo "✗ Failed to import Controllers/TestController.php: " . $e->getMessage() . "\n";
    echo $e->getTraceAsString() . "\n";
    exit(1);
}

echo "✓ All imports validated successfully\n";
exit(0);
