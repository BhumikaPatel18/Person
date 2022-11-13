@extends('layouts.app')

@section('content')
<style>
    .uper {
      margin-top: 40px;
    }
  </style>
<div class="uper">
    {{-- @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div><br />
    @endif --}}
    <h2>Records</h2>

    <table class="table table-bordered shadow text-center table-striped">
        <thead>
            <tr>
              <td>ID</td>
              <td>Name</td>
              <td>DOB</td>
              <td>Age</td>
              <td>Phone_no</td>
              <td>Email</td>
              <td>Gender</td>
              <td>Hobby</td>
              <td>Description</td>
              <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>

            @foreach($post as $pst)
        <tr>
            <td>{{$pst->id}}</td>
            <td>{{$pst->name}}</td>
            <td>{{$pst->DOB}}</td>
            <td>{{$pst->age}}</td>
            <td>{{$pst->phone_no}}</td>
            <td>{{$pst->email}}</td>
            <td>{{$pst->gender}}</td>
            <td>{{$pst->hobby}}</td>
            <td>{{$pst->description}}</td>
            <td><a href="{{ route('posts.edit', $pst->id)}}" class="btn btn-primary">Edit</a></td>
            <td><a href="{{ route('posts.show', $pst->id)}}" class="btn btn-primary">show</a></td>
            <td>
                <form action="{{ route('posts.destroy', $pst->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-primary" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div>
    <a href="{{ route('posts.create', $pst->id)}}" class="btn btn-primary">Insert new Record</a></td>
@endsection
