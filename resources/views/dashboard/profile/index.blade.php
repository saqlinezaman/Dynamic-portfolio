@extends('layouts.dashboardmaster')

@section("content")

    <div class="row p-4">

        <form action="{{route('profile.username')}}" method="POST" class="needs-validation" novalidate="">
            @csrf
        {{-- username --}}
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Update Username</h4>

                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label"> Old name</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Input your old name" value="" name="name">
                                @error("name")
                                    <p class="text-danger"> {{$message }} </p>
                                @enderror
                                <button  style="background-color: #2D9596" class="btn btn-primary mt-4" type="submit">Update</button>
                            </div>

                </div>
            </div>
        </div>
    </form>

        {{-- email --}}

        <form action="{{route('profile.email')}}" method="POST">
            @csrf
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Update email</h4>

                        {{-- form satarted --}}

                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label"> New email</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Input your new email" value="" name="email">
                                    @error("email")
                                        <p class="text-danger"> {{$message }} </p>
                                    @enderror
                                    <button  style="background-color: #2D9596" class="btn btn-primary mt-4" type="submit">Update</button>
                                </div>

                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
