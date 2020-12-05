@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

            <div>

                {{-- @foreach ($user as $item)
                <h2>{{$item->name}}</h2>
                <p>{{$item->address->country}}</p>

                @endforeach --}}



                @foreach ($add as $item)

                <h2>{{$item->country}}</h2>
                <p>{{$item->user->name}}</p>

                @endforeach

            </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
