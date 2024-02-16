<style>
    .roundedlg {
        border-radius: 20px;
        background-color: gainsboro !important;
    }

    .color {
        background-color: #639 !important;
    }

    .rounded-box {
        width: 350px;
        height: 35px;
        border-radius: 20px;
        background-color: gainsboro;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .right{
        margin-left: 50px;
    }
</style>

@include('admin.includes.link')

<title>Admin Login</title>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 right">
            <div class="form_wrapper">
                <div class="form_container">
                    <div class="nalika-profile bg-white">
                        <div class="profile-dtl">
                            <a href="{{ route('dashboard') }}"><img src="{{ asset('assets/admin/img/logo/gh_logo.jpg') }}"
                                    alt="" /></a>
                        </div>
                        <div class="profile-social-dtl">
                            <ul class="dtl-social">
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="title_container d-flex justify-content-start text-black-50">
                    <h2 class="text-black-50"> Admin </h2>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12">
                        <form action="{{ route('admin/login') }}" method="POST">
                            @csrf
                            @if (session()->has('error'))
                                <div class="alert alert-success">
                                    <span>{{ session()->get('error') }}</span>
                                </div>
                            @endif
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    <span>{{ session()->get('message') }}</span>
                                </div>
                            @endif
                            <div>
                                <label for="email" class="text-black-50">Email Address</label>
                                <input type="email" name="email" class="roundedlg" />
                            </div>
                            @error('email')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                            <div class="mt-3">
                                <label for="email" class="text-black-50">Password</label>
                                <input type="password" name="password" class="roundedlg" />
                            </div>
                            @error('password')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                            <input class="color mt-3 roundedlg mt-3 text-white" type="submit" value="Sign In" />
                        </form>
                        <div> <a class="text-black-50 text-decoration-underline d-flex justify-content-center"
                                href="#">Forgot Password?</a> </div>
                    </div>
                </div>
            </div>
        </div><!-- col-md-6 -->
        <div class="col-md-6">
            <div class="form_wrapper">
                <div class="form_container">
                    <div class="rounded-box">
                        <a href="">Your Text Here</a>
                    </div>
                    <div class="rounded-box mt-3">
                        Your Text Here
                    </div>
                    <div class="rounded-box mt-3">
                        Your Text Here
                    </div>
                </div>
            </div>

        </div><!-- col-md-6 -->
    </div><!-- row -->
</div><!-- container-fluid -->
