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


    <section class="section-wrap !pt-0">
        <div class="wraper">
            {{-- <div class="mb-[75px] sm:mb-[40px] text-center">
                <h2 class="text-[55px] md:text-[35px] sm:text-[32px] col:text-[28px] leading-[70px] md:leading-[55px] sm:leading-[40px]
                relative capitalize font-heading-font font-bold
                    text-[#14212b]">Frequently Asked Question
                </h2>
            </div> --}}

            <div class="max-w-[860px] mx-auto">
                <!-- acopdint -->
                <div class="mt-[50px]">
                    @include('partials.faqs.accordion')
                </div>
            </div>
        </div>
    </section>

    <section class="md:!max-w-[70%] mx-auto px-4">
        <div class="text-center mb-[50px]">
            <h2 class="text-[35px] col:text-[25px] text-[#0a272c] font-heading-font font-bold mb-[20px]">Have Any Question?</h2>
            <p class="text-[#687693] text-[16px] leading-[22px]">We're Here to Help You Succeed, send us a quick message today.</p>
        </div>
        <div class="p-[50px] bg-white relative z-10 shadow-[0px_1px_15px_0px_rgba(62,65,159,0.1)] sm:p-7 sm:py-[50px] mb-20">
            <livewire:contact-form />
        </div>
    </section>
</x-guest-layout>
