@extends('layouts.dashboardmaster')

@section("content")

{{-------------Username-------------}}

<div class="row p-4">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Update Name</h4>
                <form action="{{route('profile.username')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="validationCustom01" class="form-label"> New name</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Input your new name" value="" name="name">
                        @error("name")
                            <p class="text-danger"> {{$message }} </p>
                        @enderror
                        <button  style="background-color: #2D9596" class="btn btn-primary mt-4" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{---------- email -------------}}
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Update email</h4>
                <form action="{{route('profile.email')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="validationCustom01" class="form-label"> New email</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Input your new email" value="" name="email">
                        @error("email")
                            <p class="text-danger"> {{$message }} </p>
                        @enderror
                        <button  style="background-color: #2D9596" class="btn btn-primary mt-4" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{---------password ----------}}
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Update password</h4>
                <form action="{{route('profile.email')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="validationCustom01" class="form-label"> Current password</label>
                        <input type="text" class="form-control mb-3" id="validationCustom01" placeholder="Input your current password " value="" name="email">

                        <label for="validationCustom01" class="form-label"> New password</label>
                        <input type="text" class="form-control mb-3" id="validationCustom01" placeholder="Input your new password" value="" name="email">

                        <label for="validationCustom01" class="form-label"> confirm Password</label>
                        <input type="text" class="form-control mb-3" id="validationCustom01" placeholder="Confirm your new Passord" value="" name="Confirm-password">
                        @error("password")
                            <p class="text-danger"> {{$message }} </p>
                        @enderror
                        <button  style="background-color: #2D9596" class="btn btn-primary mt-4" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- tostify alart --}}

@section("script")

@if (session('name_update'))

<script>
   Toastify({
  text: "{{session('name_update')}}",
  duration: 4000,
  newWindow: true,
  close: true,
  gravity: "top", // `top` or `bottom`
  position: "right", // `left`, `center` or `right`
  stopOnFocus: true, // Prevents dismissing of toast on hover
  style: {
    background: "linear-gradient(to right, #00b09b, #96c93d)",
  },
  onClick: function(){} // Callback after click
}).showToast();
</script>

@endif
{{-- email alart --}}

@if (session('email_update'))

<script>
   Toastify({
  text: "{{session('email_update')}}",
  duration: 4000,
  newWindow: true,
  close: true,
  gravity: "top", // `top` or `bottom`
  position: "right", // `left`, `center` or `right`
  stopOnFocus: true, // Prevents dismissing of toast on hover
  style: {
    background: "linear-gradient(to right, #00b09b, #96c93d)",
  },
  onClick: function(){} // Callback after click
}).showToast();
</script>
@endif
@endsection
