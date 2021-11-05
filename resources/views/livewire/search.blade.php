<div>
    <h2 class="text-xl text-gray-500">Search form</h2>

    <input wire:model.defer="searchText" class="text-black text-whiteLorem Ipsum is simply dummy text of the printing and typesetting industry."
     type="text"/>

        <br/>

        <button wire:click="searchBtn" class="px-2 py-3 text-white bg-gray-500 rounded">Search</button>

</br>

<div class="text-white">{{ $searchText }}</div>

</div>
