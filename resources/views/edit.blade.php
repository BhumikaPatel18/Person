@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Information
  </div>

  <div class="card-body">
      {{-- <form method="post" action="{{ route('posts.update', $post->id ) }}"> --}}
        {!! Form::open ([
            'route'=> ['posts.update',$post->id,'method'=>'post']
            ]) !!}

              @csrf
              @method('PATCH')
              @include('form')

          <button type="submit" class="btn btn-primary">Update Data</button>
      {{-- </form> --}}
      {!!Form::close()!!}
  </div>
</div>
@endsection
