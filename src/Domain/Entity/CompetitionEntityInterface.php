<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Domain\Entity;

use Doctrine\Common\Collections\ArrayCollection;

interface CompetitionEntityInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @param int $id
     * @return \App\Domain\Entity\CompetitionEntityInterface
     */
    public function setId(int $id): CompetitionEntityInterface;

    /**
     * @return string
     */
    public function getLabel(): string;

    /**
     * @return string
     */
    public function getLogo(): string;

    /**
     * @param string $logo
     * @return CompetitionEntityInterface
     */
    public function setLogo(string $logo): CompetitionEntityInterface;

    /**
     * @param string $label
     * @return \App\Domain\Entity\CompetitionEntityInterface
     */
    public function setLabel(string $label): CompetitionEntityInterface;

    /**
     * @return ArrayCollection
     */
    public function getPhases(): ArrayCollection;

    /**
     * @param CompetitionPhaseInterface $phase
     * @return \App\Domain\Entity\CompetitionEntityInterface
     */
    public function addPhase(CompetitionPhaseInterface $phase): CompetitionEntityInterface;
}