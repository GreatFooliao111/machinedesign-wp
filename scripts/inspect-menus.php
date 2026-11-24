<?php
require_once 'C:/xampp/htdocs/machinedesign/wp-load.php';

$menus = wp_get_nav_menus();
echo "Total menus: " . count($menus) . "\n";
foreach ($menus as $m) {
    echo "Menu: {$m->name} (ID: {$m->term_id}, Slug: {$m->slug})\n";
    $items = wp_get_nav_menu_items($m->term_id);
    if ($items) {
        foreach ($items as $it) {
            echo "  - Item ID: {$it->ID} | Title: {$it->title} | Parent: {$it->menu_item_parent} | URL: {$it->url} | Obj: {$it->object} ({$it->object_id})\n";
        }
    }
}

$locs = get_nav_menu_locations();
echo "Locations:\n";
print_r($locs);
