<section class="section-wrap">
    <div class="wraper">
        <div class=" bg-no-repeat bg-center rounded-[6px] md:p-[40px_35px] col:p-[0px] !p-0 bg-cover" style="background-image: url('{{asset('assets/imgs/bezalel-frontiers-business-handshake.jpg')}}')"
        >
            <div class="py-[100px] col:py-[20px] bg-[rgba(20,33,43,0.9)] flex items-center flex-col  relative z-[1] rounded-[6px] overflow-hidden lg:flex-wrap lg:justify-center lg:text-center space-y-6">
                <div class="basis-[80%] lg:basis-full lg:mr-0 px-4 md:!px-20 lg:mb-[20px]">
                    <span class="uppercase text-[16px] font-base-font font-bold tracking-[3px] !text-main">{{$page->render($group, 'Ready to Transform Your Business?', $section, 'caption')}}</span>
                    <h2 class="text-[45px] text-white mt-[20px] lg:text-[40px] font-heading-font font-semibold leading-[1.2] sm:text-[30px]">{{$page->render($group, 'Take the first step towards innovative solutions and strategic growth.', $section, 'title')}}</h2>
                </div>

                <div class="">
                    <a href="{{$page->render($group, route('contact'), $section, 'button_link')}}" class="theme-btn">{{$page->render($group, 'Get in Touch', $section, 'button_text')}}</a>
                </div>
            </div>
        </div>
    </div>
</section>