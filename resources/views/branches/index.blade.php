<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Branch Network</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Custom Styling -->
  <style>
    body {
      background-color: #f8f9fa;
      font-family: "Segoe UI", sans-serif;
    }
    .container {
      background-color: #fff;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
    }
    h2 i {
      color: #0d6efd;
    }
    .table thead {
      background-color: #198754;
      color: #fff;
    }
    .btn-outline-success:hover {
      background-color: #198754;
      color: #fff;
    }
    .btn-outline-warning:hover {
      background-color: #ffc107;
      color: #000;
    }
    .btn-outline-danger:hover {
      background-color: #dc3545;
      color: #fff;
    }
    .btn-add {
      background: linear-gradient(45deg, #28a745, #20c997);
      border: none;
      color: #fff;
    }
    .btn-add:hover {
      background: linear-gradient(45deg, #218838, #17a2b8);
    }
  </style>
</head>
<body>
{{-- @extends('branchnetwork') --}}

{{-- @section('content') --}}
  <div class="container my-5">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="mb-0 text-primary fw-bold">
        <i class="bi bi-bank2 me-2"></i> Branch Network
      </h2>
      <a href="{{ route('branches.create') }}" class="btn btn-add px-4 py-2 rounded-pill fw-semibold shadow d-flex align-items-center gap-2">
        <i class="bi bi-plus-circle-fill"></i> Add Branch
      </a>
    </div>

    <!-- Branches Table -->
    <div class="table-responsive shadow-sm border rounded">
      <table class="table table-bordered table-hover align-middle mb-0">
        <thead class="text-center">
          <tr>
            <th scope="col">Code</th>
            <th scope="col">Name</th>
            <th scope="col">Region</th>
            <th scope="col">District</th>
            <th scope="col">Address</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @forelse($branches as $branch)
            <tr>
              <td class="fw-medium text-primary">{{ $branch->code }}</td>
              <td>{{ $branch->name }}</td>
              <td>{{ $branch->region->name ?? 'N/A' }}</td>
              <td>{{ $branch->district->name ?? 'N/A' }}</td>
              <td>{{ $branch->address }}</td>
              <td class="text-center">
                <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-2">
                  <div class="d-flex gap-2">
                    <a href="{{ route('branches.show', $branch->id) }}" class="btn btn-sm btn-outline-success rounded-pill px-3 d-flex align-items-center gap-1">
                      <i class="bi bi-eye-fill"></i> View
                    </a>
                    <a href="{{ route('branches.edit', $branch->id) }}" class="btn btn-sm btn-outline-warning rounded-pill px-3 d-flex align-items-center gap-1">
                      <i class="bi bi-pencil-fill"></i> Edit
                    </a>
                  </div>
                  <form action="{{ route('branches.destroy', $branch->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this branch?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill px-3 d-flex align-items-center gap-1">
                      <i class="bi bi-trash-fill"></i> Delete
                    </button>
                  </form>
                </div>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="6" class="text-center text-muted py-4">
                <i class="bi bi-info-circle"></i> No branches found.
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>


  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  {{-- @endsection --}}
</body>
</html>