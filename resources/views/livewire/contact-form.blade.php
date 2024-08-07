<form wire:submit="send" class="contact-validation-active mx-[-15px] overflow-hidden">    
    <div
        class="w-[calc(50%-30px)] float-left mx-[15px] mb-[25px] col:float-none col:w-[calc(100%-25px)]">
        <input type="text" class="form-control w-full bg-transparent border-[1px] border-[#ebebeb] h-[50px] text-[#212529] transition-all pl-[25px] focus:outline-0 focus:shadow-none focus:border-[#ff4a17] focus:bg-transparent" wire:model="name" placeholder="Your Name*">
        <x-input.error key="name" />
    </div>
    <div class="w-[calc(50%-30px)] float-left mx-[15px] mb-[25px] col:float-none col:w-[calc(100%-25px)]">
        <input type="email" class="form-control  w-full bg-transparent border-[1px] border-[#ebebeb] h-[50px] text-[#212529] transition-all pl-[25px] focus:outline-0 focus:shadow-none  focus:border-[#ff4a17] focus:bg-transparent" wire:model="email" placeholder="Your Email Address*">
        <x-input.error key="email" />
    </div>
    <div class="w-[calc(50%-30px)] float-left mx-[15px] mb-[25px] col:float-none col:w-[calc(100%-25px)]">
        <input type="tel" class="form-control  w-full bg-transparent border-[1px] border-[#ebebeb] h-[50px] text-[#212529] transition-all pl-[25px] focus:outline-0 focus:shadow-none  focus:border-[#ff4a17] focus:bg-transparent" wire:model="phone" placeholder="Phone Number">
        <x-input.error key="phone" />
    </div>
    <div
        class="w-[calc(50%-30px)] float-left mx-[15px] mb-[25px] col:float-none col:w-[calc(100%-25px)]">
        <select wire:model="service" class="form-control  w-full bg-transparent border-[1px] border-[#ebebeb] h-[50px]  text-[#212529] transition-all pl-[25px] focus:outline-0 focus:shadow-none  focus:border-[#ff4a17] focus:bg-transparent">
            <option value="" >Select Service</option>
            @forelse ($services as $serviceItem)            
                <option value="{{$serviceItem->id}}" @selected($service == $serviceItem->id) >{{$serviceItem->name}}</option>
            @empty
            @endforelse
        </select>
        <x-input.error key="service" />
    </div>
    <div class="w-[calc-(100%-25px)] mb-[25px] mx-[15px]">
        <textarea class="form-control  w-full bg-transparent border-[1px] border-[#ebebeb] h-[180px]  text-[#212529] transition-all pt-[15px] pl-[25px] focus:outline-0 focus:shadow-none  focus:border-[#ff4a17] focus:bg-transparent" wire:model="message" placeholder="Your Message...*"></textarea>
        <x-input.error key="message" />
    </div>

    <div class="my-5 px-[15px]">
        @if ($success)        
            <div class="text-green-700">{{$success}}</div>
        @endif

        @if ($error)        
            <div>{{$error}}</div>
        @endif
    </div>

    <div class="text-center w-full mb-[10px]">
        <button type="submit" class="bg-[#ff4a17] text-[#fff] inline-flex items-center py-[12px] px-[22px] border hover:text-[#ff4a17] border-transparent ] capitalize transition-all hover:bg-transparent hover:border-[#ff4a17]">
            Send us a Message
            <svg class="animate-spin ms-2 h-5 w-5 text-white" wire:loading wire:target="send" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        </button>
    </div>

    <script>
        var  handle = function(e) {
            widget = grecaptcha.render('captcha', {
                'sitekey': "{{ env('RECAPTCHA_V3_SITE_KEY') }}",
                'theme': 'light', // you could switch between dark and light mode.
                'callback': verify
            });
     
        }
        var verify = function (response) {
            @this.set('captcha', response)
        }
    </script>
</form>