<?php

class Article extends Page {
    
    static public $score = '5';
    public $title;

    public function __construct($title = 'Nera pavadinimo')
    {
        parent::__construct();

        $this->title = $title;

        $this->render();
        // parent::render();

    }

    // public function render()
    // {
    //     echo '<h2>Article rendering...'. self::$score.'</h2>';
    // }
    
}
