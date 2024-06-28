<x-guest-layout title="About Us">
    @include('layouts.partials.breadcrumbs', [
        'image' => asset('assets/imgs/bezalel-frontiers-business-strategy.jpg'),
        'title' => 'About us',
        'breadcrumbs' => [
            [
                'name' =>  'About us',
            ]
        ]
    ])

    <section class="section-wrap">
        <div class="wraper">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-6 md:col-span-12 col:col-span-12">
                    <div class="p-[50px] bg-[#14212b] relative z-[1] rounded-[10px] overflow-hidden col:p-[20px] h-full">
                        <div>
                            <h2 class="text-[#ff4a17] text-[34px] mb-[20px] font-semibold">Our Mission</h2>
                            <h5 class="text-white text-[18px] leading-[27px] font-semibold">Providing actionable insights that inform, inspire, and empower minds and organizations for success</h5>
                        </div>

                        <div class="absolute left-[-70px] bottom-[-70px] w-[200px] h-[200px] bg-[#ff4a17] rounded-[50%]
                        z-[-1]"></div>
                        <div class="absolute right-0 top-0"><img src="assets/images/mission-shape.png" alt=""></div>
                    </div>
                </div>
                <div class="col-span-6 md:col-span-12 col:col-span-12">
                    <div class="p-[50px] bg-[#f5f5f5] relative z-[1] rounded-[10px] overflow-hidden col:p-[20px] h-full">
                        <div class="wpo-vission-text">
                            <h2 class="text-[#ff4a17] text-[34px] mb-[20px] font-semibold">Our Vision</h2>
                            <h5 class="text-[#14212b] text-[18px] leading-[27px] font-semibold">...the preferred choice for research driven insights.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- start  about -->
    <section class="relative z-[1] pb-[120px] md:pb-[90px] sm:pn-[80px]">
        <div class="wraper">
            <div class="grid grid-cols-12 items-center justify-center">
                <div class="col-span-6 md:col-span-12">
                    <div class="relative z-[1] text-center max-w-[570px] sm:w-full h-[650px] rounded-[6px]
                     before:absolute before:left-0 before:top-0 before:w-full  before:h-full
                     before:bg-[rgba(20,33,43,.25)] before:rounded-[6px] ">
                        <img class="w-full h-full rounded-[6px] object-cover" src="{{asset('assets/imgs/bezalel-frontiers-business-strategy.jpg')}}" alt="">
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
                <div class="col-span-6 md:col-span-12">
                    <div class="max-w-[500px] ml-[30px] sm:ml-0">
                        <h4 class="text-[21px] text-[#ff4a17] font-base-font font-semibold">We are {{$settings->company_name}}</h4>
                        <h2 class="text-[45px] text-[#0a272c] leading-[65px] font-heading-font font-bold mt-[10px] mb-[20px] xl:text-[40px] xl:leading-[50px] col:text-[25px] col:leading-[30px]">Your Data-Driven Path to Success.</h2>
                        <p class="text-[#687693] text-[18px] mb-[25px]">{{$settings->company_name}} is a data driven and research-based management consulting firm. We provide essential intelligence for organizations and their people for informed ideation, and business & management decisions.</p>
                        <p class="text-[#687693] text-[18px] mb-[25px]">Our team of experts is dedicated to providing the best consulting services tailored to your needs. With extensive experience and a commitment to our core values, we are here to help you navigate the complexities of the modern business landscape.</p>

                        <div class="mb-[30px] space-y-3">
                            <div>
                                <h5 class="text-[#14212b] font-semibold text-xl">Our Core Values:</h5>
                            </div>
                            <div class="flex items-center">
                                <i class="fi flaticon-right mr-[10px] text-3xl text-[#ff4a17]"></i>
                                <h5 class="text-lg lg:leading-[25px]  leading-[30px] text-[#14212b] font-semibold">Integrity</h5>
                            </div>
                            <div class="flex items-center">
                                <i class="fi flaticon-right mr-[10px] text-3xl text-[#ff4a17]"></i>
                                <h5 class="text-lg lg:leading-[25px]  leading-[30px] text-[#14212b] font-semibold">Knowledge</h5>
                            </div>
                            <div class="flex items-center">
                                <i class="fi flaticon-right mr-[10px] text-3xl text-[#ff4a17]"></i>
                                <h5 class="text-lg lg:leading-[25px]  leading-[30px] text-[#14212b] font-semibold">Excellence</h5>
                            </div>
                        </div>
                        <a class="theme-btn" href="{{route('services')}}">Our Services</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute z-[-1] right-[-150px] bottom-[-180px] w-[330px] h-[330px] bg-[#ff4a17] rounded-[40px] rotate-[20deg] sm:right-[-50px] sm:bottom-[-80px] sm:w-[200px] sm:h-[200px] col:right-[-50px] col:bottom-[-80px] col:w-[160px] col:h-[200px]
            before:absolute before:left-[-30px] before:top-[30px] before:w-full before:h-full
            before:border-[1px] before:border-[#14212b] before:rounded-[40px]">
        </div>
    </section>

    <!-- start skill -->
    {{-- <section class="section-wrap bg-[#14212b]">
        <div class="wraper">
            <div class="grid grid-cols-12 items-center ">
                <div class="col-span-5 md:col-span-12 ">
                    <div class="md:mb-[30px]">
                        <h5 class="text-[21px] text-[#ff4a17] font-heading-font font-semibold sm:text-[18px]">
                            Our
                            Professional
                            Skill’s</h5>
                        <h2 class="text-[60px] leading-[70px] mb-[30px] mt-[15px] text-white font-heading-font font-semibold
                        xl:text-[50px] xl:leading-[60px] xl:mb-[20px] xl:mt-[10px] lg:text-[45px] lg:leading-[50px]
                        sm:text-[35px] sm:leading-[50px]">
                            Professional Skill of <span class="text-[#ff4a17]">Consoel.</span></h2>
                    </div>
                </div>
                <div class="col-span-7 md:col-span-12">
                    <div class="ml-[70px] xl:ml-[50px] lg:ml-[30px] md:ml-0 ">
                        <div class="mb-[30px] relative">
                            <h5
                                class="text-[22px] sm:text-[18px] mb-[10px] font-heading-font text-white font-semibold">
                                Financial Investment</h5>
                            <div class="h-[6px] w-full bg-[#f3f4f4] relative rounded-[10px] overflow-hidden">
                                <div class="wow fadeInLeft h-[6px]  bg-[#ff4a17]" style="width: 75%"
                                    data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="90">
                                </div>
                            </div>
                            <span
                                class="absolute right-0 top-[-10px] text-[22px] font-heading-font text-white font-bold sm:text-[18px] sm:top-0">75%</span>
                        </div>
                        <div class="mb-[30px] relative">
                            <h5
                                class="text-[22px] sm:text-[18px] mb-[10px] font-heading-font text-white font-semibold">
                                Business Analysis</h5>
                            <div class="h-[6px] w-full bg-[#f3f4f4] relative rounded-[10px] overflow-hidden">
                                <div class="wow fadeInLeft h-[6px]  bg-[#ff4a17]" style="width: 80%"
                                    data-wow-duration="0.7s" data-wow-delay=".3s" role="progressbar"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <span
                                class="absolute right-0 top-[-10px] text-[22px] font-heading-font text-white font-bold sm:text-[18px] sm:top-0">80%</span>
                        </div>
                        <div class="relative">
                            <h5
                                class="text-[22px] sm:text-[18px] mb-[10px] font-heading-font text-white font-semibold">
                                Tax Management</h5>
                            <div class="h-[6px] w-full bg-[#f3f4f4] relative rounded-[10px] overflow-hidden">
                                <div class="wow fadeInLeft h-[6px]  bg-[#ff4a17]" style="width: 85%"
                                    data-wow-duration="0.9s" data-wow-delay=".3s" role="progressbar"
                                    aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <span
                                class="absolute right-0 top-[-10px] text-[22px] font-heading-font text-white font-bold sm:text-[18px] sm:top-0">85%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute left-[60px] bottom-0 -z-[1]">
            <img src="assets/images/progress-shape-1.png" alt="">
        </div>
        <div class="absolute right-[60px] top-[20px] z-[-1]">
            <img src="assets/images/progress-shape-2.png" alt="">
        </div>
    </section> --}}

    <section class="section-wrap wpo-testimonial-wrap">
        <div class="wraper">
            <div class="grid grid-cols-12 gap-x-8 items-center">
                <div class="col-span-12 md:col-span-12 sm:col-span-12">
                    <div class="mb-[75px] lg:mb-[20px] text-left">
                        <h2 class="text-[50px] lg:text-[40px] md:text-[35px] sm:text-[32px] col:col-[28px] leading-[70px] md:leading-[55px] sm:leading-[40px] mt-[10px] relative capitalize font-heading-font font-bold text-[#14212b]">A Word from our Managing Consultant</h2>
                    </div>
                    <div class="p-[70px_60px] bg-[#f3f4f4] rounded-[6px] xl:p-[35px] lg:p-[25px] col:p-[15px_20px] md:mb-[80px]">
                        <div class="space-y-5">
                            <p class="text-[22px] leading-[35px] xl:text-[20px] xl:leading-[30px] lg:text-[18px]">Thank you and welcome to Bezalel Frontiers. At Bezalel Frontiers, we aim to partner with clients, and provide them with the intelligence and knowledge they need to make more effective decisions.</p>
                            <p class="text-[22px] leading-[35px] xl:text-[20px] xl:leading-[30px] lg:text-[18px]">Our approach to management consulting is driven by data and research. We are passionate about integrity, knowledge, and excellence – our core values; and our top priority is to exceed your expectations.</p>
                            <p class="text-[22px] leading-[35px] xl:text-[20px] xl:leading-[30px] lg:text-[18px]">Over the past few years, we are thrilled to have worked in different capacities with diverse firms from within Africa and beyond. We look forward to working with you to explore new frontiers of value and growth for you and your organization. </p>
                        </div>
                        
                        <div class="mt-[30px] col:mt-[20px]">
                            <h3 class="text-[32px] font-semibold mt-[5px] col:text-[25px]">Dr. Ebes Esho</h3>
                            <span class="uppercase text-[16px] font-bold tracking-[3px] text-[#ff4a17] col:text-[14px]">Management Consultant</span>
                        </div>
                    </div>            
                </div>
                {{-- <div class="col-span-5 md:col-span-10 sm:col-span-12">
                    <div class="lg:pl-[0] h-full">
                        <div class="relative rounded-[8px] before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[rgba(10,39,44,0.3)] before:rounded-[8px]">
                            <img src="assets/images/testimonial/img-1.jpg" alt="" class="rounded-[8px]">
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- start team -->
    @if ($teams->count() > 0)
        <section class="pt-[120px] pb-[90px] md:pt-[90px] md:pb-[60px] sm:pt-[80px] sm:pb-[50px] bg-[#f5f5f5] overflow-hidden relative">
            <div class="wraper">
                @include('partials.teams.index')
            </div>
            <div class="absolute right-0 top-0 md:hidden">
                <img src="assets/images/team/shape5.png" alt="">
            </div>
            <div class="absolute left-0 bottom-0 md:hidden">
                <img src="assets/images/team/shape4.png" alt="">
            </div>
        </section>
    @endif

    @include('partials.testimonials.index')

    @include('partials.contact.section')

</x-guest-layout>
