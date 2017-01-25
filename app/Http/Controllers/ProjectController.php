<?php namespace laranaija\Http\Controllers;

use Input;
use laranaija\Feeder\Feed;
use laranaija\Http\Requests\ProjectRequest;
use laranaija\Mailers\ProjectMailer as Mailer;
use laranaija\Project;
use Redirect;
use Validator;

class ProjectController extends Controller {

  /**
   * holds the instance of laranaija\Mailers\ProjectMailer
   *
   * @var $mailer
   */
  protected $mailer;

  /**
   * Create a new ProjectController instance.
   *
   * @param  laranaija\Mailers\ProjectMailer $mailer
   * @return void
   */
  public function __construct(Mailer $mailer)
  {
    $this->mailer = $mailer;
  }

  /**
   * Show the Projects screen to the user.
   *
   * @return Response
   */
  public function index()
  {
    $url = 'https://laravel-news.com/feed/';
    $feeds = $this->getFeed($url);
    $projects = Project::where('approval_status', '=', 1 )->paginate(5);

    return view('projects.list')->withProject($projects)->withFeed($feeds);
  }

  /**
   * Show the RSS feed.
   * @param  string  $url
   * @return array $data
   */
  public function getFeed($url)
  {
    $this->laraUrl = $url;
    $rss = Feed::loadRss($this->laraUrl);
    $data = [];

    foreach ($rss->item as $item) {
      array_push($data, $item);
    }

    return $data;
  }

  /**
   * Store the Projects Information.
   *
   * @return RedirectResponse
   */
  public function store(ProjectRequest $request)
  {

    $project = new Project;
    $project->name            = $request->input('title');
    $project->url             = $request->input('url');
    $project->description     = $request->input('description');
    $project->categories      = $request->input('categories')[0];
    $project->email           = $request->input('from');
    $project->tags            = $request->input('tags')[0];
    $project->approval_status = $request->input('approval_status');
    $project->save();

    /*
     * Email Notification immediately Project is submitted
     */
    $this->mailer->submitProject();
    $success_msg = "Project Successfully Submitted, Approval happens within 24 hours";
    $request->session()->flash('approval-status', $success_msg);

    return view('projects.create');
  }

  /**
   * Show the Create Project Form.
   *
   * @return Response
   */
  public function create()
  {
    return view('projects.create');
  }
}
