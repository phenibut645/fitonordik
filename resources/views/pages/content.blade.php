@extends('layouts.app')

@section('content')
    <section class="page-intro">
        <div class="container">
            <p class="eyebrow">{{ $page['eyebrow'] }}</p>
            <h1>{{ $page['title'] }}</h1>
            <p class="lead">{{ $page['intro'] }}</p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="card-grid">
                @foreach ($page['sections'] as $section)
                    <article class="info-card info-card--spacious">
                        <h2>{{ $section['title'] }}</h2>
                        <ul class="check-list">
                            @foreach ($section['items'] as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
