<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Responder;

use Symfony\Component\HttpFoundation\Response;

interface LoginResponderInterface
{
    /**
     * @param array $data
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function __invoke(array $data): Response;
}