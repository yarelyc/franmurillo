<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class HomePage extends Controller
{
    public function home()
    {
        return (object)[
            'intro' => get_field('intro', get_the_ID()) ?? null,
            'video_mp4' => get_field('video_mp4', get_the_ID()) ?? null,
            'video_webm' => get_field('video_webm', get_the_ID()) ?? null,
        ];
    }

    public function bold_link () {
        return (object)[
            'url' => get_field('bold_url', get_the_ID())['url']  ?? null,
            'title' => get_field('bold_url', get_the_ID())['title']?? null,
        ];
    }

    public function outline_link () {
        return (object)[
            'url' => get_field('bold_url', get_the_ID())['url']  ?? null,
            'title' => get_field('bold_url', get_the_ID())['title']?? null,
        ];
    }


}
