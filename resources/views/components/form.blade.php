<div class="flex flex-col items-center h-full w-full mx-auto mb-32">
    <span class="uppercase text-5xl font-black mb-10">{{ $title }}</span>
    <form wire:submit.prevent="submit" class="w-full">
        @csrf

        <div class="mb-4">
            <label for="name" class="uppercase font-extrabold text-sm mb-2">Full Name</label>
            <input
                placeholder="Full Name"
                type="text"
                id="name"
                wire:model="name"
                class="form-input placeholder-black/30 placeholder:font-thin placeholder:text-sm"
                required>
            @error('name')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>


        <div class="mb-4">
            <label for="email" class="uppercase font-extrabold text-sm mb-2">Email Address</label>
            <input
                placeholder="Email Address"
                type="text"
                id="email"
                wire:model="email"
                class="form-input placeholder-black/30 placeholder:font-thin placeholder:text-sm"
                required>
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
                placeholder="Description"
                class="form-input placeholder-black/30 placeholder:font-thin placeholder:text-sm" required>
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
