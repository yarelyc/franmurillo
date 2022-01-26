<?php


namespace App\Traits;

trait Image {


    protected function getImage($id, $name, $size='feature-medium') {

        $image = get_field($name, $id);

        //vars
        $url = $image['url'];

        $title = $image['title'];
        $alt = $image['alt'];
        $caption = $image['caption'];

        //thumbnail
        $thumb = $image['sizes'][$size];

        return (object)[
            'url' => $url,
            'title' => $title,
            'caption' => $caption,
            'thumb' => $thumb,

        ];
    }
}
