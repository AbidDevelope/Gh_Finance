<div class="header-top-area bg-white">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                {{-- <div class="header-top-wraper"> --}}
                {{-- <div class="row"> --}}
                {{-- <div class="d-flex"> --}}
                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                    <div class="menu-switcher-pro ">
                        <button type="button" id="sidebarCollapse"
                            class="text-black-500 btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                            <i class="icon nalika-menu-task text-black-50"></i>
                        </button>
                    </div>
                </div>
                <div class="mt-3 col-lg-1 col-md-1 col-sm-1 col-xs-12 ">
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle bg-white text-black-50 border-0" href="#"
                            role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            Mega menu
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                {{-- </div> --}}
                {{-- <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"> --}}
                {{-- <div class="">
                    <div class="icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path
                                d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l6 5.99L20.49 20l-5.99-6zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                        </svg>
                    </div>
                    <input id="search" type="text" placeholder="Start typing to search">
                </div></div> --}}
                {{-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-white">
                        </div> --}}
                <div class="d-flex justify-content-end gap-3">
                    <div class=" mt-1 "> <i class="bi bi-arrows-move text-black-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-arrows-move" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708zM8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10M.146 8.354a.5.5 0 0 1 0-.708l2-2a.5.5 0 1 1 .708.708L1.707 7.5H5.5a.5.5 0 0 1 0 1H1.707l1.147 1.146a.5.5 0 0 1-.708.708zM10 8a.5.5 0 0 1 .5-.5h3.793l-1.147-1.146a.5.5 0 0 1 .708-.708l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L14.293 8.5H10.5A.5.5 0 0 1 10 8" />
                            </svg>
                        </i> </div>
                    <div class=" mt-3 "><i class="fas fa-bell text-black-50"></i>
                    </div>
                    <div class="">
                        <div class="header-right  text-black-50 ">
                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                <li class="nav-item">
                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                        class="nav-link dropdown-toggle">
                                        <i class="fas fa-circle fa-2x" style="color: blue;"></i>
                                        <i class="fas fa-pi fa-2x"
                                            style="color: white; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"></i>

                                    </a>
                                    <ul role="menu"
                                        class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                        <li><a href="register.html"><span class="icon nalika-home author-log-ic"></span>
                                                Register</a>
                                        </li>
                                        <li><a href="#"><span class="icon nalika-user author-log-ic"></span>
                                                My
                                                Profile</a>
                                        </li>
                                        <li><a href="lock.html"><span class="icon nalika-diamond author-log-ic"></span>
                                                Lock</a>
                                        </li>
                                        <li><a href="#"><span class="icon nalika-settings author-log-ic"></span>
                                                Settings</a>
                                        </li>
                                        <li><a href="{{ route('admin/logout') }}"><span
                                                    class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- </div> --}}
                {{-- </div> --}}
            </div>
        </div>
    </div>
</div>
<div class=" position-fixed top-50 end-0 z-index-setting">

    <div id='colorsidebar' class='d-flex trans-hide  align-items-start  justify-content-end  '>
        <div id="colorsidepicker" class=" p-1 py-2 spin-bg">
            <div class="spin">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.1389 3.46333C10.6122 1.51222 13.3878 1.51222 13.8611 3.46333C13.9321 3.75644 14.0714 4.02864 14.2675 4.25778C14.4636 4.48691 14.711 4.6665 14.9896 4.78194C15.2682 4.89738 15.5702 4.94539 15.8709 4.92208C16.1716 4.89876 16.4625 4.80478 16.72 4.64778C18.4344 3.60333 20.3978 5.56556 19.3533 7.28111C19.1966 7.53851 19.1027 7.82926 19.0795 8.12975C19.0562 8.43023 19.1042 8.73197 19.2195 9.01042C19.3348 9.28888 19.5142 9.5362 19.743 9.73228C19.9719 9.92836 20.2438 10.0677 20.5367 10.1389C22.4878 10.6122 22.4878 13.3878 20.5367 13.8611C20.2436 13.9321 19.9714 14.0714 19.7422 14.2675C19.5131 14.4636 19.3335 14.711 19.2181 14.9896C19.1026 15.2682 19.0546 15.5702 19.0779 15.8709C19.1012 16.1716 19.1952 16.4625 19.3522 16.72C20.3967 18.4344 18.4344 20.3978 16.7189 19.3533C16.4615 19.1966 16.1707 19.1027 15.8703 19.0795C15.5698 19.0562 15.268 19.1042 14.9896 19.2195C14.7111 19.3348 14.4638 19.5142 14.2677 19.743C14.0716 19.9719 13.9323 20.2438 13.8611 20.5367C13.3878 22.4878 10.6122 22.4878 10.1389 20.5367C10.0679 20.2436 9.92864 19.9714 9.73254 19.7422C9.53644 19.5131 9.28901 19.3335 9.01039 19.2181C8.73176 19.1026 8.42982 19.0546 8.12913 19.0779C7.82844 19.1012 7.5375 19.1952 7.28 19.3522C5.56556 20.3967 3.60222 18.4344 4.64667 16.7189C4.80345 16.4615 4.89728 16.1707 4.92054 15.8703C4.9438 15.5698 4.89583 15.268 4.78052 14.9896C4.66522 14.7111 4.48584 14.4638 4.25697 14.2677C4.02809 14.0716 3.75618 13.9323 3.46333 13.8611C1.51222 13.3878 1.51222 10.6122 3.46333 10.1389C3.75644 10.0679 4.02864 9.92864 4.25778 9.73254C4.48691 9.53644 4.6665 9.28901 4.78194 9.01039C4.89738 8.73176 4.94539 8.42982 4.92208 8.12913C4.89876 7.82844 4.80478 7.5375 4.64778 7.28C3.60333 5.56556 5.56556 3.60222 7.28111 4.64667C8.39222 5.32222 9.83222 4.72444 10.1389 3.46333Z"
                        stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M9 12C9 12.7956 9.31607 13.5587 9.87868 14.1213C10.4413 14.6839 11.2044 15 12 15C12.7956 15 13.5587 14.6839 14.1213 14.1213C14.6839 13.5587 15 12.7956 15 12C15 11.2044 14.6839 10.4413 14.1213 9.87868C13.5587 9.31607 12.7956 9 12 9C11.2044 9 10.4413 9.31607 9.87868 9.87868C9.31607 10.4413 9 11.2044 9 12Z"
                        stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M6 12C6 13.5913 6.63214 15.1174 7.75736 16.2426C8.88258 17.3679 10.4087 18 12 18C13.5913 18 15.1174 17.3679 16.2426 16.2426C17.3679 15.1174 18 13.5913 18 12C18 10.4087 17.3679 8.88258 16.2426 7.75736C15.1174 6.63214 13.5913 6 12 6C10.4087 6 8.88258 6.63214 7.75736 7.75736C6.63214 8.88258 6 10.4087 6 12Z"
                        stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>

        </div>
        <div class="bg-white px-3 pb-4">
            <p>Theme color</p>
            <div id="colorChoices" class="row gap-4">
                <div class="col">
                    <div id="purple-color" class="circle-choice purple-color"></div>
                </div>
                <div class="col">
                    <div id="red-color" class="circle-choice red-color"></div>
                </div>
                <div class="col">
                    <div id="green-color" class="circle-choice green-color"></div>
                </div>
                <div class="col">
                    <div id="yellow-color" class="circle-choice yellow-color"></div>
                </div>

            </div>
        </div>
    </div>

