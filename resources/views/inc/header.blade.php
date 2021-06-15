<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center text-dark text-decoration-none" id="logo">
        <span class="fs-4">Learn Lara</span>
    </a>

    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto" id="nav">
        <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('home') }}">Главная</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('contact') }}">Контакты</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('about') }}">О нас</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('reviews') }}">Отзывы</a>
        @guest
            @if (Route::has('login'))
                <a class="btn btn-outline-primary" href="{{ route('login') }}">Sign up</a>
            @endif

            @if (Route::has('register'))
                <a class="btn btn-outline-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        @else
            <p class="me-3 py-2 text-dark text-decoration-none">{{ Auth::user()->name }}</p>
            <img src="https://www.svgrepo.com/show/70546/logout.svg" id="logout" intrinsicsize="512 x 512" width="30" height="30" srcset="https://www.svgrepo.com/show/70546/logout.svg 4x" alt="Logout SVG Vector" title="Logout SVG Vector" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

            </li>
        @endguest
    </nav>
</div>
