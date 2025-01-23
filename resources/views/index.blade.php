@extends('site.components.layout')


@section('index')

    <div class="stg-container">
        <!-- Hero Section -->
        <section>
            <div class="bringer-hero-block bringer-hero-type01">
                <!-- Main Line -->
                <div class="stg-row stg-bottom-gap-l stg-m-bottom-gap-l">
                    <div class="stg-col-9 stg-tp-col-8 stg-m-col-12">
                        <!-- Title -->
                        <h1 style="font-family: Orbitron, serif;" class="bringer-page-title" data-appear="fade-up"
                            data-unload="fade-up">Easy Web Solutions
                        </h1>
                    </div>
                    {{--                        <div class="stg-col-3 stg-tp-col-4 stg-m-col-12">--}}
                    {{--                            <!-- Social Proof -->--}}
                    {{--                            <div class="bringer-hero-social-proof">--}}
                    {{--                                <div data-stagger-appear="fade-up" data-stagger-delay="100" data-stagger-unload="fade-up">--}}
                    {{--                                    <img src="img/home/social-proof01.jpg" alt="Client 01">--}}
                    {{--                                    <img src="img/home/social-proof02.jpg" alt="Client 02">--}}
                    {{--                                    <img src="img/home/social-proof03.jpg" alt="Client 03">--}}
                    {{--                                    <a href="testimonials.html">24K+</a>--}}
                    {{--                                </div>--}}
                    {{--                                <p data-appear="fade-up" data-unload="fade-up" data-delay="200">Trusted by 24K+ clients</p>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                </div><!-- .stg-row -->

                <!-- Masked Media Container -->
                <div class="bringer-hero-media-wrap bringer-masked-bottom-right bringer-masked-block stg-bottom-gap-l"
                     data-appear="zoom-out" data-unload="zoom-out">
                    <!-- Masked Media -->
                    <div class="bringer-masked-media bringer-masked-media bringer-parallax-media">
                        <img style="width: 100%;height: 300px;object-fit: cover" src="img/home/keyboard.gif"
                             alt="Unleash Your Creativity">
                    </div>
                    <!-- Content -->
                    <div class="bringer-masked-content at-bottom-right">
                        <a href="#page01" class="bringer-square-button" data-appear="fade-left">
                            <span class="bringer-icon bringer-icon-arrow-down"></span>
                        </a>
                    </div>
                </div>

                <!-- Additional Information Line -->
                <div class="stg-row stg-valign-bottom">
                    <div class="stg-col-3 stg-tp-col-3 stg-m-col-6" data-appear="fade-up" data-delay="200"
                         data-unload="fade-up">
                        <div class="bringer-counter bringer-small-counter" data-delay="3000">
                            <div class="bringer-counter-number" data-suffix="+">42</div>
                            <div class="bringer-counter-label">{{__('Complated Projects')}}</div>
                        </div><!-- .bringer-counter -->
                    </div>
                    <div class="stg-col-3 stg-tp-col-3 stg-m-col-6" data-appear="fade-up" data-delay="300"
                         data-unload="fade-up">
                        <div class="bringer-counter bringer-small-counter" data-delay="3000">
                            <div class="bringer-counter-number" data-suffix="+">7</div>
                            <div class="bringer-counter-label">{{__('Years of Experience')}}</div>
                        </div><!-- .bringer-counter -->
                    </div>
                    <div class="stg-col-6 stg-tp-col-6 stg-m-col-12 stg-m-top-gap" data-appear="fade-up"
                         data-delay="400" data-unload="fade-up">
                        <p class="bringer-large-text">
                            {{__('main message')}}
                        </p>
                    </div>
                </div><!-- .stg-row -->
            </div><!-- .bringer-hero-block -->
        </section>

        <!-- Section: Our Services -->
        <section class="backlight-bottom" id="page01">
            <!-- Section Title -->
            <div class="stg-row bringer-section-title">
                <div class="stg-col-8 stg-offset-2">
                    <div class="align-center">
                        <h2 data-appear="fade-up" data-unload="fade-up">{{__('Our Services')}}</h2>
                        <p class="bringer-large-text is-short" data-appear="fade-up" data-unload="fade-up"
                           data-delay="100">
                            {{__('service description')}}
                        </p>
                    </div>
                </div>
            </div>
            <!-- Section Content -->
            <div class="stg-row stg-valign-middle stg-large-gap">
                <div class="stg-col-4 bringer-tp-grid-2cols bringer-m-grid-1col">
                    <!-- Icon Box -->
                    <div class="bringer-image-box" data-appear="fade-right" data-unload="fade-left">
                        <div class="bringer-image-box-head">
                            {{--                            <img src="img/home/service01-thmb.jpg" alt="Branding">--}}
                            <img style="min-width: 80px;min-height: 80px;object-fit: cover" src="img/home/coding.webp"
                                 alt="Website development">
                            <h5>{{__('Website Development')}}<span class="bringer-accent">.</span></h5>
                        </div>
                        <div class="bringer-image-box-content">
                            <p>
                                {{__('webdev')}}
                            </p>

                            <ul style="margin:0 calc(0.5* var(--stg-gap))">
                                <li>{{__('Personal')}}</li>
                                <li>{{__('Corporate')}}</li>
                                <li>{{__('Catalogue')}}</li>
                                <li>{{__('and many more')}}</li>
                            </ul>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div><!-- .bringer-image-box -->
                    <!-- Icon Box -->
                    <div class="bringer-image-box stg-m-bottom-gap-l" data-appear="fade-right" data-unload="fade-left"
                         data-delay="100">
                        <div class="bringer-image-box-head">
                            <img style="min-width: 80px;min-height: 80px;object-fit: cover" src="img/home/coding2.jpg"
                                 alt="Marketing">
                            <h5 style="font-size: 20px;text-align: center">{{__('CRM and Web Applications')}}<span
                                        class="bringer-accent">.</span></h5>
                        </div>
                        <div class="bringer-image-box-content">
                            <p>
                                {{__('crm text')}}
                            </p>
                        </div>
                    </div><!-- .bringer-image-box -->
                </div>
                <div class="stg-col-4 stg-tp-col-8 stg-tp-offset-2 stg-tp-bottom-gap-l" data-appear="zoom-out"
                     data-unload="zoom-out" data-delay="150">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/home/portfolio.jpg"
                             alt="Our Services"
                             width="800" height="1200">
                    </div>
                </div>
                <div class="stg-col-4 bringer-tp-grid-2cols bringer-m-grid-1col">
                    <!-- Icon Box -->
                    <div class="bringer-image-box" data-appear="fade-left" data-unload="fade-right">
                        <div class="bringer-image-box-head">
                            <img style="min-width: 80px;min-height: 80px;object-fit: cover"
                                 src="img/home/service03-thmb.jpg" alt="Web Design">
                            <h5>{{__('Web Design')}}<span class="bringer-accent">.</span></h5>
                        </div>
                        <div class="bringer-image-box-content">
                            <p>
                                {{__('design text')}}
                            </p>

                        </div>
                    </div><!-- .bringer-image-box -->
                    <!-- Icon Box -->
                    <div class="bringer-image-box" data-appear="fade-left" data-unload="fade-right" data-delay="100">
                        <div class="bringer-image-box-head">
                            <img style="min-width: 80px;min-height: 80px;object-fit: cover" src="img/home/coding3.webp"
                                 alt="Graphic Design">
                            <h5>{{__('Ecommerce')}}<span class="bringer-accent">.</span></h5>
                        </div>
                        <div class="bringer-image-box-content">
                            <p>
                                {!! __('ecommerce text') !!}
                            </p>
                        </div>
                    </div><!-- .bringer-image-box -->
                </div>
            </div>
        </section>
        <!-- Section: Steps -->
        <section class="backlight-top">
            <div class="stg-bottom-gap-l">
                <h2 data-appear="fade-up" data-unload="fade-up">{{__('steps header')}}</h2>
            </div>
            <!-- Step 01 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
                <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/home/service-details01.jpg"
                             alt="Step 01"
                             width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                    <span class="bringer-label">{{__('Step')}} 01</span>
                    <h4>{{__('Planning')}}</h4>
                    <p>
                        {{__('planning text')}}
                    </p>
                </div>
            </div>
            <!-- Step 02 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-tp-row-reverse stg-m-bottom-gap-l"
                 data-unload="fade-right">
                <div class="stg-col-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-left">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/home/step03.jpg" alt="Step 02"
                             width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-left" data-delay="100">
                    <span class="bringer-label">{{__('Step')}} 02</span>
                    <h4>{{__('Prototype')}}</h4>
                    <p>
                        {{__('Prototype Text')}}
                    </p>
                </div>
                <div class="stg-col-3"><!-- Empty Column --></div>
            </div>
            <!-- Step 03 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
                <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/home/step04.jpg" alt="Step 03"
                             width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                    <span class="bringer-label">{{__('Step')}} 03</span>
                    <h4>{{__('Lift Off')}}</h4>
                    <p>
                        {{__('Liftoff text')}}
                    </p>
                </div>
            </div>
            <!-- Step 04 Row -->
            {{--            <div class="stg-row stg-valign-middle stg-tp-row-reverse" data-unload="fade-right">--}}
            {{--                <div class="stg-col-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-left">--}}
            {{--                    <div class="bringer-parallax-media">--}}
            {{--                        <img class="bringer-lazy" src="img/null.png" data-src="img/home/step04.jpg" alt="Step 04"--}}
            {{--                             width="960" height="960">--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-left" data-delay="100">--}}
            {{--                    <span class="bringer-label">{{__('Step')}} 04</span>--}}
            {{--                    <h4>Launch &amp; Beyond</h4>--}}
            {{--                    <p><span class="bringer-highlight">Strategic Launch:</span> We'll unveil your brand to the world--}}
            {{--                        with a tailored launch strategy that generates excitement and drives engagement. This is where--}}
            {{--                        we create a buzz and make your presence known.</p>--}}
            {{--                    <p><span class="bringer-highlight">Ongoing Optimization:</span> We'll monitor your progress, analyze--}}
            {{--                        data, and make continuous adjustments to ensure your brand stays ahead of the curve. This is--}}
            {{--                        where we embrace growth and adaptation.</p>--}}
            {{--                </div>--}}
            {{--                <div class="stg-col-3"><!-- Empty Column --></div>--}}
            {{--            </div>--}}
        </section>

        <!-- Section: Portfolio -->
        <section>
            <!-- Section Title -->
            <div class="stg-row bringer-section-title">
                <div class="stg-col-8 stg-offset-2">
                    <div class="align-center">
                        <h2 data-appear="fade-up" data-unload="fade-up">Portfolio</h2>
                        <p class="bringer-large-text" data-appear="fade-up" data-unload="fade-up" data-delay="100">We
                            are proud of our work, and we are always looking for new challenges. Take a look at some of
                            our recent portfolios:</p>
                    </div>
                </div>
            </div>
            <!-- Portfolio List -->
            <div class="stg-row stg-valign-middle stg-tp-column-reverse">
                <div class="stg-col-6" data-unload="fade-left" data-delay="100">
                    <div class="bringer-grid-1col">
                        <!-- Portfolio List Item -->
                        <div class="bringer-block bringer-portfolio-short-item" data-appear="fade-right" data-delay="0">
                            <div class="bringer-portfolio-thmb">
                                <img class="bringer-lazy" src="img/null.png"
                                     data-src="img/portfolio/portfolio01-thmb.jpg" alt="" width="1200" height="1200">
                            </div>
                            <div class="bringer-portfolio-short-title">
                                <span class="bringer-meta">Branding</span>
                                <h6>Curology</h6>
                            </div>
                            <span class="bringer-icon bringer-icon-explore"></span>
                            <a href="portfolio-post01.html"></a>
                        </div><!-- .bringer-portfolio-short-item -->

                        <!-- Portfolio List Item -->
                        <div class="bringer-block bringer-portfolio-short-item" data-appear="fade-right"
                             data-delay="100">
                            <div class="bringer-portfolio-thmb">
                                <img class="bringer-lazy" src="img/null.png"
                                     data-src="img/portfolio/portfolio02-thmb.jpg" alt="" width="1200" height="1200">
                            </div>
                            <div class="bringer-portfolio-short-title">
                                <span class="bringer-meta">Advertising</span>
                                <h6>Cookie Dough</h6>
                            </div>
                            <span class="bringer-icon bringer-icon-explore"></span>
                            <a href="portfolio-post02.html"></a>
                        </div><!-- .bringer-portfolio-short-item -->

                        <!-- Portfolio List Item -->
                        <div class="bringer-block bringer-portfolio-short-item" data-appear="fade-right"
                             data-delay="200">
                            <div class="bringer-portfolio-thmb">
                                <img class="bringer-lazy" src="img/null.png"
                                     data-src="img/portfolio/portfolio03-thmb.jpg" alt="" width="1200" height="1200">
                            </div>
                            <div class="bringer-portfolio-short-title">
                                <span class="bringer-meta">Marketing</span>
                                <h6>Gaming Power</h6>
                            </div>
                            <span class="bringer-icon bringer-icon-explore"></span>
                            <a href="portfolio-post03.html"></a>
                        </div><!-- .bringer-portfolio-short-item -->

                        <!-- Portfolio List Item -->
                        <div class="bringer-block bringer-portfolio-short-item" data-appear="fade-right"
                             data-delay="300">
                            <div class="bringer-portfolio-thmb">
                                <img class="bringer-lazy" src="img/null.png"
                                     data-src="img/portfolio/portfolio04-thmb.jpg" alt="" width="1200" height="1200">
                            </div>
                            <div class="bringer-portfolio-short-title">
                                <span class="bringer-meta">Advertising</span>
                                <h6>Riot Energy</h6>
                            </div>
                            <span class="bringer-icon bringer-icon-explore"></span>
                            <a href="portfolio-post04.html"></a>
                        </div><!-- .bringer-portfolio-short-item -->

                        <!-- Learn More -->
                        <div class="bringer-portfolio-short-item bringer-portfolio-short-more" data-appear="fade-right"
                             data-delay="400">
                            <div class="bringer-portfolio-short-title">
                                <span class="bringer-label">Click to explore</span>
                                <h6>Full Portfolio</h6>
                            </div>
                            <span class="bringer-icon bringer-icon-explore"></span>
                            <a href="portfolio-infinite-list.html"></a>
                        </div><!-- .bringer-portfolio-short-more -->
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-bottom-gap" data-unload="fade-right" data-delay="200">
                    <div class="bringer-parallax-media" data-appear="fade-left">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/home/portfolio.jpg"
                             alt="Our Portfolio" width="960" height="1095">
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: CTA -->
    </div>

@endsection