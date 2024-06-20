<div id="accordionFlushExample">
    @forelse ($faqs as $key => $faq)
        <div class="rounded-none bg-white  border-[1px] border-[#e1e1e1] mb-[20px]">
            <h2 class="mb-0" id="flush-heading-{{$key}}">
                <button class="group relative flex w-full items-center rounded-none border-0 bg-white px-5 py-5  text-left text-[18px] font-base-font transition
                    [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none" type="button" data-te-collapse-init data-te-collapse-collapsed data-te-target="#flush-collapse-{{$key}}" aria-expanded="false" aria-controls="flush-collapse-{{$key}}">
                    {{$faq->question}}
                    <span class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                </button>
            </h2>
            <div id="flush-collapse-{{$key}}" class="!visible hidden border-0" data-te-collapse-item
                aria-labelledby="flush-heading-{{$key}}" data-te-parent="#accordionFlushExample">
                <div class="px-5 py-4">
                    {{$faq->answer}}
                </div>
            </div>
        </div>                            
    @empty
    @endforelse
</div>