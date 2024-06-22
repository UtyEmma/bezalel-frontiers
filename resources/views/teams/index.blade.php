<x-guest-layout title="Our Team">
    <section
            class="bg-[url(../images/page-title.jpg)] bg-center bg-cover bg-no-repeat w-full h-[480px] text-center relative z-[1] flex justify-center flex-col md:h-[400px] before:w-full before:h-full before:absolute before:left-0 before:top-0 before:bg-[#14212b] before:opacity-[0.5] before:-[-1]">
            <div class="overflow-hidden relative w-full h-full">
                <div class="wraper">
                    <div class="flex items-center justify-center h-[480px] md:h-[400px]">
                        <div class="col-span-12">
                            <h2 class="text-[60px] text-white mb-[40px] sm:mb-[25px] font-bold capitalize md:text-[50px] mt-[145px] md:mt-[140px] col:mt-[180px] sm:text-[40px]">Team</h2>
                            <ol class="flex justify-center">
                                <li class="text-[16px] text-white mr-[5px] sm:text-[14px]">
                                    <a href="{{route('home')}}" class="text-white transition-all duration-300 hover:text-[#e33200]">Home</a>
                                </li>
                                <li class="relative text-[16px] text-white sm:text-[14px] pl-[20px] ml-[6px]
                                    before:mr-[5px] before:w-[8px] before:h-[4px] before:bg-white before:absolute
                                    before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-[2px]">Team
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

        <!-- start team -->
        <section
            class="pt-[120px] pb-[90px] md:pt-[90px] md:pb-[60px] sm:pt-[80px] sm:pb-[50px] bg-[#f5f5f5] overflow-hidden relative">
            <div class="wraper">
                <div class="mb-[75px] sm:mb-[40px] text-center">
                    <span class="uppercase text-[16px] font-bold tracking-[3px] text-[#ff4a17] font-base-font">TEAM MEMBERS</span>
                    <h2 class="text-[55px] md:text-[35px] sm:text-[32px] col:text-[28px] leading-[70px] md:leading-[55px] sm:leading-[40px] 
                     mt-[10px] relative capitalize font-heading-font font-bold text-[#14212b]">We Have Skilled People</h2>
                </div>
                <div class="relative z-[1]">
                    <div class="grid grid-cols-12 gap-x-3">
                        @forelse ($teams as $team)
                            <div class="col-span-4 md:col-span-6 col:col-span-12">
                                <div class="group text-center p-[30px] border-[1px] border-transparent relative rounded-[5px] 
                                transition-all max-w-[100%] duration-300
                                    mx-auto mb-[30px] hover:border-[rgba(255,74,23,0.8)]">
                                    <div
                                        class="overflow-hidden rounded-[5px] border-[1px] border-[#fff] relative text-center">
                                        <img class="w-full rounded-[5px] scale-[1] transition-all duration-300 group-hover:scale-[1.2]"
                                            src="{{$team->image}}" alt="">
                                        <div class="absolute left-0 top-0 w-full h-full flex justify-center 
                                        flex-col rounded-[5px] transition-all duration-300  pt-[15px] translate-y-[100%]
                                            bg-[rgba(255,74,23,0.8)] group-hover:translate-y-[0]">
                                            <span
                                                class="uppercase text-[16px] font-base-font font-bold tracking-[3px] text-[#14212b] ">{{$team->role}}</span>
                                            <h2 class=" text-[32px] font-heading-font font-semibold mt-[10px] text-white
                                                lg:text-[25px]">{{$team->name}}</h2>
                                            <a href="{{route('teams.single', ['team' => $team->id])}}"
                                                class="inline-block w-[50px] h-[50px] leading-[50px]
                                                border-[1px] border-[#fff] mt-[20px] rounded-[5px] relative overflow-hidden
                                                after:absolute after:left-0 after:top-0 after:w-full after:h-full
                                                after:bg-[rgba(255,255,255,0.5)] after:-translate-x-full mx-auto
                                                hover:after:translate-x-full after:transition-all after:duration-300 after:ease-in-out">
                                                <i class="ti-plus text-white"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>

                    {{$teams->links()}}
                </div>
            </div>
        </section>
</x-guest-layout>