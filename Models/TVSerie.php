<?php

require_once __DIR__ ."../Production.php";

class TVSerie extends Production {
    public $relase_year;
    public $seasons;

    public function __construct(string $_title, string $_language, int $_vote, string $_genre, int $_relase_year, int $_seasons) {

        parent::__construct($_title, $_language, $_vote, $_genre);
        $this->relase_year = $_relase_year;
        $this->seasons = $_seasons;
}
}






















