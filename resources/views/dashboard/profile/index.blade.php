@extends('layouts.dashboardmaster')

@section("content")
    <div class="row p-4">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Update Username</h4>

                    <form class="needs-validation" novalidate="">
                        <div class="mb-3">
                            <label for="validationCustom01" class="form-label"> Old name</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Input your old name" value="">
                        </div>
                        <div class="mb-3">
                            <label for="validationCustom01" class="form-label"> New name</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Input your new name" value="">
                        </div>
                        <button style="background-color: #2D9596" class="btn btn-primary" type="submit">Update</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Update Email</h4>

                    <form action="" method="POST" class="needs-validation" novalidate="">
                        @csrf
                        <div class="mb-3">
                            <label for="validationCustom01" class="form-label"> Old email</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Input your old email" value="">
                        </div>
                        <div class="mb-3">
                            <label for="validationCustom01" class="form-label"> New email</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Input your new email" value="">
                        </div>
                        <button style="background-color: #2D9596" class="btn btn-primary" type="submit">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
