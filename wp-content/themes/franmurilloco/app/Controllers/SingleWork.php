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
            'img' => $this->getImage(get_the_ID(), 'feature-square') ?? null,
            'gallery' => get_field('gallery_images', get_the_ID()) ?? null,
            'role' => get_field('role', get_the_ID()) ?? null,
            'brief' => get_field('brief', get_the_ID()) ?? null,
            'solution' => get_field('solution', get_the_ID()) ?? null

        ];
    }


}

?>