</div>


<script>
    let colorpicker = document.getElementById('colorsidebar')
    let colorsidepicker = document.getElementById('colorsidepicker')
    let colorChoices = document.getElementById('colorChoices')

    function myFunction() {
        let classArray = Array.from(colorpicker.classList);
        let findValue = classArray.find((item) => item === 'trans-hide');
        if (findValue) {
            colorpicker.classList.remove("trans-hide");
            colorpicker.classList.add("trans-show");
        } else {
            colorpicker.classList.add("trans-hide");
            colorpicker.classList.remove("trans-show");
        }
    }

    function changeColor(clickedColor) {
        switch (clickedColor) {
            case 'purple-color':
                document.documentElement.style.setProperty('--own-black', '#1c0d07');
                document.documentElement.style.setProperty('--active-nav-black', '#391d0d');
                document.documentElement.style.setProperty('--nav-black', '#552913');
                document.documentElement.style.setProperty('--filter-color', '#71391a');
                document.documentElement.style.setProperty('--filter-btn', '#9A4E24');
                break;
            case 'red-color':
                document.documentElement.style.setProperty('--own-black', '#130007');
                document.documentElement.style.setProperty('--active-nav-black', '#25000E');
                document.documentElement.style.setProperty('--nav-black', '#380116');
                document.documentElement.style.setProperty('--filter-color', '#4B011D');
                document.documentElement.style.setProperty('--filter-btn', '#70012B');
                break;
            case 'green-color':
                document.documentElement.style.setProperty('--own-black', '#172621');
                document.documentElement.style.setProperty('--active-nav-black', '#2A4038');
                document.documentElement.style.setProperty('--nav-black', '#3B593A');
                document.documentElement.style.setProperty('--filter-color', '#0D0D0D');
                document.documentElement.style.setProperty('--filter-btn', '#4D734C');
                break;
            case 'yellow-color':
                document.documentElement.style.setProperty('--own-black', ' #0F1316');
                document.documentElement.style.setProperty('--active-nav-black', '#152036');
                document.documentElement.style.setProperty('--nav-black', '#0a0b0');
                document.documentElement.style.setProperty('--filter-color', '#1B2A47');
                document.documentElement.style.setProperty('--filter-btn', '#1d82f5');
                break;
            default:
                break;
        }
    }
    colorsidepicker.addEventListener("click", myFunction);
    colorChoices.addEventListener('click', function(event) {
        const clickedColor = event.target.id;
        localStorage.setItem('user-color', clickedColor)
        changeColor(clickedColor)
    })
    window.addEventListener('load', () => {
        const userColor = localStorage.getItem('user-color');
        const clickedColor = userColor || 'yellow-color';
        changeColor(clickedColor)
    })
</script>

{{-- <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
  </script> --}}
{{-- <script>
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: 'en'
      }, 'google_translate_element');
    }
  </script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> --}}
