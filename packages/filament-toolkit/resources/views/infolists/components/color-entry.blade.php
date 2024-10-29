<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
    @php
        $name = str($getName())->title();
    @endphp
    <div class="mb-2">{{ $name }}</div>

    <div class="flex flex-wrap gap-2" x-data="{}">
        @foreach (\Illuminate\Support\Arr::wrap($getState()) as $state)
            <div @class([
                'rounded',
                match ($getWidth($state)) {
                    4 => 'w-4 h-4',
                    5 => 'w-5 h-5',
                    6 => 'w-6 h-6',
                    8 => 'w-8 h-8',
                    default => 'w-8 h-8',
                },
            ])
                style="background-color: {{ $state }}"
                x-tooltip.raw="{{ $state }}">
            </div>
        @endforeach
    </div>
</x-dynamic-component>
