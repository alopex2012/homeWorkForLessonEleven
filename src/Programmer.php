<?php

namespace App;

class Programmer extends Employee
{
    private $langs = [];

    public function setLangs($langs)
    {
        $this->langs = $langs;
    }

    public function getLangs()
    {
        return $this->langs;
    }
}
