<x-guest-layout>
    <section class="bg-[url(../images/page-title.jpg)] bg-center bg-cover bg-no-repeat w-full h-[480px] text-center relative z-[1] flex justify-center flex-col md:h-[400px] before:w-full before:h-full before:absolute before:left-0 before:top-0 before:bg-[#14212b] before:opacity-[0.5] before:-[-1]">
        <div class="overflow-hidden relative w-full h-full">
            <div class="wraper">
                <div class="flex items-center justify-center h-[480px] md:h-[400px]">
                    <div class="col-span-12">
                        <h2
                            class="text-[60px] text-white mb-[40px] sm:mb-[25px] font-bold capitalize md:text-[50px] mt-[145px] md:mt-[140px] col:mt-[180px] sm:text-[40px]">
                            Latest News</h2>
                        <ol class="flex justify-center">
                            <li class="text-[16px] text-white mr-[5px] sm:text-[14px]">
                                <a href="index.html"
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

    <!--start blog-area  -->
    <section class="py-[120px] md:py-[90px] sm:py-[80px]">
        <div class="wraper">
            <div class="grid grid-cols-12 gap-5 md:gap-3">
                <div class="col-span-8 md:col-span-12">
                    @forelse ($posts as $post)
                        <div>
                            <div class="mb-[70px]">
                                <img class="w-full h-[500px] object-cover" src="{{$post->image}}" alt>
                                <div class="overflow-hidden my-[35px]">
                                    <ul>
                                        <li
                                            class="text-[14px] font-medium uppercase float-left col:float-none col:block col:ml-[0px] col:mb-[5px] text-[#666]">
                                            <i class="relative top-0 mr-[3px] text-[15px] text-[#666]  fi flaticon-user"></i>
                                            By <a class="text-[#232f4b] transition-all hover:text-[#ff4a17;]"
                                                href="#">{{$post->author->name}}</a> </li>
                                        <li class="text-[14px] font-medium uppercase float-left col:float-none col:block col:ml-[0px] col:mb-[5px] text-[#666] ml-[20px] pl-[20px] relative before:absolute before:left-0 before:top-[50%] before:w-[7px] before:h-[7px] before:rounded-[50%] before:content-[''] before:translate before:-translate-y-1/2 before:bg-[#ff4a17;] z-10 before:-z-10">
                                            <i class="relative top-0 mr-[3px] text-[15px] text-[#666]  fi flaticon-calendar-1"></i>
                                            {{$post->publishing_date}}</li>
                                    </ul>
                                </div>
                                <h3
                                    class="text-[34px] md:text-[25px] sm:text-[22px] text-white font-bold font-base-font leading-[40px] transition-all mb-[20px] group">
                                    <a href="{{$post->route}}"
                                        class="group-hover:text-[#ff4a17;] transition-all text-[#232f4b] font-heading-font">{{$post->title}}</a></h3>
                                <p class="text-[#666] leading-[24px] text-[16px] mb-[20px]">{{$post->excerpt}}</p>
                                <a href="{{$post->route}}"
                                    class="text-[#666] uppercase underline font-base-font text-[15px] font-semibold transition-all hover:text-[#ff4a17;]">READ
                                    MORE...</a>
                            </div>
                        </div>
                    @empty
                        <div class="p-10 border border-gray-600 space-y-5 text-center">
                            <h1 class="text-4xl font-bold">No Blog Posts at the moment</h1>
                            <p class="text-xl">Please check back later</p>

                            <div class="flex flex-col items-center space-y-7">
                                <a href="{{route('contact')}}" class="theme-btn ">Get in touch</a>
                                <a href="{{route('posts')}}" class="theme-btn-s3 text-lg">View all Posts</a>
                                <a href="{{route('home')}}" class="theme-btn-s3 text-lg">Go Home</a>
                            </div>
                        </div>
                    @endforelse
                </div>
                <div class="col-span-4 md:col-span-12">
                    <div class="pl-[45px] lg:pl-[35px] md:pl-0 md:max-w-[400px]">
                        <div class="bg-[#f5f5f5] p-[40px] lg:p-[30px_20px] rounded-[5px]">
                            <h3 class="text-[23px] relative text-[#0a272c] text-left font-heading-font capitalize pb-[20px] font-bold">Search Here</h3>
                            <form action="{{request()->fullUrl()}}">
                                <div class="relative">
                                    <input type="text" name="search" value="{{request()->search}}" class="form-control w-full text-[16px] rounded-[5px] h-[70px] p] border-0 pl-[10px] focus:outline-0 focus:shadow-none bg-white text-[#687693]" placeholder="Search Post..">

                                    <button type="submit" class="text-[20px] text-white  bg-[#ff4a17] absolute right-[10px] top-[52%] h-[50px] leading-[50px] w-[50px] rounded-[6px] transform -translate-y-1/2">
                                        <i class="ti-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="mt-[65px]  bg-[#f5f5f5] p-[40px] lg:p-[30px_20px] rounded-[5px]">
                            <h3 class="text-[23px] relative text-[#0a272c] text-left font-heading-font capitalize pb-[20px] font-bold">Tags</h3>
                            <ul class="mt-[15px] flex  items-center flex-wrap">
                                <li class="mr-[8px] mb-[12px]">
                                    <a href="{{route('posts')}}" class="bg-white rounded-[5px] py-[5px] px-[12px] text-[15px] text-[#060530] transition-all hover:bg-[#ff4a17] hover:text-white">All</a>
                                </li>
                                @forelse ($tags as $tag)
                                    <li class="mr-[8px] mb-[12px]">
                                        <a href="{{route('posts', ['tag' => $tag])}}" class=" rounded-[5px] py-[5px] px-[12px] text-[15px]  transition-all hover:bg-[#ff4a17] hover:text-white {{request()->tag && request()->tag == $tag ? '!bg-main text-white' : 'bg-white text-[#060530]'}} ">{{$tag}}</a>
                                    </li>
                                @empty
                                    
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
