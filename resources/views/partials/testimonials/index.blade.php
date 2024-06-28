<!-- start testimonial -->
@if ($testimonials->count() > 0)
<section class="py-[120px] md:py-[90px] sm:py-[80px]">
    <div class="wraper">
        <div class="mb-[75px] sm:mb-[40px] text-center">
            <span class="uppercase text-[16px] font-bold tracking-[3px] text-[#ff4a17] font-base-font">OUR CLIENT TESTIMONIALS</span>
            <h2 class="text-[55px] md:text-[35px] sm:text-[32px] col:text-[28px] leading-[70px] md:leading-[55px] sm:leading-[40px] mt-[10px] relative capitalize font-heading-font font-bold text-[#14212b]">Best word from our happy clients</h2>
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