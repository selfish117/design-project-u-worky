@extends('layouts.master')

@section('title')
    Candidates
@endsection

@section('navbar')
@include('partials.navbar', ['type' => 1])
@endsection

@section('poster')
{{-- @include('dashboard.poster') --}}
@endsection



@section('footer')
@include('partials.footer')
@endsection
