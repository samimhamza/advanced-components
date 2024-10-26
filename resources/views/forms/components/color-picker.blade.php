<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    @php
        $width = $getWidth();
    @endphp
    <div x-data="{
        state: $wire.$entangle('{{ $getStatePath() }}')
    }" x-init="const colorPicker = new iro.ColorPicker($refs.picker, {
        color: state,
        @if ($width) width: @js($width) @endif
    });
    colorPicker.on('color:change', function(color) {
        state = color.hexString;
    })">
        <div wire:ignore x-ref="picker">
        </div>

    </div>
</x-dynamic-component>
