<?php

class Movie
{
    public $bannerPath;
    public $title;
    public $year;
    public $duration;
    public $genre;

    public function __construct($_bannerPath, $_title, $_year, $_duration, Genre $_genre)
    {
        $this->bannerPath = $_bannerPath;
        $this->title = $_title;
        $this->year = $_year;
        $this->duration = $_duration;
        $this->genre = $_genre;
    }

    public function defaultImgPath()
    {
        if ($this->bannerPath == '#') {
            $this->bannerPath = 'https://upload.wikimedia.org/wikipedia/commons/d/d1/Image_not_available.png';
        }

        return $this->bannerPath;
    }
}

var_dump($genre);
