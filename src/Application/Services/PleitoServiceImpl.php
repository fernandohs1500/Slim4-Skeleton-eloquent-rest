<?php

namespace App\Application\Services;

use App\Application\Repositories\PleitoRepository;

class PleitoServiceImpl implements PleitoService
{
    private $pleitoRepository;

    public function __construct(PleitoRepository $pleitoRepository)
    {
        $this->pleitoRepository = $pleitoRepository;
    }

    public function listAll() {
       return $this->pleitoRepository->listAll();
    }

}