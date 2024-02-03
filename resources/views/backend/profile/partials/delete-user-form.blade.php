@extends('layouts.app')

@section('content')

<form method="post" action="{{ route('profile.destroy') }}" class="p-6 border">
    @csrf
        @method('delete')

        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Are you sure you want to delete your account?') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
        </p>

        <div class="form-group">
            <label for="password" class="sr-only">{{ __('Password') }}</label>

            <input class="form-control"
                id="password"
                name="password"
                type="password"
                 class="form-control mt-1 w-75"  {{--Adjust the width as needed  --}}
                placeholder="{{ __('Enter Password') }}"
            />

            @if($errors->userDeletion->has('password'))
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $errors->userDeletion->first('password') }}
                </div>
            @endif
        </div>


        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-danger-button class="ms-3 btn btn-danger">
                {{ __('Delete Account') }}
            </x-danger-button>
        </div>
    </form>

@endsection
