<?php

namespace App;

class Student extends User
{
    private $course;

    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function addOneYear()
    {
        $this->age++;
    }
}
