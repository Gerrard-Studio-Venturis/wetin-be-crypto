<?php
/**
 * Plugin Name: Wetin Be Crypto
 * Description: Public crypto learning with private versioned practice and progress.
 * Version: 0.2.0
 * Requires PHP: 8.0
 */
if (!defined('ABSPATH')) { exit; }
require_once __DIR__ . '/includes/review.php';
require_once __DIR__ . '/includes/backend.php';
WBC_Backend::boot();
register_activation_hook(__FILE__, ['WBC_Backend', 'install']);

require_once __DIR__ . '/includes/publishing.php';

require_once __DIR__ . "/includes/site.php";
