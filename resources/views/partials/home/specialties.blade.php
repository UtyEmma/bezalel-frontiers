<section class="pt-[120px] md:pt-[90px] sm:pt-[80px]">
    <div class="wraper">
        <div class="grid grid-cols-12 items-center ">
            <div class="col-span-6 md:col-span-12 ">
                <div class="md:mb-[30px]">
                    <h5 class="text-[21px] !text-main span-primary font-heading-font font-semibold sm:text-[18px]">{{$page->render($group, 'We are fully equipped to serve your needs', $section, 'title')}}</h5>
                    <h2 class="text-[60px] leading-[70px] mb-[30px] mt-[15px] text-[#0a272c] font-heading-font font-semibold
                    xl:text-[40px] xl:leading-[60px] xl:mb-[20px] xl:mt-[10px] lg:text-[35px] lg:leading-[50px] span-primary
                    sm:text-[35px] sm:leading-[50px]">{{$page->render($group, "We provide Strategic Insights and deliver <span>Growth.</span>", $section, 'caption')}}</h2>
                    <div class="space-y-4">
                        <div class="text-[#687693] text-[18px] leading-[25px] span-primary">
                            {{$page->render($group, "We provide Strategic Insights and deliver <span>Growth.</span>", $section, 'description')}}
                        </div>
                        <div>
                            <div class="mt-10">
                                <a class="theme-btn me-0" href="{{$page->render($group, route('about'), $section, 'button_link')}}">{{$page->render($group, 'Get in touch', $section, 'button_text')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-6 md:col-span-12">
                @if ($services->count())
                    <div class="ml-[70px] xl:ml-[50px] lg:ml-[30px] md:ml-0 p-[80px_70px] shadow-[0px_0px_35px_0px_rgba(20,33,43,0.1)] xl:p-[60px_50px] lg:p-[40px_30px]">
                        @forelse ($services as $service)
                            <div class="mb-[30px] relative">
                                <div class="flex justify-between items-end mb-[10px]">
                                    <h5 class="text-[22px] sm:text-[18px]  font-heading-font text-[#0a272c] max-w-[80%] font-semibold">{{$service->name}}</h5>
                                    <span class="text-[22px] font-heading-font text-[#14212b] font-bold sm:text-[18px]">100%</span>
                                </div>
                                <div class="h-[6px] w-full bg-[#f3f4f4] relative rounded-[10px] overflow-hidden">
                                    <div class="wow fadeInLeft h-[6px]  bg-[#ff4a17]" style="width: 100%" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
