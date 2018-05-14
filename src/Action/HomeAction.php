<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Action;

use App\Domain\DataTransformer\DataTransformerInterface;
use App\Domain\Hydrator\CompetitionHydratorInterface;
use App\Domain\Provider\ProviderInterface;
use App\Domain\Repository\BetsRepositoryInterface;
use App\Responder\HomeResponderInterface;
use App\Security\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\Security;

/**
 * Class HomeAction
 *
 * @Route("/", name="home.action")
 * @Method({"GET"})
 *
 * @package App\Action
 *
 */
class HomeAction
{
    /** @var HomeResponderInterface $responder */
    private $responder;
    /**
     * @var DataTransformerInterface
     */
    private $dataTransformer;
    /**
     * @var ProviderInterface
     */
    private $provider;
    /**
     * @var CompetitionHydratorInterface
     */
    private $competitionHydrator;
    /**
     * @var Security
     */
    private $security;
    /**
     * @var BetsRepositoryInterface
     */
    private $betsRepository;

    /**
     * HomeAction constructor.
     *
     * @param HomeResponderInterface $responder
     * @param DataTransformerInterface $dataTransformer
     * @param ProviderInterface $provider
     * @param CompetitionHydratorInterface $competitionHydrator
     * @param Security $security
     * @param BetsRepositoryInterface $betsRepository
     */
    public function __construct(
        HomeResponderInterface $responder,
        DataTransformerInterface $dataTransformer,
        ProviderInterface $provider,
        CompetitionHydratorInterface $competitionHydrator,
        Security $security,
        BetsRepositoryInterface $betsRepository
    ) {
        $this->responder = $responder;
        $this->dataTransformer = $dataTransformer;
        $this->provider = $provider;
        $this->competitionHydrator = $competitionHydrator;
        $this->security = $security;
        $this->betsRepository = $betsRepository;
    }

    /**
     * @inheritdoc
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function __invoke()
    {
        /* Transform and hydrate data from API REST */
        $competition = $this->competitionHydrator->hydrate(
            $this->dataTransformer->transform(
                $this->provider->loadEvents(1, 1811)
            )
        );

        /** @var UserInterface $user */
        $user = $this->security->getUser();
        $bets = $this->betsRepository->getBetsByUserId(
            $user->getId()
        );

        $responder = $this->responder;
        return $responder($competition, $bets);
    }
}
