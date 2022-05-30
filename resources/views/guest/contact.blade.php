@extends('layouts.app')

@section('content')
    <div class="container m-auto">
        <div class="row">
            <div class="col-12">
                <h1>Contattaci</h1>

                <form action="{{route('guest.contactStore')}}" method="post" class="rounded-2">
                    @csrf
                    @method('POST')

                    <div class="mb-3">
                        <label for="guestName">Inserisci il tuo nome</label>
                        <input type="text" name="guestName">
                    </div>

                    <div class="mb-3">
                        <label for="guestEmail">Inserisci la tua email</label>
                        <input type="email" name="guestEmail">
                    </div>
                    
                    <div>
                        <label for="emailMessage">Scrivi la mail</label>
                        <input type="text" name="mailSent" class="mb-3 ">
                    </div>

                    <br>
                    <button type="submit" class="btn btn-success">Invia</button>
                </form>
            </div>
        </div>
    </div>
@endsection

<style scoped>
    input{
        width: 500px;
        height: 100px;
        background-color: lightgray;
    }
</style>