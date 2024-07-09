<section class="relative z-[1] md:pb-[90px]">
    <div class="wraper">
        <div class="grid grid-cols-12 md:!gap-x-10 gap-y-10 items-center justify-center">
            <div class="col-span-6 md:col-span-12">
                <div class="relative z-[1] text-center max-w-[570px] sm:w-full aspect-square md:aspect-auto md:!h-[650px] rounded-[6px]
                    before:absolute before:left-0 before:top-0 before:w-full  before:h-full before:bg-[rgba(20,33,43,.25)] before:rounded-[6px] ">
                    <img class="w-full h-full rounded-[6px] object-cover" src="{{superAssets($page->render('sections', 'assets/imgs/bezalel-frontiers-writing-for-business.jpg', $section, 'main_image'))}}" alt="">
                    <div class="absolute left-[-70px] bottom-[100px] z-[1]
                            animate-[bounceTop_3s_linear_infinite] col:left-0">
                        <img src="assets/images/ab-shape-1.png" alt="">
                    </div>
                    <div class="absolute right-[35px] top-[35px] animate-[bounceTop_3s_linear_infinite]">
                        <img src="assets/images/ab-shape-2.png" alt="">
                    </div>
                    <div class="absolute right-[50px] bottom-[50px] rounded-[50%] border-[5px]
                        animate-[spineer_2s_infinite]">
                        <img src="{{superAssets($page->render('sections', 'assets/imgs/bezalel-frontiers-growth-chart.jpg', $section, 'inner_image'))}}" alt="" class="rounded-[50%] col:max-w-[100px] max-w-[200px]">
                    </div>
                </div>
            </div>
            <div class="col-span-6 md:col-span-12">
                <div class="max-w-[500px] ml-[30px] sm:ml-0">
                    <h4 class="text-[21px] text-[#ff4a17] font-base-font font-semibold">{!! $page->render($group, "We are <span>{$settings->company_name}</span>", $section, 'caption') !!}</h4>

                    <h2 class="text-[45px] text-[#0a272c] leading-[65px] font-heading-font font-bold mt-[10px] mb-[20px] xl:text-[40px] xl:leading-[50px] col:text-[25px] col:leading-[30px]">{!! $page->render($group, "Your Data-Driven Path to Success.", $section, 'title') !!}</h2>

                    <div class="text-[#687693] text-[18px] mb-[25px] space-y-4" >
                        {!! 
                            $page->render($group, "<p>{$settings->company_name} is a data driven and research-based management consulting firm. We provide essential intelligence for organizations and their people for informed ideation, and business & management decisions.</p> <p class='text-[#687693] text-[18px] mb-[25px]'>Our team of experts is dedicated to providing the best consulting services tailored to your needs. With extensive experience and a commitment to our core values, we are here to help you navigate the complexities of the modern business landscape.</p>", $section, 'description') 
                        !!}
                    </div>
                    

                    <div class="mb-[30px] space-y-3">
                        <div>
                            <h5 class="text-[#14212b] font-semibold text-xl">Our Core Values:</h5>
                        </div>

                        @forelse ($page->render($group, [], $section, 'corevalues') as $corevalue)
                            <div class="flex items-center">
                                <i class="fi flaticon-right mr-[10px] text-3xl text-[#ff4a17]"></i>
                                <h5 class="text-lg lg:leading-[25px]  leading-[30px] text-[#14212b] font-semibold">{{$corevalue}}</h5>
                            </div>
                        @empty
                        @endforelse
                    </div>
                    <a class="theme-btn" href="{{route('services')}}">Our Services</a>
                </div>
            </div>
        </div>
    </div>
</section>