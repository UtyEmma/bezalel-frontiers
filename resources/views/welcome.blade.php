<x-guest-layout title="{{$settings->site_title}}">
    @include('partials.home.banner')

    @push('meta')
        <title>{{ $page->render('title', $settings->site_title) }} - {{ $settings->company_name }}</title>
        <meta name="description" content="{{$settings->seo_description}}">
        <meta name="keywords" content="{{$settings->seo_tags}}" >
    @endpush

    @include('partials.home.about',[
        'group' => 'sections',
        'section' => 'about_section'
    ])

    @include('partials.home.services', [
        'group' => 'sections',
        'section' => 'services_section'
    ])

    @include('partials.home.specialties', [
        'group' => 'sections',
        'section' => 'specialties_section'
    ])

    @if ($clients->count() > 0)
        <section class="section-wrap">
            <div class="wraper">
                <div class="mb-[75px] sm:mb-[40px] text-center">
                    <span class="uppercase text-[16px] font-bold tracking-[3px] !text-main font-base-font">Our Clients</span>
                    {{-- <h2 class="text-[55px] md:text-[35px] sm:text-[32px] col:text-[28px] leading-[70px] md:leading-[55px] sm:leading-[40px] mt-[10px] relative capitalize font-heading-font font-bold text-[#14212b]">We help </h2> --}}
                </div>
                <div class="flex flex-wrap justify-center">
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
                    <span class="uppercase text-[16px] font-bold tracking-[3px] !text-main
                    font-base-font">CLIENT TESTIMONIAL</span>
                    <h2 class="text-[55px] md:text-[35px] sm:text-[32px] text-white col:text-[28px] leading-[70px] md:leading-[55px] sm:leading-[40px]
                    mt-[10px] relative capitalize font-heading-font font-bold
                    text-[#14212b]">Best Word Our Clients</h2>
                </div>
                <div class="max-w-[1000px] mx-auto text-center relative z-[1]">
                    <div class="w-[100px] h-[100px] leading-[100px] bg-white
                        shadow-[0px_0px_35px_0px_rgba(20,33,43,0.1)] mx-auto rounded-[50%] mb-[-50px] relative z-[11] ">
                        <i class="fi flaticon-left-quote text-[50px] !text-main"></i>
                    </div>
                    <div class="wpo-testimonial-slide bg-white shadow-[0px_0px_35px_0px_rgba(20,33,43,0.1)]">
                        @forelse ($testimonials as $testimonial)
                            <div
                                class="p-[70px_130px] pt-[100px] bg-none sm:p-[40px] sm:pt-[80px] col:p-[30px_20px] col:pt-[60px]">
                                <div class="wpo-testimonial-text">
                                    <p class="text-[18px] col:text-[15px] mb-[20px]">{{$testimonial->message}}</p>
                                    <div class="wpo-testimonial-text-btm">
                                        <h3 class="text-[32px] font-semibold mt-[5px] col:text-[25px] mb-[15px]">{{$testimonial->name}}</h3>
                                        <span class="uppercase text-[16px] font-bold tracking-[3px] !text-main col:text-[14px]">
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

    @include('partials.home.cta', [
        'group' => 'sections',
        'section' => 'cta_section'
    ])

    @include('partials.contact.section')

    @if ($posts->count() > 0)
        <section class="bg-[#f3f4f4] section-wrap">
            <div class="wraper">
                <div class="mb-[75px] sm:mb-[40px] text-center">
                    <span class="uppercase text-[16px] font-bold tracking-[3px] !text-main
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
                                        <a href="{{$posts[0]->route}}" class="text-white transition-all duration-500 hover:!text-main">{{$posts[0]->title}}</a>
                                    </h2>
                                    <ul class="flex col:block">
                                        <li class="text-white text-[14px] uppercase">
                                            <p class="!text-main">{{$posts[0]->publishing_date}}</p>
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
                                                        hover:!text-main">{{$post->title}}</a>
                                                </h2>
                                                <ul class="flex col:block space-x-3">
                                                    <li class="text-[14px] uppercase text-[#6e6e6e] ">
                                                        <a href="{{$post->route}}" class="!text-main">{{$post->publishing_date}}</a>
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
