@extends('admin.templates.base')

@section('mainContent')
    <h1>Insert new Comic</h1>
    <form action="{{route('comics.store')}}" method="post">
        @csrf 
        
        <div>
            <label for="titolo">titolo</label>
            <input type="text" name="titolo" id="titolo">
        </div>
        <div>
            <label for="descrizione">descrizione</label>
            <input type="text" name="descrizione" id="descrizione">
        </div>
        <div>
            <label for="genere">genere</label>
            <input type="text" name="genere" id="genere">
        </div>
        <div>
            <label for="prezzo">prezzo</label>
            <input type="text" name="prezzo" id="prezzo">
        </div>
        <button>Save</button>
    </form>

@endsection