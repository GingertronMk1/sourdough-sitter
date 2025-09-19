<x-layouts.app>

<div class="flex flex-col gap-6">
    @foreach($doughs as $dough)
        <div class="flex flex-row">
            {{ $dough->name }} belongs to {{ $dough->user->name }}.
            Its next sitting is on {{ $dough->nextSitting->start_date->format('d/m/Y') }}.
            <a href="{{ route('dough.show', ['dough' => $dough]) }}">View</a>
        </div>
    @endforeach
</div>
</x-layouts.app>
