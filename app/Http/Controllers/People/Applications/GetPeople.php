<?php



namespace App\Http\Controllers\People\Applications;

date_default_timezone_set('America/Guayaquil');
class GetPeople extends People
{
    public function getPeople($select = ['*'])
    {
        $this->initConsult($select);
        $this->peoples=$this->endConsult(2);
    }


    public function getPeopleById($select = ['*'],$id)
    {
        $this->initConsult($select);
        $this->sql->where('id',$id);
        $this->people=$this->endConsult(1);
    }

}
