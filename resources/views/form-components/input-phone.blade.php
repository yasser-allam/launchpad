@php
    $country_code_value = $country_code_value ?? 'lb';
@endphp
<div
    class="h-full flex flex-col items-start"
    wire:key="{{ rand() }}"
    x-init="window.WebsiteFunctions.initPhone('{{ $country_code_value }}')">
    <label class="uppercase font-extrabold text-sm mb-2">{{ $label ?? 'Phone Number' }}</label>
    <div class="w-full flex items-center">
        <!-- Visible Phone Input -->
        <input
            wire:model="{{ $input_model ?? '' }}"
            type="tel"
            name="phone"
            placeholder="X XXX XXX"
            class="phone-numb w-full p-2 border border-black/30 rounded placeholder-black/30 placeholder:font-thin placeholder:text-sm focus:ring focus:ring-blue-200 focus:outline-none">

        <!-- Hidden Inputs for Additional Models -->
        <input wire:model="{{ $country_code_model ?? '' }}" type="hidden" name="phone_country_code"
            id="phone_country_code">
        <input wire:model="{{ $full_number_model ?? '' }}" type="hidden" name="phone_number" id="phone_number">
    </div>
</div>

@error($input_model ?? '')
    <span class="text-red-600 text-sm">{{ $message }}</span>
@enderror
