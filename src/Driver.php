<?php

namespace App;

class Driver extends Employee
{
    private $experience;
    private $category = [];

    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    public function getExperience()
    {
        return $this->experience;
    }

    public function setCategory($category)
    {
        for ($i = 0; $i < count($category); $i++) {
            $this->category[] = $category[$i];
        }
    }

    public function getCategory()
    {
        return $this->category;
    }
}
