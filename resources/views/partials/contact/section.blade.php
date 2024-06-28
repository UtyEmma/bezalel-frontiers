<section class="section-wrap bg-[#18252f] overflow-hidden">
    <h2 class="hidden">contact</h2>
    <div class="wraper">
        <div class="grid grid-cols-12 mx-[-40px] xl:mx-[-20px] lg:mx-[-15px]">
            @if ($settings->contact_address)
                <div class="col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 px-[40px] xl:px-[20px] lg:px-[15px]">
                    <div class="h-full lg:mb-[30px] text-center p-[60px_40px] border-[1px] border-[#ff4a17] rounded-[15px] bg-[#18252f] md:p-[40px] col:p-[30px]">
                        <div class="mb-[30px] col:mb-[20px]">
                            <i class="fi flaticon-place text-[#ff4a17] text-[55px] col:text-[40px]"></i>
                        </div>
                        <p class="text-[22px] leading-[32px] font-medium text-white font-heading-font">{{$settings->contact_address}}</p>
                        <span class="text-[14px] text-[#ff4a17] uppercase block mt-[30px] tracking-[3px]">Visit our office</span>
                    </div>
                </div>
            @endif

            @if ($settings->contact_phone)
                <a href="tel:{{$settings->contact_phone}}" target="__blank" class="block col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 px-[40px] xl:px-[20px] lg:px-[15px]">
                    <div class="h-full lg:mb-[30px] text-center p-[60px_40px] border-[1px] border-[#ff4a17] rounded-[15px] bg-[#ff4a17] md:p-[40px] col:p-[30px]">
                        <div class="mb-[30px] col:mb-[20px]">
                            <i class="fi flaticon-phone-call text-white text-[55px] col:text-[40px]"></i>
                        </div>
                        <p class="text-[22px] leading-[32px] font-medium text-white font-heading-font">{{$settings->contact_phone}}</p>
                        <span class="text-[14px] text-white uppercase block mt-[30px] tracking-[3px]">CALL US
                            TODAY</span>
                    </div>
                </a>
            @endif

            @if ($settings->site_email)
                <a href="mailto:{{$settings->site_email}}" target="__blank" class="block col-span-4  lg:col-span-6 md:col-span-6 sm:col-span-12 px-[40px] xl:px-[20px] lg:px-[15px]">
                    <div class="h-full text-center p-[60px_40px] border-[1px] border-[#ff4a17] rounded-[15px] bg-[#18252f] md:p-[40px] col:p-[30px]">
                        <div class="mb-[30px] col:mb-[20px]">
                            <i class="fi flaticon-email text-[#ff4a17] text-[55px] col:text-[40px]"></i>
                        </div>
                        <p class="text-[22px] leading-[32px] font-medium text-white font-heading-font">{{$settings->site_email}}</p>
                        <span class="text-[14px] text-[#ff4a17] uppercase block mt-[30px] tracking-[3px]">Send an Email</span>
                    </div>
                </a>
            @endif
        </div>
    </div>
    <div class="absolute left-[-3%] top-[-20%] z-[-1]">
        <img src="assets/images/ct-shape.png" alt="shape">
    </div>
</section>