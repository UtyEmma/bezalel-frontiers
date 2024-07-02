<x-guest-layout title="{{$service->name}}">
    @include('layouts.partials.breadcrumbs', [
        'image' => $service->image,
        'title' => $service->name,
        'breadcrumbs' => [
            [
                'name' =>  'Our Services',
                'route' => route('services')
            ],
            [
                'name' =>  $service->name,
            ],
        ]
    ])

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
                            @forelse ($services as $serviceItem)
                                <div class="col-span-4 md:col-span-6 h-full sm:col-span-12">
                                    <div class="p-[20px] lg:py-[20px] h-full lg:px-[10px] shadow-[0px_0px_20px_0px_rgba(20,33,43,0.1)]">
                                        <a href="{{route('services.details', ['service' => $serviceItem->slug])}}">
                                            <h2 class="font-semibold font-heading-font text-[22px] mt-[10px]  mb-[12px] text-main md:text-[20px]">{{$serviceItem->name}}</h2>
                                        </a>
                                        <p class="text-[16px] sm:text-[15px] leading-[26px] font-normal text-[#687693] line-clamp-2">{{$serviceItem->description}}</p>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    @endif

                    <div
                        class="p-[30px] lg:p-[30px_20px] rounded shadow-[0px_2px_8px_2px_rgba(22,14,71,0.1)] mt-[40px]">
                        <div class="mb-[30px]">
                            <h2
                                class="font-semibold  font-heading-font text-[#0a272c] text-[35px] leading-[130.5%] md:text-[25px]">
                                Have project in mind? Let's discuss</h2>
                            <p class="text-[16px] leading-[26px] font-normal text-[#687693]">Get in touch with us to
                                see how we can help you with your project</p>
                        </div>

                        <livewire:contact-form service="{{$service->id}}" />
                    </div>
                </div>
                <div class="col-span-4 md:col-span-12">
                    <div class="pl-[45px] lg:pl-0 md:max-w-[400px]">
                        <div class=" bg-[#f5f5f5] p-[40px] lg:p-[30px_20px] rounded-[5px]">
                            <h3 class="text-[23px] relative text-[#0a272c] text-left font-heading-font capitalize pb-[20px] font-bold
                        ">Search Here</h3>
                            <form action="{{route('services')}}">
                                <div class="relative">
                                    <input type="text" name="search" class="form-control w-full text-[16px] rounded-[5px] h-[70px] p] border-0 pl-[10px] focus:outline-0 focus:shadow-none bg-white text-[#687693]" placeholder="Search for Services..">
                                    <button type="submit" class="text-[20px] text-white  bg-[#ff4a17] absolute right-[10px] top-[52%] h-[50px]
                            leading-[50px] w-[50px] rounded-[6px] transform -translate-y-1/2">
                                        <i class="ti-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="mt-[65px] bg-[#f5f5f5] p-[40px] lg:p-[30px_20px] rounded-[5px]">
                            <h3 class="text-[23px] relative text-[#0a272c] text-left font-heading-font capitalize pb-[20px] font-bold">Related Services</h3>
                            <ul>
                                @forelse ($services as $service)
                                    <li class=" mt-[15px] group transition-all ">
                                        <a href="{{$service->route}}"
                                            class="text-[#687693] bg-white rounded-[5px] p-[10px] pl-[60px] group font-base-font text-[16px] font-normal
                                            block transition-all relative before:absolute before:left-[30px] before:top-[50%] before:content-['\f102'] before:font-['Flaticon'] before:-translate-y-1/2 group-hover:bg-[#ff4a17] group-hover:text-white">{{$service->name}}</a>
                                    </li>
                                @empty
                                @endforelse
                            </ul>
                        </div>
                        {{-- <div class="mt-[65px] bg-[#f5f5f5] p-[40px] lg:p-[30px_20px] rounded-[5px]">
                            <div
                                class="bg-[url(../images/contact-bg.jpg)] bg-no-repeat bg-cover bg-center relative z-[1] p-[30px_40px] min-h-[330px] object-cover flex justify-center flex-col text-center overflow-hidden after:absolute after:left-[-50px] after:top-[-50px] after:w-[150px] after:h-[150px] after:bg-[#ff4a17] after:rounded-[50%]  before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[rgba(20,33,43,0.8)] before:z-[-1]">
                                <h2 class="text-[26px] font-bold text-white mb-[20px] leading-[35px]">
                                    <a href="contact.html">Contact For Advertisment 270 x 310</a>
                                </h2>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
