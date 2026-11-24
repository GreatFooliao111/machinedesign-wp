<?php
require_once 'C:/xampp/htdocs/machinedesign/wp-load.php';

$menu_id = 100;
$parent_id = 117; // درباره ما
$page_team = get_page_by_path('about/team');
if (!$page_team) {
    $page_team = get_page_by_path('team');
}

$page_team_id = $page_team ? $page_team->ID : 158;
$page_team_url = home_url('/about/team/');

// Check if an item for team already exists in menu
$existing_items = wp_get_nav_menu_items($menu_id);
$found_id = null;
foreach ($existing_items as $it) {
    if (strpos($it->url, '/about/team') !== false || strpos($it->title, 'تیم') !== false) {
        $found_id = $it->ID;
        echo "Found existing menu item ID: {$found_id} | Title: {$it->title}\n";
        break;
    }
}

if ($found_id) {
    // Update existing item
    wp_update_nav_menu_item($menu_id, $found_id, [
        'menu-item-title'     => 'تیم ما',
        'menu-item-url'       => $page_team_url,
        'menu-item-object'    => 'page',
        'menu-item-object-id' => $page_team_id,
        'menu-item-type'      => 'post_type',
        'menu-item-status'    => 'publish',
        'menu-item-parent-id' => $parent_id,
    ]);
    echo "Updated menu item {$found_id} under parent {$parent_id}!\n";
} else {
    // Add new menu item
    $new_item_id = wp_update_nav_menu_item($menu_id, 0, [
        'menu-item-title'     => 'تیم ما',
        'menu-item-url'       => $page_team_url,
        'menu-item-object'    => 'page',
        'menu-item-object-id' => $page_team_id,
        'menu-item-type'      => 'post_type',
        'menu-item-status'    => 'publish',
        'menu-item-parent-id' => $parent_id,
    ]);
    echo "Added new menu item ID: {$new_item_id} under parent {$parent_id}!\n";
}

// Print updated menu
echo "\n--- Updated Menu Items ---\n";
$updated_items = wp_get_nav_menu_items($menu_id);
foreach ($updated_items as $it) {
    echo "  - Item ID: {$it->ID} | Title: {$it->title} | Parent: {$it->menu_item_parent} | URL: {$it->url}\n";
}
