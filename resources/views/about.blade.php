<x-guest-layout title="About Us">
    @include('layouts.partials.breadcrumbs', [
        'image' => asset('assets/imgs/bezalel-frontiers-business-strategy.jpg'),
        'title' => 'About us',
        'breadcrumbs' => [
            [ 'name' =>  'About us', ]
        ]
    ])

    @include('partials.about.mission', [
        'group' => 'sections',
        'section' => 'mission_section'
    ])

    @include('partials.about.about', [
        'group' => 'sections',
        'section' => 'about_section'
    ])

    @include('partials.about.consultants-message', [
        'group' => 'sections',
        'section' => 'manager_section'
    ])

    @if ($teams->count() > 0)
        <section class="pt-[120px] pb-[90px] md:pt-[90px] md:pb-[60px] sm:pt-[80px] sm:pb-[50px] bg-[#f5f5f5] overflow-hidden relative">
            <div class="wraper">
                @include('partials.teams.index')
            </div>
            <div class="absolute right-0 top-0 md:hidden">
                <img src="assets/images/team/shape5.png" alt="">
            </div>
            <div class="absolute left-0 bottom-0 md:hidden">
                <img src="assets/images/team/shape4.png" alt="">
            </div>
        </section>
    @endif

    @include('partials.testimonials.index')

    @if ($faqs->count() > 0)
        <section class="section-wrap !pt-0">
            <div class="wraper">
                <div class="mb-[75px] sm:mb-[40px] text-center">
                    <h2 class="text-[55px] md:text-[35px] sm:text-[32px] col:text-[28px] leading-[70px] md:leading-[55px] sm:leading-[40px]
                    relative capitalize font-heading-font font-bold
                        text-[#14212b]">Frequently Asked Questions
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
    @endif

    @include('partials.contact.section')

</x-guest-layout>
