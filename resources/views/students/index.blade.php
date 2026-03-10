@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Students List</h1>

    <!-- Success message after add/update/delete -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Add New Student Button -->
    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add New Student</a>

    <!-- Students Table -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
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
                @forelse ($students as $student)
                    <tr>
                        <td>{{ $student->student_id }}</td>
                        <td>{{ $student->student_name }}</td>
                        <td>{{ $student->gender ?? '-' }}</td>
                        <td>{{ $student->class ?? '-' }}</td>
                        <td>{{ $student->section ?? '-' }}</td>
                        <td>{{ $student->phone ?? '-' }}</td>
                        <td>
                            {{ $student->admission_date ? date('d-m-Y', strtotime($student->admission_date)) : '-' }}
                        </td>
                        <td>
                            <!-- Edit link - stays on same page with ?edit= parameter -->
                            <a href="{{ route('students.index') }}?edit={{ $student->student_id }}"
                               class="btn btn-sm btn-warning">Edit</a>

                            <!-- Delete -->
                            <form action="{{ route('students.destroy', $student->student_id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center py-4">No students found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{ $students->links() }}