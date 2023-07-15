@extends('master')

@section('title', $title)

@section('setup')
    {{-- SECTION UNTUK DEKLARASI STYLE / SCRIPTS CUSTOM --}}
@endsection

@section('content')

    <h1 class="text-xl">Heading</h1>
    
    @include('templates.extra')

@endsection
