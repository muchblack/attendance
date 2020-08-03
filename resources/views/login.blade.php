@extends('layouts.header')
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">{{ $company_name }}</h3></div>
                                    <div class="card-body">
                                        <form action="login" method="POST">
                                            @csrf
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">員工帳號</label><input class="form-control py-4" id="inputEmailAddress" name="Account" type="text" placeholder="請輸入員工帳號" /></div>
                                            <div class="form-group"><label class="small mb-1" for="inputPassword">密碼</label><input class="form-control py-4" id="inputPassword" type="password" name="Passwd" placeholder="請輸入密碼" /></div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck">記住密碼</label></div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="password.html">忘記密碼?</a><input type="submit" class="btn btn-primary" value="登入"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                @include('layouts.footer')
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
