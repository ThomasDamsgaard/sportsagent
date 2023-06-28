<div wire:ignore x-data x-init="FilePond.registerPlugin(FilePondPluginImagePreview);
FilePond.registerPlugin(FilePondPluginFileValidateType);
FilePond.setOptions({
    allowMultiple: {{ isset($attributes['multiple']) ? 'true' : 'false' }},
    server: {
        process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
            @this.upload('{{ $attributes['wire:model'] }}', file, load, error, progress)
        },
        revert: (filename, load, error) => {
            @this.removeUpload('{{ $attributes['wire:model'] }}', filename, load)
        }
    }
});
FilePond.create($refs.input);">
    <label for="files" class="sr-only">Attachments</label>
    <input id="files" x-ref="input" type="file">
</div>

@push('styles')
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
    <style>
        .filepond--root {
            font-family: Nunito, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            /* max-height: 10rem; */
            font-size: 0.875rem;
        }

        /* the text color of the drop label*/
        .filepond--drop-label {
            color: rgb(75 85 99);
            line-height: 1.25rem;
        }

        /* underline color for "Browse" button */
        .filepond--label-action {
            --tw-text-opacity: 1;
            color: rgb(79 70 229 / var(--tw-text-opacity));
            text-decoration-color: transparent;
            font-weight: 500;
        }

        /* the background color of the filepond drop area */
        .filepond--panel-root {
            background-color: #eee;
        }

        /* the border radius of the drop area */
        .filepond--panel-root {
            border-radius: 0.5em;
        }

        /* the border radius of the file item */
        .filepond--item-panel {
            border-radius: 0.5em;
        }

        /* the background color of the file and file panel (used when dropping an image) */
        .filepond--item-panel {
            background-color: #555;
        }

        /* the background color of the drop circle */
        .filepond--drip-blob {
            background-color: #999;
        }

        /* the background color of the black action buttons */
        .filepond--file-action-button {
            background-color: rgba(0, 0, 0, 0.5);
        }

        /* the icon color of the black action buttons */
        .filepond--file-action-button {
            color: white;
        }

        /* the color of the focus ring */
        .filepond--file-action-button:hover,
        .filepond--file-action-button:focus {
            box-shadow: 0 0 0 0.125em rgba(255, 255, 255, 0.9);
        }

        /* the text color of the file status and info labels */
        .filepond--file {
            color: white;
        }

        /* error state color */
        [data-filepond-item-state*='error'] .filepond--item-panel,
        [data-filepond-item-state*='invalid'] .filepond--item-panel {
            background-color: red;
        }

        [data-filepond-item-state='processing-complete'] .filepond--item-panel {
            background-color: green;
        }

        /* bordered drop area */
        .filepond--panel-root {
            background-color: transparent;
            border-radius: 0.375rem;
            border: 2px;
            border-style: dashed;
            --tw-border-opacity: 1;
            border-color: rgb(209 213 219 / var(--tw-border-opacity));
        }

        .filepond--credits {
            display: none;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
@endpush
