<?php



namespace App\Http\Controllers\People\Applications;

date_default_timezone_set('America/Guayaquil');
class GetPeople extends People
{
    public function getPeople($select = ['*'])
    {
        $this->initConsult($select);
        $this->sql->where('fecha_extra', '=', date('Y-m-d'));
        $this->peoples=$this->endConsult(2);
    }

}
