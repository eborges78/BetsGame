<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Action;

use App\Domain\Handler\SubmitBetsHandlerInterface;
use App\Responder\RedirectResponderInterface;
use App\Security\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Security;

/**
 * Class SubmitAction
 *
 * @Route("/save", name="home.save")
 * @Method({"POST"})
 *
 * @package App\Action
 */
class SubmitAction
{
    /**
     * @var RouterInterface
     */
    private $router;
    /**
     * @var RedirectResponderInterface
     */
    private $responder;
    /**
     * @var Security
     */
    private $security;
    /**
     * @var SubmitBetsHandlerInterface
     */
    private $betsHandler;

    /**
     * SubmitAction constructor.
     * @param RouterInterface $router
     * @param RedirectResponderInterface $responder
     * @param SubmitBetsHandlerInterface $betsHandler
     * @param Security $security
     */
    public function __construct(
        RouterInterface $router,
        RedirectResponderInterface $responder,
        SubmitBetsHandlerInterface $betsHandler,
        Security $security
    ) {
        $this->router = $router;
        $this->responder = $responder;
        $this->security = $security;
        $this->betsHandler = $betsHandler;
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function __invoke(Request $request): RedirectResponse
    {
        /** @var UserInterface $user */
        $user = $this->security->getUser();
        $this->betsHandler->handle($user->getId(), $request->request->all());

        $responder = $this->responder;
        return $responder($this->router->generate('home.action'));
    }
}
