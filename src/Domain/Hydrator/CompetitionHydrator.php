<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Domain\Hydrator;


use App\Domain\Entity\CompetitionEntity;
use App\Domain\Entity\CompetitionEntityInterface;

class CompetitionHydrator implements CompetitionHydratorInterface
{
    /**
     * @var PhaseHydratorInterface
     */
    private $phaseHydrator;

    /**
     * CompetitionHydrator constructor.
     * @param PhaseHydratorInterface $phaseHydrator
     */
    public function __construct(PhaseHydratorInterface $phaseHydrator)
    {
        $this->phaseHydrator = $phaseHydrator;
    }

    /**
     * @param array $data
     * @return CompetitionEntityInterface
     */
    public function hydrate(array $data): CompetitionEntityInterface
    {
        $entity = new CompetitionEntity();
        $entity->setId((int)$data['id']);
        $entity->setLogo((string)$data['logo']);
        $entity->setLabel((string)$data['label']);
        foreach ($data['phases'] as $phase) {
            $entity->addPhase($this->phaseHydrator->hydrate($phase));
        }

        return $entity;
    }
}
