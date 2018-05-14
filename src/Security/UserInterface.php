<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Security;

interface UserInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getName();
}