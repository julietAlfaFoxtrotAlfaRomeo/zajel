@extends('components.layout')

@section('content')

<!-- # intro
        ================================================== -->
<section id="intro" class="s-intro target-section">

    <div class="row">
        <div class="column">
            <div class="s-intro__top-block">
                <span class="s-intro__bg"></span>

                <h1 class="s-intro__text">
                    We're a creative group <br>
                    of people who design <br>
                    influential brands and <br>
                    digital experiences<span>.</span>
                </h1>

                <a href="#services" class="s-intro__scroll-down smoothscroll">
                    <span>Scroll Down</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill:rgba(0, 0, 0, 1);transform:rotate(180deg);-ms-filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2)">
                        <path
                            d="M21 11L6.414 11 11.707 5.707 10.293 4.293 2.586 12 10.293 19.707 11.707 18.293 6.414 13 21 13z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="row row-x-center s-intro__about-wrap">
        <div class="column s-intro__about">
            <h2 class="s-intro__about-title">Hello, We Are Tyndale.</h2>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat.
            </p>

        </div>
    </div>

    <div class="row about-stats stats block-lg-one-fourth block-md-one-half block-mob-whole" data-animate-block>

        <div class="column stats__item" data-animate-el>
            <div class="stats__count" data-counter=30><span>30</span>+</div>
            <h5>Happy Customers</h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing
                elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam.
            </p>
        </div>
        <div class="column stats__item" data-animate-el>
            <div class="stats__count" data-counter=35><span>35</span>+</div>
            <h5>Hours Work</h5>
            <p>
                Eleifend donec pretium vulputate sapien nec sagittis
                aliquam malesuada. Eu scelerisque felis imperdiet proin
                fermentum leo. Cursus turpis massa tincidunt.
            </p>
        </div>
        <div class="column stats__item" data-animate-el>
            <div class="stats__count" data-counter=41><span>41</span>+</div>
            <h5>Coffee Drinks</h5>
            <p>
                Volutpat commodo sed egestas egestas fringilla phasellus
                faucibus scelerisque. Est velit egestas dui id ornare.
                Leo urna molestie at elementum.
            </p>
        </div>
        <div class="column stats__item" data-animate-el>
            <div class="stats__count" data-counter=38><span>38</span>+</div>
            <h5>Completed Projects</h5>
            <p>
                Nulla pharetra diam sit amet nisl suscipit adipiscing
                bibendum est. Quis risus sed vulputate odio ut.
                Lectus arcu bibendum at varius vel eu facilisis.
            </p>
        </div>

    </div> <!-- end about-stats -->

</section> <!-- end s-intro -->


<!-- # services
        ================================================== -->
