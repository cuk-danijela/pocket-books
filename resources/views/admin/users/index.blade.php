@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Manage Users</div>

                <div class="card-body">
                   <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Roles</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach($users as $user)
      <tr>
          <th>{{ $user->name }}</th>
          <th>{{ $user->email }}</th>
          <th>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</th>
          <th>
              <a href="{{ route('admin.users.edit', $user->id) }}">
            <button type="button" class="btn btn-dark float-left">Edit</button>
            </a>
            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-dark float-left">Delete</button>
                </form>
          </th>
      </tr>
   @endforeach
  </tbody>
</table>
{{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
