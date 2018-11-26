<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class OurPeople extends Controller
{
  public static function OurPeople() {
    $args = array(
      'post_type' => array('staff'),
      'posts_per_page' => -1,
      'orderby' => 'title',
      'order' => 'DESC',
    );
    return new WP_Query( $args );
  }
}