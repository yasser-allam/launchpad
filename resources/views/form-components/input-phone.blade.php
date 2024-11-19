@php
    $country_code_value = $country_code_value ?? 'lb';
@endphp
<div class="h-full flex flex-col items-start" wire:key="{{ rand() }}" x-init="window.WebsiteFunctions.initPhone('{{ $country_code_value }}')">
    <label class="uppercase font-extrabold text-sm mb-2">{{ $label ?? 'phone number' }}</label>
    <div class="w-full">
        <input wire:model='{{ $input_model ?? '' }}' type="tel" name="phone" class="phone-numb w-full">
        {{-- <input wire:model="{{ $country_code_model ?? '' }}" type="hidden" name="phone_country_code"
            id="phone_country_code"> --}}
        {{-- <input wire:model="{{ $full_number_model ?? '' }}" type="hidden" name="phone_number" id="phone_number"> --}}
    </div>
</div>
@error($input_model ?? '')
    <span class="error-message">{{ $message }}</span>
@enderror
