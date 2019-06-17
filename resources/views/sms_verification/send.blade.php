@extends('sms_verification.index')

@section('content')
<div class="sm:w-1/1 md:w-1/3 lg:w-1/4 xl:w-1/4">
    <h1 class="text-2xl mb-6 text-center">SMS Verification</h1>
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" id="form" action="{{ route('sms.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="fullName">
                Fullname
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="fullName" type="tel" placeholder="Fullname" name="fullName" autofocus required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Email
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="email" type="email" placeholder="example@mail.com" name="email" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="mobileNumber">
                Phone Number
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="mobileNumber" type="tel" placeholder="+62xxxxxxxxxx" name="mobileNumber" required>
        </div>
        <div class="flex items-center justify-end">
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">
                Send
            </button>
        </div>
    </form>
    @if(session()->has('verified'))
        @component('sms_verification.components.alert')
            @slot('title')
            Success!
            @endslot
            
            @slot('content')
            Your phone number has been verified
            @endslot
        @endcomponent
    @elseif(session()->has('unvalidate'))
        @component('sms_verification.components.alert')
            @slot('title')
            Failed!
            @endslot
            
            @slot('content')
            Your email address or phone number has been registered.
            @endslot
        @endcomponent
    @endif
</div>
@endsection
