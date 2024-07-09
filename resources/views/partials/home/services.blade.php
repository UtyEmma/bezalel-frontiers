@if ($services->count() > 0)
    <section class="section-wrap bg-[#14212b] overflow-hidden relative z-[1] before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[url(../images/service/shape-1.png)] before:bg-no-repeat before:bg-cover before:bg-center">
        <div class="wraper">
            <div class="mb-[75px] sm:mb-[40px] text-center">
                <span class="uppercase text-[16px] font-bold tracking-[3px] !text-main
                    font-base-font">{{$page->render($group, 'Our Services', $section, 'title')}}</span>
                <h2 class="text-[55px] md:text-[35px] sm:text-[32px] col:text-[28px] leading-[70px] md:leading-[55px] sm:leading-[40px]
                    mt-[10px] relative capitalize font-heading-font font-bold
                    text-[#fff]">{{$page->render($group, 'Comprehensive Solutions for Your Business Needs', $section, 'caption')}}</h2>
            </div>
            <div class="wpo-service-slider owl-carousel">
                @forelse ($services as $service)
                    <div class="relative mb-[30px] z-[1]">
                        <div class="relative rounded-[6px] overflow-hidden group
                        before:absolute before:left-0 before:top-0 before:w-full before:h-full
                        before:bg-[rgba(20,33,43,0.8)] before:z-[11] ">
                            <img class="w-full rounded-[6px]" style="height: 450px; object-fit: cover;" src="{{$service->image}}" alt="">
                            <div class="absolute left-0 bottom-0 p-[50px] z-[19] md:p-[30px]">
                                <h2
                                    class="text-white text-[30px] font-bold font-heading-font mb-[20px] col:text-[25px]">
                                    {{$service->name}}</h2>
                                <p class="text-[#e1e1e1] font-base-font line-clamp-3">{{$service->description}}</p>
                                <a href="{{route('services.details', ['service' => $service->slug])}}"
                                    class="inline-block font-base-font
                                p-[10px_45px] pr-[45px] text-white border-white border-[1px]
                                relative rounded-[6px] mt-[10px] max-w-[150px] before:absolute
                                before:right-[20px] before:top-[51%]
                                before:content-['\f103'] before:font-['Flaticon'] before:translate-y-[-50%]">Details</a>

                            </div>
                            <div class="absolute left-0 bottom-0 p-[50px] w-full h-full bg-[#ff4a17]
                        flex justify-center flex-col rounded-[6px] translate-y-[100%]
                            transition-all duration-300 ease-in-out
                        overflow-hidden z-[20] md:p-[30px] group-hover:translate-y-[0]">
                                <h2
                                    class="text-white text-[30px]  font-heading-font font-bold mb-[20px] col:text-[25px]">
                                    {{$service->name}}</h2>
                                <p class="text-white font-base-font line-clamp-3">{{$service->description}}</p>
                                <a href="{{route('services.details', ['service' => $service->slug])}}" class="inline-block font-base-font transition-all duration-300 ease-in-out
                                p-[10px_45px] pr-[45px] text-white border-white border-[1px]
                                relative rounded-[6px] mt-[10px] max-w-[150px] before:absolute
                                before:right-[20px] before:top-[51%]
                                before:content-['\f103'] before:font-['Flaticon'] before:translate-y-[-50%]
                                hover:bg-white hover:!text-main">Details</a>
                                <div class="t">
                                    <div class="absolute left-[-180px] top-[-180px] w-[360px] h-[360px]
                                        bg-[rgba(255,255,255,.09)] rounded-[50%]">
                                    </div>
                                    <div class="absolute left-[-210px] top-[-210px] w-[420px] h-[420px]
                                        bg-[rgba(255,255,255,.09)] rounded-[50%]"></div>
                                    <div class="absolute left-[-241px] top-[-241px] w-[482px] h-[482px]
                                        bg-[rgba(255,255,255,.09)] rounded-[50%]"></div>
                                </div>
                                <div class="b">
                                    <div class="absolute right-[-180px] bottom-[-180px] w-[360px] h-[360px]
                                        bg-[rgba(255,255,255,.09)] rounded-[50%]"></div>
                                    <div class="absolute right-[-210px] bottom-[-210px] w-[420px] h-[420px]
                                        bg-[rgba(255,255,255,.09)] rounded-[50%]"></div>
                                    <div class="absolute right-[-241px] bottom-[-241px] w-[482px] h-[482px]
                                        bg-[rgba(255,255,255,.09)] rounded-[50%]"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>

            <div class="mt-10 flex justify-center">
                <a class="theme-btn me-0" href="{{$page->render($group, route('services'), $section, 'button_link')}}">{{$page->render($group, 'View more services', $section, 'button_text')}}</a>
            </div>
        </div>
    </section>
@endif