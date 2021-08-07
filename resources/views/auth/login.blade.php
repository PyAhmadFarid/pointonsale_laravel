@extends('layout.default')

@section('content')

    <div class=" h-screen w-screen flex justify-center items-center text-gray-700">
        <div class=" flex flex-row w-2/3 rounded-md overflow-hidden">
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
                    <label class="pb-1 block font-semibold" for="email">Email</label>
                    <input placeholder="E-Mail" value="{{ old('email') }}"

                        class=" focus:ring-blue-300 focus:ring-4 focus:border-blue-500  w-full  focus:outline-none border py-2 px-3 ring-gray-200 rounded-md"
                        
                        id="email" name="email" type="text">
                    @if ($errors->has('email'))
                        <small class=" text-red-500">{{ $errors->first('email') }}</small>
                    @endif
                </div>
                <div class="py-2">
                    <label class=" pb-1 block font-semibold" for="password">Password</label>
                    <input placeholder="Passowrd"

                        class=" focus:ring-blue-300 focus:ring-4 focus:border-blue-500  w-full focus:outline-none border py-2 px-3 ring-gray-200 rounded-md"
                        
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
                    <button type="submit" 
                    class="w-full bg-gradient-to-b from-blue-600 to-blue-500 font-semibold text-white rounded-md p-2">
                    
                    Login
                </button>
                </div>
            </form>
        </div>
    </div>

@endsection
