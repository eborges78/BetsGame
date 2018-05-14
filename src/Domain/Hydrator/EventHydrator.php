<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Domain\Hydrator;


use App\Domain\Entity\EventEntity;
use App\Domain\Entity\EventEntityInterface;

class EventHydrator implements EventHydratorInterface
{
    /**
     * @param array $data
     * @return EventEntityInterface
     */
    public function hydrate(array $data): EventEntityInterface
    {
        $entity = new EventEntity();
        $entity->setId((int)$data['id']);
        $entity->setDate(new \DateTime((string)$data['date']));
        $entity->setState((string)$data['state']);
        $entity->setTeam1FinalScore((int)$data['gameScoreTeam1']);
        $entity->setTeam1Id((int)$data['team1Id']);
        $entity->setTeam1Score((int)$data['scoreTeam1']);
        $entity->setTeam1Name((string)$data['team1Label']);
        $entity->setTeam1Logo((string)$data['team1Logo']);
        $entity->setTeam2FinalScore((int)$data['gameScoreTeam2']);
        $entity->setTeam2Id((int)$data['team2Id']);
        $entity->setTeam2Score((int)$data['scoreTeam2']);
        $entity->setTeam2Name((string)$data['team2Label']);
        $entity->setTeam2Logo((string)$data['team2Logo']);
        $entity->setWinnerId((int)$data['winner']);
        $entity->setUrl((string)$data['url']);
        return $entity;
    }
}