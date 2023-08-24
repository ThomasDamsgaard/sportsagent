<form wire:submit.prevent="save">
    <x-jet-filepond wire:model="files" multiple />
    @error('files')
        <p class="my-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
    <button type="submit" wire:loading.attr="disabled" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save Attachment</button>
</form>
