@extends('layouts.layout')

@section('content')

<h2 class="text-white-200">Livewire one</h2>

<livewire:search/>

<livewire:show-posts :post="1"/>

<livewire:first-component/>


<livewire:second-component/>

<div class="p-4 mt-6 text-white">
    <livewire:message/>
</div>

@endsection
