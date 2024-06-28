<x-guest-layout title="Our Team">
    @include('layouts.partials.breadcrumbs', [
        'image' => asset('assets/imgs/bezalel-frontiers-business-meeting.jpg'),
        'title' => 'Our Team',
        'breadcrumbs' => [
            [
                'name' =>  'Our Team',
            ]
        ]
    ])

    <section
        class="pt-[120px] pb-[90px] md:pt-[90px] md:pb-[60px] sm:pt-[80px] sm:pb-[50px] bg-[#f5f5f5] overflow-hidden relative">
        <div class="wraper">
            @if ($teams->count() > 0)
                @include('partials.teams.index')
            @endif

            <div class="mt-28">
                {{$teams->links()}}
            </div>
        </div>
    </section>

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

    @include('partials.contact.section')
</x-guest-layout>