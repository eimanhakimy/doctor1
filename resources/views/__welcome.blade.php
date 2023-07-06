@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="https://scontent-xsp1-3.xx.fbcdn.net/v/t39.30808-6/345455491_1206515043391941_6443815028418068295_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=U2eOJqtYwzgAX_XNHtX&_nc_ht=scontent-xsp1-3.xx&oh=00_AfAs_2jijVxVxZD2uRSU_SRtduk28HsffqIfjz61CuZUyA&oe=6461084A" class="img-fluid" style="border:1px solid #ccc;">
        </div>
        <div class="col-md-6">
            <h2>Welcome to VetMedic PetLover Website</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
            <div class="mt-5">
                <a href="{{url('/register')}}"><button class="btn btn-success">Customer Login Button</button></a>
                <a href="{{url('/login')}}"><button class="btn btn-secondary">Login</button></a>
            </div>
        </div>
    </div>
    <hr>
</div>
@endsection
