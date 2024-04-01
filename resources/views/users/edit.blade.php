{{-- resources/views/users/edit.blade.php --}}
@extends('adminlte::page')

@section('title', 'Chỉnh Sửa Người Dùng')

@section('content_header')
    <h1>Chỉnh Sửa Người Dùng</h1>
@stop

@section('content')
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Tên:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Cập Nhật</button>
                <a href="{{ route('users.index') }}" class="btn btn-default">Hủy bỏ</a>
            </div>
        </div>
    </form>
@stop