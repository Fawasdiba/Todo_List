@extends('layouts.sidebar')
<link rel="stylesheet" href="{{ asset('assets/css/tasks/custom.css') }}">
@section('content')
    {{-- <div class="container mb-5 mt-4">
    </div> --}}
    <div class="d-flex align-items-center page-title mt-5 mb-5" style="margin-left: 20px">
        <i class="fas fa-house"></i>
        <span>Dashboard</span>
    </div>

    <div class="card-container">
        <div class="card shadow">
            <div class="row">
                <div class="col-7">
                    <div class="card-content">
                        <div class="card-title">All Tasks Count</div>
                        <div class="card-count">{{ $taskCount }}</div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="card-icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow">
            <div class="row">
                <div class="col-7">
                    <div class="card-content">
                        <div class="card-title">Completed</div>
                        <div class="card-count">{{ $completedTaskCount }}</div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="card-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow">
            <div class="row">
                <div class="col-7">
                    <div class="card-content">
                        <div class="card-title">Pending</div>
                        <div class="card-count">{{ $pendingTaskCount }}</div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="card-icon">
                        <i class="fas fa-hourglass-half"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow">
            <div class="row">
                <div class="col-7">
                    <div class="card-content">
                        <div class="card-title">In Progress</div>
                        <div class="card-count">{{ $inProgressTaskCount }}</div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="card-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <table class="custom-table">
        <thead class="thead-custom text-center">
            <tr>
                <th>No</th>
                <th>Tasks Name</th>
                <th>Priority</th>
                <th>Due Date</th>
                <th>Description</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($latestTaskCount as $task)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $task->tasks_name }}</td>
                <td>{{ $task->priority }}</td>
                <td>{{ $task->due_date }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
