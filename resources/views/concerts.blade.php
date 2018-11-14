@extends('layouts.app')
@section('title', 'Series')
@section('content')
<h1>list concert</h1>

<table>
    {{-- <form action="filter" method="post">
        <select name="filter">
            @foreach ($lieux as $lieu )
                <option value="{{ $lieu->id }}">{{ $lieu->name }}</option>
            @endforeach
        </select>
        <input type="submit" class="btn" value="filter">
    </form>  --}}

    <tr>
        <th>Name</th>
        <th>salle</th>
        <th>lieu</th>
        <th>dispo</th>
        <th>Update</th>
        <th>Delete</th>

    </tr>
    @foreach ($concerts as $concert)
    <tr>
        <td>{{ $concert->name }}</td>
        <td>{{ $concert->salle->name }}</td>
        <td>{{ $concert->lieu->name }}</td>
        <td>{{ $concert->dispo }}</td>

        <td>
            <form class="" action="/updateConcertForm" method="post">
                @csrf
                <input type="hidden" class="btn" name="id" value="{{ $concert->id }}">
                <input type="submit" class="btn" name="" value="UP">
            </form>
        </td>

        <td>
            <form class="" action="/deleteConcert" method="post">
                @csrf
                    <input type="hidden" class="btn" name="id" value="{{ $concert->id }}">
                    <input type="submit" class="btn" name="" value="X">
            </form>
        </td>
    </tr>
    @endforeach
    
    <form action="/insertConcert" method="post">
        @csrf
        <tr>
            <td><input placeholder="Name" type="text" name="name" value="" required></td>
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
            <td></td>
        </tr>
    </form>
</table>

@endsection