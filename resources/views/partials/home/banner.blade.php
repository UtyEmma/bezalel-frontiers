<section class="bg-[#131313] w-full h-[900px]  lg:h-[680px] md:h-[600px] sm:h-[500px]  relative z-[1] overflow-hidden">
    <div class="swiper-container w-full h-full absolute left-0 top-0">
        <div class="swiper-wrapper">
            @forelse ($sliders as $slider)
                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image bg-[url({{$slider->image}})] before:absolute before:left-0
                    before:top-0 before:w-full before:h-full before:bg-[#040128] before:opacity-[0.4] "
                        data-background="{{$slider->image}}">
                        <!-- <div class="gradient-overlay"></div> -->
                        <div class="wraper">
                            <div class="relative h-[900px] lg:h-[680px]  md:h-[600px] sm:h-[500px]">
                                <div
                                    class="max-w-[720px] lg:w-[600px] md:w-full  absolute top-1/2 left-0 transform  -translate-y-1/2">

                                    <div data-swiper-parallax="200" class="wpo-hero-title-top">
                                        <span class="text-[19px] col:text-[16px] text-white font-base-font uppercase
                                            mb-[30px] font-normal tracking-[2px]">{{$slider->title}}</span>
                                    </div>
                                    <div data-swiper-parallax="300" class="slide-title">
                                        <h2 class="text-[70px] font-black leading-[90px] mt-[10px] mb-[25px]
                                                lg:text-[50px] md:text-[40px] md:leading-[55px] col:text-[30px]
                                                col:leading-[35px] text-white col:mb-[20px]">
                                            {{$slider->heading}}</h2>

                                    </div>
                                    <div data-swiper-parallax="400" class="slide-text">
                                        <p class="text-[22px] text-[#e2e2e2] font-base-font
                                            leading-[35px]
                                                mb-[40px]
                                            md:text-[18px] col:leading-[25px]
                                            col:mb-[30px]">{{$slider->subheading}}</p>
                                    </div>

                                    <div data-swiper-parallax="500" class="slide-btn">
                                        <a href="{{route($slider->link)}}" class="btn theme-btn rounded-none">
                                            {{$slider->action}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end slide-inner -->
                </div>
            @empty
                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image before:absolute before:left-0
                    before:top-0 before:w-full before:h-full before:bg-[#040128] before:opacity-[0.4] "
                        data-background="assets/images/slider/slide-4.jpg">
                        <!-- <div class="gradient-overlay"></div> -->
                        <div class="wraper">
                            <div class="relative h-[900px] lg:h-[680px]  md:h-[600px] sm:h-[500px]">
                                <div
                                    class="max-w-[720px] lg:w-[600px] md:w-full  absolute top-1/2 left-0 transform  -translate-y-1/2">

                                    <div data-swiper-parallax="200" class="wpo-hero-title-top">
                                        <span class="text-[19px] col:text-[16px] text-white font-base-font uppercase
                                            mb-[30px] font-normal tracking-[2px]">Trusted
                                            Business Partner.</span>
                                    </div>
                                    <div data-swiper-parallax="300" class="slide-title">
                                        <h2 class="text-[70px] font-black leading-[90px] mt-[10px] mb-[25px]
                                                lg:text-[50px] md:text-[40px] md:leading-[55px] col:text-[30px]
                                                col:leading-[35px] text-white col:mb-[20px]">
                                            The Fastest way to achieve success</h2>

                                    </div>
                                    <div data-swiper-parallax="400" class="slide-text">
                                        <p class="text-[22px] text-[#e2e2e2] font-base-font
                                            leading-[35px]
                                                mb-[40px]
                                            md:text-[18px] col:leading-[25px]
                                            col:mb-[30px]">
                                            It was popularised in the 1960s with the release sheets.
                                            We bring the right people together.</p>
                                    </div>

                                    <div data-swiper-parallax="500" class="slide-btn">
                                        <a href="about.html" class="btn theme-btn rounded-none">
                                            Explore more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end slide-inner -->
                </div>
            @endforelse
        </div>
        <!-- end swiper-wrapper -->

        <!-- swipper controls -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
