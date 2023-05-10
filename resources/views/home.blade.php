@extends('layouts/main-page')
@section('content')
    <div>
        @foreach ($fumetti as $albo)
            <div>
                {{$albo["title"]}}
            </div>
        @endforeach
    </div>
@endsection