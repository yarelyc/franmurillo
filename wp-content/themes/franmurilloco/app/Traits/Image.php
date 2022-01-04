<?php


namespace App\Traits;

trait Image {


    protected function getImage($id, $size='medium') {

        $image = get_field('project_image', $id);

        //vars
        $url = $image['url'];

        $title = $image['title'];
        $alt = $image['alt'];
        $caption = $image['caption'];

        //thumbnail
        $thumb = $image['sizes'][$size];
        $width = $image['sizes'][$size.'-width'];
        $height= $image['sizes'][$size.'-height'];

        return (object)[
            'url' => $url,
            'title' => $title,
            'caption' => $caption,
            'thumb' => $thumb,
            'width' => $width,
            'height' => $height,

        ];
    }
}
