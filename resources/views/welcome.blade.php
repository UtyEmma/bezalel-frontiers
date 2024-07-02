<x-guest-layout title="{{$settings->site_title}}">
    @include('partials.home.banner')

    <section class="section-wrap">
        <div class="wraper">
            <div class="grid grid-cols-12 md:!gap-x-10 gap-y-10 items-center">
                <div class="col-span-6 md:col-span-12 sm:col-span-12 ">
                    <div class="relative z-[1] text-center max-w-[570px] sm:w-full aspect-square md:aspect-auto md:!h-[650px] rounded-[6px]
                     before:absolute before:left-0 before:top-0 before:w-full  before:h-full
                     before:bg-[rgba(20,33,43,.25)] before:rounded-[6px] ">
                        <img class="w-full h-full rounded-[6px] object-cover" src="{{asset('assets/imgs/bezalel-frontiers-writing-for-business.jpg')}}" alt="">
                        <div class="absolute left-[-70px] bottom-[100px] z-[1]
                             animate-[bounceTop_3s_linear_infinite] col:left-0">
                            <img src="assets/images/ab-shape-1.png" alt="">
                        </div>
                        <div class="absolute right-[35px] top-[35px] animate-[bounceTop_3s_linear_infinite]">
                            <img src="assets/images/ab-shape-2.png" alt="">
                        </div>
                        <div class="absolute right-[50px] bottom-[50px] rounded-[50%] border-[5px]
                            animate-[spineer_2s_infinite]">
                            <img src="{{asset('assets/imgs/bezalel-frontiers-growth-chart.jpg')}}" alt="" class="rounded-[50%] col:max-w-[100px] max-w-[200px]">
                        </div>
                    </div>
                </div>
                <div class="col-span-6 md:col-span-12 sm:col-span-12">
                    <div class="max-w-[600px] sm:w-full relative pl-[40px] md:pl-0 ">
                        <h4
                            class="text-[21px] text-[#ff4a17] font-base-font font-bold">
                            Welcome to {{$settings->company_name}}</h4>
                        <h2 class="text-[60px] leading-[70px] my-[30px] text-[#0a272c] font-normal font-heading-font
                            xl:text-[55px] lg:text-[36px] lg:leading-[50px] lg:my-[20px] col:text-[26px]
                            col:leading-[36px] col:my-[15px]">
                            Driving Decisions with Data, Shaping Success with <span class="text-[#ff4a17]">Integrity</span>
                        </h2>
                        <p class="text-[18px] mb-[35px] col:text-[16px] col:mb-[20px]">At <span class="text-[#ff4a17] font-semibold">{{$settings->company_name}}</span>, we provide actionable insights that inform, inspire, and empower minds and organizations for success. Discover how our data-driven and research-based management consulting can transform your business.</p>
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
                        text-[#fff]">Comprehensive Solutions for Your Business Needs</h2>
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
                                    <p class="text-[#e1e1e1] font-base-font line-clamp-3">{{$service->description}}</p>
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
                                    <p class="text-white font-base-font line-clamp-3">{{$service->description}}</p>
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

                <div class="mt-10 flex justify-center">
                    <a class="theme-btn me-0" href="{{route('services')}}">View more services</a>
                </div>
            </div>
        </section>
    @endif

    <section class="pt-[120px] md:pt-[90px] sm:pt-[80px]">
        <div class="wraper">
            <div class="grid grid-cols-12 items-center ">
                <div class="col-span-6 md:col-span-12 ">
                    <div class="md:mb-[30px]">
                        <h5 class="text-[21px] text-[#ff4a17] font-heading-font font-semibold sm:text-[18px]">We are fully equipped to serve your needs</h5>
                        <h2 class="text-[60px] leading-[70px] mb-[30px] mt-[15px] text-[#0a272c] font-heading-font font-semibold
                        xl:text-[40px] xl:leading-[60px] xl:mb-[20px] xl:mt-[10px] lg:text-[35px] lg:leading-[50px]
                        sm:text-[35px] sm:leading-[50px]">We provide Strategic Insights and deliver <span class="text-[#ff4a17]">Growth.</span></h2>
                        <div class="space-y-4">
                            <p class="text-[#687693] text-[18px] leading-[25px]">Since our inception, {{$settings->company_name}} has been dedicated to delivering high-quality, research-driven insights that empower organizations to make informed decisions.</p>
                            <p class="text-[#687693] text-[18px] leading-[25px]">We data-driven and research-based with the goal of providing essential intelligence for organizations and their people for informed ideation, and business & management decisions. Our commitment to integrity, knowledge, and excellence sets us apart in the consulting industry.</p>
                            <div>
                                <div class="mt-10">
                                    <a class="theme-btn me-0" href="{{route('about')}}">Get in touch</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-6 md:col-span-12">
                    @if ($services->count())
                        <div class="ml-[70px] xl:ml-[50px] lg:ml-[30px] md:ml-0 p-[80px_70px] shadow-[0px_0px_35px_0px_rgba(20,33,43,0.1)] xl:p-[60px_50px] lg:p-[40px_30px]">
                            @forelse ($services as $service)
                                <div class="mb-[30px] relative">
                                    <div class="flex justify-between items-end mb-[10px]">
                                        <h5 class="text-[22px] sm:text-[18px]  font-heading-font text-[#0a272c] max-w-[80%] font-semibold">{{$service->name}}</h5>
                                        <span class="text-[22px] font-heading-font text-[#14212b] font-bold sm:text-[18px]">100%</span>
                                    </div>
                                    <div class="h-[6px] w-full bg-[#f3f4f4] relative rounded-[10px] overflow-hidden">
                                        <div class="wow fadeInLeft h-[6px]  bg-[#ff4a17]" style="width: 100%" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    @if ($clients->count() > 0)
        <section class="section-wrap">
            <div class="wraper">
                <div class="mb-[75px] sm:mb-[40px] text-center">
                    <span class="uppercase text-[16px] font-bold tracking-[3px] text-[#ff4a17] font-base-font">Our Clients</span>
                    <h2 class="text-[55px] md:text-[35px] sm:text-[32px] col:text-[28px] leading-[70px] md:leading-[55px] sm:leading-[40px] mt-[10px] relative capitalize font-heading-font font-bold text-[#14212b]">We help </h2>
                </div>
                <div class="flex flex-wrap">
                    @forelse ($clients as $client)
                        <div class="basis-[25%] text-center border-[#eeeeee] border-[1px] mt-[-1px] ml-[-1px]
                        p-[35px] flex justify-center flex-col md:p-[20px] sm:basis-[50%] sm:p-[30px_40px] col:p-[20px]">
                            <a href="{{$client->website}}" target="__blank">
                                <img src="{{$client->logo}}" alt="" title="{{$client->name}}" class="inline-block max-w-[70%] mx-auto md:w-[100%]">
                            </a>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </section>
    @endif

    @if ($testimonials->count() > 0)
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
                    <div class="w-[100px] h-[100px] leading-[100px] bg-white
                        shadow-[0px_0px_35px_0px_rgba(20,33,43,0.1)] mx-auto rounded-[50%] mb-[-50px] relative z-[11] ">
                        <i class="fi flaticon-left-quote text-[50px] text-[#ff4a17]"></i>
                    </div>
                    <div class="wpo-testimonial-slide bg-white shadow-[0px_0px_35px_0px_rgba(20,33,43,0.1)]">
                        @forelse ($testimonials as $testimonial)
                            <div
                                class="p-[70px_130px] pt-[100px] bg-none sm:p-[40px] sm:pt-[80px] col:p-[30px_20px] col:pt-[60px]">
                                <div class="wpo-testimonial-text">
                                    <p class="text-[18px] col:text-[15px] mb-[20px]">{{$testimonial->message}}</p>
                                    <div class="wpo-testimonial-text-btm">
                                        <h3 class="text-[32px] font-semibold mt-[5px] col:text-[25px] mb-[15px]">{{$testimonial->name}}</h3>
                                        <span class="uppercase text-[16px] font-bold tracking-[3px] text-[#ff4a17] col:text-[14px]">
                                            <span class="text-gray-500">{{$testimonial->role}} -</span> {{$testimonial->company}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
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
    @endif

    <section class="section-wrap">
        <div class="wraper">
            <div class=" bg-no-repeat bg-center rounded-[6px] md:p-[40px_35px] col:p-[0px] !p-0 bg-cover" style="background-image: url('{{asset('assets/imgs/bezalel-frontiers-business-handshake.jpg')}}')"
            >
                <div class="py-[100px] col:py-[20px] bg-[rgba(20,33,43,0.9)] flex items-center flex-col  relative z-[1] rounded-[6px] overflow-hidden lg:flex-wrap lg:justify-center lg:text-center space-y-6">
                    <div class="basis-[80%] lg:basis-full lg:mr-0 px-4 md:!px-20 lg:mb-[20px]">
                        <span class="uppercase text-[16px] font-base-font font-bold tracking-[3px] text-[#ff4a17]">Ready to Transform Your Business?</span>
                        <h2 class="text-[45px] text-white mt-[20px] lg:text-[40px] font-heading-font font-semibold leading-[1.2] sm:text-[30px]">Take the first step towards innovative solutions and strategic growth.</h2>
                    </div>

                    <div class="">
                        <a href="{{route('contact')}}" class="theme-btn">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.contact.section')

    @if ($posts->count() > 0)
        <section class="bg-[#f3f4f4] section-wrap">
            <div class="wraper">
                <div class="mb-[75px] sm:mb-[40px] text-center">
                    <span class="uppercase text-[16px] font-bold tracking-[3px] text-[#ff4a17]
                    font-base-font">OUR BLOG</span>
                    <h2 class="text-[55px] md:text-[35px] sm:text-[32px] col:text-[28px] leading-[70px] md:leading-[55px] sm:leading-[40px]
                    mt-[10px] relative capitalize font-heading-font font-bold text-[#14212b] md:px-10">Stay updated with our latest research and insights.</h2>
                </div>
                <div>
                    <div class="grid grid-cols-12 gap-y-4 md:gap-x-4">
                        <div class="col-span-6 lg:col-span-12">
                            <div class="relative group">
                                <div class="relative overflow-hidden rounded-[8px]
                                        before:absolute before:left-0 before:bottom-0 before:w-full before:h-full
                                        before:bg-[linear-gradient(180deg,_rgba(20,33,43,0.98)_20%,_rgba(20,33,43,0)_50%)]
                                        before:rotate-[-180deg] before:z-[1] before:rounded-[8px] before:transition
                                        before:duration-300 ">
                                    <img src="{{$posts[0]->image}}" alt="{{$posts[0]->title}}" class="scale-[1] rounded-[8px] transition-all duration-500 group-hover:scale-[1.2]">
                                </div>
                                <div class="p-[50px] absolute left-0 bottom-0  z-[11] col:p-[30px]
                                    duration-500  lg:p-[20px] lg:pb-[0]">
                                    <h2
                                        class="text-[30px] leading-[32px] mt-[10px] mb-[30px] col:text-[22px] col:mb-[15px] col:leading-[30px]">
                                        <a href="{{$posts[0]->route}}" class="text-white transition-all duration-500 hover:text-[#ff4a17]">{{$posts[0]->title}}</a>
                                    </h2>
                                    <ul class="flex col:block">
                                        <li class="text-white text-[14px] uppercase">
                                            <p class="text-[#ff4a17]">{{$posts[0]->publishing_date}}</p>
                                        </li>
                                        <li class="pl-[20px] relative col:pl-0 col:mt-[5px] text-white text-[14px] uppercase before:absolute before:left-[10px] before:top-[50%]
                                        before:-translate-y-1/2 before:content-['-'] col:before:hidden">by: {{$posts[0]->author->name}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-6 lg:col-span-12">
                            <div class="pl-[40px] lg:pl-0">
                                @forelse ($posts as $key => $post)
                                    @if ($key > 0)
                                        <div class="mb-[15px] lg:mb-[30px] overflow-hidden lg:flex lg:items-center col:flex-wrap col:justify-center group transition-all duration-500">
                                            <div class="relative overflow-hidden rounded-[8px] md:w-1/2 float-left md:mr-[20px] transition-all duration-500">
                                                <img class="scale-[1] rounded-[8px] col:mb-[20px] transition-all duration-500 group-hover:scale-[1.2]" src="{{$post->image}}" alt="{{$post->title}}">
                                            </div>
                                            <div class="z-[11] overflow-hidden">
                                                <h2 class="text-[23px] mb-[15px] leading-[30px] xl:text-[20px] xl:mb-[10px] xl:leading-[28px] transition-all duration-500 font-semibold">
                                                    <a href="{{$post->route}}" class="text-[#0a272c] transition-all duration-500
                                                        hover:text-[#ff4a17]">{{$post->title}}</a>
                                                </h2>
                                                <ul class="flex col:block space-x-3">
                                                    <li class="text-[14px] uppercase text-[#6e6e6e] ">
                                                        <a href="{{$post->route}}" class="text-[#ff4a17]">{{$post->publishing_date}}</a>
                                                    </li>

                                                    <li class="text-[14px] uppercase text-[#6e6e6e] relative col:pl-0 col:mt-[5px]">by: {{$post->author->name}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endif
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
</x-guest-layout>
