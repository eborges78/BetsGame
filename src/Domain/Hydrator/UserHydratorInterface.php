<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Domain\Hydrator;

use App\Security\User;
use Symfony\Component\Security\Core\User\UserInterface;

interface UserHydratorInterface
{
    /**
     * @param array $data
     * @return User
     */
    public function hydrate(array $data): UserInterface;
}