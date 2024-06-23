<x-guest-layout title="{{$team->name}} - Team Members">
    @include('layouts.partials.breadcrumbs', [
        'image' => asset('assets/imgs/bezalel-frontiers-business-meeting.jpg'),
        'title' => $team->name,
        'breadcrumbs' => [
            [
                'name' =>  'Our Team',
                'route' => route('teams')
            ],
            [
                'name' =>  $team->name,
            ],
        ]
    ])

        <!-- start team-single page -->
        <div class="team-pg-area">
            <div class="section-wrap bg-[#f3f4f4]">
                <div class="wraper">
                    <div class="grid grid-cols-12 items-center">
                        <div class="col-span-6 md:col-span-12">
                            <div class="p-[40px] sm:p-[30px] shadow-[0px_6px_20.1px_4.9px_rgba(176,191,238,.12)] relative z-[1] bg-white">
                                <img src="{{$team->image}}" alt="{{$team->name}}" class="w-full h-[565px] object-cover md:h-full">
                                <div class="absolute left-0 top-0 -z-[1]">
                                    <img src="assets/images/team/shape6.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-6 md:col-span-12">
                            <div class="pl-[30px] lg:pl-0 md:mt-[20px]">
                                <h2 class="text-[30px] font-bold">{{$team->name}}</h2>
                                <span class="block mb-[20px] font-normal text-[15px] text-[#ff4a17]">{{$team->role}}</span>

                                <div>
                                    {!! $team->bio !!}
                                </div>

                                <ul class="overflow-hidden pt-[10px] flex items-center">
                                    <li class="text-[22px] col:text-[15px] mr-[15px]">Connect With:</li>
                                    @if ($team->facebook)
                                        <li class="mr-[15px]">
                                            <a href="{{$team->facebook}}" class="text-[#0a272c] w-[36px] h-[36px] leading-[40px] block text-center
                                                    rounded-[50%] text-[18px] border-[1px] border-[#cbcbcb] transition-all
                                                    duration-300 hover:text-white hover:bg-[#ff4a17]">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if ($team->twitter)
                                        <li class="mr-[15px]">
                                            <a href="{{$team->twitter}}" class="text-[#0a272c] w-[36px] h-[36px] leading-[40px] block text-center
                                                    rounded-[50%] text-[18px] border-[1px] border-[#cbcbcb] transition-all
                                                    duration-300 hover:text-white hover:bg-[#ff4a17]">
                                                <i class="ti-twitter-alt"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if ($team->instagram)
                                        <li class="mr-[15px]">
                                            <a href="#" class="text-[#0a272c] w-[36px] h-[36px] leading-[40px] block text-center
                                                    rounded-[50%] text-[18px] border-[1px] border-[#cbcbcb] transition-all
                                                    duration-300 hover:text-white hover:bg-[#ff4a17]">
                                                <i class="ti-instagram"></i>
                                            </a>
                                        </li>
                                    @endif

                                    @if ($team->linkedin)
                                        <li class="mr-[15px]">
                                            <a href="#" class="text-[#0a272c] w-[36px] h-[36px] leading-[40px] block text-center
                                                    rounded-[50%] text-[18px] border-[1px] border-[#cbcbcb] transition-all
                                                    duration-300 hover:text-white hover:bg-[#ff4a17]">
                                                <i class="ti-linkedin"></i>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute left-[60px] bottom-0 -z-[1] xl:opacity-[.3] md:hidden">
                    <img src="assets/images/progress-shape-1.png" alt="">
                </div>
                <div class="absolute right-[60px] top-[20px] xl:opacity-[.3] md:hidden">
                    <img src="assets/images/progress-shape-2.png" alt="">
                </div>
            </div>
        </div>
</x-guest-layout>