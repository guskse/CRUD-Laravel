{{-- inform which props will be accepted in the card layout --}}
@props(["highlight" => false])


<div @class(['highlight'=> $highlight, 'card'])>
    {{ $slot }}
    <a href="{{ $attributes->get('href') }}" class="btn">View details</a>
</div>
