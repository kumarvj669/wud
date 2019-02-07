@extends('layouts.app')

@section('content')
<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <a class="logo" href="login.html"><img src="{{ Url('public/images/logo.png') }}"  alt="logo"></a>
                <div class="navigation">
                    <h1 class="mobile-menu"><span><i class="fa fa-bars"></i></span>Menu</h1>
                    <ul class="nav-sub-menu">
                        <li><a href="sales.html">sales</a></li>
                        <li><a href="pos-list.html">Pos List</a></li>
                        <li><a href="add-pos.html">Add Pos</a></li>
                        <li><a href="change-password.html">Change Password</a></li>
                        <li><a href="{{url('logout')}}">Logout</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-9">
                <div class="right-sec">
                    <h1>Sales</h1>
                    <div class="account-sec">
                        <div class="sale-table-main">
                            <table class="sale-table">
                                <tr>
                                    <th><span><h3>Ammount</h3></span></th>
                                    <th><span><h3>Date / Time</h3></span></th>
                                    <th><span><h3>Code Number</h3></span></th>
                                    <th><span><h3>POS</h3></span></th>
                                    <th><span><h3>Status</h3></span></th>
                                </tr>

                                <tr>
                                    <td>300 Sar</td>
                                    <td>10/09/2018 - 16:45</td>
                                    <td>1234567890</td>
                                    <td>POS-2334</td>
                                    <td>Wating</td>
                                </tr>

                                <tr>
                                    <td>300 Sar</td>
                                    <td>10/09/2018 - 16:45</td>
                                    <td>1234567890</td>
                                    <td>POS-2334</td>
                                    <td>Wating</td>
                                </tr>

                                <tr>
                                    <td>300 Sar</td>
                                    <td>10/09/2018 - 16:45</td>
                                    <td>1234567890</td>
                                    <td>POS-2334</td>
                                    <td>Wating</td>
                                </tr>

                                <tr>
                                    <td>300 Sar</td>
                                    <td>10/09/2018 - 16:45</td>
                                    <td>1234567890</td>
                                    <td>POS-2334</td>
                                    <td>Wating</td>
                                </tr>

                                <tr>
                                    <td>300 Sar</td>
                                    <td>10/09/2018 - 16:45</td>
                                    <td>1234567890</td>
                                    <td>POS-2334</td>
                                    <td>Wating</td>
                                </tr>

                                <tr>
                                    <td>300 Sar</td>
                                    <td>10/09/2018 - 16:45</td>
                                    <td>1234567890</td>
                                    <td>POS-2334</td>
                                    <td>Wating</td>
                                </tr>

                                <tr>
                                    <td>300 Sar</td>
                                    <td>10/09/2018 - 16:45</td>
                                    <td>1234567890</td>
                                    <td>POS-2334</td>
                                    <td>Wating</td>
                                </tr>

                                <tr>
                                    <td>300 Sar</td>
                                    <td>10/09/2018 - 16:45</td>
                                    <td>1234567890</td>
                                    <td>POS-2334</td>
                                    <td>Wating</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
