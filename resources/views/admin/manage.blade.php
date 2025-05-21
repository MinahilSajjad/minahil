{{-- resources/views/admin/manage.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container my-4">
    <!-- Flash Message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Add Branch Button -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold mb-0">Branch Network (Total: {{ $branches->count() }})</h4>
        <a href="{{ route('branches.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Add Branch
        </a>
    </div>

    <!-- Branches Table -->
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white fw-semibold">
            Branch Network List
        </div>
        <div class="card-body p-0">
            <table class="table table-bordered table-hover mb-0">
                <thead class="table-light text-center">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Region</th>
                        <th>District</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($branches as $branch)
                        <tr>
                            <td class="text-center">{{ $branch->id }}</td>
                            <td>{{ $branch->name }}</td>
                            <td>{{ $branch->region->name ?? 'N/A' }}</td>
                            <td>{{ $branch->district->name ?? 'N/A' }}</td>
                            <td class="text-center">
                                <a href="{{ route('branches.show', $branch->id) }}" class="btn btn-sm btn-info text-white">View</a>
                                {{-- <a href="{{ route('branches.edit', $branch->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('branches.destroy', $branch->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE') --}}
                                {{-- <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button> --}}
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">No branches found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
