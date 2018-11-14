@extends('layouts.app')
@section('title', 'Series')
@section('content')
<h1>list concert</h1>
<form action="/updateConcert" method="post">
    @csrf
    <tr>
            <input type="hidden" name="id" value="{{ $concert->id }}">
        <td><input placeholder="Name" type="text" name="name" value="{{ $concert->name }}" required></td>
        <td>
        <select name="salle">
            @foreach ($salles as $salle)
                <option value="{{ $salle->id }}">
                    {{ $salle->name }}
                </option>
            @endforeach
        </select></td>

        <td>
        <select name="lieu">
            @foreach ($lieux as $lieu)
                <option value="{{ $lieu->id }}">
                    {{ $lieu->name }}
                </option>
            @endforeach
        </select></td>

        <td>
        <select name="dispo">
                <option value="1">Dispo</option>
                <option value="0">Pas dispo</option>
        </select></td>

        <td><input placeholder="Name" type="submit" class="btn" value="insert"></td>
    </tr>
</form>
{{-- <form action="/updateSalle" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $salle->id }}">
    <input placeholder="Name" type="text" name="name" value="{{ $salle->name }}" required>
    <input type="submit" class="btn" value="insert">

</form> --}}

@endsection