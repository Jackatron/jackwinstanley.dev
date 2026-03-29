 <div x-cloak x-transition:enter x-show="activeTab == 1" class="lg:flex lg:justify-between gap-8 w-full">
        <div class="">
            <p class="text-white font-semibold mb-2">Developer:</p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 items-center auto-cols-fr">
                @include('blocks.partials.skill-tile', ['image' => Vite::asset('resources/images/logos/laravel.webp')])
                @include('blocks.partials.skill-tile', ['image' => Vite::asset('resources/images/logos/git.webp')])
                @include('blocks.partials.skill-tile', ['image' => Vite::asset('resources/images/logos/php.webp')])
                @include('blocks.partials.skill-tile', ['image' => Vite::asset('resources/images/logos/mysql.webp')])
                @include('blocks.partials.skill-tile', ['image' => Vite::asset('resources/images/logos/tailwind.webp')])
                @include('blocks.partials.skill-tile', ['image' => Vite::asset('resources/images/logos/react.webp')])
                @include('blocks.partials.skill-tile', ['image' => Vite::asset('resources/images/logos/js.webp')])
                @include('blocks.partials.skill-tile', ['image' => Vite::asset('resources/images/logos/nodejs.webp')])
            </div>
        </div>
        <div class="">
            <p class="text-white font-semibold mb-2 mt-6 lg:mt-0">IT Systems:</p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 items-center auto-cols-fr">
                @include('blocks.partials.skill-tile', ['image' => Vite::asset('resources/images/logos/active-directory.webp')])
                @include('blocks.partials.skill-tile', ['image' => Vite::asset('resources/images/logos/sccm.webp')])
                @include('blocks.partials.skill-tile', ['image' => Vite::asset('resources/images/logos/hyperv.webp')])
                @include('blocks.partials.skill-tile', ['image' => Vite::asset('resources/images/logos/vmware.webp')])
                @include('blocks.partials.skill-tile', ['image' => Vite::asset('resources/images/logos/exchange.webp')])
                @include('blocks.partials.skill-tile', ['image' => Vite::asset('resources/images/logos/veeam.webp')])
                @include('blocks.partials.skill-tile', ['image' => Vite::asset('resources/images/logos/iis.webp')])
                @include('blocks.partials.skill-tile', ['image' => Vite::asset('resources/images/logos/synology.png')])
            </div>
        </div>
    </div>