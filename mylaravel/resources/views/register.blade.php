@extends('layout.default')

@section('content')
    <div class="register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="../index2.html"><b>Admin</b>LTE</a>
            </div>
            <!-- /.register-logo -->
            <div class="card">
                <div class="card-body register-card-body">
                    <p class="register-box-msg">Register a new membership</p>
                    <form action="{{ url('/register') }}" on onsubmit="retrun false" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Full Name" />
                            <div class="input-group-text"><span class="bi bi-person"></span></div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" />
                            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Password" />
                            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                        </div>
                        <!--begin::Row-->
                        <div class="row">
                            <div class="col-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I agree to the <a href="#">terms</a>
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Sign In</button>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!--end::Row-->
                    </form>
                    <!-- /.social-auth-links -->
                    <p class="mb-0">
                        <a href="login.html" class="text-center"> I already have a membership </a>
                    </p>
                </div>
                <!-- /.register-card-body -->
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        console.log('hello world');
        // ALERT('hellow wolrd')
    </script>
    <script>
        alert('hello world');
        let myval
        var myval2
        const PI = 3.14

        pi = 2
        console.log(PI, pi)

        let myarray = [];
        let myarry = [];

        myarray[0] = 1
        myarray["1"] = 2
        myarray.push(3)
        myarray.push(4)
        console.log(myarray)
        myarray.pop()
        console.log(myarray)
        for(a=1; a<10; a++){
            console.log(a);
        }
        function clickme(){
            let name=document.getElementById('name');
                name.value="new test"
                name=$('#name').val("new with jquery")
                $('#name').addClass('is-invalid')
                $('#name').addClass('is-valid')


            return false;
        }
        $(document).ready(function(){
            // alert('hello world');
        })
    </script>
@endsection


