<header class="site-header">
    <div class="container site-header__inner">
        <a class="brand" href="{{ route('home') }}">
            <img class="brand__image" src="{{ asset('fitonordic-logo.jpg') }}" alt="FITONORDIC LAB logo">
        </a>

        <nav class="site-nav" aria-label="Main navigation">
            @foreach ($navigation as $item)
                <a
                    class="{{ request()->routeIs($item['route']) ? 'is-active' : '' }}"
                    href="{{ route($item['route']) }}"
                >
                    {{ __($item['label']) }}
                </a>
            @endforeach
        </nav>

        <a class="button button--ghost" href="{{ route('contacts') }}">{{ __('Contact us') }}</a>
    </div>
</header>
