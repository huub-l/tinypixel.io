<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use \Pixl\Bulma\Walker;

class App extends Controller
{
    public static function siteName()
    {
        return get_bloginfo('name');
    }

    private static function doBulmaNav()
    {
      return wp_nav_menu( array(
        'theme_location'    => 'primary_navigation',
        'items_wrap'        => '%3$s',
        'depth'             => 1,
        'before'            => false,
        'after'             => false,
        'walker'            => new Walker())
      );
    }

    public static function primaryNav()
    {
      if(class_exists('\Pixl\Bulma\Walker')) :
        App::doBulmaNav();
      else :
        return wp_nav_menu( array(
          'theme_location'    => 'primary_navigation',
          'depth'             => 2,
          'container'         => false,
          'menu_class'        => 'navbar-menu',
          'menu_id'           => 'primary-menu',
          'after'             => "</div>"
        ));
      endif;
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
            return single_cat_title('', false);
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public static function excerpt()
    {
        if(is_single()) return get_the_excerpt();
        else return null;
    }
}