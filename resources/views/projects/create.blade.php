@extends('layouts.main')
@section('content')

<div class="container" style="margin-top:50px;">
    <form method="POST" action={!! URL::action('ProjectController@create') !!} class="form-horizontal" role="form">
      <div class="row" style="margin-bottom:40px;">
        <div class="col-md-8 col-md-offset-2">
          <h1>You Developed a Project with Laravel?</h1>

          <h3>Let the Nigerian Developer Community Know About It</h3>

          <b>PLEASE NOTE: </b>

          <p>Please do not post multiple times. If you submit the same site more than once, the latest submission will be used</p>

          @if(session('approval-status'))
              <div class="alert alert-success" id="alert_message">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  {{ session('approval-status') }}
              </div>
          @endif

          @if($errors->has())
              <p class="bg-danger" style="padding:10px;border-radius:5px;">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                 Oops! Please check the form below for errors.
              </p>
          @endif

         <p>
             <input class="form-control  @if($errors->has('name')) has-error @endif" placeholder="Name of the Project/Site" name="title" type="text" value="{!! Input::old('title') !!}">
             @if($errors->has('title')) <p class="text-danger"> {!! $errors->first('title') !!}</p> @endif
         </p>
         <p>
            <input class="form-control @if ($errors->has('url')) has-error @endif" placeholder="URL of the Project/Site" name="url" type="text" value="{!! Input::old('url') !!}">
            @if($errors->has('url')) <p class="text-danger"> {!! $errors->first('url') !!}</p> @endif
         </p>
         <p>
            <textarea class="form-control @if ($errors->has('description')) has-error @endif" placeholder="Describe the Project" rows="4" name="description" cols="50" value="{!! Input::old('description') !!}" id="desc"></textarea>
              @if ($errors->has('description')) <p class="text-danger"> {!! $errors->first('description') !!}</p> @endif
         </p>
         <p><select multiple="multiple" id="categories" placeholder="Choose Categories for this site" class="form-control @if ($errors->has('categories')) has-error @endif" name="categories[]">
             <option value="Business">Business</option>
             <option value="E-commerce">E-Commerce</option>
             <option value="Blogs">Blogs</option>
             <option value="Uncategorized">Uncategorized</option>
             <option value="Open Source">Open Source</option>
             <option value="User driven">User driven</option>
             <option value="Portfolio">Portfolio</option>
             <option value="Customer Support">Customer Support</option>
             <option value="Medical">Medical</option>
             <option value="Agency">Agency</option>
             <option value="Travel">Travel</option>
             <option value="Entertainment">Entertainment</option>
             <option value="Fashion">Fashion</option>
             <option value="Education">Education</option>
        </select>
        @if ($errors->has('categories')) <p class="text-danger"> {!! $errors->first('categories') !!}</p> @endif
        </p>
        <p><select multiple="multiple" id="tags" placeholder="Choose tags for this site"
              class="form-control @if ($errors->has('tags')) has-error @endif" name="tags[]">
               <option value="Blog">Blog</option>
               <option value="Bootstrap">Bootstrap</option>
               <option value="CMS">CMS</option>
               <option value="Foundation">Foundation</option>
               <option value="gallery">gallery</option>
               <option value="Gumby">Gumby</option>
               <option value="Laravel 3">Laravel 3</option>
               <option value="Laravel 4">Laravel 4</option>
               <option value="Laravel 5">Laravel 5</option>
               <option value="Packages">Packages</option>
               <option value="Photos">Photos</option>
               <option value="Social">Social</option>
               <option value="Wardrobe CMS">Wardrobe CMS</option>
            </select>
        </p>
      @if($errors->has('tags')) <p class="text-danger"> {!! $errors->first('tags') !!}</p> @endif
       <p>
         <input type="hidden" name="approval_status" value="0">
         <input class="form-control" placeholder="Your email (optional)" name="from" type="text" value="{!! Input::old('from') !!}"></p>
       <p>
         <input type="hidden" name="_token" value="{!! csrf_token() !!}">
         <button class="btn btn-success btn-lg btn-block" type="submit" value="Submit Site">
         <i class="fa fa-plus-circle fa-lg"></i>  Submit Site
         </button>
       </p>

      </div>
    </div>
    </form>
    </div>
    </div>
@stop