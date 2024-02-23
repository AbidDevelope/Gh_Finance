<style>
    /* CSS */
.label-input-container {
    display: flex;
    flex-direction: column;
    margin-bottom: 10px; /* Adjust this value as needed */
}

.label-input-container label {
    margin-bottom: 5px; /* Adjust this value as needed */
}

/* Your existing CSS for roundedlg class */
.roundedlg {
    border-radius: 20px;
    background-color: gainsboro !important;
}

    .color {
        background-color: #639 !important;
    }
</style>

@include('admin.includes.link')

<title>Admin Login</title>
<div class="form_wrapper">
    <div class="form_container">

        <div class="nalika-profile bg-white ">
            <div class="profile-dtl text-center">
                <a href="{{ route('dashboard') }}"><img src="{{ asset('assets/admin/img/logo/gh_logo.jpg') }}"
                        alt="" /></a>
                {{-- <h2>{{ Auth::guard('admin')->user()->first_name }} <span class="min-dtn">{{ Auth::guard('admin')->user()->last_name }}</span></h2> --}}
                {{-- <h2> <span class="min-dtn text-black-50">GHADER & HAMDOUN</span></h2> --}}
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
                    <div class="label-input-container">
                        <label for="email" class="text-black-50">Email Address</label>
                        <input type="email" name="email" class=" roundedlg" />
                    </div>
                    @error('email')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                    {{-- <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <input type="password" name="password" placeholder="Password" />
                        </div> --}}
                    <div class="mt-3">
                        <label for="email" class="text-black-50">Password</label>
                        <input type="password" name="password" class=" roundedlg" />
                    </div>
                    @error('password')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                    <input class=" color mt-3 roundedlg mt-3 text-white" type="submit" value="Sign In" />
                </div>
            </form>
            {{-- <div> <a class="text-black-50 text-decoration-underline d-flex justify-content-center" href="#">Forgot Password?</a> </div> --}}
        </div>
    </div>
</div>
</div>
