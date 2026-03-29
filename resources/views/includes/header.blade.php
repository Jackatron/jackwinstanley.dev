<header role="banner" class="sticky z-20 top-0 bg-white py-4 shadow-sm">
    <div class="site-container flex justify-between items-center">
        <a href="{{ route('home') }}" class="group text-dark-blue font-bold text-lg py-1 px-4 hover:text-primary transition-colors ease-in-out">
            <span>JW</span>
            <span class="text-primary group-hover:text-dark-blue transition-colors ease-in-out">.</span>
        </a>

        <nav role="navigation" class="flex gap-10 items-center text-gray-800">
            {{-- 
            <a class="fancy-underline" href="#">Portfolio</a>
            <a class="fancy-underline" href="#">My Blog</a>
            <a class="fancy-underline" href="#">Services</a> --}}
            <x-button href="#contact" class="btn--primary ml-2">Get in touch</x-button>
        </nav>
    </div>
</header>