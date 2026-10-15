@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
    <div class="card">
        <div class="card-body">
            <p class="card-text">{{ $viewData["description"] }}</p>
            <p class="card-text">{{ $viewData["author"] }}</p>
        </div>
    </div>
@endsection
