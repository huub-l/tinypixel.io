<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class FrontPage extends Controller
{
  public static function GetPostsFromCat($cat = 'jaxonville') {
    $args = array(
      'post_type' => array('post'),
      'post_status' => array('published'),
      'posts_per_page' => 5,
      'order' => 'DESC',
      'category_name' => $cat,
    );
    // The Query
    return new WP_Query( $args );
  }
}