@extends('frontend.inc.master')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/blog-details.css') }}">

@endsection
@section('content')



<section class="blog-details" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150" 
data-aos-easing="linear">

	<div class="container">
		<div class="row">
			<header class="blog-details-header">
				<div class="blog-details-top d-flex gap-2 align-items-center ">
					<i class="fa-solid fa-home"></i>
					<a href="{{ url('/') }}" class="blog-details-top-home">{{ __('Home') }}</a>
					<i class="fa-solid {{ app()->getLocale() == 'en' ? 'fa-angle-right' : 'fa-angle-left' }}"></i>
					<a href="{{ route('frontend.blogs.index') }}" class="blog-details-top-blog">{{ __('Blog') }}</a>
				</div>

				<div class="col-12 blog-details-top-btn">
					<a href="{{ route('frontend.blogs.index') }}">{{ __('Blog') }}</a>
				</div>

				<h1>{{ $blog->title }}</h1>
			</header>
			<div class="blog-details-body">
				<div class="col-md-12 ">
					<img src="{{ asset($blog->photo ?? '') }}" alt="blog-detailes" />
				</div>
				<p class="blog-deatils-description">{{$blog->description ?? '' }}</p>
				<div class="blog-details-content">{!! filterXss($blog->content ?? '') !!}</div>

				<button clss="blog-details-top-btn"></button>



				<div class="d-flex justify-content-center align-items-center">
					<button class="blog-details-bottom-btn">
						<span>{{ __('Back to top') }}</span>
						<img src="{{ asset('frontend/assets/images/blogs') }}/top.svg"
							alt="Back to top" />
					</button>
				</div>

			</div>

		</div>


	</div>
</section>
@endsection

@section('script')
<script>
	document.addEventListener('DOMContentLoaded', function() {
        // Select all elements within .blog-content
        const blogContent = document.querySelector('.blog-details-content');
        
        if (blogContent) {
            // Remove all inline styles
            const elementsWithStyle = blogContent.querySelectorAll('[style]');
            elementsWithStyle.forEach(el => el.removeAttribute('style'));
 // Remove all class and color attributes
 const allElements = blogContent.querySelectorAll('*');
            allElements.forEach(el => {
                el.removeAttribute('class');
                el.removeAttribute('color');
            });
            // Add 'w-100' class to all images
            const images = blogContent.querySelectorAll('img');
            images.forEach(img => img.classList.add('w-100'));
			images.forEach(img => img.classList.add('my-3'));

            // Apply styles to all <p> elements
            const paragraphs = blogContent.querySelectorAll('p');
            paragraphs.forEach(p => p.classList.add('blog-p'));

            // Apply styles to all <h2> elements
            const h2Elements = blogContent.querySelectorAll('h2');
            h2Elements.forEach(h2 => h2.classList.add('blog-h2'));

			  // Apply styles to all <h3> elements
				const h3Elements = blogContent.querySelectorAll('h3');
            h3Elements.forEach(h3 => h3.classList.add('blog-h3'));

			// Apply styles to all <a> elements
				const aElements = blogContent.querySelectorAll('a');
           aElements.forEach(a => a.classList.add('blog-a'));
        }
    });

	$(document).ready(function() {
    $('.blog-details-bottom-btn').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        return false;
    });
});

</script>
@endsection
