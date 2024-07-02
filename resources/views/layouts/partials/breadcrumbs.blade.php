<section class="bg-center bg-cover bg-no-repeat w-full text-center relative z-[1] flex justify-center flex-col md:!h-[400px] before:w-full before:h-full before:absolute before:left-0 before:top-0 before:bg-[#14212b] before:opacity-80 before:-[-1]" style="background-image: url({{$image}})" >
    <div class="overflow-hidden relative w-full h-full py-10">
        <div class="wraper h-full">
            <div class="flex items-center justify-center h-full">
                <div class="col-span-12">
                    <h2 class="text-[60px] text-white font-bold capitalize md:text-[50px] sm:text-[32px] leading-snug">{{$title}}</h2>
                    <ol class="flex justify-center flex-wrap">
                        <li class="text-[16px] text-white mr-[5px] sm:text-[14px]">
                            <a href="{{route('home')}}" class="text-white transition-all duration-300 hover:text-[#e33200]">Home</a>
                        </li>

                        @forelse ($breadcrumbs as $breadcrumb)
                            @isset($breadcrumb['route'])
                                <li class="relative text-[16px] text-white sm:text-[14px] pl-[20px] ml-[6px] before:mr-[5px] before:w-[8px] before:h-[4px] before:bg-white before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-[2px]">
                                    <a href="{{$breadcrumb['route']}}" class="text-white transition-all  duration-300 hover:text-[#e33200]">{{$breadcrumb['name']}}</a>
                                </li>                            
                            @else
                                <li class="relative text-[16px] text-white sm:text-[14px] pl-[20px] ml-[6px]
                                    before:mr-[5px] before:w-[8px] before:h-[4px] before:bg-white before:absolute
                                    before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-[2px]">{{$breadcrumb['name']}}
                                </li>
                            @endisset
                        @empty
                        @endforelse
                    </ol>
                </div>
            </div>
        </div>
        <div class="wow fadeInDown absolute right-[-70px] top-[-70px] w-[300px] h-[300px] bg-[#ff4a17] rounded-[50%] -z[-1]  col:hidden "
            data-wow-duration="0.9s" data-wow-delay=".3s"></div>
        <div class="wow fadeInDown absolute left-0 top-0  sm:left-[-100px] sm:top-[-100px] col:hidden"
            data-wow-duration="0.9s" data-wow-delay=".3s">
            <img src="/assets/images/page-title-shape-1.png" alt="">
        </div>
        <div class="wow fadeInUp absolute right-0 bottom-0  sm:right-[-100px] sm:bottom-[-30px] col:hidden"
            data-wow-duration="0.9s" data-wow-delay=".3s">
            <img src="/assets/images/page-title-shape-2.png" alt="">
        </div>
    </div>
</section>