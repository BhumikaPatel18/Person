@extends('layouts.app')

@section('content')
<div class="row">
	<div class="my-3">
		<ul class="list-group">
			<li class="list-group-item">Name: {{ $tshow->name }}</li>
			<li class="list-group-item">DOB: {{ $tshow->DOB }}</li>
            <li class="list-group-item">age: {{ $tshow->age }}</li>
            <li class="list-group-item">phone_no: {{ $tshow->phone_no }}</li>
            <li class="list-group-item">gender: {{ $tshow->gender }}</li>
            <li class="list-group-item">hobby: {{ $tshow->hobby }}</li>
            <li class="list-group-item">description: {{ $tshow->description }}</li>
		</ul>
	</div>
</div>
<div class="mt-3">
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection
