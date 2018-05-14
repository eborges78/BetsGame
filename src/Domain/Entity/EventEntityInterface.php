<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Domain\Entity;

interface EventEntityInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @param int $id
     * @return \App\Domain\Entity\EventEntityInterface
     */
    public function setId(int $id): EventEntityInterface;

    /**
     * @return string
     */
    public function getTeam1Name(): string;

    /**
     * @param string $team1Name
     * @return \App\Domain\Entity\EventEntityInterface
     */
    public function setTeam1Name(string $team1Name): EventEntityInterface;

    /**
     * @return string
     */
    public function getTeam2Name(): string;

    /**
     * @param string $team2Name
     * @return \App\Domain\Entity\EventEntityInterface
     */
    public function setTeam2Name(string $team2Name): EventEntityInterface;

    /**
     * @return int
     */
    public function getTeam1Id(): int;

    /**
     * @param int $team1Id
     * @return \App\Domain\Entity\EventEntityInterface
     */
    public function setTeam1Id(int $team1Id): EventEntityInterface;

    /**
     * @return int
     */
    public function getTeam2Id(): int;

    /**
     * @param int $team2Id
     * @return \App\Domain\Entity\EventEntityInterface
     */
    public function setTeam2Id(int $team2Id): EventEntityInterface;

    /**
     * @return int
     */
    public function getTeam1Score(): int;

    /**
     * @param int $team1Score
     * @return \App\Domain\Entity\EventEntityInterface
     */
    public function setTeam1Score(int $team1Score): EventEntityInterface;

    /**
     * @return int
     */
    public function getTeam2Score(): int;

    /**
     * @param int $team2Score
     * @return \App\Domain\Entity\EventEntityInterface
     */
    public function setTeam2Score(int $team2Score): EventEntityInterface;

    /**
     * @return int
     */
    public function getTeam1FinalScore(): int;

    /**
     * @param int $team1FinalScore
     * @return \App\Domain\Entity\EventEntityInterface
     */
    public function setTeam1FinalScore(int $team1FinalScore): EventEntityInterface;

    /**
     * @return int
     */
    public function getTeam2FinalScore(): int;

    /**
     * @param int $team2FinalScore
     * @return \App\Domain\Entity\EventEntityInterface
     */
    public function setTeam2FinalScore(int $team2FinalScore): EventEntityInterface;

    /**
     * @return int
     */
    public function getWinnerId(): int;

    /**
     * @param int $winnerId
     * @return \App\Domain\Entity\EventEntityInterface
     */
    public function setWinnerId(int $winnerId): EventEntityInterface;

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime;

    /**
     * @param \DateTime $date
     * @return \App\Domain\Entity\EventEntityInterface
     */
    public function setDate(\DateTime $date): EventEntityInterface;

    /**
     * @return string
     */
    public function getState(): string;

    /**
     * @param string $state
     * @return \App\Domain\Entity\EventEntityInterface
     */
    public function setState(string $state): EventEntityInterface;

    /**
     * @return string
     */
    public function getUrl(): string;

    /**
     * @param string $url
     * @return \App\Domain\Entity\EventEntityInterface
     */
    public function setUrl(string $url): EventEntityInterface;
}