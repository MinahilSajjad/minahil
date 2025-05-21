{{-- resources/views/admin/partials/branch.blade.php --}}
<div class="table-responsive mt-3">
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Branch Name</th>
                <th>District</th>
                <th>Region</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($branches as $branch)
                <tr>
                    <td>{{ $branch->id }}</td>
                    <td>{{ $branch->name }}</td>
                    <td>{{ $branch->district->name ?? 'N/A' }}</td>
                    <td>{{ $branch->region->name ?? 'N/A' }}</td>
                    <td>{{ $branch->created_at->format('Y-m-d') }}</td>
                    <td>
                        <a href="{{ route('branches.edit', $branch->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('branches.destroy', $branch->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this branch?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No branches found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
