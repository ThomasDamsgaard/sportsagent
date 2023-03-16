<div>
    <a wire:click="$set('confirmingAttachmentDeletion', 'true')" class="font-medium text-red-600 hover:text-red-500">Delete</a>

    <x-jet-confirmation-modal wire:model="confirmingAttachmentDeletion">
        <x-slot name="title">
            Delete Attachment
        </x-slot>

        <x-slot name="content">
            Are you sure you want to delete this attachment? It will be permanently deleted.
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('confirmingAttachmentDeletion')" wire:loading.attr="disabled">
                Close
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2" wire:click="delete({{ $item->id }})" wire:loading.attr="disabled">
                Delete Attachment
            </x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>
</div>
