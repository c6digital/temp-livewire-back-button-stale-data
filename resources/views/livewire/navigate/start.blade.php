<div>
    <p>
        When you click the button below, it will show some loading text and after 3 seconds redirect you to the next page.
    </p>

    <button wire:click="next" class="px-4 py-2 font-medium border border-black mt-4">
        <span wire:loading.remove>Next</span>
        <span wire:loading>Loading...</span>
    </button>
</div>
