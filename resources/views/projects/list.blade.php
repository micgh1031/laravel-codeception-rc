@extends('layouts.main')
@section('content')

  <!--<header id="head" class="secondary"></header>-->

  <!-- container -->
  <div class="container">

    <ol class="breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li class="active">PROJECTS</li>
    </ol>

    <div class="row">

    <!-- Article main content -->
    <article class="col-md-8 maincontent">
        <header class="page-header">
          <h3 class="page-title">
            <i class="fa fa-suitcase fa-lg"></i> PROJECTS CRAFTED BY NIGERIAN LARAVEL DEVELOPERS
          </h3>
        </header>

        <!--Project-->
        <article class="blog-post margin-60">
            @if($project)
                      <?php $kar = 1; ?>
                 @foreach ($project as $proj)

                      @if($proj->approval_status == 1)
                      <div class="projects-wrapper">
                        <div class="date-container">
                          <span class="day">
                            <i class="fa fa-suitcase "></i>
                          </span>
                        </div>
                        <h3 class='name-shift'>
                           {!! strtoupper($proj->name) !!}
                        </h3>
                        <p class='url-shift'>
                          <i class="fa fa-external-link fa-lg"></i> <a href="{!! resolveHttp($proj->url) !!}" target="__blank" class="visible-desktop">View Site</a>
                        </p>
                        <p>
                          {!! $proj->description !!}
                           <br />
                        </p>
                        <p><i class="fa fa-bookmark fa-lg"></i> Categories : {!! $proj->categories !!}</p>
                        <p><i class="fa fa-tags fa-lg"></i> Tags : {!! $proj->tags !!} </p>
                      </div>
                     <hr/>
                    @endif
                    <?php $kar++ ?>
                 @endforeach

                 {!! $project->render() !!}
            @endif
        </article>
    </article>
    <!-- /Article -->

      <!-- Sidebar -->
    <aside class="col-md-4 sidebar sidebar-right">
      <div class="row widget">
        <div class="col-xs-12">
          <h4><i class="fa fa-archive fa-lg"></i> Projects</h4>
          <p>
            <i class="fa fa-hand-o-right fa-lg"></i>
            <a href={!! URL::action('ProjectController@create') !!}>Add your Laravel Project</a>
          </p>
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