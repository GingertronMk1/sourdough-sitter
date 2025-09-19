<x-layouts.app>

<div class="flex flex-col gap-6">
    @foreach($doughs as $dough)
        <div class="flex flex-row">
            {{ $dough->name }} belongs to {{ $dough->user->name }}
        </div>
    @endforeach
</div>
</x-layouts.app>
