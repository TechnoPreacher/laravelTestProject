@extends('layouts.common')

<h3>user's creation form</h3> {{--style for h3 tag get from layout--}}


@section('content')
    <form method="POST" action="{{route('user.userStore')}}">
        @csrf

        <div><label for="name">Name:</label>
            <input id="name" type="text" value="{{old('name')}}" name="name" ></div>
        <div><label for="pass">Password:</label>
            <input id="pass" type="password" value="{{old('pass')}}" name="pass" ></div>
        <input type="submit" value="Register">
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
