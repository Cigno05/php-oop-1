<?php 

require_once __DIR__ ."../Production.php";

class Movie extends Production {
    public $relase_year;
    public $duration;

    public function __construct(string $_title, string $_language, int $_vote, string $_genre, int $_relase_year, int $_duration) {

        parent::__construct($_title, $_language, $_vote, $_genre);

        $this->relase_year = $_relase_year;
        $this->duration = $_duration;
}
}























