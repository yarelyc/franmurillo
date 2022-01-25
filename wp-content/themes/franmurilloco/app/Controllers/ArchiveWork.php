<?php

// Data available in  Archive Projects page

namespace App\controllers;
use App\Traits\Image;
use Sober\Controller\Controller;

class ArchiveWork extends Controller {


    use Image;
    public function work(){
        $args = [
            'posts_per_page' => -1,
            'offset' => 0,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'work'
        ];

        $the_query = new \WP_Query($args);

        $work = [];
        if($the_query->post_count > 0) {
            $work = array_map(function($project){

                return (object)[
                    'img' => $this->getImage($project, 'feature-medium'),
                    'name' => get_the_title($project),
                    'permalink' => get_permalink($project),

                ];

            }, $the_query->posts);

            wp_reset_postdata();
        }
        return $work;

    }



}
