<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Responder;

use Symfony\Component\HttpFoundation\RedirectResponse;

interface RedirectResponderInterface
{
    /**
     * @param string $url
     * @return RedirectResponse
     */
    public function __invoke(string $url): RedirectResponse;
}