<?php
require_once 'C:/xampp/htdocs/machinedesign/wp-load.php';

$menu_id = 100;

// 1. Restore item 115 to Pillar 5
wp_update_nav_menu_item($menu_id, 115, [
    'menu-item-title'     => '۰۵. ارتقای تیم‌های فنی کارخانجات',
    'menu-item-url'       => home_url('/services/corporate-training/'),
    'menu-item-object'    => 'custom',
    'menu-item-status'    => 'publish',
    'menu-item-parent-id' => 110,
    'menu-item-position'  => 5,
]);
echo "Restored item 115 as Pillar 5 under parent 110!\n";

// 2. Add brand new menu item for 'تیم ما' under 'درباره ما' (parent 117)
$page_team = get_page_by_path('about/team');
if (!$page_team) {
    $page_team = get_page_by_path('team');
}
$page_team_id = $page_team ? $page_team->ID : 158;

$new_team_item_id = wp_update_nav_menu_item($menu_id, 0, [
    'menu-item-title'     => 'تیم ما',
    'menu-item-url'       => home_url('/about/team/'),
    'menu-item-object'    => 'page',
    'menu-item-object-id' => $page_team_id,
    'menu-item-type'      => 'post_type',
    'menu-item-status'    => 'publish',
    'menu-item-parent-id' => 117,
    'menu-item-position'  => 1,
]);
echo "Created new menu item ID {$new_team_item_id} for 'تیم ما' under 'درباره ما' (parent 117)!\n";

// 3. Verify all items
echo "\n--- Complete Verified Menu Hierarchy ---\n";
$items = wp_get_nav_menu_items($menu_id);
foreach ($items as $it) {
    $indent = $it->menu_item_parent != 0 ? "    └── " : "├── ";
    echo "{$indent}ID: {$it->ID} | {$it->title} (Parent: {$it->menu_item_parent}) -> {$it->url}\n";
}
