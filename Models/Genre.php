<?php

class Genre
{
    public $gen_type;
    


    public function __construct($gen_type,)
    {
        $this->gen_type = $gen_type;
        
    }

    public function __toString() {

        return $this->gen_type;
    }
}


























