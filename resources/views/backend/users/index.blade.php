@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header table-card-header">
            <h5>User managment</h5>
        </div>
        <div class="card-block">
            <div class="dt-responsive table-responsive">

                <a href="{{ route('admin.users.create') }}" class="btn btn-success mb-3"><i class="fa fa-plus"></i>Add New user</a>
                <br>
                <table id="basic-btn" class="table table-striped table-bordered nowrap">
                    {{-- class="table  table-striped table-bordered nowrap" "cbtn-selectors" "basic-btn" "multilevel-btn"
                    <table id="footer-search" class="table table-striped table-bordered nowrap">
                        --}}
                    <p class="pull-right">Date: <span id="currentDate"></span></p>
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Photo</th>
                            <th>First_Name</th>
                            <th>father_Name</th>
                            <th>last_Name</th>
                            <th>Email</th>
                            <th>User type</th>
                            <th>Phone_Number</th>
                            <th>Date_of_Birth</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Language</th>
                            <th>Address</th>
                            <th>Nationality</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @if (Qs::userIsSuperAdmin()) --}}
                        @foreach ($users as $key => $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img class="img-circle" style="height: 50px; width: 40px;"
                                        src="{{ asset('upload/user/image') }}/{{ $user->photo }}" alt="User photo">
                                </td>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->middle_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach ($user->roles as $key => $item)
                                        <span class="badge badge-info">{{ $item->title }}</span>
                                    @endforeach
                                </td>
                                <td>{{ $user->phone_number }}</td>
                                <td>{{ $user->date_of_birth }}</td>
                                <td>{{ $user->age }}</td>
                                <td>{{ $user->gender }}</td>
                                <td>{{ $user->language }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->nationality }}</td>
                                <td>{{ $user->status }}</td>
                                <td>
                                    @can('user_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.users.show', $user->id) }}">
                                            view
                                        </a>
                                    @endcan

                                    @can('user_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.users.edit', $user->id) }}">
                                            edit
                                        </a>
                                    @endcan
                                    @can('user_delete')
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                            onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                            style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-xs btn-danger" value="delete">
                                        </form>
                                    @endcan
                                    {{-- @can('user_status') --}}
                                    <form action="{{ route('admin.users.toggle-status', $user->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-xs {{ $user->status === 'active' ? 'btn-danger' : 'btn-success' }}">
                                            {{ $user->status === 'active' ? 'Make Inactive' : 'Make Active' }}
                                        </button>
                                    </form>
                                    {{-- @endcan --}}

                                </td>
                            </tr>
                        @endforeach

                        {{-- @endif --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
