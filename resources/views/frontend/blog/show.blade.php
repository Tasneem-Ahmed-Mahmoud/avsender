@extends('frontend.inc.master')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/blog-details.css') }}">
<style>
	.blog-p {
		font-size: 18px;
		font-weight: 400;
		line-height: 28.8px;
		color: #000;
	}

	.blog-h2,
	.blog-h3 {
		font-size: 28px;
		font-weight: 600;
		line-height: 44.8px;
		color: #29387E;
	}
	.blog-a{
		color: #29387E;
		text-decoration: none;
		font-weight: bold;
	}
</style>
@endsection
@section('content')
<div class="faq_hero_container_section">
	<div class="container">
		<nav id="top"
			style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34; );"
			aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item breadcrumb-item-home"><a href="{{ url('/') }}"
						class=" breadcrumb-item-home"><img
							src="{{ asset('frontend/assets/images/blogs') }}/Shape-home.svg" alt="Shape-home" />
						Home</a></li>
				<li class="breadcrumb-item breadcrumb-item-active active" aria-current="page">Blog</li>
			</ol>
		</nav>

		<a href="{{ url('/blogs') }}">
			<div class="Blog-btn">
				Blog
			</div>
		</a>
		<h2 class="Blog-h2-detaiels">{{ $blog->title }}</h2>

		<div class="row">
			<div class="col-md-12 col-imge-blog-detaiels">
				<img src="{{ asset($blog->preview->value ?? '') }}" alt="blog-detailes" />
			</div>
			<p class="p-imge-blog-detaiels">{{ $blog->shortDescription->value ?? '' }}</p>
			<div class="blog-content">{!! filterXss($blog->longDescription->value ?? '') !!}</div>
		</div>
		<div class="Back_top-div">
			<a href="#top">
				<div class="Back_top">
					Back to top <img src="{{ asset('frontend/assets/images/blogs') }}/top.svg" alt="Back to top"
						class="mx-2" />
				</div>
			</a>
		</div>

	</div>
</div>
@endsection

@section('script')
<script>
	document.addEventListener('DOMContentLoaded', function() {
        // Select all elements within .blog-content
        const blogContent = document.querySelector('.blog-content');
        
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
</script>
@endsection