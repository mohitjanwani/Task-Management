@extends('layout.master')
@section('content')
    <form class="row g-3">
        <div class="col-md-6">
            <label for="" class="form-label">Name</label>
            <input type="text" name="name" id="" class="form-control" placeholder="Enter Name"
                aria-describedby="helpId" />
        </div>
        <div class="col-md-6">
            <label for="" class="form-label">Email</label>
            <input type="text" name="email" id="" class="form-control" placeholder="Enter Email"
                aria-describedby="" />
        </div>
        <div class="col-md-6">
            <label for="" class="form-label">Country</label>
            <select class="form-select" name="country_id" id="">
                <option selected>-- Select Country --</option>
                @foreach ($countries as $country)
                    <option style="color: black" value="{{ $country->id }}"
                        {{ old('country_id') == $country->id ? 'selected' : '' }}>
                        {{ $country->country_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="" class="form-label">Mobile</label>
            <input type="text" class="form-control" name="mobile" id="" placeholder="Enter Mobile Number" />
        </div>
        <div class="col-md-6">
            <label for="" class="form-label">Password</label>
            <input type="text" class="form-control" name="password" id="" placeholder="Enter Password" />
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
@endsection
