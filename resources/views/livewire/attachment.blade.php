<form wire:submit="save">
    <x-filepond wire:model.live="files" multiple />
    @error('files')
        <p class="my-2 text-sm text-red-600">{{ $message }}</p>
    @enderror

    <button type="submit" wire:loading.attr="disabled" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:opacity-50">
        Save Attachment(s)
        <span wire:loading wire:target="files">
            <x-loading class="ml-4" />
        </span>
    </button>
</form>
