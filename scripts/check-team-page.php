<?php
require_once 'C:/xampp/htdocs/machinedesign/wp-load.php';

$p = get_page_by_path('about/team');
if (!$p) {
    $p = get_page_by_path('team');
}

if ($p) {
    echo 'Found page ID: ' . $p->ID . PHP_EOL;
    echo 'Slug: ' . $p->post_name . PHP_EOL;
    echo 'Status: ' . $p->post_status . PHP_EOL;
    echo 'Template: ' . get_post_meta($p->ID, '_wp_page_template', true) . PHP_EOL;
    echo 'Link: ' . get_permalink($p->ID) . PHP_EOL;
} else {
    echo 'Page not found! Let us search all pages with team in title or slug...' . PHP_EOL;
    $pages = get_posts([
        'post_type' => 'page',
        'post_status' => 'any',
        'numberposts' => -1
    ]);
    foreach ($pages as $pg) {
        if (strpos($pg->post_name, 'team') !== false || strpos($pg->post_title, 'تیم') !== false) {
            echo 'Candidate: ID ' . $pg->ID . ' | ' . $pg->post_name . ' | ' . $pg->post_title . ' | Link: ' . get_permalink($pg->ID) . PHP_EOL;
        }
    }
}
