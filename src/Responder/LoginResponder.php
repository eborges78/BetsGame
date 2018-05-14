<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Responder;


use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class LoginResponder implements LoginResponderInterface
{
    /**
     * @var Environment
     */
    private $engine;

    /**
     * HomeResponder constructor.
     * @param Environment $engine
     */
    public function __construct(Environment $engine) {
        $this->engine = $engine;
    }

    /**
     * @param array $data
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function __invoke(array $data): Response
    {
        return new Response(
            $this->engine->render('login.html.twig', compact('data'))
        );
    }
}