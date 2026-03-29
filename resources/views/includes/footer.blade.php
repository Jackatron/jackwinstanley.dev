@stack('footer_scripts')
<footer class="py-4 bg-light-blue">
    <div class="site-container md:flex items-center gap-20">
         <a href="{{ route('home') }}" class="group text-white font-bold text-lg py-1 px-4 hover:text-primary transition-colors ease-in-out">
            <span>Jack Winstanley</span><span class="text-primary">.</span>
        </a>

        <div class="px-4 mt-2 md:mt-0 md:px-0">
            @include('blocks.partials.contact-icon', [
                'href'            => 'mailto:' . __('common.email'),
                'text'            => __('common.email'),
                'alt'             => 'Email icon',
                'icon'            => Vite::asset('resources/images/icons/email.svg'),
                'bg_colour'       => 'bg-primary',
                'icon_class'      => 'max-w-[20px]',
                'background_size' => 'p-4 w-[32px] h-[32px]'
            ])
        </div>

        <div class="px-4 mt-2 md:mt-0 md:px-0">
                @include('blocks.partials.contact-icon', [
                'href'            => 'tel:' . __('common.phone_raw'),
                'text'            => __('common.phone'),
                'alt'             => 'Phone icon',
                'icon'            => Vite::asset('resources/images/icons/phone.svg'),
                'bg_colour'       => 'bg-primary',
                'icon_class'      => 'max-w-[12px]',
                'background_size' => 'p-4 w-[32px] h-[32px]'
            ])
        </div>
    </div>
</footer>