<?php
require_once __DIR__ . '/../wp-load.php';
require_once ABSPATH . 'wp-admin/includes/image.php';
require_once ABSPATH . 'wp-admin/includes/file.php';
require_once ABSPATH . 'wp-admin/includes/media.php';

$post_id = 160;
$file = 'hossein-vatandoust-founder.webp';
$path = ABSPATH . 'wp-content/uploads/2026/07/' . $file;
$url  = home_url('/wp-content/uploads/2026/07/' . $file);

$att = get_posts([
    'post_type'   => 'attachment',
    'meta_key'    => '_wp_attached_file',
    'meta_value'  => '2026/07/' . $file,
    'numberposts' => 1
]);

if (!empty($att)) {
    $att_id = $att[0]->ID;
} else {
    $att_id = wp_insert_attachment([
        'guid'           => $url,
        'post_mime_type' => 'image/webp',
        'post_title'     => 'حسین وطن‌دوست - پرتره رسمی بنیان‌گذار',
        'post_status'    => 'inherit'
    ], $path, $post_id);
    $meta = wp_generate_attachment_metadata($att_id, $path);
    wp_update_attachment_metadata($att_id, $meta);
}

set_post_thumbnail($post_id, $att_id);
echo "Attached portrait ID {$att_id} to post {$post_id}\n";
