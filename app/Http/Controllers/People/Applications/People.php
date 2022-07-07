<?php

namespace App\Http\Controllers\People\Applications;

use App\Utils\ORM;

Abstract class People extends ORM
{
    public $people = null;
    public $peoples = [];
    public $peopleStatus = false;
    public $model;

    public function __construct($data = [])
    {
        $this->people = $data;
        $this->model = "App\Models\People";

    }

    public function initConsult($select = ['*'])
    {
        $this->sql = $this->model::select($select);
    }
}
