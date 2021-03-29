<?php


namespace viktigpetterr\bellan\restaurants;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class Restaurant
 * @package bellan\restaurants
 */
abstract class Restaurant implements RestaurantInterface
{

    protected Client $client;
    /**
     * @var string[] $menus
     */
    protected array $dishes;

    /**
     * Restaurant constructor.
     */
    public function __construct()
    {
        $this->client = new Client();
        $this->dishes = [];
    }

    /**
     * GET request for the html containing lunch dishes.
     *
     * @param string $url
     * @return string|null
     */
    protected function request(string $url): ?string
    {
        try
        {
            return $this->client->get($url)->getBody()->getContents();
        }
        catch (GuzzleException $e)
        {
            printf($e);

            return null;
        }
    }

}
