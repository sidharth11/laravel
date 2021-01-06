@extends('layouts.layout')

@section('content')
    


<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <div class="content">
                <div class="title m-b-md">
                    Pizza Orders
                   
                </div>
                @foreach ($pizzas as $pizza)
                    <div>
                        {{-- {{ $loop->index }} {{ $pizza['type'] }} -{{ $pizza['base'] }}
                        @if ($loop->first)
                            <p>This is first loop</p>
                        @elseif($loop->last)
                            <p>This is last loop.</p>

                        @endif --}}
                      <h4>  <a href="/pizzas/{{$pizza->id}}">{{$pizza->name}}</a></h4>
                        {{-- {{$pizza->name}}-{{$pizza->base}} - {{$pizza->type}} - {{$pizza->price}} --}}
                    </div>
                @endforeach
               
                

                {{-- @for ($i = 0; $i < count($pizzas); $i++)
                    <p>{{ $pizzas[$i]['$type'] }}</p>
                @endfor --}}
            </div>
        </div>
    </div>
    <div class="flex-center position-ref full-height">

    </div>


</div>
@endsection
