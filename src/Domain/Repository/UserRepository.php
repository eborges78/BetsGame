<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Domain\Repository;


use App\Domain\Hydrator\UserHydratorInterface;
use App\Security\User;
use Doctrine\DBAL\Connection;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @var Connection
     */
    private $connection;
    /**
     * @var UserHydratorInterface
     */
    private $hydrator;

    /**
     * UserRepository constructor.
     * @param Connection $connection
     * @param UserHydratorInterface $hydrator
     */
    public function __construct(
        Connection $connection,
        UserHydratorInterface $hydrator
    ) {
        $this->connection = $connection;
        $this->hydrator = $hydrator;
    }

    /**
     * @param string $username
     * @return User|null
     */
    public function findByUsername(string $username): ?User
    {
        $querybuilder = $this
            ->connection
            ->createQueryBuilder();

        $data = $querybuilder
            ->select('*')
            ->from('users')
            ->where('username = :username')
            ->setParameter(':username', $username)
            ->setMaxResults(1)
            ->execute()
            ->fetch(\PDO::FETCH_ASSOC);

        if ($data !== false) {
            return $this->hydrator->hydrate($data);
        }

        return null;
    }
}
