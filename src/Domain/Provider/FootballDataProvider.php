<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Domain\Provider;

use App\Exception\ApiNotFoundException;
use GuzzleHttp\Psr7\Request;
use Http\Client\HttpClient;
use Psr\Http\Message\ResponseInterface;

class FootballDataProvider implements ProviderInterface
{
    /** @var HttpClient */
    private $client;

    /** @var string $providerId */
    private $providerId;

    /** @var string */
    private $providerEndPoint;

    /**
     * AbstractProvider constructor.
     * @param HttpClient $client
     * @param string $providerId
     * @param string $providerEndPoint
     */
    public function __construct(HttpClient $client, string $providerId, string $providerEndPoint)
    {
        $this->client = $client;
        $this->providerId = $providerId;
        $this->providerEndPoint = $providerEndPoint;
    }

    /**
     * @param string $uri
     * @param array $headers
     * @return ResponseInterface
     * @throws \App\Exception\ApiNotFoundException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    private function request(string $uri, array $headers = []): ResponseInterface
    {
        if (!empty($this->providerId)) {
            $headers['X-Application-ID'] = $this->providerId;
        }

        // Accept-Language
        $headers['Accept-Language'] = 'fr-fr';

        // Application
        $headers['Content-type'] = 'application/x-www-form-urlencoded';

        $request = new Request('GET', $this->providerEndPoint.ltrim($uri, '/'), $headers);
        $response = $this->client->sendRequest($request);
        if ($response->getStatusCode() !== 200) {
            throw new ApiNotFoundException(sprintf('%s not found', $this->providerEndPoint));
        }
        return $response;
    }

    /**
     * Load informations for Competition
     * @param int $competitionId
     *
     * @return array
     * @throws ApiNotFoundException
     * @throws \Http\Client\Exception
     */
    public function loadCompetitionInfo(int $competitionId): array
    {
        $response = $this->request(sprintf('/competition/%d', $competitionId));
        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @param int $sportId
     * @param int $competitionId
     *
     * @return array
     * @throws ApiNotFoundException
     * @throws \Http\Client\Exception
     */
    public function loadEvents(int $sportId, int $competitionId): array
    {
        $dateFrom = '2017-09-01';
        $path = '/sporting-event/sport/%d/competition/%d/date-from/%s';
        $response = $this->request(sprintf($path, $sportId, $competitionId, $dateFrom));
        return json_decode($response->getBody()->getContents(), true);
    }
}
