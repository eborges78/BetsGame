<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Domain\Hydrator;

use App\Domain\Entity\CompetitionPhaseInterface;

interface PhaseHydratorInterface
{
    /**
     * @param array $data
     * @return CompetitionPhaseInterface
     */
    public function hydrate(array $data): CompetitionPhaseInterface;
}
