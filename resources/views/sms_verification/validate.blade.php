@extends('sms_verification.index')

@section('content')
    <div class="sm:w-1/1 md:w-1/3 lg:w-1/4 xl:w-1/4">
        <h1 class="text-2xl mb-6 text-center">SMS Verification</h1>
        @if(isset($status))
            <div class="bg-{{strpos($status, 'unvalid') !== false ? 'red': 'teal'}}-100 border-t-4 border-{{strpos($status, 'unvalid') !== false ? 'red': 'teal'}}-500 rounded-b text-{{strpos($status, 'unvalid') !== false ? 'red': 'teal'}}-900 px-4 py-3 shadow-md mb-4"
                 role="alert">
                <div>
                    <p class="font-bold">
                        {{ strpos($status, 'unvalid') !== false ? 'Failed!' : 'Success!' }}
                    </p>
                    <p class="text-sm break-all">
                        @if($status === 'unvalid-account')
                            Your Account is not registered.
                        @elseif($status === 'code-sended')
                            Verification Code Sent Successfully.
                        @elseif(strpos($status, 'verification') !== false)
                            Verification Code {{ucfirst(explode('-', $status)[2])}}
                        @elseif(isset($msg) && !is_null($msg))
                            {{$msg}}
                        @endif
                    </p>
                </div>
            </div>
        @endif
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" id="form" method="POST"
              action="{{ route('sms.check') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="mobileNumber">
                    Phone Number
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       id="mobileNumber"
                       type="tel"
                       placeholder="Mobile Phone"
                       name="mobile_number"
                       autofocus
                       value="{{ (isset($user) && !is_null($user) ? $user->mobile_number : '') }}"
                       required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="code">
                    Verification Code
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       id="code" placeholder="xxxxxx" name="code" autofocus required>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                    Validate
                </button>
            </div>
        </form>
    </div>
@endsection
