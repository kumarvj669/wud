@extends('layouts.app')
@section('content')
    <div class="main-container">
        <div class="container">
            <div class="row">

                @include('layouts.sidebar')

                <div class="col-sm-9">
                    <div class="right-sec">
                        <h1>Change Password</h1>
                        @include('flash-messages')
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="account-sec">
                                    <form method="POST" action="{{ route('changepassword') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="password" name="old_password" class="form-control" placeholder="Old Passord">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="new_password" class="form-control" placeholder="New Password">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="c_password" class="form-control" placeholder="ReType New Password">
                                        </div>

                                        <input type="submit" class="login-btn" value="Change">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection