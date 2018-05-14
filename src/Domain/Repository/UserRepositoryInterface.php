<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Domain\Repository;

use App\Security\User;

interface UserRepositoryInterface
{
    /**
     * @param string $username
     * @return User|null
     */
    public function findByUsername(string $username): ?User;
}