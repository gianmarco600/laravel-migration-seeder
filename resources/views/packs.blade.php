@extends('layouts.app')

@section('title', 'pscks')
    
@section('main_content')

<div class="container">
    
    @foreach ($packs as $pack)
        <div>
            <h2>{{$pack->title}}</h2>
            <p>{{$pack->price}}</p>
            <span>partenza da:{{$pack->departure}}</span>
            @if ($pack->availability == 0)
                <p>al momento non disponibile</p>
                
            @else
                <p>disponibile ora!</p>
                <a href="{{route('packInfo' , ['id' => $pack->id ])}}">piu info</a>

            @endif
            
        </div>
    @endforeach
    
    
</div>
    
    

@endsection