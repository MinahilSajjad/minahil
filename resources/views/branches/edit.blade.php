@extends('layouts.app')

@section('title', 'Edit Branch')

@section('content')
    <h1>Edit Branch</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('branches.update', $branch->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Branch Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $branch->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="code" class="form-label">Branch Code</label>
            <input type="text" name="code" id="code" class="form-control" value="{{ old('code', $branch->code) }}" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea name="address" id="address" class="form-control" rows="3" required>{{ old('address', $branch->address) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="region_id" class="form-label">Region</label>
            <select name="region_id" id="region_id" class="form-select" required>
                <option value="">Select Region</option>
                @foreach($regions as $region)
                    <option value="{{ $region->id }}" {{ (old('region_id', $branch->region_id) == $region->id) ? 'selected' : '' }}>
                        {{ $region->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="district_id" class="form-label">District</label>
            <select name="district_id" id="district_id" class="form-select" required>
                <option value="">Select District</option>
                @foreach($districts as $district)
                    <option value="{{ $district->id }}" {{ (old('district_id', $branch->district_id) == $district->id) ? 'selected' : '' }}>
                        {{ $district->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Branch</button>
        <a href="{{ route('branches.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
