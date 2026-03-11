@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Students List</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add New Student</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Phone</th>
                    <th>Admission Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->student_id }}</td>
                        <td>{{ $student->student_name }}</td>
                        <td>{{ $student->gender }}</td>
                        <td>{{ $student->class }}</td>
                        <td>{{ $student->section ?? '-' }}</td>
                        <td>{{ $student->phone ?? '-' }}</td>
                        <td>{{ date('d-m-Y', strtotime($student->admission_date)) }}</td>
                        <td>
                            <a href="{{ route('students.edit', $student) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $students->links() }}
    </div>
@endsection