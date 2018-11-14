@extends('layouts.app')
@section('title', 'Series')
@section('content')
<h1>list concert</h1>

<form action="/updateSalle" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $salle->id }}">
    <input placeholder="Name" type="text" name="name" value="{{ $salle->name }}" required>
    <input type="submit" class="btn" value="insert">

</form>

@endsection