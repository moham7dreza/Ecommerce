@extends('adminto.layouts.master')

@section('head-tag')
    <title>لیست مقام ها</title>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <div class="float-right">
                        <a href="{{ route('adminto.role.create') }}" class="arrow-none btn btn-primary text-white"
                           aria-expanded="false">
                            ساخت مقام جدید
                        </a>
                    </div>
                    <h4 class="mt-0 header-title">لیست تمامی مقام ها</h4>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>عنوان مقام</th>
                                <th>دسترسی های مقام</th>
                                <th>تاریخ ساخت</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                                <tr class="text-center">
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        @foreach ($role->permissions as $permission)
                                            <span class="badge badge-primary">
                                                    @lang($permission->name)
                                                </span>
                                        @endforeach
                                    </td>
                                    <td>{{ jdate($role->created_at)->format('Y-m-d') }}</td>
                                    <td>
                                        <div class="row">
                                            <a href="{{ route('adminto.role.edit', $role->id) }}"
                                               class="btn btn-warning">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{ route('adminto.role.change.status', $role->id) }}"
                                                  method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-dark ml-1">
                                                    <i class="fas fa-spinner"></i>
                                                </button>
                                            </form>
                                            <form action="{{ route('adminto.role.destroy', $role->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger ml-1 delete">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <hr>
                        {{ $roles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @include('admin.alerts.sweetalert.delete-confirm', ['className' => 'delete'])
@endsection
