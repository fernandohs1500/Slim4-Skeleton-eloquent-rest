<?php

namespace App\Application\Repositories;


use App\Application\Models\Pleito;

class PleitoRepositoryImpl implements PleitoRepository
{

    private $pleitoModel;

    public function __construct(Pleito $pleito)
    {
        $this->pleitoModel = $pleito;
    }

    public function listAll() {
        return $this->pleitoModel::all()->toArray();
    }
}