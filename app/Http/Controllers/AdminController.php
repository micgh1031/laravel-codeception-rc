<?php namespace laranaija\Http\Controllers;

use laranaija\Developer;
use laranaija\Mailers\DeveloperMailer as DevMailer;
use laranaija\Mailers\ProjectMailer as ProMailer;
use laranaija\Project;
use Redirect;

class AdminController extends Controller {

  /**
   * holds the instance of laranaija\Mailers\ProjectMailer
   *
   * @var $promailer
   */
  protected $promailer;

  /**
   * holds the instance of laranaija\Mailers\DeveloperMailer
   *
   * @var $devmailer
   */
  protected $devmailer;

  /**
   * Create a new HomeController instance.
   *
   * @param  laranaija\Mailers\ProjectMailer   $promailer
   * @param  laranaija\Mailers\DeveloperMailer $devmailer
   * @return void
   */
  public function __construct(ProMailer $promailer, DevMailer $devmailer){

    $this->promailer = $promailer;
    $this->devmailer = $devmailer;
  }

  /**
   * Show the List of Projects to the Admin user.
   *
   * @return Response
   */
  public function index()
  {
    $allProjects = Project::all();
    return view('admin.projects-list')->withProject($allProjects);
  }

  /**
   * Show the List of Developers to the Admin user.
   *
   * @return Response
   */
  public function  showDevelopers()
  {
    $allDevelopers = Developer::all();
    return view('admin.developers-list')->withDeveloper($allDevelopers);
  }

  /**
   * Approve projects submitted by the Users.
   *
   * @return Response
   */
  public function approve($id)
  {
    $projects     = Project::find($id);
    $email        = $projects->email;
    $projectTitle = strtoupper($projects->name);
    $projects->approval_status = 1;
    $projects->save();

    /*
     * Send email to the User on Project Approval
     */
    $this->promailer->notifyUserOfApproval($email, $data = [], $projectTitle);
    $message = "Project " . $projects->name . " has been Approved Successfully";

    return Redirect::to('admin/projects/')->withMessage( $message );
  }

  /**
   * Approve developer profiles submitted by the Users.
   * @param  Integer $id
   * @return RedirectResponse
   */
  public function devapprove($id)
  {
    $developers = Developer::find($id);
    $email      = $developers->email;
    $codeName   = strtoupper($developers->code_name);
    $developers->approval_status = 1;
    $developers->save();

    /*
     * Send email to the User on Profile Approval
     */
    $this->devmailer->notifyDevOfApproval($email, $data = [], $codeName);
    $message = "Developer " . $developers->name . " has been Approved Successfully";

    return Redirect::to('admin/developers/')->withMessage($message);
  }
}
