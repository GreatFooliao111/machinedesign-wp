<?php
require_once 'C:/xampp/htdocs/machinedesign/wp-load.php';

$items = wp_get_nav_menu_items(100);
foreach ($items as $it) {
    echo "ID: {$it->ID} | Order: {$it->menu_order} | Parent: {$it->menu_item_parent} | Title: {$it->title}\n";
}
