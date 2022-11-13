@extends('layouts.app')

@section('content')

<style>
    .container{
        width:80%;
    }
</style>

<div class="text-center">
    <h2>Registration</h2>
      </div>


    {{-- <form method="post" action="{{ route('posts.store') }}"> --}}
        {!! Form::open ([
            'route'=> 'posts.store',
            'method'=>'post'
            ]) !!}

        {{-- @csrf --}}

        @include('form')
            <input class="btn btn-primary" type="submit" value="Submit">
            <td><a href="{{ route('posts.index')}}" class="btn btn-primary">Cancel</a></td>
        
    {{-- </form> --}}
    {!!Form::close()!!}

@endsection









{{--


{{-- <div class="container">
    <div class="form-group">
      <label for="name"> Name</label>
       <input type="text" name="name" id="name" class="form-control" placeholder="enter your full name" aria-describedby="helpId">
</div>

<div class="form-group">
  <label for="dob">Date Of Birth</label>
  <input type="date" name="dob" id="dob" class="form-control" placeholder="enter your birth date" aria-describedby="helpId">
</div>

<div class="form-group">
  <label for="age">Age</label>
  <input type="number" name="age" id="age" class="form-control" placeholder="Enter your Age" aria-describedby="helpId">
</div>

<div class="form-group">
  <label for="phone_no">Phone_No</label>
  <input type="number" name="phone_no" id="phone_no" class="form-control" placeholder="Enter your Phone number" aria-describedby="helpId">
</div>

<div class="form-group">
  <label for="email">Email</label>
  <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Enter Your Email ">
</div>

<div class="form-group">
  <label for="password">Password</label>
  <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
</div>

{{-- Radio buttons for gender --}}
{{-- <div class="form-group">
    <label for="radiotext">Select Your Gender :   </label>

  <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="gender" id="gender" value="Male">Male
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label ">
        <input type="radio" class="form-check-input" name="gender" id="gender" value="female">Female
      </label>
    </div>
    <div class="form-check-inline disabled">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="gender" id="gender" value="others" >Others
      </label>
    </div>
  </div> --}}

  {{-- checkbox for hobby --}}
  {{-- <div class="form-group">
      <label for="checkbox">Select Your hobbies</label>
  <div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="hobby" id="hobby" value="Travelling">Travelling
  </label>
  </div>
  <div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="hobby" id="hobby" value="Indore Games">Indore Games
  </label>
  </div>
  <div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="hobby" id="hobby" value="Outdore Games">Outdore Games
  </label>
  </div>
  <div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="hobby" id="hobby" value="art">art
  </label>
  </div>
  </div>

  {{-- Description --}}
{{--
  <div class="form-group">
    <label for="textarea">Description</label>
    <textarea class="form-control" name="description" id="desc" rows="3"></textarea>
  </div>   --}}
