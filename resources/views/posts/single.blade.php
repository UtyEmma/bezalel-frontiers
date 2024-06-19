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
            <div class="grid grid-cols-12 gap-3">
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
                                        <a href="#" class="inline-block text-[13px] px-[18px] py-[2px] text-[#0a272c] bg-[#f5f5f5] rounded-[5px] font-normal uppercase transition-all hover:text-[#ff4a17]">{{$tag}}</a>
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
                                <li class="float-left ml-[10px] sm:m-[2px] sm:ml-0"><a href="#"
                                        class="inline-block text-[15px] capitalize text-[#6e6e6e] underline font-normal transition-all hover:text-[#ff4a17]">facebook</a>
                                </li>
                                <li class="float-left ml-[10px] sm:m-[2px] sm:ml-0"><a href="#"
                                        class="inline-block text-[15px] capitalize text-[#6e6e6e] underline font-normal transition-all hover:text-[#ff4a17]">twitter</a>
                                </li>
                                <li class="float-left ml-[10px] sm:m-[2px] sm:ml-0"><a href="#"
                                        class="inline-block text-[15px] capitalize text-[#6e6e6e] underline font-normal transition-all hover:text-[#ff4a17]">linkedin</a>
                                </li>
                                <li class="float-left ml-[10px] sm:m-[2px] sm:ml-0"><a href="#"
                                        class="inline-block text-[15px] capitalize text-[#6e6e6e] underline font-normal transition-all hover:text-[#ff4a17]">pinterest</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end tag-share -->
                    <div class="mt-[35px] mb-[60px]">
                        <div class="float-left sm:float-none">
                            <a href="#" target="_blank">
                                <img class="rounded-[50%]" src="assets/images/blog-details/author.jpg" alt></a>
                        </div>
                        <div class="block overflow-hidden pl-[25px] sm:pl-0 sm:mt-[15px]">
                            <a href="#" class="font-heading-font text-[24px] font-semibold inline-block mb-[10px] text-[#232f4b]">Author: {{$post->author->name}}</a>
                            
                            <p class="text-[#687693] leading-[24px] text-[16px] mb-[20px]">{{$post->author->bio}}</p>

                            <ul class="inline-block list-none">
                                <li class="float-left mr-[12px]">
                                    <a href="#" class="block text-[13px] text-[#060530] transition-all hover:text-[#ff4a17]">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>

                                <li class="float-left mr-[12px]">
                                    <a href="#" class="block text-[13px] text-[#060530] transition-all hover:text-[#ff4a17]">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>

                                <li class="float-left mr-[12px]">
                                    <a href="#" class="block text-[13px] text-[#060530] transition-all hover:text-[#ff4a17]">
                                        <i class="ti-linkedin"></i>
                                    </a>
                                </li>

                                <li class="float-left mr-[12px]">
                                    <a href="#" class="block text-[13px] text-[#060530] transition-all hover:text-[#ff4a17]">
                                        <i class="ti-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end author-box -->
                    <div class="overflow-hidden border border-[#d8e0f1] px-[25px]">
                        <div
                            class="py-[40px] pr-[15px] pl-[5px] sm:py-[25px] sm:px-[15px] w-[50%] float-left sm:w-full sm:float-none text-left group">
                            <a href="blog.html" class="inline-block">
                                <span class="pl-[25px] sm:pl-0 tracking-[2px] text-[15px] relative transition-all group-hover:text-[#ff4a17] text-[#6e6e6e] uppercase  font-semibold block
                                before:font-['themify'] before:content-['\e629'] before:transition-all  before:absolute before:left-0 before:top-0 sm:before:hidden group-hover:before:text-[#ff4a17]
                                ">Previous Post</span>
                                <span class="font-base-font text-[18px] font-normal text-[#232f4b] mt-[15px]
                                        block">At
                                    vero eos et accusamus et iusto odio dignissimos
                                    ducimus qui blanditiis praesentium.</span>
                            </a>
                        </div>
                        <div
                            class="py-[40px] pl-[15px] pr-[5px] sm:py-[25px] sm:px-[15px] w-[50%] float-left sm:w-full sm:float-none text-right sm:text-left  group border-l border-[#d8e0f1] sm:border-l-transparent sm:border-t">

                            <a href="blog-left-sidebar.html" class="inline-block transition-all group">
                                <span
                                    class="pr-[25px] sm:pr-0 tracking-[2px] text-[15px] relative transition-all group-hover:text-[#ff4a17] text-[#6e6e6e] uppercase   font-semibold block
                                before:font-['themify'] before:content-['\e628'] before:transition-all  before:absolute before:left-[95%] before:top-0 sm:before:hidden group-hover:before:text-[#ff4a17] ">Next
                                    Post</span>
                                <span class="font-base-font text-[18px] font-normal text-[#232f4b] mt-[15px]
                                        block">Dignissimos
                                    ducimus qui blanditiis praesentiu deleniti
                                    atque corrupti quos dolores</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-span-4 md:col-span-12">
                    <div class="pl-[45px] lg:pl-[35px] md:pl-0 md:mt-[80px] sm:mt-[70px] md:max-w-[400px]">
                        <div class="text-center bg-[#F3F3F3] p-[45px] relative z-30">
                            <div class="mb-[25px]">
                                <img class="rounded-[50%] w-full max-w-[200px] mx-auto"
                                    src="assets/images/blog/about-widget.jpg" alt>
                            </div>
                            <h4
                                class="text-[#232f4b] text-[25px] font-bold mb-[15px] font-heading-font-s2 capitalize">
                                Jenny
                                Watson</h4>
                            <p class=" text-[#666] text-[15px] mb-[18px]">Hi! beautiful people. I`m an
                                authtor of
                                this blog. Read our post - stay with us</p>
                            <ul class="flex justify-center">
                                <li class="mr-[10px]"><a href="#" class="block text-[#323232] w-[40px] h-[40px] leading-[40px] bg-[#fff]
                                        rounded-[50%] transition-all hover:text-[#ff4a17]"><i
                                            class="ti-facebook"></i></a></li>
                                <li class="mr-[10px]"><a href="#"
                                        class="block text-[#323232] w-[40px] h-[40px] leading-[40px] bg-[#fff] rounded-[50%] transition-all hover:text-[#ff4a17]"><i
                                            class="ti-twitter-alt"></i></a></li>
                                <li class="mr-[10px]"><a href="#"
                                        class="block text-[#323232] w-[40px] h-[40px] leading-[40px] bg-[#fff] rounded-[50%] transition-all hover:text-[#ff4a17]"><i
                                            class="ti-linkedin"></i></a></li>
                                <li><a href="#"
                                        class="block text-[#323232] w-[40px] h-[40px] leading-[40px] bg-[#fff] rounded-[50%] transition-all hover:text-[#ff4a17]"><i
                                            class="ti-pinterest"></i></a></li>
                            </ul>
                        </div>

                        <div class="mt-[65px] bg-[#f5f5f5] p-[40px] lg:p-[30px_20px] rounded-[5px]">
                            <h3 class="text-[23px] relative text-[#0a272c] text-left font-heading-font capitalize pb-[20px] font-bold">Search Here</h3>
                            <form>
                                <div class="relative">
                                    <input type="text"
                                        class="form-control w-full text-[16px] rounded-[5px] h-[70px] p] border-0 pl-[10px] focus:outline-0 focus:shadow-none bg-white text-[#687693]"
                                        placeholder="Search Post..">
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
                                <div class="overflow-hidden flex">
                                    <div class="w-[90px]">
                                        <img class="rounded-[6px] w-full" src="assets/images/recent-posts/img-1.jpg"
                                            alt>
                                    </div>
                                    <div class="pl-[20px] w-[calc(100%-90px)]">
                                        <h4><a href="blog-single.html" class="inline-block font-base-font font-medium text-[#0a272c] text-[16px]
                                                transition-all hover:text-[#ff4a17]">
                                                We are able to give truly independent advice</a>
                                        </h4>
                                        <span class="text-[#ff4a17] text-[13px]">19 Jun 2023 </span>
                                    </div>
                                </div>
                                <div class="overflow-hidden flex pt-[15px] mt-[15px]">
                                    <div class="w-[90px]">
                                        <img class="rounded-[6px] w-full" src="assets/images/recent-posts/img-2.jpg"
                                            alt>
                                    </div>
                                    <div class="pl-[20px] w-[calc(100%-90px)]">
                                        <h4><a href="blog-single.html" class="inline-block font-base-font font-medium text-[#0a272c] text-[16px]
                                                transition-all hover:text-[#ff4a17]">Researching the Consulting
                                                Career Path</a></h4>
                                        <span class="text-[#ff4a17] text-[13px]">22 May 2023 </span>
                                    </div>
                                </div>
                                <div class="overflow-hidden flex pt-[15px] mt-[15px]">
                                    <div class="w-[90px]">
                                        <img class="rounded-[6px] w-full" src="assets/images/recent-posts/img-3.jpg"
                                            alt>
                                    </div>
                                    <div class="pl-[20px] w-[calc(100%-90px)]">
                                        <h4><a href="blog-single.html" class="inline-block font-base-font font-medium text-[#0a272c] text-[16px]
                                                transition-all hover:text-[#ff4a17]">What are the pros and cons of
                                                becoming a
                                                consultant.</a></h4>
                                        <span class="text-[#ff4a17] text-[13px]">12 Apr 2023 </span>
                                    </div>
                                </div>
                                <div class="overflow-hidden flex pt-[15px] mt-[15px]">
                                    <div class="w-[90px]">
                                        <img class="rounded-[6px] w-full" src="assets/images/recent-posts/img-4.jpg"
                                            alt>
                                    </div>
                                    <div class="pl-[20px] w-[calc(100%-90px)]">
                                        <h4><a href="blog-single.html" class="inline-block font-base-font font-medium text-[#0a272c] text-[16px]
                                                transition-all hover:text-[#ff4a17]">I must explain to you how all
                                                this mistaken
                                                idea</a></h4>
                                        <span class="text-[#ff4a17] text-[13px]">12 Apr 2023 </span>
                                    </div>
                                </div>
                                <div class="overflow-hidden flex pt-[15px] mt-[15px]">
                                    <div class="w-[90px]">
                                        <img class="rounded-[6px] w-full" src="assets/images/recent-posts/img-5.jpg"
                                            alt>
                                    </div>
                                    <div class="pl-[20px] w-[calc(100%-90px)]">
                                        <h4><a href="blog-single.html" class="inline-block font-base-font font-medium text-[#0a272c] text-[16px]
                                                transition-all hover:text-[#ff4a17]">The definitive list of digital
                                                products you
                                                can sell</a></h4>
                                        <span class="text-[#ff4a17] text-[13px]">12 Apr 2023 </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-[65px]  bg-[#f5f5f5] p-[40px] lg:p-[30px_20px] rounded-[5px]">
                            <h3 class="text-[23px] relative text-[#0a272c] text-left font-heading-font capitalize pb-[20px] font-bold">Tags</h3>
                            <ul class="mt-[15px] flex  items-center flex-wrap">
                                <li class="mr-[8px] mb-[12px]">
                                    @foreach ($post->tags as $tag)
                                        <a href="#" class="bg-white rounded-[5px] py-[5px] px-[12px] text-[15px] text-[#060530] transition-all hover:bg-[#ff4a17] hover:text-white">{{$tag}}</a>                                    
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
