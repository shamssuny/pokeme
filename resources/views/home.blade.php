@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
            <input class="form-control" id="foo" type="text" value="{{ $_SERVER['SERVER_NAME'] }}/profile/{{ $uid }}">
            <button class="cop btn btn-success" data-clipboard-action="copy" data-clipboard-target="#foo">Copy Your Profile Url To Recive Message!</button>
                <div class="panel-heading">Message board</div>
                

                <div class="panel-body text-center">
                    @forelse($msg as $m)
                        <div class="mess">
                            {{ $m->content }}
                            <form action="/home" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                                <input type="hidden" name="pid" value="{{ $m->id }}">
                                <input class="btn btn-danger" type="submit" value="Delete">
                                
                            </form>
                        </div>
                        <hr>
                    @empty
                        No Message Available.
                    @endforelse
                    {{ $msg->links() }}
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
