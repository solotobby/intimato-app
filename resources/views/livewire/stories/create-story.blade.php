<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <h1> Create a Story </h1>
    <form wire:submit="post" class="max-w-md mx-auto flex flex-col gap-6  shadow-2l rounded-2xl p-4">
        <!-- Email Address -->
        <flux:input
            wire:model="where_it_happen"
            :label="__('where It Happened')"
            type="text"
            required
            autofocus
            autocomplete="email"
            placeholder="email@example.com"
        />

        <flux:input
            wire:model="age"
            :label="__('How old were you')"
            type="text"
            required
            autofocus
            autocomplete="email"
            placeholder="email@example.com"
        />
        <flux:input
            wire:model="gender"
            :label="__('How old were you')"
            type="text"
            required
            autofocus
            autocomplete="email"
            placeholder="email@example.com"
        />


        <div class="flex items-center justify-end">
            <flux:button variant="primary" type="submit" class="w-full">{{ __('Log in') }}</flux:button>
        </div>
    </form>


</div>
