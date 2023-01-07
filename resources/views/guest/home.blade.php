@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            @if (! Auth::check())
                <h1>Ciao</h1>
            @endif
        </div>
    </div>
</div>
    
@endsection
