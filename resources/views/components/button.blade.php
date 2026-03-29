@props([
    'href'  => '#',
    'type'  => 'link',
    'class'  => '',
    'target' => '',
    'disabled' => false
])

@if($type === 'submit')
    <button {!! $disabled ? 'disabled' : '' !!} type="submit" class="group btn items-center {{ $class }}">
        <span>{{ $slot }}</span>
        <span>
            <svg class="group-hover:translate-x-1 fill-white transition-all duration-300 ml-2"
                width="18" height="18">
                <use xlink:href="#icon-arrow-right"></use>
            </svg>
        </span>
    </button>
@else
    <a {!! $target ? 'target="{{ $target }}"' : '' !!} class="group btn items-center {{ $class }}" href="{{ $href }}">
        <span>{{ $slot }}</span>
        <span>
            <svg class="group-hover:translate-x-1 fill-white transition-all duration-300 ml-2"
                width="18" height="18">
                <use xlink:href="#icon-arrow-right"></use>
            </svg>
        </span>
    </a>
@endif
