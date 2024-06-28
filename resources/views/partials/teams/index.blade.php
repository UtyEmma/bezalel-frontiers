<div class="mb-[75px] sm:mb-[40px] text-center">
    <span class="uppercase text-[16px] font-bold tracking-[3px] text-[#ff4a17] font-base-font">OUR TEAM MEMBERS</span>
    <h2 class="text-[55px] md:text-[35px] sm:text-[32px] col:text-[28px] leading-[70px] md:leading-[55px] sm:leading-[40px] mt-[10px] relative capitalize font-heading-font font-bold text-[#14212b] md:px-10">We are a dedicated team of highly skilled professionals</h2>
</div>
<div class="relative z-[1]">
    <div class="grid grid-cols-12 gap-x-3">
        @forelse ($teams as $team)
            <div class="col-span-4 md:col-span-6 col:col-span-12">
                <div class="group text-center p-[30px] border-[1px] border-transparent relative rounded-[5px] transition-all max-w-[100%] duration-300 mx-auto mb-[30px] hover:border-[rgba(255,74,23,0.8)]">
                    <div class="overflow-hidden rounded-[5px] border-[1px] border-[#fff] relative text-center">
                        <img class="w-full rounded-[5px] scale-[1] transition-all duration-300 h-96 object-cover group-hover:scale-[1.2]" src="{{$team->image}}" alt="{{$team->name}}">
                        <div class="absolute left-0 top-0 w-full h-full flex justify-center
                        flex-col rounded-[5px] transition-all duration-300  pt-[15px] translate-y-[100%]
                            bg-[rgba(255,74,23,0.8)] group-hover:translate-y-[0]">
                            <span class="uppercase text-[16px] font-base-font font-bold tracking-[3px] text-[#14212b] ">{{$team->role}}</span>
                            <h2 class=" text-[32px] font-heading-font font-semibold mt-[10px] text-white lg:text-[25px]">{{$team->name}}</h2>
                            <a href="{{route('teams.single', ['team' => $team->id])}}" class="inline-block w-[50px] h-[50px] leading-[50px] border-[1px] border-[#fff] mt-[20px] rounded-[5px] relative overflow-hidden after:absolute after:left-0 after:top-0 after:w-full after:h-full after:bg-[rgba(255,255,255,0.5)] after:-translate-x-full mx-auto hover:after:translate-x-full after:transition-all after:duration-300 after:ease-in-out">
                                <i class="ti-plus text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
        @endforelse
    </div>
</div>
</div>