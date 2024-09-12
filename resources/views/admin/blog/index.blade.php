@extends('layouts.main.app')
@section('head')
@include('layouts.main.headersection',[
'title'=> __('Blogs'),
'buttons'=>[
	[
		'name'=>'<i class="fa fa-plus"></i>&nbsp'.__('Create a blog post'),
		'url'=>route('admin.blog.create'),
	]
 ]
])
@endsection
@section('content')
<div class="row justify-content-center">
	<div class="col-12">
		<div class="row d-flex justify-content-between flex-wrap">
			<div class="col">
				<div class="card card-stats">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<span class="h2 font-weight-bold mb-0 total-transfers" id="total-device">
									{{  $totalBlogs }}
								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-blog-text mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0">{{ __('Total Blogs') }}</h5>
						<p></p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-stats">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<span class="h2 font-weight-bold mb-0 total-transfers" id="total-active">
									{{  $activeBlogs }}
								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi  fi-rs-circle-book-open mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0">{{ __('Active Blogs') }}</h5>
						<p></p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-stats">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<span class="h2 font-weight-bold mb-0 completed-transfers" id="total-inactive">
									{{$totalBlogs -  $activeBlogs }}
								</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-comment-exclamation mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0">{{ __('Inactive Blogs') }}</h5>
						<p></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col">
		<div class="card">
			<!-- Card header -->

				<div class="card-header border-0">
				<h3 class="mb-0">{{ __('Blogs') }}</h3>
				<form action="" class="card-header-form">
					<div class="input-group">
						<input type="text" name="search" value="{{ $request->search ?? '' }}" class="form-control" placeholder="{{ __('title......') }}">

						<div class="input-group-btn">
							<button class="btn btn-neutral btn-icon"><i class="fas fa-search"></i></button>
						</div>
					</div>
				</form>
			</div>

			<!-- Light table -->
			<div class="table-responsive">
				<table class="table align-items-center table-flush">
					<thead class="thead-light">
						<tr>
							<th class="col-3">{{ __('Title') }}</th>
							<th class="col-3">{{ __('Url') }}</th>
							<th class="col-1">{{ __('Publish') }}</th>
							<th class="col-2">{{ __('Created At') }}</th>
							<th class="col-1 text-right">{{ __('Action') }}</th>
						</tr>
					</thead>
						@foreach($blogs ?? [] as $blog)
						<tr>
							<td class="text-left">
								<img src="{{ asset($blog->photo) }}" class="avatar rounded-square mr-3">
								{{ Str::limit($blog->title,20) }}
							</td>
							<td class="text-left">
								<a href="{{ url('blog/'.$blog->slug) }}" target="_blank">{{ Str::limit(url('blog/'.$blog->slug),50) }}</a>
							</td>

							<td class="text-left">
								<span class="badge badge-{{ $blog->publish == 1 ? 'success' : 'danger' }}">
									{{ $blog->publish == 1 ? __('publish') : __('unpublish') }}
								</span>
							</td>
							<td>
								{{ $blog->created_at->format('F-d-Y') }}
							</td>
							<td class="text-right">
								<div class="btn-group mb-2 float-right">
									<button class="btn btn-neutral btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										{{ __('Action') }}
									</button>
									<div class="dropdown-menu">

										<a class="dropdown-item has-icon" href="{{ route('admin.blog.edit',$blog->slug) }}"><i class="fi fi-rs-edit"></i>{{ __('Edit Blog') }}</a>

										<a class="dropdown-item has-icon delete-confirm" href="javascript:void(0)" data-action="{{ route('admin.blog.destroy',$blog->slug) }}"><i class="fas fa-trash"></i>{{ __('Remove Blog') }}</a>
									</div>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				@if(count($blogs) == 0)
				<div class="text-center mt-2">
					<div class="alert  bg-gradient-primary text-white">
						<span class="text-left">{{ __('!Oops no records found') }}</span>
					</div>
				</div>
				@endif
			</div>

			<div class="card-footer">
				{{ $blogs->links()}}
			</div>
		</div>
	</div>
</div>
@endsection
