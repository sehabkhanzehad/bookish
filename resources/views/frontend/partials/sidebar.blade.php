<div class="sidebar">
    <div class="d-flex justify-content-between align-items-center px-3 side_bar">
        <a href="{{route('front.home') }}" class="text-light text-decoration-none"><i class="fas fa-home"></i> হোম</a>
        <button class="btn text-light dismiss"><i class="fas fas fa-times"></i></button>
    </div>
    <ul class="navbar-nav px-3" style="background: #0C92C5;">
        @foreach (menuLinks() as $menu)
            @if ($menu->category)
                <li class="nav-item">
                    <a href="{{ route('front.shop') }}?category={{ $menu->category->id }}" class="nav-link {{ request()->fullUrlIs(route('front.shop') . '?category=' . $menu->category->id) ? 'active' : '' }}">
                        <i class="fas fa-book"></i> {{ $menu->category->name }}
                    </a>
                </li>
            @endif
        @endforeach
        <li class="nav-item"><a href="{{ route('front.subjects') }}" class="nav-link {{ request()->routeIs('front.subjects') ? 'active' : '' }}"><i class="fas fa-book-open"></i> বিষয়</a>
        </li>
        <li class="nav-item"><a href="{{ route('front.writers') }}" class="nav-link {{ request()->routeIs('front.writers') ? 'active' : '' }}"><i class="fas fa-user"></i> লেখক</a>
        </li>
        <li class="nav-item"><a href="{{ route('front.publications') }}" class="nav-link {{ request()->routeIs('front.publications') ? 'active' : '' }}"><i class="fab fa-leanpub"></i> প্রকাশক</a>
        </li>
        <li class="nav-item"><a href="{{ route('front.best.seller') }}" class="nav-link {{ request()->routeIs('front.best.seller') ? 'active' : '' }}"><i class="fas fa-book"></i> বইমেলা ২০২৪</a>
        </li>
        <li class="nav-item"><a href="{{ route('front.pre.order') }}" class="nav-link {{ request()->routeIs('front.pre.order') ? 'active' : '' }}"><i class="fas fa-book-reader"></i> প্রি-অর্ডার</a>
        </li>
    </ul>
</div>
