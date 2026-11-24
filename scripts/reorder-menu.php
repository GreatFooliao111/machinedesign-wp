<?php
require_once 'C:/xampp/htdocs/machinedesign/wp-load.php';

global $wpdb;

$order_map = [
    109 => 1,  // صفحه اصلی
    110 => 2,  // خدمات ۶ گانه مهندسی
    111 => 3,  // ۰۱. طراحی ماشین‌آلات
    112 => 4,  // ۰۲. عیب‌یابی خط
    113 => 5,  // ۰۳. تحقیق و توسعه
    114 => 6,  // ۰۴. منتورینگ
    115 => 7,  // ۰۵. ارتقای تیم‌های فنی
    116 => 8,  // ۰۶. کارشناسی خرید
    117 => 9,  // درباره ما
    192 => 10, // تیم ما (child of 117)
    118 => 11, // نمونه پروژه‌ها
    119 => 12, // مقالات و استانداردهای صنعتی
    120 => 13, // تماس و استعلام
];

foreach ($order_map as $post_id => $order) {
    wp_update_post([
        'ID'         => $post_id,
        'menu_order' => $order,
    ]);
}

echo "Successfully reordered all menu items!\n";

$items = wp_get_nav_menu_items(100);
foreach ($items as $it) {
    $indent = $it->menu_item_parent != 0 ? "    └── " : "├── ";
    echo "{$indent}ID: {$it->ID} | Order: {$it->menu_order} | Parent: {$it->menu_item_parent} | Title: {$it->title} -> {$it->url}\n";
}
