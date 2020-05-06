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
					<!-- Post item -->
					@foreach ($articles as $item)
					<div class="post-item">
						<div class="post-thumbnail">
							<img src="{{asset("storage/".$item->img)}}" alt="">
							<div class="post-date">
								<h2>{{$item->created_at->format('d')}}</h2>
                                <h3>{{$item->created_at->format('m')}} {{$item->created_at->format('Y')}}</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">{{$item->titre}}</h2>
							<div class="post-meta">
								<a href="">{{$item->user->name}}</a>
								<a href="">
									@foreach ($item->tags->shuffle()->take(3) as $tag) {{$tag->nom}} 
									@endforeach
								</a>
								<a href="">2 Comments</a>
							</div>
							<p>{{\Illuminate\Support\Str::limit($item->texte, 200, $end='...')}}</p>
							<a href="{{route('blogPost.show', $item->id)}}" class="read-more">Read More</a>
						</div>
					</div>
					@endforeach
					<!-- Post item -->
					<!-- Pagination -->
					<div class="page-pagination">
						{{$articles->links()}}
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