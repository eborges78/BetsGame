<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Domain\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class CompetitionEntity implements CompetitionEntityInterface
{
    /** @var int */
    private $id;

    /** @var string */
    private $label;

    /** @var string */
    private $logo;

    /** @var ArrayCollection|CompetitionPhaseInterface[] */
    private $phases;

    /**
     * CompetitionEntity constructor.
     */
    public function __construct()
    {
        $this->phases = new ArrayCollection();
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
     * @return CompetitionEntityInterface
     */
    public function setId(int $id): CompetitionEntityInterface
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
     * @return CompetitionEntityInterface
     */
    public function setLabel(string $label): CompetitionEntityInterface
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogo(): string
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     * @return CompetitionEntityInterface
     */
    public function setLogo(string $logo): CompetitionEntityInterface
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getPhases(): ArrayCollection
    {
        return $this->phases;
    }

    /**
     * @param CompetitionPhaseInterface $phase
     * @return CompetitionEntityInterface
     */
    public function addPhase(CompetitionPhaseInterface $phase): CompetitionEntityInterface
    {
        $this->phases->add($phase);
        return $this;
    }
}