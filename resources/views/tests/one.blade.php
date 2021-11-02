@extends('layouts.layout')

@section('content')
<div class="flex items-center">
    <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Test1</a></div>
 </div>

 <div class="links">
  This is test
  {{ $haystack ?? ''}}
  {{ $needle ?? '' }}
</div>
@endsection
