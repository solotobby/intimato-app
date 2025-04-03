<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <center>
        <h1 class="text-lg"> Create a Story </h1>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

    </center>

    <hr>

    <form wire:submit="post" class="max-w-md mx-auto flex flex-col gap-6  shadow-2l rounded-2xl p-4">
        <!-- Email Address -->
        <flux:input
            wire:model="where_it_happen"
            :label="__('Where It Happened')"
            type="text"
            required
            autofocus
            placeholder="In the house"
        />

        <flux:input
            wire:model="age"
            :label="__('How old were you')"
            type="text"
            required
            placeholder="18"
        />
        <flux:select  wire:model="gender" placeholder="Select Gender"  :label="__('Gender')" required>
            <flux:select.option>Male</flux:select.option>
            <flux:select.option>Female</flux:select.option>
        </flux:select>

        <flux:fieldset>
            <flux:legend>How would you rate the experience</flux:legend>
            {{-- <flux:description>Select the rating.</flux:description> --}}
            <flux:radio.group wire:model="rating">
                <div class="flex gap-4 *:gap-x-2">
                    <flux:radio  value="2" label="1"  />
                    <flux:radio  value="4" label="2"  />
                    <flux:radio  value="6" label="3" />
                    <flux:radio  value="8" label="4" />
                    <flux:radio  value="10" label="5" />
                </div>
            </flux:radio.group>
        </flux:fieldset>

        <flux:select  wire:model="category" placeholder="Select Category"  :label="__('Category')" required>
            <flux:select.option>Straight</flux:select.option>
            <flux:select.option>Bi-sexual</flux:select.option>
            
        </flux:select>

        <flux:textarea
            wire:model="story"
            label="Order notes"
            placeholder="Describe everything that happened and how you felt. Be detailed as much as you can"
        />
    
        <div class="flex items-center justify-end">
            <flux:button variant="primary" type="submit" class="w-full">{{ __('Submit Story') }}</flux:button>
        </div>
    </form>


</div>
