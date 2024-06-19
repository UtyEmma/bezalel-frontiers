<header>
    <div class="px-[130px] xl:px-[30px] lg:px-[10px] col:px-0 z-[11] bg-white border-b-[1px] border-b-[#e9e9e9]">
        <div class="flex justify-between flex-wrap">
            <div>
                <ul class="h-full">
                    <li class="text-[16px] xl:text-[14px] lg:text-[12px] float-left col:float-none
                    col:text-center p-[10px] col:p-[4px] text-[#5d5d5d]">
                        <i class="fi flaticon-phone-call-1 text-[#5d5d5d] inline-block pr-[5px]"></i>
                        (00) 0431 275 490
                    </li>
                    <li class="text-[16px] xl:text-[14px] lg:text-[12px] float-left col:float-none
                    col:text-center p-[10px] col:p-[4px] text-[#5d5d5d]">
                        <i class="fi flaticon-email-1 text-[#5d5d5d] inline-block pr-[5px]"></i>
                        support24@gmail.com
                    </li>
                    <li class="text-[16px] xl:text-[14px] lg:text-[12px] float-left col:float-none
                    col:text-center p-[10px] col:p-[4px] text-[#5d5d5d]">
                        <i class="fi flaticon-location text-[#5d5d5d] inline-block pr-[5px]"></i>
                        Roberts Avenue, Chattanooga.
                    </li>
                </ul>
            </div>
            <div class="">
                <div class="flex items-center justify-end md:justify-center md:flex-wrap">
                    <ul class="ml-[20px] col:ml-0">
                        <li class="text-[16px] float-left p-[10px] pl-0 text-[#5d5d5d]">
                            <a href="#"
                                class="block w-[40px]
                                 h-[40px] leading-[40px] border-[1px] border-[#5d5d5d] hover:border-transparent
                                 rounded-[50%] text-center transition-all duration-300 hover:text-white hover:bg-[#ff4a17]">
                                <i class="ti-facebook"></i>
                            </a>
                        </li>
                        <li
                            class="text-[16px] xl:text-[14px] lg:text-[12px] float-left p-[10px] text-[#5d5d5d]">
                            <a href="#"
                                class="block w-[40px]
                                 h-[40px] leading-[40px] border-[1px] border-[#5d5d5d] hover:border-transparent
                                 rounded-[50%] text-center transition-all duration-300 hover:text-white hover:bg-[#ff4a17]">
                                <i class="ti-twitter-alt"></i>
                            </a>
                        </li>
                        <li
                            class="text-[16px] xl:text-[14px] lg:text-[12px] float-left p-[10px] text-[#5d5d5d]">
                            <a href="#"
                                class="block w-[40px]
                                 h-[40px] leading-[40px] border-[1px] border-[#5d5d5d] hover:border-transparent
                                 rounded-[50%] text-center transition-all duration-300 hover:text-white hover:bg-[#ff4a17]">
                                <i class="ti-instagram"></i>
                            </a>
                        </li>
                        <li
                            class="text-[16px] xl:text-[14px] lg:text-[12px] float-left p-[10px] text-[#5d5d5d]">
                            <a href="#"
                                class="block w-[40px]
                                 h-[40px] leading-[40px] border-[1px] border-[#5d5d5d] hover:border-transparent
                                 rounded-[50%] text-center transition-all duration-300 hover:text-white hover:bg-[#ff4a17]">
                                <i class="ti-google"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="px-[130px] xl:px-[30px] lg:px-[10px] col:px-0 md:py-[20px]
         z-[11] bg-white">
        <div class="flex items-center justify-between">
            <div id="dl-menu" class="dl-menuwrapper hidden md:block">
                <button class="dl-trigger">Open Menu</button>
                <ul class="dl-menu">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li><a href="{{route('about')}}">About US</a></li>
                    <li><a href="{{route('services')}}">Services</a>
                        <ul class="dl-submenu">
                            @forelse ($services_menu as $service)
                                <li><a href="{{route('services.details', ['service' => $service->slug])}}">{{$service->name}}</a></li>
                            @empty
                            @endforelse
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('posts')}}">Blog</a>
                    </li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div><!-- /dl-menuwrapper -->

            <div class="w-[195px] md:w-[280px] sm:w-[200px] col:w-[150px] col:ml-[50px]">
                <a class="flex items-center md:justify-center text-white" href="index.html">
                    <img class="" src="/assets/images/logo-2.png" alt=""></a>
            </div>

            <ul class="md:hidden">
                <li class="relative inline-block group">
                    <a href="{{route('home')}}" class="relative text-[16px] lg:text-[17px] py-[35px]
                     xl:py-[30px] px-[20px] xl:px-[6px]
                        text-[#ff4a17] block capitalize
                        font-base-font font-bold transition-all
                        hover:text-[#ff4a17]
                        before:absolute before:left-0 before:top-0 before:w-full
                        before:h-[4px] before:bg-[#ff4a17] before:content
                    before:opacity-1 before:visible before:transition-all
                        before:rounded-[3px]">Home</a>
                </li>
                <li class="relative inline-block">
                    <a href="{{route('about')}}" class="relative text-[16px] lg:text-[17px] py-[35px]
                     xl:py-[30px] px-[20px] xl:px-[6px]
                        text-[#14212b] block capitalize
                        font-base-font font-bold transition-all
                       hover:text-[#ff4a17]
                       before:absolute before:left-0 before:top-0 before:w-full before:h-[4px]
                       before:bg-[#ff4a17] before:content
                       before:opacity-0 before:invisible before:transition-all before:rounded-[3px]
                       hover:before:opacity-100 hover:before:visible
                    ">About Us</a>
                </li>
                <li class="relative inline-block group">
                    <a href="{{route('services')}}" class="relative text-[16px] lg:text-[17px] py-[35px]
                     xl:py-[30px] px-[20px] xl:px-[6px]
                        text-[#14212b] block capitalize
                        font-base-font font-bold transition-all
                       hover:text-[#ff4a17]
                       before:absolute before:left-0 before:top-0 before:w-full before:h-[4px]
                       before:bg-[#ff4a17] before:content
                       before:opacity-0 before:invisible before:transition-all before:rounded-[3px]
                       hover:before:opacity-100 hover:before:visible">What We do</a>
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
                    <a href="{{route('faqs')}}" class="relative text-[16px] lg:text-[17px] py-[35px]
                     xl:py-[30px] px-[20px] xl:px-[6px]
                        text-[#14212b] block capitalize
                        font-base-font font-bold transition-all
                       hover:text-[#ff4a17]
                       before:absolute before:left-0 before:top-0 before:w-full before:h-[4px]
                       before:bg-[#ff4a17] before:content
                       before:opacity-0 before:invisible before:transition-all before:rounded-[3px]
                       hover:before:opacity-100 hover:before:visible">FAQs</a>
                </li>
                <li class="relative inline-block group">
                    <a href="{{route('posts')}}" class="relative text-[16px] lg:text-[17px] py-[35px]
                     xl:py-[30px] px-[20px] xl:px-[6px]
                        text-[#14212b] block capitalize
                        font-base-font font-bold transition-all
                       hover:text-[#ff4a17]
                       before:absolute before:left-0 before:top-0 before:w-full before:h-[4px]
                       before:bg-[#ff4a17] before:content
                       before:opacity-0 before:invisible before:transition-all before:rounded-[3px]
                       hover:before:opacity-100 hover:before:visible">Blog</a>
                </li>
                <li class="relative inline-block">
                    <a href="{{route('contact')}}" class="relative text-[16px] lg:text-[17px] py-[35px]
                     xl:py-[30px] px-[20px] xl:px-[6px]
                        text-[#14212b] block capitalize
                        font-base-font font-bold transition-all
                       hover:text-[#ff4a17]
                       before:absolute before:left-0 before:top-0 before:w-full before:h-[4px]
                       before:bg-[#ff4a17] before:content
                       before:opacity-0 before:invisible before:transition-all before:rounded-[3px]
                       hover:before:opacity-100 hover:before:visible
                    ">Contact</a>
                </li>
            </ul>

            <div class="flex items-center">
                <div class="relative header-search-form-wrapper">
                    <div class="cart-search-contact mr-[20px] md:mr-0 text-center cursor-pointer">
                        <div class="search-toggle-btn bg-[rgba(0,0,0,0.05)] text-[#6e6e6e]
                         w-[50px] h-[50px] rounded-[50%] leading-[55px]">
                            <i class="fi flaticon-search-interface-symbol text-[22px]"></i>
                        </div>
                    </div>
                    <div class="header-search-form absolute right-0 top-[210%] w-[263px] bg-white z-20 p-[15px]
                        transform text-center transition-all opacity-0 invisible
                         shadow-[0px_2px_20px_0px_rgba(62,65,159,0.09);]">
                        <div>
                            <form class="relative">
                                <input class="bg-white w-full h-[40px] pl-[10px] pr-[40px] focus-visible:outline-0
                                    border border-[rgba(64,59,59,0.07)] capitalize" type="text"
                                    placeholder="search here..">
                                <button
                                    class="absolute right-0 top-0 w-[40px] h-[40px] leading-[40px] bg-[#272c3f] text-white border-0"><i
                                        class="fi flaticon-search-interface-symbol"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <a class="theme-btn py-[10px] px-[25px] pr-[50px] md:hidden" href="contact.html">Get in touch</a>
            </div>
        </div>
    </div>
</header>
