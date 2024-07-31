{{-- @extends('frontend.layouts.main')
@section('content')
@include('frontend.layouts.header-2')
<main>
	<!-- breadcrumb area start -->
	<div class="breadcrumb__area breadcrumb-height p-relative grey-bg"
	data-background="{{ asset('assets/frontend/img/breadcrumb/breadcrumb.jpg') }}">
	<div class="breadcrumb__scroll-bottom smooth">
		<a href="#Blog-Details">
			<i class="far fa-arrow-down"></i>
		</a>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xxl-12">
				<div class="breadcrumb__content text-center">
					<h3 class="breadcrumb__title">{{ Str::limit($blog->title,60) }}</h3>
					<div class="breadcrumb__list">
						<span><a href="{{ url('/') }}">{{ __('Home') }}</a></span>
						<span class="dvdr"><i class="fa fa-angle-right"></i></span>
						<span>{{ __('Blog Details') }}</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb area end -->

<!-- postbox area start -->
<div class="postbox__area pt-120 pb-120">
	<div class="container">
		<div class="row">
			<div class="col-xxl-8 col-xl-8 col-lg-8 col-12">
				<div id="Blog-Details" class="postbox__wrapper postbox__p-right">
					<article class="postbox__item format-image transition-3">
						<div class="postbox__content">
							<p><img class="w-100" src="{{ asset($blog->preview->value ?? '') }}" alt=""></p>
							<div class="postbox__meta">
								<span><a href="{{ url('/blogs') }}"><i class="fal fa-user-circle"></i> {{ __('Admin') }} </a></span>
								<span><a href="{{ url('/blogs?date='.$blog->created_at->format('d-m-Y')) }}"><i class="fal fa-clock"></i> {{ $blog->created_at->format('F d,Y') }}</a></span>

							</div>
							<h3 class="postbox__title">
								{{ $blog->title }}
							</h3>
							<div class="postbox__text">
								<p>
									{{ $blog->shortDescription->value ?? '' }}
								</p>
							</div>
							<div class="postbox__thumb2 mb-60">
								<div class="postbox__text">
									<p>{!!  filterXss($blog->longDescription->value ?? '') !!}</p>

								</div>
							</div>
							@if(count($blog->tags ?? []) > 0)
							<div class="postbox__social-wrapper">
								<div class="row">
									<div class="col-xl-12 col-lg-12">
										<div class="postbox__tag tagcloud">
											<span>{{ __('Tag') }}</span>
											@foreach($blog->tags ?? [] as $tag)
											<a href="{{ url('tag/'.$tag->slug.'/'.$tag->id) }}">{{ $tag->title }}</a>
											@endforeach
										</div>
									</div>
								</div>
							</div>
							@endif
						</div>
					</article>
				</div>
			</div>
			<div class="col-xxl-4 col-xl-4 col-lg-4">
				<div class="sidebar__wrapper">
					<div class="sidebar__widget mb-40">
						<h3 class="sidebar__widget-title">{{ __('Search Here') }}</h3>
						<div class="sidebar__widget-content">
							<div class="sidebar__search">
								<form action="{{ url('/blogs') }}">
									<div class="sidebar__search-input-2">
										<input type="text" name="search" placeholder="{{ __('Search your keyword...') }}">
										<button type="submit"><i class="far fa-search"></i></button>
									</div>
								</form>
							</div>
						</div>
					</div>
					@if(count($categories) > 0)
					<div class="sidebar__widget mb-40">
						<h3 class="sidebar__widget-title">{{ __('Categories') }}</h3>
						<div class="sidebar__widget-content">
							<ul>
								@foreach($categories as $category)
								<li><a href="{{ url('category/'.$category->slug.'/'.$category->id) }}">{{ $category->title }}<span><span>{{ $category->postcategories_count }}</span></a></li>
								@endforeach
							</ul>
						</div>
					</div>
					@endif
					@if(count($recent_blogs) > 0)
					<div class="sidebar__widget mb-40">
						<h3 class="sidebar__widget-title">{{ __('Recent Post') }}</h3>
						<div class="sidebar__widget-content">
							<div class="sidebar__post rc__post">
								@foreach($recent_blogs as $recent_blog)
								<div class="rc__post mb-20 d-flex">
									<div class="rc__post-thumb mr-20">
										<a href="{{ url('/blog',$recent_blog->slug) }}"><img src="{{ asset($recent_blog->preview->value ?? '') }}" alt=""></a>
									</div>
									<div class="rc__post-content">
										<div class="rc__meta">
											<span>{{ $recent_blog->created_at->format('d F, Y') }}</span>
										</div>
										<h3 class="rc__post-title">
											<a href="{{ url('/blog',$recent_blog->slug) }}">{{ Str::limit($recent_blog->title,35) }}</a>
										</h3>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
					@endif
					@if(count($tags) > 0)
					<div class="sidebar__widget mb-40">
						<h3 class="sidebar__widget-title">{{ __('Tags') }}</h3>
						<div class="sidebar__widget-content">
							<div class="tagcloud">
								@foreach($tags as $tag)
								<a href="{{ url('tag/'.$tag->slug.'/'.$tag->id) }}">{{ $tag->title }}</a>
								@endforeach
							</div>
						</div>
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
<!-- postbox area end -->

</main>

@endsection --}}



@extends('frontend.inc.master')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/blog-details.css') }}">
    
@endsection
@section('content')


<div class="faq_hero_container_section">
    <div class="container">
        <nav id="top"
            style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34; );"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item breadcrumb-item-home"><a href="{{ url('/') }}"
                        class=" breadcrumb-item-home"><img src="{{ asset('frontend/assets/images/blogs') }}/Shape-home.svg" alt="Shape-home" />
                        Home</a></li>
                <li class="breadcrumb-item breadcrumb-item-active active" aria-current="page">Blog</li>
            </ol>
        </nav>

        <a href="{{ url('/blogs') }}">
            <div class="Blog-btn">
                Blog
            </div>
        </a>
        <h2 class="Blog-h2-detaiels">		{{ $blog->title }}</h2>

        <div class="row">
            <div class="col-md-12 col-imge-blog-detaiels ">
                <img src="{{ asset($blog->preview->value ?? '') }}" alt="blog-detailes" />
            </div>
            <p class="p-imge-blog-detaiels">	{{ $blog->shortDescription->value ?? '' }}</p>
            <p class="p-imge-blog-detaiels p-div">{!!  filterXss($blog->longDescription->value ?? '') !!} </p>
        </div>
        <div class="Back_top-div">
            <a href="#top">
                <div class="Back_top">
                    Back to top <img src="{{ asset('frontend/assets/images/blogs') }}/top.svg" alt="Back to top" class="mx-2" />
                </div>
            </a>
        </div>

    </div>

@endsection
