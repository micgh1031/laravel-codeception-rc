<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Showcase of Developer Profiles, web sites and applications built with Laravel PHP framework in Nigeria" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://laranaija.com" />
    <meta property="og:image" content="http://laranaija.com/images/laranaija-screenshot.jpg" />
    <meta property="og:site_name" content="Laranaija.com" />
    <meta property="og:description" content="Laranaija.com is a compilation of web sites and web applications built with Laravel PHP framework by Nigerian Developers" />
    <meta name="description" content="Laranaija.com is a Showcase of Developer Profiles; compilation of web sites and web applications built with Laravel PHP framework by Nigerian Developers">
    <meta name="author" content="Otemuyiwa Prosper, @unicodeveloper">
	  <title>LARANAIJA :: Home Of Nigerian Laravel Developers</title>
	  <link rel="shortcut icon" href={!! asset('images/favicon.ico') !!} type="image/x-icon">
	  <link href={!! asset('css/bootstrap.min.css') !!} rel="stylesheet">
    <link href={!! asset('css/main.css') !!} rel="stylesheet">
    <link href={!! asset('css/font-awesome.min.css') !!} rel="stylesheet">
    <link href={!! asset('css/selectize.bootstrap3.css') !!} rel="stylesheet">
</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-default navbar-fixed-top headroom">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
				<a class="navbar-brand laralogo" href={!! URL::to('/') !!} >
          &#123;&#123;&#123;
          <span class="lara">LARA</span>
          <span class="naija">NAIJA</span>
          &#125;&#125;&#125;
        </a>
			</div>
			<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav pull-right">
			  <li class="{!! Request::path() == '/' ? 'active' : ''; !!}"><a href={!! URL::to('/') !!} > Home</a></li>
			  <li class="{!! Request::path() == 'projects' ? 'active' : ''; !!}"><a href={!! URL::to('projects') !!} >Projects</a></li>
			  <li class="{!! Request::path() == 'developers' ? 'active' : ''; !!}"><a href={!! URL::to('developers') !!} > Developers</a></li>
			  <li class="{!! Request::path() == 'about' ? 'active' : ''; !!}"><a href={!! URL::to('about') !!} > About</a></li>
			</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->


	@yield('content')

	<footer id="footer" class="top-space">
		<div class="footer2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="widget-body">
							<p>
							  Copyright &copy; 2014 Laranaija.com was created and is curated by <a href="https://twitter.com/unicodeveloper" target="_blank">Otemuyiwa Prosper</a>. Hosted on <a href="https://linode.com" target="_blank">Linode</a> using <a href="https://forge.laravel.com" target="_blank">Forge.</a>.
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>


	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->

	  {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/jQuery.headroom.min.js') !!}
    {!! Html::script('js/template.js') !!}
    {!! Html::script('js/selectize.min.js') !!}
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-57355068-1', 'auto');
	  ga('send', 'pageview');
	</script>
    <script type="text/javascript">
		(function($) {
		    $('#tags').selectize({
		        maxItems: 5
		    });

		    $('#categories').selectize({
		        maxItems: 5
		    });

		})(jQuery);
	</script>
    <script type="text/javascript">
    $(function() {
      $('.tip').tooltip();
      $('input, textarea').placeholder();
    });
    </script>
</body>
</html>
