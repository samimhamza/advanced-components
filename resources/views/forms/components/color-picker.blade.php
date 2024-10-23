<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <div x-data="{ state: $wire.$entangle('{{ $getStatePath() }}') }" x-init="">
        <div x-ref="picker">
        </div>
    </div>
</x-dynamic-component>
