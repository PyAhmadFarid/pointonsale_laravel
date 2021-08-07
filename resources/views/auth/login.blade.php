@extends('layout.default')

@section('content')

    <div class=" h-screen w-screen flex justify-center items-center text-gray-700">
        <div class=" flex flex-row w-1/2 rounded-md overflow-hidden">
            <div class=" bg-purple-500 w-1/2">
                a
            </div>

            <form method="POST" action="" class=" bg-white p-10 w-1/2">
                @csrf
                <div class="mb-10">
                    <h1 class=" font-bold text-4xl">Login.</h1>
                    <p class=" text-sm font-semibold text-gray-500 pt-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
                <div class="py-2">
                    <label class=" block font-semibold" for="email">Email</label>
                    <input value="{{ old('email') }}"
                        class=" focus:ring-blue-400 w-full  focus:outline-none ring-2 py-1 px-2 ring-gray-200 rounded-md"
                        id="email" name="email" type="text">
                    @if ($errors->has('email'))
                        <small class=" text-red-500">{{ $errors->first('email') }}</small>
                    @endif
                </div>
                <div class="py-2">
                    <label class=" block font-semibold" for="password">Password</label>
                    <input  class=" focus:ring-blue-400 w-full  focus:outline-none ring-2 py-1 px-2 ring-gray-200 rounded-md"
                        id="password" name="password" type="password">
                    @if ($errors->has('password'))
                        <small class=" text-red-500">{{ $errors->first('password') }}</small>
                    @endif
                </div>
                <div class="py-2">
                    <input id="ingat" name="ingat" type="checkbox">
                    <label class=" font-semibold text-sm" for="ingat">Remember me</label>
                </div>
                <div class="py-2">
                    <button type="submit" class="w-full bg-blue-500 font-semibold text-white rounded-md p-1">Login</button>
                </div>
            </form>
        </div>
    </div>

@endsection
