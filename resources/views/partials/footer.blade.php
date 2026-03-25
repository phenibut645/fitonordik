<footer class="site-footer">
    <div class="container site-footer__top">
        <div class="site-footer__brand">
            <img class="site-footer__logo" src="{{ asset('fitonordic-logo.jpg') }}" alt="FITONORDIC LAB logo">
            <p class="footer-copy">
                {{ __('European full-cycle cosmetics manufacturing with focus on laboratory development, packaging, oils, and Private Label production in Estonia.') }}
            </p>
        </div>

        <div class="site-footer__columns">
            <div>
                <p class="footer-label">{{ __('Navigation') }}</p>
                <div class="footer-links footer-links--stack">
                    @foreach ($navigation as $item)
                        <a href="{{ route($item['route']) }}">{{ __($item['label']) }}</a>
                    @endforeach
                </div>
            </div>

            <div>
                <p class="footer-label">{{ __('Legal pages') }}</p>
                <div class="footer-links footer-links--stack">
                    @foreach ($legalNavigation as $item)
                        <a href="{{ route($item['route']) }}">{{ __($item['label']) }}</a>
                    @endforeach
                </div>
            </div>

            <div>
                <p class="footer-label">{{ __('Contacts') }}</p>
                <div class="footer-links footer-links--stack footer-links--plain">
                    <span>{{ __('Estonia production base') }}</span>
                    <a href="{{ route('contacts') }}">{{ __('Open contact page') }}</a>
                    <span>{{ __('Private Label and contract manufacturing') }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container site-footer__bottom">
        <span>FITONORDIC LAB</span>
        <span>{{ __('Cosmetics and oils production presentation') }}</span>
        <div class="footer-links">
            @foreach ($legalNavigation as $item)
                <a href="{{ route($item['route']) }}">{{ __($item['label']) }}</a>
            @endforeach
        </div>
    </div>
</footer>
