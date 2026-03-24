@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div>
                <p class="eyebrow">Production in Estonia</p>
                <h1>European full-cycle cosmetics manufacturing in Estonia.</h1>
                <p class="lead">
                    FITONORDIC LAB combines laboratory development, production, packaging, and quality control in one clear process.
                    The current site version is focused on therapeutic and care cosmetics, plus essential, cosmetic, and fatty oils.
                </p>
                <div class="hero__actions">
                    <a class="button" href="{{ route('contacts') }}">Discuss project</a>
                    <a class="button button--ghost" href="{{ route('production-capabilities') }}">View production</a>
                </div>
            </div>

            <aside class="hero-card hero-card--media">
                <div class="media-frame">
                    <video autoplay muted loop playsinline preload="auto" poster="{{ asset('production-poster.png') }}" tabindex="-1" aria-hidden="true">
                        <source src="{{ asset('production-preview.mp4') }}" type="video/mp4">
                    </video>
                    <div class="media-badge">Production preview</div>
                </div>
                <div class="hero-note">
                    <p>Own laboratory</p>
                    <p>Packaging area</p>
                    <p>Reverse osmosis system</p>
                    <p>Warehouse and equipment</p>
                </div>
            </aside>
        </div>
    </section>

    <section class="trust-strip">
        <div class="container trust-strip__grid">
            <span>Production in Estonia</span>
            <span>Own laboratory</span>
            <span>Packaging area</span>
            <span>Warehouse</span>
            <span>Private Label workflow</span>
            <span>EU market preparation</span>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">What we produce</p>
                <h2>Focused categories for the current site version.</h2>
                <p>
                    The presentation should stay concentrated on the areas where formula stability, raw material quality,
                    and careful manufacturing are most important.
                </p>
            </div>

            <div class="card-grid card-grid--three">
                <article class="info-card">
                    <h3>Therapeutic and preventive cosmetics</h3>
                    <p>Daily-use solutions created with attention to formula stability, comfort, and ingredient logic.</p>
                </article>
                <article class="info-card">
                    <h3>Care cosmetics</h3>
                    <p>Creams, serums, face, body, and hair products designed for clear everyday use.</p>
                </article>
                <article class="info-card">
                    <h3>Oils</h3>
                    <p>Essential, cosmetic, and fatty oils with focus on raw material quality and careful processing.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="section section--accent">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">Production capabilities</p>
                <h2>Infrastructure that supports quality in practice.</h2>
            </div>

            <div class="timeline">
                <article>
                    <span>01</span>
                    <h3>Laboratory</h3>
                    <p>Own development and testing environment for product formulas and production samples.</p>
                </article>
                <article>
                    <span>02</span>
                    <h3>Water treatment</h3>
                    <p>Reverse osmosis system prepared as one of the key trust markers on the website.</p>
                </article>
                <article>
                    <span>03</span>
                    <h3>Packaging area</h3>
                    <p>Own packaging process and updated equipment for more stable product output.</p>
                </article>
                <article>
                    <span>04</span>
                    <h3>Warehouse</h3>
                    <p>Storage and production support space that completes the in-house manufacturing chain.</p>
                </article>
                <article>
                    <span>05</span>
                    <h3>EU-ready process</h3>
                    <p>Support for packaging, documentation, and market preparation for European distribution.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">Full-cycle workflow</p>
                <h2>From task to finished product.</h2>
            </div>

            <div class="steps-grid">
                <article class="step-card">
                    <span>01</span>
                    <h3>Task setting</h3>
                    <p>Define the product category, market requirements, format, and business goals.</p>
                </article>
                <article class="step-card">
                    <span>02</span>
                    <h3>Formula development</h3>
                    <p>Select composition, texture, properties, and the right product format.</p>
                </article>
                <article class="step-card">
                    <span>03</span>
                    <h3>Testing</h3>
                    <p>Prepare samples, evaluate the result, and refine the working version.</p>
                </article>
                <article class="step-card">
                    <span>04</span>
                    <h3>Production and packaging</h3>
                    <p>Launch the approved formula into manufacturing, filling, and packaging.</p>
                </article>
                <article class="step-card">
                    <span>05</span>
                    <h3>Market preparation</h3>
                    <p>Support packaging, labeling, and adaptation for EU market requirements.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading section-heading--center">
                <p class="eyebrow">How we support brands</p>
                <h2>Choose the stage where FITONORDIC LAB adds the most value.</h2>
                <p>
                    This block is adapted from the tabbed reference you sent, but focused on contract manufacturing,
                    production support, and private label launch.
                </p>
            </div>

            <section class="solutions" data-solutions>
                <div class="solutions__tabs">
                    <button class="solutions__tab is-active" type="button" data-solution="development">Formula & R&amp;D</button>
                    <button class="solutions__tab" type="button" data-solution="production">Production setup</button>
                    <button class="solutions__tab" type="button" data-solution="packaging">Packaging</button>
                    <button class="solutions__tab" type="button" data-solution="compliance">EU adaptation</button>
                    <button class="solutions__tab" type="button" data-solution="launch">Private Label launch</button>
                </div>

                <div class="solutions__panel is-active" data-solution-panel="development">
                    <div class="solutions__content">
                        <h3>Formula & R&amp;D</h3>
                        <p>
                            We help turn the product idea into a stable working formula with the right texture,
                            ingredient logic, and production-ready structure.
                        </p>
                        <ul class="check-list">
                            <li>Category definition and product brief alignment</li>
                            <li>Work on texture, function, and user experience</li>
                            <li>Sample preparation and iterative testing</li>
                            <li>Adjustment before production launch</li>
                        </ul>
                    </div>
                    <div class="solutions__media">
                        <video autoplay muted loop playsinline preload="auto" poster="{{ asset('production-poster.png') }}" tabindex="-1" aria-hidden="true">
                            <source src="{{ asset('production-preview.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>

                <div class="solutions__panel" data-solution-panel="production">
                    <div class="solutions__content">
                        <h3>Production setup</h3>
                        <p>
                            FITONORDIC LAB combines laboratory work, production infrastructure, and quality control
                            so the product can move from concept to repeatable manufacturing.
                        </p>
                        <ul class="check-list">
                            <li>In-house laboratory and reverse osmosis system</li>
                            <li>Packaging area and warehouse support</li>
                            <li>Stable process for repeatable batches</li>
                            <li>Clear production communication for client teams</li>
                        </ul>
                    </div>
                    <div class="solutions__media">
                        <img src="{{ asset('production-poster.png') }}" alt="Production support at FITONORDIC LAB">
                    </div>
                </div>

                <div class="solutions__panel" data-solution-panel="packaging">
                    <div class="solutions__content">
                        <h3>Packaging</h3>
                        <p>
                            We support the practical side of filling, packaging, and preparing a finished product
                            for presentation and delivery.
                        </p>
                        <ul class="check-list">
                            <li>Packaging format selection</li>
                            <li>Support for filling and finished product preparation</li>
                            <li>More stable output with updated equipment</li>
                            <li>Ready-to-ship product batches</li>
                        </ul>
                    </div>
                    <div class="solutions__media">
                        <img src="{{ asset('fitonordic-logo.jpg') }}" alt="FITONORDIC LAB packaging support">
                    </div>
                </div>

                <div class="solutions__panel" data-solution-panel="compliance">
                    <div class="solutions__content">
                        <h3>EU adaptation</h3>
                        <p>
                            The project can be prepared with a clearer path toward EU market presentation,
                            labeling, and documentation requirements.
                        </p>
                        <ul class="check-list">
                            <li>Packaging and label preparation support</li>
                            <li>More structured route toward EU market entry</li>
                            <li>Production partner perspective on practical compliance</li>
                            <li>Clearer transition from formula to finished product</li>
                        </ul>
                    </div>
                    <div class="solutions__media">
                        <img src="{{ asset('production-poster.png') }}" alt="EU market adaptation support">
                    </div>
                </div>

                <div class="solutions__panel" data-solution-panel="launch">
                    <div class="solutions__content">
                        <h3>Private Label launch</h3>
                        <p>
                            The collaboration model is built for brands that need a manufacturing partner,
                            not just a supplier of isolated production steps.
                        </p>
                        <ul class="check-list">
                            <li>From project discussion to finished product</li>
                            <li>Suitable for cosmetic brands and e-commerce projects</li>
                            <li>Structured workflow for contract manufacturing</li>
                            <li>Clear next step for long-term partnership</li>
                        </ul>
                    </div>
                    <div class="solutions__media">
                        <img src="{{ asset('fitonordic-logo.jpg') }}" alt="Private label launch support">
                    </div>
                </div>
            </section>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const root = document.querySelector('[data-solutions]');

            if (!root) {
                return;
            }

            const tabs = root.querySelectorAll('[data-solution]');
            const panels = root.querySelectorAll('[data-solution-panel]');

            tabs.forEach((tab) => {
                tab.addEventListener('click', () => {
                    const key = tab.dataset.solution;

                    tabs.forEach((item) => item.classList.toggle('is-active', item === tab));
                    panels.forEach((panel) => {
                        panel.classList.toggle('is-active', panel.dataset.solutionPanel === key);
                    });
                });
            });
        });
    </script>
@endsection
