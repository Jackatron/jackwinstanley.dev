<div class="flex items-center gap-4">
    <div class="{{ $bg_colour }} flex justify-center items-center rounded-full text-center {{ $background_size ??'p-2 w-[44px] h-[44px]' }}">
        <img alt="{{ $alt }}" class="{{ $icon_class ?? 'max-w-[40px]' }}" src="{{ $icon }}"/>
    </div>
    <a 
    target="_blank"
    class="font-semibold underline hover:no-underline text-white transition-all ease-in-out" href="{{ $href }}">{{ $text }}</a>
</div>