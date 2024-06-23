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
                                <div class="col-span-4 md:col-span-6 sm:col-span-12 md:mb-7">
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
                                </div>
                            @endif

                            @if ($settings->contact_phone)
                                <div class="col-span-4 md:col-span-6 sm:col-span-12 md:mb-7">
                                    <div
                                        class="text-center h-full p-[40px] bg-white shadow-[0px_5px_15px_0px_rgba(62,65,159,0.1)]">
                                        <div class="w-[85px] h-[85px] bg-[#f5f5f5] leading-[85px] text-center mx-auto
                                            rounded-[50%] flex justify-center items-center">
                                            <div class="icon w-[50px] h-[50px] leading-[50px]">
                                                <i class="fi flaticon-phone-call text-[35px]"></i>
                                            </div>
                                        </div>
                                        <h2 class="text-[30px] text-[#232f4b] font-medium my-[20px]">Call Now</h2>
                                        <p class="text-[#4f555a] text-[16px] leading-[22px]">{{$settings->contact_Phon}}</p>
                                        <p class="text-[#4f555a] text-[16px] leading-[22px]">+1 800 123 654 987</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="max-w-[440px] mx-auto text-center mb-[50px]">
                        <h2 class="text-[35px] col:text-[25px] text-[#0a272c] font-heading-font font-bold
                            mb-[20px]">
                            Have
                            Any Question?</h2>
                        <p class="text-[#687693] text-[16px] leading-[22px]">It is a long established fact that a
                            reader will be distracted
                            content of a page when looking.</p>
                    </div>
                    <div class="p-[50px] bg-white relative z-10 shadow-[0px_1px_15px_0px_rgba(62,65,159,0.1)] sm:p-7 sm:py-[50px] mb-20">
                        <livewire:contact-form />
                    </div>
                </div>
                <div class="col-span-1"></div>
            </div>
        </div>
    </section>

    <!--  start contact-map -->
    {{-- <section class="wpo-contact-map-section">
        <h2 class="hidden">Contact map</h2>
        <div class="h-[550px]">
            <iframe class="w-full h-full border-0 outline-0 grayscale"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d-74.11976314309273!3d40.69740344223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547528325671"
                allowfullscreen></iframe>
        </div>
    </section> --}}
</x-guest-layout>
