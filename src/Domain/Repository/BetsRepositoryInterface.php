<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Domain\Repository;

interface BetsRepositoryInterface
{
    /**
     * @param int $id
     * @return array
     */
    public function getBetsByUserId(int $id): array;

    /**
     * @param int $id
     * @param array $datas
     * @return bool
     */
    public function insert(int $id, array $datas): bool;
}