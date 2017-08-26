@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="postmessage col-md-6 col-md-offset-3 text-center" >
			
			<form action="/profile" method="POST">
				{{ csrf_field() }}
				<h2>Your Message</h2>
				<input type="hidden" name="postId" value="{{ $user->id }}">
				<textarea class="form-control" name="content" placeholder="Give Your Message"></textarea>
				<input type="submit" class="btn btn-success" style="margin-top: 10px;">
			</form>
		</div>
	</div>
@endsection