<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Domain\Hydrator;

use App\Security\User;
use Symfony\Component\Security\Core\User\UserInterface;

class UserHydrator implements UserHydratorInterface
{
    /**
     * @param array $data
     * @return UserInterface
     */
    public function hydrate(array $data): UserInterface
    {
        $id = (int)$data['id'];
        $name = (string)$data['name'];
        $username = (string)$data['username'];
        $password = (string)$data['password'];
        return new User(
            $username,
            $password,
            '',
            ['ROLE_USER'],
            $id,
            $name
        );
    }
}
