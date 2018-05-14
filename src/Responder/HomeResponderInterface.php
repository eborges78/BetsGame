<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Responder;

use App\Domain\Entity\CompetitionEntityInterface;
use Symfony\Component\HttpFoundation\Response;

interface HomeResponderInterface
{
    /**
     * @param CompetitionEntityInterface $competitionEntity
     * @param array $bets
     * @return Response
     */
    public function __invoke(CompetitionEntityInterface $competitionEntity, array $bets): Response;
}