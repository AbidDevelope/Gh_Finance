@include('admin.includes.link')

<title>Admin Login</title>
<div class="form_wrapper">
    <div class="form_container">
        <div class="title_container">
            <h2> Admin </h2>
        </div>
        <div class="row clearfix">
            <div class="">
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
                    <div class="">
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                            <input type="email" name="email" placeholder="Email" />
                        </div>
                        @error('email')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <input type="password" name="password" placeholder="Password" />
                        </div>
                        @error('password')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                        <input class="button" type="submit" value="login" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
