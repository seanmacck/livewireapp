@if ($showWomenText == true)
<livewire:second-component/>
@else
@endif

@if ($showMenText)
<livewire:men-component/>
@else
@endif

@if ($showCompanyText)
<livewire:company-component/>
@else
@endif





<div>
    <div class="w-full h-screen bg-fixed bg-center bg-no-repeat bg-cover"


style="background-image: url('https://cdn.pixabay.com/photo/2019/10/23/06/30/hamburg-4570577_960_720.jpg');">

<div class="flex flex-col items-center justify-center h-screen p-3 font-bold text-center text-white rounded">
    <h2 class="text-3xl font-bold text-center">New Arrivals are here</h2>

    <p class="p-2 text-xl font-normal rounded bg-grey-400">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>

    <button wire:click="$toggle('showDiv')" class="px-4 py-2 font-semibold text-blue-700 bg-white border border-blue-500 rounded hover:bg-white-500 hover:text-blue hover:border-transparent">Shop New Arrivals</button>

</div>
</div>
</div>








