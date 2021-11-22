
<div>
        <div class="w-full h-screen bg-fixed bg-center bg-no-repeat bg-cover">

    <div class="flex flex-col items-center justify-center h-screen p-3 font-bold text-center text-black rounded">
        <button wire:click="$toggle('getQuote')" class="px-4 py-2 font-semibold text-blue-700 bg-white border border-blue-500 rounded hover:bg-white-500 hover:text-blue hover:border-transparent">Click for Quote </button>
        @if ($getQuote)
        <livewire:kanye-api/>
        @else
        @endif

    </div>
    </div>
    </div>





