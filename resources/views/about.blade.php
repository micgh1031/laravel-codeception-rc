@extends('layouts.main')
@section('content')

	<!-- <header id="head" class="secondary"></header> -->

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">ABOUT</li>
		</ol>

		<div class="row">

			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<header class="page-header">
					<h3 class="page-title"> <i class="fa fa-bullhorn fa-lg"></i> ABOUT LARANAIJA</h3>
				</header>

                <img src={{{ asset('images/laranaija.png') }}} >

				<blockquote>"LARANAIJA" is a showcase of web sites and web applications that were built with Laravel PHP framework

by Nigerians in Nigeria. Laranaija.com is a hub for Developers in Nigeria that manipulate and craft web applications using the Wonderful Laravel Framework

It accepts submissions from users and after a short review process the websites are published on the main page of the site and will become discoverable.

Laranaija.com was created by Otemuyiwa Prosper in December 2014 as a curated collection of web apps built with Laravel by Nigerian Laravel Developers.</blockquote>

			</article>
			<!-- /Article -->

			<!-- Sidebar -->
			<aside class="col-sm-4 sidebar sidebar-right">

				<div class="widget">
					<h4> <i class="fa fa-money fa-lg"></i> Vacancies</h4>

					 <img src={{{ asset('images/coming-soon.jpg') }}} >
				</div>

				<div class="row">
					<div class="col-md-12 text-center">
						<h2>Share &amp; follow</h2>
						<p>
							<a href="#" class="btn btn-info btn-lg" onclick="window.open(
			                      'https://twitter.com/share?url='+encodeURIComponent('http://laranaija.com')+'&amp;text='+encodeURIComponent('Laravel Nigeria Hub: Showcase of Developer Profiles, websites and apps developed with Laravel by Nigerians. Follow @unicodeveloper') + '&amp;count=none/',
			                      'twitter-share-dialog',
			                      'width=626,height=436,top='+((screen.height - 436) / 2)+',left='+((screen.width - 626)/2 ));
			                    return false;">
			                  <i class="fa fa-twitter"></i> Share on Twitter
			        </a>
			      </p>

			      <p>
              <a href="#" class="btn btn-lg btn-primary" style="border-color: #4B7FCC; color: #fff;width:65%;" onclick="window.open(
                        'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('http://laranaija.com') +'&amp;t=' + encodeURIComponent('Laravel Nigeria Hub; Showcase of Developer Profiles, websites and apps developed with Laravel by Nigerians'),
                        'facebook-share-dialog',
                        'width=626,height=436,top='+((screen.height - 436) / 2)+',left='+((screen.width - 626)/2 ));
                      return false;">
                    <i class="fa fa-facebook"></i> Share on Facebook
               </a>
						</p>
					</div>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->

@stop