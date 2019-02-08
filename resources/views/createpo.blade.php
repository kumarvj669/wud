@extends('layouts.app')
@section('content')
<div class="main-container">
    <div class="container">
        <div class="row">

            @include('layouts.sidebar')

            <div class="col-sm-9">
                <div class="right-sec">
                    <h1>Add Pos</h1>
                    @include('flash-messages')
                    <div class="row">

                        <div class="col-md-4 col-md-offset-4">
                            <div class="account-sec">
                                <form method="POST" action="{{ route('addpo') }}">
                                    @csrf
                                <div class="form-group">
                                    <input type="text" name="po_name" class="form-control" placeholder="Pos Name" required>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" required>
                                </div>

                                <input type="submit" class="login-btn" value="Add">
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