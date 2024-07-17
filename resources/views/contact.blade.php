<x-guest-layout title="Contact Us">
    @include('layouts.partials.breadcrumbs', [
        'image' => asset('assets/imgs/bezalel-frontiers-business-strategy.jpg'),
        'title' => 'Contact us',
        'breadcrumbs' => [
            [
                'name' =>  'Contact Us',
            ]
        ]
    ])

    <!-- start contact -->
    <section class="relative pt-[120px] pb-0  z-1">
        <div class="wraper">
            <div class="mb-[75px] sm:mb-[40px] text-center">
                <span class="uppercase text-[16px] font-bold tracking-[3px] text-[#ff4a17]
                    font-base-font">We would love to hear from you</span>
                <h2 class="text-[55px] md:text-[35px] sm:text-[32px] col:text-[28px] leading-[70px] md:leading-[55px] sm:leading-[40px]
                    mt-[10px] relative capitalize font-heading-font font-bold text-[#14212b] md:px-10">Get in touch with us today!</h2>
            </div>
            <div class="grid grid-cols-12">
                <div class="col-span-1"></div>
                <div class="col-span-10 md:col-span-12">
                    <div class="pb-[100px] sm:pb-[60px]">
                        <div class="grid grid-cols-12 gap-3">
                            @if ($settings->contact_address)
                                <div class="col-span-4 md:col-span-6 sm:col-span-12 md:mb-7">
                                    <div class="h-full text-center p-[40px] bg-white shadow-[0px_5px_15px_0px_rgba(62,65,159,0.1)]">
                                        <div class="w-[85px] h-[85px] bg-[#f5f5f5] leading-[85px] text-center mx-auto
                                            rounded-[50%]  flex justify-center items-center">
                                            <div class="icon w-[50px] h-[50px] leading-[50px]">
                                                <i class="fi flaticon-place text-[35px]"></i>
                                            </div>
                                        </div>
                                        <h2 class="text-[30px] text-[#232f4b] font-medium my-[20px]">Address</h2>
                                        <p class="text-[#4f555a] text-[16px] leading-[22px]">{{$settings->contact_address}}</p>
                                    </div>
                                </div>
                            @endif

                            @if ($settings->site_email)
                                <a href="mailto:{{$settings->site_email}}" class="col-span-4 md:col-span-6 sm:col-span-12 md:mb-7">
                                    <div class="h-full text-center p-[40px] bg-white shadow-[0px_5px_15px_0px_rgba(62,65,159,0.1)]">
                                        <div class="w-[85px] h-[85px] bg-[#f5f5f5]
                                            leading-[85px] text-center mx-auto rounded-[50%] flex justify-center
                                            items-center">
                                            <div class="icon w-[50px] h-[50px] leading-[50px]">
                                                <i class="fi flaticon-email text-[35px]"></i>
                                            </div>
                                        </div>
                                        <h2 class="text-[30px] text-[#232f4b] font-medium my-[20px]">Email Us</h2>
                                        <p class="text-[#4f555a] text-[16px] leading-[22px]">{{$settings->site_email}}</p>
                                    </div>
                                </a>
                            @endif

                            @if ($settings->contact_phone)
                                <a href="tel:{{$settings->contact_phone}}" class="col-span-4 block md:col-span-6 sm:col-span-12 md:mb-7">
                                    <div
                                        class="text-center h-full p-[40px] bg-white shadow-[0px_5px_15px_0px_rgba(62,65,159,0.1)]">
                                        <div class="w-[85px] h-[85px] bg-[#f5f5f5] leading-[85px] text-center mx-auto
                                            rounded-[50%] flex justify-center items-center">
                                            <div class="icon w-[50px] h-[50px] leading-[50px]">
                                                <i class="fi flaticon-phone-call text-[35px]"></i>
                                            </div>
                                        </div>
                                        <h2 class="text-[30px] text-[#232f4b] font-medium my-[20px]">Call Now</h2>
                                        <p class="text-[#4f555a] text-[16px] leading-[22px]">{{$settings->contact_phone}}</p>
                                    </div>
                                </a>
                            @endif
                        </div>
                    </div>

                    @if ($settings->facebook_link || $settings->twitter_link || $settings->instagram_link || $settings->instagram_link)
                        <div class="max-w-[440px] mx-auto text-center mb-[50px]">
                            <h2 class="text-[35px] col:text-[25px] text-[#0a272c] font-heading-font font-bold
                                mb-[20px]">Connect with us</h2>
                            <p class="text-[#687693] text-[16px] leading-[22px]">Follow us on social media to stay updated with the latest news and insights from {{$settings->company_name}}.</p>
                        </div>

                        <div class="max-w-[440px] mx-auto text-center mb-[50px]">
                            <div class="flex items-center justify-center md:flex-wrap">
                                <ul class="">
                                    @if ($settings->facebook_link)
                                        <li class="text-[16px] float-left p-[10px] pl-0 text-[#5d5d5d]">
                                            <a href="{{$settings->facebook_link}}" target="__blank" class="block size-[60px] leading-[60px] border-[1px] border-[#5d5d5d] hover:border-transparent rounded-[50%] text-center transition-all duration-300 hover:text-white hover:bg-[#ff4a17]">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                    @endif
            
                                    @if ($settings->linkedin_link)
                                        <li class="text-[16px] xl:text-[14px] lg:text-[12px] float-left p-[10px] text-[#5d5d5d]">
                                            <a href="{{$settings->linkedin_link}}" target="__blank" class="block size-[60px] leading-[60px] border-[1px] border-[#5d5d5d] hover:border-transparent rounded-[50%] text-center transition-all duration-300 hover:text-white hover:bg-[#ff4a17]">
                                                <i class="ti-linkedin"></i>
                                            </a>
                                        </li>
                                    @endif 
            
                                    @if ($settings->twitter_link)
                                        <li class="text-[16px] xl:text-[14px] lg:text-[12px] float-left p-[10px] text-[#5d5d5d]">
                                            <a href="{{$settings->twitter_link}}" target="__blank" class="block size-[60px] leading-[60px] border-[1px] border-[#5d5d5d] hover:border-transparent rounded-[50%] text-center transition-all duration-300 hover:text-white hover:bg-[#ff4a17]">
                                                <i class="ti-twitter-alt"></i>
                                            </a>
                                        </li>
                                    @endif 
            
                                    @if ($settings->instagram_link)
                                        <li class="text-[16px] xl:text-[14px] lg:text-[12px] float-left p-[10px] text-[#5d5d5d]">
                                            <a href="{{$settings->instagram_link}}" target="__blank" class="block size-[60px] leading-[60px] border-[1px] border-[#5d5d5d] hover:border-transparent rounded-[50%] text-center transition-all duration-300 hover:text-white hover:bg-[#ff4a17]">
                                                <i class="ti-instagram"></i>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    @endif

                    

                    <div class="max-w-[440px] mx-auto text-center mb-[50px]">
                        <h2 class="text-[35px] col:text-[25px] text-[#0a272c] font-heading-font font-bold mb-[20px]">Have Any Question?</h2>
                        <p class="text-[#687693] text-[16px] leading-[22px]">We're Here to Help You Succeed, send us a quick message telling us how we can help you.</p>
                    </div>
                    <div class="p-[50px] bg-white relative z-10 shadow-[0px_1px_15px_0px_rgba(62,65,159,0.1)] sm:p-7 sm:py-[50px] mb-20">
                        <livewire:contact-form />
                    </div>
                </div>
                <div class="col-span-1"></div>
            </div>
        </div>
    </section>
</x-guest-layout>
