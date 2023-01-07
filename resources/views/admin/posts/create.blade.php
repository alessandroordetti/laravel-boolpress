@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>
                Crea un nuovo post
            </h1>

{{--             <h4>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{$error}}
                                </li>
                            @endforeach
                        </ul>
                    </div>     
                @endif
            </h4> --}}
{{-- 
            @if (Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
            @endif --}}

            <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <label for="author">Author</label>
                <input type="text" name="author" id="author">
                @error('author')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                <br>
                @foreach ($categories as $category)
                    <label for="category">{{$category->name}}</label>
                    <input type="checkbox" name="category[]" id="category" value="{{$category->id}}">
                @endforeach
                @error('category')
                    <div class="alert">
                        {{$message}}
                    </div>
                @enderror
                <br>
                <label for="content">Title</label>
                <input type="text" name="title" id="title">
                @error('title')
                    <div class="alert">
                        {{$message}}
                    </div>
                @enderror
                <br>
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
                @error('image')
                    <div class="alert">
                        {{$message}}
                    </div>
                @enderror
                <br>
                <label for="content">Description</label>
                <input type="text" name="description" id="description">
                @error('description')
                    <div class="alert">
                        {{$message}}
                    </div>
                @enderror
                <br>
                <label for="content">Date</label>
                <input type="text" name="date" id="date">
                @error('date')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                <br>
                <button type="submit">Inserisci il nuovo post</button>
            </form>
        </div>
    </div>
</div>

@endsection