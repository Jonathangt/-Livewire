<div class="from-group">
    <label>Titulo</label>
    <input type="text" class="form-control" wire:model="title">
    @error('title') <span>{{ $message }}</span> @enderror
</div>

<div class="from-group">
    <label>Contenido</label>
    <textarea  rows="10" class="form-control" wire:model="body"></textarea>
    @error('body') <span>{{ $message }}</span> @enderror
</div>