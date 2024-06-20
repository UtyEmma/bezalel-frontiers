<x-guest-layout>
    <section class="bg-[url({{$post->image}})] bg-center bg-cover bg-no-repeat w-full h-[480px] text-center relative z-[1] flex justify-center flex-col md:h-[400px] before:w-full before:h-full before:absolute before:left-0 before:top-0 before:bg-[#14212b] before:opacity-[0.5] before:-[-1]">
        <div class="overflow-hidden relative w-full h-full">
            <div class="wraper">
                <div class="flex items-center justify-center h-[480px] md:h-[400px]">
                    <div class="col-span-12">
                        <h2
                            class="text-[60px] text-white mb-[40px] sm:mb-[25px] font-bold capitalize md:text-[50px] mt-[145px] md:mt-[140px] col:mt-[180px] sm:text-[40px]">
                            Latest News</h2>
                        <ol class="flex justify-center">
                            <li class="text-[16px] text-white mr-[5px] sm:text-[14px]">
                                <a href="{{route('home')}}"
                                    class="text-white transition-all duration-300 hover:text-[#e33200]">Home</a>
                            </li>
                            <li class="relative text-[16px] text-white sm:text-[14px] pl-[20px] ml-[6px]
                                before:mr-[5px] before:w-[8px] before:h-[4px] before:bg-white before:absolute
                                before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-[2px]">
                                Blog</li>
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

    <section class="py-[120px] md:py-[90px] sm:py-[80px]">
        <div class="wraper">
            <div class="grid grid-cols-12 gap-10 md:gap-3">
                <div class="col-span-8 md:col-span-12">
                    <div class="mb-[70px]">
                        <img class="w-full" src="{{$post->image}}" alt>
                        <div class="overflow-hidden my-[35px]">
                            <ul>
                                <li class="text-[14px] font-medium uppercase float-left col:float-none col:block col:ml-[0px] col:mb-[5px] text-[#687693]">
                                    <i class="relative top-0 mr-[3px] text-[15px] text-[#687693]  fi flaticon-user"></i>
                                    By <a class="text-[#687693] transition-all hover:text-[#ff4a17]" href="#">{{$post->author->name}}</a> 
                                </li>

                                <li class="text-[14px] font-medium uppercase float-left col:float-none col:block col:ml-[0px] col:mb-[5px] text-[#687693] ml-[20px] pl-[20px] relative before:absolute before:left-0 before:top-[50%] before:w-[7px] before:h-[7px] before:rounded-[50%] before:content-[''] before:translate before:-translate-y-1/2 before:bg-[#ff4a17] z-10 before:-z-10">
                                    <i class="relative top-0 mr-[3px] text-[15px] text-[#687693]  fi flaticon-calendar-1"></i>
                                    {{$post->publishing_date}}
                                </li>
                            </ul>
                        </div>

                        <h3 class="text-[34px] md:text-[25px] sm:text-[22px] text-[#0a272c] font-bold font-heading-font leading-[40px] mb-[20px]">{{$post->title}}</h3>
                        <div class="text-[#687693] leading-[24px] text-[16px] mb-[20px]">{!! $post->content !!}</div>
                    </div>

                    <div class="border-b border-[#ebebeb] mt-[75px] pb-[30px] text-white sm:mb-[40px]">
                        <div class="flex items-center">
                            <span
                                class="font-heading-font text-[#0a272c] font-semibold inline-block pr-[15px] uppercase">Share:
                            </span>
                            <ul class="inline-block">
                                @forelse ($post->tags as $tag)
                                    <li class="float-left ml-[10px] sm:m-[2px] sm:ml-0">
                                        <a href="{{route('posts', ['tag' => $tag])}}" class="inline-block text-[13px] px-[18px] py-[2px] text-[#0a272c] bg-[#f5f5f5] rounded-[5px] font-normal uppercase transition-all hover:text-[#ff4a17]">{{$tag}}</a>
                                    </li>
                                @empty
                                @endforelse
                            </ul>
                        </div>
                    </div>


                    <!-- end tag-share -->
                    <div class="mt-[30px] pb-[30px] text-white sm:mb-[40px]">
                        <div class="flex items-center">
                            <span class="font-heading-font text-[#0a272c] font-semibold inline-block pr-[15px]
                                uppercase">Share:
                            </span>
                            <ul class="inline-block">
                                <li class="float-left ml-[10px] sm:m-[2px] sm:ml-0">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{$post->route}}&t={{$post->title}}" target="__blank" class="inline-block text-[15px] capitalize text-[#6e6e6e] underline font-normal transition-all hover:text-[#ff4a17]">facebook</a>
                                </li>
                                <li class="float-left ml-[10px] sm:m-[2px] sm:ml-0">
                                    <a target="__blank" href="http://twitter.com/share?text={{$post->title}}&url={{$post->route}}" class="inline-block text-[15px] capitalize text-[#6e6e6e] underline font-normal transition-all hover:text-[#ff4a17]">twitter</a>
                                </li>
                                <li class="float-left ml-[10px] sm:m-[2px] sm:ml-0">
                                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{$post->route}}" target="__blank" class="inline-block text-[15px] capitalize text-[#6e6e6e] underline font-normal transition-all hover:text-[#ff4a17]">linkedin</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-span-4 md:col-span-12">
                    <div class="pl-[45px] lg:pl-[35px] md:pl-0 md:max-w-[400px]">
                        <div class="bg-[#f5f5f5] p-[40px] lg:p-[30px_20px] rounded-[5px]">
                            <h3 class="text-[23px] relative text-[#0a272c] text-left font-heading-font capitalize pb-[20px] font-bold">Search Here</h3>
                            <form action="{{route('posts')}}">
                                @csrf
                                <div class="relative">
                                    <input type="text" class="form-control w-full text-[16px] rounded-[5px] h-[70px] p] border-0 pl-[10px] focus:outline-0 focus:shadow-none bg-white text-[#687693]" name="search" placeholder="Search Post..">
                                    <button type="submit" class="text-[20px] text-white  bg-[#ff4a17] absolute right-[10px] top-[52%] h-[50px]
                            leading-[50px] w-[50px] rounded-[6px] transform -translate-y-1/2">
                                        <i class="ti-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="mt-[65px] bg-[#f5f5f5] p-[40px_20px] lg:p-[30px_20px] rounded-[5px]">
                            <h3 class="text-[23px] relative text-[#0a272c] text-left font-heading-font capitalize pb-[20px] font-bold">Related Posts</h3>
                            <div class="mt-[15px]">
                                @forelse ($posts as $post)
                                    <div class="overflow-hidden flex">
                                        <div class="w-[90px]">
                                            <img class="rounded-[6px] w-full" src="{{$post->image}}" alt />
                                        </div>
                                        <div class="pl-[20px] w-[calc(100%-90px)]">
                                            <a href="{{$post->route}}" class="line-clamp-2">
                                                <h4 class="inline-block font-base-font font-medium text-[#0a272c] text-[16px] transition-all hover:text-[#ff4a17] line-clamp-2">{{$post->title}}</h4>
                                            </a>

                                            <span class="text-[#ff4a17] text-[13px]">{{$post->publishing_date}}</span>
                                        </div>
                                    </div>
                                @empty
                                    
                                @endforelse
                            </div>
                        </div>

                        <div class="mt-[65px]  bg-[#f5f5f5] p-[40px] lg:p-[30px_20px] rounded-[5px]">
                            <h3 class="text-[23px] relative text-[#0a272c] text-left font-heading-font capitalize pb-[20px] font-bold">Tags</h3>
                            <ul class="mt-[15px] flex  items-center flex-wrap">
                                <li class="mr-[8px] mb-[12px]">
                                    @foreach ($post->tags as $tag)
                                        <a href="{{route('posts', ['tag' => $tag])}}" class="bg-white rounded-[5px] py-[5px] px-[12px] text-[15px] text-[#060530] transition-all hover:bg-[#ff4a17] hover:text-white">{{$tag}}</a>                                    
                                    @endforeach
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
