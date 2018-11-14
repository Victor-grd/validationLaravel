@extends('layouts.app')
@section('title', 'Series')
@section('content')
<h1>list concert</h1>

<table>
    <tr>
        <th>Name</th>
        <th>update</th>
        <th>delete</th>

    </tr>
    @foreach ($salles as $salle)
    <tr>
        <td>{{ $salle->name }}</td>
        <td>
            <form class="" action="/updateSalleForm" method="post">
                @csrf
                <input type="hidden" class="btn" name="id" value="{{ $salle->id }}">
                <input type="submit" class="btn" name="" value="UP">
            </form>
        </td>

        <td>
            <form class="" action="/deleteSalle" method="post">
                @csrf
                    <input type="hidden" class="btn" name="id" value="{{ $salle->id }}">
                    <input type="submit" class="btn" name="" value="X">
            </form>
        </td>
    </tr>
    @endforeach
    <form action="/insertSalle" method="post">
        @csrf
        <tr>
            <td><input placeholder="Name" type="text" name="name" value="" required></td>
            <td><input placeholder="Name" type="submit" class="btn" value="insert"></td>
        </tr>
    </form>
</table>

@endsection
