<?php

// Data available in  SingleProjects

namespace App\controllers;

use App\Traits\Image;
use Sober\Controller\Controller;

class SingleWork extends Controller
{
    use Image;

    public function work()
    {

        return (object)[
            'img' => $this->getImage(get_the_ID(), 'project_image', 'feature-square') ?? null,
            'gallery' => get_field('gallery_images', get_the_ID()) ?? null,
            'role' => get_field('role', get_the_ID()) ?? null,
            'brief' => get_field('brief', get_the_ID()) ?? null,

        ];
    }


    public function solution()
    {

        return (object)[
            'intro' => get_field('solution', get_the_ID()) ?? null,
            'image' => $this->getImage(get_the_ID(), 'the_solution_image', 'feature-medium') ?? null,

            'outline_link' => get_field('solution_outline_url', get_the_ID())['url']  ?? null,
            'outline_title' => get_field('solution_outline_url', get_the_ID())['title']?? null,
            'outline_target' =>  get_field('solution_outline_url', get_the_ID())['target']?? null,

            'bold_link' => get_field('solution_bold_url', get_the_ID())['url']  ?? null,
            'bold_title' => get_field('solution_bold_url', get_the_ID())['title']?? null,
            'bold_target' =>  get_field('solution_bold_url', get_the_ID())['target']?? null,

        ];
    }


}

?>