<section id="services" class="s-services target-section">

    <div class="row section-header has-bottom-sep">
        <div class="column lg-12">
            <h3 class="text-pretitle">What We Do</h3>
            <h1 class="text-display-title">
                We’ve got everything you <br>
                need to launch and grow <br>
                your business
            </h1>
        </div>
    </div> <!-- end section-header -->

    <div class="row services-list block-lg-one-half block-tab-whole" data-animate-block>

        <div class="column service-item" data-animate-el>
            <div class="service-icon-block">
                <span class="service-icon service-icon--product-design"></span>
            </div>
            <div class="service-text">
                <h3 class="h4">Product Design</h3>
                <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium.
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint aliquam rhoncus elit.
                </p>
            </div>
        </div>

        <div class="column service-item" data-animate-el>
            <div class="service-icon-block">
                <span class="service-icon service-icon--branding"></span>
            </div>
            <div class="service-text">
                <h3 class="h4">Branding</h3>
                <p>Nulla pharetra diam sit amet nisl suscipit adipiscing bibendum est. Quis risus sed vulputate
                    odio ut. Lectus arcu bibendum at varius vel. Lorem ipsum dolor sit amet consectetur adipiscing
                    elit pellentesque. In nulla posuere sollicitudin aliquam ultrices.
                </p>
            </div>
        </div>

        <div class="column service-item" data-animate-el>
            <div class="service-icon-block">
                <span class="service-icon service-icon--frontend"></span>
            </div>
            <div class="service-text">
                <h3 class="h4">Frontend Development</h3>
                <p>Eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada. Eu scelerisque felis
                    imperdiet proin fermentum leo. Cursus turpis massa tincidunt dui. Quis commodo odio aenean sed
                    adipiscing diam donec adipiscing. Congue mauris rhoncus elit.
                </p>
            </div>
        </div>

        <div class="column service-item" data-animate-el>
            <div class="service-icon-block">
                <span class="service-icon service-icon--research"></span>
            </div>
            <div class="service-text">
                <h3 class="h4">UX Research</h3>
                <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium.
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint donec adipiscing.
                </p>
            </div>
        </div>

        <div class="column service-item" data-animate-el>
            <div class="service-icon-block">
                <span class="service-icon service-icon--illustration"></span>
            </div>
            <div class="service-text">
                <h3 class="h4">Illustration</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua. Venenatis lectus magna fringilla urna. Lectus vestibulum
                    mattis ullamcorper velit sed ullamcorper morbi. Sit amet aliquam.
                </p>
            </div>
        </div>

        <div class="column service-item" data-animate-el>
            <div class="service-icon-block">
                <span class="service-icon service-icon--ecommerce"></span>
            </div>
            <div class="service-text">
                <h3 class="h4">E-Commerce</h3>
                <p>Nullam eget felis eget nunc. Adipiscing commodo elit at imperdiet dui accumsan. Condimentum
                    mattis pellentesque id nibh tortor id aliquet lectus proin. Orci eu lobortis elementum nibh
                    tellus. Tortor vitae purus faucibus ornare suspendisse.
                </p>
            </div>
        </div>

    </div> <!-- end services-list -->

</section> <!-- end s-services -->


<!-- ## works
        ================================================== -->
