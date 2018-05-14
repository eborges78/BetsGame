<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Domain\Entity;

use Doctrine\Common\Collections\ArrayCollection;

interface CompetitionPhaseInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @param int $id
     * @return CompetitionPhase
     */
    public function setId(int $id): CompetitionPhaseInterface;

    /**
     * @return string
     */
    public function getLabel(): string;

    /**
     * @param string $label
     * @return CompetitionPhase
     */
    public function setLabel(string $label): CompetitionPhaseInterface;

    /**
     * @return EventEntityInterface[]|ArrayCollection
     */
    public function getEvents(): ArrayCollection;

    /**
     * @param EventEntityInterface $event
     * @return CompetitionPhase
     */
    public function addEvent(EventEntityInterface $event): CompetitionPhaseInterface;
}