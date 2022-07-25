@extends('CRUD.layout')
@section('bodyContent')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-5 text-center">COMPLETE CRUD APPLICATION WITH LARAVEL</h1>
                <h3 class="display-6 text-center">Create Data</h3>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <a href="{{ url('/user-data-information') }}" class="btn btn-outline-dark"><i class="fa-solid fa-eye"></i>
                    SHOW DATA</a><br>
                <form action="{{ url('/user-data-information/' . $passData->id) }}" method="post">
                    {!! csrf_field() !!}
                    {{-- @csrf --}}
                    @method('PATCH')
                    <label class="form-label" for="uname">User Name</label>
                    <input class="form-control" type="text" name="userName" value="{{ $passData->userName }}">
                    <label class="form-label" for="uemail">Email</label>
                    <input class="form-control" type="email" name="userEmail" value="{{ $passData->userEmail }}">
                    <label class="form-label" for="uphone">Phone</label>
                    <input class="form-control" type="number" name="userPhone" value="{{ $passData->userPhone }}"><br>

                    <button class="btn btn-outline-success" type="submit" name="submit">UPDATE</button>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
@endsection
