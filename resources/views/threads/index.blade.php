@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach($threads as $thread)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="#">{{ $thread->creator->name }}</a> posted:
                        <a href="{{ $thread->path() }}">{{ $thread->title }}</a><br>
                    </div> 
                    <div class="panel-body">
                        {{ $thread->body }}
                    </div>
                </div>
            @endforeach
    </div>
</div>
@endsection
