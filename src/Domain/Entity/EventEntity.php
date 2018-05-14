<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Domain\Entity;

class EventEntity implements EventEntityInterface
{
    /** @var int */
    private $id;

    /** @var string */
    private $team1Name;

    /** @var string */
    private $team2Name;

    /** @var int */
    private $team1Id;

    /** @var int */
    private $team2Id;

    /** @var string */
    private $team1Logo;

    /** @var string */
    private $team2Logo;

    /** @var int */
    private $team1Score;

    /** @var int */
    private $team2Score;

    /** @var int */
    private $team1FinalScore;

    /** @var int */
    private $team2FinalScore;

    /** @var int */
    private $winnerId;

    /** @var \DateTime */
    private $date;

    /** @var string */
    private $state;

    /** @var string */
    private $url;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return EventEntityInterface
     */
    public function setId(int $id): EventEntityInterface
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTeam1Name(): string
    {
        return $this->team1Name;
    }

    /**
     * @param string $team1Name
     * @return EventEntityInterface
     */
    public function setTeam1Name(string $team1Name): EventEntityInterface
    {
        $this->team1Name = $team1Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getTeam2Name(): string
    {
        return $this->team2Name;
    }

    /**
     * @param string $team2Name
     * @return EventEntityInterface
     */
    public function setTeam2Name(string $team2Name): EventEntityInterface
    {
        $this->team2Name = $team2Name;
        return $this;
    }

    /**
     * @return int
     */
    public function getTeam1Id(): int
    {
        return $this->team1Id;
    }

    /**
     * @param int $team1Id
     * @return EventEntityInterface
     */
    public function setTeam1Id(int $team1Id): EventEntityInterface
    {
        $this->team1Id = $team1Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getTeam2Id(): int
    {
        return $this->team2Id;
    }

    /**
     * @param int $team2Id
     * @return EventEntityInterface
     */
    public function setTeam2Id(int $team2Id): EventEntityInterface
    {
        $this->team2Id = $team2Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getTeam1Score(): int
    {
        return $this->team1Score;
    }

    /**
     * @param int $team1Score
     * @return EventEntityInterface
     */
    public function setTeam1Score(int $team1Score): EventEntityInterface
    {
        $this->team1Score = $team1Score;
        return $this;
    }

    /**
     * @return int
     */
    public function getTeam2Score(): int
    {
        return $this->team2Score;
    }

    /**
     * @param int $team2Score
     * @return EventEntityInterface
     */
    public function setTeam2Score(int $team2Score): EventEntityInterface
    {
        $this->team2Score = $team2Score;
        return $this;
    }

    /**
     * @return int
     */
    public function getTeam1FinalScore(): int
    {
        return $this->team1FinalScore;
    }

    /**
     * @param int $team1FinalScore
     * @return EventEntityInterface
     */
    public function setTeam1FinalScore(int $team1FinalScore): EventEntityInterface
    {
        $this->team1FinalScore = $team1FinalScore;
        return $this;
    }

    /**
     * @return int
     */
    public function getTeam2FinalScore(): int
    {
        return $this->team2FinalScore;
    }

    /**
     * @param int $team2FinalScore
     * @return EventEntityInterface
     */
    public function setTeam2FinalScore(int $team2FinalScore): EventEntityInterface
    {
        $this->team2FinalScore = $team2FinalScore;
        return $this;
    }

    /**
     * @return int
     */
    public function getWinnerId(): int
    {
        return $this->winnerId;
    }

    /**
     * @param int $winnerId
     * @return EventEntityInterface
     */
    public function setWinnerId(int $winnerId): EventEntityInterface
    {
        $this->winnerId = $winnerId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return EventEntityInterface
     */
    public function setDate(\DateTime $date): EventEntityInterface
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return EventEntityInterface
     */
    public function setState(string $state): EventEntityInterface
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return EventEntityInterface
     */
    public function setUrl(string $url): EventEntityInterface
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getTeam1Logo(): string
    {
        return $this->team1Logo;
    }

    /**
     * @param string $team1Logo
     * @return EventEntityInterface
     */
    public function setTeam1Logo(string $team1Logo): EventEntityInterface
    {
        $this->team1Logo = $team1Logo;
        return $this;
    }

    /**
     * @return string
     */
    public function getTeam2Logo(): string
    {
        return $this->team2Logo;
    }

    /**
     * @param string $team2Logo
     * @return EventEntityInterface
     */
    public function setTeam2Logo(string $team2Logo): EventEntityInterface
    {
        $this->team2Logo = $team2Logo;
        return $this;
    }
}