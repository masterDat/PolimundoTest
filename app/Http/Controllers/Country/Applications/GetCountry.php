<?php



namespace App\Http\Controllers\Country\Applications;

date_default_timezone_set('America/Guayaquil');
class GetCountry extends Country
{
    public function getCountry($select = ['*'])
    {
        $this->initConsult($select);
        $this->countries=$this->endConsult(2);
    }

    public function getCountryById($select = ['*'],$id)
    {
        $this->initConsult($select);
        $this->sql->where('id',$id);
        $this->country=$this->endConsult(1);
    }

}
