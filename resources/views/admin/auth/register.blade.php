@include('admin.includes.link')

<title>Register</title>
<div class="form_wrapper">
    <div class="form_container">
        <div class="title_container">
            <h2> Registration </h2>
        </div>
        <div class="row clearfix">
            <div class="">
                <form action="{{ route('admin/register') }}" method="POST">
                    @csrf
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            <span>{{ session()->get('message') }}</span>
                        </div>
                    @endif
                    <div class="row clearfix">
                        <div class="col_half">
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                <input type="text" name="first_name" placeholder="First Name" />
                            </div>
                            @error('first_name')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col_half">
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                <input type="text" name="last_name" placeholder="Last Name" />
                            </div>
                            @error('last_name')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                        <input type="email" name="email" placeholder="Email" />
                    </div>
                    @error('email')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-phone"></i></span>
                        <input type="text" name="mobile" placeholder="Enter Number" />
                    </div>
                    @error('mobile')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                    @error('password')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                    <div class="input_field radio_option">
                        <input type="radio" name="gender" value="male" id="rd1">
                        <label for="rd1">Male</label>
                        <input type="radio" name="gender" value="female" id="rd2">
                        <label for="rd2">Female</label>
                    </div>
                    <div class="input_field checkbox_option">
                        <input type="checkbox" name="term_condition" value="yes" id="cb1">
                        <label for="cb1">I agree with terms and conditions</label>
                    </div>
                    <input class="button" type="submit" value="Register" />
                    <p class="credit">Already a member ? <a href="#" target="_blank">Sign In</a></p>
                </form>

            </div>
        </div>
    </div>
</div>

