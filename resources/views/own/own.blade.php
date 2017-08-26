@extends('layouts.app')

@section('content')
<div class="row">
	<div class="profile col-md-6 col-md-offset-3 text-center">
		<h2>{{ $user->name }}</h2>
		<p>Email: {{ $user->email }}</p>
		<span>Joined {{ $user->created_at->diffForHumans() }}</span>
	</div>
</div>
@endsection