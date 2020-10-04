
@extends('layouts.app')



@section('content')
<h1>contact page new</h1>
@stop

@if(count($people))
<ul>
 @foreach($people as $person)
 <li>
     {{$person}}
 </li>
    
 @endforeach
</ul>
@endif

@section('footer')

<h3>hesham laravel</h3>
     @stop