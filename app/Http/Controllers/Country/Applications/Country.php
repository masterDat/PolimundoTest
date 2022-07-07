<?php

namespace App\Http\Controllers\Country\Applications;

use App\Utils\ORM;

Abstract class Country extends ORM
{
    public $country = null;
    public $countries = [];
    public $countryStatus = false;
    public $model;

    public function __construct($data = [])
    {
        $this->logisticOrder = $data;
        $this->model = "App\Models\Country";

    }

    public function initConsult($select = ['*'])
    {
        $this->sql = $this->model::select($select);
    }
}
