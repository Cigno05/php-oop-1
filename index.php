<?php

class production
{

    // variabili d'istanza
    public $title;
    public $language;
    public $vote;

    // metodi 

    public function setVote($_vote)
    {
        if (is_numeric($_vote) && $_vote > 0 && $_vote < 10) {
            $this->vote = $_vote;
        } else {
            var_dump('Il Voto non è corretto!');

        }
    }


    // construct

    public function __construct(string $_title, string $_language, int $_vote) {

        $this->title = $_title;
        $this->language = $_language;
        $this->setVote($_vote);
    }
}










































































