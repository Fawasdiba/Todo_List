@extends('layouts.sidebar')
<link rel="stylesheet" href="{{ asset('assets/css/tasks/app.css') }}">
@section('content')
    {{-- <div class="container mb-5 mt-4">

    </div> --}}
    <!-- Judul Halaman -->
    <div class="d-flex align-items-center page-title mb-3 mt-5" style="margin-left: 20px">
        <i class="fas fa-clipboard-list me-2"></i>
        <span>All Tasks</span>
    </div>

    <!-- Baris Search & Tombol Tambah -->
    <div class="row mb-2" style="margin-top: 4%; margin-left: 0px;">
        <!-- Kolom Tombol Tambah -->
        <div class="col-md-12 text-md-end">
            <a href="{{ route('task.create') }}" class="btn btn-custom">
                <i class="fas fa-plus me-1"></i>
                <span>Add Tasks</span>
            </a>
        </div>
    </div>
    <table class="custom-table">
        <thead class="thead-custom text-center">
            <tr>
                <th>No</th>
                <th>Tasks Name</th>
                <th>Status</th>
                <th>Priority</th>
                <th>Start Date</th>
                <th>Due Date</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($latestTaskCount as $task)
            <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                <td>{{ $task->tasks_name }}</td>
                <td>{{ $task->status }}</td>
                <td>{{ $task->priority }}</td>
                <td>{{ $task->created_at->format('d M Y') }}</td>
                <td>{{ $task->due_date }}</td>
                <td>{{ $task->description }}</td>
                <td>
                    <!-- Tombol untuk membuka modal -->
                    <button type="button" class="btn btn-sm btn-custom1" data-bs-toggle="modal"
                        data-bs-target="#confirmationModal{{ $task->id}}">
                        <i class="fas fa-check"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="confirmationModal{{ $task->id }}" tabindex="-1"
                        aria-labelledby="confirmationModalLabel{{ $task->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-success text-white">
                                    <h5 class="modal-title" id="confirmationModalLabel{{ $task->id }}">Confirm Task Completion</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p class="mb-0">Are you sure you want to mark this task as done?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <form action="{{ route('task.markAsDone', $task->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Completed
                                            Tasks</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('task.edit', $task->id) }}" class="btn btn-sm btn-custom2">
                        <i class="fas fa-pen-to-square"></i>
                    </a>

                    <a class="btn btn-sm btn-custom3" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $task->id }}">
                        <i class="fas fa-trash"></i>
                    </a>

                    <form action="{{ route('task.destroy', $task->id) }}" method="POST" id="deleteForm{{ $task->id }}">
                        @csrf
                        @method('DELETE')
                        <div class="modal fade" id="deleteModal{{ $task->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $task->id }}"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger text-white">
                                        <h5 class="modal-title" id="deleteModalLabel{{ $task->id }}">Confirm Deletion</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="mb-0">You sure you wanna delete this task?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $task->id }}" data-id="#">
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    {{ $latestTaskCount->links() }}
                </ul>
            </nav>
        </tbody>
    </table>
@endsection
