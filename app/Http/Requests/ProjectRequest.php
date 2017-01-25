<?php namespace laranaija\Http\Requests;

use laranaija\Http\Requests\Request;

class ProjectRequest extends Request
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
          'title'            => 'required|min:3',
          'url'              => 'required|min:3',
          'description'      => 'required',
          'categories'       => 'required',
          'tags'             => 'required'
      ];
  }
}
