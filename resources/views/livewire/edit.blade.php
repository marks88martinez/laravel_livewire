<h2>Edit Post</h2>
<h4 >{{ $post_id }}</h4>

@include('livewire.form')
<br>
<button class=" btn btn-primary" wire:click="update">
    Actualizar
</button>
<button class=" btn btn-link" wire:click="default">
    Cancelar
</button>
