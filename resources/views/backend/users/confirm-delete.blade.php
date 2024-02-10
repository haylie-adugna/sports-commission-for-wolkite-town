<!-- confirm-delete.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Confirm Account Deletion</h2>

    <p>Are you sure you want to delete your account, {{ $user->name }}?</p>

    <form method="POST" action="{{ route('users.destroy', $user->id) }}">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Confirm Delete</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
