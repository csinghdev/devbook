@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <h1>Welcome to Devbook</h1>
            <p>A place where all of you can talk about your group work</p>
            <p>To Start using it, Sign Up Now.</p>
            <a href="{{ URL::to('register') }}" class="btn btn-lg btn-primary">Sign Up</a>
    </div>
@stop