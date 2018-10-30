@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-lg-10">
<h3>Data Member</h3>
<p>Dibawah ini merupakan data member yang terdaftar untuk saat ini</p>
</div>
<div class="col-lg-2">
<a href="{{ route('member.create') }}" class="btn btn-info" role="button">Tambah Data</a>
</div>
</div>
<div class="table-responsive">
<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Job</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach( $members as $member )
      <tr>
        <td>{{ $member->name }}</td>
        <td>{{ $member->email }}</td>
        <td>{{ $member->age }}</td>
        <td>{{ $member->profile->address }}</td>
        <td>{{ $member->profile->phone }}</td>
        <td>{{ $member->profile->job }}</td>
        <td class="center">
            <form action="{{ route('member.destroy', $member) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="button" class="btn btn-info"><a href="{{ route('member.edit', $member) }}"><i class="fa fa-edit fa-fw"></i></a></button>
            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fas fa-trash-alt fa-fw"></i></button>
            </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection