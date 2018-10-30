@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <div class="text-center">
        <h3>Edit Data</h3>
        <p>Silahkan Edit data member yang sudah ada</p>
    </div>
    </div>    
</div>
<form action="{{ route('member.update', $member) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value=" {{ $member->name }}">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ $member->email }}">
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="number" class="form-control" id="age" name="age" value="{{ $member->age }}">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address" value="{{ $member->profile->address }}">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="number" class="form-control" id="phone" name="phone" value="{{ $member->profile->phone }}">
  </div>
  <div class="form-group">
    <label for="job">Job</label>
    <input type="text" class="form-control" id="job" name="job" value="{{ $member->profile->job }}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection