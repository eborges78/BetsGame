<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Domain\Handler;

interface SubmitBetsHandlerInterface
{
    /**
     * @param int $id
     * @param array $datas
     * @return bool
     */
    public function handle(int $id, array $datas): bool;
}