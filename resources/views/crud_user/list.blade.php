@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow-lg">
                        <div class="card-header bg-primary text-white text-center">
                            <h4 class="mb-0">User List</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Roles</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @foreach($user->roles as $role)
                                                    <span class=" ">
                                                        <a href="{{ route('user.role', ['id' => $role->id]) }}" class="text-black text-decoration-none">
                                                            {{ $role->name }}
                                                        </a>
                                                    </span>
                                                @endforeach
                                            </td>
                                            <td>
                                                <a href="{{ route('user.readUser', ['id' => $user->id]) }}"  >
                                                    <button type="button" class="btn btn-primary ">View</button>
                                                </a>
                                                <a href="{{ route('user.updateUser', ['id' => $user->id]) }}"  >
                                                    <button type="button" class="btn btn-primary ">Edit</button>
                                                </a>
                                                <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}"  >
                                                    <button type="button" class="btn btn-primary ">Delete</button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <!-- Pagination -->
                            <div class="d-flex justify-content-end">
                                {!! $users->withQueryString()->links('pagination::bootstrap-4') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
