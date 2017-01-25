<?php namespace laranaija\Mailers;

class DeveloperMailer extends Mailer{

    /**
     * Send email to the Admin When a User submits a new Profile
     * @return void
     */
    public function submitProfile(){

      $user = 'prosperotemuyiwa@gmail.com';
      $view = 'emails.developer';
      $data = [];
      $subject = 'New Developer Profile Seeking Approval';

      return $this->sendTo($user, $subject, $view, $data);
    }

    /**
     * Send Email to the User when his developer profile has been approved
     * @param  $email
     * @param  $data
     * @param  $devCodeName
     * @return void
     */
    public function notifyDevOfApproval($email, $data, $devCodeName){

      $userEmail = $email;
      $view      = 'emails.devapproval';
      $data      = $data;
      $subject   = $devCodeName . ', NOW FEATURED ON LARANAIJA';

      return $this->sendTo($userEmail, $subject, $view, $data);
    }
}