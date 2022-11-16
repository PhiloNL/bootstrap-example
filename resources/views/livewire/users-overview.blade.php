<x-wire-elements-pro::bootstrap.modal on-submit="save">
    <x-slot name="title">Overview</x-slot>



    <x-slot name="buttons">
        <button class="btn btn-primary" type="submit">
            Save Changes
        </button>
        <button class="btn btn-secondary" type="button" wire:click="$emit('modal.close')">
            Cancel
        </button>
    </x-slot>
</x-wire-elements-pro::bootstrap.modal>
