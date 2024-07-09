<section class="section-wrap !py-0">
    <div class="wraper">
        <div class="mb-[75px] lg:mb-[20px] text-left">
            <h2 class="text-[50px] lg:text-[40px] md:text-[35px] sm:text-[32px] col:col-[28px] leading-[70px] md:leading-[55px] sm:leading-[40px] mt-[10px] relative capitalize font-heading-font font-bold text-[#14212b]">{{$page->render($group, "A Word from our Managing Consultant", $section, 'title')}}</h2>
        </div>
        <div class="p-[70px_60px] bg-[#f3f4f4] rounded-[6px] xl:p-[35px] lg:p-[25px] col:p-[15px_20px] md:mb-[80px]">
            <div class="text-[22px] leading-[35px] xl:text-[20px] xl:leading-[30px] lg:text-[18px] space-y-5"> 
                {{$page->render($group, "<p class='text-[22px] leading-[35px] xl:text-[20px] xl:leading-[30px] lg:text-[18px]'>Thank you and welcome to Bezalel Frontiers. At Bezalel Frontiers, we aim to partner with clients, and provide them with the intelligence and knowledge they need to make more effective decisions.</p>
                <p class='text-[22px] leading-[35px] xl:text-[20px] xl:leading-[30px] lg:text-[18px]'>Our approach to management consulting is driven by data and research. We are passionate about integrity, knowledge, and excellence – our core values; and our top priority is to exceed your expectations.</p>
                <p class='text-[22px] leading-[35px] xl:text-[20px] xl:leading-[30px] lg:text-[18px]'>Over the past few years, we are thrilled to have worked in different capacities with diverse firms from within Africa and beyond. We look forward to working with you to explore new frontiers of value and growth for you and your organization. </p>", $section, 'description')}}
            </div>
            
            <div class="mt-[30px] col:mt-[20px]">
                <h3 class="text-[32px] font-semibold mt-[5px] col:text-[25px]">{{$page->render($group, 'Dr. Ebes Esho', $section, 'name')}}</h3>
                <span class="uppercase text-[16px] font-bold tracking-[3px] text-[#ff4a17] col:text-[14px]">{{$page->render($group, 'Management Consultant', $section, 'position')}}</span>
            </div>
        </div>  
    </div>
</section>