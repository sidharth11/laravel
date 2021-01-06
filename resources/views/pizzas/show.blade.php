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

        <div class="content">

       
                <h1>Order from -{{$pizza->name}}</h1>
                <p class="type">Type - {{$pizza->type}}</p>
                <p class="base">Base - {{$pizza->base}}</p>
                <p class="price">Price - {{$pizza->price}}</p>
                <p class="toppings">Toppings: 
                <ul>
                    @foreach ($pizza->toppings as $toppings)
                        <li>{{$toppings}}</li>
                    @endforeach
                </ul>
            </p>
            <form action="/pizzas/{{$pizza->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button>Complete Order</button>
            </form>
           <a href="/pizzas"><--Back to all Pizzas</a>

        </div>

    </div>

@endsection
