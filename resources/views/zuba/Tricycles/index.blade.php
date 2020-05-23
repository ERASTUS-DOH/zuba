@extends('layout.zuba')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <!-- your content here -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-info">
                            <h4 class="card-title mt-0"> List of Tricycles deployed</h4>
                            <p class="card-category"> Pick a tricycle to view more information</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="">
                                    <th>
                                        <!-- Nothing goes here -->
                                    </th>
                                    <th>
                                        Registration Number
                                    </th>
                                    <th>
                                        Maximum Capacity
                                    </th>
                                    <th>
                                        Current Location
                                    </th>
                                    <th>
                                        Actions
                                    </th>
                                    </thead>
                                    <tbody>
                                    <!-- ------------------------------------------------------------------------ -->
                                    <tr>
                                        <td>
                                            <i class="fas fa-exclamation-circle error"></i>
                                        </td>
                                        <td>
                                            GHR-2343-A
                                        </td>
                                        <td>
                                            Central
                                        </td>
                                        <td>
                                            Kotokoraba
                                        </td>
                                        <td>
                                            <a href="/bins/{{15}}">
                                                <button class="btn btn-info btn-fab-mini btn-round table-btn"
                                                        onclick="window.location.href='url()';">
                                                    <i class="fas fa-lg fa-arrow-right"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- ------------------------------------------------------------------------ -->
                                    <tr>
                                        <td>
                                            <i class="fas fa-check-circle success"></i>
                                        </td>
                                        <td>
                                            GHR-9375-J
                                        </td>
                                        <td>
                                            Central
                                        </td>
                                        <td>
                                            Abura
                                        </td>
                                        <td>
                                            <button class="btn btn-info btn-fab-mini btn-round table-btn"
                                                    onclick="window.location.href='bin.html';">
                                                <i class="fas fa-lg fa-arrow-right"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- ------------------------------------------------------------------------ -->
                                    <tr>
                                        <td>
                                            <i class="fas fa-check-circle success"></i>
                                        </td>
                                        <td>
                                            GHR-5321-S
                                        </td>
                                        <td>
                                            Central
                                        </td>
                                        <td>
                                            Abura
                                        </td>
                                        <td>
                                            <button class="btn btn-info btn-fab-mini btn-round table-btn"
                                                    onclick="window.location.href='bin.html';">
                                                <i class="fas fa-lg fa-arrow-right"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- ------------------------------------------------------------------------ -->
                                    <tr>
                                        <td>
                                            <i class="fas fa-exclamation-circle error"></i>
                                        </td>
                                        <td>
                                            GHR-9375-T
                                        </td>
                                        <td>
                                            Central
                                        </td>
                                        <td>
                                            Abura
                                        </td>
                                        <td>
                                            <button class="btn btn-info btn-fab-mini btn-round table-btn"
                                                    onclick="window.location.href='bin.html';">
                                                <i class="fas fa-lg fa-arrow-right"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- ------------------------------------------------------------------------ -->
                                    <tr>
                                        <td>
                                            <i class="fas fa-exclamation-circle error"></i>
                                        </td>
                                        <td>
                                            GHR-5321-X
                                        </td>
                                        <td>
                                            Central
                                        </td>
                                        <td>
                                            Abura
                                        </td>
                                        <td>
                                            <button class="btn btn-info btn-fab-mini btn-round table-btn"
                                                    onclick="window.location.href='bin.html';">
                                                <i class="fas fa-lg fa-arrow-right"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- ------------------------------------------------------------------------ -->
                                    <tr>
                                        <td>
                                            <i class="fas fa-check-circle success"></i>
                                        </td>
                                        <td>
                                            GHR-9375-D
                                        </td>
                                        <td>
                                            Central
                                        </td>
                                        <td>
                                            Abura
                                        </td>
                                        <td>
                                            <button class="btn btn-info btn-fab-mini btn-round table-btn"
                                                    onclick="window.location.href='bin.html';">
                                                <i class="fas fa-lg fa-arrow-right"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- ------------------------------------------------------------------------ -->
                                    <tr>
                                        <td>
                                            <i class="fas fa-check-circle success"></i>
                                        </td>
                                        <td>
                                            GHR-5321-U
                                        </td>
                                        <td>
                                            Central
                                        </td>
                                        <td>
                                            Abura
                                        </td>
                                        <td>
                                            <button class="btn btn-info btn-fab-mini btn-round table-btn"
                                                    onclick="window.location.href='bin.html';">
                                                <i class="fas fa-lg fa-arrow-right"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
