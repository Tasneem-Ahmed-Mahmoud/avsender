




@if ($childrens)
    @if (isset($childrens->children) && count($childrens->children) > 0)
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-capitalize" href="#" id="navbarDropdown-sub" role="button"
               data-bs-toggle="dropdown" aria-expanded="false"
               href="{{ url($childrens->href) }}"
               @if (!empty($childrens->target)) target="{{ $childrens->target }}" @endif>
               {{ $childrens->text }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown-sub">
                @foreach ($childrens->children as $row)
                    @include('frontend.menu.submenu', ['childrens' => $row])
                @endforeach
            </ul>
        </li>
    @else
        <li>
            <a class="dropdown-item" href="{{ url($childrens->href) }}"
               @if (!empty($childrens->target)) target="{{ $childrens->target }}" @endif>
               {{ $childrens->text }}
            </a>
        </li>
    @endif
@endif
