<x-guest-layout>
    <form method="POST" action="{{ route('products') }}">
        @csrf
        <div>
            <h1>Add New Product</h1>
        </div>

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Slug -->
        <div class="mt-4">
            <x-input-label for="slug" :value="__('Slug')" />
            <x-text-input id="slug" class="block mt-1 w-full" type="text" name="slug" :value="old('slug')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('slug')" class="mt-2" />
        </div>

        <!-- Description -->
        <div class="mt-4">
            <x-input-label for="description" :value="__('Description')" />

            <x-text-input id="description" class="block mt-1 w-full"
                            type="text"
                            name="description"
                            required autocomplete="new-description" />

            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <!-- Price -->
        <div class="mt-4">
            <x-input-label for="price" :value="__('Price')" />

            <x-text-input id="price" class="block mt-1 w-full"
                            type="decimal"
                            name="price"
                            required autocomplete="new-price" />

            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Add Product') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
