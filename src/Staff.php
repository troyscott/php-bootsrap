<?php

namespace Acme;


class Staff {

    protected $members = [];

    public function __construct($members = [])
    {
        $this->member[] = $members;
    }

    public function add(Person $person)
    {
        $this->members[] = $person;
    }

    public function members()
    {

        return $this->members;
    }
}
