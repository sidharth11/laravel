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
               
                <h1>Create a New Pizza</h1>
                <form action="/pizzas" method="POST">
                    @csrf
                  <label for="name">Your name:</label>
                  <input type="text" name="name" id="name" required>

                  <label for="type">Choose type of pizza:</label>
                  <select name="type" id="type">
                    <option value="margarita">Margarita</option>
                    <option value="hawaiian">Hawaiian</option>
                    <option value="veg supreme">Veg Supreme</option>
                    <option value="volcano">Volcano</option>
                  </select>

                  <label for="base">Choose crust:</label>
                  <select name="base" id="base">
                    <option value="thick">Thick</option>
                    <option value="thin & crispy">Thin & Crispy</option>
                    <option value="cheese crust">Cheese Crust</option>
                    <option value="garlic crust">Garlic Crust</option>
                  </select>
                  <label for="price">Pizza Price:</label>
                  <input type="text" name="price" id="price">

                  <fieldset>
                    <label>Extra toppings:</label>
                    <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br />
                    <input type="checkbox" name="toppings[]" value="peppers">Peppers<br />
                    <input type="checkbox" name="toppings[]" value="garlic">Garlic<br />
                    <input type="checkbox" name="toppings[]" value="olives">Olives<br />
                  </fieldset>

                  <input type="submit" value="Order Pizza">
                </form>
              </div>
               

            </div>
        </div>
    </div>
    <div class="flex-center position-ref full-height">

    </div>


</div>
@endsection
