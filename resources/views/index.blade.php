@extends('layouts.sidebar')
<link rel="stylesheet" href="{{ asset('assets/css/tasks/custom.css') }}">
@section('content')
    <div class="container mb-5 mt-4">
        <div class="d-flex align-items-center page-title" style="margin-left: 20px">
            <i class="fas fa-house"></i>
            <span>Dashboard</span>
        </div>
    </div>

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

    <div class="container">
        <table class="custom-table" style="margin-left: 10px">
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
                <tr>
                    <th scope="row">1</th>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
