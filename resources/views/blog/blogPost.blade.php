@extends('layouts.master')

@section('content')
    
	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			@foreach ($header as $item)
				<img src="{{asset("storage/".$item->logo)}}" height="40px" alt="">
			@endforeach
			<!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li><a href="{{route('index')}}">Home</a></li>
				<li><a href="{{route('services.index')}}">Services</a></li>
				<li class="active"><a href="{{route('blog.index')}}">Blog</a></li>
				<li><a href="{{route('contact.index')}}">Contact</a></li>
				<li><a href="{{route('home')}}">Login</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Blog</h2>
				<div class="page-links">
					<a href="{{route('index')}}">Home</a>
					<span>Blog</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->


	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Single Post -->
					<div class="single-post">
						<div class="post-thumbnail">
							<img src="{{asset("storage/".$articles->img)}}" alt="">
							<div class="post-date">
								<h2>{{$articles->created_at->format('d')}}</h2>
                                <h3>{{$articles->created_at->format('m')}} {{$articles->created_at->format('Y')}}</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">{{$articles->titre}}</h2>
							<div class="post-meta">
								<a href="">{{$articles->user->name}}</a>
								<a href="">
									@foreach ($articles->tags->shuffle()->take(3) as $tag) {{$tag->nom}} 
									@endforeach
								</a>
								<a href="">2 Comments</a>
							</div>
							<p>{{$articles->texte}}</p>
							<p>{{$articles->texte}}</p>
							<p>{{$articles->texte}}</p>
						</div>
						<!-- Post Author -->
						<div class="author">
							<div class="avatar">
								<img src="{{'storage/'.$articles->user->photo}}" alt="">
							</div>
							<div class="author-info">
								<h2>{{$articles->user->name}}, <span>Author</span></h2>
								<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
							</div>
						</div>
						<!-- Post Comments -->
						<div class="comments">
							<h2>Comments (2)</h2>
							<ul class="comment-list">
								@foreach ($commentaires as $item)
								<li>
									<div class="avatar">
										<img src="{{asset("storage/".$item->user->photo)}}" alt="">
									</div>
									<div class="commetn-text">
										<h3>{{$item->user->name}} | {{$item->created_at}}</h3>
										<p>{{$item->texte}}</p>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
						<!-- Commert Form -->
						<div class="row">
							<div class="col-md-9 comment-from">
								<h2>Leave a comment</h2>
								@if (session()->has('send'))
                    <div class="alert alert-success" role="alert">
                        {{session('send')}}
                    </div>
                    @endif

                    @error('text')
                    <div class="alert alert-danger" role="alert">{{$message}}</div>
					@enderror
					@auth
						
					<form action="{{route('commentaire.update', $articles->id)}}" class="form-class" method="POST">
						@csrf
						@method('PUT')
						<div class="row">
							<div class="col-sm-12">
								<input type="text" name="subject" placeholder="Subject">
								<textarea name="text" placeholder="Message"></textarea>
								<button class="site-btn">send</button>
							</div>
						</div>
					</form>
					@else
					<p>Vous devez être connecté pour pouvoir laisser un commentaire.</p>
					
					@endauth
							</div>
						</div>
					</div>
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<form action="{{route('search')}}" class="search-form">
                            <input name="search" type="text" placeholder="Search">
                            <button class="search-btn"><i class="flaticon-026-search"></i></button>
                        </form>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul> 
							@foreach ($categories as $item)
							<li><a href="{{route('searchcat', $item->id)}}">{{$item->nom}}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag"> 
							@foreach ($tags as $item)
                                <li class=""><form action="{{route('searchtag', $item)}}" method="GET">
                            <button class="btn" type="submit">{{$item->nom}}</button>
                            </form></li>
                            @endforeach
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Quote</h2>
						<div class="quote">
							<span class="quotation">‘​‌‘​‌</span>
							<p>{{$quote->texte}}</p>
						</div>
					</div>
					<!-- Single widget -->
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->


	<!-- newsletter section -->
	<div id="news" class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					<!-- newsletter form -->
				<form action="{{route('newsletter.store')}}" class="nl-form" method="POST">
					@csrf
					@if (session()->has('news'))
                    <div class="alert alert-success" role="alert">
                        {{session('news')}}
                    </div>
                    @endif
						<input name="mail" type="text" placeholder="Your e-mail here">
						<button class="site-btn btn-2">Newsletter</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- newsletter section end-->

	@include('components.footer')
	
@endsection