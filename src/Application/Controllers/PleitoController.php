<?php
declare(strict_types=1);

namespace App\Application\Controllers;

use App\Application\Controllers\Action;
use App\Application\Services\PleitoService;
use Psr\Log\LoggerInterface;

class PleitoController extends Action
{

    private $pleitoService;

    public function __construct(LoggerInterface $logger, PleitoService $pleitoService)
    {
        parent::__construct($logger);

        $this->pleitoService = $pleitoService;
    }

    /**
     * {@inheritdoc}
     */
    protected function action()
    {
        $lstPleito = $this->pleitoService->listAll();

        var_dump($lstPleito); die;

        $this->logger->info("Pleito list was viewed.");

        return $this->respondWithData($lstPleito);
    }
}
