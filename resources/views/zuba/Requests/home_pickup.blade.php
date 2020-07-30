@extends('layout.zuba')
@section('content')
    <div class="container-fluid">
        <a href="/bin_requests" class="btn-link">
            <button class="btn btn-success text-center" type="submit"><i class="fas fa-arrow-left "></i>
                {{ __('Back') }}
            </button>
        </a>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-plain">
                    <div class="card-header card-header-info theme">
                        <h4 class="card-title mt-0"> List of all Request Sent Manually</h4>
{{--                        <p class="card-category"> Last four request that have been recieved.</p>--}}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="">
                                <th>
                                    <!-- Nothing goes here -->
                                </th>
                                <th>
                                    Serial Number
                                </th>
                                <th>
                                    Region
                                </th>
                                <th>
                                    City
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
                                        <button class="btn btn-info btn-fab-mini btn-round table-btn">
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
                                        GHR-9375-S
                                    </td>
                                    <td>
                                        Central
                                    </td>
                                    <td>
                                        Abura
                                    </td>
                                    <td>
                                        <button class="btn btn-info btn-fab-mini btn-round table-btn">
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
                                        <button class="btn btn-info btn-fab-mini btn-round table-btn">
                                            <i class="fas fa-lg fa-arrow-right"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- ------------------------------------------------------------------------ -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div id="map"></div>
        </div>
    </div>
    </div>
@endsection
