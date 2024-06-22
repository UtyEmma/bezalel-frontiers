<section class="bg-[#14212b] relative z-[1]">
    <div class="py-[80px] md:pb-[60px] relative overflow-hidden">
        <div class="wraper">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-4 lg:col-span-4 md:col-span-6 sm:col-span-6 col:col-span-12 md:mb-[30px]">
                    <div class="max-w-[180px] mb-[30px]">
                        <a href="{{route('home')}}">
                            <img src="assets/images/logo.png" class="brightness-0 invert-[1]" alt="{{$settings->company_name}}">
                        </a>
                    </div>
                    <p class="mb-[10px] text-[#cbcbcb] text-[16px] leading-[30px]">{{$settings->site_description}}</p>
                    <ul class="pt-[10px]">
                        @if ($settings->facebook_link)
                            <li class="float-left text-[22px] text-white">
                                <a class="text-white w-[36px] h-[36px] leading-[40px] bg-[rgba(255,255,255,0.1)] block text-center rounded-[50%] text-[18px] transition-all hover:bg-[#ff4a17]" target="__blank" href="{{$settings->facebook_link}}">
                                    <i class="ti-facebook"></i>
                                </a>
                            </li>
                        @endif

                        @if ($settings->twitter_link)
                            <li class="float-left text-[22px] text-white ml-[30px] lg:ml-[20px]">
                                <a class="text-white w-[36px] h-[36px] leading-[40px] bg-[rgba(255,255,255,0.1)] block text-center rounded-[50%] text-[18px] transition-all hover:bg-[#ff4a17]" target="__blank" href="{{$settings->twitter_link}}">
                                    <i class="ti-twitter-alt"></i>
                                </a>
                            </li>
                        @endif

                        @if ($settings->instagram_link)
                            <li class="float-left text-[22px] text-white ml-[30px] lg:ml-[20px]">
                                <a class="text-white w-[36px] h-[36px] leading-[40px] bg-[rgba(255,255,255,0.1)] block text-center rounded-[50%] text-[18px] transition-all hover:bg-[#ff4a17]" target="__blank" href="{{$settings->instagram_link}}">
                                    <i class="ti-instagram"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="col-span-4 lg:col-span-4 md:col-span-6 sm:col-span-6 col:col-span-12 md:mb-[30px]">
                    <div class="pl-[50px] lg:pl-0 md:pl-0">
                        <div class="mb-[30px]">
                            <h3 class="text-[25px] text-white capitalize relative font-heading-font font-bold
                             ">Company</h3>
                        </div>
                        <ul>
                            <li class="relative z-[1] py-[6px] pl-[15px] before:absolute before:left-0
                                before:top-[50%] before:-translate-y-1/2 before:-z-[1] before:w-[5px]
                                before:h-[2px] before:bg-[#cbcbcb] before:transition-all before:duration-300
                                hover:before:bg-[#ff4a17] group">
                                <a href="{{route('about')}}" class="text-[16px] transition-all text-[#cbcbcb]
                                   duration-300 group-hover:text-[#ff4a17]">
                                    About Us
                                </a>
                            </li>
                            <li class="relative z-[1] py-[6px] pl-[15px] before:absolute before:left-0
                                before:top-[50%] before:-translate-y-1/2 before:-z-[1] before:w-[5px]
                                before:h-[2px] before:bg-[#cbcbcb] before:transition-all before:duration-300
                                hover:before:bg-[#ff4a17] group">
                                <a href="{{route('services')}}" class="text-[16px] transition-all text-[#cbcbcb]
                                   duration-300 group-hover:text-[#ff4a17]">
                                    Our services
                                </a>
                            </li>
                            <li class="relative z-[1] py-[6px] pl-[15px] before:absolute before:left-0
                                before:top-[50%] before:-translate-y-1/2 before:-z-[1] before:w-[5px]
                                before:h-[2px] before:bg-[#cbcbcb] before:transition-all before:duration-300
                                hover:before:bg-[#ff4a17] group">
                                <a href="{{route('contact')}}" class="text-[16px] transition-all text-[#cbcbcb]
                                   duration-300 group-hover:text-[#ff4a17]">
                                    Contact us
                                </a>
                            </li>
                            <li class="relative z-[1] py-[6px] pl-[15px] before:absolute before:left-0
                                before:top-[50%] before:-translate-y-1/2 before:-z-[1] before:w-[5px]
                                before:h-[2px] before:bg-[#cbcbcb] before:transition-all before:duration-300
                                hover:before:bg-[#ff4a17] group">
                                <a href="{{route('faqs')}}" class="text-[16px] transition-all text-[#cbcbcb]
                                   duration-300 group-hover:text-[#ff4a17]">
                                    Frequently Asked Questions
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-6 col:col-span-12 md:mb-[30px]">
                    <div class="px-[20px] lg:px-0 ">
                        <div class="mb-[30px]">
                            <h3 class="text-[25px] text-white capitalize relative font-heading-font font-bold
                             ">Recent Post</h3>
                        </div>
                        <ul>
                            <li class="mb-[15px] ">
                                <h4 class="mb-[5px]">
                                    <a href="blog-single.html" class="text-[18px] leading-[30px] font-heading-font font-bold text-white transition-all duration-300
                                        hover:text-[#ff4a17]">
                                        What are the pros and cons of becoming a
                                        consultant?
                                    </a>
                                </h4>
                                <span class="flex items-center text-[14px] text-[#cbcbcb]">
                                    <i class="fi flaticon-calendar mr-[5px] text-[#ff4a17] -mt-[2px]"></i>
                                    10.02.2023
                                </span>
                            </li>
                            <li class="mb-[15px] ">
                                <h4 class="mb-[5px]">
                                    <a href="blog-single.html" class="text-[18px] leading-[30px] font-heading-font font-bold text-white transition-all duration-300
                                        hover:text-[#ff4a17]">
                                        We are able to give truly independent advice
                                    </a>
                                </h4>
                                <span class="flex items-center text-[14px] text-[#cbcbcb]">
                                    <i class="fi flaticon-calendar mr-[5px] text-[#ff4a17] -mt-[2px]"></i>
                                    10.02.2023
                                </span>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                <div class="col-span-4 lg:col-span-4 md:col-span-6 sm:col-span-6 col:col-span-12 md:mb-[30px]">
                    <div class="mb-[30px]">
                        <h3 class="text-[25px] text-white capitalize relative font-heading-font font-bold">Get in touch</h3>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="text-[#cbcbcb] flex space-x-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                                
                            <span>{{$settings->site_email}}</span>
                        </div>
    
                        <div class="text-[#cbcbcb] flex space-x-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>
                              
                                
                            <span>{{$settings->contact_phone}}</span>
                        </div>
    
                        <div class="text-[#cbcbcb] flex space-x-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                                
                            <span class="leading-tight">{{$settings->contact_address}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute right-0 bottom-[-10%] z-[-1] sm:bottom-[-30px]">
            <img src="assets/images/ft-shape.png" alt="shape">
        </div>
        <div class="absolute left-[-30px] top-[-50px] z-[-1]">
            <svg width="254.000000pt" height="257.000000pt" viewBox="0 0 254.000000 257.000000"
                preserveAspectRatio="xMidYMid meet" fill="#ff4a17">
                <g transform="translate(0.000000,257.000000) scale(0.100000,-0.100000)" stroke="none">
                    <path
                        d="M0 1341 c0 -1111 2 -1229 16 -1235 8 -3 56 -11 104 -16 206 -23 368 38 504 191 26 30 135 185 241 344 217 326 264 388 403 529 159 162 348 309 592 461 179 112 349 228 405 277 72 63 132 151 156 226 16 54 20 93 20 202 1 80 -5 157 -13 190 l-13 55 -1208 3 -1207 2 0 -1229z" />
                </g>
            </svg>
        </div>
        <div class="absolute right-[-60px] bottom-[-70px] z-[-1]">
            <svg width="230.000000pt" height="197.000000pt" viewBox="0 0 230.000000 197.000000"
                preserveAspectRatio="xMidYMid meet" fill="#ff4a17">
                <g transform="translate(0.000000,197.000000) scale(0.100000,-0.100000)" stroke="none">
                    <path
                        d="M1885 1463 c-189 -11 -392 -50 -565 -109 -202 -68 -460 -209 -630 -345 -222 -176 -436 -441 -560 -694 -45 -91 -120 -283 -120 -305 0 -6 428 -10 1145 -10 l1145 0 0 719 c0 677 -1 720 -17 725 -25 8 -268 26 -312 24 -20 -1 -58 -3 -86 -5z" />
                </g>
            </svg>
        </div>
    </div>
    <div class="text-center relative bg-[#18252f] py-[20px]">
        <div class="wraper">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-6 md:col-span-12">
                    <p class="text-[15px] text-white text-left md:text-center">
                        Copyright &copy; {{now()->format('Y')}} - All Right Reserved by
                        <a href="{{route('home')}}" class="text-[#ff4a17]">{{$settings->company_name}}</a>
                    </p>
                </div>
                <div class="col-span-6 md:col-span-12">
                    <ul class="flex justify-end md:justify-center flex-wrap">
                        <li class="pl-[20px] ml-[10px] relative col:pl-[5px] col:ml-[5px]">
                            <a href="{{route('about')}}" class="text-white hover:text-[#ff4a17]">About Us</a>
                        </li>
                        <li
                            class="pl-[20px] ml-[10px] relative col:pl-[5px] col:ml-[5px] after:absolute after:left-0 after:top-0 after:content-['//'] col:after:hidden">
                            <a href="{{route('faqs')}}" class="text-white hover:text-[#ff4a17]">FAQs</a>
                        </li>
                        <li class="pl-[20px] ml-[10px] relative col:pl-[5px] col:ml-[5px] after:absolute after:left-0 after:top-0 after:content-['//'] col:after:hidden">
                            <a href="{{route('posts')}}" class="text-white hover:text-[#ff4a17]">Blog</a>
                        </li>
                        <li class="pl-[20px] ml-[10px] relative col:pl-[5px] col:ml-[5px] after:absolute after:left-0 after:top-0 after:content-['//'] col:after:hidden">
                            <a href="{{route('contact')}}" class="text-white hover:text-[#ff4a17]">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
