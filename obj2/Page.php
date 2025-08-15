<?php

class Page
{

    static public $score = '225'; /// WTF
    public $title = 'Delfis 6';

    protected $url; // visoje seimoje

    public function __construct()
    {
        $this->url = 'http://localhost/grupe4php/obj2/page/' . rand(1000, 9999);
        // $this->render();

        // $this->score = '100';
    }

    public function render()
    {
        echo '<h2>Page rendering...' . static::$score . ' ' . $this->title . '</h2>';
    }
}
