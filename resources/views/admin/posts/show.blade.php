@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="mb-3">
                    {{$post->author}}
                </h2>

                <div class="mb-3">
                    @if(str_starts_with($post->image, 'https://') || str_starts_with($post->image, 'http://'))
                        <img src="{{ $post->image }}" alt="image of {{$post->title}}">
                    @else
                        <img src="{{ asset('/storage') . '/' . $post->image }}" alt="image of {{$post->title}}">
                    @endif
                </div>

                <p>
                    {{$post->description}}
                </p>

                <h5>Il post appartiene a:</h5>
                @foreach ($post->categories as $category)
                    <span>{{$category->name}}</span>
                @endforeach
            </div>
        </div>
    </div>

@endsection