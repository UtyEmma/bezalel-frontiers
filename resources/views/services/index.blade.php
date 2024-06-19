<x-guest-layout>
    <section class="bg-[url(../images/page-title.jpg)] bg-center bg-cover bg-no-repeat w-full h-[480px] text-center relative z-[1] flex justify-center flex-col md:h-[400px] before:w-full before:h-full before:absolute before:left-0 before:top-0 before:bg-[#14212b] before:opacity-[0.5] before:-[-1]">
        <div class="overflow-hidden relative w-full h-full">
            <div class="wraper">
                <div class="flex items-center justify-center h-[480px] md:h-[400px]">
                    <div class="col-span-12">
                        <h2
                            class="text-[60px] text-white mb-[40px] sm:mb-[25px] font-bold capitalize md:text-[50px] mt-[145px] md:mt-[140px] col:mt-[180px] sm:text-[40px]">
                            Service</h2>
                        <ol class="flex justify-center">
                            <li class="text-[16px] text-white mr-[5px] sm:text-[14px]">
                                <a href="index.html"
                                    class="text-white transition-all duration-300 hover:text-[#e33200]">Home</a>
                            </li>
                            <li class="relative text-[16px] text-white sm:text-[14px] pl-[20px] ml-[6px]
                                before:mr-[5px] before:w-[8px] before:h-[4px] before:bg-white before:absolute
                                before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-[2px]">
                                Service</li>
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

    <section class="section-wrap overflow-hidden relative ">
        <div class="wraper">
            <div class="mb-[75px] sm:mb-[40px] text-center">
                <span class="uppercase text-[16px] font-bold tracking-[3px] text-[#ff4a17]
                    font-base-font">Our Services</span>
                <h2 class="text-[55px] md:text-[35px] sm:text-[32px] col:text-[28px] leading-[70px] md:leading-[55px] sm:leading-[40px]
                    mt-[10px] relative capitalize font-heading-font font-bold text-[#14212b]">Amazing Solutions that grow your business</h2>
            </div>
            <div class="grid grid-cols-12 gap-4">
                @forelse ($services as $service)
                    <div class="col-span-4 md:col-span-6 sm:col-span-12">
                        <div class="p-5 h-full col:p-[30px_25px] shadow-[0px_0px_20px_0px_rgba(20,33,43,0.1)]">
                            <div class="flex flex-col">
                                <div class="w-full rounded-md overflow-hidden h-48 mb-[20px]">
                                    <img src="{{$service->image}}" class="object-cover" alt="">
                                </div>

                                <div class="">
                                    <h2 class="text-[#14212b] text-xl font-bold mb-[10px] ">{{$service->name}}</h2>

                                    <p class=" text-[#6e6e6e] line-clamp-3">{{$service->description}}</p>
                                    <a href="{{route('services.details', ['service' => $service->slug])}}" class="inline-block transition-all duration-300 p-[10px_35px] pr-[45px] text-[#ff4a17] border-[1px] border-[#ff4a17]
                                        relative rounded-[6px] mt-[20px] uppercase before:absolute before:right-[20px]
                                        before:top-[51%] before:content-['\f103'] before:font-['Flaticon']
                                        before:-translate-y-1/2 hover:bg-[#ff4a17] hover:text-white">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse
            </div>
        </div>
    </section>

    <section class="pb-[120px] md:pb-[90px] sm:pb-[80px]">
        <div class="wraper">
            <div
                class="p-[70px_100px] bg-[#ff4a17] flex items-center relative rounded-[10px]
                    overflow-hidden z-[1] lg:p-[70px] md:p-[30px] sm:flex-wrap
                    before:absolute before:left-0 before:top-0 before:w-full before:h-full
                    before:bg-[url(../images/subscrbe-shape2.png)] before:bg-no-repeat before:bg-center before:bg-cover before:z-[-1]">
                <div class="basis-[30%] sm:basis-full sm:mb-[20px]">
                    <span class="text-[21px] text-white">Subscribe here</span>
                    <h3 class="text-[40px] text-white font-semibold leading-[55px] mt-[10px] lg:text-[32px]
                        lg:leading-[40px] md:text-[28px] md:leading-[35px] md:mt-0">
                        Subscribe For
                        Newsletter</h3>
                </div>
                <div class="basis-[70%] pl-[60px] sm:basis-full sm:pl-0">
                    <form action="#">
                        <div class="relative">
                            <input type="email" placeholder="Enter your email" required
                                class="w-full p-[40px] pr-[190px] h-[75px] rounded-[5px] bg-white border-none text-white sm:h-[55px] sm:p-[30px] sm:pr-[145px] col:p-[10px] col:pr-[100px] focus:outline-0 focus:shadow-none">
                            <button type="submit" class="absolute right-[8px] bg-[#14212b] rounded-[5px] top-[8px]
                                h-[65px] w-[170px]
                            border-0 text-white pr-[40px] sm:h-[45px] sm:w-[130px] col:w-[80px] col:h-[40px]
                            before:absolute before:right-[35px] before:top-[50%] before:content-['\f102']
                            before:font-['Flaticon'] before:-translate-y-1/2 sm:before:right-[20px]
                            col:before:hidden
                            ">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
