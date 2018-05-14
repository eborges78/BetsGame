<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Responder;

use App\Domain\Entity\CompetitionEntityInterface;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class HomeResponder implements HomeResponderInterface
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
     * @param CompetitionEntityInterface $competition
     * @param array $bets
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function __invoke(CompetitionEntityInterface $competition, array $bets): Response
    {
        return new Response(
            $this->engine->render('home.html.twig', compact('competition', 'bets'))
        );
    }
}
