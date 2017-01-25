<?php namespace laranaija\Http\Controllers;

use Input;
use laranaija\Developer;
use laranaija\Feeder\Feed;
use laranaija\Http\Requests\DeveloperRequest;
use laranaija\Mailers\DeveloperMailer as Mailer;
use Redirect;
use Validator;

class DeveloperController extends Controller {

	/**
   * holds the instance of laranaija\Mailers\DeveloperMailer
   *
   * @var $mailer
   */
	protected $mailer;

	/**
   * holds laravel news feed Url
   *
   * @var $laraUrl
   */
	protected $laraUrl;

	/**
   * Create a new DeveloperController instance.
   *
   * @param  laranaija\Mailers\DeveloperMailer $mailer
   * @return void
   */
	public function __construct(Mailer $mailer)
	{
		$this->mailer = $mailer;
	}

	/**
   * Show the Developers screen to the user.
   *
   * @return void
   */
	public function index()
	{
		$url   			 = 'https://laravel-news.com/feed/';
		$feeds 			 = $this->getFeed($url);
		$developers  =  Developer::where('approval_status', '=', 1 )->paginate(3);

		return view('developers.list')->withDeveloper($developers)->withFeed($feeds);
	}

	/**
   * Show the RSS feed.
   * @param  string  $url
   * @return array $data
   */
	public function getFeed($url){
    $this->laraUrl = $url;
    $rss = Feed::loadRss($this->laraUrl);
    $data = [];

    foreach ($rss->item as $item) {
      array_push($data, $item);
    }

    return $data;
  }

  /**
   * Store the Developers Profile Information.
   *
   * @return RedirectResponse
   */
	public function store(DeveloperRequest $request)
  {
		$developer = new Developer;
		$developer->name           = $request->input('name');
		$developer->url            = $request->input('url');
		$developer->bio    		   	 = $request->input('description');
		$developer->email          = $request->input('email');
		$developer->work_place     = $request->input('work_place');
		$developer->code_name      = $request->input('codename');
		$developer->tags           = $request->input('tags');
		$developer->save();

		/*
     * Email Notification immediately Developer Profile is submitted
     */
		$this->mailer->submitProfile();

		$developer_msg = "Naija Developer's Details Successfully Submitted, Approval happens within 24hrs";
    $request->session()->flash('approval-status', $developer_msg);

    return view('developers.create');
	}

	/**
   * Show the Create Developer Profile Form.
   *
   * @return Response
   */
	public function create(){
		return view('developers.create');
	}
}
