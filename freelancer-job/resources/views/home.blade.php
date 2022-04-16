@extends('layouts.app')

@section('content')

<p>Connexion: {{ auth()->user()->name }}</p>
@endsection