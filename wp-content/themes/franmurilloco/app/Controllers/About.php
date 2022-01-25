<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class About extends Controller
{
    public function about()
    {

        return (object)[
            'about' => get_field('about', get_the_ID()) ?? null,
            'enjoys' => get_field('enjoys', get_the_ID()) ?? null,
            'work_link' => get_field('work_link', get_the_ID()) ?? null,
            'lets_talk_link' => get_field('lets_talk_link', get_the_ID()) ?? null,
            'download' => get_field('download', get_the_ID()) ?? null,
            'image' => wp_get_attachment_image(get_field('image', get_the_ID()), 'full') ?? null

        ];
    }
}
