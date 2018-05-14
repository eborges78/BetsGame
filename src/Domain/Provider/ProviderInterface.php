<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Domain\Provider;

interface ProviderInterface
{
    /**
     * @param int $competitionId
     * @return array
     */
    public function loadCompetitionInfo(int $competitionId): array;

    /**
     * @param int $sportId
     * @param int $competitionId
     * @return array
     */
    public function loadEvents(int $sportId, int $competitionId): array;
}