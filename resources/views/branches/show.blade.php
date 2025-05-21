@extends('layouts.app')

@section('title', 'View Branch')

@section('content')
    <h1>Branch Details</h1>

    <div class="card p-3">
        <p><strong>Code:</strong> {{ $branch->code }}</p>
        <p><strong>Name:</strong> {{ $branch->name }}</p>
        <p><strong>Region:</strong> {{ $branch->region->name }}</p>
        <p><strong>District:</strong> {{ $branch->district->name }}</p>
        <p><strong>Address:</strong> {{ $branch->address }}</p>
    </div>

    <a href="{{ route('branches.index') }}" class="btn btn-secondary mt-3">Back to List</a>
@endsection
