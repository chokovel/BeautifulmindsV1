@extends('layouts.app')


@section('content')
<div class="container">

    <div class="card card-default">
        <div class="card-header">Users</div>
        @include('partials.errors')
        <div class="card-body">
            @if($users->count() > 0)
            <table class="table">
                <thead>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </thead>
                <tbody>
                @foreach ($users as $user)
                        <tr>
                           
                            <td>
                                <img src="{{Gravatar::src($user->email)}}" alt=" {{$user->name}} " style="width:50px; border-radius:50%;">
                            </td>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                    {{ $user->email }}
                            </td>
                            <td>
                                    {{ $user->role }}
                            </td>
                            <td>
                                    @if(!$user->isAdmin())
                                        <form action="{{ route('user.make-admin', $user->id) }}" method="post">
                                            @csrf

                                            <button class="btn btn-success btn-sm">Make Admin</button>

                                        </form>
                                    @endif
                            </td>
                               
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
            @else

            <h3 class="text-center">No User Yet</h3>
            @endif
        </div>
    </div>
        

@endsection