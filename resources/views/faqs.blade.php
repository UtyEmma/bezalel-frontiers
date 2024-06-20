<x-guest-layout>
    <section class="bg-[url(../images/page-title.jpg)] bg-center bg-cover bg-no-repeat w-full h-[480px] text-center relative z-[1] flex justify-center flex-col md:h-[400px] before:w-full before:h-full before:absolute before:left-0 before:top-0 before:bg-[#14212b] before:opacity-[0.5] before:-[-1]">
        <div class="overflow-hidden relative w-full h-full">
            <div class="wraper">
                <div class="flex items-center justify-center h-[480px] md:h-[400px]">
                    <div class="col-span-12">
                        <h2 class="text-[60px] text-white mb-[40px] sm:mb-[25px] font-bold capitalize md:text-[50px]
                            mt-[145px] md:mt-[140px] col:mt-[180px] sm:text-[40px]">FAQ</h2>
                        <ol class="flex justify-center">
                            <li class="text-[16px] text-white mr-[5px] sm:text-[14px]">
                                <a href="index.html"
                                    class="text-white transition-all duration-300 hover:text-[#e33200]">Home</a>
                            </li>
                            <li class="relative text-[16px] text-white sm:text-[14px] pl-[20px] ml-[6px]
                                before:mr-[5px] before:w-[8px] before:h-[4px] before:bg-white before:absolute
                                before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-[2px]">FAQ
                            </li>
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

    <!-- start question accordion -->
    <section class="section-wrap">
        <div class="wraper">
            <div class="mb-[75px] sm:mb-[40px] text-center">
                <h2 class="text-[55px] md:text-[35px] sm:text-[32px] col:text-[28px] leading-[70px] md:leading-[55px] sm:leading-[40px]
                relative capitalize font-heading-font font-bold
                    text-[#14212b]">Frequently Asked Question
                </h2>
            </div>

            <div class="max-w-[860px] mx-auto">
                <!-- acopdint -->
                <div class="mt-[50px]">
                    @include('partials.faqs.accordion')
                </div>
            </div>
        </div>
    </section>

    <!--  start question -->
    <div class="bg-[#f5f5f5] py-[100px] md:py-[80px] sm:py-[60px]">
        <div class="wraper">
            <div class="mb-[75px] sm:mb-[40px] text-center">
                <h2 class="text-[55px] md:text-[35px] sm:text-[32px] col:text-[28px] leading-[70px] md:leading-[55px] sm:leading-[40px]
                relative capitalize font-heading-font font-bold
                    text-[#14212b]">Do You Have Any Question?</h2>
            </div>
            <div
                class="max-w-[570px] m-auto shadow-[0px_5px_15px_0px_rgba(68,68,68,0.1)] p-[50px] pt-[60px] col:p-[20px] text-center  bg-white rounded-[5px]">
                <h2 class="text-[30px] font-bold text-center mb-[35px]">Get In Touch</h2>

                <form method="post" class="contact-validation-active" id="contact-form" novalidate="novalidate">
                    <div class="w-full">
                        <input type="text" name="name" id="name" class="w-full h-[50px] outline-none border-b-[1px]
                        border-[#ddd] mb-[22px] p-[8px_15px] text-[15px] font-normal text-[#212529]"
                            placeholder="Your Name">
                    </div>
                    <div class="w-full">
                        <input type="email" name="email" id="email" class="w-full h-[50px] outline-none border-b-[1px]
                        border-[#ddd] mb-[22px] p-[8px_15px] text-[15px] font-normal text-[#212529]"
                            placeholder="Email Address">
                    </div>
                    <div class="w-full">
                        <input type="text" name="phone" id="phone" class="w-full h-[50px] outline-none border-b-[1px]
                        border-[#ddd] mb-[22px] p-[8px_15px] text-[15px] font-normal text-[#212529]"
                            placeholder="Subject">
                    </div>
                    <div class="w-full">
                        <textarea class="w-full h-[160px] md:h-[100px] outline-none border-b-[1px]
                        border-[#ddd] mb-[22px] p-[8px_15px] text-[15px] font-normal text-[#212529]" name="note"
                            id="note" placeholder="Your Question"></textarea>
                    </div>
                    <div class="submit-btn-wrapper">
                        <button type="submit" class="theme-btn bg-[#ed3400]">Submit Now</button>
                        <div id="loader">
                            <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                        </div>
                    </div>
                    <div class="clearfix error-handling-messages">
                        <div id="success">Thank you</div>
                        <div id="error"> Error occurred while sending email. Please try again later.
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
