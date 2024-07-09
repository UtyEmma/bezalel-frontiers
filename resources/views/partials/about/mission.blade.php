<section class="section-wrap !py-10 md:!py-20">
    <div class="wraper">
        <div class="grid grid-cols-12 md:!gap-x-10 gap-y-10">
            <div class="col-span-6 md:col-span-12 col:col-span-12">
                <div class="p-[50px] bg-[#14212b] relative z-[1] rounded-[10px] overflow-hidden col:p-[20px] h-full">
                    <div>
                        <h2 class="text-[#ff4a17] text-[34px] mb-[20px] font-semibold">Our Mission</h2>
                        <h5 class="text-white text-[18px] leading-[27px] font-semibold">{{$page->render($group, 'Providing actionable insights that inform, inspire, and empower minds and organizations for success', $section, 'our_mission')}}</h5>
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
                        <h5 class="text-[#14212b] text-[18px] leading-[27px] font-semibold">{{$page->render($group, '...the preferred choice for research driven insights.', $section, 'our_vision')}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>