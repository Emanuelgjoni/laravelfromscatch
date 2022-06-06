<x-layout>

    @include('posts-header')
        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            @if($posts->count())
            <x-grid-commponent :posts='$posts' />
                        
            @else
                
            <p class="text-cener">No posts yet</p>
            @endif

            {{-- <div class="lg:grid lg:grid-cols-3">
                <x-post-card/>
    <x-post-card/>
    <x-post-card/>

            </div> --}}
        </main>

     

{{-- @foreach($posts as $post)
    <h1>
    {{$post->title;}}</h1>
    <p>{!!$post->body!!}</p>
    <a href="/posts/{{$post->slug}}">Details</a>
    <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
    <h4>Byyyyyy <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a></h4>
    @endforeach --}}
 </x-layout>