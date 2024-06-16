<x-guest-layout>
    @include('partials.home.banner')

    <section class="section-wrap">
        <div class="wraper">
            <div class="grid grid-cols-12 gap-x-3  items-center">
                <div class="col-span-6 md:col-span-12 sm:col-span-12 ">
                    <div class="relative z-[1] text-center max-w-[570px] sm:w-full rounded-[6px]
                     before:absolute before:left-0 before:top-0 before:w-full before:h-full
                     before:bg-[rgba(20,33,43,.25)] before:rounded-[6px] ">
                        <img class="w-full rounded-[6px]" src="assets/images/about/3.jpg" alt="">
                        <div class="absolute left-[-70px] bottom-[100px] z-[1]
                             animate-[bounceTop_3s_linear_infinite] col:left-0">
                            <img src="assets/images/ab-shape-1.png" alt="">
                        </div>
                        <div class="absolute right-[35px] top-[35px] animate-[bounceTop_3s_linear_infinite]">
                            <img src="assets/images/ab-shape-2.png" alt="">
                        </div>
                        <div class="absolute right-[50px] bottom-[50px] rounded-[50%] border-[5px]
                            animate-[spineer_2s_infinite]">
                            <img src="assets/images/about/4.jpg" alt="" class="rounded-[50%] col:max-w-[100px]">
                        </div>
                    </div>
                </div>
                <div class="col-span-6 md:col-span-12 sm:col-span-12">
                    <div class="max-w-[600px] sm:w-full relative pl-[40px] md:pl-0 md:pt-[70px]">
                        <h4
                            class="text-[21px] text-[#ff4a17] font-base-font font-bold lg:text-[18px] col:text-[14px]">
                            Welcome to {{$settings->company_name}}</h4>
                        <h2 class="text-[60px] leading-[70px] my-[30px] text-[#0a272c] font-normal font-heading-font
                            xl:text-[55px] lg:text-[36px] lg:leading-[50px] lg:my-[20px] col:text-[26px]
                            col:leading-[36px] col:my-[15px]">
                            We are
                            trusted consulting company,
                            <b class="text-[#14212b]">with <span class="text-[#ff4a17]">28+ years</span> of
                                experience.</b>
                        </h2>
                        <p class="text-[18px] mb-[35px] col:text-[16px] col:mb-[20px]">At <span class="text-[#ff4a17]">{{$settings->company_name}}</span>, we provide actionable insights that inform, inspire, and empower minds and organizations for success. Discover how our data-driven and research-based management consulting can transform your business.</p>
                        <a class="theme-btn" href="{{route('about')}}">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($services->count() > 0)
        <section class="section-wrap bg-[#14212b] overflow-hidden relative z-[1]
            before:absolute before:left-0 before:top-0 before:w-full before:h-full
            before:bg-[url(../images/service/shape-1.png)] before:bg-no-repeat before:bg-cover before:bg-center">
            <div class="wraper">
                <div class="mb-[75px] sm:mb-[40px] text-center">
                    <span class="uppercase text-[16px] font-bold tracking-[3px] text-[#ff4a17]
                        font-base-font">Our Services</span>
                    <h2 class="text-[55px] md:text-[35px] sm:text-[32px] col:text-[28px] leading-[70px] md:leading-[55px] sm:leading-[40px]
                        mt-[10px] relative capitalize font-heading-font font-bold
                        text-[#fff]">All Consoel Solution</h2>
                </div>
                <div class="wpo-service-slider owl-carousel">
                    @forelse ($services as $service)
                        <div class="relative mb-[30px] z-[1]">
                            <div class="relative rounded-[6px] overflow-hidden group
                            before:absolute before:left-0 before:top-0 before:w-full before:h-full
                            before:bg-[rgba(20,33,43,0.8)] before:z-[11] ">
                                <img class="w-full rounded-[6px]" style="height: 450px; object-fit: cover;" src="{{$service->image}}" alt="">
                                <div class="absolute left-0 bottom-0 p-[50px] z-[19] md:p-[30px]">
                                    <h2
                                        class="text-white text-[30px] font-bold font-heading-font mb-[20px] col:text-[25px]">
                                        {{$service->name}}</h2>
                                    <p class="text-[#e1e1e1] font-base-font">{{$service->description}}</p>
                                    <a href="{{route('services.details', ['service' => $service->slug])}}"
                                        class="inline-block font-base-font
                                    p-[10px_45px] pr-[45px] text-white border-white border-[1px]
                                    relative rounded-[6px] mt-[10px] max-w-[150px] before:absolute
                                    before:right-[20px] before:top-[51%]
                                    before:content-['\f103'] before:font-['Flaticon'] before:translate-y-[-50%]">Details</a>

                                </div>
                                <div class="absolute left-0 bottom-0 p-[50px] w-full h-full bg-[#ff4a17]
                            flex justify-center flex-col rounded-[6px] translate-y-[100%]
                                transition-all duration-300 ease-in-out
                            overflow-hidden z-[20] md:p-[30px] group-hover:translate-y-[0]">
                                    <h2
                                        class="text-white text-[30px]  font-heading-font font-bold mb-[20px] col:text-[25px]">
                                        {{$service->name}}</h2>
                                    <p class="text-white font-base-font">{{$service->description}}</p>
                                    <a href="{{route('services.details', ['service' => $service->slug])}}" class="inline-block font-base-font transition-all duration-300 ease-in-out
                                    p-[10px_45px] pr-[45px] text-white border-white border-[1px]
                                    relative rounded-[6px] mt-[10px] max-w-[150px] before:absolute
                                    before:right-[20px] before:top-[51%]
                                    before:content-['\f103'] before:font-['Flaticon'] before:translate-y-[-50%]
                                    hover:bg-white hover:text-[#ff4a17]">Details</a>
                                    <div class="t">
                                        <div class="absolute left-[-180px] top-[-180px] w-[360px] h-[360px]
                                            bg-[rgba(255,255,255,.09)] rounded-[50%]">
                                        </div>
                                        <div class="absolute left-[-210px] top-[-210px] w-[420px] h-[420px]
                                            bg-[rgba(255,255,255,.09)] rounded-[50%]"></div>
                                        <div class="absolute left-[-241px] top-[-241px] w-[482px] h-[482px]
                                            bg-[rgba(255,255,255,.09)] rounded-[50%]"></div>
                                    </div>
                                    <div class="b">
                                        <div class="absolute right-[-180px] bottom-[-180px] w-[360px] h-[360px]
                                            bg-[rgba(255,255,255,.09)] rounded-[50%]"></div>
                                        <div class="absolute right-[-210px] bottom-[-210px] w-[420px] h-[420px]
                                            bg-[rgba(255,255,255,.09)] rounded-[50%]"></div>
                                        <div class="absolute right-[-241px] bottom-[-241px] w-[482px] h-[482px]
                                            bg-[rgba(255,255,255,.09)] rounded-[50%]"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty

                    @endforelse
                </div>

            </div>
        </section>
    @endif

    <section class="pt-[120px] md:pt-[90px] sm:pt-[80px]">
        <div class="wraper">
            <div class="grid grid-cols-12 items-center ">
                <div class="col-span-5 md:col-span-12 ">
                    <div class="md:mb-[30px]">
                        <h5 class="text-[21px] text-[#ff4a17] font-heading-font font-semibold sm:text-[18px]">Our
                            Professional
                            Skill’s</h5>
                        <h2 class="text-[60px] leading-[70px] mb-[30px] mt-[15px] text-[#0a272c] font-heading-font font-semibold
                        xl:text-[50px] xl:leading-[60px] xl:mb-[20px] xl:mt-[10px] lg:text-[45px] lg:leading-[50px]
                        sm:text-[35px] sm:leading-[50px]">
                            Professional Skill of <span class="text-[#ff4a17]">Consoel.</span></h2>
                        <p class="text-[#687693] text-[16px] leading-[25px]">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt
                            ut labore et dolore <br> <br> magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="col-span-7 md:col-span-12">
                    <div
                        class="ml-[70px] xl:ml-[50px] lg:ml-[30px] md:ml-0 p-[80px_70px] shadow-[0px_0px_35px_0px_rgba(20,33,43,0.1)] xl:p-[60px_50px] lg:p-[40px_30px]">
                        <div class="mb-[30px] relative">
                            <h5
                                class="text-[22px] sm:text-[18px] mb-[10px] font-heading-font text-[#0a272c] font-semibold">
                                Financial Investment</h5>
                            <div class="h-[6px] w-full bg-[#f3f4f4] relative rounded-[10px] overflow-hidden">
                                <div class="wow fadeInLeft h-[6px]  bg-[#ff4a17]" style="width: 75%"
                                    data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="90">
                                </div>
                            </div>
                            <span
                                class="absolute right-0 top-[-10px] text-[22px] font-heading-font text-[#14212b] font-bold sm:text-[18px] sm:top-0">75%</span>
                        </div>
                        <div class="mb-[30px] relative">
                            <h5
                                class="text-[22px] sm:text-[18px] mb-[10px] font-heading-font text-[#0a272c] font-semibold">
                                Business Analysis</h5>
                            <div class="h-[6px] w-full bg-[#f3f4f4] relative rounded-[10px] overflow-hidden">
                                <div class="wow fadeInLeft h-[6px]  bg-[#ff4a17]" style="width: 80%"
                                    data-wow-duration="0.7s" data-wow-delay=".3s" role="progressbar"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <span
                                class="absolute right-0 top-[-10px] text-[22px] font-heading-font text-[#14212b] font-bold sm:text-[18px] sm:top-0">80%</span>
                        </div>
                        <div class="mb-[30px] relative">
                            <h5
                                class="text-[22px] sm:text-[18px] mb-[10px] font-heading-font text-[#0a272c] font-semibold">
                                Tax Management</h5>
                            <div class="h-[6px] w-full bg-[#f3f4f4] relative rounded-[10px] overflow-hidden">
                                <div class="wow fadeInLeft h-[6px]  bg-[#ff4a17]" style="width: 85%"
                                    data-wow-duration="0.9s" data-wow-delay=".3s" role="progressbar"
                                    aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <span
                                class="absolute right-0 top-[-10px] text-[22px] font-heading-font text-[#14212b] font-bold sm:text-[18px] sm:top-0">85%</span>
                        </div>
                        <div class="relative">
                            <h5
                                class="text-[22px] sm:text-[18px] mb-[10px] font-heading-font text-[#0a272c] font-semibold">
                                Financial Advices</h5>
                            <div class="h-[6px] w-full bg-[#f3f4f4] relative rounded-[10px] overflow-hidden">
                                <div class="wow fadeInLeft h-[6px]  bg-[#ff4a17]" style="width: 95%"
                                    data-wow-duration="1.1s" data-wow-delay=".3s" role="progressbar"
                                    aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <span
                                class="absolute right-0 top-[-10px] text-[22px] font-heading-font text-[#14212b] font-bold sm:text-[18px] sm:top-0">95%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-wrap">
        <div class="wraper">
            <div class="mb-[75px] sm:mb-[40px] text-center">
                <span class="uppercase text-[16px] font-bold tracking-[3px] text-[#ff4a17]
                 font-base-font">HONORABLE CUSTOMER</span>
                <h2 class="text-[55px] md:text-[35px] sm:text-[32px] col:text-[28px] leading-[70px] md:leading-[55px] sm:leading-[40px]
                 mt-[10px] relative capitalize font-heading-font font-bold
                 text-[#14212b]">We are work with top brand</h2>
            </div>
            <div class="flex flex-wrap">
                <div class="basis-[25%] text-center border-[#eeeeee] border-[1px] mt-[-1px] ml-[-1px]
                p-[35px] flex justify-center flex-col md:p-[20px] sm:basis-[50%] sm:p-[30px_40px] col:p-[20px]">
                    <img src="assets/images/partners/img-1.png" alt=""
                        class="inline-block max-w-[70%] mx-auto md:w-[100%]">
                </div>
                <div class="basis-[25%] text-center border-[#eeeeee] border-[1px] mt-[-1px] ml-[-1px]
                p-[35px] flex justify-center flex-col md:p-[20px] sm:basis-[50%] sm:p-[30px_40px] col:p-[20px]">
                    <img src="assets/images/partners/img-2.png" alt=""
                        class="inline-block max-w-[70%] mx-auto md:w-[100%]">
                </div>
                <div class="basis-[25%] text-center border-[#eeeeee] border-[1px] mt-[-1px] ml-[-1px]
                p-[35px] flex justify-center flex-col md:p-[20px] sm:basis-[50%] sm:p-[30px_40px] col:p-[20px]">
                    <img src="assets/images/partners/img-3.png" alt=""
                        class="inline-block max-w-[70%] mx-auto md:w-[100%]">
                </div>
                <div class="basis-[25%] text-center border-[#eeeeee] border-[1px] mt-[-1px] ml-[-1px]
                p-[35px] flex justify-center flex-col md:p-[20px] sm:basis-[50%] sm:p-[30px_40px] col:p-[20px]">
                    <img src="assets/images/partners/img-4.png" alt=""
                        class="inline-block max-w-[70%] mx-auto md:w-[100%]">
                </div>
                <div class="basis-[25%] text-center border-[#eeeeee] border-[1px] mt-[-1px] ml-[-1px]
                p-[35px] flex justify-center flex-col md:p-[20px] sm:basis-[50%] sm:p-[30px_40px] col:p-[20px]">
                    <img src="assets/images/partners/img-5.png" alt=""
                        class="inline-block max-w-[70%] mx-auto md:w-[100%]">
                </div>
                <div class="basis-[25%] text-center border-[#eeeeee] border-[1px] mt-[-1px] ml-[-1px]
                p-[35px] flex justify-center flex-col md:p-[20px] sm:basis-[50%] sm:p-[30px_40px] col:p-[20px]">
                    <img src="assets/images/partners/img-8.png" alt=""
                        class="inline-block max-w-[70%] mx-auto md:w-[100%]">
                </div>
                <div class="basis-[25%] text-center border-[#eeeeee] border-[1px] mt-[-1px] ml-[-1px]
                p-[35px] flex justify-center flex-col md:p-[20px] sm:basis-[50%] sm:p-[30px_40px] col:p-[20px]">
                    <img src="assets/images/partners/img-6.png" alt=""
                        class="inline-block max-w-[70%] mx-auto md:w-[100%]">
                </div>
                <div class="basis-[25%] text-center border-[#eeeeee] border-[1px] mt-[-1px] ml-[-1px]
                p-[35px] flex justify-center flex-col md:p-[20px] sm:basis-[50%] sm:p-[30px_40px] col:p-[20px]">
                    <img src="assets/images/partners/img-7.png" alt=""
                        class="inline-block max-w-[70%] mx-auto md:w-[100%]">
                </div>
            </div>
        </div>
    </section>

    <section class="section-wrap bg-[#18252f]">
        <div class="wraper">
            <div class="mb-[75px] sm:mb-[40px] text-center">
                <span class="uppercase text-[16px] font-bold tracking-[3px] text-[#ff4a17]
                 font-base-font">CLIENT TESTIMONIAL</span>
                <h2 class="text-[55px] md:text-[35px] sm:text-[32px] text-white col:text-[28px] leading-[70px] md:leading-[55px] sm:leading-[40px]
                 mt-[10px] relative capitalize font-heading-font font-bold
                 text-[#14212b]">Best Word Our Clients</h2>
            </div>
            <div class="max-w-[1000px] mx-auto text-center relative z-[1]">
                <div
                    class="w-[100px] h-[100px] leading-[100px] bg-white
                     shadow-[0px_0px_35px_0px_rgba(20,33,43,0.1)] mx-auto rounded-[50%] mb-[-50px] relative z-[11] ">
                    <i class="fi flaticon-left-quote text-[50px] text-[#ff4a17]"></i>
                </div>
                <div class="wpo-testimonial-slide bg-white shadow-[0px_0px_35px_0px_rgba(20,33,43,0.1)]">
                    <div
                        class="p-[70px_130px] pt-[100px] bg-none sm:p-[40px] sm:pt-[80px] col:p-[30px_20px] col:pt-[60px]">
                        <div class="wpo-testimonial-text">
                            <p class="text-[18px] col:text-[15px] mb-[20px]">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry has
                                text ever since the 1500s, when an unknown printer took a galley of type and
                                scrambled make
                                survived not only five centuries, but also the leap into electronic typesetting.
                            </p>
                            <div class="wpo-testimonial-text-btm">
                                <h3 class="text-[32px] font-semibold mt-[5px] col:text-[25px] mb-[15px]">Cathi
                                    Falcon</h3>
                                <span
                                    class="uppercase text-[16px] font-bold tracking-[3px] text-[#ff4a17] col:text-[14px]">Founder</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-[70px_130px] pt-[100px] bg-none sm:p-[40px] sm:pt-[80px] col:p-[30px_20px] col:pt-[60px]">
                        <div class="wpo-testimonial-text">
                            <p class="text-[18px] col:text-[15px] mb-[20px]">Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry has
                                text ever since the 1500s, when an unknown printer took a galley of type and
                                scrambled make
                                survived not only five centuries, but also the leap into electronic typesetting.
                            </p>
                            <div class="wpo-testimonial-text-btm">
                                <h3 class="text-[32px] font-semibold mt-[5px] col:text-[25px] mb-[15px]">Harry
                                    Abraham</h3>
                                <span
                                    class="uppercase text-[16px] font-bold tracking-[3px] text-[#ff4a17] col:text-[14px]">SCG
                                    First Company</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-[70px_130px] pt-[100px] bg-none sm:p-[40px] sm:pt-[80px] col:p-[30px_20px] col:pt-[60px]">
                        <div class="wpo-testimonial-text">
                            <p class="text-[18px] col:text-[15px] mb-[20px]">Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry has
                                text ever since the 1500s, when an unknown printer took a galley of type and
                                scrambled make
                                survived not only five centuries, but also the leap into electronic typesetting.
                            </p>
                            <div class="wpo-testimonial-text-btm">
                                <h3 class="text-[32px] font-semibold mt-[5px] col:text-[25px] mb-[15px]">Benjir
                                    Walton</h3>
                                <span
                                    class="uppercase text-[16px] font-bold tracking-[3px] text-[#ff4a17] col:text-[14px]">Merketer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute right-0 top-[50px] sm:hidden">
                    <svg width="152.000000pt" height="137.000000pt" viewBox="0 0 152.000000 137.000000"
                        fill="#ff4a17" preserveAspectRatio="xMidYMid meet">
                        <g transform="translate(0.000000,137.000000) scale(0.100000,-0.100000)" stroke="none">
                            <path
                                d="M101 1288 c171 -466 515 -851 954 -1070 126 -63 240 -107 373 -142 l92 -25 0 660 0 659 -725 0 -724 0 30 -82z" />
                        </g>
                    </svg>
                </div>
                <div class="absolute left-0 bottom-0 sm:hidden">
                    <svg width="186.000000pt" height="202.000000pt" viewBox="0 0 186.000000 202.000000"
                        fill="#ff4a17" preserveAspectRatio="xMidYMid meet">
                        <g transform="translate(0.000000,202.000000) scale(0.100000,-0.100000)" stroke="none">
                            <path
                                d="M0 965 l0 -965 870 0 871 0 19 45 c67 157 56 324 -29 448 -87 127 -229 238 -648 507 -158 102 -337 220 -398 264 -238 170 -473 391 -609 574 -38 50 -71 92 -73 92 -1 0 -3 -434 -3 -965z" />
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#f3f4f4] section-wrap">
        <div class="wraper">
            <div class="mb-[75px] sm:mb-[40px] text-center">
                <span class="uppercase text-[16px] font-bold tracking-[3px] text-[#ff4a17]
                 font-base-font">BLOG POST</span>
                <h2 class="text-[55px] md:text-[35px] sm:text-[32px] col:text-[28px] leading-[70px] md:leading-[55px] sm:leading-[40px]
                 mt-[10px] relative capitalize font-heading-font font-bold
                 text-[#14212b]">Latest News From Blog</h2>
            </div>
            <div>
                <div class="grid grid-cols-12 gap-x-4">
                    <div class="col-span-6 lg:col-span-12">
                        <div class="relative group">
                            <div class="relative overflow-hidden rounded-[8px]
                                    before:absolute before:left-0 before:bottom-0 before:w-full before:h-full
                                    before:bg-[linear-gradient(180deg,_rgba(20,33,43,0.98)_20%,_rgba(20,33,43,0)_50%)]
                                    before:rotate-[-180deg] before:z-[1] before:rounded-[8px] before:transition
                                    before:duration-300 ">
                                <img src="assets/images/blog/img-1.jpg" alt=""
                                    class="scale-[1] rounded-[8px] transition-all duration-500 group-hover:scale-[1.2]">
                            </div>
                            <div class="p-[50px] absolute left-0 bottom-0  z-[11] col:p-[30px]
                                duration-500  lg:p-[20px] lg:pb-[0]">
                                <h2
                                    class="text-[30px] leading-[32px] mt-[10px] mb-[30px] col:text-[22px] col:mb-[15px] col:leading-[30px]">
                                    <a href="blog-single.html"
                                        class="text-white transition-all duration-500 hover:text-[#ff4a17]">
                                        We provide advanced solutions growin your online business.</a>
                                </h2>
                                <ul class="flex col:block">
                                    <li class="text-white text-[14px] uppercase">
                                        <a href="blog-single.html" class="text-[#ff4a17]">25 Dec, 2020</a>
                                    </li>
                                    <li class="pl-[20px] relative col:pl-0 col:mt-[5px] text-white text-[14px] uppercase before:absolute before:left-[10px] before:top-[50%]
                                     before:-translate-y-1/2 before:content-['-'] col:before:hidden">by: Marilou
                                        Kelleher</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6 lg:col-span-12">
                        <div class="pl-[40px] lg:pl-0 lg:mt-[40px]">
                            <div
                                class="mb-[15px] lg:mb-[30px] overflow-hidden lg:flex lg:items-center col:flex-wrap col:justify-center col:text-center group transition-all duration-500">
                                <div
                                    class="relative overflow-hidden rounded-[8px] float-left mr-[20px] transition-all duration-500">
                                    <img class="scale-[1] rounded-[8px] col:mb-[20px] transition-all duration-500 group-hover:scale-[1.2]"
                                        src="assets/images/blog/img-2.jpg" alt="">
                                </div>
                                <div class="z-[11] overflow-hidden">
                                    <h2
                                        class="text-[23px] mb-[15px] leading-[30px] xl:text-[20px] xl:mb-[10px] xl:leading-[28px] transition-all duration-500 font-semibold">
                                        <a href="blog-single.html" class="text-[#0a272c] transition-all duration-500
                                            hover:text-[#ff4a17]">We provide advanced
                                            solutions growin your online
                                            business</a>
                                    </h2>
                                    <ul class="flex col:block col:text-center">
                                        <li class="text-[14px] uppercase text-[#6e6e6e] ">
                                            <a href="blog-single.html" class="text-[#ff4a17]">25 Dec, 2020</a>

                                        </li>
                                        <li
                                            class="text-[14px] uppercase text-[#6e6e6e] pl-[20px] relative col:pl-0 col:mt-[5px]">
                                            by: Marilou Kelleher
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div
                                class="mb-[15px] lg:mb-[30px] overflow-hidden lg:flex lg:items-center col:flex-wrap col:justify-center col:text-center group transition-all duration-500">
                                <div
                                    class="relative overflow-hidden rounded-[8px] float-left mr-[20px] transition-all duration-500">
                                    <img class="scale-[1] rounded-[8px] col:mb-[20px] transition-all duration-500 group-hover:scale-[1.2]"
                                        src="assets/images/blog/img-3.jpg" alt="">
                                </div>
                                <div class="z-[11] overflow-hidden">
                                    <h2
                                        class="text-[23px] mb-[15px] leading-[30px] xl:text-[20px] xl:mb-[10px] xl:leading-[28px] transition-all duration-500 font-semibold">
                                        <a href="blog-single.html" class="text-[#0a272c] transition-all duration-500
                                            hover:text-[#ff4a17]">Many desktop publishing packag and web page
                                            editors use.</a>
                                    </h2>
                                    <ul class="flex col:block col:text-center">
                                        <li class="text-[14px] uppercase text-[#6e6e6e] ">
                                            <a href="blog-single.html" class="text-[#ff4a17]">25 Dec, 2020</a>

                                        </li>
                                        <li
                                            class="text-[14px] uppercase text-[#6e6e6e] pl-[20px] relative col:pl-0 col:mt-[5px]">
                                            by: Marilou Kelleher
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div
                                class="mb-[15px] lg:mb-[30px] overflow-hidden lg:flex lg:items-center col:flex-wrap col:justify-center col:text-center group transition-all duration-500">
                                <div
                                    class="relative overflow-hidden rounded-[8px] float-left mr-[20px] transition-all duration-500">
                                    <img class="scale-[1] rounded-[8px] col:mb-[20px] transition-all duration-500 group-hover:scale-[1.2]"
                                        src="assets/images/blog/img-4.jpg" alt="">
                                </div>
                                <div class="z-[11] overflow-hidden">
                                    <h2
                                        class="text-[23px] mb-[15px] leading-[30px] xl:text-[20px] xl:mb-[10px] xl:leading-[28px] transition-all duration-500 font-semibold">
                                        <a href="blog-single.html" class="text-[#0a272c] transition-all duration-500
                                            hover:text-[#ff4a17]">Consulting Can be your best solution and a search
                                            for over</a>
                                    </h2>
                                    <ul class="flex col:block col:text-center">
                                        <li class="text-[14px] uppercase text-[#6e6e6e] ">
                                            <a href="blog-single.html" class="text-[#ff4a17]">25 Dec, 2020</a>

                                        </li>
                                        <li
                                            class="text-[14px] uppercase text-[#6e6e6e] pl-[20px] relative col:pl-0 col:mt-[5px]">
                                            by: Marilou Kelleher
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div
                                class="mb-[15px] lg:mb-[30px] overflow-hidden lg:flex lg:items-center col:flex-wrap col:justify-center col:text-center group transition-all duration-500">
                                <div
                                    class="relative overflow-hidden rounded-[8px] float-left mr-[20px] transition-all duration-500">
                                    <img class="scale-[1] rounded-[8px] col:mb-[20px] transition-all duration-500 group-hover:scale-[1.2]"
                                        src="assets/images/blog/img-5.jpg" alt="">
                                </div>
                                <div class="z-[11] overflow-hidden">
                                    <h2
                                        class="text-[23px] mb-[15px] leading-[30px] xl:text-[20px] xl:mb-[10px] xl:leading-[28px] transition-all duration-500 font-semibold">
                                        <a href="blog-single.html" class="text-[#0a272c] transition-all duration-500
                                            hover:text-[#ff4a17]">Many web sites still their infancy versions have
                                            evolved accident</a>
                                    </h2>
                                    <ul class="flex col:block col:text-center">
                                        <li class="text-[14px] uppercase text-[#6e6e6e] ">
                                            <a href="blog-single.html" class="text-[#ff4a17]">25 Dec, 2020</a>

                                        </li>
                                        <li
                                            class="text-[14px] uppercase text-[#6e6e6e] pl-[20px] relative col:pl-0 col:mt-[5px]">
                                            by: Marilou Kelleher
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div
                                class="overflow-hidden lg:flex lg:items-center col:flex-wrap col:justify-center col:text-center group transition-all duration-500">
                                <div
                                    class="relative overflow-hidden rounded-[8px] float-left mr-[20px] transition-all duration-500">
                                    <img class="scale-[1] rounded-[8px] col:mb-[20px] transition-all duration-500 group-hover:scale-[1.2]"
                                        src="assets/images/blog/img-6.jpg" alt="">
                                </div>
                                <div class="z-[11] overflow-hidden">
                                    <h2
                                        class="text-[23px] mb-[15px] leading-[30px] xl:text-[20px] xl:mb-[10px] xl:leading-[28px] transition-all duration-500 font-semibold">
                                        <a href="blog-single.html" class="text-[#0a272c] transition-all duration-500
                                            hover:text-[#ff4a17]">3 of the Worst Ways Small Businesses Waste Money
                                            on Marketing</a>
                                    </h2>
                                    <ul class="flex col:block col:text-center">
                                        <li class="text-[14px] uppercase text-[#6e6e6e] ">
                                            <a href="blog-single.html" class="text-[#ff4a17]">25 Dec, 2020</a>

                                        </li>
                                        <li
                                            class="text-[14px] uppercase text-[#6e6e6e] pl-[20px] relative col:pl-0 col:mt-[5px]">
                                            by: Marilou Kelleher
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-wrap bg-[#18252f] overflow-hidden">
        <h2 class="hidden">contact</h2>
        <div class="wraper">
            <div class="grid grid-cols-12 mx-[-40px] xl:mx-[-20px] lg:mx-[-15px]">
                <div class="col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12
                     px-[40px] xl:px-[20px] lg:px-[15px]">
                    <div class="lg:mb-[30px] text-center p-[60px_40px] border-[1px] border-[#ff4a17]
                    rounded-[15px] bg-[#18252f] md:p-[40px] col:p-[30px]">
                        <div class="mb-[30px] col:mb-[20px]">
                            <i class="fi flaticon-place text-[#ff4a17] text-[55px] col:text-[40px]"></i>
                        </div>
                        <p class="text-[22px] leading-[32px] font-medium text-white font-heading-font">1489 Langley
                            Ave <br>
                            Grand Forks Afb, North.</p>
                        <span class="text-[14px] text-[#ff4a17] uppercase block mt-[30px] tracking-[3px]">USA,
                            Office AddRESS</span>
                    </div>
                </div>
                <div class="col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12
                     px-[40px] xl:px-[20px] lg:px-[15px]">
                    <div class="lg:mb-[30px] text-center p-[60px_40px] border-[1px] border-[#ff4a17]
                    rounded-[15px] bg-[#ff4a17] md:p-[40px] col:p-[30px]">
                        <div class="mb-[30px] col:mb-[20px]">
                            <i class="fi flaticon-phone-call text-white text-[55px] col:text-[40px]"></i>
                        </div>
                        <p class="text-[22px] leading-[32px] font-medium text-white font-heading-font">+1 800 123
                            456 789</p>
                        <p class="text-[22px] leading-[32px] font-medium text-white font-heading-font">+1 800 123
                            654 987</p>
                        <span class="text-[14px] text-white uppercase block mt-[30px] tracking-[3px]">CALL US
                            TODAY</span>
                    </div>
                </div>
                <div class="col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12
                     px-[40px] xl:px-[20px] lg:px-[15px]">
                    <div class=" text-center p-[60px_40px] border-[1px] border-[#ff4a17]
                    rounded-[15px] bg-[#18252f] md:p-[40px] col:p-[30px]">
                        <div class="mb-[30px] col:mb-[20px]">
                            <i class="fi flaticon-email text-[#ff4a17] text-[55px] col:text-[40px]"></i>
                        </div>
                        <p class="text-[22px] leading-[32px] font-medium text-white font-heading-font">
                            consoel@gmail.com</p>
                        <p class="text-[22px] leading-[32px] font-medium text-white font-heading-font">
                            info724@gmail.com</p>
                        <span class="text-[14px] text-[#ff4a17] uppercase block mt-[30px] tracking-[3px]">EMAIL
                            ADDRESS</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute left-[-3%] top-[-20%] z-[-1]">
            <img src="assets/images/ct-shape.png" alt="shape">
        </div>
    </section>

    <section class="section-wrap">
        <div class="wraper">
            <div class="p-[80px_85px] bg-[url(../images/cta-bg.jpg)] bg-no-repeat bg-center rounded-[6px]
            md:p-[40px_35px] col:p-[10px]">
                <div
                    class="p-[100px_80px] bg-[rgba(20,33,43,0.9)] flex items-center relative z-[1] rounded-[6px] overflow-hidden lg:flex-wrap lg:justify-center lg:text-center col:p-[20px_15px]">
                    <div class="mr-[80px] basis-[80%] lg:basis-full lg:mr-0">
                        <span
                            class="uppercase text-[16px] font-base-font font-bold tracking-[3px] text-[#ff4a17]">WE
                            ARE
                            HERE</span>
                        <h2 class="text-[45px] text-white mt-[20px]
                             lg:text-[40px] lg:mb-[20px] font-heading-font font-semibold leading-[1.2]
                             sm:text-[30px]">Tell us about your business,
                            we are ready to solve.</h2>
                    </div>
                    <div class="basis-[20%] lg:basis-[100%]">
                        <a href="contact.html" class="inline-block p-[15px_35px] pr-[45px] text-white relative rounded-[6px] mt-[10px] max-w-[150px] uppercase bg-[#ff4a17] md:border-white md:border-[1px]  transition-all
                             before:absolute before:right-[20px] before:top-[51%] before:content-['\f103'] font-base-font
                             before:font-['Flaticon'] before:-translate-y-1/2
                             hover:bg-[#ed3400] hover:text-white ">Call us</a>
                    </div>
                    <div class="absolute left-[-1px] bottom-0 z-[-1] ">
                        <svg width="325.000000pt" height="267.000000pt" viewBox="0 0 325.000000 267.000000"
                            fill="#ff4a17" preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,267.000000) scale(0.100000,-0.100000)" stroke="none">
                                <path
                                    d="M0 1332 l0 -1332 920 0 919 0 39 53 c213 291 233 519 64 720 -101 119 -201 194 -617 462 -344 222 -452 297 -605 426 -320 268 -528 547 -676 906 -20 48 -38 90 -40 92 -2 2 -4 -595 -4 -1327z" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
