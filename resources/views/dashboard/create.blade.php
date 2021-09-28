@extends('dashboard.nab_and_side')

@section('body')
<div class="col-md-8">
    <div class="card-box">
        <h4 class="card-title">Address Form</h4>
        <form action="store" method="POST">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label>Age</label>
                <input type="text" name="age" class="form-control">
            </div>

            <div class="form-group">
                <label>Position</label>
                <input type="text" name="position" class="form-control">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
            </div>

            <div class="form-group">
                <label>Join_date</label>
                <input type="text" name="join_date" class="form-control">
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection
