<?php
require_once __DIR__ . '/../wp-load.php';

$q = new WP_Query([
    'post_type'      => 'team_member',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'orderby'        => 'ID',
    'order'          => 'ASC'
]);

echo "Total team_member posts found: " . $q->found_posts . "\n\n";

while ($q->have_posts()) {
    $q->the_post();
    $id = get_the_ID();
    $slug = get_post_field('post_name');
    $title = get_the_title();
    $role = get_post_meta($id, '_md_member_role_badge', true);
    $thumb_id = get_post_thumbnail_id($id);
    $thumb_url = wp_get_attachment_image_url($thumb_id, 'full');
    $permalink = get_permalink($id);
    
    echo sprintf("#%d | %s (%s)\n  Role: %s\n  Thumb: %s\n  URL: %s\n\n", $id, $title, $slug, $role, $thumb_url ?: 'NO_THUMBNAIL', $permalink);
}
