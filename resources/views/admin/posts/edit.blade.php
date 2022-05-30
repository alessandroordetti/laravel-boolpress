@extends('layouts.app')

@section('content')
    <h1>
        Modifica il post
    </h1>
    <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="author">Author</label>
        <input type="text" name="author" id="author" value="{{$post->author}}">
        @error('name')
            <div class="alert">
                {{$message}}
            </div>
        @enderror
        <br>
        @foreach ($categories as $category)
            <label for="category">{{$category->name}}</label>
            <input type="checkbox" name="category[]" id="category" value="{{$category->id}}" {{ $post->categories->contains($category) ? 'checked' : '' }}>
        @endforeach
        @error('name')
            <div class="alert">
                {{$message}}
            </div>
        @enderror
        <br>
        <label for="content">Title</label>
        <input type="text" name="title" id="title" value="{{$post->title}}">
        @error('name')
            <div class="alert">
                {{$message}}
            </div>
        @enderror
        <br>
        <label for="content">Image</label>
        <input type="text" name="image" id="image" value="{{$post->image}}">
        @error('name')
            <div class="alert">
                {{$message}}
            </div>
        @enderror
        <br>
        <label for="content">Description</label>
        <input type="text" name="description" id="title" value="{{$post->description}}">
        @error('name')
            <div class="alert">
                {{$message}}
            </div>
        @enderror
        <br>
        <label for="content">Date</label>
        <input type="text" name="date" id="date" value="{{$post->date}}">
        @error('name')
            <div class="alert">
                {{$message}}
            </div>
        @enderror
        <br>
        <button type="submit">Inserisci il nuovo post</button>
    </form>
@endsection