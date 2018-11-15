<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class ArchiveProject extends Controller
{
  public function project() 
  {
    global $post;

    $terms_list = get_the_terms($post->ID, 'type');
    foreach($terms_list as $term) {
      $types[] = $term->name;
      $types = array_reverse($types);
    }

    $project = (object) array(
      'name' => get_the_title($post->ID),
      'type' => join(' ', $types),
      'repository' => get_field('repository'),
    );
    
    return $project;
  }
}
