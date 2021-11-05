@extends('layouts.layout')

@section('content')

<h2>Livewire one</h2>

<livewire:search/>

<livewire:show-posts :post="1"/>
<livewire:show-posts :post="2"/>
<livewire:show-posts :post="3"/>
<livewire:first-component/>


<livewire:second-component/>

<div class="p-4 mt-6 text-white">
    <livewire:message/>
</div>

@endsection
