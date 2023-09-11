<div>
    <a wire:click="$set('confirmingAttachmentDeletion', 'true')" class="cursor-pointer font-medium text-red-600 hover:text-red-500">Delete</a>

    <x-confirmation-modal wire:model.live="confirmingAttachmentDeletion">
        <x-slot name="title">
            Delete Attachment
        </x-slot>

        <x-slot name="content">
            Are you sure you want to delete this attachment? It will be permanently deleted.
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('confirmingAttachmentDeletion')" wire:loading.attr="disabled">
                Close
            </x-secondary-button>

            <x-danger-button class="ml-2" wire:click="delete({{ $item->id }})" wire:loading.attr="disabled">
                Delete Attachment
            </x-danger-button>
        </x-slot>
    </x-confirmation-modal>
</div>
