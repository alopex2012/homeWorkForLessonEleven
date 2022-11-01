<?php

namespace App;

class Programmer extends Employee
{
    private $langs = [];

    public function setLangs($langs)
    {
        for ($i = 0; $i < count($langs); $i++) {
            $this->langs[] = $langs[$i];
        }
    }

    public function getLangs()
    {
        return $this->langs;
    }
}
