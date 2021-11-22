<div>

    <div class="cursor-pointer" wire:click="$set('section','home')">Home</div>
    <div class="cursor-pointer" wire:click="$set('section','about')">About</div>



    @if ($section == 'home')
        This is my home
    @endif

    @if ($section == 'about')
        This is my about
    @endif

</div>
