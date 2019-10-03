@extends('layouts.app')
@section('title', 'User Profile')

@section('content')
<div class="flex-center position-ref full-height">
    <main class="main">
        <div class="container">
             <div class="row">
                <div class="col-lg-12 margin-tb">

                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('home') }}"> <i
                                class="far fa-hand-point-left"></i> Back</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    {{-- Full name: {{ $user->name }} --}}
                    {{-- E-mail address: {{ $user->email }} --}}

                </div>
            </div>
        </div>
    </main>
</div>
@endsection
