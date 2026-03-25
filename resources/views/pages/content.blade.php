@extends('layouts.app')

@section('content')
    <section class="page-intro">
        <div class="container">
            <p class="eyebrow">{{ __($page['eyebrow']) }}</p>
            <h1>{{ __($page['title']) }}</h1>
            <p class="lead">{{ __($page['intro']) }}</p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="card-grid">
                @foreach ($page['sections'] as $section)
                    <article class="info-card info-card--spacious">
                        <h2>{{ __($section['title']) }}</h2>
                        <ul class="check-list">
                            @foreach ($section['items'] as $item)
                                <li>{{ __($item) }}</li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    @if ($pageKey === 'contacts')
        <section class="section">
            <div class="container">
                <article class="info-card info-card--spacious">
                    <h2>{{ __('Send us a request') }}</h2>
                    <p>{{ __('Fill in the form and we will get back to you.') }}</p>

                    @if (session('status'))
                        <p class="form-success">{{ session('status') }}</p>
                    @endif

                    @if ($errors->any())
                        <div class="form-errors">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="contact-form" method="post" action="{{ route('contacts.submit') }}">
                        @csrf
                        <label>
                            <span>{{ __('Name') }}</span>
                            <input type="text" name="name" value="{{ old('name') }}" required>
                        </label>

                        <label>
                            <span>{{ __('Email') }}</span>
                            <input type="email" name="email" value="{{ old('email') }}" required>
                        </label>

                        <label>
                            <span>{{ __('Company') }}</span>
                            <input type="text" name="company" value="{{ old('company') }}">
                        </label>

                        <label>
                            <span>{{ __('Message') }}</span>
                            <textarea name="message" rows="6" required>{{ old('message') }}</textarea>
                        </label>

                        <button class="button" type="submit">{{ __('Send request') }}</button>
                    </form>
                </article>
            </div>
        </section>
    @endif
@endsection
