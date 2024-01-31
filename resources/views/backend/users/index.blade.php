Shegaw It, [1/31/2024 11:14 PM]
@extends('layouts.app')
@section('page_title', 'Manage Users')
@section('content')
    <div class="container-fluid pl-5 pt-5">
        <!-- card-header -->
        <div class="card card-default">
          <div class="card-header border-0">
            <h3 class="card-title">
                  <i class="fa-solid fa-users-gear"></i>
                 @yield('page_title')
                </h3>
          </div>
        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#all-users" class="nav-link active" data-toggle="tab">Manage All Users</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Manage Users By Type</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        {{-- @foreach($userType as $ut)
                            <a href="#ut-{{ Qs::hash($ut->id) }}" class="dropdown-item" data-toggle="tab">{{ $ut->name }}s</a>
                        @endforeach --}}
                    </div>
                </li>
            </ul>
            <div class="tab-content table-responsive">
                 <div class="tab-pane fade show active" id="all-users">
                    <table class="table datatable-button-html5-columns table-bordered table-striped table-head-fixed">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Photo</th>
                                <th>First_Name</th>
                                <th>Last_Name</th>
                                <th>Email</th>
                                <th>Phone_Number</th>
                                <th>Date_of_Birth</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Nationality</th>
                                <th>State</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                        {{-- @if(Qs::userIsSuperAdmin()) --}}
                            @foreach($users as $u1)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img class="rounded-circle" style="height: 40px; width: 40px;" src="{{ $u1->photo }}" alt="photo"></td>
                                    <td>{{ $u1->first_name }}</td>
                                    <td>{{ $u1->last_name }}</td>
                                    <td>{{$u1->email }}</td>
                                    <td>{{$u1->phone_number}}</td>
                                    <td>{{$u1->date_of_birth }}</td>
                                    <td>{{ $u1->gender }}</td>
                                    <td>{{ $u1->address }}</td>
                                    <td>{{$u1->nationality }}</td>
                                    <td>{{$u1->state }}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown"
                                                data-offset="-52">
                                                <i class="fas fa-bars"></i>
                                                </button>

                                                 <div class="dropdown-menu" role="menu">
                                                    {{--View Profile--}}
                                                    <a href="" class="dropdown-item"><i class="icon-eye"></i> View User Information</a>
                                                    {{--Edit--}}
                                                    <a href="" class="dropdown-item"><i class="icon-pencil"></i> Edit User Information</a>


                                                        <a href="" class="dropdown-item"><i class="icon-lock"></i> Reset User password</a>
                                                        {{--Delete--}}
                                                        <a id="" href="#" class="dropdown-item"><i class="icon-trash"></i> Delete User</a>
                                                        <form method="HEAD" id="" action="" class="hidden">@csrf @method('delete')</form>

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            {{-- @endif --}}
                        </table>
                </div>

            </div>
    </div>
</div>
</div>
@endsection
