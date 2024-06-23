<x-guest-layout title="Frequently Asked Questions">
    @include('layouts.partials.breadcrumbs', [
        'image' => asset('assets/imgs/bezalel-frontiers-business-strategy.jpg'),
        'title' => 'Frequently Asked Questions',
        'breadcrumbs' => [
            [
                'name' =>  'Frequently Asked Questions',
            ]
        ]
    ])


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
