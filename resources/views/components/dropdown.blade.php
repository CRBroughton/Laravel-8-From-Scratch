@props(['trigger'])
<div x-data="{ show: false }" class="w-full" @click.away="show = false">
    {{-- Trigger --}}
    <div @click="show = !show">
        {{ $trigger }}
    </div>

    {{-- Dropdown Links --}}
    <div class="py-2 lg:absolute bg-gray-100 mt-2 rounded-xl w-full z-50 overflow-auto max-h-52" x-show="show">
        {{ $slot }}
    </div>
</div>
