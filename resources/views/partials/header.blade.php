
<header class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <h2 class="mb-0 text-white">Testo <span>Prova</span></h2>
        <nav>
            <ul class="list-unstyled d-flex align-items-center mb-0 gap-5">
                <li>
                    <a class="{{ Route::currentRouteName() == 'home' ? 'active_li' : '' }}"
                    href="{{route('home')}}">Home</a>
                </li>
                <li>
                    <a class="{{ Route::currentRouteName() == 'gifts.index' ? 'active_li' : '' }}"
                    href="{{route('gifts.index')}}">Gifts</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

