<div>
    <form wire:submit="submit">
        <div>
            <label for="name" class="block">
                Name
            </label>

            <input type="text" wire:model="name">

            @error('name')
                <p class="text-red-600">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <button class="px-4 py-2 font-medium border border-black mt-4">
            Submit
        </button>
    </form>
</div>
