<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Responder;

use Symfony\Component\HttpFoundation\RedirectResponse;

class RedirectResponder implements RedirectResponderInterface
{
    /**
     * @param string $url
     * @return RedirectResponse
     */
    public function __invoke(string $url): RedirectResponse
    {
        return new RedirectResponse($url);
    }
}
