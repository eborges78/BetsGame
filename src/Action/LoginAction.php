<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Action;
use App\Responder\LoginResponderInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 *
 * @Route("/login", name="home.login")
 * @Method({"GET", "POST"})
 *
 * Class LoginAction
 * @package App\Action
 */
class LoginAction
{
    /**
     * @var AuthenticationUtils
     */
    private $authenticationUtils;
    /**
     * @var LoginResponderInterface
     */
    private $responder;

    /**
     * LoginAction constructor.
     * @param LoginResponderInterface $responder
     * @param AuthenticationUtils $authenticationUtils
     */
    public function __construct(
        LoginResponderInterface $responder,
        AuthenticationUtils $authenticationUtils
    ) {
        $this->authenticationUtils = $authenticationUtils;
        $this->responder = $responder;
    }

    /**
     * @param Request $request
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function __invoke(Request $request): Response
    {
        // get the login error if there is one
        $error = $this->authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $this->authenticationUtils->getLastUsername();

        $responder = $this->responder;
        return $responder([
            'last_username' => $lastUsername,
            'error'         => $error
        ]);
    }
}
