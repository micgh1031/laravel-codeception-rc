<?php namespace laranaija\Http\Requests;

use laranaija\Http\Requests\Request;

class DeveloperRequest extends Request
{
   /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
      return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'name'            => 'required|min:3',
      'email'           => 'required|min:3',
      'url'             => 'required|min:3',
      'codename'        => 'required|min:3',
      'work_place'      => 'required|min:3',
      'description'     => 'required|min:5'
    ];
  }
}
