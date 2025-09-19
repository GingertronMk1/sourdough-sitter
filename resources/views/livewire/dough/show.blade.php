<x-layouts.app>

<div class="flex flex-col gap-6">
    <div class="flex flex-row">
        {{ $dough->name }} belongs to {{ $dough->user->name }}.
        Its next sitting is on {{ $dough->nextSitting->start_date->format('d/m/Y') }}.
    </div>
    <div class="flex flex-col">
        @foreach($dough->sittings as $sitting)
            <div class="flex flex-col">
                <a href="{{ route('dough.sitting.show', compact('dough', 'sitting')) }}">
                    {{ $sitting->start_date->format('d/m/Y') }} - {{ $sitting->end_date->format('d/m/Y') }}
                </a>
            </div>
        @endforeach
    </div>
</div>
</x-layouts.app>
