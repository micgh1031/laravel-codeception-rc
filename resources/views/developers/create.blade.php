@extends('layouts.main')
@section('content')

  <div class="container" style="margin-top:50px;">
     <form method="POST" action={!! URL::action('DeveloperController@create') !!} class="form-horizontal" role="form">
        <div class="row" style="margin-bottom:40px;">
          <div class="col-md-8 col-md-offset-2">
             <h1>Add Yourself As a Nigerian Laravel Developer</h1>
             <h3>Let the Nigerian Developer Community Know About You</h3>

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
              <input class="form-control  @if ($errors->has('name')) has-error @endif" placeholder="Name" name="name" type="text" value="{!! Input::old('name') !!}">
              @if($errors->has('name')) <p class="text-danger"> {{ $errors->first('name') }}</p> @endif
            </p>
            <p>
              <input class="form-control" placeholder="Your email" name="email" type="email" value="{!! Input::old('email') !!}"></p>
              @if($errors->has('email')) <p class="text-danger"> {!! $errors->first('email') !!}</p> @endif
            <p>
            <p>
              <input class="form-control @if ($errors->has('url')) has-error @endif" placeholder="e.g http://laranaija.com" name="url" type="text" value="{!! Input::old('url') !!}">
              @if($errors->has('url')) <p class="text-danger"> {!! $errors->first('url') !!}</p> @endif
            </p>
            <p>
              <input class="form-control @if ($errors->has('work_place')) has-error @endif" placeholder="Your Work-Place e.g FreeLancer, Andela, Konga.com " name="work_place" type="text" value="{!! Input::old('work_place') !!}">
              @if($errors->has('work_place')) <p class="text-danger"> {!! $errors->first('work_place') !!}</p> @endif
            </p>
            <p>
              <input class="form-control @if ($errors->has('codename')) has-error @endif" placeholder="CodeName e.g Namzo, Chilas, Legend " name="codename" type="text" value="{!! Input::old('codename') !!}">
              @if($errors->has('codename')) <p class="text-danger"> {!! $errors->first('codename') !!}</p> @endif
            </p>
              <input type="hidden" name="tags" value="developer">
            <p>
              <textarea class="form-control @if ($errors->has('description')) has-error @endif" placeholder="Write a Short Bio about How awesome you Are" rows="4" name="description" cols="50" value="{!! Input::old('description') !!}" ></textarea>
              @if($errors->has('description')) <p class="text-danger"> {!! $errors->first('description') !!}</p> @endif
            </p>
            <p>
              <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            </p>
            <p>
              <button class="btn btn-success btn-lg btn-block" type="submit" value="ADD NAIJA DEVELOPER">
              <i class="fa fa-plus-circle fa-lg"></i> ADD NAIJA DEVELOPER
              </button>
            </p>
          </div>
        </div>
    </form>
</div>
</div>
@stop