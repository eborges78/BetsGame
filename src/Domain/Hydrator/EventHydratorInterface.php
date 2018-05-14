<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Domain\Hydrator;

use App\Domain\Entity\EventEntityInterface;

interface EventHydratorInterface
{
    /**
     * @param array $data
     * @return EventEntityInterface
     */
    public function hydrate(array $data): EventEntityInterface;
}
