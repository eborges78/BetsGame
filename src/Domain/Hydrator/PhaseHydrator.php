<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Domain\Hydrator;


use App\Domain\Entity\CompetitionPhase;
use App\Domain\Entity\CompetitionPhaseInterface;

class PhaseHydrator implements PhaseHydratorInterface
{
    /**
     * @var EventHydratorInterface
     */
    private $eventHydrator;

    /**
     * PhaseHydrator constructor.
     * @param EventHydratorInterface $eventHydrator
     */
    public function __construct(EventHydratorInterface $eventHydrator)
    {
        $this->eventHydrator = $eventHydrator;
    }

    /**
     * @param array $data
     * @return CompetitionPhaseInterface
     */
    public function hydrate(array $data): CompetitionPhaseInterface
    {
        $entity = new CompetitionPhase();
        $entity->setId((int)$data['id']);
        $entity->setLabel((string)$data['label']);
        foreach($data['events'] as $event) {
            $entity->addEvent($this->eventHydrator->hydrate($event));
        }

        return $entity;
    }
}