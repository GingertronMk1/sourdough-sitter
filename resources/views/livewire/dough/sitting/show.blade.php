@php use Illuminate\Support\Str; @endphp
<x-layouts.app>
    <h2 class="text-2xl">
        {{ $dough->name }} is being sat from
        {{ $sitting->start_date->format('d/m/Y') }} to
        {{ $sitting->end_date->format('d/m/Y') }}
    </h2>
    <div class="flex flex-col">
        <div>
            Feed once every
            @if(intval($sitting->feed_frequency_number) === 1)
                {{ $sitting->feed_frequency_interval }}
            @else
                {{ $sitting->feed_frequency_number }} {{ $sitting->feed_frequency_interval }}s
            @endif
        </div>
        <div>
            Use {{ $sitting->flour_amount_number }}
            {{ intval($sitting->flour_amount_number) === 1
                ? $sitting->flour_amount_unit
                : Str::plural($sitting->flour_amount_unit) }} of <strong>{{ $sitting->flour_type }}</strong> flour.
        </div>
        <div>
            Use {{ $sitting->water_amount_number }}
            {{ intval($sitting->water_amount_number) === 1
                ? $sitting->water_amount_unit
                : Str::plural($sitting->water_amount_unit) }} of water.
        </div>
        @if($sitting->additional_instructions)
            <div>
                {{ $sitting->additional_instructions }}
            </div>
        @endif
    </div>
</x-layouts.app>
