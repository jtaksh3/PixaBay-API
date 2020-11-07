<?php namespace App\Controllers;

class Home extends BaseController
{
	private $apiObj = null;

	public function __construct()
	{
		$this->apiObj = new \App\Libraries\PixabayAPI();
	}
	
	public function index()
	{
		return view('SearchPixaBay');
	}

	public function GetAPI()
	{
		$body = file_get_contents('php://input');
		$body = json_decode($body, true);

		if($body['type'] == 'Image')
		{
			$output = $this->apiObj->getImages($body['keyword']);
		}
		else
		{
			$output = $this->apiObj->getVideos($body['keyword']);
		}

		exit(json_encode(array("api" => $output)));
	}

	//--------------------------------------------------------------------

}
