@extends('sms_verification.index')

@section('content')
<div class="sm:w-1/1 md:w-1/3 lg:w-1/4 xl:w-1/4">
    <h1 class="text-2xl mb-6 text-center">SMS Verification</h1>
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" id="form" method="POST"
        action="{{ route('check.store') }}">
        @csrf
        <input type="hidden" name="uuid" value="{{ request()->route('uuid') }}">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="code">
                Verification Code
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="code" type="number" placeholder="xxxxxx" name="code" autofocus required>
        </div>
        <div class="flex items-center justify-between">
            <a href="{{ route('sms') }}"
                class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Back
            </a>
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">
                Validate
            </button>
        </div>
    </form>
    @if(session()->has('failed'))
        @component('sms_verification.components.alert')
            @slot('title')
            Failed!
            @endslot
            
            @slot('content')
            Your verification code is invalid.
            @endslot
        @endcomponent
    @endif
</div>
@endsection
