




@if(!empty($data))

@foreach ($data['data'] ?? [] as $row)

@if (isset($row->children))


<li class="nav-item dropdown">
	<a class="nav-link dropdown-toggle text-capitalize" href="#" id="navbarDropdown" role="button"
		data-bs-toggle="dropdown" aria-expanded="false">
		{{ $row->text }}
	</a>
	<ul class="dropdown-menu" aria-labelledby="navbarDropdown">

		@foreach($row->children as $childrens)
		@include('frontend.menu.submenu', ['childrens' => $childrens])
		@endforeach
	</ul>
</li>

@else
<li class="nav-item me-5">
	<a href="{{ url($row->href ?? '') }}" class="nav-link " aria-current="page" @if(!empty($row->target))
		target="{{ $row->target }}" @endif>{{ $row->text ?? '' }}</a>
</li>

@endif
@endforeach
@endif

<li class="nave-item search-icon-container ms-5">
	<a href="#" class="nav-link "> <i class="fa-solid fa-magnifying-glass search-icon"></i></a>
</li>