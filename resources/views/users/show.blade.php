@extends('layouts.common')

<h3>show/update last user form</h3> {{--style for h3 tag get from layout--}}


@section('content')
    <form method="POST" action="{{route('user.userUpdate')}}">
        @csrf
        <div><label for="id">id:</label>
            <input id="id" type="text" name="id" value="{{$user->id}}" readonly></div>
        <div><label for="name">name:</label>
            <input id="name" type="text" name="name" value="{{$user->name}}"></div>
        <div><label for="pass">Password:</label>
            <input id="pass" type="text" name="pass" value="{{$user->pass}}"></div>
        <input type="submit" value="Update">
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        {{--    @else--}}
        {{--        <p>all validation is pass!</p>--}}
    @endif

@endsection
