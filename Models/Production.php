<?php

class Production
{

    // variabili d'istanza
    public $title;
    public $language;
    public $vote;

    // metodi
    public function setVote($_vote)
    {
        if (is_numeric($_vote) && $_vote > 0 && $_vote <= 10) {
            $this->vote = $_vote;
        } else {
            var_dump('Il Voto non è corretto!');

        }
    }

    public function setLanguage($_language)
    {
        if (strlen($_language) === 3) {
            $this->language = $_language;
            // var_dump($_language);
        }
    }

    // construct
    public function __construct(string $_title, string $_language, int $_vote)
    {

        $this->title = $_title;
        $this->setLanguage(strtoupper($_language));
        $this->setVote($_vote);
    }
}