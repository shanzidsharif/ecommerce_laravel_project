@extends('website.master')

@section('title')
    Login/Register
@endsection

@section('body')

    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Login / Register</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="index.html">Shop</a></li>
                        <li>login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="checkout-wrapper section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Login Form</h4>
                        </div>
                        <p class="text-center text-danger">{{ session('message') }}</p>
                        <form action="{{ route('customer.login') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>

                                <div class="row mb-3">

                                    <div class="col-md-12 text-center">
                                        <input type="submit" class="btn btn-success" value="Login">
                                    </div>
                                </div>

                            </div>
                        </form>
                        </div>
                    </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Registration Form Form</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('customer.login') }}" method="POST">
                                @csrf
                                    <div class="row mb-3">
                                        <label for="" class="col-md-3">Full Name</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="name" placeholder="Full Name"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-3">Email Address</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="email" placeholder="Email Address"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-3">Mobile</label>
                                        <div class="col-md-9">
                                            <input type="number" class="form-control" name="mobile" placeholder="Mobile"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-3">Password</label>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" name="password" placeholder="Password"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">

                                        <div class="col-md-12 text-center">
                                            <input type="submit" class="btn btn-success" value="Register"/>
                                        </div>
                                    </div>

                            </form>
                    </div>
            </div>
        </div>
            </div>
        </div>
    </section>

@endsection

