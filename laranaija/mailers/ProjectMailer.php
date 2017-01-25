<?php namespace laranaija\Mailers;

class ProjectMailer extends Mailer{

  /**
   * Send Email to the Admin when a new user submits a Project
   * @return void
   */
  public function submitProject()
  {
    $user = 'prosperotemuyiwa@gmail.com';
    $view = 'emails.project';
    $data = [];
    $subject = 'New Project Seeking Approval';

    return $this->sendTo($user, $subject, $view, $data);
  }

  /**
   * Send an email to the user notifying him of the approval by the Admin
   * @param  $email
   * @param  $data
   * @param  string $projectTitle
   * @return void
   */
  public function notifyUserOfApproval($email, $data, $projectTitle = 'NOW')
  {
    $userEmail = $email;
    $view      = 'emails.projectapproval';
    $data      = $data;
    $subject   = $projectTitle . ' APPROVED ON LARANAIJA';

    return $this->sendTo($userEmail, $subject, $view, $data);
  }
}