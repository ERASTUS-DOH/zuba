@extends('layout.zuba')
@section('content')
<div class="content">
    <div class="container-fluid">
        <form action="" method="GET">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="card card-profile">
                            <h4 class="card-header-myDef card-title">Ilupeju, Juliet</h4>
                            <div class="card-body">
                                <div class="card-header-image img-shell-2 p-3">
                                    <img class="img" src="../assets/img/faces/marc.jpg">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="card card-profile">
                            <div class="card-header-myDef">Fingerprint data</div>
                            <div class="card-body">
                                <div class="img-shell p-0">
                                    <a href="#" onclick="" class="btn active btn-secondary"><i class="fas fa-fingerprint fa-5x"></i><div class="ripple-container"></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-myDef">
                            <p class="card-category">Fill all the fields in this form to successfully add a
                                new
                                student</p>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group is-filled">
                                        <label class="bmd-label-floating">Mr/Mrs/Ms</label>
                                        <input type="text" class="form-control" value="Ms" readonly="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group is-filled">
                                        <label class="bmd-label-floating">First Name</label>
                                        <input type="text" class="form-control" value="Juliet" readonly="">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group is-filled">
                                        <label class="bmd-label-floating">Middle Name</label>
                                        <input type="text" class="form-control" value="Ama" readonly="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group is-filled">
                                        <label class="bmd-label-floating">Last Name</label>
                                        <input type="text" class="form-control" value="Ilupeju" readonly="">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group is-filled">
                                        <label class="bmd-label-floating">Residencial Adress</label>
                                        <input type="text" class="form-control" value="Akosombo - Volta Region" readonly="">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group is-filled">
                                        <label class="bmd-label-floating">Index Number</label>
                                        <input type="text" class="form-control" value="PS/ITC/16/0000" readonly="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group is-filled">
                                        <label class="bmd-label-floating">Program</label>
                                        <input type="text" class="form-control" value="BSc Information Technology" readonly="">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <div class="form-group bmd-form-group is-filled">
                                        <label class="bmd-label-floating">Year</label>
                                        <input type="text" class="form-control" value="2016" readonly="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group bmd-form-group is-filled">
                                        <label class="bmd-label-floating">Course Title</label>
                                        <input type="text" class="form-control" value="Something Goes Here" readonly="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group bmd-form-group is-filled">
                                        <label class="bmd-label-floating">Course Code</label>
                                        <input type="text" class="form-control" value="Some Code" readonly="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 w-50 m-auto">
                <div class="col-6">
                    <button type="" class="btn btn-block btn-myDef" onclick=""><i class="fas fa-edit"></i>
                        Edit</button>
                </div>
                <div class="col-6">
                    <button type="submit" class="btn btn-block btn-success" onclick=""><i class="fas fa-save"></i>
                        Save</button>
                </div>
            </div>
            <div class="clear fix"></div>
        </form>
    </div>
</div>
@endsection
