<?php

namespace App\Services;

use App\Repositories\FortuneRepository;
use GuzzleHttp\Client;
 
class FortuneService
{
	protected $fortune;
	private static $uri = 'https://gist.githubusercontent.com/nmcapule/01f6798831443fd61be44dbadda218b1/raw/03243082dd2faa694cf050c52f1cceb3fb8b4f6f/cookie%2520sayings';

	public function __construct(FortuneRepository $fortune)
	{
		$this->fortune = $fortune;
	}
 
	public function fortune()
	{
		return $this->fortune->random();
	}

	public function updateFortune($data, $id)
	{
		$data = $data->only(['text']);
		return $this->fortune->update($data, $id);
	}

	public function getSeeder()
	{
		$client = new Client();

		$response = $client->request('GET', self::$uri);
		$str = $response->getBody();

		$seeders = preg_split("/\r\n|\r|\n/", $str);

		return $seeders;
	}

}