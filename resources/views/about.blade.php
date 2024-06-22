<x-guest-layout title="About Us">
    <section class="bg-[url(../images/page-title.jpg)] bg-center bg-cover bg-no-repeat w-full h-[480px] text-center relative z-[1] flex justify-center flex-col md:h-[400px] before:w-full before:h-full before:absolute before:left-0 before:top-0 before:bg-[#14212b] before:opacity-[0.5] before:-[-1]">
        <div class="overflow-hidden relative w-full h-full">
            <div class="wraper">
                <div class="flex items-center justify-center h-[480px] md:h-[400px]">
                    <div class="col-span-12">
                        <h2 class="text-[60px] text-white mb-[40px] sm:mb-[25px] font-bold capitalize md:text-[50px] mt-[40px] md:mt-[40px] col:mt-[80px] sm:text-[40px]">About Us</h2>
                        <ol class="flex justify-center">
                            <li class="text-[16px] text-white mr-[5px] sm:text-[14px]">
                                <a href="{{route('home')}}" class="text-white transition-all duration-300 hover:text-[#e33200]">Home</a>
                            </li>

                            <li class="relative text-[16px] text-white sm:text-[14px] pl-[20px] ml-[6px] before:mr-[5px] before:w-[8px] before:h-[4px] before:bg-white before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-[2px]">About</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="wow fadeInDown absolute right-[-70px] top-[-70px] w-[300px] h-[300px] bg-[#ff4a17] rounded-[50%] -z[-1]  col:hidden "
                data-wow-duration="0.9s" data-wow-delay=".3s"></div>
            <div class="wow fadeInDown absolute left-0 top-0  sm:left-[-100px] sm:top-[-100px] col:hidden"
                data-wow-duration="0.9s" data-wow-delay=".3s">
                <img src="assets/images/page-title-shape-1.png" alt="">
            </div>
            <div class="wow fadeInUp absolute right-0 bottom-0  sm:right-[-100px] sm:bottom-[-30px] col:hidden"
                data-wow-duration="0.9s" data-wow-delay=".3s">
                <img src="assets/images/page-title-shape-2.png" alt="">
            </div>
        </div>
    </section>

    <section class="section-wrap">
        <div class="wraper">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-6 md:col-span-12 col:col-span-12">
                    <div class="p-[50px] bg-[#14212b] relative z-[1] rounded-[10px] overflow-hidden col:p-[20px]">
                        <div>
                            <h2 class="text-[#ff4a17] text-[34px] mb-[20px] font-semibold">Our Mission</h2>
                            <h5 class="text-white text-[18px] leading-[27px] font-semibold">Lorem Ipsum is simply dummy text of the printing has been the industry standard dummy text ever since unknown printer took galley.</h5>
                        </div>

                        <div class="absolute left-[-70px] bottom-[-70px] w-[200px] h-[200px] bg-[#ff4a17] rounded-[50%]
                        z-[-1]"></div>
                        <div class="absolute right-0 top-0"><img src="assets/images/mission-shape.png" alt=""></div>
                    </div>
                </div>
                <div class="col-span-6 md:col-span-12 col:col-span-12">
                    <div class="p-[50px] bg-[#f5f5f5] relative z-[1] rounded-[10px] overflow-hidden col:p-[20px]">
                        <div class="wpo-vission-text">
                            <h2 class="text-[#ff4a17] text-[34px] mb-[20px] font-semibold">Our Vission</h2>
                            <h5 class="text-[#14212b] text-[18px] leading-[27px] font-semibold">Lorem Ipsum is simply dummy text of the printing has been the industry standard dummy text ever since unknown printer took galley.</h5>
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
                    <div class="max-w-[500px] mr-[30px] md:mb-[70px] sm:mr-0">
                        <h4 class="text-[21px] text-[#ff4a17] font-base-font font-semibold">Welcome To Consoel</h4>
                        <h2 class="text-[45px] text-[#0a272c] leading-[65px] font-heading-font font-bold mt-[30px] mb-[20px] xl:text-[40px] xl:leading-[50px] col:text-[25px] col:leading-[30px]">We are trusted consulting company.</h2>
                        <p class="text-[#687693] text-[18px] mb-[25px]">Lorem Ipsum is simply dummy text of the printing and type setting’s the industrey's standard dummy text ever since the 1500 when printed galley of type and scrambled type specimen book.</p>
                        <div class="mb-[30px]">
                            <div class="flex items-center">
                                <i class="fi flaticon-tax mr-[20px] text-[50px] text-[#ff4a17]"></i>
                                <h5 class="text-[25px] xl:text-[22px] lg:text-[15px] lg:leading-[25px]  leading-[30px] text-[#14212b] font-semibold">Perfect solution of business and financial planning.</h5>
                            </div>
                        </div>
                        <a class="theme-btn" href="{{route('services')}}">Our Services</a>
                    </div>
                </div>

                <div class="col-span-6 md:col-span-12">
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
            </div>
        </div>

        <div class="absolute z-[-1] right-[-150px] bottom-[-180px] w-[330px] h-[330px] bg-[#ff4a17] rounded-[40px] rotate-[20deg] sm:right-[-50px] sm:bottom-[-80px] sm:w-[200px] sm:h-[200px] col:right-[-50px] col:bottom-[-80px] col:w-[160px] col:h-[200px]
            before:absolute before:left-[-30px] before:top-[30px] before:w-full before:h-full
            before:border-[1px] before:border-[#14212b] before:rounded-[40px]">
        </div>
    </section>

    <!-- start skill -->
    <section class="section-wrap bg-[#14212b]">
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
    </section>

    <!-- start team -->
    @if ($teams->count() > 0)
        <section class="pt-[120px] pb-[90px] md:pt-[90px] md:pb-[60px] sm:pt-[80px] sm:pb-[50px] bg-[#f5f5f5] overflow-hidden relative">
            <div class="wraper">
                <div class="mb-[75px] sm:mb-[40px] text-center">
                    <span class="uppercase text-[16px] font-bold tracking-[3px] text-[#ff4a17] font-base-font">TEAM
                        MEMBERS</span>
                    <h2 class="text-[55px] md:text-[35px] sm:text-[32px] col:text-[28px] leading-[70px] md:leading-[55px] sm:leading-[40px]
                    mt-[10px] relative capitalize font-heading-font font-bold
                    text-[#14212b]">We Have Skilled People</h2>
                </div>
                <div class="relative z-[1]">
                    <div class="grid grid-cols-12 gap-x-3">
                        @forelse ($teams as $team)
                            <div class="col-span-4 md:col-span-6 col:col-span-12">
                                <div class="group text-center p-[30px] border-[1px] border-transparent relative rounded-[5px] transition-all max-w-[100%] duration-300 mx-auto mb-[30px] hover:border-[rgba(255,74,23,0.8)]">
                                    <div class="overflow-hidden rounded-[5px] border-[1px] border-[#fff] relative text-center">
                                        <img class="w-full rounded-[5px] scale-[1] transition-all duration-300 h-96 object-cover group-hover:scale-[1.2]" src="{{$team->image}}" alt="{{$team->name}}">
                                        <div class="absolute left-0 top-0 w-full h-full flex justify-center
                                        flex-col rounded-[5px] transition-all duration-300  pt-[15px] translate-y-[100%]
                                            bg-[rgba(255,74,23,0.8)] group-hover:translate-y-[0]">
                                            <span class="uppercase text-[16px] font-base-font font-bold tracking-[3px] text-[#14212b] ">{{$team->role}}</span>
                                            <h2 class=" text-[32px] font-heading-font font-semibold mt-[10px] text-white lg:text-[25px]">{{$team->name}}</h2>
                                            <a href="{{route('teams.single', ['team' => $team->id])}}" class="inline-block w-[50px] h-[50px] leading-[50px] border-[1px] border-[#fff] mt-[20px] rounded-[5px] relative overflow-hidden after:absolute after:left-0 after:top-0 after:w-full after:h-full after:bg-[rgba(255,255,255,0.5)] after:-translate-x-full mx-auto hover:after:translate-x-full after:transition-all after:duration-300 after:ease-in-out">
                                                <i class="ti-plus text-white"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="absolute right-0 top-0 md:hidden">
                <img src="assets/images/team/shape5.png" alt="">
            </div>
            <div class="absolute left-0 bottom-0 md:hidden">
                <img src="assets/images/team/shape4.png" alt="">
            </div>
        </section>
    @endif

    <!-- start testimonial -->
    @if ($testimonials->count() > 0)
        <section class="pt-[120px] md:pt-[90px] sm:pt-[80px]">
            <div class="wraper">
                <div class="mb-[75px] sm:mb-[40px] text-center">
                    <span class="uppercase text-[16px] font-bold tracking-[3px] text-[#ff4a17]
                    font-base-font">CLIENT TESTIMONIAL</span>
                    <h2 class="text-[55px] md:text-[35px] sm:text-[32px] col:text-[28px] leading-[70px] md:leading-[55px] sm:leading-[40px]
                    mt-[10px] relative capitalize font-heading-font font-bold
                    text-[#14212b]">Best Word Our Clients</h2>
                </div>
                <div class="wpo-testimonial-slide-s3 owl-carousel mb-[80px] pb-[50px]">
                    @forelse ($testimonials as $testimonial)
                        <div class="p-[40px_25px] bg-white transition-all duration-300 shadow-[0px_0px_20px_0px_rgba(20,33,43,0.1)]">
                            <div class="relative z-[1]">
                                {{-- <h2 class="text-[23px] mb-[20px] text-[#0a272c] font-heading-font font-semibold leading-[34px]">Love the design, and it's very flexible to edit and design.</h2> --}}
                                <p class="text-[#687693] text-[16px] ">{{$testimonial->message}}</p>
                                <div class="flex items-center justify-start mt-[20px]">
                                    <div>
                                        <h3 class="text-[20px] text-[#0a272c] font-heading-font font-semibold">{{$testimonial->name}}</h3>
                                        <span class="text-[#ff4a17]">{{$testimonial->role}} - {{$testimonial->company}}</span>
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

</x-guest-layout>
