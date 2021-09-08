@extends('layouts.app')

@section('title', 'psckInfo')
    
@section('main_content')

<div class="container">
    
    <h2>{{$packInfo->title}}</h2>
    <h4>{{$packInfo->duration}}</h4>
    <p>{{$packInfo->description}}</p>
    <h4>partenza da:{{$packInfo->departure}}</h4>
    <h4>{{$packInfo->price}}$</h4>

    <a href="{{route('home')}}">home</a>
    <a href="{{route('packs')}}">packs</a>
    
</div>
    
    

@endsection