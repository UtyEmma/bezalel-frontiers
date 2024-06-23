<x-guest-layout title="Blog">
    @include('layouts.partials.breadcrumbs', [
        'image' => asset('assets/imgs/bezalel-frontiers-business-strategy.jpg'),
        'title' => 'Blog',
        'breadcrumbs' => [
            [
                'name' =>  'Blog',
            ]
        ]
    ])

    <!--start blog-area  -->
    <section class="py-[120px] md:py-[90px] sm:py-[80px]">
        <div class="wraper">
            <div class="grid grid-cols-12 gap-5 md:gap-3">
                <div class="col-span-8 md:col-span-12">
                    @forelse ($posts as $post)
                        <div>
                            <div class="mb-[70px]">
                                <img class="w-full h-[200px] md:!h-[400px] object-cover" src="{{$post->image}}" alt>
                                <div class="overflow-hidden my-[20px]">
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
