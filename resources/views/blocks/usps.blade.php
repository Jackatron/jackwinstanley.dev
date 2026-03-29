<section class="py-3 border-t border-t-gray-200">
    <div class="site-container flex flex-wrap gap-4 sm:flex-row sm:items-center justify-between">
        @include('blocks.partials.usp-tile', [
            'title'     => '5+ Years',
            'subtitle'  => 'IT Experience',
            'icon'      => Vite::asset('resources/images/icons/computer.svg'),
            'alt'       => 'Computer icon'
        ])

        @include('blocks.partials.usp-tile', [
            'title'     => '3+ Years',
            'subtitle'  => 'Developer Experience',
            'icon'      => Vite::asset('resources/images/icons/developer.svg'),
            'alt'       => 'Computer icon'
        ])

        @include('blocks.partials.usp-tile', [
            'title'     => '3+ Years',
            'subtitle'  => 'Leadership Experience',
            'icon'      => Vite::asset('resources/images/icons/leadership.svg'),
            'alt'       => 'Computer icon'
        ])
    </div>
</section>