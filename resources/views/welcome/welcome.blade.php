@extends('layouts.master')

@section('content')

		<!-- Header section -->
		<header class="header-section">
			<div class="logo">
				@foreach ($header as $item)
				<img src="{{asset("storage/".$item->logo)}}" height="40px" alt="">
				@endforeach <!-- Logo -->
			</div>
			<!-- Navigation -->
			<div class="responsive"><i class="fa fa-bars"></i></div>
			<nav>
				<ul class="menu-list">
					<li class="active"><a href="{{route('index')}}">Home</a></li>
					<li><a href="{{route('services.index')}}">Services</a></li>
					<li><a href="{{route('blog.index')}}">Blog</a></li>
					<li><a href="{{route('contact.index')}}">Contact</a></li>
					<li><a href="{{route('home')}}">Login</a></li>
				</ul>
			</nav>
		</header>
		<!-- Header section end -->


	<!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				@foreach ($header as $item)
				<img src="{{asset("storage/".$item->logo)}}" height="230px" alt="">
				<p>{{$item->texte}}</p>
				@endforeach
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			@foreach ($imgHeader as $item)
				<div class="item  hero-item" data-bg="{{asset("storage/".$item->img)}}"></div>
				<div class="item  hero-item" data-bg="{{asset("storage/".$item->img)}}"></div>
			@endforeach
		</div>
	</div>
	<!-- Intro Section -->


	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					<!-- single card -->
					@foreach ($overview as $item)
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
                     		<div class="icon">
                        		<i class="{{$item->logo}}"></i>
                    		</div>
                     		<h2>{{$item->titre}}</h2>
							<p>{{$item->texte}}.</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- card section end-->


		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				@foreach ($about as $item)
					
				<div class="section-title">
					<h2>{{$item->titre}}</h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>{{$item->texteGauche}} Lorem ipsum </p>
					</div>
					<div class="col-md-6">
						<p>{{$item->texteDroite}}</p>
					</div>
				</div>
				<div class="text-center mt60">
					<a href="{{route('services.index')}}" class="site-btn">Browse</a>
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img src="img/video.jpg" alt="">
							<a href="{{$item->video}}" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- About section end -->
	

	<!-- Testimonial section -->
	<div class="testimonial-section pb100">
		<div class="test-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
						<h2>What our clients say</h2>
					</div>
					<div class="owl-carousel" id="testimonial-slide">
						<!-- single testimonial -->
						@foreach ($testi as $item)


                        <div class="testimonial">
                            <span>'​‌'​‌</span>
                        <p>{{$item->comm}}</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="{{'storage/'.$item->photo}}" alt="">
                                </div>
                                <div class="client-name">
                                <h2>{{$item->auteur}}</h2>
                                <p>{{$item->role}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial section end-->


	@include('components.seeServ')


	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>Get in <span>the Lab</span> and  meet the team</h2>
			</div>
			<div class="row">
				<!-- single member -->
				@foreach ($teams as $index=>$user)

            @if ($index==0)
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{'storage/'.$user->photo}}" alt="">
                    <h2>{{$user->name}}</h2>
                    <h3>{{$user->role->role}}</h3>
                </div>
            </div>
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{'storage/'.$CEO->photo}}" alt="">
                    <h2>{{$CEO->name}}</h2>
                    <h3>{{$CEO->role->role}}</h3>
                </div>
            </div>
            @else
             <!-- single member -->
             <div class="col-sm-4">
                <div class="member">
                    <img src="{{'storage/'.$user->photo}}" alt="">
                    <h2>{{$user->name}}</h2>
                    <h3>{{$user->role->role}}</h3>
                </div>
            </div>

            @endif
            @endforeach
				
			</div>
		</div>
	</div>
	<!-- Team Section end-->


	<!-- Promotion section -->
	<div class="promotion-section">
		<div class="container">
			<div class="row">
				@foreach ($promo as $item)
				<div class="col-md-9">
					<h2>{{$item->titre}}</h2>
					<p>{{$item->texte}}</p>
				</div>
				@endforeach
				<div class="col-md-3">
					<div class="promo-btn-area">
						<a href="#form" class="js-scrollTo site-btn btn-2">Browse</a>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- Promotion section end-->
    
    @include('components.form')
    @include('components.footer')

    
@endsection