<section id="works" class="s-works target-section">

    <div class="row section-header section-header--dark has-bottom-sep">
        <div class="column lg-12">
            <h3 class="text-pretitle">Recent Works</h3>
            <h1 class="text-display-title">Here are some of our favorite projects we have done lately. Feel free to
                check them out.</h1>
        </div>
    </div> <!-- end section-header -->

    <div class="row folio-list block-lg-one-third block-tab-one-half block-stack-on-550 collapse" data-animate-block>

        <div class="column">
            <div class="folio-item" data-animate-el>
                <div class="folio-item__thumb">
                    <a class="folio-item__thumb-link" href="assets/images/portfolio/gallery/g-tulips.jpg"
                        title="The Red Wheel" data-size="1050x700">
                        <img src="assets/images/portfolio/tulips.jpg"
                            srcset="assets/images/portfolio/tulips.jpg 1x, assets/images/portfolio/tulips@2x.jpg 2x"
                            alt="">
                    </a>
                </div>
                <div class="folio-item__info">
                    <div class="folio-item__cat">Branding</div>
                    <h4 class="folio-item__title">Coffee & Tulips</h4>
                </div>
                <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project
                    Link</a>
                <div class="folio-item__caption">
                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem
                        corrupti neque nisi.</p>
                </div>
            </div>
        </div> <!-- end column -->
        <div class="column">
            <div class="folio-item" data-animate-el>
                <div class="folio-item__thumb">
                    <a class="folio-item__thumb-link" href="assets/images/portfolio/gallery/g-minimalismo.jpg"
                        title="Music Life" data-size="1050x700">
                        <img src="assets/images/portfolio/minimalismo.jpg"
                            srcset="assets/images/portfolio/minimalismo.jpg 1x, assets/images/portfolio/minimalismo@2x.jpg 2x"
                            alt="">
                    </a>
                </div>
                <div class="folio-item__info">
                    <div class="folio-item__cat">Frontend Design</div>
                    <h4 class="folio-item__title">Minimalismo</h4>
                </div>
                <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project
                    Link</a>
                <div class="folio-item__caption">
                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem
                        corrupti neque nisi.</p>
                </div>
            </div>
        </div> <!-- end column -->
        <div class="column">
            <div class="folio-item" data-animate-el>
                <div class="folio-item__thumb">
                    <a class="folio-item__thumb-link" href="assets/images/portfolio/gallery/g-skaterboy.jpg"
                        Title="OI Logo" data-size="1050x700">
                        <img src="assets/images/portfolio/skaterboy.jpg"
                            srcset="assets/images/portfolio/skaterboy.jpg 1x, assets/images/portfolio/skaterboy@2x.jpg 2x"
                            alt="">
                    </a>
                </div>
                <div class="folio-item__info">
                    <div class="folio-item__cat">Product Design</div>
                    <h4 class="folio-item__title">Skaterboy</h4>
                </div>
                <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project
                    Link</a>
                <div class="folio-item__caption">
                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem
                        corrupti neque nisi.</p>
                </div>
            </div>
        </div> <!-- end column -->
        <div class="column">
            <div class="folio-item" data-animate-el>
                <div class="folio-item__thumb">
                    <a class="folio-item__thumb-link" href="assets/images/portfolio/gallery/g-rucksack.jpg"
                        title="Corrugated Sheets" data-size="1050x700">
                        <img src="assets/images/portfolio/rucksack.jpg"
                            srcset="assets/images/portfolio/rucksack.jpg 1x, assets/images/portfolio/rucksack@2x.jpg 2x"
                            alt="">
                    </a>
                </div>
                <div class="folio-item__info">
                    <div class="folio-item__cat">Frontend Design</div>
                    <h4 class="folio-item__title">Rucksack</h4>
                </div>
                <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project
                    Link</a>
                <div class="folio-item__caption">
                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem
                        corrupti neque nisi.</p>
                </div>
            </div>
        </div> <!-- end column -->
        <div class="column">
            <div class="folio-item" data-animate-el>
                <div class="folio-item__thumb">
                    <a class="folio-item__thumb-link" href="assets/images/portfolio/gallery/g-woodcraft.jpg"
                        title="Sand Dunes" data-size="1050x700">
                        <img src="assets/images/portfolio/woodcraft.jpg"
                            srcset="assets/images/portfolio/woodcraft.jpg 1x, assets/images/portfolio/woodcraft@2x.jpg 2x"
                            alt="">
                    </a>
                </div>
                <div class="folio-item__info">
                    <div class="folio-item__cat">E-Commerce</div>
                    <h4 class="folio-item__title">Wooocraft</h4>
                </div>
                <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">
                    Project Link
                </a>
                <div class="folio-item__caption">
                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem
                        corrupti neque nisi.</p>
                </div>
            </div>
        </div> <!-- end column -->
        <div class="column">
            <div class="folio-item" data-animate-el>
                <div class="folio-item__thumb">
                    <a class="folio-item__thumb-link" href="assets/images/portfolio/gallery/g-lamp.jpg" title="The Lamp"
                        data-size="1050x700">
                        <img src="assets/images/portfolio/lamp.jpg"
                            srcset="assets/images/portfolio/lamp.jpg 1x, assets/images/portfolio/lamp@2x.jpg 2x" alt="">
                    </a>
                </div>
                <div class="folio-item__info">
                    <div class="folio-item__cat">Product Design</div>
                    <h4 class="folio-item__title">The Lamp</h4>
                </div>
                <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project
                    Link</a>
                <div class="folio-item__caption">
                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem
                        corrupti neque nisi.</p>
                </div>
            </div>
        </div> <!-- end column -->
        <div class="column">
            <div class="folio-item" data-animate-el>
                <div class="folio-item__thumb">
                    <a class="folio-item__thumb-link" href="assets/images/portfolio/gallery/g-grayscale.jpg"
                        title="The Lamp" data-size="1050x700">
                        <img src="assets/images/portfolio/grayscale.jpg"
                            srcset="assets/images/portfolio/grayscale.jpg 1x, assets/images/portfolio/grayscale@2x.jpg 2x"
                            alt="">
                    </a>
                </div>
                <div class="folio-item__info">
                    <div class="folio-item__cat">Frontend Design</div>
                    <h4 class="folio-item__title">Grayscale</h4>
                </div>
                <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project
                    Link</a>
                <div class="folio-item__caption">
                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem
                        corrupti neque nisi.</p>
                </div>
            </div>
        </div> <!-- end column -->
        <div class="column">
            <div class="folio-item" data-animate-el>
                <div class="folio-item__thumb">
                    <a class="folio-item__thumb-link" href="assets/images/portfolio/gallery/g-shutterbug.jpg"
                        title="The Red Wheel" data-size="1050x700">
                        <img src="assets/images/portfolio/shutterbug.jpg"
                            srcset="assets/images/portfolio/shutterbug.jpg 1x, assets/images/portfolio/shutterbug@2x.jpg 2x"
                            alt="">
                    </a>
                </div>
                <div class="folio-item__info">
                    <div class="folio-item__cat">Branding</div>
                    <h4 class="folio-item__title">Lady Shutterbug</h4>
                </div>
                <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project
                    Link</a>
                <div class="folio-item__caption">
                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem
                        corrupti neque nisi.</p>
                </div>
            </div>
        </div> <!-- end column -->
        <div class="column">
            <div class="folio-item" data-animate-el>
                <div class="folio-item__thumb">
                    <a class="folio-item__thumb-link" href="assets/images/portfolio/gallery/g-fuji.jpg" title="The Lamp"
                        data-size="1050x700">
                        <img src="assets/images/portfolio/fuji.jpg"
                            srcset="assets/images/portfolio/fuji.jpg 1x, assets/images/portfolio/fuji@2x.jpg 2x" alt="">
                    </a>
                </div>
                <div class="folio-item__info">
                    <div class="folio-item__cat">Frontend Design</div>
                    <h4 class="folio-item__title">Retro Cam</h4>
                </div>
                <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project
                    Link</a>
                <div class="folio-item__caption">
                    <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem
                        corrupti neque nisi.</p>
                </div>
            </div>
        </div> <!-- end column -->

    </div> <!-- folio-list -->

    <div class="row clients-outer" data-animate-block>
        <div class="column lg-12">

            <h3 class="text-clients-title" data-animate-el>
                We've had the priveledge with working with <br>
                some of the largest and most iconic brands
            </h3>

            <div class="swiper-container clients" data-animate-el>
                <div class="swiper-wrapper clients__content">
                    <a href="#0" title="" class="swiper-slide clients__slide"><img
                            src="assets/images/icons/clients/dropbox.svg" /></a>
                    <a href="#0" title="" class="swiper-slide clients__slide"><img
                            src="assets/images/icons/clients/atom.svg" /></a>
                    <a href="#0" title="" class="swiper-slide clients__slide"><img
                            src="assets/images/icons/clients/github.svg" /></a>
                    <a href="#0" title="" class="swiper-slide clients__slide"><img
                            src="assets/images/icons/clients/redhat.svg" /></a>
                    <a href="#0" title="" class="swiper-slide clients__slide"><img
                            src="assets/images/icons/clients/medium.svg" /></a>
                    <a href="#0" title="" class="swiper-slide clients__slide"><img
                            src="assets/images/icons/clients/messenger.svg" /></a>
                    <a href="#0" title="" class="swiper-slide clients__slide"><img
                            src="assets/images/icons/clients/steam.svg" /></a>
                    <a href="#0" title="" class="swiper-slide clients__slide"><img
                            src="assets/images/icons/clients/spotify.svg" /></a>
                </div>

                <div class="swiper-pagination"></div>
            </div> <!-- end clients -->

        </div> <!-- end column -->
    </div> <!-- end clients-outer -->

    <div class="video-block">
        <span class="video-block__bg-left"></span>
        <span class="video-block__bg-right"></span>

        <div class="video-block__content">
            <a href="https://player.vimeo.com/video/14592941?color=00a650&title=0&byline=0&portrait=0"
                class="video-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                    <path d="M7 6L7 18 17 12z"></path>
                </svg>
            </a>

            <p class="video-caption">
                Watch Video
            </p>
        </div>
    </div> <!-- end video-block -->

    <div class="row testimonials" data-animate-block>
        <div class="column lg-12">

            <div class="swiper-container testimonial-slider" data-animate-el>

                <div class="swiper-wrapper">

                    <div class="testimonial-slider__slide swiper-slide">
                        <div class="testimonial-slider__author">
                            <img src="assets/images/avatars/user-02.jpg" alt="Author image"
                                class="testimonial-slider__avatar">
                            <cite class="testimonial-slider__cite">
                                <strong>Tim Cook</strong>
                                <span>CEO, Apple</span>
                            </cite>
                        </div>
                        <p>
                            Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. Voluptas tempore rem.
                            Explicabo a quaerat sint autem dolore ducimus ut consequatur neque. Nisi dolores quaerat
                            fuga rem nihil nostrum.
                            Laudantium quia consequatur molestias.
                        </p>
                    </div> <!-- end testimonial-slider__slide -->

                    <div class="testimonial-slider__slide swiper-slide">
                        <div class="testimonial-slider__author">
                            <img src="assets/images/avatars/user-03.jpg" alt="Author image"
                                class="testimonial-slider__avatar">
                            <cite class="testimonial-slider__cite">
                                <strong>Sundar Pichai</strong>
                                <span>CEO, Google</span>
                            </cite>
                        </div>
                        <p>
                            Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat
                            voluptas animi adipisci.
                            Nisi eaque consequatur. Voluptatem dignissimos ut ducimus accusantium perspiciatis.
                            Quasi voluptas eius distinctio. Atque eos maxime.
                        </p>
                    </div> <!-- end testimonial-slider__slide -->

                    <div class="testimonial-slider__slide swiper-slide">
                        <div class="testimonial-slider__author">
                            <img src="assets/images/avatars/user-01.jpg" alt="Author image"
                                class="testimonial-slider__avatar">
                            <cite class="testimonial-slider__cite">
                                <strong>Satya Nadella</strong>
                                <span>CEO, Microsoft</span>
                            </cite>
                        </div>
                        <p>
                            Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia
                            nesciunt. Ducimus aut sed ipsam.
                            Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius
                            distinctio.
                            Voluptatem dignissimos ut.
                        </p>
                    </div> <!-- end testimonial-slider__slide -->

                    <div class="testimonial-slider__slide swiper-slide">
                        <div class="testimonial-slider__author">
                            <img src="assets/images/avatars/user-06.jpg" alt="Author image"
                                class="testimonial-slider__avatar">
                            <cite class="testimonial-slider__cite">
                                <strong>Jeff Bezos</strong>
                                <span>CEO, Amazon</span>
                            </cite>
                        </div>
                        <p>
                            Nunc interdum lacus sit amet orci. Vestibulum dapibus nunc ac augue. Fusce vel dui. In
                            ac felis
                            quis tortor malesuada pretium. Curabitur vestibulum aliquam leo. Qui sed at corrupti
                            expedita voluptas odit.
                            Nihil ea quia nesciunt. Ducimus aut sed ipsam.
                        </p>
                    </div> <!-- end testimonial-slider__slide -->

                </div> <!-- end swiper-wrapper -->

                <div class="swiper-pagination"></div>

            </div> <!-- end swiper-container -->

        </div> <!-- end column -->
    </div> <!-- end row testimonials -->

</section> <!-- end s-works -->



@endsection