@extends('layouts.sidebar')
@section('content')
    <div class="card-container">
        <div class="card shadow">
            <div class="row">
                <div class="col-7">
                    <div class="card-content">
                        <div class="card-title">All Tasks Count</div>
                        <div class="card-count">15</div>
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
                        <div class="card-count">8</div>
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
                        <div class="card-count">7</div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="card-icon">
                        <i class="fas fa-hourglass-half"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <table class="custom-table">
        <thead class="thead-custom">
            <tr>
                <th>No</th>
                <th>Tasks Name</th>
                <th>Priority</th>
                <th>Start Date</th>
                <th>Due Date</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">2</th>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>
                    <button class="btn btn-sm btn-custom1">
                        <i class="fas fa-check"></i>
                    </button>
                    <button class="btn btn-sm btn-custom2">
                        <i class="fas fa-pen-to-square"></i>
                    </button>
                    <button class="btn btn-sm btn-custom3">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
            </tr>
        </tbody>
    </table>
@endsection
