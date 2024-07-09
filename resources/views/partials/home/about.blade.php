<section class="section-wrap group ">
    <div class="wraper">
        <div class="grid grid-cols-12 md:!gap-x-10 gap-y-10 items-center">
            <div class="col-span-6 md:col-span-12 sm:col-span-12 ">
                <div class="relative z-[1] text-center max-w-[570px] sm:w-full aspect-square md:aspect-auto md:!h-[650px] rounded-[6px]
                 before:absolute before:left-0 before:top-0 before:w-full  before:h-full
                 before:bg-[rgba(20,33,43,.25)] before:rounded-[6px]">
                    <img class="w-full h-full rounded-[6px] object-cover" src="{{superAssets($page->render('sections', 'assets/imgs/bezalel-frontiers-writing-for-business.jpg', $section, 'main_image'))}}" alt="">
                    <div class="absolute left-[-70px] bottom-[100px] z-[1]
                         animate-[bounceTop_3s_linear_infinite] col:left-0">
                        <img src="assets/images/ab-shape-1.png" alt="">
                    </div>
                    <div class="absolute right-[35px] top-[35px] animate-[bounceTop_3s_linear_infinite]">
                        <img src="assets/images/ab-shape-2.png" alt="">
                    </div>
                    <div class="absolute right-[50px] bottom-[50px]  rounded-[50%] border-[5px]
                        animate-[spineer_2s_infinite]">
                        <img src="{{superAssets($page->render('sections', 'assets/imgs/bezalel-frontiers-growth-chart.jpg', $section, 'inner_image'))}}" alt="" class="rounded-[50%] col:max-w-[100px] max-w-[200px]">
                    </div>
                </div>
            </div>
            <div class="col-span-6 md:col-span-12 sm:col-span-12">
                <div class="max-w-[600px] sm:w-full relative pl-[40px] md:pl-0 ">
                    <h4 class="text-[21px] !text-main font-base-font font-bold">{!! $page->render('sections', "Welcome to {$settings->company_name}", $section, 'caption') !!}</h4>
                    <h2 class="text-[60px] leading-[70px] my-[30px] text-[#0a272c] font-normal font-heading-font
                        xl:text-[55px] lg:text-[36px] lg:leading-[50px] lg:my-[20px] col:text-[26px]
                        col:leading-[36px] col:my-[15px]  span-primary">{!! $page->render('sections', "Driving Decisions with Data, Shaping Success with <span >Integrity</span>", $section, 'title') !!}
                        
                    </h2>
                    <div class="text-[18px] mb-[35px] col:text-[16px] col:mb-[20px] span-primary">
                        {!! $page->render('sections', "At <span class='font-semibold'>{$settings->company_name}</span>, we provide actionable insights that inform, inspire, and empower minds and organizations for success. Discover how our data-driven and research-based management consulting can transform your business.", $section, 'description') !!} 
                    </div>
                    <a class="theme-btn" href="{{$page->render('sections', route('about'), $section, 'button_link')}}">
                        {{
                            $page->render('sections', "Learn More", $section, 'button_text')
                        }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>