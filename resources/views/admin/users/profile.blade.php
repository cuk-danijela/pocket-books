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
                <div class="col-md-4">
                     <img src="{{ asset('img/user.png') }}" class="img-circle img-responsive" alt="User Image" />
                </div>
                <div class="col-md-8">
                    <h3>Hello, {{ Auth::user()->name }} </h3><br/>
                    <p> Your e-mail address is <b>{{ Auth::user()->email }}</b>.</p><br/>

                    {{-- <div class="form-group">
                        <label class="col-md-3">Select Image:</label>
                        <div class="col-md-8">
                            <input type="file" name="image" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Change Profile Image</button>
                    </div> --}}
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
