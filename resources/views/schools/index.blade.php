<!DOCTYPE html>
<html>
<head>
    <title>School List</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between mb-3">
        <h2>School List</h2>

        <a href="{{ route('schools.create') }}" class="btn btn-primary">
            Add School
        </a>
    </div>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-bordered table-striped table-hover">

                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>School</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Principal</th>
                        <th width="150px">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($schools as $school)
                    <tr>
                        <td>{{ $school->school_id }}</td>
                        <td>{{ $school->school_name }}</td>
                        <td>{{ $school->address }}</td>
                        <td>{{ $school->phone }}</td>
                        <td>{{ $school->email }}</td>
                        <td>{{ $school->principal_name }}</td>

                        <td>

                            <a href="{{ route('schools.edit',$school->school_id) }}" 
                               class="btn btn-warning btn-sm">
                               Edit
                            </a>

                            <form action="{{ route('schools.destroy',$school->school_id) }}" 
                                  method="POST" 
                                  style="display:inline">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm">
                                    Delete
                                </button>

                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>

</div>

</body>
</html>