@extends('layouts.sidebar')
<link rel="stylesheet" href="{{ asset('assets/css/tasks/app.css') }}">
@section('content')
    <div class="container mb-5 mt-4">
        <!-- Judul Halaman -->
        <div class="d-flex align-items-center page-title mb-4" style="margin-left: 20px">
            <i class="fas fa-clipboard-list me-2"></i>
            <span>All Tasks</span>
        </div>

        <!-- Baris Search & Tombol Tambah -->
        <div class="row mb-2" style="margin-top: 6%; margin-left: 0px;">
            <!-- Kolom Search -->
            <div class="col-md-6 mb-2 mb-md-0">
                <div class="position-relative search">
                    <input type="text" class="form-control ps-5" placeholder="Search Tasks ..."
                        aria-label="Search tasks">
                    <i class="fas fa-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                </div>
            </div>

            <!-- Kolom Tombol Tambah -->
            <div class="col-md-6 text-md-end">
                <a href="/all-tasks/create" class="btn btn-custom">
                    <i class="fas fa-plus me-1"></i>
                    <span>Tambah Tugas</span>
                </a>
            </div>
        </div>
        <table class="custom-table" style="margin-left: 10px">
            <thead class="thead-custom text-center">
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
                    <th scope="row">1</th>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td>
                        <!-- Tombol untuk membuka modal -->
                        <a href="#" class="btn btn-sm btn-custom1" data-bs-toggle="modal"
                            data-bs-target="#confirmationModal">
                            <i class="fas fa-check"></i>
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="confirmationModal" tabindex="-1"
                            aria-labelledby="confirmationModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-success text-white">
                                        <h5 class="modal-title" id="confirmationModalLabel">Confirm Task Completion</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="mb-0">Are you sure you want to mark this task as done?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <form action="" method="POST">
                                            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Completed
                                                Tasks</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="/all-tasks/edit" class="btn btn-sm btn-custom2">
                            <i class="fas fa-pen-to-square"></i>
                        </a>

                        <a class="btn btn-sm btn-custom3" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="fas fa-trash"></i>
                        </a>

                        <form action="#" method="POST" id="deleteForm">
                            @csrf
                            @method('DELETE')
                            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger text-white">
                                            <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="mb-0">You sure you wanna delete this task?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal" data-id="#">
                                                Delete
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </td>
                </tr>
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
                    <th scope="row">4</th>
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
                    <th scope="row">5</th>
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
            </tbody>
        </table>
    </div>
@endsection
