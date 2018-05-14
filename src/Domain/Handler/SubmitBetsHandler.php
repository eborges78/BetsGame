<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Domain\Handler;

use App\Domain\Repository\BetsRepositoryInterface;

class SubmitBetsHandler implements SubmitBetsHandlerInterface
{
    /**
     * @var BetsRepositoryInterface
     */
    private $repository;

    /**
     * SubmitBetsHandler constructor.
     * @param BetsRepositoryInterface $repository
     */
    public function __construct(BetsRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param int $id
     * @param array $datas
     * @return bool
     */
    public function handle(int $id, array $datas): bool
    {
        return $this->repository->insert($id, $datas);
    }
}
