@extends('layouts.common')

<h3>custom main page</h3> {{--style for h3 tag get from layout--}}

@section('main menu')
    @parent
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection
