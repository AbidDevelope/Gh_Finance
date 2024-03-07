<style>
    /* CSS */
    .label-input-container {
        display: flex;
        flex-direction: column;
        margin-bottom: 10px;
        /* Adjust this value as needed */
    }

    .label-input-container label {
        margin-bottom: 5px;
        /* Adjust this value as needed */
    }

    /* Your existing CSS for roundedlg class */
    .roundedlg {
        border-radius: 25px;
        background-color: white !important;
        height: 45px !important;
        outline: none !important;
    }

    .roundedlg:focus {
        outline: none !important;
        /* Removes the default focus outline */
        box-shadow: none !important;
        /* Removes the box shadow */

    }

    .color {
        background-color:  var(--own-black) !important;
        width: 100% !important;
    }

    .form_container {
        width: 50%;

    }

    /* Optional styling for the form */
    form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 5px;
    }

    .g-recaptcha {
        margin-bottom: 20px;
    }

    .img_custom_width {
        width: 300px !important;
        height: 300px !important;
        /* Maintain aspect ratio */
    }

    .top {
        padding-top: 47%;
    }

    .vertical_line {
        margin-top: 35px !important;
        height: 90vh !important;
        width: 1vw !important;
        background-color: var(--own-black) !important;
    }

    .shad {
        box-shadow: none !important;
    }

    .colour {
        color: var(--own-black) !important;
    }

    .eye-toggle {
        position: absolute;
        right: 8%;
        top: 45%;
        transform: translateY(-50%);
        cursor: pointer;
    }

    .rounde {
        background-color: white !important;
        width: 100% !important;
        height: 45px !important;
        border-radius: 25px;


    }

    .rounde:focus {
        outline: none !important;
        /* Removes the default focus outline */
        box-shadow: none !important;
        background-color: white !important;
    }

    .label-input-container input {
        border: 1px solid #ccc;
        outline: none;

    }

    .password-input input {
        border: 1px solid #ccc;
        outline: none;

    }
</style>

@include('admin.includes.link')


<title>Admin Login</title>
<div class="d-flex">
    <div class="form_container d-flex justify-content-center ">
        <div class="nalika-profile bg-white ">
            <div class="profile-dtl text-center top">
                <a href="{{ route('dashboard') }}"><img class="img_custom_width"
                        src="{{ asset('assets/admin/img/logo/gh_logo.jpg') }}" alt="No image found" /></a>
            </div>
            <div class="profile-social-dtl">
                <ul class="dtl-social">

                </ul>
            </div>
        </div>
    </div>
    <div class="vertical_line"></div>
    <div class="form_wrapper form_container shad">
        <div class="title_container  mt-4 d-flex justify-content-center text-black-50">
            <h2 class=" text-center colour"> Sign In </h2>
        </div>
        <div class="row clearfix ">
            <div class="">
                <form action="{{ route('admin/login') }}" method="POST">
                    @csrf
                    @if (session()->has('error'))
                        <div class="alert alert-success">
                            <span>{{ session()->get('error') }}</span>
                        </div>
                    @endif
                    @if (session()->has('success'))
                        <div class="alert alert-success" id="successAlert">
                            <span>{{ session()->get('success') }}</span>
                        </div>
                    @endif
                    <div class="">
                        <div class="label-input-container">

                            <input type="email" name="email" class=" roundedlg" placeholder="Username" />
                        </div>
                        @error('email')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                        <div class="mt-3">
                            <div class="password-input position-relative">
                                <input type="password" name="password" class="rounde" id="passwordField"
                                    placeholder="Password" />
                                <div toggle="#passwordField" class="eye-toggle fa fa-eye-slash"></div>
                            </div>
                        </div>


                        @error('password')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                        <div class="mt-3">
                            <form id="myForm" action="#" method="post">
                                <div class="g-recaptcha" data-sitekey="6LemK34pAAAAAJUrh8OwzcMxeD9pDbOrbEviriah"></div>

                            </form>
                            <input onclick="submitForm()" class=" color mt-3 roundedlg text-white" style="border:1px solid #0f1316" type="submit"
                                value="Submit" />
                </form>
            </div>
        </div>
        {{-- <div> <a class="text-black-50 text-decoration-underline d-flex justify-content-center" href="#">Forgot Password?</a> </div> --}}
    </div>
</div>
</div>
</div>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
    function submitForm() {
        var response = grecaptcha.getResponse();
        if (response.length === 0) {
            // reCAPTCHA not verified
            alert("Please complete the reCAPTCHA.");
            return false;
        } else {
            // reCAPTCHA verified, proceed with form submission
            document.getElementById("myForm").submit();
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const eyeToggle = document.querySelector('.eye-toggle');
        const passwordField = document.querySelector(eyeToggle.getAttribute('toggle'));

        eyeToggle.addEventListener('click', function() {
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
            this.classList.toggle('fa-eye');
        });
    });
</script>
<script>
    setTimeout(function(){
        document.getElementById('successAlert').style.display = 'none';
    }, 3000);
</script>