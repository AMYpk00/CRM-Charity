<?php
// Set correct timezone (e.g., UTC)
date_default_timezone_set('UTC');

// Headers to prevent caching
header("Content-Type: application/xml; charset=utf-8");
header("X-Robots-Tag: noindex, follow");

$base_url = "https://crm-charity-foundation.onrender.com";

$pages = [
    "",  // Homepage
    "about-us",
    "activities",
    "contact",
    "donation",
    "path",
    "TH-about-us",
    "TH-activities",
    "TH-contact",
    "TH-donation",
    "ENG-index"
];

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php foreach ($pages as $page) : ?>
    <?php
    // Generate clean URL
    $clean_path = trim($page, '/');
    $full_url = rtrim($base_url, '/') . '/' . $clean_path;

    // Set priority
    $priority = ($page === "" || $page === "TH-index") ? '1.0' : '0.8';
    ?>
    <url>
        <loc><?= htmlspecialchars($full_url, ENT_XML1) ?></loc>
        <lastmod><?= date('Y-m-d') ?></lastmod> <!-- Now outputs CURRENT date -->
        <priority><?= $priority ?></priority>
    </url>
    <?php endforeach; ?>
</urlset>
