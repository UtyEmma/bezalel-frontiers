<x-guest-layout title="{{$service->name}}">
    <section class="bg-[url('{{$service->image}}')] bg-center bg-cover bg-no-repeat w-full h-[480px] text-center relative z-[1] flex justify-center flex-col md:h-[400px] before:w-full before:h-full before:absolute before:left-0 before:top-0 before:bg-[#14212b] before:opacity-[0.5] before:-[-1]">
        <div class="overflow-hidden relative w-full h-full">
            <div class="wraper">
                <div class="flex items-center justify-center h-[480px] md:h-[400px]">
                    <div class="col-span-12">
                        <h2 class="text-[60px] text-white mb-[40px] sm:mb-[25px] font-bold capitalize md:text-[50px] mt-[145px] md:mt-[140px] col:mt-[180px] sm:text-[40px]">{{$service->name}}</h2>
                        <ol class="flex justify-center">
                            <li class="text-[16px] text-white mr-[5px] sm:text-[14px]">
                                <a href="{{route('home')}}" class="text-white transition-all duration-300 hover:text-[#e33200]">Home</a>
                            </li>
                            <li class="relative text-[16px] text-white sm:text-[14px] pl-[20px] ml-[6px] before:mr-[5px] before:w-[8px] before:h-[4px] before:bg-white before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-[2px]">Service</li>
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

    <section class="py-[120px] md:py-[90px] sm:py-[80px]">
        <div class="wraper">
            <div class="grid grid-cols-12 gap-3">
                <div class="col-span-8 md:col-span-12">
                    <div class="h-80 md:h-[450px] rounded-md mb-7 overflow-hidden">
                        <img class="object-cover" src="{{$service->image}}" alt="">
                    </div>
                    <h3 class="font-medium font-heading-font text-[#0a272c] text-[35px] leading-[130.5%] mb-[20px] md:text-[25px] ">{{$service->name}}</h3>

                    <div class="text-[16px] leading-[26px] font-normal text-[#687693] mb-[20px]">{!! $service->content !!}</div>


                    @if ($services->count() > 0)
                        <h3 class="font-medium font-heading-font mt-[40px] text-[#0a272c] text-[35px] leading-[130.5%] mb-[20px] md:text-[25px]">Related Service</h3>
                        <div class="grid grid-cols-12 gap-3 items-center">
                            @forelse ($services as $service)
                                <div class="col-span-4 md:col-span-6 h-full sm:col-span-12">
                                    <div class="p-[20px] lg:py-[20px] h-full lg:px-[10px] shadow-[0px_0px_20px_0px_rgba(20,33,43,0.1)]">
                                        <a href="{{route('services.details', ['service' => $service->slug])}}">
                                            <h2 class="font-semibold font-heading-font text-[22px] mt-[10px]  mb-[12px] text-main md:text-[20px]">{{$service->name}}</h2>
                                        </a>
                                        <p class="text-[16px] sm:text-[15px] leading-[26px] font-normal text-[#687693] line-clamp-2">{{$service->description}}</p>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    @endif
                    <div
                        class="p-[30px] lg:p-[30px_20px] rounded-[20px] shadow-[0px_2px_8px_2px_rgba(22,14,71,0.1)] mt-[40px]">
                        <div class="mb-[30px]">
                            <h2
                                class="font-semibold  font-heading-font text-[#0a272c] text-[35px] leading-[130.5%] md:text-[25px]">
                                Have project in mind? Let's discuss</h2>
                            <p class="text-[16px] leading-[26px] font-normal text-[#687693]">Get in touch with us to
                                see how we can help you with your project</p>
                        </div>
                        <form method="post" class="contact-validation-active" id="contact-form-main">
                            <div class="grid grid-cols-12 gap-3">
                                <div class="col-span-6 md:col-span-6 sm:col-span-12 mb-3">
                                    <input type="text"
                                        class="form-control w-full h-[50px] border-b-[1px] border-[#ebebeb] pl-[10px] focus:outline-0 focus:shadow-none bg-transparent text-[#687693]"
                                        name="name" id="name" placeholder="Your Name*">
                                </div>
                                <div class="col-span-6 md:col-span-6 sm:col-span-12 mb-3">
                                    <input type="email"
                                        class="form-control w-full h-[50px] border-b-[1px] border-[#ebebeb] pl-[10px] focus:outline-0 focus:shadow-none bg-transparent text-[#687693]"
                                        name="email" id="email" placeholder="Your Email*">
                                </div>
                                <div class="col-span-12 mb-3">
                                    <select name="service"
                                        class="form-control w-full h-[50px] border-b-[1px] border-[#ebebeb] pl-[10px] focus:outline-0 focus:shadow-none bg-transparent text-[#687693]">
                                        <option disabled="disabled" selected="">Services</option>
                                        <option>Tax Management</option>
                                        <option>Financial Advices</option>
                                        <option>Risk Management</option>
                                    </select>
                                </div>
                                <div class="col-span-12">
                                    <textarea class="form-control w-full h-[120px] border-b-[1px] border-[#ebebeb]
                                        pl-[10px] focus:outline-0 focus:shadow-none bg-transparent text-[#687693]"
                                        name="note" id="note" placeholder="Message..."></textarea>
                                </div>
                            </div>
                            <div class="mt-[10px]">
                                <button type="submit" class="theme-btn bg-[#ff4a17] rounded-[6px]">Send
                                    Massege</button>
                                <div id="loader">
                                    <i class="ti-reload"></i>
                                </div>
                            </div>
                            <div class="clearfix error-handling-messages">
                                <div id="success">Thank you Massage Sended</div>
                                <div id="error"> Error occurred while sending email. Please try again later. </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-span-4 md:col-span-12">
                    <div class="pl-[45px] lg:pl-0 md:mt-[80px] sm:mt-[70px] md:max-w-[400px]">
                        <div class=" bg-[#f5f5f5] p-[40px] lg:p-[30px_20px] rounded-[5px]">
                            <h3 class="text-[23px] relative text-[#0a272c] text-left font-heading-font capitalize pb-[20px] font-bold
                        ">Search Here</h3>
                            <form>
                                <div class="relative">
                                    <input type="text"
                                        class="form-control w-full text-[16px] rounded-[5px] h-[70px] p] border-0 pl-[10px] focus:outline-0 focus:shadow-none bg-white text-[#687693]"
                                        placeholder="Search Post..">
                                    <button type="submit" class="text-[20px] text-white  bg-[#ff4a17] absolute right-[10px] top-[52%] h-[50px]
                            leading-[50px] w-[50px] rounded-[6px] transform -translate-y-1/2">
                                        <i class="ti-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="mt-[65px] bg-[#f5f5f5] p-[40px] lg:p-[30px_20px] rounded-[5px]">
                            <h3 class="text-[23px] relative text-[#0a272c] text-left font-heading-font capitalize pb-[20px] font-bold
                        ">Post Categories</h3>
                            <ul>
                                <li class=" mt-[15px] group transition-all "><a href="service-single.html"
                                        class="text-[#687693] bg-white rounded-[5px] p-[10px] pl-[60px] group font-base-font text-[16px] font-normal
                                        block transition-all relative before:absolute before:left-[30px] before:top-[50%] before:content-['\f102'] before:font-['Flaticon'] before:-translate-y-1/2 group-hover:bg-[#ff4a17] group-hover:text-white">Tax
                                        Management</a>
                                </li>
                                <li class="mt-[15px] group transition-all "><a href="service-single.html"
                                        class="text-[#687693] bg-white rounded-[5px] p-[10px] pl-[60px] group font-base-font text-[16px] font-normal
                                        block transition-all relative before:absolute before:left-[30px] before:top-[50%] before:content-['\f102'] before:font-['Flaticon'] before:-translate-y-1/2 group-hover:bg-[#ff4a17] group-hover:text-white">Finanacial
                                        Planning</a>
                                </li>
                                <li class="mt-[15px] group transition-all "><a href="service-single.html"
                                        class="text-white bg-[#ff4a17] rounded-[5px] p-[10px] pl-[60px] group
                                        font-base-font text-[16px] font-normal
                                        block transition-all relative before:absolute before:left-[30px] before:top-[50%] before:content-['\f102'] before:font-['Flaticon'] before:-translate-y-1/2 group-hover:bg-[#ff4a17] group-hover:text-white">Information
                                        Technology</a>
                                </li>
                                <li class="mt-[15px] group transition-all "><a href="service-single.html"
                                        class="text-[#687693] bg-white rounded-[5px] p-[10px] pl-[60px] group font-base-font text-[16px] font-normal
                                        block transition-all relative before:absolute before:left-[30px] before:top-[50%] before:content-['\f102'] before:font-['Flaticon'] before:-translate-y-1/2 group-hover:bg-[#ff4a17] group-hover:text-white">Training
                                        & Development</a>
                                </li>
                                <li class="mt-[15px] group transition-all "><a href="service-single.html"
                                        class="text-[#687693] bg-white rounded-[5px] p-[10px] pl-[60px] group font-base-font text-[16px] font-normal
                                        block transition-all relative before:absolute before:left-[30px] before:top-[50%] before:content-['\f102'] before:font-['Flaticon'] before:-translate-y-1/2 group-hover:bg-[#ff4a17] group-hover:text-white">Strategic
                                        Consulting</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-[65px] bg-[#f5f5f5] p-[40px] lg:p-[30px_20px] rounded-[5px]">
                            <div
                                class="bg-[url(../images/contact-bg.jpg)] bg-no-repeat bg-cover bg-center relative z-[1] p-[30px_40px] min-h-[330px] object-cover flex justify-center flex-col text-center overflow-hidden after:absolute after:left-[-50px] after:top-[-50px] after:w-[150px] after:h-[150px] after:bg-[#ff4a17] after:rounded-[50%]  before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[rgba(20,33,43,0.8)] before:z-[-1]">
                                <h2 class="text-[26px] font-bold text-white mb-[20px] leading-[35px]">
                                    <a href="contact.html">Contact For Advertisment 270 x 310</a>
                                </h2>
                            </div>
                        </div>


                    </div>
                </div>
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
