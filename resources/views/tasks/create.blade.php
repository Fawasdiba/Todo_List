@extends('layouts.sidebar')
<link rel="stylesheet" href="{{ asset('assets/css/tasks/app.css') }}">
@section('content')
    <div class="p-5 mb-5 mt-4">
        <div class="d-flex align-items-center page-title mb-4" style="margin-left: 20px">
            <span>Add New Tasks</span>
        </div>

        <form class="create" action="{{ route('task.store') }}" method="POST">
            @csrf
            <!-- Input untuk Judul Tugas -->
            <div class="mb-3">
                <label for="task_name" class="form-label">Task Name</label>
                <input type="text" class="form-control" id="task_name" name="tasks_name" placeholder="Enter Task Name"
                    required>
            </div>

            <!-- Input untuk Status -->
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status" id="status" required>
                    <option value="" disabled selected>Choose Status</option>
                    <option value="Pending">Pending</option>
                    <option value="In Progress">In Progress</option>
                    <option value="Completed">Completed</option>
                </select>
            </div>

            <!-- Input untuk Priority -->
            <div class="mb-3">
                <label for="priority" class="form-label">Priority</label>
                <select class="form-select" name="priority" id="priority" required>
                    <option value="" disabled selected>Choose Priority</option>
                    <option value="Low">Low</option>
                    <option value="Medium">Medium</option>
                    <option value="High">High</option>
                </select>
            </div>

            <!-- Input untuk Tanggal Deadline -->
            <div class="mb-3">
                <label for="due_date" class="form-label">Due Date</label>
                <input type="date" class="form-control" id="due_date" name="due_date" required>
            </div>

            <!-- Input untuk Deskripsi Tugas -->
            <div class="mb-5">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="4" name="description" placeholder="Enter Task Description"
                    required></textarea>
            </div>

            <!-- Tombol Submit -->
            <div class="text-end">
                <a href="{{ route('tasks.index') }}" class="btn btn-cancel me-3">
                    <span>Cancel</span>
                </a>
                <button type="submit" class="btn btn-create">
                    <span>Create Tasks</span>
                </button>
            </div>
        </form>
    </div>
@endsection
