@extends('layouts.app')
@section('title', 'Edit User')

@section('content')
<div class="flex-center position-ref full-height">
    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h4>Manage {{ $user->name }}</h4>
                    </div>

                    <div class="pull-right">
                        <a class="btn btn-primary margin-none" href="{{ route('admin.users.index') }}"> <i
                                class="far fa-hand-point-left"></i> Back</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <form action="{{ route('admin.users.update', ['user'=>$user->id]) }}" method="POST">
                            @csrf
                            {{ method_field('PUT') }}
                            @foreach ($roles as $role)
                            <div class="form-check">
                                <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                                @if($user->roles->contains($role)) checked @endif >
                                <label>{{ $role->name }}</label>
                            </div>
                            @endforeach
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary"><i class="far fa-save"></i>
                                    Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </main>
</div>
@endsection
