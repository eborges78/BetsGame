<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Domain\Repository;


use Doctrine\DBAL\Connection;

class BetsRepository implements BetsRepositoryInterface
{
    /**
     * @var Connection
     */
    private $connection;

    /**
     * UserRepository constructor.
     * @param Connection $connection
     */
    public function __construct(
        Connection $connection
    ) {
        $this->connection = $connection;
    }

    /**
     * @param int $id
     * @return array
     */
    public function getBetsByUserId(int $id): array
    {
        $querybuilder = $this
            ->connection
            ->createQueryBuilder();

        $datas = $querybuilder
            ->select('*')
            ->from('bets')
            ->where('userId = :userId')
            ->setParameter(':userId', $id)
            ->execute()
            ->fetchAll(\PDO::FETCH_ASSOC);

        if ($datas !== false) {
            $tmp = [];
            foreach( $datas as $data) {
                $tmp[$data['eventId']] = $data;
            }
            return $tmp;
        }

        return [];
    }

    /**
     * @param int $id
     * @param array $datas
     * @return bool
     */
    public function insert(int $id, array $datas): bool
    {
        $querybuilder = $this
            ->connection
            ->createQueryBuilder();

        $tmp = [];
        foreach ($datas as $key => $value) {
            if (0 === strpos($key, 'event')) {
                $eventId = sscanf($key, 'event_%d_');
                if (\count($eventId) > 0) {
                    $eventId = @current($eventId);
                }
                if (!isset($tmp[$eventId])) {
                    $tmp[$eventId] = [
                        'eventId' => 0,
                        'score1' => 0,
                        'score2' => 0,
                        'winnerId' => 0
                    ];
                }
                $tmp[$eventId]['eventId'] = $eventId;
                if (false !== strpos($key, 'score1')) {
                    $tmp[$eventId]['score1'] = $value;
                } elseif (false !== strpos($key, 'score2')) {
                    $tmp[$eventId]['score2'] = $value;
                }elseif (false !== strpos($key, 'winner')) {
                    $tmp[$eventId]['winnerId'] = $value;
                }
            }
        }

        // save in DB
        foreach ($tmp as $event) {
            $querybuilder
                ->delete('bets')
                ->where('userId = :userId and eventId = :eventId')
                ->setParameters([
                    ':userId' => $id,
                    ':eventId' => $event['eventId'],
                ])
                ->execute();

            $querybuilder
                ->insert('bets')
                ->values([
                    'userId' => ':userId',
                    'eventId' => ':eventId',
                    'score1' => ':score1',
                    'score2' => ':score2',
                    'winnerId' => ':winnerId'
                ])
                ->setParameters([
                    ':userId' => $id,
                    ':eventId' => $event['eventId'],
                    ':score1' => $event['score1'],
                    ':score2' => $event['score2'],
                    ':winnerId' => $event['winnerId']
                ])
                ->execute();
        }
        return true;
    }
}