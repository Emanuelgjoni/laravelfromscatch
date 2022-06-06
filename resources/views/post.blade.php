<x-layout>
    <h1>
     {{$post->title}}</h1>
    <p>{!!$post->body!!}</p>
   
    <h4>Byyyyyy {{$post->author->name}}</h4> 
    <a href="/">Go back</a>
    </x-layout>