@extends('layouts.admin')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                <form action="{{ route('admin.giveRole') }}" method="GET">
                    @csrf
                    <select class="selectpicker" id="userSelected" name="userSelected">
                        @foreach($users as $user)   
                            <option value="{{ $user }}"> {{$user->name}}</option>
                        @endforeach
                    </select>
                    <select class="selectpicker" id="roleSelected" name="roleSelected">
                        @foreach($roles as $role)   
                            <option value="{{ $role }}"> {{$role->name}}</option>
                        @endforeach
                    </select>
                    <button type="submit" id="buttonTest"> Delete</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection