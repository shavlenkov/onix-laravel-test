<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Blog</a>
        <ul class="nav d-flex">
            <li class="nav-item"><a class="nav-link fw-bold text-light" href="{{ route('home') }}">Home</a></li>
            @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('profile.articles.index') }}">
                        {{ Auth::user()->getNameAndSurname() }}
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link text-light" href="{{ route('get.logout') }}">Вийти</a></li>
            @else
                <li class="nav-item"><a class="nav-link text-light" href="{{ route('get.signup') }}">Зареєструватись</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="{{ route('get.signin') }}">Увійти</a></li>
            @endif
        </ul>
    </div>
</nav>
