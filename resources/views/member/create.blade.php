@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <div class="text-center">
        <h3>Tambah Data</h3>
        <p>Silahkan tambah data member yang baru</p>
    </div>
    </div>    
</div>
<form action="{{ route('member.store') }}" method="post">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="number" class="form-control" id="age" name="age">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="number" class="form-control" id="phone" name="phone">
  </div>
  <div class="form-group">
    <label for="job">Job</label>
    <input type="text" class="form-control" id="job" name="job">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection