<?php

namespace App\Controllers;

use App\Plainswalker;
use App\Firewalker;
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

    public static function menu($menu_name) 
    {
      $nav_menu = wp_nav_menu( array(
          'theme_location' => $menu_name,
          'menu_class'     => 'mdc-button ripple',
          'container'      => '',
          'echo'           => false,
          'items_wrap'     => '%3$s',
          'depth'          => 0,
          'walker'         => new Plainswalker(),
      ));

      return $nav_menu;
    }

    public static function drawer_menu($menu_name) 
    {
      $nav_menu = wp_nav_menu( array(
          'theme_location' => $menu_name,
          'container'      => '',
          'echo'           => false,
          'items_wrap'     => '%3$s',
          'depth'          => 0,
          'walker'         => new Firewalker(),
      ));

      return $nav_menu;
    }
}
