<?php

// platform_check.php @generated by Composer

$issues = array();

if (!(PHP_VERSION_ID >= 70400)) {
    $issues[] = 'Your Composer dependencies require a PHP version ">= 7.4.0". You are running ' . PHP_VERSION  .  '.';
}

$missingExtensions = array();
extension_loaded('curl') || $missingExtensions[] = 'curl';
extension_loaded('dom') || $missingExtensions[] = 'dom';
extension_loaded('intl') || $missingExtensions[] = 'intl';
extension_loaded('json') || $missingExtensions[] = 'json';
extension_loaded('libxml') || $missingExtensions[] = 'libxml';
extension_loaded('phar') || $missingExtensions[] = 'phar';
extension_loaded('tokenizer') || $missingExtensions[] = 'tokenizer';
extension_loaded('xml') || $missingExtensions[] = 'xml';
extension_loaded('xmlwriter') || $missingExtensions[] = 'xmlwriter';

if ($missingExtensions) {
    $issues[] = 'Your Composer dependencies require the following PHP extensions to be installed: ' . implode(', ', $missingExtensions);
}

if ($issues) {
    echo 'Composer detected issues in your platform:' . "\n\n" . implode("\n", $issues);
    exit(104);
}
