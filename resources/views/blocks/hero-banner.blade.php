<section class="bg-light-grey py-2 lg:pb-0 lg:pt-8 sm:max-h-[450px] overflow-hidden px-0 lg:px-6 transition-all ease-in-out">
    <div class="site-container flex gap-20 justify-center items-center">
        <div class="hidden md:block lg:relative">
            <img 
            alt="Jack Winstanley"
            data-aos="slide-up" class="bg-primary lg:bg-transparent rounded-full lg:rounded-none relative inset-0 xl:-top-4 z-10 ml-10 lg:w-[520px] lg:max-w-[360px] xl:max-w-[462px]" src="{{ Vite::asset('resources/images/jack-hero.webp') }}"/>
            <div data-aos="fade-in" class="hidden lg:block absolute lg:top-4 xl:top-0 inset-0 rounded-full w-[330px] h-[320px] lg:w-[440px] lg:h-[440px] xl:w-[538px] xl:h-[542px] bg-primary"></div>
        </div>

        <div class="bg-white px-8 py-4 rounded-2xl lg:px-14 lg:-mt-8 lg:py-5 xl:py-8 xl:px-20 w-full shadow-md lg:top-0 xl:-top-3 relative">
            <h1 class="text-4xl lg:text-3xl xl:text-5xl text-dark-blue font-bold">
                <span class="sr-only">Hello, I'm Jack Winstanley</span>
                <span data-typed data-config="hero"></span>
            </h1>

            <h2 class="text-lg mt-2 lg:mt-3 text-dark-blue font-medium">Web Developer &amp; IT Expert</h2>
            <p class="text-sm xl:text-base mt-2 md:mt-4">
               I’m a web developer specialising in back-end development, with solid front-end expertise and years of experience working with IT systems and system administration. Alongside development work, I can provide informed, practical IT guidance to help businesses make sound technical decisions.
            </p>
        
            <div class="flex flex-wrap items-center gap-2 sm:gap-4 mt-5">
                <x-button href="#contact" class="btn--primary">Get in touch</x-button>
                <x-button href="#skills" class="btn--secondary">Learn more</x-button>
            </div>
        </div>
    </div>
</section>