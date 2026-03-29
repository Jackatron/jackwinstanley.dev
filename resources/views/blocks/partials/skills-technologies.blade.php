 <div x-cloak x-transition:enter x-show="activeTab == 1" class="lg:flex lg:justify-between gap-8 w-full">
        <div class="">
            <p class="text-white font-semibold mb-2">Developer:</p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 items-center auto-cols-fr">
                @include('blocks.partials.skill-tile', ['alt' => 'Laravel logo', 'image' => Vite::asset('resources/images/logos/laravel.webp')])
                @include('blocks.partials.skill-tile', ['alt' => 'Git logo', 'image' => Vite::asset('resources/images/logos/git.webp')])
                @include('blocks.partials.skill-tile', ['alt' => 'PHP logo', 'image' => Vite::asset('resources/images/logos/php.webp')])
                @include('blocks.partials.skill-tile', ['alt' => 'MySQL logo', 'image' => Vite::asset('resources/images/logos/mysql.webp')])
                @include('blocks.partials.skill-tile', ['alt' => 'Tailwind logo', 'image' => Vite::asset('resources/images/logos/tailwind.webp')])
                @include('blocks.partials.skill-tile', ['alt' => 'React logo', 'image' => Vite::asset('resources/images/logos/react.webp')])
                @include('blocks.partials.skill-tile', ['alt' => 'Javascript logo', 'image' => Vite::asset('resources/images/logos/js.webp')])
                @include('blocks.partials.skill-tile', ['alt' => 'NodeJS logo', 'image' => Vite::asset('resources/images/logos/nodejs.webp')])
            </div>
        </div>
        <div class="">
            <p class="text-white font-semibold mb-2 mt-6 lg:mt-0">IT Systems:</p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 items-center auto-cols-fr">
                @include('blocks.partials.skill-tile', ['alt' => 'Active Directory logo', 'image' => Vite::asset('resources/images/logos/active-directory.webp')])
                @include('blocks.partials.skill-tile', ['alt' => 'SCCM logo', 'image' => Vite::asset('resources/images/logos/sccm.webp')])
                @include('blocks.partials.skill-tile', ['alt' => 'Hyper-V logo', 'image' => Vite::asset('resources/images/logos/hyperv.webp')])
                @include('blocks.partials.skill-tile', ['alt' => 'VMware logo', 'image' => Vite::asset('resources/images/logos/vmware.webp')])
                @include('blocks.partials.skill-tile', ['alt' => 'Exchange logo', 'image' => Vite::asset('resources/images/logos/exchange.webp')])
                @include('blocks.partials.skill-tile', ['alt' => 'Veeam logo', 'image' => Vite::asset('resources/images/logos/veeam.webp')])
                @include('blocks.partials.skill-tile', ['alt' => 'IIS logo', 'image' => Vite::asset('resources/images/logos/iis.webp')])
                @include('blocks.partials.skill-tile', ['alt' => 'Synology logo', 'image' => Vite::asset('resources/images/logos/synology.png')])
            </div>
        </div>
    </div>