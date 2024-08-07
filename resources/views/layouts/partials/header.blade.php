<header>
    <div class="px-[130px] xl:px-[30px] lg:px-[10px] col:px-0 z-[11] bg-white hidden md:!block border-b-[1px] border-b-[#e9e9e9]">
        <div class="flex justify-center md:!justify-between flex-wrap pb-3">
            <div>
                <ul class="h-full">
                    @if ($settings->contact_phone)
                        <li class="text-[16px] xl:text-[14px] lg:text-[12px] float-left col:float-none
                        col:text-center p-[10px] col:p-[4px] text-[#5d5d5d]">
                            <i class="fi flaticon-phone-call-1 text-[#5d5d5d] inline-block pr-[5px]"></i>
                            {{$settings->contact_phone}}
                        </li>
                    @endif
                    @if ($settings->site_email)
                        <li class="text-[16px] xl:text-[14px] lg:text-[12px] float-left col:float-none
                        col:text-center p-[10px] col:p-[4px] text-[#5d5d5d]">
                            <i class="fi flaticon-email-1 text-[#5d5d5d] inline-block pr-[5px]"></i>
                            {{$settings->site_email}}
                        </li>
                    @endif
                    @if ($settings->contact_address)
                        <li class="text-[16px] xl:text-[14px] lg:text-[12px] float-left col:float-none
                        col:text-center p-[10px] col:p-[4px] text-[#5d5d5d]">
                            <i class="fi flaticon-location text-[#5d5d5d] inline-block pr-[5px]"></i>
                            {{$settings->contact_address}}
                        </li>
                    @endif
                </ul>
            </div>
            <div class="">
                <div class="flex items-center justify-end md:justify-center md:flex-wrap">
                    <ul class="ml-[20px] col:ml-0">
                        @if ($settings->facebook_link)
                            <li class="text-[16px] float-left p-[10px] pl-0 text-[#5d5d5d]">
                                <a href="{{$settings->facebook_link}}" target="__blank" class="block w-[40px] h-[40px] leading-[40px] border-[1px] border-[#5d5d5d] hover:border-transparent rounded-[50%] text-center transition-all duration-300 hover:text-white hover:bg-[#ff4a17]">
                                    <i class="ti-facebook"></i>
                                </a>
                            </li>
                        @endif

                        @if ($settings->twitter_link)
                            <li class="text-[16px] xl:text-[14px] lg:text-[12px] float-left p-[10px] text-[#5d5d5d]">
                                <a href="{{$settings->twitter_link}}" class="block w-[40px] h-[40px] leading-[40px] border-[1px] border-[#5d5d5d] hover:border-transparent rounded-[50%] text-center transition-all duration-300 hover:text-white hover:bg-[#ff4a17]">
                                    <i class="ti-twitter-alt"></i>
                                </a>
                            </li>
                        @endif 

                        @if ($settings->instagram_link)
                            <li class="text-[16px] xl:text-[14px] lg:text-[12px] float-left p-[10px] text-[#5d5d5d]">
                                <a href="{{$settings->instagram_link}}" class="block w-[40px] h-[40px] leading-[40px] border-[1px] border-[#5d5d5d] hover:border-transparent rounded-[50%] text-center transition-all duration-300 hover:text-white hover:bg-[#ff4a17]">
                                    <i class="ti-instagram"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="px-[130px] xl:px-[30px] lg:px-[10px] col:px-0 bg-white sticky top-0 z-50 py-3 md:!py-0"> 
        <div class="flex items-center justify-between relative px-4">
            <div class="w-[195px] md:w-[280px] sm:w-[200px] col:w-[150px]">
                <a class="text-white" href="{{route('home')}}">
                    <img class="" src="/assets/images/logo.png" alt="">
                </a>
            </div>

            <div x-data="{show: false}" class="hidden md:block">
                <button x-on:click="show = !show" class="bg-main rounded-sm w-[40px] h-[40px]">
                    <x-heroicon-o-bars-3 class="w-9 h-9 text-white mx-auto" />
                </button>

                <ul x-cloak x-show="show" x-transition x-on:click.outside="show = false" class="absolute bg-white top-[125%] border-t left-0 p-3 right-0 px-4">
                    <li class="relative" >
                        <a href="{{route('home')}}" class="block before:absolute before:left-0 before:top-0 before:bottom-0 before:w-[4px] before:bg-[#ff4a17] before:content before:opacity-1 before:transition-all before:rounded-[3px] py-1  {{request()->routeIs('home') ? 'ms-3 before:visible text-[#ff4a17]' : 'before:invisible'}} font-medium" >Home</a>
                    </li>
                    <li x-data="{show: @js(request()->routeIs(['about', 'teams*', 'faqs']))}">
                        <div class="py-1 relative" x-on:click.prevent="show = !show" role="button" >
                            <div class="flex justify-between items-center before:absolute before:left-0 before:top-0 before:bottom-0 before:w-[4px] before:bg-[#ff4a17] before:content before:opacity-1 before:transition-all before:rounded-[3px] {{request()->routeIs(['about', 'teams*', 'faqs']) ? 'ms-3 before:visible text-[#ff4a17]' : 'before:invisible'}} font-medium">
                                <span>About Us</span>

                                <div>
                                    <x-heroicon-o-chevron-right class="w-4 h-4 duration-300" x-bind:class="show ? 'rotate-90' : ''" />
                                </div>
                            </div>
                        </div>

                        <ul x-show="show" x-cloak x-transition
                            class="ps-3" >
                            <li class="relative">
                                <a class="block before:absolute before:left-0 before:top-0 before:bottom-0 before:w-[4px] before:bg-[#ff4a17] before:content before:opacity-1 before:transition-all before:rounded-[3px] py-1  {{request()->routeIs('about') ? 'ms-3 before:visible text-[#ff4a17]' : 'before:invisible '}} font-medium" href="{{route('about')}}">Who We Are</a>
                            </li>
                            <li class="relative">
                                <a class="block before:absolute before:left-0 before:top-0 before:bottom-0 before:w-[4px] before:bg-[#ff4a17] before:content before:opacity-1 before:transition-all before:rounded-[3px] py-1  {{request()->routeIs('teams') ? 'ms-3 before:visible text-[#ff4a17]' : 'before:invisible '}} font-medium" href="{{route('teams')}}">Our Team Members</a>
                            </li>
                            <li class="relative">
                                <a class="block before:absolute before:left-0 before:top-0 before:bottom-0 before:w-[4px] before:bg-[#ff4a17] before:content before:opacity-1 before:transition-all before:rounded-[3px] py-1  {{request()->routeIs('faqs') ? 'ms-3 before:visible text-[#ff4a17]' : 'before:invisible '}} font-medium" href="{{route('faqs')}}">Frequently Asked Questions</a>
                            </li>
                        </ul>
                    </li>
                    <li x-data="{show: @js(request()->routeIs(['services*'])) }"> 
                        <div class="relative py-1" x-on:click.prevent="show = !show" role="button" >
                            <div class="flex justify-between items-center before:absolute before:left-0 before:top-0 before:bottom-0 before:w-[4px] before:bg-[#ff4a17] before:content before:opacity-1 before:transition-all before:rounded-[3px] {{request()->routeIs(['services*']) ? 'ms-3 before:visible text-[#ff4a17]' : 'before:invisible'}} font-medium">
                                <span>Services</span>

                                <div>
                                    <x-heroicon-o-chevron-right class="w-4 h-4 duration-300" x-bind:class="show ? 'rotate-90' : ''" />
                                </div>
                            </div>
                        </div>
                        <ul x-show="show" x-cloak x-transition class="ps-2">
                            @forelse ($services_menu as $service)
                                <li class="relative"><a class="block text-ellipsis before:absolute before:left-0 before:top-0 before:bottom-0 before:w-[4px] before:bg-[#ff4a17] before:content before:opacity-1 before:transition-all before:rounded-[3px] py-1  {{request()->url() == route('services.details', ['service' => $service->slug]) ? 'ms-3 before:visible text-[#ff4a17]' : 'before:invisible '}} font-medium" href="{{route('services.details', ['service' => $service->slug])}}">{{$service->name}}</a></li>
                            @empty
                            @endforelse
                        </ul>
                    </li>
                    <li class="relative">
                        <a class="block before:absolute before:left-0 before:top-0 before:bottom-0 before:w-[4px] before:bg-[#ff4a17] before:content before:opacity-1 before:transition-all before:rounded-[3px] py-1  {{request()->routeIs('posts*') ? 'ms-3 before:visible text-[#ff4a17]' : 'before:invisible'}} font-medium" href="{{route('posts')}}">Blog</a>
                    </li >
                    <li class="relative"><a class="block before:absolute before:left-0 before:top-0 before:bottom-0 before:w-[4px] before:bg-[#ff4a17] before:content before:opacity-1 before:transition-all before:rounded-[3px] py-1  {{request()->routeIs('contact') ? 'ms-3 before:visible text-[#ff4a17]' : 'before:invisible'}} font-medium" href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>

            <ul class="hidden md:!block">
                <li class="relative inline-block group">
                    <a href="{{route('home')}}" class="relative text-[16px] lg:text-[17px] py-[35px]
                     xl:py-[30px] px-[20px] xl:px-[6px]  block capitalize font-base-font font-bold transition-all
                        hover:text-[#ff4a17] before:absolute before:left-0 before:top-0 before:w-full before:h-[4px] before:bg-[#ff4a17] before:content before:opacity-1 {{request()->routeIs('home') ? 'before:visible text-[#ff4a17]' : 'before:invisible hover:before:visible text-[#14212b]'}} before:transition-all before:rounded-[3px]">Home</a>
                </li>
                <li class="relative inline-block group">
                    <a href="{{route('about')}}" class="relative text-[16px] lg:text-[17px] py-[35px]
                     xl:py-[30px] px-[20px] xl:px-[6px] -[#14212b] block capitalize
                        font-base-font font-bold transition-all
                       hover:text-[#ff4a17]
                       before:absolute before:left-0 before:top-0 before:w-full before:h-[4px]
                       before:bg-[#ff4a17] before:content
                       before:opacity-1 before:transition-all before:rounded-[3px]
                       hover:before:opacity-100 {{request()->routeIs(['about', 'teams*', 'faqs']) ? 'before:!visible text-[#ff4a17]' : 'before:invisible hover:before:visible text-[#14212b]'}}
                    ">About Us</a>

                    <ul class="absolute w-[240px]  left-0 top-[110%] pt-[20px] pb-[15px] px-[7px] z-[111]  bg-[#fff] shadow-[0px_2px_20px_0px_rgba(62,65,159,0.09);]  transition-all  opacity-0 invisible group-hover:opacity-100 group-hover:top-full group-hover:visible ">
                        <li>
                            <a href="{{route('about')}}" class="text-[16px] lg:text-[16px] inline-block  px-[15px] capitalize
                                text-[#0a272c] group relative overflow-hidden font-bold transition-all
                                after:absolute after:left-[15px] after:bottom-0 after:w-0 after:h-[2px]
                                after:content after:bg-[#ff4a17] after:transition-all font-base-font
                                hover:after:w-[50%]">Who We Are</a>
                        </li>
                        <li>
                            <a href="{{route('teams')}}" class="text-[16px] lg:text-[16px] inline-block  px-[15px] capitalize
                                text-[#0a272c] group relative overflow-hidden font-bold transition-all
                                after:absolute after:left-[15px] after:bottom-0 after:w-0 after:h-[2px]
                                after:content after:bg-[#ff4a17] after:transition-all font-base-font
                                hover:after:w-[50%]">Our Team Members</a>
                        </li>
                        <li>
                            <a href="{{route('faqs')}}" class="text-[16px] lg:text-[16px] inline-block  px-[15px] capitalize text-[#0a272c] group relative overflow-hidden font-bold transition-all after:absolute after:left-[15px] after:bottom-0 after:w-0 after:h-[2px] after:content after:bg-[#ff4a17] after:transition-all font-base-font hover:after:w-[50%]">Frequently Asked Questions</a>
                        </li>
                    </ul>
                </li>
                <li class="relative inline-block group">
                    <a href="{{route('services')}}" class="relative text-[16px] lg:text-[17px] py-[35px]
                     xl:py-[30px] px-[20px] xl:px-[6px]
                        text-[#14212b] block capitalize
                        font-base-font font-bold transition-all
                       hover:text-[#ff4a17]
                       before:absolute before:left-0 before:top-0 before:w-full before:h-[4px]
                       before:bg-[#ff4a17] before:content
                       before:opacity-1 before:transition-all before:rounded-[3px]
                       hover:before:opacity-100 {{request()->routeIs('services*') ? 'before:visible text-[#ff4a17]' : 'before:invisible hover:before:visible text-[#14212b]'}}">What We do</a>
                       <ul class="absolute w-[240px]  left-0 top-[110%] pt-[20px] pb-[15px] px-[7px] z-[111]  bg-[#fff] shadow-[0px_2px_20px_0px_rgba(62,65,159,0.09);]  transition-all  opacity-0 invisible
                                    group-hover:opacity-100 group-hover:top-full group-hover:visible ">
                                @forelse ($services_menu as $service)
                                    <li>
                                        <a href="{{route('services.details', ['service' => $service->slug])}}" class="text-[16px] lg:text-[16px] inline-block  px-[15px] capitalize
                                            text-[#0a272c] group relative overflow-hidden font-bold transition-all
                                            after:absolute after:left-[15px] after:bottom-0 after:w-0 after:h-[2px]
                                            after:content after:bg-[#ff4a17] after:transition-all font-base-font
                                            hover:after:w-[50%]">{{$service->name}}</a>
                                    </li>
                                @empty
                                @endforelse
                        </ul>
                </li>
                <li class="relative inline-block group">
                    <a href="{{route('posts')}}" class="relative text-[16px] lg:text-[17px] py-[35px]
                     xl:py-[30px] px-[20px] xl:px-[6px]
                        text-[#14212b] block capitalize
                        font-base-font font-bold transition-all
                       hover:text-[#ff4a17]
                       before:absolute before:left-0 before:top-0 before:w-full before:h-[4px]
                       before:bg-[#ff4a17] before:content
                       before:opacity-1 before:transition-all before:rounded-[3px]
                       hover:before:opacity-100 {{request()->routeIs('posts*') ? 'before:visible text-[#ff4a17]' : 'before:invisible hover:before:visible text-[#14212b]'}}">Blog</a>
                </li>
                <li class="relative inline-block">
                    <a href="{{route('contact')}}" class="relative text-[16px] lg:text-[17px] py-[35px]
                     xl:py-[30px] px-[20px] xl:px-[6px]
                        text-[#14212b] block capitalize
                        font-base-font font-bold transition-all
                       hover:text-[#ff4a17]
                       before:absolute before:left-0 before:top-0 before:w-full before:h-[4px]
                       before:bg-[#ff4a17] before:content
                       before:opacity-1 before:transition-all before:rounded-[3px]
                       hover:before:opacity-100 {{request()->routeIs('contact') ? 'before:visible text-[#ff4a17]' : 'before:invisible hover:before:visible text-[#14212b]'}}
                    ">Contact</a>
                </li>
            </ul>

            <div class="items-center hidden md:!flex">
                <a class="theme-btn py-[10px] px-[25px] pr-[50px] md:hidden" href="{{route('contact')}}">Get in touch</a>
            </div>
        </div>
    </div>
</header>
