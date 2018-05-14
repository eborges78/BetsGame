<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Domain\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class CompetitionPhase implements CompetitionPhaseInterface
{
    /** @var int */
    private $id;

    /** @var string */
    private $label;

    /** @var ArrayCollection|EventEntityInterface[] */
    private $events;

    /**
     * CompetitionPhase constructor.
     */
    public function __construct()
    {
        $this->events = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return CompetitionPhase
     */
    public function setId(int $id): CompetitionPhaseInterface
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return CompetitionPhase
     */
    public function setLabel(string $label): CompetitionPhaseInterface
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return EventEntityInterface[]|ArrayCollection
     */
    public function getEvents(): ArrayCollection
    {
        return $this->events;
    }

    /**
     * @param EventEntityInterface $event
     * @return CompetitionPhase
     */
    public function addEvent(EventEntityInterface $event): CompetitionPhaseInterface
    {
        $this->events->add($event);
        return $this;
    }
}