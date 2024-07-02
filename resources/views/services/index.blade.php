<x-guest-layout title="Our Services">
    @include('layouts.partials.breadcrumbs', [
        'image' => asset('assets/imgs/bezalel-frontiers-business-strategy.jpg'),
        'title' => 'Our Services',
        'breadcrumbs' => [
            [
                'name' =>  'Our Services',
            ]
        ]
    ])


    <section class="section-wrap overflow-hidden relative ">
        <div class="wraper">
            <div class="mb-[75px] sm:mb-[40px] text-center">
                <span class="uppercase text-[16px] font-bold tracking-[3px] text-[#ff4a17]
                    font-base-font">Explore Our Services</span>
                <h2 class="text-[55px] md:text-[35px] sm:text-[32px] col:text-[28px] leading-[70px] md:leading-[55px] sm:leading-[40px]
                    mt-[10px] relative capitalize font-heading-font font-bold text-[#14212b]">We offer solutions that help you grow</h2>
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

</x-guest-layout>
