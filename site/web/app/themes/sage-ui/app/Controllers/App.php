<?php

namespace App\Controllers;

use Sober\Controller\Controller;

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

    public function site()
    {
      $site = (object) array();
      return $site;
    }

    public function organization()
    {
      $organization = (object) array(
        'name' => get_field('org_name','options'),
        'email' => get_field('org_email','options'),
        'street' => get_field('org_street_address','options'),
        'city' => get_field('org_city','options'),
        'state' => get_field('org_state','options'),
        'phone' => get_field('org_phone','options'),
        'postal_code' => get_field('org_postal_code','options'),
        'twitter' => get_field('org_twitter','options'),
        'facebook' => get_field('org_facebook','options'),
      );
    
      return $organization;
    }
}
