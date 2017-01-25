@extends('layouts.main')
@section('content')

  <!-- container -->
  <div class="container">

    <ol class="breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li class="active">DEVELOPERS</li>
    </ol>

    <div class="row">

      <!-- Article main content -->
      <article class="col-md-8 maincontent">
        <header class="page-header">
          <h3 class="page-title"> <i class="fa fa-users fa-lg"></i>  NIGERIAN LARAVEL DEVELOPERS</h3>
        </header>

            <!--Get List Of Developers-->
            <article class="blog-post margin-60">
                @if($developer)
                     @foreach ($developer as $dev)
                        @if( $dev->approval_status == 1)
                        <div class="projects-wrapper">
                          <div class="date-container">
                           <span class="day">
                              <i class="fa fa-user-secret"></i>
                           </span>
                          </div>
                          <h3 class='name-shift'>
                             {!! strtoupper( $dev->name ) !!}
                          </h3>
                          <p class='url-shift'>
                            <i class="fa fa-external-link fa-lg"></i>
                            <a href="{!! resolveHttp($dev->url) !!}" target="__blank" class="visible-desktop">More Info</a>
                          </p>
                          <p>
                            {!! $dev->bio !!}
                              <br />
                          </p>
                          <p><i class="fa fa-location-arrow fa-lg"></i> Work Place : {!! $dev->work_place !!}</p>
                          <p><i class="fa fa-bolt fa-lg"></i> Code Name : {!! strtoupper( $dev->code_name ) !!} </p>
                          <a href="mailto:{!! $dev->email !!}" class="btn btn-danger"> CONTACT {!! strtoupper( $dev->code_name ) !!} <i class="fa fa-mail-reply-all fa-lg"></i></a>
                        </div>
                        <hr/>
                      @endif
                   @endforeach

                  {!! $developer->render() !!}
              @endif
            </article>

      </article>
      <!-- /Article -->

      <!-- Sidebar -->
      <aside class="col-md-4 sidebar sidebar-right">
        <div class="row widget">
          <div class="col-xs-12 add-developer">
            <h4> <i class="fa fa-hand-o-right fa-lg"></i> Developers</h4>
            <i class="fa fa-user-secret fa-lg"></i>
            <a href={!! URL::action('DeveloperController@create') !!} style="margin-bottom:5px;">  Add yourself as a Laravel Developer</a>

          </div>

          <div class="col-xs-12 laranaija-news">
            <h5 align="center"> LARAVEL NEWS </h5>
            @if($feed)
              @foreach($feed as $f)
                <div class="laravel-news">
                   <a href="{!! $f->link !!}" target="_blank"> {!! $f->title !!} </a>
                </div>
              @endforeach
            @endif
          </div>
        </div>
      </aside>
      <!-- /Sidebar -->

    </div>
  </div>  <!-- /container -->
@stop