<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive('partners')) {
          return "Case Studies";
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public function get_recent_posts() {
      $args = array(
        'posts_per_page'   => 1,
        'offset'           => 0,
        'category'         => '',
        'category_name'    => '',
        'orderby'          => 'date',
        'order'            => 'DESC',
        'include'          => '',
        'exclude'          => '',
        'meta_key'         => '',
        'meta_value'       => '',
        'post_type'        => 'post',
        'post_mime_type'   => '',
        'post_parent'      => '',
        'author'	   => '',
        'author_name'	   => '',
        'post_status'      => 'publish',
        'suppress_filters' => true,
        'fields'           => '',
      );
    return new WP_Query($args);
  }

  public static function partners($limit = -1)
  {
    $partners = get_posts([
        'post_type'      => 'partner',
        'posts_per_page' => -1,
        'limit'          => $limit,
    ]);

    return array_map ( function ( $partner ) {
        return [
            'title' => get_the_title($partner->ID),
            'permalink' => get_the_permalink($partner->ID),
            'excerpt' => get_the_excerpt($partner->ID),
            'type' => get_post_meta($partner->ID,'type'),
            'services' => get_post_meta($partner->ID,'services'),
            'thumbnail' => get_the_post_thumbnail_url ( $partner->ID ),
        ];
    }, $partners );
  }
}
