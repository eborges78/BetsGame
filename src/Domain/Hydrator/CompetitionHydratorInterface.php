<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Domain\Hydrator;

use App\Domain\Entity\CompetitionEntityInterface;

interface CompetitionHydratorInterface
{
    /**
     * @param array $data
     * @return CompetitionEntityInterface
     */
    public function hydrate(array $data): CompetitionEntityInterface;
}