<?php

class Movie
{
    public $bannerPath;
    public $title;
    public $year;
    public $duration;
    public $genre;

    public function __construct($_bannerPath, $_title, $_year, $_duration,  $_genre)
    {
        $this->bannerPath = $_bannerPath;
        $this->title = $_title;
        $this->year = $_year;
        $this->duration = $_duration;
        $this->genre = $_genre;
    }
}
