<?php

namespace App\Util;

use Illuminate\Database\Eloquent\Builder;

abstract class ORM
{
    public $sql;




    public function endConsult($type = 1, $limit = 0, $get = null)
    {
        if ($limit > 0)
            $this->sql->limit($limit);
        if ($type == 1)
            return $this->sql->first();
        if($type==2)
            return $this->sql->get($get);

    }

    public function initConsult($select = ['*'])
    {
        $this->sql = $this->model::select($select);
    }
}
