<div class="flex flex-col items-center w-[40%] mx-auto my-32 bg-red-300">
    <span class="uppercase text-5xl font-black mb-10">Email Us</span>
    <form wire:submit.prevent="submit" class="w-full">
        @csrf

        <div class="mb-4">
            <label for="name" class="uppercase font-extrabold text-sm mb-2">Full Name</label>
            <input
                type="text"
                id="name"
                wire:model="name"
                class="w-full p-2 border border-black/30 rounded" required>
            @error('name')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>


        <div class="mb-4">
            <label for="email" class="uppercase font-extrabold text-sm mb-2">Email Address</label>
            <input
                type="text"
                id="email"
                wire:model="email"
                class="w-full p-2 border border-black/30 rounded" required>
            @error('email')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6 w-full">
            @component('form-components.input-phone', [
                'label' => 'Phone Number',
                'input_model' => 'phone_number',
                'full_number_model' => 'country_code',
                'country_code_model' => 'country_label',
            ])
            @endcomponent
        </div>
        <div class="mb-8">
            <label for="message" class="uppercase font-extrabold text-sm mb-2">Description About Your Project</label>
            <textarea
                rows="3"
                id="message"
                wire:model="message"
                class="w-full p-2 border border-black/30 rounded" required>
            </textarea>
            @error('message')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>

        @component('components.button', [
            'classes' => 'w-full',
            'name' => 'Submit',
            'theme' => 'dark',
        ])
        @endcomponent

    </form>
</div>
