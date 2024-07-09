<section class="bg-[#131313] w-full h-[900px]  lg:h-[680px] md:h-[600px] sm:h-[500px]  relative z-[1] overflow-hidden">
    <div class="swiper-container w-full h-full absolute left-0 top-0">
        <div class="swiper-wrapper">
            @forelse ($sliders as $slider)
                <div class="swiper-slide">
                    <div class="slide-inner px-3"
                        data-background="{{$slider->image}}"
                            style="background-image: linear-gradient(#04012890,#04012890), url({{asset('assets/imgs/bezalel-frontiers-business-meeting.jpg')}})"
                        >
                        <!-- <div class="gradient-overlay"></div> -->
                        <div class="wraper">
                            <div class="relative h-[900px] lg:h-[600px]  md:h-[600px] sm:h-[500px]">
                                <div class="lg:w-4/6 md:w-full  absolute top-1/2 left-0 transform  -translate-y-1/2">

                                    <div data-swiper-parallax="200" class="wpo-hero-title-top">
                                        <span class="text-[19px] col:text-[16px] text-white font-base-font uppercase mb-[30px] font-normal tracking-[2px]">{{$slider->title}}</span>
                                    </div>

                                    <div data-swiper-parallax="300" class="slide-title">
                                        <h2 class="text-[70px] font-black leading-[90px] mt-[10px] mb-[25px] lg:text-[50px] md:text-[40px] md:leading-[55px] col:text-[30px] col:leading-[35px] text-white col:mb-[20px]">{{$slider->heading}}</h2>
                                    </div>

                                    <div data-swiper-parallax="400" class="slide-text">
                                        <p class="text-[22px] text-white font-base-font leading-[35px] mb-[40px] md:text-[18px] col:leading-[25px] col:mb-[30px]">{{$slider->subheading}}</p>
                                    </div>

                                    <div data-swiper-parallax="500" class="slide-btn">
                                        <a href="{{$slider->link}}" class="btn theme-btn rounded-none">{{$slider->action}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end slide-inner -->
                </div>
            @empty
                <div class="swiper-slide">
                    <div class="slide-inner px-3" 
                        style="background-image: linear-gradient(#04012890,#04012890), url({{asset('assets/imgs/bezalel-frontiers-business-meeting.jpg')}})"
                    >
                        <!-- <div class="gradient-overlay"></div> -->
                        <div class="wraper">
                            <div class="relative h-[900px] lg:h-[680px]  md:h-[600px] sm:h-[500px]">
                                <div class="lg:w-4/6 md:w-full  absolute top-1/2 left-0 transform  -translate-y-1/2">

                                    <div data-swiper-parallax="200" class="wpo-hero-title-top">
                                        <span class="text-[19px] col:text-[16px] text-white font-base-font uppercase mb-[30px] font-normal tracking-[2px]">Welcome to Bezalel Frontiers.</span>
                                    </div>
                                    <div data-swiper-parallax="300" class="slide-title">
                                        <h2 class="text-[70px] font-black leading-[90px] mt-[10px] mb-[25px]
                                                lg:text-[50px] md:text-[40px] md:leading-[55px] col:text-[30px]
                                                col:leading-[35px] text-white col:mb-[20px]">
                                            Research driven insights for making informed decisions.</h2>

                                    </div>
                                    <div data-swiper-parallax="400" class="slide-text">
                                        <p class="text-[18px] text-white font-base-font leading-[35px] mb-[40px] col:leading-[25px] col:mb-[30px]">
                                            We are a data-driven and research-based management consulting firm that provides provide actionable insights that inform, inspire, and empower minds your organizations to make informed ideation, and business & management decisions.
                                        </p>
                                    </div>

                                    <div data-swiper-parallax="500" class="slide-btn">
                                        <a href="{{route('about')}}" class="btn theme-btn rounded-none">
                                            Learn more</a>
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
