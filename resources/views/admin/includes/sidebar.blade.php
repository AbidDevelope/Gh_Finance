<style>
    i {
        font-size: 30px;
    }

    .left-sidebar-pro {
        background-color: white;
    }

    .left-sidebar-menu-pro li {
        border-top: 1px solid #ccc;
        /* Add a 1px solid border to the top side */
        padding-bottom: 35px;
        /* Add margin to separate each li */
        padding-top: 5px;
        /* Add padding to the top side */
    }

    .dash {
        /* background-color: red; */

        /* Add a 1px solid border to the top side */
        /* margin-bottom: 35px; */
        /* Add margin to separate each li */
        padding-top: 5px;
        /* Add padding to the top side */
    }
.dash:hover .dash{
    background-clip: black
}


    a:hover {
        background-color: transparent !important;
    }

    /* Initially hide the submenu */
    .container {
        position: relative;
        display: inline-block;
    }

    .servicelist {
    display: none;
    position: absolute;
    top: 0;
    left: 100%;
    width: 260px;
    height: 120vh;
    /* background-color: rgba(206, 208, 208, 0.3); */
    background-color: white;
    /* backdrop-filter: blur(1px); */
    box-sizing: border-box;
    z-index: 999;
    margin-top: -108px !important;
}



    .Quotationslist {
        display: none;
        position: absolute;
        top: 0;
        left: 100%;
        width: 260px;
        height: 130vh;
        background-color: #fff;
        box-sizing: border-box;
        z-index: 999;
        margin-top: -230px !important;
    }
    .invoiceslist {
        display: none;
        position: absolute;
        top: 0;
        left: 100%;
        width: 260px;
        height: 160vh;
        background-color: #fff;
        box-sizing: border-box;
        z-index: 999;
        margin-top: -442px !important;

    }


    .hrList {
        display: none;
        position: absolute;
        top: 0;
        left: 100%;
        width: 260px;
        height: 160vh;
        background-color: #fff;
        box-sizing: border-box;
        z-index: 999;
        margin-top: -445px !important;

    }


    .expenseslist {
        display: none;
        position: absolute;
        top: 0;
        left: 100%;
        width: 260px;
        height: 170vh;
        background-color: #fff;
        box-sizing: border-box;
        z-index: 999;
        margin-top: -482px !important;

    }
    .pettycashlist {
        display: none;
        position: absolute;
        top: 0;
        left: 100%;
        width: 260px;
        height: 180vh;
        background-color: #fff;
        box-sizing: border-box;
        z-index: 999;
        margin-top: -558px !important;

    }
    .clientslist {
        display: none;
        position: absolute;
        top: 0;
        left: 100%;
        width: 260px;
        height: 190vh;
        background-color: #fff;
        box-sizing: border-box;
        z-index: 999;
        margin-top: -640px !important;

    }

    .accountslist {
        display: none;
        position: absolute;
        top: 0;
        left: 100%;
        width: 260px;
        height: 200vh;
        background-color: #fff;
        box-sizing: border-box;
        z-index: 999;
        margin-top: -720px !important;

    }

    .reportslist {
        display: none;
        position: absolute;
        top: 0;
        left: 100%;
        width: 260px;
        height: 210vh;
        background-color: #fff;
        box-sizing: border-box;
        z-index: 999;
        margin-top: -800px !important;
    }

    .height {
        height: 15px;

    }

    .submenu-angle li {
        list-style-type: none;
        padding: 5px 10px;
    }

    /* .sidebar-h {
        height: 70px;
    } */

    .left_margin {
        margin-left: -8px !important;
        margin-bottom: 4px !important;
    }

    .top_margin {
        margin-top: -10px !important;
        padding-bottom: 8px !important;
    }

    .padding-top-service {
        padding-top: 108px !important;
    }

    .padding-top-quotation {
        padding-top: 228px !important;
    }

    .padding-top-Invoices {
        padding-top: 443px !important;
    }

    .padding-top-hr {
        padding-top: 443px !important;
    }

    .padding-top-expenses {
        padding-top: 480px !important;
    }
    .padding-top-pettycash {
        padding-top:558px !important;
    }
    .padding-top-clients {
        padding-top: 640px !important;
    }

    .padding-top-accounts {
        padding-top: 720px !important;
    }

    .padding-top-reports {
        padding-top: 800px !important;
    }

    .triangle-container {
        position: relative;
        display: inline-block;
        padding: 10px;
        /* background-color: #f0f0f0; */
        /* border: 1px solid #ccc; */
        border-radius: 5px;
        text-decoration: none;
    }

    .triangledash {
        position: absolute;
        bottom: -35px;
        right: 2px;
        width: 0;
        height: 0;
        border-left: 30px solid transparent;
        /* Adjust the size of the triangle */
        border-top: 30px solid white;
        /* Adjust the size of the triangle and its color */
        transform: translate(100%, 100%);
        opacity: 0;
        /* Initially hide the triangle */
        transition: opacity 0.3s;
        /* Add a transition for smooth hover effect */
        transform: rotate(90deg);
    }

    .triangle {
        position: absolute;
        bottom: -35px;
        right: 2px;
        width: 0;
        height: 0;
        border-left: 30px solid transparent;
        /* Adjust the size of the triangle */
        border-top: 30px solid white;
        /* Adjust the size of the triangle and its color */
        transform: translate(100%, 100%);
        opacity: 0;
        /* Initially hide the triangle */
        transition: opacity 0.3s;
        /* Add a transition for smooth hover effect */
        transform: rotate(90deg);
    }

    .triangle-container:hover .triangle {
        opacity: 1;
        /* Display the triangle on hover */
    }

    .triangle-container:hover .triangledash {
        opacity: 1;
        /* Display the triangle on hover */
    }

    /* .triangle-container:hover .hovercolor {
        color: white;

    } */

    .custom-image {
        max-width: 100%;
        /* Ensure image doesn't exceed its container's width */
        height: 30px;
        /* Maintain aspect ratio */
        width: 30px;
        /* Set the width to 50% of its container */
    }

    .text {
        font-size: 13px;

    }

    .hoverbg:hover .hoverlist path {
        fill: var(--own-black);
        /* Change to your desired color */
    }

    .hoverbg:hover .hoverlist {
        color: var(--own-black);
        /* Change to your desired color */
    }

    .text-black-50.hoverbg:hover {
        background-color: #CCCCCC;
        /* background-color: var(--own-black); */

    }

    .hoverbgservice {
        padding-left: -15px !important;
    }

    .m_bottom {
        margin-bottom: 90px !important;
    }

    /* CSS */
    .sidebar-h.dash {
        border-top: none;
        /* Remove the border from the top */
    }

    .h {
        height: 35px !important;
    }

    .pb {
        padding-bottom: 25px !important;
    }
    .removable:hover {
        background-color:  var(--own-black);
    }

    .removable:hover .hovercolor{
        color: white;
    }
</style>

<script>
    // services
    document.addEventListener('DOMContentLoaded', function() {
        var Services = document.getElementsByClassName('Services')[0];
        var ServicesMenu = document.getElementsByClassName('servicelist')[0];

        Services.addEventListener('mouseenter', function() {
            ServicesMenu.style.display = 'block';
        });


        Services.addEventListener('mouseleave', function() {
            ServicesMenu.style.display = 'none';
        });

        document.addEventListener('click', function(event) {
            var target = event.target;
            if (!Services.contains(target) && !ServicesMenu.contains(target)) {
                ServicesMenu.style.display = 'none';
            }
        });

        Services.addEventListener('click', function() {
            ServicesMenu.style.display = ServicesMenu.style.display === 'block' ? 'none' : 'block';
        });
    });


    // Quotations
    document.addEventListener('DOMContentLoaded', function() {
        var Quotations = document.getElementsByClassName('Quotations')[0];
        var quotationsMenu = document.getElementsByClassName('Quotationslist')[0];
        Quotations.addEventListener('mouseenter', function() {
            quotationsMenu.style.display = 'block';
        });
        Quotations.addEventListener('mouseleave', function() {
            quotationsMenu.style.display = 'none';
        });
        document.addEventListener('click', function(event) {
            var targetElement = event.target;
            if (!Quotations.contains(targetElement) && !quotationsMenu.contains(targetElement)) {
                quotationsMenu.style.display = 'none';
            }
        });
        Quotations.addEventListener('click', function() {
            quotationsMenu.style.display = quotationsMenu.style.display === 'block' ? 'none' : 'block';
        });
    });

    // invoices
    document.addEventListener('DOMContentLoaded', function() {
        var invoices = document.getElementsByClassName('invoices')[0];
        var invoicesMenu = document.getElementsByClassName('invoiceslist')[0];
        invoices.addEventListener('mouseenter', function() {
            invoicesMenu.style.display = 'block';
        });
        invoices.addEventListener('mouseleave', function() {
            invoicesMenu.style.display = 'none';
        });
        document.addEventListener('click', function(event) {
            var targetElement = event.target;
            if (!invoices.contains(targetElement) && !invoicesMenu.contains(targetElement)) {
                invoicesMenu.style.display = 'none';
            }
        });
        invoices.addEventListener('click', function() {
            invoicesMenu.style.display = invoicesMenu.style.display === 'block' ? 'none' : 'block';
        });
    });
    // hr
    document.addEventListener('DOMContentLoaded', function() {
        var hr = document.getElementsByClassName('hr')[0];
        var hrlist = document.getElementsByClassName('hrList')[0];
        hr.addEventListener('mouseenter', function() {
            hrlist.style.display = 'block';
        });
        hr.addEventListener('mouseleave', function() {
            hrlist.style.display = 'none';
        });
        document.addEventListener('click', function(event) {
            var targetElement = event.target;
            if (!hr.contains(targetElement) && !hrlist.contains(targetElement)) {
                hrlist.style.display = 'none';
            }
        });
        hr.addEventListener('click', function() {
            hrlist.style.display = hrlist.style.display === 'block' ? 'none' : 'block';
        });
    });

    // expenses
    document.addEventListener('DOMContentLoaded', function() {
        var expenses = document.getElementsByClassName('expenses')[0];
        var expensesMenu = document.getElementsByClassName('expenseslist')[0];

        expenses.addEventListener('mouseenter', function() {
            expensesMenu.style.display = 'block';
        });

        expenses.addEventListener('mouseleave', function() {
            expensesMenu.style.display = 'none';
        });

        document.addEventListener('click', function(event) {
            var targetElement = event.target;
            if (!expenses.contains(targetElement) && !expensesMenu.contains(targetElement)) {
                expensesMenu.style.display = 'none';
            }
        });

        expenses.addEventListener('click', function() {
            expensesMenu.style.display = expensesMenu.style.display === 'block' ? 'none' : 'block';
        });
    });
    // petty cash
    document.addEventListener('DOMContentLoaded', function() {
        var pettycash = document.getElementsByClassName('pettycash')[0];
        var pettycashMenu = document.getElementsByClassName('pettycashlist')[0];

        pettycash.addEventListener('mouseenter', function() {
            pettycashMenu.style.display = 'block';
        });

        pettycash.addEventListener('mouseleave', function() {
            pettycashMenu.style.display = 'none';
        });

        document.addEventListener('click', function(event) {
            var targetElement = event.target;
            if (!pettycash.contains(targetElement) && !pettycashMenu.contains(targetElement)) {
                pettycashMenu.style.display = 'none';
            }
        });

        pettycash.addEventListener('click', function() {
            pettycashMenu.style.display = pettycashMenu.style.display === 'block' ? 'none' : 'block';
        });
    });
    // clients
    document.addEventListener('DOMContentLoaded', function() {
        var clients = document.getElementsByClassName('clients')[0];
        var clientslist = document.getElementsByClassName('clientslist')[0];

        clients.addEventListener('mouseenter', function() {
            clientslist.style.display = 'block';
        });

        clients.addEventListener('mouseleave', function() {
            clientslist.style.display = 'none';
        });

        document.addEventListener('click', function(event) {
            var targetElement = event.target;
            if (!clients.contains(targetElement) && !clientslist.contains(targetElement)) {
                clientslist.style.display = 'none';
            }
        });

        clients.addEventListener('click', function() {
            clientslist.style.display = clientslist.style.display === 'block' ? 'none' : 'block';
        });
    });

    // accounts
    document.addEventListener('DOMContentLoaded', function() {
        var accounts = document.getElementsByClassName('accounts')[0];
        var accountsMenu = document.getElementsByClassName('accountslist')[0];

        accounts.addEventListener('mouseenter', function() {
            accountsMenu.style.display = 'block';
        });

        accounts.addEventListener('mouseleave', function() {
            accountsMenu.style.display = 'none';
        });

        document.addEventListener('click', function(event) {
            var targetElement = event.target;
            if (!accounts.contains(targetElement) && !accountsMenu.contains(targetElement)) {
                accountsMenu.style.display = 'none';
            }
        });

        // opening list by clicking on parent div
        accounts.addEventListener('click', function() {
            accountsMenu.style.display = accountsMenu.style.display === 'block' ? 'none' : 'block';
        });
    });


    // reports
    document.addEventListener('DOMContentLoaded', function() {
        var reports = document.getElementsByClassName('reports')[0];
        var reportsMenu = document.getElementsByClassName('reportslist')[0];

        reports.addEventListener('mouseenter', function() {
            reportsMenu.style.display = 'block';
        });

        reports.addEventListener('mouseleave', function() {
            reportsMenu.style.display = 'none';
        });

        document.addEventListener('click', function(event) {
            var targetElement = event.target;
            if (!reports.contains(targetElement) && !reportsMenu.contains(targetElement)) {
                reportsMenu.style.display = 'none';
            }
        });

        reports.addEventListener('click', function() {
            reportsMenu.style.display = reportsMenu.style.display === 'block' ? 'none' :
                'block';
        });
    });
</script>

<div class="left-sidebar-pro m_bottom " style=" margin-top: -15px !important;">
    <nav id="sidebar" class="bg-white shadow-sm">
        <div class="left-custom-menu-adp-wrap comment-scrollbar " style="height: 550px; overflow-y: auto;">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu bg-white " id="menu1">
                    <li class="removable sidebar-h dash ">
                        <a class="text-black-50 d-flex flex-column align-items-center triangle-container"id="toggleServices"
                            href="{{ route('dashboard') }}">
                            <div class="mb-2">

                                <svg class="hovercolor" width="40" height="40" viewBox="0 0 60 60"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M24.5 31.5H9.5C9.23479 31.5 8.98043 31.3946 8.79289 31.2071C8.60536 31.0196 8.5 30.7652 8.5 30.5V10.5C8.5 10.2348 8.60536 9.98043 8.79289 9.79289C8.98043 9.60536 9.23478 9.5 9.5 9.5H24.5C24.7652 9.5 25.0196 9.60536 25.2071 9.79289C25.3946 9.98043 25.5 10.2348 25.5 10.5V30.5C25.5 30.7652 25.3946 31.0196 25.2071 31.2071C25.0196 31.3946 24.7652 31.5 24.5 31.5ZM8.79289 51.2071C8.60536 51.0196 8.5 50.7652 8.5 50.5V40.5C8.5 40.2348 8.60536 39.9804 8.79289 39.7929C8.98043 39.6054 9.23479 39.5 9.5 39.5H24.5C24.7652 39.5 25.0196 39.6054 25.2071 39.7929C25.3946 39.9804 25.5 40.2348 25.5 40.5V50.5C25.5 50.7652 25.3946 51.0196 25.2071 51.2071C25.0196 51.3946 24.7652 51.5 24.5 51.5H9.5C9.23478 51.5 8.98043 51.3946 8.79289 51.2071ZM33.7929 51.2071C33.6054 51.0196 33.5 50.7652 33.5 50.5V33C33.5 32.7348 33.6054 32.4804 33.7929 32.2929C33.9804 32.1054 34.2348 32 34.5 32H49.5C49.7652 32 50.0196 32.1054 50.2071 32.2929C50.3946 32.4804 50.5 32.7348 50.5 33V50.5C50.5 50.7652 50.3946 51.0196 50.2071 51.2071C50.0196 51.3946 49.7652 51.5 49.5 51.5H34.5C34.2348 51.5 33.9804 51.3946 33.7929 51.2071ZM49.5 24H34.5C34.2348 24 33.9804 23.8946 33.7929 23.7071C33.6054 23.5196 33.5 23.2652 33.5 23V10.5C33.5 10.2348 33.6054 9.98043 33.7929 9.79289C33.9804 9.60536 34.2348 9.5 34.5 9.5H49.5C49.7652 9.5 50.0196 9.60536 50.2071 9.79289C50.3946 9.98043 50.5 10.2348 50.5 10.5V23C50.5 23.2652 50.3946 23.5196 50.2071 23.7071C50.0196 23.8946 49.7652 24 49.5 24Z"
                                        stroke-width="3" />
                                </svg>
                            </div>
                            <div>
                                <span class="mini-click-non hovercolor text">Dashboard</span>
                            </div>
                            <div class="triangledash hovercolor"></div>
                        </a>
                    </li>
                    <li class="removable sidebar-h Services">
                        <a id="toggleServices"
                            class="text-black-50 d-flex flex-column align-items-center triangle-container"
                            href="#" aria-expanded="false">
                            <div class="mb-2">
                                <svg class="hovercolor" width="40" height="40" viewBox="0 0 100 100"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M65.0195 3.24219C64.1797 3.39844 63.7695 4.0625 63.0078 6.48438C62.0898 9.45312 62.1094 9.45312 58.9844 7.91016C57.1484 6.99219 56.582 6.79688 56.1328 6.91406C55.4102 7.10938 52.4219 10.0977 52.2266 10.8203C52.1094 11.2695 52.3047 11.8359 53.2227 13.6719C54.7656 16.7969 54.7656 16.7773 51.7969 17.6953C50.3711 18.1445 49.3359 18.5742 49.0234 18.8672C48.5547 19.3359 48.5352 19.4336 48.5352 21.875C48.5352 24.3164 48.5547 24.4141 49.0234 24.8828C49.3359 25.1758 50.3711 25.6055 51.7969 26.0547C54.7656 26.9727 54.7656 26.9531 53.2227 30.0781C52.3047 31.9141 52.1094 32.4805 52.2266 32.9297C52.4219 33.6523 55.4102 36.6406 56.1328 36.8359C56.582 36.9531 57.1484 36.7578 58.9844 35.8398C62.1094 34.2969 62.0898 34.2969 63.0078 37.2656C63.457 38.6914 63.8867 39.7266 64.1797 40.0391C64.6484 40.5078 64.7461 40.5273 67.1875 40.5273C69.6289 40.5273 69.7266 40.5078 70.1953 40.0391C70.4883 39.7266 70.918 38.6914 71.3672 37.2656C72.2852 34.3164 72.3047 34.2969 75.4297 35.8594C77.2461 36.7578 77.7734 36.9531 78.2227 36.8359C78.9648 36.6406 81.9531 33.6523 82.1484 32.9297C82.2656 32.4805 82.0703 31.9141 81.1523 30.0781C79.6094 26.9531 79.6094 26.9727 82.5781 26.0547C84.0234 25.6055 85.0391 25.1758 85.3516 24.8828C85.8203 24.4141 85.8398 24.3164 85.8398 21.875C85.8398 19.4336 85.8203 19.3359 85.3516 18.8672C85.0391 18.5742 84.0234 18.1445 82.5781 17.6953C79.6094 16.7773 79.6094 16.7969 81.1523 13.6719C82.0703 11.8359 82.2656 11.2695 82.1484 10.8203C81.9531 10.0977 78.9648 7.10938 78.2227 6.91406C77.7734 6.79688 77.2461 6.99219 75.4297 7.89062C72.3047 9.45312 72.2852 9.43359 71.3672 6.48438C70.3906 3.33984 70.3125 3.26172 67.6367 3.20312C66.4844 3.18359 65.293 3.20312 65.0195 3.24219ZM68.7109 8.49609C69.0625 9.66797 69.5117 10.7812 69.6875 10.9766C69.8633 11.1523 70.7227 11.5625 71.582 11.9141L73.125 12.5195L75.332 11.4453C77.168 10.5469 77.6172 10.3906 77.9102 10.5859C78.7891 11.1328 78.7695 11.3867 77.6172 13.7305L76.543 15.9375L77.1484 17.4805C77.5 18.3398 77.9102 19.1992 78.0859 19.375C78.2812 19.5508 79.3945 20 80.5664 20.3516L82.7148 21.0156V21.875V22.7344L80.5664 23.3984C79.3945 23.75 78.2812 24.1992 78.0859 24.375C77.9102 24.5508 77.5 25.4102 77.1484 26.2695L76.543 27.8125L77.6172 30.0195C78.5156 31.8555 78.6719 32.3047 78.4766 32.5977C77.9297 33.4766 77.6758 33.457 75.332 32.3047L73.125 31.2305L71.582 31.8359C70.7227 32.1875 69.8633 32.5977 69.6875 32.7734C69.5117 32.9688 69.0625 34.0625 68.7109 35.2539L68.0469 37.4023H67.1875H66.3281L65.6641 35.2539C65.3125 34.0625 64.8633 32.9688 64.6875 32.7734C64.5117 32.5977 63.6523 32.1875 62.793 31.8359L61.25 31.2305L59.043 32.3047C56.6992 33.457 56.4453 33.4766 55.8984 32.5977C55.7031 32.3047 55.8594 31.8555 56.7578 30.0195L57.832 27.8125L57.2266 26.2695C56.875 25.4102 56.4648 24.5508 56.2891 24.375C56.0938 24.1992 55 23.75 53.8086 23.3789L51.6602 22.7148V21.875V21.0352L53.8086 20.3711C55 20 56.0938 19.5508 56.2891 19.375C56.4648 19.1992 56.875 18.3398 57.2266 17.4805L57.832 15.9375L56.7578 13.7305C55.6055 11.3867 55.5859 11.1328 56.4648 10.5859C56.7578 10.3906 57.207 10.5469 59.043 11.4453L61.25 12.5195L62.793 11.9141C63.6523 11.5625 64.5117 11.1523 64.6875 10.9766C64.8633 10.7812 65.293 9.72656 65.6445 8.59375C65.9766 7.46094 66.3086 6.46484 66.3477 6.38672C66.4062 6.30859 66.7969 6.25 67.2461 6.28906L68.0469 6.34766L68.7109 8.49609Z" />
                                    <path
                                        d="M65.3516 14.2578C64.1211 14.5703 62.3633 15.625 61.5039 16.543C61.0742 17.0117 60.4297 17.9883 60.0977 18.7109C59.5312 19.9023 59.4727 20.1953 59.4727 21.8945C59.4727 23.6523 59.5117 23.8281 60.1953 25.2344C61.0742 27.0117 62.207 28.1055 64.0234 28.9648C65.2148 29.5313 65.5078 29.5898 67.1875 29.5898C68.8672 29.5898 69.1602 29.5313 70.3516 28.9648C72.168 28.1055 73.3008 27.0117 74.1797 25.2344C74.8633 23.8281 74.9023 23.6523 74.9023 21.875C74.9023 20.0977 74.8633 19.9219 74.1797 18.5156C72.8516 15.8594 70.5078 14.2773 67.6172 14.1406C66.7969 14.1016 65.7812 14.1602 65.3516 14.2578ZM68.6328 17.4219C70.3125 17.9297 71.875 20.0781 71.875 21.875C71.875 24.2969 69.6094 26.5625 67.1875 26.5625C65.957 26.5625 64.9609 26.1133 63.9648 25.0977C61.9727 23.125 61.9727 20.625 63.9648 18.6523C65.332 17.2656 66.7969 16.8945 68.6328 17.4219Z" />
                                    <path
                                        d="M86.5234 6.60156C86.1719 6.89453 85.957 7.63672 85.2539 11.0938C84.8047 13.3789 84.4922 15.2734 84.5508 15.332C84.8047 15.4688 87.3047 15.8789 87.4023 15.8008C87.4609 15.7422 87.6562 14.8828 87.8711 13.8867C88.0664 12.9102 88.2812 12.0508 88.3398 11.9922C88.3984 11.9336 88.6914 12.5781 89.0234 13.418C91.8164 20.7422 90.8984 28.6133 86.4844 35.1172C85.957 35.918 85.5469 36.582 85.5859 36.6016C85.625 36.6211 86.1523 37.0703 86.7969 37.5586L87.9297 38.4766L88.2812 38.0469C90.5273 35.1562 92.4609 30.8594 93.2812 26.8555C93.7109 24.7266 93.789 19.5703 93.3984 17.4805C93.0859 15.8203 92.1289 12.6367 91.5039 11.2109C91.1914 10.5273 91.1133 10.1562 91.2695 10.1562C91.4062 10.1758 92.2656 10.332 93.2226 10.5273C94.1601 10.7227 94.9609 10.8398 95 10.7617C95.1562 10.4883 95.5469 7.98828 95.4492 7.89062C95.332 7.75391 87.7734 6.25 87.2851 6.25C87.1094 6.25 86.7578 6.40625 86.5234 6.60156Z" />
                                    <path
                                        d="M35.8789 21.8359C35.3711 22.3438 34.9609 22.8516 34.9609 22.9492C34.9609 23.0469 35.3711 23.5547 35.8789 24.0625L36.7969 25H34.6289C25.2539 25 16.2109 28.1641 8.90625 33.9844C7.10938 35.4102 3.32031 39.1797 3.32031 39.5312C3.32031 39.668 3.82812 40.1758 4.43359 40.6836L5.56641 41.6016L6.97266 40.0781C7.73438 39.2383 9.10156 37.9297 10 37.168C16.875 31.3477 25.625 28.125 34.5898 28.125C35.6445 28.125 36.5234 28.2031 36.5234 28.2812C36.5234 28.3594 36.1719 28.7891 35.7422 29.1992C35.3125 29.6094 34.9609 30.0391 34.9609 30.1367C34.9609 30.3516 36.8359 32.2266 37.0703 32.2266C37.1484 32.2266 38.3398 31.0938 39.707 29.7266C41.8945 27.5195 42.1875 27.1289 42.1875 26.5625C42.1875 25.9961 41.8945 25.6055 39.707 23.3984C38.3398 22.0312 37.1289 20.8984 37.0117 20.8984C36.8945 20.8984 36.3867 21.3281 35.8789 21.8359Z" />
                                    <path
                                        d="M31.8164 34.4922C30.9766 34.6484 30.5469 35.332 30.1758 37.0117C30 37.8711 29.7266 39.1602 29.5703 39.8828L29.2773 41.1719L27.8906 41.5234L26.5039 41.8555L25.8203 41.0938C22.9297 37.8906 22.3242 37.3047 21.7969 37.3047C21.0156 37.3047 17.6367 39.082 16.4648 40.1172C15.8203 40.6641 15.8984 41.3086 16.8945 44.3359L17.7539 46.9727L16.7578 47.9883L15.7617 48.9844L14.8633 48.7109C14.375 48.5742 13.1836 48.1836 12.2266 47.8516C9.88281 47.0703 9.35547 47.0703 8.63281 47.9688C7.79297 48.9844 6.05469 52.4023 6.05469 53.0273C6.05469 53.5742 6.60156 54.1406 9.84375 57.0703L10.6055 57.7539L10.2734 59.1406L9.92188 60.5273L8.63281 60.8203C7.91016 60.9766 6.60156 61.25 5.72266 61.4453C3.26172 61.9531 3.22266 62.0508 3.22266 65.625C3.22266 69.1992 3.26172 69.2969 5.72266 69.8047C6.60156 70 7.91016 70.2734 8.63281 70.4297L9.92188 70.7227L10.2734 72.1094L10.6055 73.4961L9.84375 74.1797C6.64062 77.0703 6.05469 77.6758 6.05469 78.2031C6.05469 79.1406 8.41797 83.3789 9.16016 83.7891C9.76562 84.1016 10.3516 84.0234 12.2266 83.3984C13.1836 83.0664 14.375 82.6758 14.8633 82.5391L15.7617 82.2656L16.7578 83.2617L17.7539 84.2773L16.8945 86.9141C16.0156 89.5508 15.8984 90.1172 16.1328 90.7227C16.4258 91.4453 20.8008 93.9453 21.7969 93.9453C22.3242 93.9453 22.9297 93.3594 25.8203 90.1562L26.5039 89.3945L27.8906 89.7266L29.2773 90.0781L29.5703 91.3672C29.7266 92.0898 30 93.3984 30.1953 94.2773C30.7031 96.7383 30.8008 96.7773 34.375 96.7773C37.9492 96.7773 38.0469 96.7383 38.5547 94.2773C38.75 93.3984 39.0234 92.0898 39.1797 91.3672L39.4727 90.0781L40.8594 89.7266L42.2461 89.3945L42.9297 90.1562C45.8594 93.3984 46.4258 93.9453 46.9727 93.9453C47.6562 93.9453 51.2305 92.0898 52.0898 91.2891C52.9297 90.4883 52.9297 90.1367 51.8555 86.9141L50.9961 84.2773L51.9922 83.2617L52.9883 82.2656L53.8867 82.5391C54.375 82.6758 55.5664 83.0664 56.5234 83.3984C58.8086 84.1602 59.2578 84.1602 60.0391 83.3398C60.8398 82.4805 62.6953 78.9062 62.6953 78.2227C62.6953 77.6367 62.3633 77.2656 59.6875 74.8828L58.1445 73.4961L58.4961 72.1094C58.6719 71.3281 58.8672 70.7031 58.9062 70.7031C58.9453 70.7031 60.2148 70.4297 61.7578 70.0977C65.6445 69.2578 65.5273 69.3945 65.5273 65.625C65.5273 61.8555 65.6445 61.9922 61.7578 61.1523C60.2148 60.8203 58.9453 60.5469 58.9062 60.5469C58.8672 60.5469 58.6719 59.9219 58.4961 59.1406L58.1445 57.7539L59.6875 56.3672C62.3242 54.0039 62.6953 53.5938 62.6953 53.0469C62.6953 52.2656 60.918 48.8867 59.8828 47.6953C59.3359 47.0703 58.6914 47.1484 55.6641 48.1445L53.0273 49.0039L51.9922 47.9883L50.9766 46.9727L51.8555 44.3359C52.9297 41.1523 52.9492 40.7617 52.0898 39.9609C51.2305 39.1602 47.6562 37.3047 46.9727 37.3047C46.4258 37.3047 45.8594 37.8516 42.9297 41.0938L42.2461 41.8555L40.8594 41.5234L39.4727 41.1719L39.1797 39.8828C39.0234 39.1602 38.75 37.8516 38.5547 36.9727C38.0469 34.5898 37.9102 34.4922 34.8047 34.4531C33.4375 34.4336 32.0898 34.4531 31.8164 34.4922ZM36.0938 40.3516C36.4453 41.9531 36.8555 43.3789 37.0312 43.5742C37.207 43.7695 37.8516 44.0234 38.457 44.1602C39.0625 44.2773 40.2344 44.5898 41.0938 44.8633C41.9336 45.1172 42.8125 45.293 43.0469 45.2344C43.3984 45.1562 44.5898 43.9453 47.168 41.0547C47.3633 40.8398 47.5781 40.8789 48.3984 41.2891L49.3945 41.7969L48.9258 43.3008C48.6523 44.1406 48.2812 45.3516 48.0469 45.9766C47.832 46.6211 47.6562 47.3438 47.6562 47.5781C47.6562 48.2031 51.7773 52.3438 52.4023 52.3438C52.6367 52.3438 54.043 51.9531 55.5078 51.4844L58.1836 50.625L58.6914 51.5234C58.9648 52.0117 59.1602 52.4805 59.1406 52.5586C59.1016 52.6367 58.1445 53.5547 56.9727 54.5898C55.8203 55.6445 54.8242 56.6992 54.7656 56.9336C54.707 57.1875 54.8828 58.0664 55.1367 58.9062C55.4102 59.7656 55.7227 60.9375 55.8398 61.543C55.9766 62.1484 56.2305 62.793 56.4062 62.9688C56.6016 63.125 58.0469 63.5547 59.6289 63.9062L62.5 64.5312V65.625V66.7188L59.6289 67.3438C58.0469 67.6953 56.6016 68.125 56.4062 68.2812C56.2305 68.457 55.9766 69.1016 55.8398 69.707C55.7227 70.3125 55.4102 71.4844 55.1367 72.3438C54.8828 73.1836 54.707 74.0625 54.7656 74.2969C54.8438 74.6484 56.0547 75.8398 58.9453 78.418C59.1602 78.6133 59.1211 78.8281 58.7109 79.6484L58.2227 80.625L57.3828 80.3711C56.9141 80.2344 55.7031 79.8438 54.668 79.5117C53.6328 79.1797 52.5977 78.9062 52.3828 78.9062C51.7773 78.9062 47.6562 83.0664 47.6562 83.6719C47.6562 83.9062 47.832 84.6289 48.0469 85.2734C48.2812 85.8984 48.6523 87.1094 48.9258 87.9492L49.3945 89.4531L48.3984 89.9609C47.5781 90.3711 47.3633 90.4102 47.168 90.1953C44.5898 87.3047 43.3984 86.0938 43.0469 86.0156C42.8125 85.957 41.9336 86.1328 41.0938 86.3867C40.2344 86.6602 39.0625 86.9727 38.457 87.0898C37.8516 87.2266 37.207 87.4805 37.0312 87.6562C36.875 87.8516 36.4453 89.2969 36.0938 90.8789L35.4688 93.75H34.375H33.2812L32.6562 90.8984C32.3047 89.2969 31.8945 87.8711 31.7188 87.6758C31.543 87.4805 30.8984 87.2266 30.293 87.0898C29.6875 86.9727 28.5156 86.6602 27.6562 86.3867C26.8164 86.1328 25.9375 85.957 25.7031 86.0156C25.3516 86.0938 24.2383 87.2266 21.5625 90.2148C21.3672 90.4297 21.1719 90.3906 20.3516 89.9414L19.375 89.4141L19.8438 87.9297C20.0977 87.0898 20.4688 85.8984 20.7031 85.2734C20.918 84.6289 21.0938 83.9062 21.0938 83.6719C21.0938 83.0664 16.9727 78.9062 16.3672 78.9062C16.0352 78.9062 13.9844 79.5117 11.1133 80.4492C10.625 80.625 10.5469 80.5664 10.0586 79.6484C9.60938 78.8281 9.57031 78.6328 9.78516 78.4375C12.6367 75.8984 13.8867 74.668 13.9844 74.3164C14.043 74.0625 13.8672 73.1836 13.6133 72.3438C13.3398 71.4844 13.0273 70.3125 12.9102 69.707C12.7734 69.1016 12.5195 68.457 12.3242 68.2812C12.1094 68.0859 10.7227 67.6758 9.10156 67.3438L6.25 66.7188V65.625V64.5312L9.10156 63.9062C10.7227 63.5742 12.1094 63.1641 12.3242 62.9688C12.5195 62.793 12.7734 62.1484 12.9102 61.543C13.0273 60.9375 13.3398 59.7656 13.6133 58.9062C13.8672 58.0664 14.043 57.168 13.9844 56.9336C13.9258 56.6797 12.9297 55.625 11.7773 54.5898C10.6055 53.5352 9.64844 52.6172 9.60938 52.5586C9.58984 52.4805 9.78516 52.0117 10.0586 51.5234L10.5664 50.625L12.0703 51.0938C12.8906 51.3477 14.1016 51.7188 14.7266 51.9531C15.3711 52.168 16.0938 52.3438 16.3281 52.3438C16.9727 52.3438 21.0938 48.2227 21.0938 47.5781C21.0938 47.3438 20.918 46.6211 20.7031 45.9766C20.4688 45.3516 20.0977 44.1406 19.8438 43.3203L19.375 41.8164L20.2734 41.3086C20.7617 41.0352 21.2305 40.8398 21.3086 40.8594C21.3867 40.8984 22.3047 41.8555 23.3398 43.0273C24.3945 44.1797 25.4492 45.1758 25.6836 45.2344C25.9375 45.293 26.8164 45.1172 27.6562 44.8633C28.5156 44.5898 29.6875 44.2773 30.293 44.1602C30.8984 44.0234 31.543 43.7695 31.7188 43.5742C31.8945 43.3789 32.3047 41.9531 32.6562 40.3516L33.2812 37.5H34.375H35.4688L36.0938 40.3516Z" />
                                    <path
                                        d="M31.1719 48.75C24.3359 49.9805 18.6914 55.7031 17.4805 62.5977C15.4492 74.3164 25.625 84.5703 37.2656 82.5391C46.6211 80.8984 52.9101 71.9922 51.289 62.7148C49.6289 53.2617 40.664 47.0312 31.1719 48.75ZM38.5742 52.2266C40.7812 52.9297 42.4414 53.9648 44.2383 55.7617C46.0156 57.5391 47.0508 59.1797 47.793 61.4258C48.2422 62.8125 48.3008 63.3008 48.3008 65.625C48.3008 67.9492 48.2422 68.4375 47.793 69.8242C47.0508 72.0703 46.0156 73.7109 44.2383 75.4883C42.4609 77.2656 40.8203 78.3008 38.5742 79.043C37.1875 79.4922 36.6992 79.5508 34.375 79.5508C32.0508 79.5508 31.5625 79.4922 30.1758 79.043C27.9492 78.3008 26.3086 77.2852 24.5117 75.4883C22.7344 73.7109 21.6992 72.0703 20.957 69.8242C20.5078 68.4375 20.4492 67.9492 20.4492 65.625C20.4492 63.3008 20.5078 62.8125 20.957 61.4258C21.6992 59.1797 22.7344 57.5391 24.5117 55.7617C26.6992 53.5742 29.1015 52.2656 31.914 51.7578C33.6523 51.4453 36.8164 51.6602 38.5742 52.2266Z" />
                                    <path
                                        d="M79.2383 42.3828C78.3594 42.6562 78.1836 42.9102 77.6367 44.5312C77.168 45.9375 77.0703 46.0938 76.4648 46.2891C75.8594 46.4844 75.625 46.4453 74.2188 45.8008C72.2852 44.9219 72.1094 44.9609 70.2539 46.8164C68.3984 48.6719 68.3594 48.8477 69.2383 50.7812C69.8828 52.1875 69.9219 52.4219 69.7266 53.0078C69.5312 53.6133 69.375 53.7305 67.9297 54.2188C65.8398 54.9414 65.7227 55.1562 65.7227 57.8125C65.7227 60.4688 65.8398 60.6836 67.9297 61.4062C69.375 61.8945 69.5312 62.0117 69.7266 62.6172C69.9219 63.2031 69.8828 63.4375 69.2383 64.8438C68.3594 66.7773 68.3984 66.9531 70.2539 68.8086C72.1094 70.6641 72.2852 70.7031 74.2188 69.8242C75.625 69.1797 75.8594 69.1406 76.4453 69.3359C77.0508 69.5312 77.168 69.6875 77.6562 71.1328C78.3789 73.2227 78.5938 73.3398 81.25 73.3398C83.9062 73.3398 84.1211 73.2227 84.8438 71.1328C85.332 69.6875 85.4492 69.5312 86.0547 69.3359C86.6406 69.1406 86.875 69.1797 88.2812 69.8242C90.2148 70.7031 90.3906 70.6641 92.2461 68.8086C94.1016 66.9531 94.1406 66.7773 93.2617 64.8438C92.6172 63.4375 92.5781 63.2031 92.7734 62.6172C92.9688 62.0117 93.125 61.8945 94.5703 61.4062C96.6602 60.6836 96.7773 60.4688 96.7773 57.8125C96.7773 55.1172 96.6406 54.9023 94.5508 54.1992C93.125 53.7305 92.9688 53.6328 92.7734 53.0273C92.5781 52.4219 92.6172 52.1875 93.2617 50.7812C94.1406 48.8477 94.1016 48.6719 92.2461 46.8164C90.3906 44.9609 90.2148 44.9219 88.2812 45.8008C86.875 46.4453 86.6406 46.4844 86.0547 46.2891C85.4492 46.0938 85.332 45.9375 84.8438 44.4922C84.4727 43.4375 84.1406 42.832 83.8086 42.6172C83.2617 42.2461 80.1367 42.0898 79.2383 42.3828ZM82.3242 46.7773C82.6172 47.5781 82.9688 48.3203 83.0859 48.418C83.418 48.6914 85.7812 49.6484 86.4062 49.7461C86.7969 49.8242 87.3633 49.668 88.3008 49.1992L89.6484 48.5547L90.0586 48.9648L90.4688 49.375L89.8438 50.7422C89.4141 51.6797 89.2383 52.3047 89.3164 52.6758C89.4141 53.2812 90.3711 55.6445 90.6445 55.9766C90.7422 56.0938 91.4844 56.4453 92.2852 56.7383C93.6328 57.2266 93.75 57.3047 93.75 57.8125C93.75 58.3203 93.6328 58.3984 92.2852 58.8867C91.4844 59.1797 90.7422 59.5312 90.6445 59.6484C90.3711 59.9805 89.4141 62.3438 89.3164 62.9688C89.2383 63.3594 89.3945 63.9258 89.8633 64.8633L90.5078 66.2109L90.0977 66.6211L89.6875 67.0312L88.3203 66.4062C87.3828 65.9766 86.7578 65.8008 86.3867 65.8789C85.7812 65.9766 83.418 66.9336 83.0859 67.207C82.9688 67.3047 82.6172 68.0469 82.3242 68.8477C81.8359 70.1953 81.7578 70.3125 81.25 70.3125C80.7422 70.3125 80.6641 70.1953 80.1758 68.8477C79.8828 68.0469 79.5312 67.3047 79.4141 67.207C79.082 66.9336 76.7188 65.9766 76.1133 65.8789C75.7422 65.8008 75.1172 65.9766 74.1797 66.4062L72.8125 67.0312L72.4219 66.6406L72.0312 66.25L72.6562 64.8828C73.0859 63.9453 73.2617 63.3203 73.1836 62.9492C73.0664 62.3242 72.1289 59.9805 71.8359 59.6289C71.7383 59.5117 70.9961 59.1602 70.1953 58.8672C68.8672 58.3984 68.75 58.3008 68.75 57.8125C68.75 57.3047 68.8672 57.2266 70.2148 56.7383C71.0156 56.4453 71.7578 56.0938 71.8555 55.9766C72.1289 55.6445 73.0859 53.2812 73.1836 52.6758C73.2617 52.3047 73.0859 51.6797 72.6562 50.7422L72.0312 49.375L72.4219 48.9844L72.8125 48.5938L74.1797 49.2188C75.1172 49.6484 75.7422 49.8242 76.1133 49.7461C76.7188 49.6484 79.082 48.6914 79.4141 48.418C79.5312 48.3203 79.8828 47.5781 80.1758 46.7773C80.6641 45.4297 80.7422 45.3125 81.25 45.3125C81.7578 45.3125 81.8359 45.4297 82.3242 46.7773Z" />
                                    <path
                                        d="M79.7852 51.7383C77.9883 52.207 76.4062 53.4961 75.5859 55.1758C75.2148 55.9766 75.1172 56.4648 75.1172 57.8125C75.0977 59.3359 75.1562 59.5703 75.7617 60.7031C76.5039 62.0703 77.1289 62.6562 78.5937 63.4375C79.4336 63.8672 79.8437 63.9453 81.25 63.9453C82.6562 63.9453 83.0664 63.8672 83.9062 63.4375C85.3711 62.6562 85.9961 62.0703 86.7383 60.7031C87.3437 59.5703 87.4023 59.3359 87.3828 57.8125C87.3828 56.4062 87.3047 55.9961 86.875 55.1562C86.1133 53.6914 85.5078 53.0664 84.1992 52.3633C82.9297 51.6992 80.9961 51.4062 79.7852 51.7383ZM82.4805 54.9609C84.4922 55.8008 84.9805 58.418 83.418 59.9805C82.1484 61.25 80.3516 61.25 79.082 59.9805C76.6602 57.5781 79.3359 53.6328 82.4805 54.9609Z" />
                                </svg>
                            </div>
                            <div>
                                <!-- Text -->
                                <span class="mini-click-non hovercolor text">Services</span>
                            </div>
                            <div class="triangle"></div>
                        </a>
                        <ul class="servicelist padding-top-service">
                            <div class=" text-black-50 hoverbg d-flex justify-content-start "> <a
                                    class=" left_margin text-black-50 pb-2" href="{{ route('all/services') }}"><svg
                                        class="hoverlist text-black-50" width="20" height="20" viewBox="0 0 101 100"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M42.7851 0.214803C42.037 0.471982 40.6342 1.43056 40.1432 2.03843C39.9795 2.22547 39.5821 2.90349 39.2781 3.55812C38.7872 4.56346 38.6937 5.07781 38.6937 7.0651C38.6937 10.2214 38.4599 10.5955 35.8647 11.6242C34.7892 12.045 33.4098 12.6529 32.8019 12.9568C32.1941 13.2608 31.2589 13.4946 30.7445 13.4946C29.8794 13.4946 29.6223 13.3309 27.8454 11.6475C25.1333 9.09915 23.263 8.53803 20.5509 9.44984C19.5689 9.77716 18.7273 10.4786 14.893 14.2895C9.60912 19.5266 9.11814 20.2513 9.2818 22.7764C9.3987 24.8338 9.84292 25.6988 11.9471 27.9901C14.0279 30.2345 14.0513 30.4683 12.7654 33.344C12.2744 34.4429 11.7133 35.7989 11.5496 36.3601C11.386 36.9212 10.9651 37.6226 10.5677 37.9499C9.95982 38.4642 9.67926 38.511 7.73873 38.511C4.83963 38.511 3.41346 38.9552 1.96391 40.3112C0.0935194 42.0647 0 42.4856 0 50.084C0 57.3318 0.0233798 57.4721 1.56645 59.2255C2.82896 60.6517 4.27851 61.1895 6.9672 61.1895C9.49222 61.1895 10.6145 61.5401 11.0587 62.4286C11.1989 62.7091 11.6432 63.7612 12.0406 64.7666C12.4381 65.7719 12.9524 67.011 13.2096 67.502C14.098 69.2321 13.911 69.8634 11.8302 72.0377C9.70264 74.2588 9.18828 75.2407 9.1649 77.2046C9.11814 79.6128 9.6325 80.3843 14.5656 85.3175C19.4754 90.2272 20.2469 90.7182 22.6785 90.7182C24.619 90.7182 25.8581 90.1103 28.126 87.9828C29.4586 86.7436 30.2068 86.2059 30.6276 86.2059C30.9549 86.2059 32.2876 86.6735 33.6202 87.2346C34.9295 87.7957 36.2621 88.3335 36.5895 88.427C37.4078 88.6842 38.1559 89.1985 38.3663 89.6661C38.4599 89.8765 38.6001 91.3495 38.6937 92.9159C38.8339 95.5111 38.9041 95.8618 39.5353 96.8671C40.4471 98.34 41.8967 99.4155 43.3696 99.7428C44.0476 99.8831 47.0169 100 50.2433 100C56.6728 100 57.6079 99.8363 59.2212 98.4569C60.8577 97.0775 61.2084 96.1189 61.3721 92.8224C61.5124 89.3855 61.6527 89.1985 64.4816 88.0763C65.5337 87.6554 66.8897 87.0709 67.4976 86.767C69.3446 85.8318 69.7655 85.9721 71.9398 87.9828C72.9919 88.9647 74.3245 89.9934 74.8857 90.2506C76.1715 90.8117 78.4628 90.8351 79.7487 90.2974C80.3565 90.0636 82.2269 88.3568 85.2663 85.3408C90.5735 80.057 90.971 79.4491 90.784 76.8539C90.6437 74.9134 90.2228 74.1419 88.2356 72.0377C86.4119 70.1206 86.1547 69.4425 86.6691 68.0865C88.0719 64.5561 89.0538 62.4052 89.5448 61.9142C90.0592 61.3765 90.3397 61.3297 92.9817 61.1895C96.3016 61.0258 97.2602 60.6751 98.6396 59.0385C100.089 57.3785 100.229 56.4433 100.136 49.4528C100.066 42.6025 99.9489 42.0414 98.3123 40.4281C96.9095 39.0254 95.9275 38.6747 92.7712 38.5344C89.3578 38.3707 89.1941 38.2538 88.142 35.4716C87.7913 34.513 87.0198 32.7829 86.4587 31.6373L85.4066 29.5565L91.836 23.1037C99.3176 15.552 99.3644 15.5052 99.3644 11.858C99.3644 8.60817 98.8032 7.5327 95.4132 4.166C91.9763 0.77592 90.9944 0.284943 87.6511 0.284943C84.0038 0.284943 83.583 0.565501 75.9144 8.02367L69.672 14.1492L68.2692 13.4244C67.4976 13.027 65.861 12.3256 64.6453 11.8346C61.6527 10.6656 61.3721 10.2681 61.3721 7.182C61.3721 4.44656 60.9746 3.09052 59.7589 1.85139C58.0522 0.0979041 57.8885 0.0511444 50.2667 0.00438467C45.918 -0.0189952 43.2293 0.0511444 42.7851 0.214803ZM56.4857 3.90882C57.304 4.35304 57.6313 5.40513 57.6313 7.60284C57.6313 10.1279 58.0755 11.6943 59.1276 12.9334C59.9226 13.8686 60.2499 14.0323 64.4816 15.8559C65.7208 16.3703 66.7495 16.8846 66.7495 16.9782C66.7495 17.0717 65.9546 17.9133 65.0194 18.8485C63.2893 20.5085 63.2659 20.5319 62.6112 20.2046C61.3487 19.5499 57.491 18.4511 55.0829 18.0536C52.1838 17.5627 46.1518 17.6796 43.5099 18.2874C26.0218 22.2386 15.0332 38.9552 18.587 56.2797C20.7145 66.6603 27.9389 75.4745 37.5948 79.4491C50.1498 84.6161 64.0842 81.6936 73.3426 71.9676C77.8783 67.1981 80.754 61.4466 81.8295 54.9003C82.1568 53.0299 82.2036 51.6739 82.11 48.7046C81.9464 44.0053 81.2917 40.8957 79.6785 37.2719L79.0707 35.9158L80.8241 34.139L82.601 32.3621L83.5362 34.2091C84.0272 35.2144 84.7286 36.8276 85.0793 37.7628C85.8742 39.8203 87.2536 41.3166 88.8902 41.8777C89.5916 42.1115 90.784 42.2518 92.1634 42.2518C94.6416 42.2518 95.5301 42.5557 96.0912 43.6546C96.3717 44.2157 96.4419 45.3847 96.4419 49.9671C96.4419 57.4721 96.512 57.3552 92.1166 57.5188C89.9189 57.589 89.3812 57.6825 88.3758 58.1968C86.5522 59.1554 86.0378 59.8802 84.3779 63.9015C83.0218 67.1279 82.8348 67.8059 82.8114 69.1386C82.788 71.1726 83.2556 72.1078 85.1962 74.1185C88.2589 77.3215 88.2823 77.1813 82.8114 82.6522C78.907 86.5332 78.4394 86.954 77.5743 87.0709C76.6391 87.1878 76.569 87.1411 74.722 85.411C72.2437 83.1197 71.2852 82.6054 69.3213 82.582C67.9886 82.582 67.3807 82.7457 64.1309 84.0783C62.1203 84.8966 60.1096 85.8786 59.642 86.2293C58.2392 87.3983 57.7716 88.7309 57.6313 91.9807C57.5144 94.7162 57.491 94.8798 56.8598 95.4877L56.2285 96.1423H50.0095H43.7905L43.1124 95.3708C42.4578 94.646 42.4344 94.5057 42.4344 92.4483C42.4344 89.6193 42.0136 88.1932 40.7277 86.7904C39.886 85.8786 39.2781 85.5279 36.5895 84.429C32.4512 82.7223 31.3524 82.4184 30.0431 82.6054C28.5 82.8158 27.3544 83.4938 25.3438 85.411C23.7305 86.9307 23.4266 87.1411 22.6317 87.1411C21.8134 87.1411 21.5095 86.9073 17.3712 82.7457L12.9758 78.3503V77.2514C12.9758 76.1993 13.046 76.059 14.7293 74.3289C15.6879 73.3236 16.6932 72.0143 16.9504 71.4532C17.605 70.0037 17.5583 68.2034 16.8101 66.4499C16.4828 65.6784 15.8983 64.2055 15.5242 63.1767C14.5656 60.6283 13.8643 59.5295 12.7888 58.7579C11.4327 57.8228 9.91306 57.4487 7.45817 57.4487C5.37737 57.4487 5.23709 57.4253 4.51231 56.7707L3.74078 56.0926L3.67064 50.5049C3.62388 46.8576 3.67064 44.6365 3.85768 44.052C4.25513 42.6726 4.93315 42.3921 8.18295 42.2518C10.708 42.1349 11.1288 42.0647 12.1108 41.4802C13.5603 40.6152 14.2617 39.6332 15.1969 37.1783C15.6177 36.0327 16.2724 34.4897 16.6231 33.7181C17.1374 32.6193 17.2777 31.9646 17.2777 30.6787C17.3011 28.5979 16.7867 27.5926 14.589 25.278C13.1161 23.7116 12.9758 23.4778 12.9758 22.5659C12.9758 21.584 13.046 21.5138 17.3712 17.1886C22.772 11.7644 22.5382 11.858 25.3905 14.57C28.6637 17.6796 30.5107 18.0302 34.7191 16.23C36.0751 15.6689 37.7117 15.0142 38.343 14.7804C39.0911 14.5233 39.9094 13.9622 40.6108 13.2374C42.0136 11.8112 42.4344 10.4552 42.4344 7.34566C42.4344 5.10119 42.4578 5.03105 43.1124 4.35304L43.7905 3.67502H49.916C53.6568 3.67502 56.2052 3.76854 56.4857 3.90882ZM89.8254 4.25952C90.9476 4.72711 94.7585 8.46789 95.2963 9.63688C95.8574 10.8526 95.8574 12.8633 95.2963 14.0791C95.0625 14.5934 94.2208 15.6455 93.4493 16.3937L92.0231 17.7731L86.8795 12.7932C84.0272 10.0577 81.7126 7.74311 81.7126 7.6496C81.7126 7.32228 84.752 4.58684 85.5001 4.25952C86.5054 3.8153 88.7499 3.8153 89.8254 4.25952ZM84.1908 15.4117C86.9497 18.1471 89.1707 20.4384 89.1474 20.5085C89.0071 20.8358 52.4176 56.8642 52.1604 56.9343C52.0202 56.9577 49.6354 54.7366 46.8766 51.9544L41.8499 46.9277L44.5386 44.2624C55.9714 32.8765 78.8369 10.4552 79.0005 10.4552C79.094 10.4552 81.4554 12.6763 84.1908 15.4117ZM56.6961 22.2152C57.9119 22.5426 59.2212 22.9166 59.5952 23.0803L60.2966 23.3375L48.9106 34.7235L37.5247 46.1094L35.3036 54.8769C34.0878 59.6931 33.0825 63.8781 33.0825 64.1353C33.0825 65.0471 33.9475 65.8654 34.9061 65.8654C35.3737 65.8654 39.6756 64.9068 44.4451 63.7379L53.119 61.6337L64.5985 50.2944C70.8877 44.0754 76.1248 38.9786 76.1949 38.9786C76.5924 38.9786 77.8549 43.561 78.229 46.4368C78.3926 47.6058 78.4394 49.6632 78.3693 51.3699C77.925 60.8621 72.7113 69.5594 64.5284 74.3991C54.8725 80.1505 43.2761 79.7764 33.7137 73.4171C31.6563 72.0377 28.1727 68.6476 26.6998 66.5434C20.6444 57.9864 19.7326 46.5069 24.3852 37.2251C28.3831 29.2292 36.2621 23.3375 45.0296 21.7944C48.1391 21.2567 53.8672 21.4671 56.6961 22.2152ZM46.5025 56.7239C47.5312 57.7526 48.3261 58.6644 48.256 58.7346C48.0923 58.8748 37.6649 61.4232 37.5714 61.3297C37.548 61.283 38.1092 58.8748 38.8339 55.9524L40.1432 50.6685L42.411 52.7493C43.6502 53.8949 45.4972 55.6952 46.5025 56.7239Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M78.0653 19.1758C77.7848 19.3395 72.5243 24.3428 66.3754 30.3047C50.9915 45.1976 51.7864 44.3793 51.7864 45.2678C51.7864 46.2731 52.6748 47.1615 53.6802 47.1615C54.3348 47.1615 54.8492 46.7641 57.2573 44.4027C58.8237 42.8596 64.5518 37.2952 70.0227 31.988C75.4936 26.7042 80.1462 22.075 80.3566 21.7243C80.9411 20.8358 80.8709 20.3448 80.0994 19.5499C79.3512 18.8252 78.8369 18.7316 78.0653 19.1758Z"
                                            fill="#7F7F7F" />
                                    </svg><span class="ml-1 text  hoverlist">All</span></a></div>
                            <div class=" text-black-50 mt-3 hoverbg d-flex justify-content-start pt-2"> <a
                                    class="left_margin top_margin text-black-50 " href="{{ route('designs') }}"><svg
                                        class="hoverlist" width="20" height="20" viewBox="0 0 100 100"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M79.1016 0.429688C78.5742 0.566406 76.2305 2.79297 68.5547 10.4688L58.6914 20.3125H35.8984H13.1055L13.0469 12.7734L12.9883 5.23438L12.5195 4.86328C11.6016 4.12109 8.78906 4.51172 6.26953 5.72266C4.45312 6.60156 2.24609 8.82812 1.30859 10.6836C-0.097659 13.5352 -0.019534 11.2695 0.0390597 47.3633L0.0976535 79.7852L0.566404 81.1523C1.48437 83.8867 3.6914 86.4648 6.13281 87.6758C8.65234 88.9062 7.57812 88.8672 32.9102 88.8672H55.957L51.6211 93.2031C46.8164 98.0078 46.582 98.3594 47.5195 99.2969L48.0273 99.8047H73.5352H99.043L99.5117 99.3164L100 98.8477V73.4375C100 57.5391 99.9219 47.8906 99.8047 47.6758C99.707 47.4805 99.375 47.207 99.043 47.0898C98.2227 46.7383 97.7344 47.0703 95.3125 49.4922L93.2617 51.5625L93.1641 36.4258L93.0664 21.3086L92.6172 20.8594C92.1875 20.4102 92.1094 20.4102 86.2891 20.3516L80.3906 20.293L84.7266 15.957C87.5195 13.1445 89.1602 11.3672 89.3555 10.8984C89.7656 9.88281 89.7266 8.30078 89.2578 7.32422C89.0234 6.83594 87.6563 5.33203 85.8789 3.57422C83.5352 1.26953 82.7344 0.585938 82.1289 0.410156C81.1914 0.15625 80.0391 0.15625 79.1016 0.429688ZM84.0234 5.82031C87.4414 9.23828 87.4219 9.12109 85.0586 11.5039L83.3984 13.1836L80.0391 9.80469L76.6602 6.44531L78.3399 4.78516C80.7227 2.42188 80.6055 2.40234 84.0234 5.82031ZM10.1562 29.9805C10.1562 52.0898 10.1562 52.3438 10.5469 52.7344C11.2891 53.4766 12.5 53.1641 12.8711 52.1289C13.0273 51.6992 13.0859 47.207 13.0859 37.4805V23.4375H34.3164H55.5469L51.3086 27.6953C48.9844 30.0391 47.0703 32.0898 47.0703 32.2852C47.0703 33.3398 48.125 34.1797 49.043 33.8086C49.2969 33.7109 54.082 29.043 59.668 23.457L69.8242 13.2812L73.1836 16.6406L76.5625 20.0195L61.3867 35.1953L46.1914 50.3906L42.832 47.0312L39.4531 43.6523L42.5781 40.5273C45.9766 37.0898 46.1719 36.7773 45.2148 35.8398C44.2578 34.8633 44.0039 35.0195 39.8828 39.1211L36.0938 42.9102L33.6133 49.9219L31.1328 56.9336L28.3398 57.0312C25.7031 57.1289 25.5273 57.1484 25.1758 57.5977C24.6875 58.2031 24.707 58.9453 25.2344 59.5117L25.6445 59.9609H46.5234H67.4023L67.8711 59.4727C68.457 58.9062 68.4961 58.2227 67.9883 57.5977L67.6172 57.1289L52.8125 57.0312L38.0273 56.9336L42.4023 55.4102L46.7773 53.8672L62.0117 38.6523L77.2461 23.4375H83.75H90.2344V39.0039V54.5898L79.4922 65.332C70.2148 74.6094 68.75 76.1523 68.75 76.6602C68.75 77.4219 69.4336 78.125 70.1953 78.125C70.7422 78.125 72.2461 76.6797 83.9258 65L97.0703 51.8555V58.3398V64.8047L95.4297 64.8633C93.5156 64.9609 92.9688 65.2734 92.9688 66.3477C92.9688 67.4805 93.4766 67.7734 95.4102 67.7734H97.0703V70.0195V72.2656H95.4688C93.5938 72.2656 92.9688 72.6367 92.9688 73.75C92.9688 74.8047 93.6719 75.1953 95.5273 75.1953H97.0703V77.4414V79.6875H95.4102C93.4766 79.6875 92.9688 79.9805 92.9688 81.1133C92.9688 82.1875 93.5156 82.5 95.4297 82.5977L97.0703 82.6562V84.7656V86.875L95.4297 86.9336C93.5156 87.0312 92.9688 87.3438 92.9688 88.418C92.9688 89.5508 93.4766 89.8438 95.4102 89.8438H97.0703V93.3594V96.875H74.5703H52.0508L59.7266 89.1992C64.082 84.8438 67.3828 81.3867 67.3828 81.1914C67.3828 80.7617 67.0313 80.0391 66.7188 79.8438C66.6016 79.7656 66.2109 79.6875 65.8398 79.6875C65.2344 79.6875 64.8633 79.9805 62.0117 82.8125L58.8672 85.9375H34.5508C8.3789 85.9375 9.19922 85.9766 7.1875 84.9414C6.03515 84.3555 4.45312 82.6953 3.84765 81.4453C2.42187 78.5352 2.85156 75.3711 5 72.7344C6.28906 71.1328 9.10156 69.7266 11.0156 69.7266C11.6602 69.7266 12.0312 69.6094 12.4414 69.2578L12.9883 68.7891V62.9102C12.9883 57.1289 12.9883 57.0312 12.5586 56.6211C12.0312 56.0938 11.0937 56.0547 10.5469 56.543C10.1758 56.875 10.1562 57.1289 10.1562 61.8359V66.7773L9.33594 66.9922C6.95312 67.6172 5.58594 68.2812 3.94531 69.668L2.92969 70.5469V43.0273C2.92969 24.0039 2.98828 15.1367 3.14453 14.3555C3.53515 12.2461 4.88281 10.1172 6.58203 8.94531C7.59765 8.26172 9.0625 7.63672 9.72656 7.61719H10.1562V29.9805ZM78.0274 11.9141L81.3477 15.2344L79.9805 16.6016L78.6133 17.9688L75.2539 14.6094L71.875 11.2305L73.1836 9.92188C73.9063 9.17969 74.5508 8.59375 74.6094 8.59375C74.668 8.59375 76.2109 10.0781 78.0274 11.9141ZM43.1055 51.9922C42.9688 52.0703 42.0508 52.4219 41.0352 52.7539L39.2188 53.3594L37.832 51.9922L36.4648 50.625L37.207 48.5352L37.9492 46.4453L40.6445 49.1406C42.4805 50.9766 43.2617 51.8945 43.1055 51.9922Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M78.8672 78.8672C70.8984 86.8359 70.5078 87.2461 70.5078 87.9297C70.5078 88.4766 70.625 88.75 71.0156 89.043C71.5234 89.4531 71.7383 89.4531 79.8047 89.4531C85.6836 89.4531 88.2031 89.3945 88.5742 89.2188C88.8867 89.082 89.1406 88.75 89.2773 88.3008C89.3945 87.8516 89.4531 84.7266 89.4141 79.4336L89.3555 71.25L88.8867 70.8789C88.6328 70.6836 88.1641 70.5078 87.832 70.5078C87.2852 70.5078 86.3086 71.4258 78.8672 78.8672ZM86.5234 81.0547V86.5234H81.0156H75.4883L80.957 81.0547C83.9648 78.0469 86.4453 75.5859 86.4648 75.5859C86.5039 75.5859 86.5234 78.0469 86.5234 81.0547Z"
                                            fill="#7F7F7F" />
                                        <defs>
                                            <clipPath id="clip0_227_38">
                                                <rect width="100" height="100" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg><span class="ml-1 text hoverlist">Design</span></a></div>
                            <div class=" text-black-50 mt-3 hoverbg d-flex justify-content-start pt-2"> <a
                                    class="left_margin top_margin text-black-50 "
                                    href="{{ route('constructions') }}"><svg class="hoverlist" width="20"
                                        height="20" viewBox="0 0 100 100" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.26591 0.468754L1.71904 0.937504V8.92579V16.8945L3.53544 19.9609L5.33232 23.0078V35.4297V47.8516H4.62919C1.95341 47.8516 0.0198185 49.9414 0.000287261 52.832C-0.019244 55.0781 0.957319 56.6016 2.89091 57.3438L3.76982 57.6758L3.80888 73.2227L3.86747 88.7695L4.31669 89.7461C5.62529 92.5781 8.98466 94.1016 12.1683 93.2813C14.4339 92.6953 15.8792 91.4649 16.7386 89.375C17.1487 88.3984 17.1487 88.125 17.2073 73.0078L17.2659 57.6172L18.2425 57.207C20.0784 56.4063 21.3479 54.1797 21.0745 52.207C20.762 49.8242 18.555 47.8516 16.1917 47.8516H15.4886V43.9453C15.4886 40.0391 15.4886 40.0195 15.0003 39.5508C14.4143 38.9649 13.7503 38.9258 13.0667 39.4727L12.5589 39.8633V43.8672V47.8516H10.4104H8.26201V35.0391V22.2266L6.40654 19.0625L4.55107 15.8789V12.0508V8.20313H10.4104H16.2698V12.0703V15.918L14.7854 18.457C12.3245 22.6758 12.5589 21.6797 12.5589 27.8906C12.5589 33.125 12.5784 33.3594 12.9495 33.6914C13.5354 34.2188 14.6683 34.1797 15.1175 33.6133C15.4495 33.2031 15.4886 32.7539 15.4886 28.125V23.0859L17.344 19.8828L19.1995 16.6992V9.02344C19.1995 0.957035 19.1409 0.449223 18.3206 0.117191C18.1448 0.0585976 14.5706 3.8147e-06 10.4104 3.8147e-06H2.81279L2.26591 0.468754ZM16.2698 4.10157V5.27344L10.469 5.23438L4.64872 5.17579L4.59013 4.31641C4.47294 2.83204 4.08232 2.92969 10.5081 2.92969H16.2698V4.10157ZM17.4612 51.3477C17.8714 51.7774 18.0276 52.1094 18.0276 52.6367C18.0276 53.457 17.5979 54.3945 17.1487 54.5703C16.9729 54.6289 13.9065 54.6875 10.3323 54.6875C3.84794 54.6875 3.82841 54.6875 3.41826 54.2383C2.87138 53.6524 2.71513 52.8906 2.98857 52.0703C3.41826 50.7617 3.34013 50.7813 10.469 50.7813H16.8948L17.4612 51.3477ZM14.3167 72.168C14.3167 82.2266 14.2581 87.0117 14.1018 87.7344C13.9261 88.5156 13.6917 88.9649 13.0667 89.5703C11.2503 91.3867 8.84794 91.1328 7.28544 88.9258L6.79716 88.2227L6.73857 72.9297L6.69951 57.6172H10.5081H14.3167V72.168Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M32.5589 0.507813C31.348 1.30859 29.0433 3.69141 28.0081 5.17578C25.3519 9.02344 23.887 13.4375 23.887 17.5781C23.887 20 24.1409 21.1914 25.0003 23.0273C26.1917 25.5273 28.3792 27.3438 31.4847 28.4375L32.7737 28.8867L32.8323 31.2891C32.8714 32.6172 32.8323 38.1055 32.7737 43.4766L32.637 53.2813L31.4456 54.707C28.9847 57.7344 26.6605 61.9336 25.4495 65.5859C24.1605 69.5703 23.8675 71.6211 23.7503 77.5977L23.6526 83.0274L23.0276 83.2813C21.1526 84.0625 19.9808 85.9766 20.0003 88.1836C20.0198 89.7656 20.2347 90.4492 21.0745 91.6602C21.973 92.9297 23.2816 93.4961 25.6448 93.6524C29.8831 93.9258 33.0472 94.8047 37.0316 96.7969C39.2776 97.9297 42.1292 98.9649 44.5901 99.5313C45.8597 99.8242 47.5198 99.8828 57.5198 99.9414C67.305 100.02 69.3167 99.9805 71.2894 99.707C74.0823 99.3359 77.3245 98.2813 80.1565 96.8555C84.2386 94.8047 87.344 93.9063 91.1722 93.6524C92.2464 93.5938 93.4378 93.4375 93.8089 93.3594C95.8206 92.832 97.3831 90.5469 97.3831 88.125C97.3831 85.957 96.1917 84.082 94.3558 83.3008L93.6136 83.0078V78.7891C93.6136 73.8281 93.3987 71.6406 92.637 68.418C91.6214 64.1797 89.7269 60.0195 87.2073 56.4453C85.8206 54.4922 81.4847 49.9414 80.3323 49.2383C79.6292 48.8086 78.1253 48.6914 77.6175 49.0039C77.4417 49.1211 76.9339 48.9063 76.055 48.3789C74.0042 47.1289 71.0355 45.7617 68.8675 45.0781L66.8558 44.4336V43.75C66.8558 43.3594 66.719 42.8711 66.5628 42.6367C66.1917 42.1094 63.5355 41.0742 61.6214 40.7031C58.6917 40.1367 55.6058 40.4492 52.637 41.6016C50.8792 42.2656 50.4495 42.6953 50.4495 43.75V44.4336L48.262 45.1758C47.0511 45.5859 45.8792 45.9766 45.6839 46.0352C45.3128 46.1523 45.3128 46.0352 45.43 41.875C45.5081 39.5313 45.5667 35.6641 45.5667 33.3008V29.0039L47.1097 28.457C51.3284 26.9727 53.7894 24.1211 54.4925 19.9023C55.0784 16.4844 54.2972 12.3242 52.305 8.30078C50.3519 4.33594 46.6019 0.195313 44.9808 0.195313C43.4378 0.195313 43.4183 0.3125 43.4183 7.65625C43.4183 12.832 43.3597 14.0625 43.1448 14.375C42.8909 14.7266 42.598 14.7461 39.3558 14.7461C36.68 14.7461 35.7816 14.6875 35.5472 14.4727C35.2542 14.2383 35.2151 13.5352 35.2151 7.91016C35.2151 3.82813 35.137 1.40625 35.0003 0.996094C34.6097 -0.117188 33.7503 -0.292969 32.5589 0.507813ZM32.9886 15.9375C33.3011 16.3477 33.8089 16.8359 34.0823 17.0508C34.7659 17.5586 37.2073 17.832 40.5862 17.7344C43.2816 17.6758 43.3792 17.6563 44.3167 17.0898C44.9222 16.6992 45.4495 16.1719 45.762 15.625C46.2308 14.7656 46.2503 14.6289 46.348 9.74609L46.4456 4.72656L47.4808 6.03516C48.0472 6.73828 48.9261 8.16406 49.4534 9.17969C52.5198 15.1367 52.5003 20.8789 49.4339 23.75C48.3597 24.7461 46.2308 25.8008 44.5316 26.1914C42.6175 26.6016 42.637 26.5625 42.637 32.1094C42.637 34.6875 42.5784 39.2578 42.5003 42.2461L42.3831 47.6953L41.2112 48.4375C40.1761 49.082 39.9612 49.1602 39.473 48.9844C38.5745 48.6719 37.4026 48.9258 36.5823 49.5898C36.1526 49.9219 35.7816 50.1953 35.723 50.1953C35.6644 50.1953 35.6839 45.1563 35.7425 39.0039C35.8011 32.8516 35.8011 27.5781 35.723 27.2852C35.5862 26.6797 35.1956 26.4453 33.6917 26.0547C30.7425 25.293 28.4573 23.5938 27.4808 21.4258C27.012 20.3906 26.9339 19.9023 26.8558 18.0664C26.7776 15.6055 27.0316 14.1211 27.9886 11.4648C28.6722 9.60938 30.1761 6.99219 31.4066 5.52734L32.1878 4.58984L32.2855 9.90234L32.3831 15.1953L32.9886 15.9375ZM62.6175 43.9258L63.9261 44.3555V63.5742V82.8125H58.6526H53.3792V63.5938V44.375L54.3167 44.0625C55.9964 43.4961 56.9534 43.3789 59.1409 43.4375C60.6253 43.4961 61.6995 43.6523 62.6175 43.9258ZM50.4495 65.2344V82.8125H45.8597H41.2698V67.3242V51.8555L42.4026 51.1328C44.5511 49.7461 49.1214 47.6953 50.1175 47.6563C50.43 47.6563 50.4495 48.6133 50.4495 65.2344ZM68.7308 48.125C70.6839 48.7891 72.5589 49.6875 74.3948 50.8008L76.0159 51.7773L76.0745 60.7617L76.1331 69.7656L76.6019 70.1367C77.2269 70.6445 78.0276 70.6055 78.5355 70.0586C78.9651 69.6094 78.9651 69.5313 79.0042 60.7617L79.0628 51.9141L80.6644 53.418C85.4495 57.8516 88.7112 63.75 90.137 70.5078C90.4495 71.9922 90.5472 73.3984 90.6253 77.5781L90.723 82.8125H84.844H78.9651V79.5117V76.1914L78.4573 75.8008C77.6175 75.1367 76.7776 75.293 76.3284 76.1914C76.1136 76.6016 76.0355 77.5 76.0355 79.7852V82.8125H71.4456H66.8558V65.2344C66.8558 50.7813 66.8948 47.6563 67.1097 47.6563C67.2659 47.6563 67.9886 47.8711 68.7308 48.125ZM38.3401 67.3828V82.8125H32.4808H26.6214V78.7305C26.6214 74.1602 26.9339 71.25 27.6956 68.3594C29.1995 62.8125 32.012 58.0078 36.1331 53.9453C37.2464 52.8516 38.2034 51.9531 38.262 51.9531C38.3011 51.9531 38.3401 58.8867 38.3401 67.3828ZM93.1448 86.0547C94.4144 86.6602 94.9612 88.2813 94.2776 89.4531C93.7503 90.3125 93.0862 90.5664 90.9769 90.7227C86.8167 90.9961 83.7894 91.875 78.7698 94.2383C75.9769 95.5664 74.6097 96.0547 72.0315 96.6992C71.3284 96.875 67.8128 96.9531 59.7269 97.0117C44.9808 97.1094 44.512 97.0508 38.3401 94.1406C33.223 91.7383 30.4886 90.9375 26.5823 90.7031C24.3167 90.5859 23.6331 90.3906 23.223 89.7461C22.4222 88.5352 22.7542 86.8555 23.9261 86.1328C24.5706 85.7422 24.805 85.7422 58.5159 85.7422C89.2972 85.7422 92.5394 85.7813 93.1448 86.0547Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M75.723 0.371099C74.6487 0.85938 74.18 1.69922 73.7894 3.8086C73.3792 6.15235 73.3597 6.19141 72.8519 6.32813C72.6175 6.38672 71.6995 6.91406 70.8011 7.5L69.18 8.55469L67.1487 7.85156C65.2737 7.20703 65.0589 7.1875 64.3167 7.40235C63.1448 7.75391 62.5394 8.4375 61.0159 11.1133C59.8245 13.2031 59.6292 13.6719 59.6292 14.4922C59.6292 15.8203 59.9612 16.3477 61.6995 17.8125L63.2034 19.1016L63.2425 21.6406L63.2816 24.1992L61.9339 25.3125C60.2737 26.6992 59.8245 27.4023 59.8245 28.6328C59.8245 29.4336 60.0198 29.9219 61.2894 32.168C63.5355 36.0937 64.0042 36.3281 67.4612 35.2344L69.7464 34.5117L70.3909 35.0195C70.762 35.2734 71.68 35.8203 72.4612 36.2109L73.848 36.8945L74.18 38.7695C74.5511 40.8398 74.9808 41.6602 76.0355 42.2656C76.6019 42.6172 77.1292 42.6953 79.2581 42.7539C82.5394 42.832 83.5941 42.5977 84.4925 41.6211C85.0589 40.9961 85.1956 40.625 85.4886 39.043C85.9573 36.5234 85.9378 36.6016 86.6214 36.3086C86.9534 36.1719 87.8909 35.625 88.6917 35.1172L90.137 34.1602L91.9925 34.7852C94.1019 35.4883 95.137 35.4883 96.1136 34.7852C96.4456 34.5508 97.2855 33.3789 98.0277 32.0898C100.43 27.9687 100.41 27.4609 97.7933 25.0391L96.1136 23.4961L96.0745 21.0156L96.0355 18.5352L97.3245 17.4609C99.1214 15.9375 99.473 15.3906 99.473 14.082C99.473 13.125 99.3362 12.793 97.9691 10.4102C95.7816 6.6211 95.137 6.32813 91.68 7.5L89.6683 8.1836L88.8089 7.59766C88.3206 7.26563 87.3831 6.73828 86.6995 6.42578L85.4691 5.85938L85.137 3.94531C84.512 0.42969 83.9066 5.03233e-06 79.4534 5.03233e-06C77.012 5.03233e-06 76.387 0.07813 75.723 0.371099ZM82.4222 5.35156C82.6566 6.6211 82.9495 7.77344 83.0667 7.91016C83.1839 8.06641 83.887 8.41797 84.6097 8.69141C85.3519 8.96485 86.6409 9.66797 87.4808 10.2539C88.3402 10.8398 89.18 11.3281 89.3558 11.3281C89.5316 11.3281 90.6644 10.9766 91.8558 10.5469C93.0667 10.1172 94.1019 9.80469 94.1995 9.86328C94.4144 10 96.5433 13.7891 96.5433 14.0234C96.5433 14.1406 95.762 14.9023 94.7855 15.7422C93.8284 16.582 92.9886 17.4219 92.93 17.5977C92.8519 17.793 92.9105 18.4961 93.0277 19.1797C93.1839 19.9609 93.223 21.1719 93.1253 22.5391L92.9886 24.6484L94.2191 25.7617C94.8831 26.3672 95.7816 27.168 96.1722 27.5391L96.9144 28.2227L95.762 30.1758C95.1175 31.25 94.5706 32.207 94.5316 32.3242C94.4925 32.4414 93.5355 32.207 92.3245 31.7773C91.1527 31.3867 89.9612 31.0547 89.6878 31.0547C89.3753 31.0547 88.7894 31.3672 88.223 31.8359C87.6956 32.2852 86.4847 33.0273 85.5081 33.5156C84.5511 34.0039 83.6722 34.4727 83.5745 34.5898C83.4573 34.6875 83.1448 35.8789 82.8714 37.2461L82.3636 39.7461L79.9027 39.8047C77.6761 39.8437 77.4222 39.8242 77.3245 39.5117C77.2659 39.3164 77.0902 38.3203 76.8948 37.3047C76.5237 35.1367 76.2698 34.6484 75.2933 34.2578C73.7503 33.6328 72.5784 32.9883 71.5628 32.2266C70.9183 31.7578 70.2737 31.4453 69.9612 31.4453C69.6683 31.4453 68.4573 31.7969 67.2659 32.207L65.1175 32.9883L63.9456 30.8789C63.2816 29.7266 62.7542 28.6914 62.7737 28.5937C62.7737 28.4961 63.5159 27.793 64.4144 27.0508C65.3128 26.2891 66.1526 25.5078 66.2698 25.2734C66.4456 24.9609 66.4456 24.4922 66.2698 23.3594C66.1331 22.4219 66.0941 21.1328 66.1722 19.9219L66.3089 17.9883L65.6644 17.3828C65.2933 17.0508 64.4534 16.3281 63.7894 15.7617C63.1253 15.1953 62.5784 14.6484 62.5784 14.5117C62.5589 14.3945 63.0862 13.3594 63.7503 12.2266L64.9222 10.1758L67.0901 10.9375C68.2816 11.3672 69.4144 11.7188 69.5901 11.7188C69.7855 11.7188 70.5276 11.2695 71.2698 10.7227C72.012 10.1563 73.3402 9.375 74.2191 8.96485C76.0159 8.125 75.9964 8.1836 76.5237 5.17578C76.6995 4.19922 76.8753 3.30078 76.9144 3.16406C76.9925 2.96875 77.598 2.92969 79.4925 2.96875L81.9925 3.02735L82.4222 5.35156Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M77.012 13.3399C73.1253 14.668 70.6644 18.6719 71.3089 22.6172C72.0706 27.2266 76.4456 30.4492 80.8792 29.7266C85.5276 28.9453 88.7503 24.5508 87.9886 20C87.1292 14.8438 81.8948 11.6602 77.012 13.3399ZM82.1683 16.4258C85.3714 18.0274 86.1722 22.2656 83.7503 24.961C82.5394 26.3086 81.387 26.836 79.6487 26.8164C78.0276 26.8164 77.1292 26.4649 75.9378 25.3711C72.8519 22.5195 73.9065 17.5977 77.93 16.0938C79.0042 15.6836 81.0355 15.8399 82.1683 16.4258Z"
                                            fill="#7F7F7F" />
                                    </svg><span class="ml-1 text hoverlist">Construction</span></a></div>
                            <div class=" text-black-50 mt-3 hoverbg d-flex justify-content-start pt-2"> <a
                                    class="left_margin top_margin text-black-50 "
                                    href="{{ route('design_&_construction') }}"><svg class="hoverlist" width="20"
                                        height="20" viewBox="0 0 100 101" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M30.9416 0.234385C30.8635 0.527353 30.3948 2.22657 30.0823 3.43751C29.926 4.04298 29.7307 4.31642 29.3205 4.47267C28.8127 4.68751 28.5979 4.60938 26.8401 3.59376L24.926 2.50001L21.8401 5.58595C20.1213 7.28517 18.7346 8.75001 18.7346 8.82813C18.7346 8.92579 19.1838 9.78516 19.7307 10.7422C20.6291 12.3047 20.7268 12.5781 20.5705 13.125C20.3948 13.7109 20.2971 13.7695 18.2854 14.3164L16.1955 14.8828V19.3555V23.8086L17.3283 24.1406C17.9338 24.3164 18.8908 24.5703 19.4573 24.7266C20.9026 25.1367 20.9807 25.6836 19.9065 27.6172L19.1057 29.082L12.5237 29.1406L5.94163 29.1992L4.65257 29.8242C3.24632 30.5274 1.78147 31.8555 1.05881 33.0859C-0.0739975 35.0195 -0.034935 33.6719 0.0236587 65.0586L0.0822525 93.8672L0.804909 95.332C1.70335 97.1484 2.99241 98.418 4.82835 99.2773L6.13694 99.9023L12.7385 99.9609L19.3205 100.02V93.5742V87.1094H28.0119H36.7033L39.8283 88.6719L42.9533 90.2344L68.5002 90.1953L94.0276 90.1367L95.3362 89.5117C100.551 87.0508 101.547 80.2734 97.2502 76.3086C95.4338 74.6094 94.5354 74.3555 90.4729 74.2578L87.094 74.1797V70.9766V67.7734H93.5393H99.9846V54.6289C99.9846 44.1406 99.926 41.3086 99.7112 40.5078C99.0862 38.1641 97.426 36.1719 95.2971 35.1953C94.5549 34.8438 92.4846 34.375 88.2268 33.6133L82.2112 32.5391V31.0352V29.5508L83.4807 28.2227C84.9846 26.6602 86.3713 24.082 86.801 21.9727C86.9573 21.2109 87.094 19.6094 87.094 18.3984V16.2109H88.6565H90.219V14.5508V12.8906H88.6565H87.094V11.5625C87.0744 8.28126 86.0393 5.76173 83.676 3.39845C81.0783 0.761728 78.9299 9.53861e-06 74.0862 9.53861e-06C71.9768 9.53861e-06 70.9807 0.0976658 69.8088 0.390635C66.5862 1.21095 63.8908 3.39845 62.5041 6.3086C61.6057 8.1836 61.3127 9.45313 61.3127 11.4258V12.8906H59.6526H57.9729L58.0315 14.4922L58.0901 16.1133L59.6721 16.1719L61.2737 16.2305L61.3518 19.1016C61.4299 21.582 61.508 22.168 61.9377 23.3984C62.5627 25.1563 63.4612 26.6406 64.6916 28.0469L65.6487 29.1016H58.7346H51.8401L51.0002 27.6367C50.3948 26.5625 50.1994 26.0352 50.2971 25.6836C50.4533 25.0586 50.6487 24.9219 52.0354 24.5703C52.6799 24.3945 53.5783 24.1602 54.0471 24.0234L54.8674 23.8086V19.3555V14.9024L52.7971 14.3555C50.8049 13.8086 50.1799 13.4375 50.1799 12.7539C50.1799 12.5586 50.8049 11.3672 51.9573 9.45313L52.3088 8.8672L49.1448 5.70313L45.9807 2.53907L44.1057 3.61329C42.3869 4.58985 42.1916 4.66798 41.6448 4.45313C41.0979 4.25782 41.0198 4.08204 40.5119 2.10938L39.9455 9.53861e-06H35.4924C32.094 9.53861e-06 31.0002 0.0586033 30.9416 0.234385ZM37.6408 3.94532C37.758 4.29688 37.9924 5.07813 38.1487 5.6836C38.4026 6.6211 38.5393 6.81642 38.9885 6.9336C39.2815 6.9922 40.1604 7.34376 40.9221 7.71485L42.3283 8.35938L43.7541 7.50001C44.5549 7.03126 45.2971 6.66017 45.3948 6.64063C45.5119 6.64063 46.1955 7.2461 46.9377 7.98829L48.2854 9.35548L47.3869 10.9375L46.4885 12.5391L46.9377 13.4375C47.1916 13.9453 47.5432 14.8242 47.719 15.3711C48.0315 16.3281 48.1291 16.4063 48.8713 16.6211C49.3205 16.7383 50.0823 16.9336 50.5705 17.0703L51.4494 17.3242L51.508 19.3555L51.5666 21.3867L49.8088 21.8555L48.051 22.3047L47.719 23.3203C47.5432 23.8672 47.1721 24.7266 46.9182 25.2539L46.4494 26.1719L47.2502 27.5195C47.6799 28.2617 48.0315 28.9258 48.0315 28.9844C48.0315 29.043 45.4533 29.1016 42.3283 29.082H36.6057L37.7776 28.7305C39.7112 28.1836 40.8244 27.5391 42.1916 26.1914C44.1643 24.2383 45.1018 22.0117 45.1018 19.3359C45.1018 16.7188 44.1838 14.5117 42.2698 12.5781C40.3557 10.625 38.2463 9.76563 35.4143 9.76563C31.6057 9.76563 28.383 11.8164 26.7229 15.293C24.1057 20.8008 27.3674 27.3438 33.4416 28.8281C34.3401 29.043 33.7541 29.0625 28.6369 29.082L22.8166 29.1016L23.6174 27.6172L24.4377 26.1328L23.8518 24.8438C23.5393 24.1211 23.1877 23.2617 23.0901 22.9492C22.9143 22.4219 22.758 22.3242 21.1565 21.8555L19.4182 21.3672V19.3359V17.3242L20.9807 16.9141C22.8752 16.4063 22.9533 16.3672 23.1096 15.6836C23.1877 15.3711 23.5198 14.5508 23.8518 13.8281L24.4573 12.5195L23.5393 10.8984L22.6213 9.29688L23.9494 7.96876C24.6721 7.2461 25.3557 6.64063 25.4729 6.64063C25.5705 6.64063 26.3323 7.03126 27.1526 7.50001C28.5979 8.32032 28.6565 8.33985 29.2033 8.04688C29.5158 7.8711 30.3752 7.51954 31.1369 7.22657L32.5041 6.71876L32.9729 5.01954L33.4416 3.32032H35.4533H37.4455L37.6408 3.94532ZM77.133 3.5547C77.133 3.84767 76.1955 11.4453 76.0588 12.2656L75.9416 12.9102L74.1448 12.8516L72.3479 12.793L71.8205 8.59376C71.5276 6.28907 71.2932 4.16017 71.2737 3.84767V3.32032H74.2033C76.2932 3.32032 77.133 3.37892 77.133 3.5547ZM68.1487 4.92188C68.1487 5.0586 68.3635 6.89454 68.6369 8.98438C68.9104 11.0742 69.1252 12.8125 69.1252 12.832C69.1252 12.8711 68.0705 12.8906 66.7815 12.8906H64.4377V11.9336C64.4377 9.51173 65.2385 7.40235 66.801 5.76173C67.8166 4.68751 68.1487 4.47267 68.1487 4.92188ZM81.801 5.97657C83.1487 7.51954 83.6369 8.78907 83.7346 10.9766L83.8127 12.8906H81.5471C79.8674 12.8906 79.2815 12.832 79.2815 12.6367C79.2815 12.5195 79.4963 10.6836 79.7698 8.59376C80.0432 6.50392 80.258 4.76563 80.258 4.72657C80.258 4.51173 81.1369 5.21485 81.801 5.97657ZM38.3635 13.6524C40.5901 14.7461 41.8401 16.7774 41.8596 19.3359C41.8791 20.625 41.801 20.9766 41.2346 22.1094C40.5315 23.5352 39.5354 24.5313 38.0901 25.2344C37.3479 25.6055 36.8596 25.6836 35.4338 25.6836C33.9104 25.6836 33.5393 25.6055 32.6994 25.1563C31.4299 24.4922 30.219 23.3008 29.6526 22.1094C29.2619 21.3477 29.1838 20.8789 29.1838 19.3359C29.1838 17.6953 29.2424 17.3633 29.7112 16.5039C30.258 15.4492 31.5862 14.1016 32.5823 13.5938C34.2815 12.6953 36.4885 12.7344 38.3635 13.6524ZM83.7737 18.4961C83.7737 19.7656 83.676 21.1719 83.5783 21.6211C83.0705 23.8086 81.2932 26.25 79.2815 27.5391C76.3518 29.4141 72.3088 29.4531 69.1838 27.6172C67.758 26.7969 66.2932 25.1563 65.5315 23.5938C64.7502 21.9531 64.4377 20.3516 64.4377 17.9102V16.2109H74.1057H83.7737V18.4961ZM71.469 31.9141C73.2463 32.3438 75.4143 32.3047 77.2307 31.8359C78.0705 31.6211 78.8323 31.4453 78.9299 31.4453C79.008 31.4453 79.0862 31.8164 79.0862 32.2852C79.0862 33.0859 79.008 33.1836 76.6448 35.5469L74.2033 37.9883L71.7619 35.5469C69.3791 33.1641 69.3205 33.0859 69.3205 32.2461C69.3205 31.4649 69.3596 31.4063 69.7698 31.5039C70.0041 31.582 70.7658 31.7578 71.469 31.9141ZM66.0783 32.4024C65.9807 32.5 63.2268 33.0664 59.9651 33.6524C55.0823 34.5508 53.8323 34.8438 52.8166 35.332C51.2346 36.1133 49.594 37.8516 48.969 39.3945L48.5198 40.5273L48.4612 54.1406L48.4026 67.7734H66.0979H83.7737V70.9961V74.2188H63.4612H43.1487L35.1018 78.2422L27.0354 82.2656L28.5002 83.0273L29.9651 83.7695L19.0276 83.7891C12.9924 83.7891 7.58225 83.8672 6.93772 83.9844C6.31272 84.082 5.2385 84.4336 4.55491 84.7461L3.30491 85.332V60.625C3.30491 33.3594 3.22678 35.1953 4.53538 33.8281C5.17991 33.1445 5.96116 32.6758 6.82053 32.4024C7.52366 32.207 66.3127 32.1875 66.0783 32.4024ZM71.2541 40.5859C71.0002 40.8008 69.9455 41.6406 68.9299 42.4609L67.0744 43.9453L66.1565 40.2734C65.6487 38.2617 65.219 36.4844 65.219 36.3086C65.219 36.0742 65.4924 35.918 66.1565 35.8008L67.0744 35.6055L69.3987 37.9102L71.7424 40.2148L71.2541 40.5859ZM83.1682 36.0547C83.3049 36.1719 81.3518 43.75 81.176 43.75C81.0588 43.75 77.7385 41.1914 76.8401 40.3906C76.7229 40.293 77.5627 39.3164 78.969 37.9102L81.2737 35.6055L82.1721 35.8008C82.6799 35.8984 83.1291 36.0156 83.1682 36.0547ZM63.5783 43.2031C64.4182 46.6211 65.1799 49.4141 65.2776 49.4141C65.3557 49.4141 67.4065 47.832 69.8088 45.8984L74.2033 42.3828L78.6955 45.9961L83.1682 49.6094L83.3635 48.8672C83.4807 48.4766 84.1838 45.5859 84.9651 42.4805C85.7268 39.3555 86.4299 36.7578 86.4885 36.6992C86.5471 36.6406 88.1877 36.875 90.1018 37.2266C94.1448 37.9688 95.0041 38.3594 95.9807 39.9219L96.5666 40.8789L96.6252 52.6758L96.6643 64.4531H93.4416H90.219V56.4453V48.4375H88.6565H87.094V56.4453V64.4531H74.2033H61.3127V56.4453V48.4375H59.6526H57.9924V56.4453V64.4531H54.7698H51.5471V53.2617C51.5471 40.9375 51.5666 40.8203 52.7385 39.3945C53.0705 38.9844 53.6955 38.4766 54.1448 38.2617C55.1799 37.7344 61.7424 36.5039 61.9182 36.7969C61.9768 36.9141 62.7385 39.8047 63.5783 43.2031ZM80.6487 82.2266V87.1094H62.8752H45.1018V82.3633C45.1018 79.7461 45.1604 77.5391 45.2385 77.4805C45.2971 77.4023 53.3049 77.3438 63.0119 77.3438H80.6487V82.2266ZM92.9338 77.5586C94.1252 77.8125 95.2971 78.6328 96.0198 79.707C96.6448 80.6641 96.8596 82.6758 96.469 83.8867C96.1565 84.8242 95.0627 86.0352 94.0471 86.582C93.3049 86.9922 92.9338 87.0117 88.5198 87.0703L83.7737 87.1289V82.3633C83.7737 79.7461 83.8323 77.5391 83.9104 77.4805C84.1252 77.2656 91.8791 77.3242 92.9338 77.5586ZM41.9768 82.2266C41.9768 85.0781 41.9182 85.9375 41.7424 85.918C41.6057 85.918 39.8674 85.0977 37.8752 84.1016L34.2619 82.2656L37.9729 80.4102C40.0237 79.375 41.7424 78.5352 41.8401 78.5352C41.9182 78.5156 41.9768 80.1758 41.9768 82.2266ZM16.1955 91.8945V96.6797H11.508C7.1135 96.6797 6.74241 96.6602 5.98069 96.2695C4.84788 95.7031 4.32053 95.1758 3.77366 94.1016C3.18772 92.9297 3.14866 91.1133 3.676 89.9414C4.10569 89.0039 5.57053 87.6367 6.46897 87.3633C6.84007 87.2461 9.06663 87.1484 11.6643 87.1289L16.1955 87.1094V91.8945Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M25.6096 35.8594C22.6799 36.5039 20.1018 37.8906 17.8752 40.0195C16.0198 41.7969 14.5354 44.1016 13.7737 46.3672C13.6565 46.6992 13.0901 46.2109 10.1799 43.3008C8.2854 41.4062 6.64478 39.8438 6.56665 39.8438C6.48853 39.8438 6.42993 47.5781 6.42993 57.0312V74.2188H23.6174C33.0706 74.2188 40.8049 74.1602 40.8049 74.082C40.8049 74.0039 39.2424 72.3633 37.3479 70.4688C34.4182 67.5391 33.9495 66.9922 34.2815 66.875C41.7815 64.1406 46.176 56.6992 44.9065 48.8672C44.2424 44.8047 41.5471 40.6445 38.051 38.2617C36.469 37.207 34.2034 36.2305 32.3284 35.8398C30.551 35.4883 27.3088 35.4883 25.6096 35.8594ZM32.6995 39.2578C34.8479 39.9219 36.4299 40.8984 38.1682 42.6562C40.7268 45.2344 41.8596 48.0273 41.8596 51.6602C41.8401 54.0039 41.469 55.5273 40.3362 57.6953C39.3987 59.5117 37.387 61.6602 35.6877 62.6562C34.4768 63.3789 31.9182 64.2969 31.4104 64.2188C31.2346 64.1797 27.7581 60.8789 23.6956 56.8945L16.3127 49.6094L16.5471 48.4961C16.8792 46.8359 18.1487 44.4141 19.4182 43.0273C22.7581 39.3164 28.012 37.832 32.6995 39.2578ZM21.469 59.2773L33.0901 70.8984H21.4104H9.75024V59.2773C9.75024 52.8906 9.76978 47.6562 9.80884 47.6562C9.82837 47.6562 15.0823 52.8906 21.469 59.2773Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M6.42993 79.0039V80.6641H16.0979H25.7659V79.0039V77.3438H16.0979H6.42993V79.0039Z"
                                            fill="#7F7F7F   " />
                                    </svg> <span class="ml-1 text hoverlist">Design & Construction</span></a></div>
                        </ul>
                    </li>
                    <li class="removable sidebar-h Quotations">
                        <a class=" text-black-50 d-flex flex-column align-items-center triangle-container"
                            href="#" aria-expanded="false">
                            <div class="mb-2">
                                {{-- <img class="hovercolor custom-image" src="/assets/admin/img/logo/quotation.png"
                                    alt="Description of the image"> --}}
                                <svg class="hovercolor" width="40" height="40" viewBox="0 0 60 60"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M33.75 24.375C33.75 23.8777 33.5525 23.4008 33.2008 23.0492C32.8492 22.6975 32.3723 22.5 31.875 22.5H16.875C16.3777 22.5 15.9008 22.6975 15.5492 23.0492C15.1975 23.4008 15 23.8777 15 24.375C15 24.8723 15.1975 25.3492 15.5492 25.7008C15.9008 26.0525 16.3777 26.25 16.875 26.25H31.875C32.3723 26.25 32.8492 26.0525 33.2008 25.7008C33.5525 25.3492 33.75 24.8723 33.75 24.375ZM31.25 31.875C31.25 31.3777 31.0525 30.9008 30.7008 30.5492C30.3492 30.1975 29.8723 30 29.375 30H16.875C16.3777 30 15.9008 30.1975 15.5492 30.5492C15.1975 30.9008 15 31.3777 15 31.875C15 32.3723 15.1975 32.8492 15.5492 33.2008C15.9008 33.5525 16.3777 33.75 16.875 33.75H29.375C29.8723 33.75 30.3492 33.5525 30.7008 33.2008C31.0525 32.8492 31.25 32.3723 31.25 31.875ZM31.875 37.5C32.3723 37.5 32.8492 37.6975 33.2008 38.0492C33.5525 38.4008 33.75 38.8777 33.75 39.375C33.75 39.8723 33.5525 40.3492 33.2008 40.7008C32.8492 41.0525 32.3723 41.25 31.875 41.25H16.875C16.3777 41.25 15.9008 41.0525 15.5492 40.7008C15.1975 40.3492 15 39.8723 15 39.375C15 38.8777 15.1975 38.4008 15.5492 38.0492C15.9008 37.6975 16.3777 37.5 16.875 37.5H31.875Z" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15 54.375H47.5C49.3234 54.375 51.072 53.6507 52.3614 52.3614C53.6507 51.072 54.375 49.3234 54.375 47.5V33.75C54.375 33.2527 54.1775 32.7758 53.8258 32.4242C53.4742 32.0725 52.9973 31.875 52.5 31.875H44.375V12.3575C44.375 8.8 40.3525 6.73 37.4575 8.7975L37.02 9.11C36.062 9.79007 34.9158 10.1546 33.7409 10.1528C32.566 10.151 31.4209 9.78299 30.465 9.1C28.8691 7.96417 26.9589 7.35383 25 7.35383C23.0411 7.35383 21.1309 7.96417 19.535 9.1C18.5791 9.78299 17.434 10.151 16.2591 10.1528C15.0842 10.1546 13.938 9.79007 12.98 9.11L12.5425 8.7975C9.6475 6.73 5.625 8.7975 5.625 12.3575V45C5.625 47.4864 6.61272 49.871 8.37087 51.6291C10.129 53.3873 12.5136 54.375 15 54.375ZM21.715 12.15C22.6749 11.4686 23.8229 11.1026 25 11.1026C26.1771 11.1026 27.3251 11.4686 28.285 12.15C29.8768 13.2878 31.7839 13.9005 33.7405 13.9028C35.6971 13.905 37.6056 13.2966 39.2 12.1625L39.6375 11.85C39.7309 11.7835 39.8407 11.744 39.955 11.7358C40.0694 11.7275 40.1837 11.7509 40.2857 11.8032C40.3876 11.8556 40.4732 11.9351 40.533 12.0328C40.5929 12.1306 40.6247 12.2429 40.625 12.3575V47.5C40.625 48.625 40.895 49.6875 41.375 50.625H15C13.5082 50.625 12.0774 50.0324 11.0225 48.9775C9.96763 47.9226 9.375 46.4918 9.375 45V12.3575C9.3753 12.2429 9.40711 12.1306 9.46696 12.0328C9.5268 11.9351 9.61237 11.8556 9.71431 11.8032C9.81626 11.7509 9.93064 11.7275 10.045 11.7358C10.1593 11.744 10.2691 11.7835 10.3625 11.85L10.8 12.1625C12.3944 13.2966 14.3029 13.905 16.2595 13.9028C18.2161 13.9005 20.1232 13.2878 21.715 12.15ZM44.375 47.5V35.625H50.625V47.5C50.625 48.3288 50.2958 49.1237 49.7097 49.7097C49.1237 50.2958 48.3288 50.625 47.5 50.625C46.6712 50.625 45.8763 50.2958 45.2903 49.7097C44.7042 49.1237 44.375 48.3288 44.375 47.5Z" />
                                </svg>
                            </div>
                            <div><span class="text mini-click-non hovercolor">Quotations</span></div>
                            <div class="triangle"></div>
                        </a>
                        <ul class="submenu-angle Quotationslist padding-top-quotation" aria-expanded="false">
                            <div class=" text-black-50 hoverbg d-flex justify-content-start"> <a
                                    class="left_margin text-black-50 pb-2" href="{{ route('quotation') }}"> <svg
                                        class="hoverlist" width="25" height="25" viewBox="0 0 60 60"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M33.75 24.375C33.75 23.8777 33.5525 23.4008 33.2008 23.0492C32.8492 22.6975 32.3723 22.5 31.875 22.5H16.875C16.3777 22.5 15.9008 22.6975 15.5492 23.0492C15.1975 23.4008 15 23.8777 15 24.375C15 24.8723 15.1975 25.3492 15.5492 25.7008C15.9008 26.0525 16.3777 26.25 16.875 26.25H31.875C32.3723 26.25 32.8492 26.0525 33.2008 25.7008C33.5525 25.3492 33.75 24.8723 33.75 24.375ZM31.25 31.875C31.25 31.3777 31.0525 30.9008 30.7008 30.5492C30.3492 30.1975 29.8723 30 29.375 30H16.875C16.3777 30 15.9008 30.1975 15.5492 30.5492C15.1975 30.9008 15 31.3777 15 31.875C15 32.3723 15.1975 32.8492 15.5492 33.2008C15.9008 33.5525 16.3777 33.75 16.875 33.75H29.375C29.8723 33.75 30.3492 33.5525 30.7008 33.2008C31.0525 32.8492 31.25 32.3723 31.25 31.875ZM31.875 37.5C32.3723 37.5 32.8492 37.6975 33.2008 38.0492C33.5525 38.4008 33.75 38.8777 33.75 39.375C33.75 39.8723 33.5525 40.3492 33.2008 40.7008C32.8492 41.0525 32.3723 41.25 31.875 41.25H16.875C16.3777 41.25 15.9008 41.0525 15.5492 40.7008C15.1975 40.3492 15 39.8723 15 39.375C15 38.8777 15.1975 38.4008 15.5492 38.0492C15.9008 37.6975 16.3777 37.5 16.875 37.5H31.875Z" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M15 54.375H47.5C49.3234 54.375 51.072 53.6507 52.3614 52.3614C53.6507 51.072 54.375 49.3234 54.375 47.5V33.75C54.375 33.2527 54.1775 32.7758 53.8258 32.4242C53.4742 32.0725 52.9973 31.875 52.5 31.875H44.375V12.3575C44.375 8.8 40.3525 6.73 37.4575 8.7975L37.02 9.11C36.062 9.79007 34.9158 10.1546 33.7409 10.1528C32.566 10.151 31.4209 9.78299 30.465 9.1C28.8691 7.96417 26.9589 7.35383 25 7.35383C23.0411 7.35383 21.1309 7.96417 19.535 9.1C18.5791 9.78299 17.434 10.151 16.2591 10.1528C15.0842 10.1546 13.938 9.79007 12.98 9.11L12.5425 8.7975C9.6475 6.73 5.625 8.7975 5.625 12.3575V45C5.625 47.4864 6.61272 49.871 8.37087 51.6291C10.129 53.3873 12.5136 54.375 15 54.375ZM21.715 12.15C22.6749 11.4686 23.8229 11.1026 25 11.1026C26.1771 11.1026 27.3251 11.4686 28.285 12.15C29.8768 13.2878 31.7839 13.9005 33.7405 13.9028C35.6971 13.905 37.6056 13.2966 39.2 12.1625L39.6375 11.85C39.7309 11.7835 39.8407 11.744 39.955 11.7358C40.0694 11.7275 40.1837 11.7509 40.2857 11.8032C40.3876 11.8556 40.4732 11.9351 40.533 12.0328C40.5929 12.1306 40.6247 12.2429 40.625 12.3575V47.5C40.625 48.625 40.895 49.6875 41.375 50.625H15C13.5082 50.625 12.0774 50.0324 11.0225 48.9775C9.96763 47.9226 9.375 46.4918 9.375 45V12.3575C9.3753 12.2429 9.40711 12.1306 9.46696 12.0328C9.5268 11.9351 9.61237 11.8556 9.71431 11.8032C9.81626 11.7509 9.93064 11.7275 10.045 11.7358C10.1593 11.744 10.2691 11.7835 10.3625 11.85L10.8 12.1625C12.3944 13.2966 14.3029 13.905 16.2595 13.9028C18.2161 13.9005 20.1232 13.2878 21.715 12.15ZM44.375 47.5V35.625H50.625V47.5C50.625 48.3288 50.2958 49.1237 49.7097 49.7097C49.1237 50.2958 48.3288 50.625 47.5 50.625C46.6712 50.625 45.8763 50.2958 45.2903 49.7097C44.7042 49.1237 44.375 48.3288 44.375 47.5Z" />
                                    </svg><span class="ml-1 text hoverlist">Quotation List</span></a></div>

                        </ul>
                    </li>

                    <li class="removable sidebar-h invoices">
                        <a class=" text-black-50 d-flex flex-column align-items-center triangle-container"
                            aria-expanded="false">

                            <div class="mb-2">
                                {{-- <img class="hovercolor custom-image" src="/assets/admin/img/logo/invoices.png" alt="Description of the image"> --}}
                                <svg class="hovercolor " width="40" height="40" viewBox="0 0 60 60"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.25 5.625V54.375H48.75V18L48.1875 17.4375L36.9375 6.1875L36.375 5.625H11.25ZM15 9.375H33.75V20.625H45V50.625H15V9.375ZM37.5 12L42.375 16.875H37.5V12ZM18.75 24.375V28.125H41.25V24.375H18.75ZM18.75 33.75V37.5H31.875V33.75H18.75ZM35.625 33.75V37.5H41.25V33.75H35.625ZM18.75 41.25V45H31.875V41.25H18.75ZM35.625 41.25V45H41.25V41.25H35.625Z" />
                                </svg>
                            </div>
                            <div><span class="text mini-click-non hovercolor">Invoices</span></div>
                            <div class="triangle"></div>
                        </a>
                        <ul class="submenu-angle invoiceslist padding-top-Invoices" aria-expanded="false">

                            <div class=" text-black-50 hoverbg d-flex justify-content-start"> <a
                                    class="left_margin text-black-50 pb-2" href="{{ route('invoices') }}"><svg
                                        class="hoverlist custom-image" width="20" height="20"
                                        viewBox="0 0 60 60" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.25 5.625V54.375H48.75V18L48.1875 17.4375L36.9375 6.1875L36.375 5.625H11.25ZM15 9.375H33.75V20.625H45V50.625H15V9.375ZM37.5 12L42.375 16.875H37.5V12ZM18.75 24.375V28.125H41.25V24.375H18.75ZM18.75 33.75V37.5H31.875V33.75H18.75ZM35.625 33.75V37.5H41.25V33.75H35.625ZM18.75 41.25V45H31.875V41.25H18.75ZM35.625 41.25V45H41.25V41.25H35.625Z" />
                                    </svg><span class="ml-1 text hoverlist">Invoices List </span>

                                </a></div>

                        </ul>

                    </li>
                    <li class="removable sidebar-h hr">
                        <a class=" text-black-50 d-flex flex-column align-items-center triangle-container"
                            aria-expanded="false">

                            <div class="mb-2">
                                <svg class="hovercolor " width="40" height="40" viewBox="0 0 100 100"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_305_27)">
                                        <path
                                            d="M47.8516 0.3125C45.7031 0.898438 43.7695 2.51953 42.7344 4.64844C41.3281 7.5 41.9336 11.2305 44.1602 13.5938L44.7266 14.1797L43.7695 14.8047C40.7227 16.7773 38.6914 20.6836 38.6719 24.5508V25.7812H43.5547H48.4375V27.4219V29.0625L47.1289 29.1992C41.543 29.7656 36.3281 32.0703 31.875 35.9375L30.2539 37.3242L29.6289 36.8555C29.082 36.4453 28.9648 36.1914 28.7891 35.0195C28.3594 32.3242 26.5234 29.4727 24.1406 27.832L23.0469 27.0898L23.75 26.3086C25.5664 24.2969 26.25 21.0938 25.3906 18.5742C24.4727 15.8203 22.4219 13.9062 19.6289 13.1641C16.0352 12.1875 12.1289 14.082 10.4688 17.5781C9.90234 18.75 9.86328 19.0039 9.86328 20.9961C9.86328 22.9102 9.92188 23.2617 10.3906 24.2578C10.6641 24.8633 11.2695 25.7422 11.6992 26.2305L12.5 27.0898L11.543 27.6953C10.1562 28.6133 8.39844 30.5859 7.65625 32.0703C6.89453 33.6328 6.44531 35.5469 6.44531 37.3438V38.6719H16.6602L26.8555 38.6914L27.5 39.2773L28.1445 39.8633L27.1484 41.3477C25.8594 43.2812 24.6094 45.8984 23.8672 48.2422C23.2812 50.0781 22.6562 53.2617 22.6562 54.3359V54.8828H20.957H19.2383V53.0664C19.2383 51.4648 19.1602 51.1328 18.6133 49.9609C17.4219 47.4219 15.2539 45.7617 12.5195 45.293C9.16016 44.6875 5.625 46.582 4.04297 49.8047C3.45703 50.9961 3.41797 51.1914 3.41797 53.2227C3.41797 55.2539 3.45703 55.4492 4.04297 56.6406C4.39453 57.3438 4.98047 58.2227 5.37109 58.6133L6.05469 59.3359L5.07812 59.9609C2.03125 61.9141 0.0195312 65.7227 0 69.5703V70.8984H11.3281H22.6562V70.0586C22.6367 65.8594 20.7617 62.1094 17.6367 60.0391L16.5625 59.3359L17.207 58.6719L17.8516 58.0078H20.2539H22.6562V58.5547C22.6562 59.7852 23.3203 62.9297 24.0234 65.0586C24.9023 67.7344 25.7422 69.4336 27.2266 71.6797C27.832 72.5781 28.3203 73.3594 28.3203 73.4375C28.3203 73.5156 27.7734 74.0625 27.0898 74.668L25.8594 75.7422L24.4727 75.0586C21.2695 73.4766 17.5195 74.1797 15.0586 76.8555C12.3438 79.8047 12.207 84.1016 14.7266 87.3047L15.625 88.4375L14.6484 89.0625C11.6797 90.9766 9.76562 94.5703 9.76562 98.2617V100H20.9961H32.2266V98.4766C32.2266 94.7656 30.3125 91.0742 27.3633 89.1211L26.1914 88.3398L26.875 87.6758C27.793 86.7969 28.6719 84.9609 28.9062 83.4375C29.1406 82.0312 28.9062 80.3125 28.3203 78.9844L27.9688 78.1836L29.2188 77.0703C29.8828 76.4648 30.4883 75.9766 30.5664 75.9766C30.625 75.9766 31.3086 76.5234 32.0898 77.1875C33.6523 78.5352 36.0352 80.1172 37.8125 81.0156C39.2578 81.7383 42.4805 82.8711 43.9844 83.1836L45.0977 83.418L45.1562 90.5859C45.2148 97.6562 45.2148 97.7539 45.6641 98.4766C46.3867 99.6484 47.3828 100 50 100C52.6172 100 53.6133 99.6484 54.3359 98.4766C54.7852 97.7539 54.7852 97.6562 54.8438 90.5859L54.9023 83.418L56.0156 83.1836C60.0391 82.3633 64.5508 80.0781 67.9102 77.1875C68.6914 76.5234 69.375 75.9766 69.4336 75.9766C69.5117 75.9766 70.1172 76.4648 70.7812 77.0703L72.0312 78.1836L71.6797 78.9844C71.0938 80.3125 70.8594 82.0312 71.0938 83.4375C71.3281 84.9609 72.207 86.7969 73.125 87.6758L73.8086 88.3398L72.8906 88.9258C71.3086 89.9219 69.8047 91.6406 68.9648 93.3984C68.0664 95.293 67.7734 96.543 67.7734 98.5352V100H79.0039H90.2344V98.2617C90.2344 94.5703 88.3203 90.9766 85.3516 89.0625L84.375 88.4375L85.2734 87.3047C86.7969 85.3516 87.3828 83.0273 86.9141 80.7617C85.8398 75.5273 80.2539 72.7148 75.5469 75.0586L74.1406 75.7422L72.9102 74.668C72.2266 74.0625 71.6797 73.5156 71.6797 73.4375C71.6797 73.3594 72.168 72.5781 72.7539 71.6797C74.1211 69.6484 75.3711 67.0312 76.1328 64.6484C76.7188 62.8125 77.3438 59.6289 77.3438 58.5547V58.0078H79.7461H82.1484L82.793 58.6719L83.4375 59.3359L82.3438 60.0586C80.2344 61.4453 78.4961 63.9062 77.832 66.4062C77.6758 66.9922 77.4805 68.2422 77.4219 69.1797L77.2852 70.8984H88.6523H100V69.5703C99.9805 65.7227 97.9688 61.9141 94.9219 59.9609L93.9453 59.3359L94.7461 58.457C95.1758 57.9883 95.7812 57.0898 96.0547 56.4844C96.5234 55.4883 96.582 55.1367 96.582 53.2227C96.582 51.1914 96.543 50.9961 95.957 49.7852C94.375 46.5625 90.8594 44.6875 87.4805 45.293C84.7461 45.7617 82.5781 47.4219 81.3867 49.9609C80.8398 51.1328 80.7617 51.4648 80.7617 53.0664V54.8828H79.082H77.3828L77.2461 53.5547C76.8164 49.3359 75.0586 44.4922 72.7734 41.2109L71.8945 39.9414L72.5 39.3164L73.125 38.6719H83.3398H93.5547V37.3438C93.5547 35.5469 93.1055 33.6328 92.3438 32.0703C91.6016 30.5664 89.6094 28.3594 88.3398 27.5977L87.4805 27.1094L88.3008 26.2305C88.7305 25.7617 89.3359 24.8633 89.6094 24.2578C90.0781 23.2617 90.1367 22.9102 90.1367 20.9961C90.1367 19.0039 90.0977 18.75 89.5312 17.5781C87.1875 12.6172 80.8594 11.3672 76.8555 15.0586C73.6133 18.0469 73.3398 23.1055 76.25 26.3281L76.9531 27.1094L75.9766 27.7344C73.6719 29.2188 71.6406 32.3242 71.2109 35.0195C71.0352 36.1914 70.918 36.4453 70.3711 36.8555L69.7461 37.3242L68.125 35.9375C63.6719 32.0703 58.457 29.7656 52.8906 29.1992L51.5625 29.0625V27.4219V25.7812H56.4453H61.3281V24.5508C61.3086 20.7031 59.2578 16.7773 56.2305 14.8242L55.2734 14.1992L55.9766 13.418C56.3672 12.9883 56.9531 12.0703 57.3047 11.3477C57.8711 10.1562 57.9102 9.90234 57.9102 8.00781C57.9102 6.09375 57.8711 5.85938 57.2852 4.66797C55.5078 1.05469 51.6602 -0.703125 47.8516 0.3125ZM52.0703 3.73047C54.0234 4.66797 55.1562 6.91406 54.7266 8.98438C54.4336 10.332 53.6328 11.4453 52.4414 12.207C51.6016 12.7148 51.3281 12.793 50.0195 12.793C48.75 12.793 48.3984 12.7148 47.5977 12.2461C44.7461 10.5664 44.3359 6.66016 46.7969 4.49219C47.832 3.59375 48.5352 3.33984 49.9805 3.32031C50.8594 3.32031 51.4844 3.4375 52.0703 3.73047ZM19.8242 16.6797C21.582 17.4805 22.5195 19.0234 22.5195 21.0156C22.5 24.5898 18.7891 26.8555 15.6055 25.2344C12.5391 23.6719 11.9922 19.6484 14.5703 17.3828C15.5859 16.5039 16.3086 16.2305 17.6758 16.2109C18.4961 16.2109 19.1406 16.3477 19.8242 16.6797ZM84.0625 16.4844C84.9805 16.8555 86.0938 17.9102 86.543 18.7891C87.7539 21.1719 86.8164 24.0039 84.375 25.2539C83.418 25.7422 83.1445 25.8008 81.9727 25.7227C80.2344 25.6055 79.043 24.9023 78.2031 23.4766C77.4609 22.2461 77.2656 21.2305 77.5586 19.9219C78.0078 17.793 80.0195 16.2109 82.2656 16.2109C82.8906 16.2109 83.6914 16.3281 84.0625 16.4844ZM48.3984 19.4727L48.3398 22.5586L45.2734 22.6172C41.6992 22.6758 41.8164 22.7539 42.7539 20.7812C43.6523 18.8672 45.2344 17.3633 47.0312 16.6992C48.5156 16.1523 48.457 16.0352 48.3984 19.4727ZM53.6523 17.0898C55.293 17.9102 56.4453 19.082 57.2461 20.7617C58.1836 22.7539 58.3008 22.6758 54.7461 22.6172L51.6602 22.5586L51.6016 19.4727C51.543 15.8789 51.4453 15.9961 53.6523 17.0898ZM16.1719 32.3633L16.1133 35.4492L13.0469 35.5078C9.49219 35.5664 9.55078 35.6055 10.4492 33.7305C11.3086 31.875 13.0469 30.2344 14.8047 29.5898C16.2891 29.043 16.2305 28.9258 16.1719 32.3633ZM21.25 29.8828C22.793 30.6055 24.1602 31.9727 24.9609 33.5742C25.9961 35.625 26.0938 35.5469 22.4609 35.5469H19.3359V32.4219C19.3359 28.8086 19.2383 28.9258 21.25 29.8828ZM80.6641 32.4219V35.5469H77.5391C73.9062 35.5469 74.0039 35.625 75.0391 33.5742C75.8398 31.9727 77.207 30.6055 78.75 29.8828C80.7617 28.9258 80.6641 28.8086 80.6641 32.4219ZM85.9375 29.9219C87.6953 30.7812 90.0391 33.75 90.0391 35.1562C90.0391 35.5469 89.9609 35.5469 86.9727 35.5078L83.8867 35.4492L83.8281 32.3438L83.7695 29.2383L84.4141 29.375C84.7656 29.4336 85.4492 29.6875 85.9375 29.9219ZM54.1992 32.6172C63.1055 34.2578 70.5664 40.8789 73.1055 49.4141C73.9062 52.0508 74.1016 53.418 74.1016 56.4453C74.1016 59.6484 73.7695 61.7188 72.8125 64.4141C70.3906 71.3086 64.8828 76.8359 58.0078 79.2578C55.1172 80.2734 53.3789 80.5469 49.9023 80.5469C47.4609 80.5273 46.3867 80.4492 45.0195 80.1172C35.4102 77.9102 28.3789 70.8398 26.3086 61.3281C25.7812 58.8672 25.7422 54.375 26.2305 51.8945C28.2812 41.6602 36.5625 33.8672 46.9727 32.4414C48.5938 32.207 52.5391 32.3242 54.1992 32.6172ZM13.7891 49.1406C15.3711 50.1172 16.3086 52.0898 16.0742 53.9258C16.0156 54.3555 15.6836 55.1562 15.3516 55.7031C13.4375 58.8867 8.73047 58.7109 6.97266 55.3906C6.38672 54.2578 6.38672 52.1875 6.99219 51.0352C7.48047 50.0977 8.65234 49.0625 9.58984 48.6914C9.96094 48.5547 10.8398 48.4766 11.543 48.4961C12.5977 48.5352 13.0273 48.6523 13.7891 49.1406ZM90.2539 48.6719C91.25 48.9648 92.4805 50.0195 93.0273 51.0547C93.3398 51.6602 93.4375 52.1875 93.4375 53.2227C93.4375 54.8633 92.9883 55.8594 91.7969 56.875C88.7109 59.5312 83.9453 57.3047 83.9453 53.2422C83.9453 49.9219 87.0117 47.6953 90.2539 48.6719ZM9.72656 64.5898L9.66797 67.6758L6.5625 67.7344L3.45703 67.793L3.59375 67.1484C3.98438 65.2344 5.80078 63.0859 7.85156 62.1094C9.86328 61.1523 9.78516 61.0352 9.72656 64.5898ZM14.9609 62.2266C16.7773 63.0859 18.5938 65.332 19.0625 67.2266L19.1797 67.7734H16.0352H12.8906V64.6289V61.4844L13.4375 61.6016C13.7305 61.6797 14.4141 61.9531 14.9609 62.2266ZM87.1094 64.6484V67.7734H83.9844C82.1094 67.7734 80.8594 67.6953 80.8594 67.5781C80.8594 67.4805 81.0352 66.9336 81.25 66.3672C81.9531 64.4922 83.7891 62.6562 85.6836 61.9141C86.1914 61.6992 86.7383 61.543 86.875 61.5234C87.0508 61.5234 87.1094 62.2656 87.1094 64.6484ZM92.3438 62.207C94.3945 63.2422 96.0156 65.2148 96.4062 67.1484L96.543 67.793L93.4375 67.7344L90.332 67.6758L90.2734 64.5898C90.2148 60.9961 90.1172 61.0938 92.3438 62.207ZM23.3203 78.0859C25.5859 79.3164 26.4453 82.0898 25.2344 84.3945C23.6328 87.4805 19.6484 88.0078 17.3828 85.4297C16.5234 84.4336 16.2109 83.6133 16.2109 82.2656C16.2109 78.5547 20.0195 76.3086 23.3203 78.0859ZM80.957 77.8125C82.6367 78.5156 83.7891 80.332 83.7891 82.2852C83.7891 83.6133 83.4766 84.4336 82.6172 85.4297C80.3516 88.0078 76.3281 87.4805 74.7461 84.375C74.2578 83.418 74.1992 83.1445 74.2773 81.9727C74.3945 80.2344 75.0977 79.0625 76.543 78.1836C77.1094 77.832 77.8125 77.5195 78.1055 77.4805C78.8086 77.3633 80.2539 77.5195 80.957 77.8125ZM51.5625 90.2344V96.6797H50H48.4375V90.2344V83.7891H50H51.5625V90.2344ZM19.3359 93.5547V96.6797H16.1914H13.0664L13.2031 96.2305C13.7109 94.5312 14.9023 92.793 16.1719 91.9336C16.7773 91.5039 18.9453 90.4688 19.2969 90.4297C19.3164 90.4297 19.3359 91.8359 19.3359 93.5547ZM83.0078 91.4062C84.5898 92.207 86.2695 94.3359 86.8164 96.2305L86.9336 96.6797H83.8086H80.6641V93.5547V90.4492L81.4062 90.7031C81.8359 90.8594 82.5391 91.1719 83.0078 91.4062ZM24.3555 91.1133C26.2109 91.9727 27.8906 93.8477 28.5938 95.8594L28.8867 96.6797H25.7812H22.6562V93.6523C22.6562 90.1953 22.5977 90.2734 24.3555 91.1133ZM77.3438 93.6523V96.6797H74.2188H71.1133L71.4062 95.8594C72.1094 93.8477 73.7891 91.9727 75.6445 91.1133C77.4023 90.2734 77.3438 90.1953 77.3438 93.6523Z" />
                                        <path
                                            d="M46.6602 35.7422C37.6953 37.2656 30.586 44.4531 29.2774 53.3203C28.9649 55.5273 29.1407 59.6094 29.668 61.5625C30.6641 65.3516 32.4024 68.3594 35.2344 71.2109C38.086 74.043 40.9375 75.7031 44.8242 76.7578C47.0117 77.3633 51.3867 77.5195 53.7696 77.0703C61.7383 75.5664 68.0664 69.707 70.2539 61.8164C70.7422 60.0195 70.8008 59.5703 70.8008 56.4453C70.8008 53.3203 70.7422 52.8711 70.2735 51.1133C68.0469 43.1445 61.6602 37.2461 53.711 35.8203C52.1485 35.5469 48.125 35.4883 46.6602 35.7422ZM54.2578 39.2578C59.4336 40.5078 63.8477 44.1797 66.1328 49.1406C68.1836 53.5742 68.1836 59.3164 66.1328 63.75C63.8282 68.75 59.336 72.4414 53.9649 73.7695C51.8946 74.2773 47.8321 74.2187 45.7032 73.6523C39.2188 71.9141 34.375 67.0312 32.7735 60.6055C32.168 58.2031 32.168 54.6875 32.7735 52.2852C34.1016 46.9922 37.7149 42.5976 42.6563 40.332C46.1719 38.6914 50.3516 38.3203 54.2578 39.2578Z" />
                                        <path
                                            d="M38.6719 56.4453V64.4531H40.332H41.9922V61.2305V58.0078H43.5547H45.1172V61.2305V64.4531H46.7773H48.4375V56.4453V48.4375H46.7773H45.1172V51.6602V54.8828H43.5547H41.9922V51.6602V48.4375H40.332H38.6719V56.4453Z" />
                                        <path
                                            d="M51.5625 56.4453V64.4531H53.2227H54.8828V61.2305V58.0078H55.7617C56.7578 58.0078 57.6953 58.3984 57.8906 58.8867C57.9492 59.0625 58.0078 60.3906 58.0078 61.8359V64.4531H59.6875H61.3672L61.2891 61.4648C61.2305 58.6719 61.1914 58.418 60.7031 57.4609L60.1758 56.4453L60.6445 55.5469C61.9727 53.0469 61.0156 50.0781 58.5156 48.9062C57.5977 48.4766 57.2656 48.4375 54.5508 48.4375H51.5625V56.4453ZM57.207 51.8555C57.8125 52.1484 58.0078 52.5 58.0078 53.2227C58.0078 54.3164 57.2461 54.8828 55.7617 54.8828H54.8828V53.2227V51.5625H55.7617C56.2695 51.5625 56.9141 51.6992 57.207 51.8555Z" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_305_27">
                                            <rect width="100" height="100" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                {{-- <svg class="hovercolor " width="40" height="40" viewBox="0 0 60 60"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.25 5.625V54.375H48.75V18L48.1875 17.4375L36.9375 6.1875L36.375 5.625H11.25ZM15 9.375H33.75V20.625H45V50.625H15V9.375ZM37.5 12L42.375 16.875H37.5V12ZM18.75 24.375V28.125H41.25V24.375H18.75ZM18.75 33.75V37.5H31.875V33.75H18.75ZM35.625 33.75V37.5H41.25V33.75H35.625ZM18.75 41.25V45H31.875V41.25H18.75ZM35.625 41.25V45H41.25V41.25H35.625Z" />
                                </svg> --}}
                            </div>
                            <div><span class="text mini-click-non hovercolor">HR</span></div>
                            <div class="triangle"></div>
                        </a>
                        <ul class="submenu-angle hrList padding-top-hr" aria-expanded="false">
                            <div class=" text-black-50 hoverbg d-flex justify-content-start"> <a
                                    class="left_margin text-black-50 pb-2" href="{{ route('indemnity&leave') }}">
                                    <svg class="hoverlist custom-image" width="20" height="20"
                                        viewBox="0 0 100 100" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.892" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.4492 15.918C31.1525 15.8854 51.8557 15.918 72.5586 16.0156C74.4779 16.7625 75.4869 18.1623 75.5859 20.2148C75.7162 24.5768 75.7162 28.9389 75.5859 33.3008C75.2772 33.8971 74.8215 34.0273 74.2188 33.6914C74.1537 29.1342 74.0885 24.5768 74.0234 20.0195C73.7955 18.4896 72.9166 17.6107 71.3867 17.3828C64.4209 17.2852 57.4547 17.2526 50.4883 17.2852C50.5209 23.7959 50.4883 30.3062 50.3906 36.8164C50.0449 37.191 49.6217 37.2887 49.1211 37.1094C48.4049 36.4908 47.6889 35.8725 46.9727 35.2539C46.1836 35.7801 45.4674 36.3986 44.8242 37.1094C44.4336 37.2396 44.043 37.2396 43.6523 37.1094C42.9361 36.4908 42.2201 35.8725 41.5039 35.2539C40.7148 35.7801 39.9986 36.3986 39.3555 37.1094C38.9648 37.2396 38.5742 37.2396 38.1836 37.1094C37.4674 36.4908 36.7514 35.8725 36.0352 35.2539C35.2326 35.7629 34.5164 36.3814 33.8867 37.1094C33.4436 37.2574 33.0203 37.2248 32.6172 37.0117C32.5195 30.4365 32.4869 23.8609 32.5195 17.2852C25.5531 17.2526 18.5869 17.2852 11.6211 17.3828C10.4243 17.5081 9.61053 18.1265 9.17969 19.2383C8.95395 27.3676 8.85629 35.5055 8.88672 43.6523C8.85629 51.7992 8.95395 59.9371 9.17969 68.0664C9.61358 68.8258 10.2321 69.3791 11.0352 69.7266C24.5768 69.7916 38.1186 69.8568 51.6602 69.9219C52.1811 70.3775 52.1811 70.8334 51.6602 71.2891C38.0533 71.4193 24.4467 71.4193 10.8398 71.2891C8.88364 70.7646 7.7443 69.4951 7.42188 67.4805C7.29167 51.5951 7.29167 35.7096 7.42188 19.8242C7.74764 17.9711 8.75676 16.669 10.4492 15.918ZM34.082 17.2852C39.0299 17.2852 43.9779 17.2852 48.9258 17.2852C48.9584 23.0799 48.9258 28.874 48.8281 34.668C48.2291 34.1334 47.5779 33.6775 46.875 33.3008C45.9096 33.9396 44.9982 34.6559 44.1406 35.4492C43.332 34.5908 42.4205 33.8746 41.4063 33.3008C40.4408 33.9396 39.5295 34.6559 38.6719 35.4492C37.8633 34.5908 36.9518 33.8746 35.9375 33.3008C35.2844 33.6611 34.6984 34.1168 34.1797 34.668C34.082 28.874 34.0494 23.0799 34.082 17.2852Z"
                                            fill="black" />
                                        <path opacity="0.853"
                                            d="M49.4789 50.83L49.48 50.813L49.4803 50.796L49.5291 48.3057L49.5771 45.8608C49.64 45.4385 49.7803 45.1511 49.9612 44.9512C50.1452 44.7478 50.4197 44.5812 50.8375 44.4842C56.1889 43.4684 60.9846 41.2694 65.2142 37.8907L65.2381 37.8715L65.2604 37.8505C66.6025 36.5859 67.9576 35.3512 69.3256 34.1462C64.2821 39.7072 58.0258 43.2467 50.5339 44.7729L50.2763 44.8254L50.1078 45.0272C49.9353 45.2339 49.798 45.4635 49.6963 45.7126L49.6435 45.8418L49.6408 45.9814L49.5919 48.4716L49.5434 50.9446C48.9661 59.7749 51.5356 67.5467 57.2426 74.218L57.2608 74.2393L57.2806 74.2593C60.9913 77.9915 65.256 80.9398 70.0703 83.1021C69.9976 83.0927 69.9249 83.0814 69.8522 83.0682C64.6942 80.8101 60.2228 77.6025 56.4325 73.4413C51.2427 66.8207 48.9275 59.2955 49.4789 50.83ZM70.1704 33.5287L70.0207 33.5376C70.0568 33.5062 70.0928 33.4748 70.1289 33.4435C70.6859 33.4195 71.2029 33.5372 71.6937 33.7978C71.7481 33.8584 71.8028 33.9189 71.8575 33.9791L71.7779 33.9304C71.2871 33.6303 70.7445 33.4946 70.1704 33.5287ZM90.9391 44.8308C90.956 44.8342 90.9728 44.8377 90.9897 44.8412C91.3704 45.1555 91.5788 45.5484 91.6349 46.0556C91.7862 48.945 91.7756 51.8265 91.6029 54.7004C91.6996 51.7888 91.6886 48.8771 91.5697 45.9655L91.5643 45.8342L91.5147 45.7126C91.4129 45.4635 91.2756 45.2339 91.1031 45.0272L90.9391 44.8308ZM77.265 79.7299C85.542 74.3348 90.2717 66.7545 91.426 57.0441C91.3268 58.1362 91.204 59.2273 91.0578 60.3173C89.4558 67.4744 85.8143 73.3313 80.1195 77.9126C77.3171 79.8222 74.3907 81.5419 71.3399 83.0716C71.26 83.0857 71.1802 83.0976 71.1004 83.1071C73.1665 82.0264 75.2092 80.9082 77.2281 79.7524L77.2469 79.7417L77.265 79.7299ZM72.1268 34.2721C77.1236 39.6537 83.2402 43.142 90.4583 44.7283C83.1675 43.2177 77.0642 39.7352 72.1268 34.2721ZM74.653 43.9633L74.6677 43.9742L74.683 43.9843C78.1606 46.292 81.9105 48.0357 85.93 49.2148C86.5945 55.6743 85.6436 61.176 83.129 65.7606C80.5972 70.3766 76.4435 74.1296 70.6055 76.9981C64.7672 74.129 60.6133 70.3755 58.0814 65.7595C55.5672 61.1757 54.6163 55.6753 55.2805 49.218C61.0303 47.5667 66.0888 44.7388 70.4471 40.7376C71.8211 41.8352 73.2231 42.9105 74.653 43.9633ZM78.5522 51.3129L78.1853 51.2461L77.9106 51.4984C74.3674 54.7525 70.9016 58.1187 67.5134 61.5969C67.4731 61.5892 67.4318 61.5709 67.3844 61.5385L67.3814 61.5356L67.3741 61.5283L67.3669 61.5211L67.3596 61.5138L67.3524 61.5066L67.3451 61.4993L67.3379 61.4921L67.3306 61.4848L67.3234 61.4776L67.3161 61.4703L67.3089 61.4631L67.3016 61.4558L67.2944 61.4486L67.2871 61.4413L67.2799 61.4341L67.2727 61.4268L67.2654 61.4196L67.2582 61.4123L67.2509 61.4051L67.2437 61.3979L67.2364 61.3906L67.2292 61.3834L67.2219 61.3761L67.2147 61.3689L67.2074 61.3616L67.2002 61.3544L67.1929 61.3471L67.1857 61.3399L67.1784 61.3326L67.1712 61.3254L67.1639 61.3181L67.1567 61.3109L67.1494 61.3036L67.1422 61.2964L67.1349 61.2891L67.1277 61.2819L67.1205 61.2746L67.1132 61.2674L67.106 61.2601L67.0987 61.2529L67.0915 61.2457L67.0842 61.2384L67.077 61.2312L67.0697 61.2239L67.0625 61.2167L67.0552 61.2094L67.048 61.2022L67.0407 61.1949L67.0335 61.1877L67.0262 61.1804L67.019 61.1732L67.0117 61.1659L67.0045 61.1587L66.9972 61.1514L66.99 61.1442L66.9827 61.1369L66.9755 61.1297L66.9682 61.1224L66.961 61.1152L66.9538 61.1079L66.9465 61.1007L66.9393 61.0935L66.932 61.0862L66.9248 61.079L66.9175 61.0717L66.9103 61.0645L66.903 61.0572L66.8958 61.05L66.8885 61.0427L66.8813 61.0355L66.874 61.0282L66.8668 61.021L66.8595 61.0137L66.8523 61.0065L66.845 60.9992L66.8378 60.992L66.8305 60.9847L66.8233 60.9775L66.816 60.9702L66.8088 60.963L66.8015 60.9557L66.7943 60.9485L66.7871 60.9412L66.7798 60.934L66.7726 60.9268L66.7653 60.9195L66.7581 60.9123L66.7508 60.905L66.7436 60.8978L66.7363 60.8905L66.7291 60.8833L66.7218 60.876L66.7146 60.8688L66.7073 60.8615L66.7001 60.8543L66.6928 60.847L66.6856 60.8398L66.6783 60.8325L66.6711 60.8253L66.6638 60.818L66.6566 60.8108L66.6493 60.8035L66.6421 60.7963L66.6348 60.789L66.6276 60.7818L66.6204 60.7745L66.6131 60.7673L66.6059 60.76L66.5986 60.7528L66.5914 60.7456L66.5841 60.7383L66.5769 60.7311L66.5696 60.7238L66.5624 60.7166L66.5551 60.7093L66.5479 60.7021L66.5406 60.6948L66.5334 60.6876L66.5261 60.6803L66.5189 60.6731L66.5116 60.6658L66.5044 60.6586L66.4971 60.6513L66.4899 60.6441L66.4826 60.6368L66.4754 60.6296L66.4681 60.6223L66.4609 60.6151L66.4536 60.6078L66.4464 60.6006L66.4392 60.5933L66.4319 60.5861L66.4247 60.5788L66.4174 60.5716L66.4102 60.5644L66.4029 60.5571L66.3957 60.5499L66.3884 60.5426L66.3812 60.5354L66.3739 60.5281L66.3667 60.5209L66.3594 60.5136L66.3522 60.5064L66.3449 60.4991L66.3377 60.4919L66.3304 60.4846L66.3232 60.4774L66.3159 60.4701L66.3087 60.4629L66.3014 60.4556L66.2942 60.4484L66.2869 60.4411L66.2797 60.4339L66.2724 60.4266L66.2652 60.4194L66.258 60.4121L66.2507 60.4049L66.2435 60.3976L66.2362 60.3904L66.229 60.3832L66.2217 60.3759L66.2145 60.3687L66.2072 60.3614L66.2 60.3542L66.1927 60.3469L66.1855 60.3397L66.1782 60.3324L66.171 60.3252L66.1637 60.3179L66.1565 60.3107L66.1492 60.3034L66.142 60.2962L66.1347 60.2889L66.1275 60.2817L66.1202 60.2744L66.113 60.2672L66.1057 60.2599L66.0985 60.2527L66.0912 60.2454L66.084 60.2382L66.0768 60.2309L66.0695 60.2237L66.0623 60.2164L66.055 60.2092L66.0478 60.202L66.0405 60.1947L66.0333 60.1875L66.026 60.1802L66.0188 60.173L66.0115 60.1657L66.0043 60.1585L65.997 60.1512L65.9898 60.144L65.9825 60.1367L65.9753 60.1295L65.968 60.1222L65.9608 60.115L65.9535 60.1077L65.9463 60.1005L65.939 60.0932L65.9318 60.086L65.9245 60.0787L65.9173 60.0715L65.91 60.0642L65.9028 60.057L65.8955 60.0497L65.8883 60.0425L65.8811 60.0352L65.8738 60.028L65.8666 60.0207L65.8593 60.0135L65.8521 60.0063L65.8448 59.999L65.8376 59.9918L65.8303 59.9845L65.8231 59.9773L65.8158 59.97L65.8086 59.9628L65.8013 59.9555L65.7941 59.9483L65.7868 59.941L65.7796 59.9338L65.7723 59.9265L65.7651 59.9193L65.7578 59.912L65.7506 59.9048L65.7433 59.8975L65.7361 59.8903L65.7288 59.883L65.7216 59.8758L65.7143 59.8685L65.7071 59.8613L65.6999 59.854L65.6926 59.8468L65.6854 59.8395L65.6781 59.8323L65.6709 59.825L65.6636 59.8178L65.6564 59.8106L65.6491 59.8033L65.6419 59.7961L65.6346 59.7888L65.6274 59.7816L65.6201 59.7743L65.6129 59.7671L65.6056 59.7598L65.5984 59.7526L65.5911 59.7453L65.5839 59.7381L65.5766 59.7308L65.5694 59.7236L65.5621 59.7163L65.5549 59.7091L65.5476 59.7018L65.5404 59.6946L65.5331 59.6873L65.5259 59.6801L65.5186 59.6728L65.5114 59.6656L65.5042 59.6583L65.4969 59.6511L65.4897 59.6438L65.4824 59.6366L65.4752 59.6294L65.4679 59.6221L65.4607 59.6149L65.4534 59.6076L65.4462 59.6004L65.4389 59.5931L65.4317 59.5859L65.4244 59.5786L65.4172 59.5714L65.4099 59.5641L65.4027 59.5569L65.3954 59.5496L65.3882 59.5424L65.3809 59.5351L65.3737 59.5279L65.3664 59.5206L65.3592 59.5134L65.3519 59.5061L65.3447 59.4989L65.3374 59.4916L65.3302 59.4844L65.3229 59.4771L65.3157 59.4699L65.3085 59.4626L65.3012 59.4554L65.294 59.4481L65.2867 59.4409L65.2795 59.4337L65.2722 59.4264L65.265 59.4192L65.2577 59.4119L65.2505 59.4047L65.2432 59.3974L65.236 59.3902L65.2287 59.3829L65.2215 59.3757L65.2142 59.3684L65.207 59.3612L65.1997 59.3539L65.1925 59.3467L65.1852 59.3394L65.178 59.3322L65.1707 59.3249L65.1635 59.3177L65.1562 59.3104L65.149 59.3032L65.1417 59.2959L65.1345 59.2887L65.1272 59.2814L65.12 59.2742L65.1128 59.2669L65.1055 59.2597L65.0983 59.2524L65.091 59.2452L65.0838 59.238L65.0765 59.2307L65.0693 59.2235L65.062 59.2162L65.0548 59.209L65.0475 59.2017L65.0403 59.1945L65.033 59.1872L65.0258 59.18L65.0185 59.1727L65.0113 59.1655L65.004 59.1582L64.9968 59.151L64.9895 59.1437L64.9823 59.1365L64.975 59.1292L64.9678 59.122L64.9605 59.1147L64.9533 59.1075L64.946 59.1002L64.9388 59.093L64.9316 59.0857L64.9243 59.0785L64.9171 59.0712L64.9098 59.064L64.9026 59.0568L64.8953 59.0495L64.8881 59.0423L64.8808 59.035L64.8736 59.0278L64.8663 59.0205L64.8591 59.0133L64.8518 59.006L64.8446 58.9988L64.8373 58.9915L64.8301 58.9843L64.8228 58.977L64.8156 58.9698L64.8083 58.9625L64.8011 58.9553L64.7938 58.948L64.7866 58.9408L64.7793 58.9335L64.7721 58.9263L64.7648 58.919L64.7576 58.9118L64.7504 58.9045L64.7431 58.8973L64.7359 58.89L64.7286 58.8828L64.7214 58.8756L64.7141 58.8683L64.7069 58.8611L64.6996 58.8538L64.6924 58.8466L64.6851 58.8393L64.6779 58.8321L64.6706 58.8248L64.6634 58.8176L64.6561 58.8103L64.6489 58.8031L64.6416 58.7958L64.6344 58.7886L64.6271 58.7813L64.6199 58.7741L64.6126 58.7668L64.6054 58.7596L64.5981 58.7523L64.5909 58.7451L64.5836 58.7378L64.5764 58.7306L64.5692 58.7233L64.5619 58.7161L64.5547 58.7088L64.5474 58.7016L64.5402 58.6944L64.5329 58.6871L64.5257 58.6799L64.5184 58.6726L64.5112 58.6654L64.5039 58.6581L64.4967 58.6509L64.4894 58.6436L64.4822 58.6364L64.4749 58.6291L64.4677 58.6219L64.4604 58.6146L64.4532 58.6074L64.4459 58.6001L64.4387 58.5929L64.4314 58.5856L64.4242 58.5784L64.4169 58.5711L64.4097 58.5639L64.4024 58.5566L64.3952 58.5494L64.388 58.5421L64.3807 58.5349L64.3735 58.5276L64.3662 58.5204L64.359 58.5132L64.3517 58.5059L64.3445 58.4987L64.3372 58.4914L64.33 58.4842L64.3227 58.4769L64.3155 58.4697L64.3082 58.4624L64.301 58.4552L64.2937 58.4479L64.2865 58.4407L64.2792 58.4334L64.272 58.4262L64.2647 58.4189L64.2575 58.4117L64.2502 58.4044L64.243 58.3972L64.2357 58.3899L64.2285 58.3827L64.2213 58.3754L64.214 58.3682L64.2068 58.3609L64.1995 58.3537L64.1923 58.3465L64.185 58.3392L64.1778 58.332L64.1705 58.3247L64.1633 58.3175L64.156 58.3102L64.1488 58.303L64.1415 58.2957L64.1343 58.2885L64.127 58.2812L64.1198 58.274L64.1125 58.2667L64.1053 58.2595L64.098 58.2522L64.0908 58.245L64.0835 58.2377L64.0763 58.2305L64.069 58.2232L64.0618 58.216L64.0546 58.2087L64.0473 58.2015L64.0401 58.1943L64.0328 58.187L64.0256 58.1798L64.0183 58.1725L64.0111 58.1653L64.0038 58.158L63.9966 58.1508L63.9893 58.1435L63.9821 58.1363L63.9748 58.129L63.9676 58.1218L63.9603 58.1145L63.9531 58.1073L63.9458 58.1L63.9386 58.0928L63.9313 58.0855L63.9241 58.0783L63.9168 58.071L63.9096 58.0638L63.9024 58.0565L63.8951 58.0493L63.8879 58.042L63.8806 58.0348L63.8734 58.0276L63.8661 58.0203L63.8589 58.0131L63.8516 58.0058L63.8444 57.9986L63.8371 57.9913L63.8299 57.9841L63.8226 57.9768L63.8154 57.9696L63.8081 57.9623L63.8009 57.9551L63.7936 57.9478L63.7864 57.9406L63.7791 57.9333L63.7719 57.9261L63.7646 57.9188L63.7574 57.9116L63.7502 57.9043L63.7429 57.8971L63.7357 57.8898L63.7284 57.8826L63.7212 57.8754L63.7139 57.8681L63.5833 57.7375L63.4069 57.6825C62.8871 57.5203 62.3172 57.4873 61.81 57.7726C61.3052 58.0565 61.0343 58.5594 60.8957 59.0867L60.7985 59.4564L61.0406 59.7523C62.83 61.9393 64.8185 63.9278 67.0055 65.7172L67.5113 66.131L67.9904 65.6867C72.0276 61.9433 75.9755 58.0933 79.8338 54.1369L79.9289 54.0394L79.9836 53.9147C80.2125 53.3933 80.3323 52.7682 80.0159 52.2056C79.7059 51.6545 79.1164 51.4156 78.5522 51.3129Z"
                                            stroke="black" stroke-width="1.5" />
                                        <path opacity="0.858" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M36.4258 54.3945C36.81 54.3479 37.1682 54.4129 37.5 54.5898C38.34 56.1074 39.1539 57.6373 39.9414 59.1797C39.8627 59.4674 39.7324 59.7277 39.5508 59.9609C37.793 60.0912 36.0352 60.0912 34.2773 59.9609C33.9781 59.8242 33.7828 59.5965 33.6914 59.2773C34.5557 57.6129 35.4672 55.9852 36.4258 54.3945ZM36.6211 56.9336C37.1682 57.2693 37.5588 57.7576 37.793 58.3984C37.142 58.5287 36.4908 58.5287 35.8398 58.3984C36.2295 57.9771 36.4898 57.4889 36.6211 56.9336Z"
                                            fill="black" />
                                        <path opacity="0.905" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.9648 55.5664C19.6293 55.5338 25.2934 55.5664 30.957 55.6641C31.0793 55.8105 31.1769 55.9734 31.25 56.1523C31.4096 59.0908 31.3769 62.0205 31.1523 64.9414C25.4242 65.1693 19.6951 65.2018 13.9648 65.0391C13.7058 61.8814 13.7058 58.724 13.9648 55.5664ZM15.332 57.1289C20.1498 57.1289 24.9674 57.1289 29.7851 57.1289C29.7851 59.3424 29.7851 61.5561 29.7851 63.7695C24.9674 63.7695 20.1498 63.7695 15.332 63.7695C15.332 61.5561 15.332 59.3424 15.332 57.1289Z"
                                            fill="black" />
                                        <path opacity="0.857" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M36.4258 60.4492C36.775 60.3936 37.1006 60.4586 37.4023 60.6445C38.3514 62.152 39.1977 63.7145 39.9414 65.332C39.9357 65.6307 39.8055 65.8586 39.5508 66.0156C37.6801 66.1754 35.8246 66.1428 33.9844 65.918C33.8867 65.7227 33.7891 65.5273 33.6914 65.332C34.5557 63.6676 35.4672 62.0398 36.4258 60.4492ZM36.6211 62.9883C37.1682 63.324 37.5588 63.8123 37.793 64.4531C37.1965 64.6135 36.6105 64.5811 36.0352 64.3555C36.2867 63.9182 36.482 63.4625 36.6211 62.9883Z"
                                            fill="black" />
                                    </svg>
                                    <span class="ml-1 text hoverlist">Indemnity & Leave </span>
                                </a></div>
                            <div class=" text-black-50 hoverbg d-flex justify-content-start"> <a
                                    class="left_margin text-black-50 pb-2" href="{{ route('payroll') }}"><svg
                                        class="hoverlist" width="20" height="20" viewBox="0 0 683 683"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M270.799 65.4667C262.399 68.8 262.533 68.8 302.933 92.1334C324.399 104.533 342.266 114.667 342.666 114.533C344.799 114.4 417.733 71.0667 417.733 70C417.733 69.2 415.733 67.6 413.199 66.4C409.066 64.2667 402.933 64 341.333 64.1334C300.799 64.1334 272.666 64.6667 270.799 65.4667Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M256 120C256 136.133 256.267 149.333 256.667 149.333C256.933 149.333 265.867 144.533 276.4 138.667C287.2 132.667 297.2 128 299.2 128C304.133 128 309.333 133.467 309.333 138.667C309.333 144.4 306 147.2 286.4 158C277.067 163.067 269.333 167.733 269.333 168.133C269.333 170.267 279.467 170.667 341.333 170.667C403.2 170.667 413.333 170.267 413.333 168.133C413.333 167.733 405.6 163.067 396.267 158C376.667 147.2 373.333 144.4 373.333 138.667C373.333 133.467 378.533 128 383.467 128C385.467 128 395.467 132.667 406.267 138.667C416.8 144.533 425.733 149.333 426 149.333C426.4 149.333 426.667 136.4 426.667 120.667C426.667 104.933 426.4 92.0001 426 92.0001C425.733 92.0001 407.333 102.533 385.067 115.333C354.4 133.2 343.867 138.533 341.333 138.133C339.467 137.733 321.2 127.867 300.667 116C280.133 104.133 261.733 93.6001 259.733 92.5334L256 90.5334V120Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M112.267 161.467C110.533 162.133 108.4 164.4 107.6 166.667C106.267 170.133 105.467 170.667 101.067 170.667H96V181.333V192H128H160V181.333V170.667H154.933C150.533 170.667 149.733 170.133 148.4 166.667C147.6 164.4 145.333 162.133 143.333 161.333C138.933 159.733 116.4 159.733 112.267 161.467Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M53.333 277.333V373.333H128H202.666V277.333V181.333H192H181.333V189.867C181.333 199.467 178.4 205.2 170.8 210.267C166.4 213.333 165.6 213.333 128 213.333C90.3997 213.333 89.5997 213.333 85.1997 210.267C77.5997 205.2 74.6663 199.467 74.6663 189.867V181.333H63.9997H53.333V277.333ZM92.6663 238C99.333 244.533 94.6663 256 85.333 256C79.8663 256 74.6663 250.8 74.6663 245.333C74.6663 239.867 79.8663 234.667 85.333 234.667C87.8663 234.667 90.6663 235.867 92.6663 238ZM178 238C180.133 240 181.333 242.8 181.333 245.333C181.333 247.867 180.133 250.667 178 252.667L174.8 256H144H113.2L110 252.667C107.866 250.667 106.666 247.867 106.666 245.333C106.666 242.8 107.866 240 110 238L113.2 234.667H144H174.8L178 238ZM92.6663 280.667C99.333 287.2 94.6663 298.667 85.333 298.667C79.8663 298.667 74.6663 293.467 74.6663 288C74.6663 282.533 79.8663 277.333 85.333 277.333C87.8663 277.333 90.6663 278.533 92.6663 280.667ZM178 280.667C180.133 282.667 181.333 285.467 181.333 288C181.333 290.533 180.133 293.333 178 295.333L174.8 298.667H144H113.2L110 295.333C107.866 293.333 106.666 290.533 106.666 288C106.666 285.467 107.866 282.667 110 280.667L113.2 277.333H144H174.8L178 280.667ZM92.6663 323.333C99.333 329.867 94.6663 341.333 85.333 341.333C79.8663 341.333 74.6663 336.133 74.6663 330.667C74.6663 325.2 79.8663 320 85.333 320C87.8663 320 90.6663 321.2 92.6663 323.333ZM178 323.333C180.133 325.333 181.333 328.133 181.333 330.667C181.333 333.2 180.133 336 178 338L174.8 341.333H144H113.2L110 338C107.866 336 106.666 333.2 106.666 330.667C106.666 328.133 107.866 325.333 110 323.333L113.2 320H144H174.8L178 323.333Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M475.2 182.933C470.8 185.067 469.333 189.733 469.333 202V213.333H480H490.666V202C490.666 189.467 489.2 184.933 484.4 182.8C480.533 181.067 478.933 181.067 475.2 182.933Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M500.533 183.467C500.933 184.667 501.333 225.333 501.333 274V362.533L510.533 357.2C515.466 354.4 520.933 352 522.533 352C524.133 352 529.599 354.133 534.666 356.667L543.999 361.333L553.333 356.667C558.399 354.133 563.866 352 565.333 352C566.799 352 572.266 354.133 577.333 356.667L586.666 361.333L595.999 356.667C601.066 354.133 606.666 352 608.266 352C609.999 352 615.466 354.4 620.399 357.2L629.333 362.533V276.667C629.333 216.533 628.933 189.867 627.866 187.6C627.066 185.733 624.933 183.6 623.066 182.8C620.933 181.733 600.933 181.333 559.733 181.333C505.599 181.333 499.733 181.6 500.533 183.467ZM604.666 216.667C606.799 218.667 607.999 221.467 607.999 224C607.999 226.533 606.799 229.333 604.666 231.333L601.466 234.667H565.333H529.199L525.999 231.333C523.866 229.333 522.666 226.533 522.666 224C522.666 221.467 523.866 218.667 525.999 216.667L529.199 213.333H565.333H601.466L604.666 216.667ZM604.666 259.333C606.799 261.333 607.999 264.133 607.999 266.667C607.999 269.2 606.799 272 604.666 274L601.466 277.333H565.333H529.199L525.999 274C523.866 272 522.666 269.2 522.666 266.667C522.666 264.133 523.866 261.333 525.999 259.333L529.199 256H565.333H601.466L604.666 259.333ZM604.666 302C606.799 304 607.999 306.8 607.999 309.333C607.999 311.867 606.799 314.667 604.666 316.667L601.466 320H565.333H529.199L525.999 316.667C523.866 314.667 522.666 311.867 522.666 309.333C522.666 306.8 523.866 304 525.999 302L529.199 298.667H565.333H601.466L604.666 302Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M330.666 202.667V213.333H341.333H351.999V202.667V192H341.333H330.666V202.667Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M330.666 245.333V256H341.333H351.999V245.333V234.667H341.333H330.666V245.333Z"
                                            fill="#7F7F7F" />
                                        <path d="M330.666 288V298.667H341.333H351.999V288V277.333H341.333H330.666V288Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M330.666 330.667V341.333H341.333H351.999V330.667V320H341.333H330.666V330.667Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M328.666 353.6C304.4 358.133 283.333 379.867 278.8 404.533C276.933 414.8 276.933 440.533 278.8 449.6C280.933 459.867 287.066 472 294.133 479.867C299.466 485.867 299.866 486.8 297.733 487.467C258 501.6 225.6 536.4 215.333 576C210.933 593.067 216.666 607.2 231.333 615.067L236.666 618H341.333H446L451.333 615.067C466 607.2 471.733 593.067 467.333 576C464.8 565.867 455.466 545.467 449.2 536.533C434.933 515.733 409.066 496 384.933 487.467C382.8 486.8 383.2 485.867 388.533 479.867C400.666 466.4 405.333 451.6 405.333 426.667C405.333 400.133 400.266 385.333 386.133 371.2C370.666 355.867 350.133 349.467 328.666 353.6ZM360.666 378C370.666 383.067 379.066 393.2 382.133 403.467C383.733 409.2 384.133 415.2 383.733 429.733C383.2 451.867 381.333 457.333 371.333 467.333C362.266 476.4 355.066 479.333 341.333 479.333C327.6 479.333 320 476.133 310.4 466.4C300.8 456.533 298.666 449.333 298.666 426.667C298.666 403.2 300.933 396.133 311.466 385.733C320.933 376.533 329.466 373.2 342.8 373.733C350.933 374 354.4 374.8 360.666 378ZM326.933 512.133C329.6 516.8 331.6 521.467 331.333 522.4C330.933 523.333 328.933 538.667 326.666 556.4C324.533 574.133 322.4 590.667 322 592.933L321.2 597.333H281.2H241.2L238 594C234.133 590.267 233.866 587.067 236.8 577.2C245.066 549.6 267.066 524.4 293.866 511.867C302.933 507.6 318.4 502.667 320.666 503.2C321.333 503.467 324.266 507.467 326.933 512.133ZM378.4 507.733C410 518.933 434.4 543.733 445.466 575.867C448.933 585.6 448.666 590.133 444.666 594L441.466 597.333H401.466H361.6L360.8 593.6C360.4 591.6 358.266 574.8 356 556.4L351.866 522.667L356.933 513.333C362.933 502.4 363.066 502.4 378.4 507.733Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M106.666 405.333V416H117.333H127.999V405.333V394.667H117.333H106.666V405.333Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M554.666 405.333V416H565.333H575.999V405.333V394.667H565.333H554.666V405.333Z"
                                            fill="#7F7F7F" />
                                        <path d="M106.666 448V458.667H117.333H127.999V448V437.333H117.333H106.666V448Z"
                                            fill="#7F7F7F" />
                                        <path d="M554.666 448V458.667H565.333H575.999V448V437.333H565.333H554.666V448Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M106.666 490.667V501.333H117.333H127.999V490.667V480H117.333H106.666V490.667Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M554.666 490.667V501.333H565.333H575.999V490.667V480H565.333H554.666V490.667Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M106.666 528.667C106.666 531.867 107.333 536 108.133 537.733C109.999 542 114.666 544 121.999 544H127.999V533.333V522.667H117.333H106.666V528.667Z"
                                            fill="#7F7F7F" />
                                        <path d="M149.333 533.333V544H160H170.666V533.333V522.667H160H149.333V533.333Z"
                                            fill="#7F7F7F" />
                                        <path d="M192 533.333V544H202.667H213.333V533.333V522.667H202.667H192V533.333Z"
                                            fill="#7F7F7F" />
                                        <path d="M469.333 533.333V544H480H490.666V533.333V522.667H480H469.333V533.333Z"
                                            fill="#7F7F7F" />
                                        <path d="M512 533.333V544H522.667H533.333V533.333V522.667H522.667H512V533.333Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M554.666 533.333V544H560.666C571.866 544 575.999 539.867 575.999 528.667V522.667H565.333H554.666V533.333Z"
                                            fill="#7F7F7F" />
                                    </svg><span class="ml-1 text hoverlist">Payroll
                                    </span>
                                </a></div>
                        </ul>
                    </li>
                    <li class="removable sidebar-h expenses">
                        <a class=" text-black-50 d-flex flex-column align-items-center triangle-container"
                            aria-expanded="false">

                            <div class="mb-2 "> {{-- <img class="hovercolor custom-image" src="/assets/admin/img/logo/expenses.png"
                                alt="Description of the image"> --}}

                                <svg class="hovercolor" width="40" height="40" viewBox="0 0 100 100"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M86.3281 1.73828C86.0547 1.83594 85.625 2.01172 85.3711 2.16797C84.8437 2.48047 77.0312 12.8516 76.7383 13.6133C76.3086 14.7852 76.7969 16.0742 77.9687 16.7969C78.457 17.0898 78.9648 17.1875 80.0391 17.1875H81.4453V18.0078C81.4453 19.2773 80.918 21.2305 80.2539 22.4805C79.4726 23.9258 78.2617 25.1758 76.5625 26.2891C75.1562 27.1875 74.8437 27.6758 75.0781 28.5938C75.2344 29.2578 82.1094 34.375 82.832 34.375C83.5351 34.375 86.0351 32.5 87.7344 30.7031C90.6836 27.5586 92.6953 23.5547 93.3594 19.5312C93.7695 16.9336 93.5742 17.1875 95.0976 17.1875C96.6601 17.1875 97.5391 16.7383 98.1055 15.625C98.7891 14.2969 98.6133 13.9453 94.4726 8.35938C92.3633 5.52734 90.4492 3.00781 90.2148 2.75391C89.3164 1.79688 87.6172 1.34766 86.3281 1.73828ZM91.3086 9.31641L94.7461 13.9648L93.0469 14.0625C91.0547 14.1797 90.625 14.5117 90.625 15.918C90.625 18.7891 89.5312 22.6172 87.9687 25.2344C87.0312 26.7773 84.4922 29.6875 83.3789 30.4883L82.832 30.8789L81.1133 29.5898L79.375 28.3008L80.8594 26.7969C83.4375 24.1797 84.7656 20.6445 84.5117 17.0508C84.3164 14.4531 83.9844 14.082 81.7969 14.0625C80.957 14.0625 80.2734 14.0234 80.2734 13.9648C80.2734 13.9062 81.8164 11.7969 83.6914 9.27734C86.0937 6.05469 87.207 4.6875 87.4805 4.6875C87.7539 4.6875 88.8672 6.05469 91.3086 9.31641Z" />
                                    <path
                                        d="M46.4648 8.06641C45.9766 8.20312 45.1758 8.55469 44.707 8.82812C44.2188 9.12109 36.9922 15.332 28.6523 22.6367L13.4766 35.9375H12.5391C8.4375 35.9375 4.49219 38.3984 2.73438 42.0703C2.32422 42.9492 1.89453 44.1797 1.77734 44.8047C1.48438 46.4258 1.48438 87.9492 1.77734 89.5703C2.46094 93.3594 5.41016 96.6211 9.375 97.9688C10.4102 98.3203 11.7773 98.3398 46.0938 98.3398C80.4102 98.3398 81.7773 98.3203 82.8125 97.9688C86.3672 96.7578 88.7695 94.4141 90.0781 90.8789C90.4688 89.8242 90.5078 89.2969 90.5859 83.9648L90.6641 78.1641L91.7188 78.0273C93.1641 77.8516 95.2734 76.7578 96.2891 75.6641C96.7383 75.1758 97.3828 74.1992 97.7148 73.4766L98.3398 72.168V67.1875V62.207L97.7148 60.8984C97.3828 60.1758 96.7383 59.1992 96.2891 58.7109C95.2734 57.6172 93.1641 56.5234 91.6992 56.3477L90.625 56.2109V51.0938C90.625 48.2812 90.5273 45.4492 90.4102 44.8047C90.0781 42.9102 88.8867 40.6836 87.4023 39.1992C85.918 37.6953 83.6914 36.5039 81.7578 36.1523C81.1133 36.0352 78.2812 35.9375 75.4688 35.9375H70.332L70.2734 30.3125C70.2148 24.9805 70.1953 24.6484 69.7656 23.5938C69.1016 21.9531 67.6758 20.4688 65.8594 19.5898C64.4531 18.8867 64.2773 18.8477 62.5 18.8477C60.6445 18.8477 60.625 18.8477 58.5156 19.8633C57.3633 20.4297 56.3672 20.8984 56.3281 20.8984C56.2891 20.8984 56.25 19.5508 56.25 17.9102C56.25 14.4922 55.9961 13.1836 55.0195 11.543C53.7305 9.39453 51.4453 8.02734 48.8672 7.89062C47.9883 7.85156 46.9922 7.91016 46.4648 8.06641ZM50.5078 11.4844C51.3867 11.9336 52.1484 12.7148 52.6562 13.6719C52.9688 14.2578 53.0273 14.9023 53.0859 18.3984L53.1445 22.4414L39.6484 29.1992L26.1523 35.9375L22.2461 35.8984L18.3398 35.8398L31.9141 23.9258C39.8047 17.0117 45.9375 11.7773 46.5234 11.4648C47.4023 10.9766 47.7148 10.918 48.6523 10.9961C49.2383 11.0547 50.0781 11.2695 50.5078 11.4844ZM64.082 22.168C64.5703 22.3438 65.293 22.793 65.7031 23.1836C67.0898 24.5312 67.0898 24.4922 67.1484 30.5078L67.207 35.9375L50.2539 35.918H33.3008L45.9961 29.5508C52.9883 26.0352 59.3555 22.8906 60.1562 22.5195C61.7969 21.7969 62.7539 21.7188 64.082 22.168ZM83.0469 39.8828C84.8242 40.7617 85.918 41.8945 86.7773 43.7109L87.4023 45.0195L87.4609 50.625L87.5195 56.2305L78.6719 56.2891L69.8242 56.3477L68.6523 56.8945C66.5625 57.8711 65.293 59.5312 64.5312 62.3242C64.0234 64.1211 64.0234 70.2539 64.5312 72.0508C65.293 74.8438 66.5625 76.5039 68.6523 77.4805L69.8242 78.0273L78.6719 78.0859L87.5195 78.1445L87.4609 83.75L87.4023 89.3555L86.7773 90.6641C85.918 92.4805 84.8242 93.6133 83.0469 94.4922L81.5625 95.2148H46.1133H10.6445L9.33594 94.5898C7.51953 93.7305 6.38672 92.6367 5.50781 90.8594L4.78516 89.375V67.207V45.0195L5.41016 43.7109C5.74219 42.9883 6.38672 42.0117 6.81641 41.543C7.67578 40.6055 9.45312 39.5703 10.6641 39.2773C11.1133 39.1797 25.7617 39.1211 46.5039 39.1211L81.5625 39.1602L83.0469 39.8828ZM92.0703 59.6094C93.1445 59.9219 94.7656 61.543 95.0781 62.6172C95.3906 63.7109 95.3906 70.6641 95.0781 71.7578C94.7656 72.832 93.1445 74.4531 92.0703 74.7656C91.0156 75.0781 71.3672 75.0977 70.2539 74.7852C69.1016 74.4727 68.2422 73.457 67.7344 71.8164C67.3438 70.5859 67.2852 70 67.2852 67.1875C67.2852 64.375 67.3438 63.7891 67.7344 62.5586C68.2227 60.957 69.1016 59.9023 70.1758 59.5898C71.1719 59.2969 91.0938 59.3164 92.0703 59.6094Z" />
                                    <path
                                        d="M75.0977 61.1133C73.3008 61.582 71.7187 62.8711 70.8984 64.5508C70.5273 65.3516 70.4297 65.8398 70.4297 67.1875C70.4102 68.7109 70.4687 68.9453 71.0742 70.0781C71.8164 71.4453 72.4414 72.0312 73.9062 72.8125C74.7461 73.2422 75.1562 73.3203 76.5625 73.3203C77.9687 73.3203 78.3789 73.2422 79.2187 72.8125C80.6836 72.0312 81.3086 71.4453 82.0508 70.0781C82.6562 68.9453 82.7148 68.7109 82.6953 67.1875C82.6953 65.7812 82.6172 65.3711 82.1875 64.5312C81.4258 63.0664 80.8203 62.4414 79.5117 61.7383C78.2422 61.0742 76.3086 60.7812 75.0977 61.1133ZM77.793 64.3359C79.8047 65.1758 80.293 67.793 78.7305 69.3555C77.4609 70.625 75.6641 70.625 74.3945 69.3555C71.9727 66.9531 74.6484 63.0078 77.793 64.3359Z" />
                                </svg>
                            </div>
                            <div><span class="text mini-click-non hovercolor">Expenses</span></div>
                            <div class="triangle"></div>
                        </a>
                        <ul class="submenu-angle expenseslist padding-top-expenses" aria-expanded="false">
                            <div class=" text-black-50 hoverbg d-flex justify-content-start"> <a
                                    class="left_margin text-black-50 pb-2" href="{{ route('payroll') }}"><svg
                                        class="hoverlist" width="20" height="20" viewBox="0 0 683 683"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M270.799 65.4667C262.399 68.8 262.533 68.8 302.933 92.1334C324.399 104.533 342.266 114.667 342.666 114.533C344.799 114.4 417.733 71.0667 417.733 70C417.733 69.2 415.733 67.6 413.199 66.4C409.066 64.2667 402.933 64 341.333 64.1334C300.799 64.1334 272.666 64.6667 270.799 65.4667Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M256 120C256 136.133 256.267 149.333 256.667 149.333C256.933 149.333 265.867 144.533 276.4 138.667C287.2 132.667 297.2 128 299.2 128C304.133 128 309.333 133.467 309.333 138.667C309.333 144.4 306 147.2 286.4 158C277.067 163.067 269.333 167.733 269.333 168.133C269.333 170.267 279.467 170.667 341.333 170.667C403.2 170.667 413.333 170.267 413.333 168.133C413.333 167.733 405.6 163.067 396.267 158C376.667 147.2 373.333 144.4 373.333 138.667C373.333 133.467 378.533 128 383.467 128C385.467 128 395.467 132.667 406.267 138.667C416.8 144.533 425.733 149.333 426 149.333C426.4 149.333 426.667 136.4 426.667 120.667C426.667 104.933 426.4 92.0001 426 92.0001C425.733 92.0001 407.333 102.533 385.067 115.333C354.4 133.2 343.867 138.533 341.333 138.133C339.467 137.733 321.2 127.867 300.667 116C280.133 104.133 261.733 93.6001 259.733 92.5334L256 90.5334V120Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M112.267 161.467C110.533 162.133 108.4 164.4 107.6 166.667C106.267 170.133 105.467 170.667 101.067 170.667H96V181.333V192H128H160V181.333V170.667H154.933C150.533 170.667 149.733 170.133 148.4 166.667C147.6 164.4 145.333 162.133 143.333 161.333C138.933 159.733 116.4 159.733 112.267 161.467Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M53.333 277.333V373.333H128H202.666V277.333V181.333H192H181.333V189.867C181.333 199.467 178.4 205.2 170.8 210.267C166.4 213.333 165.6 213.333 128 213.333C90.3997 213.333 89.5997 213.333 85.1997 210.267C77.5997 205.2 74.6663 199.467 74.6663 189.867V181.333H63.9997H53.333V277.333ZM92.6663 238C99.333 244.533 94.6663 256 85.333 256C79.8663 256 74.6663 250.8 74.6663 245.333C74.6663 239.867 79.8663 234.667 85.333 234.667C87.8663 234.667 90.6663 235.867 92.6663 238ZM178 238C180.133 240 181.333 242.8 181.333 245.333C181.333 247.867 180.133 250.667 178 252.667L174.8 256H144H113.2L110 252.667C107.866 250.667 106.666 247.867 106.666 245.333C106.666 242.8 107.866 240 110 238L113.2 234.667H144H174.8L178 238ZM92.6663 280.667C99.333 287.2 94.6663 298.667 85.333 298.667C79.8663 298.667 74.6663 293.467 74.6663 288C74.6663 282.533 79.8663 277.333 85.333 277.333C87.8663 277.333 90.6663 278.533 92.6663 280.667ZM178 280.667C180.133 282.667 181.333 285.467 181.333 288C181.333 290.533 180.133 293.333 178 295.333L174.8 298.667H144H113.2L110 295.333C107.866 293.333 106.666 290.533 106.666 288C106.666 285.467 107.866 282.667 110 280.667L113.2 277.333H144H174.8L178 280.667ZM92.6663 323.333C99.333 329.867 94.6663 341.333 85.333 341.333C79.8663 341.333 74.6663 336.133 74.6663 330.667C74.6663 325.2 79.8663 320 85.333 320C87.8663 320 90.6663 321.2 92.6663 323.333ZM178 323.333C180.133 325.333 181.333 328.133 181.333 330.667C181.333 333.2 180.133 336 178 338L174.8 341.333H144H113.2L110 338C107.866 336 106.666 333.2 106.666 330.667C106.666 328.133 107.866 325.333 110 323.333L113.2 320H144H174.8L178 323.333Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M475.2 182.933C470.8 185.067 469.333 189.733 469.333 202V213.333H480H490.666V202C490.666 189.467 489.2 184.933 484.4 182.8C480.533 181.067 478.933 181.067 475.2 182.933Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M500.533 183.467C500.933 184.667 501.333 225.333 501.333 274V362.533L510.533 357.2C515.466 354.4 520.933 352 522.533 352C524.133 352 529.599 354.133 534.666 356.667L543.999 361.333L553.333 356.667C558.399 354.133 563.866 352 565.333 352C566.799 352 572.266 354.133 577.333 356.667L586.666 361.333L595.999 356.667C601.066 354.133 606.666 352 608.266 352C609.999 352 615.466 354.4 620.399 357.2L629.333 362.533V276.667C629.333 216.533 628.933 189.867 627.866 187.6C627.066 185.733 624.933 183.6 623.066 182.8C620.933 181.733 600.933 181.333 559.733 181.333C505.599 181.333 499.733 181.6 500.533 183.467ZM604.666 216.667C606.799 218.667 607.999 221.467 607.999 224C607.999 226.533 606.799 229.333 604.666 231.333L601.466 234.667H565.333H529.199L525.999 231.333C523.866 229.333 522.666 226.533 522.666 224C522.666 221.467 523.866 218.667 525.999 216.667L529.199 213.333H565.333H601.466L604.666 216.667ZM604.666 259.333C606.799 261.333 607.999 264.133 607.999 266.667C607.999 269.2 606.799 272 604.666 274L601.466 277.333H565.333H529.199L525.999 274C523.866 272 522.666 269.2 522.666 266.667C522.666 264.133 523.866 261.333 525.999 259.333L529.199 256H565.333H601.466L604.666 259.333ZM604.666 302C606.799 304 607.999 306.8 607.999 309.333C607.999 311.867 606.799 314.667 604.666 316.667L601.466 320H565.333H529.199L525.999 316.667C523.866 314.667 522.666 311.867 522.666 309.333C522.666 306.8 523.866 304 525.999 302L529.199 298.667H565.333H601.466L604.666 302Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M330.666 202.667V213.333H341.333H351.999V202.667V192H341.333H330.666V202.667Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M330.666 245.333V256H341.333H351.999V245.333V234.667H341.333H330.666V245.333Z"
                                            fill="#7F7F7F" />
                                        <path d="M330.666 288V298.667H341.333H351.999V288V277.333H341.333H330.666V288Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M330.666 330.667V341.333H341.333H351.999V330.667V320H341.333H330.666V330.667Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M328.666 353.6C304.4 358.133 283.333 379.867 278.8 404.533C276.933 414.8 276.933 440.533 278.8 449.6C280.933 459.867 287.066 472 294.133 479.867C299.466 485.867 299.866 486.8 297.733 487.467C258 501.6 225.6 536.4 215.333 576C210.933 593.067 216.666 607.2 231.333 615.067L236.666 618H341.333H446L451.333 615.067C466 607.2 471.733 593.067 467.333 576C464.8 565.867 455.466 545.467 449.2 536.533C434.933 515.733 409.066 496 384.933 487.467C382.8 486.8 383.2 485.867 388.533 479.867C400.666 466.4 405.333 451.6 405.333 426.667C405.333 400.133 400.266 385.333 386.133 371.2C370.666 355.867 350.133 349.467 328.666 353.6ZM360.666 378C370.666 383.067 379.066 393.2 382.133 403.467C383.733 409.2 384.133 415.2 383.733 429.733C383.2 451.867 381.333 457.333 371.333 467.333C362.266 476.4 355.066 479.333 341.333 479.333C327.6 479.333 320 476.133 310.4 466.4C300.8 456.533 298.666 449.333 298.666 426.667C298.666 403.2 300.933 396.133 311.466 385.733C320.933 376.533 329.466 373.2 342.8 373.733C350.933 374 354.4 374.8 360.666 378ZM326.933 512.133C329.6 516.8 331.6 521.467 331.333 522.4C330.933 523.333 328.933 538.667 326.666 556.4C324.533 574.133 322.4 590.667 322 592.933L321.2 597.333H281.2H241.2L238 594C234.133 590.267 233.866 587.067 236.8 577.2C245.066 549.6 267.066 524.4 293.866 511.867C302.933 507.6 318.4 502.667 320.666 503.2C321.333 503.467 324.266 507.467 326.933 512.133ZM378.4 507.733C410 518.933 434.4 543.733 445.466 575.867C448.933 585.6 448.666 590.133 444.666 594L441.466 597.333H401.466H361.6L360.8 593.6C360.4 591.6 358.266 574.8 356 556.4L351.866 522.667L356.933 513.333C362.933 502.4 363.066 502.4 378.4 507.733Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M106.666 405.333V416H117.333H127.999V405.333V394.667H117.333H106.666V405.333Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M554.666 405.333V416H565.333H575.999V405.333V394.667H565.333H554.666V405.333Z"
                                            fill="#7F7F7F" />
                                        <path d="M106.666 448V458.667H117.333H127.999V448V437.333H117.333H106.666V448Z"
                                            fill="#7F7F7F" />
                                        <path d="M554.666 448V458.667H565.333H575.999V448V437.333H565.333H554.666V448Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M106.666 490.667V501.333H117.333H127.999V490.667V480H117.333H106.666V490.667Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M554.666 490.667V501.333H565.333H575.999V490.667V480H565.333H554.666V490.667Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M106.666 528.667C106.666 531.867 107.333 536 108.133 537.733C109.999 542 114.666 544 121.999 544H127.999V533.333V522.667H117.333H106.666V528.667Z"
                                            fill="#7F7F7F" />
                                        <path d="M149.333 533.333V544H160H170.666V533.333V522.667H160H149.333V533.333Z"
                                            fill="#7F7F7F" />
                                        <path d="M192 533.333V544H202.667H213.333V533.333V522.667H202.667H192V533.333Z"
                                            fill="#7F7F7F" />
                                        <path d="M469.333 533.333V544H480H490.666V533.333V522.667H480H469.333V533.333Z"
                                            fill="#7F7F7F" />
                                        <path d="M512 533.333V544H522.667H533.333V533.333V522.667H522.667H512V533.333Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M554.666 533.333V544H560.666C571.866 544 575.999 539.867 575.999 528.667V522.667H565.333H554.666V533.333Z"
                                            fill="#7F7F7F" />
                                    </svg><span class="ml-1 text hoverlist">Payroll
                                    </span>
                                </a></div>

                            <div class=" text-black-50 hoverbg d-flex justify-content-start"> <a
                                    class="left_margin text-black-50 pb-2" href="{{ route('miscellaneous') }}">
                                    <svg class="hoverlist" width="22" height="22" viewBox="0 0 100 100"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20.8398 21.0547L13.2812 28.6328L13.3203 53.418L13.3789 78.2227L13.8281 79.043C14.5117 80.332 15.3711 81.1914 16.5625 81.7773L17.6758 82.3242L32.0312 82.3828L46.3867 82.4219L46.9531 83.5156C47.6367 84.8047 48.8672 85.8203 50.2539 86.2305C51.7383 86.6797 76.9922 86.6602 78.4766 86.2305C79.9414 85.7813 81.0352 84.8633 81.7969 83.418L82.4219 82.168L82.3828 63.9844L82.3242 45.8008L81.8945 45.0195C81.3086 43.9453 80.1758 42.8711 79.0039 42.3438C78.0469 41.9141 77.8516 41.8945 70.957 41.8359L63.8867 41.7773L63.8281 29.9219L63.7695 18.0664L63.125 16.7383C62.6562 15.8203 62.207 15.2344 61.582 14.7461C59.8828 13.4375 60.3516 13.4766 43.5742 13.4766H28.418L20.8398 21.0547ZM59.7266 16.7578C61.0938 17.7344 61.0352 17.168 61.0938 30.1172L61.1523 41.7578L55.918 41.8359C50.918 41.8945 50.6445 41.9141 49.6484 42.3633C48.418 42.9297 47.0117 44.3945 46.6211 45.5664L46.3477 46.3867L40.9766 46.4844C36.0352 46.582 35.5469 46.6211 35.1758 46.9531C34.668 47.4219 34.6289 48.457 35.1172 48.8867C35.4297 49.1602 36.1914 49.2188 40.8398 49.2578L46.1914 49.3164V53.3203V57.3242L40.8398 57.3828C34.8828 57.4414 34.7656 57.4609 34.7656 58.7109C34.7656 59.1602 34.9023 59.4531 35.2734 59.7461C35.7812 60.1367 36.0352 60.1563 41.0352 60.1563H46.2891V64.1602V68.1641H40.918C35.8008 68.1641 35.5273 68.1836 35.1562 68.5547C34.6484 69.0625 34.6484 70 35.1562 70.5078C35.5273 70.8789 35.8008 70.8984 40.918 70.8984H46.2891V75.293V79.6875L32.1484 79.6484C18.2031 79.5898 17.9883 79.5898 17.4609 79.1797C17.168 78.9648 16.7383 78.5352 16.5234 78.2422C16.1133 77.7148 16.1133 77.5977 16.0547 54.1992L16.0156 30.7031L20.9375 30.625C26.4258 30.5469 26.8359 30.4688 28.3789 29.1016C30.1367 27.5586 30.4688 26.1719 30.4688 20.2539V16.2109L44.7852 16.25L59.082 16.3086L59.7266 16.7578ZM27.5391 22.0508C27.5391 25.5469 27.5195 25.7617 27.1094 26.3672C26.1328 27.7734 25.9766 27.832 21.7188 27.8906L17.8711 27.9492L22.6562 23.1641C25.293 20.5273 27.4609 18.3594 27.4805 18.3594C27.5195 18.3594 27.5391 20.0195 27.5391 22.0508ZM78.2227 44.9805C78.5547 45.1758 78.9844 45.5859 79.1992 45.8594C79.5898 46.3672 79.5898 46.7383 79.6484 64.082L79.6875 81.7773L79.2578 82.4219C79.0039 82.7734 78.4961 83.2227 78.125 83.418C77.4805 83.7695 76.7188 83.7891 64.3555 83.7891C51.9922 83.7891 51.2305 83.7695 50.5859 83.418C50.2148 83.2227 49.707 82.7734 49.4727 82.4219L49.0234 81.7773V64.3164C49.0234 45.4688 48.9648 46.3672 50.0586 45.3516C50.3125 45.0977 50.7812 44.8242 51.0938 44.7266C51.4062 44.6289 57.5 44.5703 64.6484 44.5898C76.875 44.6289 77.6758 44.6484 78.2227 44.9805Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M35.2929 26.1719C34.6484 26.6797 34.5702 27.6953 35.1171 28.1836C35.4492 28.4766 36.4257 28.5156 45.1757 28.5156C54.6288 28.5156 54.9023 28.4961 55.2734 28.125C55.7617 27.6367 55.7812 26.9336 55.2929 26.3477L54.9218 25.8789L45.371 25.8203C35.9179 25.7617 35.8007 25.7812 35.2929 26.1719Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M27.7148 35.4688L26.3672 36.7773L25.4883 35.957C24.4336 34.9805 23.6719 34.8828 23.0664 35.6641C22.832 35.957 22.6562 36.3672 22.6562 36.582C22.6562 36.7969 23.3008 37.6367 24.1992 38.5352C26.3281 40.7227 26.3867 40.7227 29.0234 38.0469C31.2305 35.8203 31.4258 35.3711 30.6055 34.6094C29.8047 33.8672 29.1992 34.043 27.7148 35.4688Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M35.4492 35.9766C34.9023 36.2891 34.7656 36.5234 34.7656 37.2461C34.7656 38.4961 34.5703 38.4766 45.2148 38.4766H54.8242L55.2344 38.0273C55.8008 37.4414 55.7812 36.8164 55.1758 36.2305L54.707 35.7422H45.2734C38.6133 35.7617 35.7227 35.8203 35.4492 35.9766Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M27.8516 46.2695L26.4648 47.6367L25.5469 46.7578C24.9414 46.1914 24.4531 45.8984 24.1211 45.8984C23.4961 45.8984 22.6562 46.6992 22.6562 47.2852C22.6562 47.9102 25.7422 50.9766 26.3672 50.9766C27.0117 50.9766 31.0547 46.9531 31.0547 46.3281C31.0547 45.7617 30.2344 44.9219 29.668 44.9219C29.4141 44.9219 28.7109 45.4492 27.8516 46.2695Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M27.8321 57.0312L26.3672 58.457L25.4102 57.5586C24.2969 56.5234 23.8282 56.4258 23.1446 57.1289C22.3633 57.8906 22.5196 58.3008 24.2579 60.0781C26.4258 62.3242 26.4454 62.3242 29.043 59.6875C31.1719 57.5391 31.3868 57.0898 30.7227 56.2891C30.5274 56.0547 30.1368 55.8203 29.8438 55.7422C29.3555 55.6445 29.1211 55.8008 27.8321 57.0312Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M27.6954 67.9102L26.3672 69.2187L25.5469 68.418C25.0782 67.9687 24.5704 67.5781 24.4141 67.5586C23.7891 67.4414 23.086 67.7734 22.8516 68.3398C22.5391 69.1016 22.8711 69.6875 24.4727 71.2305C26.3282 73.0273 26.504 72.9883 29.043 70.4492C30.6055 68.8867 31.0547 68.3203 31.0547 67.9102C31.0547 67.1875 30.4102 66.6016 29.629 66.6016C29.1211 66.6016 28.7696 66.8359 27.6954 67.9102Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M52.9883 48.457C51.9141 49.1406 51.7578 49.9023 51.7578 54.3555C51.7578 58.7891 51.875 59.2773 53.1055 60.0977L53.7695 60.5469H64.3555H74.9414L75.6055 60.0977C76.8359 59.2773 76.9531 58.7891 76.9531 54.2383C76.9531 49.6875 76.8164 49.1016 75.7031 48.418C75.1367 48.0664 74.5312 48.0469 64.3555 48.0469C53.9062 48.0469 53.5938 48.0664 52.9883 48.457ZM74.2188 54.2969V57.8125H64.3555H54.4922V54.2969V50.7812H64.3555H74.2188V54.2969Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M53.3203 63.418C52.5976 63.5742 51.8359 64.1797 51.5624 64.8242C51.4062 65.1953 51.3476 66.1328 51.4062 67.4609C51.4648 69.4922 51.4648 69.5312 52.1093 70.1562C52.7343 70.8008 52.7539 70.8008 54.9414 70.8594C56.9726 70.918 57.1679 70.8984 57.8124 70.4687C58.6718 69.8828 58.9648 69.0625 58.9648 67.0898C58.9843 65.332 58.6523 64.4531 57.7734 63.7891C57.3437 63.4766 56.8749 63.3984 55.5273 63.3594C54.5703 63.3398 53.5937 63.3594 53.3203 63.418ZM56.2109 67.1289L56.2695 68.1641H55.1953H54.1015V67.0703V65.9961L55.1367 66.0547L56.1523 66.1133L56.2109 67.1289Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M62.4023 63.4766C62.0703 63.5742 61.5429 63.9258 61.2304 64.2578C60.6835 64.8438 60.6445 64.9609 60.5859 66.7773C60.4687 70.1758 61.1328 70.8984 64.3554 70.8984C66.5624 70.8984 67.0703 70.7227 67.7148 69.7461C68.1054 69.1797 68.164 68.8281 68.164 67.2461C68.164 64.1211 67.5585 63.4375 64.6484 63.3594C63.7304 63.3203 62.7148 63.3789 62.4023 63.4766ZM65.4296 67.0898V68.1641H64.3554H63.2812V67.0898V66.0156H64.3554H65.4296V67.0898Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M71.6016 63.4766C70.8008 63.7305 70.1562 64.4141 69.9219 65.2148C69.668 66.1523 69.668 78.0078 69.9219 78.9453C70.0391 79.3359 70.3906 79.8828 70.7227 80.1562C71.2891 80.6445 71.4453 80.6641 73.4961 80.6641C75.8789 80.6445 76.3477 80.5078 76.9727 79.5703C77.3242 79.043 77.3438 78.5937 77.3438 72.1094C77.3438 64.6094 77.3242 64.4727 76.25 63.7695C75.625 63.3594 72.5586 63.1641 71.6016 63.4766ZM74.6094 71.9727V77.9297H73.5352H72.4609V72.1094C72.4609 68.9062 72.5195 66.2109 72.5977 66.1523C72.6562 66.0742 73.1445 66.0156 73.6719 66.0156H74.6094V71.9727Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M52.1875 73.9062L51.4648 74.5703L51.4062 76.6211C51.289 80.1172 51.8164 80.6641 55.2343 80.6641C57.6367 80.6641 58.1835 80.4297 58.7109 79.1797C59.082 78.3203 59.0625 75.5664 58.7109 74.707C58.2226 73.5547 57.4609 73.2422 55.0195 73.2422H52.9296L52.1875 73.9062ZM56.25 76.9531V77.9297H55.1757H54.1015V76.9531V75.9766H55.1757H56.25V76.9531Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M61.6406 73.6523C60.7617 74.3359 60.5469 75.0195 60.5469 76.9531C60.5469 78.8867 60.7617 79.5703 61.6406 80.2539C62.0898 80.6055 62.4219 80.6641 64.3555 80.6641C66.2891 80.6641 66.6211 80.6055 67.0703 80.2539C67.9492 79.5703 68.1641 78.8867 68.1641 76.9531C68.1641 75.0195 67.9492 74.3359 67.0703 73.6523C66.6211 73.3008 66.2891 73.2422 64.3555 73.2422C62.4219 73.2422 62.0898 73.3008 61.6406 73.6523ZM65.4297 76.9531V77.9297H64.3555H63.2812V76.9531V75.9766H64.3555H65.4297V76.9531Z"
                                            fill="#7F7F7F" />
                                    </svg><span class="ml-1 text hoverlist">Miscellaneous </span>

                                </a></div>
                            <div class=" text-black-50 hoverbg d-flex justify-content-start"> <a
                                    class="left_margin text-black-50 pb-2" href="{{ route('rent') }}"><svg
                                        class="hoverlist" width="20" height="20" viewBox="0 0 683 683"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_490_502)">
                                            <path
                                                d="M189.067 1.33313C173.867 3.86646 158.534 10.1331 145.334 19.0665C137.334 24.3998 57.8671 103.333 47.8671 115.6C38.6671 127.066 31.7337 140.667 27.7337 155.333L24.6671 166L24.2671 410C24.0004 582.533 24.2671 656 25.3337 660.8C27.0671 669.067 33.2004 676.8 40.5337 680.133C45.7337 682.533 55.3337 682.667 285.334 682.667H524.667L536 676.533C587.6 648.933 631.2 605.2 647.6 564.666C657.467 540.133 658.667 529.333 658.667 463.6C658.667 410.266 658.4 407.6 652.267 402.266C650.8 400.933 643.6 398.133 636.267 396C602.4 386.133 568.134 367.6 540.4 344L530.667 335.866V180.266C530.667 75.8665 530.134 23.0665 529.2 19.5998C527.467 13.0665 520.8 5.59979 514 2.53314C508.934 0.133118 500.8 -0.000183105 352 0.133118C265.867 0.266479 192.534 0.799805 189.067 1.33313ZM509.334 22.5331C510.267 24.2665 510.667 75.9998 510.667 180.533V335.866L500.4 344.8C472.4 368.666 436.934 387.2 398.4 397.866C393.2 399.333 389.867 401.333 387.334 404.133L383.867 408.4L384.267 473.2L384.8 538L388.267 549.333C400.134 587.466 425.067 620.133 465.734 650.8L481.467 662.667H265.2C65.7337 662.667 48.6671 662.533 46.4004 660.4C44.1337 658.4 44.0004 649.067 44.0004 418.133V178L47.2004 171.333C50.9337 163.466 56.0004 158.4 63.3338 155.2C67.7337 153.2 74.4004 152.667 104 152C138.934 151.333 139.467 151.2 146.667 147.733C156.667 142.8 166.134 133.2 171.2 122.667L175.334 114L176 77.9998L176.667 41.9998L180.4 35.7332C184.134 29.3331 190.134 23.8665 196 21.4665C198.134 20.6664 255.6 20.1331 353.6 20.1331C504.8 19.9998 508 19.9998 509.334 22.5331ZM158.4 37.5998C157.734 39.9998 156.667 57.9998 156.134 77.5998L155.334 113.066L151.334 118.8C149.067 122 144.267 126.4 140.8 128.667L134.267 132.667L98.8004 133.466C79.3338 133.866 61.8671 134.8 60.1338 135.333C57.2004 136.266 57.0671 136.266 58.6671 133.2C62.1338 126.533 156.134 33.3331 159.467 33.3331C159.6 33.3331 159.2 35.3331 158.4 37.5998ZM530.934 361.6C544.667 373.066 569.2 388.933 587.067 397.733C601.467 404.933 631.334 416 636.4 416C638.534 416 638.667 419.466 638.667 468.933C638.667 523.466 638 532.8 633.2 548C629.6 559.066 619.467 578.533 612 588.666C594 613.066 560 641.6 528.667 658.533L520.667 662.933L510.667 657.333C466.4 632.4 430.934 597.867 414.667 563.733C403.867 541.2 403.6 538.8 402.934 473.6C402.534 420.266 402.667 416 404.8 416C406 416 414.4 413.466 423.6 410.533C452.667 400.8 484.667 382.933 510 362.133C515.867 357.333 520.8 353.333 520.934 353.333C520.934 353.333 525.467 357.066 530.934 361.6Z"
                                                fill="#7F7F7F" />
                                            <path
                                                d="M110.134 174.8L106.667 177.466V222.666C106.667 267.466 106.667 267.866 109.6 270.666C113.334 274.133 117.334 274.133 121.867 270.533C125.334 267.866 125.334 267.6 125.334 250.266V232.666L144 252.266C154.4 263.066 163.867 272.266 165.334 272.666C169.067 273.866 175.867 269.866 176.8 265.866C178 261.066 176.667 258.933 164.4 245.466C158.267 238.933 153.334 233.333 153.334 232.933C153.334 232.666 155.734 232 158.534 231.466C161.467 231.066 166.4 228.666 169.467 226.4C184.934 214.533 185.467 192.4 170.8 179.733C163.2 173.333 157.067 172 133.6 172C115.467 172 113.334 172.266 110.134 174.8ZM156.667 192.8C159.067 193.733 162.667 200.133 162.667 203.333C162.667 204.533 160.934 207.333 158.8 209.466C154.934 213.333 154.667 213.333 140.134 213.333H125.334V202.666V192H139.867C147.867 192 155.467 192.4 156.667 192.8Z"
                                                fill="#7F7F7F" />
                                            <path
                                                d="M209.6 173.333C208 174 206 176.266 205.2 178.133C204.4 180.4 204 197.733 204.267 225.066L204.667 268.266L207.867 270.8C210.667 273.066 213.334 273.333 237.6 273.333C264 273.333 264.134 273.333 267.334 270C272.534 264.933 271.6 258.533 265.2 255.333C262.4 253.866 256.534 253.333 242.667 253.333H224V242.666V232H235.734C246.4 232 247.867 231.733 250.4 228.933C254.134 225.066 254.134 221.333 250.534 216.8C248 213.466 247.2 213.333 235.867 213.333H224V202.8V192.133L244.8 191.733C264.8 191.333 265.734 191.2 268.134 188.133C271.6 183.866 271.334 179.2 267.334 175.333C264.134 172 264 172 238.4 172.133C224.267 172.133 211.334 172.666 209.6 173.333Z"
                                                fill="#7F7F7F" />
                                            <path
                                                d="M342.534 174.533C339.467 177.066 339.334 177.866 338.667 201.866L338.001 226.533L325.334 204.4C318.401 192.266 311.601 180.933 310.267 179.2C307.067 175.066 299.867 174.8 296.001 178.666C293.467 181.2 293.334 183.066 293.334 224.533V267.866L296.801 270.533C298.801 272.133 301.334 273.333 302.667 273.333C304.001 273.333 306.534 272.133 308.534 270.533L312.001 267.866V244.933C312.001 229.066 312.401 222.533 313.334 223.466C314.134 224.266 320.667 235.066 327.867 247.466C341.467 270.933 344.801 274.4 351.067 272.8C358.267 271.066 358.667 268 358.667 222.8C358.667 179.066 358.267 176.133 352.401 173.466C348.001 171.466 346.134 171.6 342.534 174.533Z"
                                                fill="#7F7F7F" />
                                            <path
                                                d="M384.8 174.8C380 178.533 380 185.466 384.8 189.2C387.6 191.333 390.267 192 396.8 192H405.334L405.6 230.133L406 268.4L409.6 271.066C413.467 274 418.267 273.466 421.867 269.866C423.734 268.133 424 262.533 424 229.866V192H432C441.467 192 445.867 190.266 447.867 185.6C450 181.2 447.734 175.6 443.2 173.466C441.067 172.533 430.4 172 414.134 172C390.134 172 388.134 172.133 384.8 174.8Z"
                                                fill="#7F7F7F" />
                                            <path
                                                d="M112.667 336.666C108.667 340.533 108.401 345.2 111.867 349.466L114.401 352.666L276.401 353.066L438.267 353.333L441.867 350.533C446.667 346.8 446.667 339.866 441.867 336.133C438.267 333.333 438.134 333.333 277.067 333.333H115.867L112.667 336.666Z"
                                                fill="#7F7F7F" />
                                            <path
                                                d="M112.667 415.333C110.801 417.067 109.334 420.133 109.334 422C109.334 423.867 110.801 426.933 112.667 428.667L115.867 432H218.001H320.134L323.334 428.667C325.201 426.933 326.667 423.867 326.667 422C326.667 420.133 325.201 417.067 323.334 415.333L320.134 412H218.001H115.867L112.667 415.333Z"
                                                fill="#7F7F7F" />
                                            <path
                                                d="M112.667 494C110.801 495.733 109.334 498.8 109.334 500.667C109.334 502.533 110.801 505.6 112.667 507.333L115.867 510.667H165.334H214.801L218.001 507.333C219.867 505.6 221.334 502.533 221.334 500.667C221.334 498.8 219.867 495.733 218.001 494L214.801 490.667H165.334H115.867L112.667 494Z"
                                                fill="#7F7F7F" />
                                            <path
                                                d="M584.001 454.266C582.934 454.666 563.201 473.6 540.401 496.4L498.667 538L478.801 518.133C461.334 500.666 458.267 498.266 454.534 498.266C451.734 498.266 449.467 499.2 447.734 501.2C442.401 507.866 443.601 509.733 470.401 536.4C489.067 554.933 496.267 561.333 498.667 561.333C501.201 561.333 513.201 550.133 548.934 514.4C587.201 476.133 596.001 466.666 596.001 463.866C596.001 457.733 589.334 452.4 584.001 454.266Z"
                                                fill="#7F7F7F" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_490_502">
                                                <rect width="682.667" height="682.667" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg><span class="ml-1 text hoverlist">Rent
                                    </span>


                                </a></div>
                            <div class=" text-black-50 hoverbg d-flex justify-content-start"> <a
                                    class="left_margin text-black-50 pb-2" href="{{ route('electricity') }}"><svg
                                        class="hoverlist" width="20" height="20" viewBox="0 0 683 683"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_489_457)">
                                            <path
                                                d="M334 3.2C329.6 7.6 329.067 12.2667 329.6 38.6667L330 61.6L333.734 64.8C335.867 66.5333 339.2 68 341.334 68C343.467 68 346.8 66.5333 348.934 64.8L352.667 61.6L353.067 38.6667C353.334 26 353.2 13.6 352.667 11.0667C351.467 4.8 346.534 0 341.334 0C338.8 0 336 1.2 334 3.2Z"
                                                fill="#7F7F7F" />
                                            <path
                                                d="M205.2 36.6669C201.333 38.8002 198.267 45.4669 199.6 49.0669C201.733 55.3335 224.933 93.8669 227.6 95.6002C231.6 98.2669 239.2 96.8002 242 92.9335C245.733 87.6002 244.4 82.9335 233.067 62.8002C226.933 52.1335 220.533 41.7335 218.667 39.7335C214.533 35.2002 209.733 34.1335 205.2 36.6669Z"
                                                fill="#7F7F7F" />
                                            <path
                                                d="M464.8 38.9335C458.667 45.3335 438.667 81.3335 438.667 86.1335C438.667 88.2669 439.6 91.3335 440.667 92.9335C443.467 96.8002 451.067 98.2669 455.067 95.6002C457.734 93.8669 480.934 55.3335 483.2 48.9335C484.4 45.2002 480.534 37.4669 476.667 36.0002C471.2 33.8669 469.334 34.4002 464.8 38.9335Z"
                                                fill="#7F7F7F" />
                                            <path
                                                d="M326.667 91.4667C289.734 96.2667 265.467 105.067 237.2 124C225.334 132 199.2 158.533 190.667 171.2C178 190.133 167.867 214.667 162.4 239.333C161.334 244.533 160.667 256.533 160.667 273.333C160.8 296.933 161.067 300.667 164.267 313.333C174 351.867 187.734 376 216.4 404.533C225.867 413.867 234.534 423.867 235.734 426.533C237.2 430 238.134 437.6 238.667 453.333C239.334 472.267 239.867 476.133 242.4 480.8C245.734 487.333 252 493.867 257.467 496.8C260.934 498.533 261.334 499.467 261.334 505.333C261.334 514.8 263.734 524.533 267.334 530L270.534 534.667L267.334 539.333C263.467 545.067 260.934 556 262.134 562.533C262.534 565.2 264.667 570.4 266.667 574C270.267 580.667 270.4 580.8 267.867 583.867C266.4 585.6 264.4 590.267 263.2 594.4C258 612.4 269.334 631.467 288 636C299.334 638.667 306.667 634.8 306.667 626C306.667 620.533 301.867 614.667 297.334 614.667C292.534 614.667 287.067 610.933 285.6 606.667C283.867 602 284.534 599.2 288.4 595.067C291.067 592.133 291.867 592 316 592C341.867 592 348.4 590.933 350.667 586.667C353.067 582.133 352.267 575.333 348.934 572.267C346 569.467 344.667 569.333 321.067 569.333C306.134 569.333 294.667 568.8 292 567.867C286.8 566 283.334 559.2 285.2 554.4C287.867 547.2 289.334 546.933 318.267 546.4C344.534 546 345.2 546 348.534 542.8C353.067 538.533 353.334 531.067 349.067 526.933C346.134 524.4 344.267 524.133 319.334 523.733C289.6 523.333 287.6 522.8 285.2 514.667C284.4 512.133 284 507.867 284.267 505.333L284.667 500.667L315.334 500.267C344.534 500 346 499.867 348.934 497.067C353.334 492.933 353.067 485.467 348.534 481.2L345.067 478L306.667 477.6L268.267 477.2L265.2 473.867C262.134 470.667 262 469.333 261.334 448.267C260.534 426.8 260.4 425.733 256.267 416.933C252.8 409.467 249.2 404.933 234.934 390.933C215.867 372.133 208.134 362 199.467 344.4C186.934 319.067 182 295.867 183.067 266.667C184.134 236.8 191.067 214.133 206.934 188.267C215.734 173.867 237.867 151.2 252.534 141.333C271.334 128.8 294.667 119.6 316.4 116C328.8 114 356.8 114.4 369.2 116.667C419.067 126.133 461.334 158.4 484.4 204.667C501.867 239.733 504.934 284.267 492.534 322.267C484 348.667 472.267 366.533 448.4 390.267C433.6 404.933 429.867 409.333 426.4 416.933C422.267 425.733 422.134 426.8 421.334 448.267C420.667 469.467 420.534 470.667 417.467 473.867C414.267 477.333 413.867 477.333 395.067 477.333C373.334 477.333 367.6 478.8 365.2 484.933C363.734 489.067 364.267 492.667 367.2 496.667C368.8 498.933 371.067 499.467 383.6 500L398 500.667L398.4 505.333C399.067 511.733 396.667 518.933 393.2 521.2C391.6 522.133 385.467 523.333 379.6 523.867C368.534 524.8 366.134 526.267 364.534 532.667C362.4 541.067 370.267 546.667 383.734 546.667C390.134 546.667 392 547.2 394.267 549.733C398.267 554.133 398.8 556.933 396.8 561.867C394.534 567.2 389.467 569.333 378.667 569.333C372.934 569.333 370.534 570 368.267 572C364.4 575.6 363.334 580.4 365.6 584.8C368 590.133 372.534 592 382.8 592C390.134 592 392 592.533 394.267 594.933C398.134 599.2 398.8 602 397.067 606.667C394.534 614 391.467 614.667 356.934 614.667H325.734L322.134 618.133C317.734 622.667 317.6 628 321.867 632.933L325.067 636.667L349.2 637.333L373.467 638L369.467 644.267C357.867 662.533 334.134 664.667 316.267 649.2C308 642 296 646 296 656C296 665.6 315.2 678.933 333.2 681.733C361.067 686 388.667 667.867 395.867 640.4C397.067 636.267 398.267 634.667 401.2 633.6C410.4 630.4 418.534 619.2 420.667 607.067C421.734 600.533 418.8 589.2 414.8 584.133C412.267 580.8 412.267 580.8 416 574.133C418 570.4 420.134 565.2 420.534 562.533C421.734 556 419.2 545.067 415.334 539.333L412.134 534.667L415.334 530C418.934 524.533 421.334 514.8 421.334 505.333C421.334 499.467 421.734 498.533 425.2 496.8C430.667 493.867 436.934 487.333 440.267 480.8C442.8 476.133 443.334 472.267 444 453.333C444.534 437.467 445.334 430 446.934 426.4C448.134 423.733 456.667 414 466.267 404.4C498.267 372.667 513.2 344.533 520.8 302C523.067 289.067 523.334 261.6 521.334 248C509.467 170.133 448.267 107.333 371.334 94.0001C358.8 91.8668 334.667 90.5334 326.667 91.4667Z"
                                                fill="#7F7F7F" />
                                            <path
                                                d="M109.734 132C103.467 134.533 101.867 144.8 107.067 149.733C112.667 155.333 150.134 176 154.534 176C163.734 176 168.534 165.067 162.4 158.133C158.667 154 120.934 132 116.134 131.333C114.267 130.933 111.334 131.333 109.734 132Z"
                                                fill="#7F7F7F" />
                                            <path
                                                d="M564 131.6C557.734 134.133 522.8 155.333 520.134 158.267C514.134 165.067 519.2 176 528.267 176C532.534 176 570.267 155.2 575.734 149.733C578.667 146.8 579.6 141.2 577.867 136.667C576.267 132.667 568.667 129.867 564 131.6Z"
                                                fill="#7F7F7F" />
                                            <path
                                                d="M267.733 231.2C258.4 235.067 252.667 239.733 247.2 247.867C241.467 256.4 239.467 263.067 239.467 274.267C239.6 291.6 249.733 306.667 266.533 314.4C272.933 317.333 276.267 318 290.267 318.4L306.533 318.933L306.933 383.333L307.333 447.733L310.533 451.2C314.533 455.467 320.933 455.733 325.867 451.867L329.333 449.2V383.867V318.667H341.333H353.333V383.867V449.2L356.8 451.867C361.733 455.733 368.133 455.467 372.133 451.2L375.333 447.733L375.733 383.333L376.133 318.933L392.4 318.4C406.4 318 409.733 317.333 416.133 314.4C426.533 309.6 433.867 302.533 438.933 292.4C442.4 285.333 443.067 282.267 443.2 274.267C443.2 263.067 441.2 256.4 435.467 247.733C420.4 225.2 388.4 221.2 368.133 239.467C364.267 242.933 359.867 248.667 357.733 253.067C354.4 259.867 353.867 262.4 353.333 278L352.667 295.333H341.333H330L329.333 278C328.8 262.4 328.267 259.867 324.933 253.067C314.667 232.133 289.2 222.4 267.733 231.2ZM296.933 254.133C304.933 260.133 306 262.933 306.4 280.133L306.933 296H293.733C283.867 296 279.333 295.333 275.2 293.467C258.267 285.733 257.467 263.467 273.867 253.2C279.333 249.733 291.733 250.267 296.933 254.133ZM408.8 253.2C425.2 263.2 424.4 285.733 407.467 293.467C403.333 295.333 398.8 296 389.067 296H376V282.133C376 267.333 377.067 262.533 381.733 257.467C388.133 250.533 401.067 248.533 408.8 253.2Z"
                                                fill="#7F7F7F" />
                                            <path
                                                d="M75.2002 263.2C69.8668 265.6 67.3335 271.467 69.3335 276.667C72.0002 283.6 73.2002 283.867 102.4 284C129.334 284 129.467 284 132.667 280.667C138.534 274.933 136.534 265.733 128.8 262.667C123.334 260.667 80.2668 261.067 75.2002 263.2Z"
                                                fill="#7F7F7F" />
                                            <path
                                                d="M553.467 262.8C546.134 265.733 544.267 275.067 550 280.667C553.2 284 553.334 284 580.267 284C609.734 283.867 610.8 283.6 613.467 276.267C615.334 270.8 612.267 264.8 606.534 262.8C601.334 260.933 558 260.933 553.467 262.8Z"
                                                fill="#7F7F7F" />
                                            <path
                                                d="M148.667 371.467C135.734 378.267 111.334 392.8 108 395.6C100 402.267 104.4 414.667 114.534 414.667C119.334 414.667 158.8 392.8 163.067 387.733C166.267 384 165.867 378.133 162.4 374.133C158.4 369.733 153.6 368.8 148.667 371.467Z"
                                                fill="#7F7F7F" />
                                            <path
                                                d="M524.533 370.667C517.867 373.334 515.2 382.534 519.733 387.734C520.933 389.334 531.467 396 542.933 402.667C565.867 415.867 570.533 417.2 575.733 411.6C579.733 407.334 579.6 400 575.6 396.267C571.733 392.667 534.133 370.934 530.267 370C528.667 369.734 526 370 524.533 370.667Z"
                                                fill="#7F7F7F" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_489_457">
                                                <rect width="682.667" height="682.667" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg><span class="ml-1 text hoverlist">Electricity
                                    </span>


                                </a></div>
                            {{-- <div class=" text-black-50 hoverbg d-flex justify-content-start"> <a
                                    class="left_margin text-black-50 pb-2" href="{{ route('pettyCash') }}"><svg
                                        class="hoverlist" width="20" height="20" viewBox="0 0 100 100"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M53.3008 16.2305C50.0391 18.1836 44.6875 21.3086 41.4062 23.1836C18.0664 36.6016 2.63672 45.5469 2.28516 45.8789C1.97266 46.1914 1.95312 46.9531 1.95312 57.5195C1.95312 66.3867 1.99219 68.8867 2.1875 69.0625C2.71484 69.5703 33.5937 87.3047 33.9453 87.3047C34.3359 87.3047 49.9219 78.4961 51.1328 77.5977C51.8359 77.0703 51.9531 76.4062 51.4062 75.918C51.2109 75.7227 50.8594 75.5859 50.625 75.5859C50.3906 75.5859 46.543 77.6758 42.0703 80.2539L33.9453 84.9023L30.0195 82.6172C27.8516 81.3672 21.4648 77.6758 15.8203 74.4141C10.1758 71.1719 5.23437 68.3008 4.84375 68.0469L4.10156 67.5781V65.4297C4.10156 64.2383 4.16016 63.2812 4.21875 63.2812C4.27734 63.2812 10.957 67.1094 19.0625 71.7969C30.1562 78.2031 33.8672 80.2734 34.1797 80.1758C34.6875 80.0195 50.7617 70.7422 51.2305 70.3516C52.1484 69.5508 51.1523 68.0469 50.0391 68.5352C49.7461 68.6719 46.0156 70.8008 41.7578 73.2617C34.707 77.3438 33.9453 77.7344 33.5547 77.5195C33.3008 77.3828 27.793 74.2188 21.2891 70.4492C14.7852 66.6992 8.26172 62.9297 6.77734 62.0703L4.10156 60.5078V58.2617V56.0156L4.74609 56.3867C17.3828 63.7891 33.6523 73.0469 34.0039 73.0273C34.2578 73.0273 38.2617 70.8203 42.8711 68.1055C50.8984 63.3984 51.2695 63.1641 51.3281 62.5781C51.4062 61.875 50.957 61.3281 50.332 61.3281C50.0977 61.3281 46.3086 63.4375 41.9141 65.9961L33.9258 70.6445L30.7812 68.8281C29.0625 67.832 22.3437 63.9453 15.8789 60.2148L4.10156 53.418V51.0156V48.5938L4.74609 48.9844C5.07812 49.1992 11.6211 52.9883 19.2383 57.4023C31.2305 64.3359 33.2227 65.4297 33.9062 65.4297C34.5117 65.4297 35.1367 65.1758 36.6406 64.2969C37.6953 63.6523 42.9687 60.6055 48.3398 57.4805C57.2461 52.3242 58.1641 51.8164 58.8281 51.9141C59.4727 51.9922 59.5898 51.9336 59.9219 51.3672C60.2148 50.8984 61.4062 50.0977 64.5703 48.2422L68.8476 45.7617L68.9453 48.0859C69.0234 50.0977 69.1016 50.4688 69.4141 50.7031C69.9609 51.0938 70.5078 51.0352 70.9961 50.5859C71.3867 50.2344 71.4453 50.2148 71.6797 50.4883C71.8164 50.6445 72.1289 50.7812 72.3828 50.7812C72.6367 50.7812 76.4844 48.6719 80.957 46.0938C85.4101 43.5156 89.1992 41.3477 89.3555 41.2695C89.6289 41.1719 89.6484 41.4648 89.6094 43.3789L89.5508 45.5859L84.6094 48.4375C81.875 50 79.5703 51.4453 79.4531 51.6406C79.0039 52.4609 79.9219 53.5156 80.8008 53.1836C80.9961 53.1055 83.0273 51.9727 85.332 50.6445C87.6172 49.3164 89.5312 48.2422 89.5703 48.2422C89.6094 48.2422 89.6484 49.2383 89.6484 50.4492V52.6758L86.6797 54.4141C84.375 55.7617 83.6523 56.2695 83.5156 56.6797C83.2812 57.3438 83.7891 58.0078 84.5312 58.0078C85.0195 58.0078 90.8008 54.7656 91.4648 54.1211C91.7773 53.8086 91.8164 53.0469 91.8359 42.5195C91.8555 31.9336 91.8359 31.2109 91.5039 30.8594C91.3086 30.6445 91.0351 30.4688 90.8789 30.4688C90.7226 30.4688 89.1211 29.6289 87.3437 28.5742C72.5781 20.0391 60.7812 13.1836 60.4492 12.9688C60.2344 12.8125 59.8828 12.6953 59.668 12.6953C59.4336 12.6953 56.582 14.2773 53.3008 16.2305ZM73.6719 23.3008C81.3281 27.7344 87.7539 31.4648 87.9492 31.582C88.2617 31.7383 86.8359 32.6367 79.2969 37.0117L70.2539 42.2656L69.2578 41.7188C68.0469 41.0547 67.4805 40.6641 67.5976 40.5273C67.6562 40.4883 69.8828 39.1602 72.5391 37.5977C75.2148 36.0156 77.5976 34.6094 77.8516 34.4336C78.4961 34.0234 78.4961 33.0273 77.832 32.4609C77.207 31.9141 77.207 31.4258 77.832 30.7031C78.3984 30.0195 78.457 29.2773 77.9883 28.8672C77.793 28.6914 74.043 26.4844 69.6289 23.9258L61.6211 19.2969L60.7422 19.4922C60.1172 19.6289 59.6289 19.6289 59.0625 19.4922L58.2617 19.2773L51.3477 23.3008L44.4336 27.3047L43.1641 26.6211C42.4609 26.2305 41.8359 25.8789 41.7578 25.8008C41.6797 25.7422 43.1445 24.8242 44.9805 23.7695C46.8359 22.7148 50.8008 20.3711 53.8086 18.5547C56.8164 16.7578 59.375 15.2539 59.5117 15.2539C59.6484 15.2344 66.0156 18.8672 73.6719 23.3008ZM68.3789 25.8398L75.2539 29.8438L75.2734 31.582L75.293 33.3398L70.2539 36.2891L65.1953 39.2578L55.957 33.9453L46.6992 28.6133L48.3008 27.6953C49.1797 27.1875 51.8359 25.6445 54.1992 24.2773L58.4961 21.7773L60 21.8164L61.5039 21.8555L68.3789 25.8398ZM52.2852 34.5703C59.2383 38.5742 65.5859 42.2461 66.3672 42.7344L67.8125 43.6133L67.0508 44.082C64.7461 45.5078 59.2187 48.6328 59.0234 48.6328C58.7891 48.6328 57.8906 48.125 41.9922 38.9648C37.1094 36.1523 32.5 33.5156 31.7773 33.1055C31.0547 32.7148 30.4687 32.3047 30.5078 32.207C30.625 31.8945 38.9648 27.168 39.2969 27.2461C39.4922 27.2656 45.332 30.5664 52.2852 34.5703ZM30.8008 35.2734C30.7812 35.293 27.3828 37.2461 23.2422 39.6289C19.1016 42.0117 15.5664 44.1406 15.3711 44.3555C14.9219 44.9023 14.9414 45.1758 15.5273 45.8594C16.1523 46.6016 16.1523 47.0117 15.4883 47.6953C14.4531 48.7695 14.4727 48.7891 23.7305 54.1602C31.5625 58.6914 32.168 59.0039 32.8125 58.8867C33.6719 58.7109 34.1016 58.7109 34.9609 58.8867C35.6055 59.0039 36.2695 58.6523 44.707 53.7305L53.7695 48.457L54.6875 48.9844C55.1758 49.2773 55.8008 49.6484 56.0352 49.8047C56.4844 50.0977 56.1328 50.3125 45.332 56.6016C39.1797 60.1758 34.082 63.1055 33.9844 63.1445C33.8086 63.1836 5.46875 46.8359 5.46875 46.6797C5.46875 46.6211 10.5078 43.6719 16.6602 40.0977L27.832 33.6133L29.3359 34.4336C30.1562 34.8828 30.8203 35.2539 30.8008 35.2734ZM89.6484 36.1133V38.418L80.918 43.457C76.0937 46.2305 71.9726 48.6914 71.7187 48.9062L71.2695 49.2969L71.3281 46.7773L71.3867 44.2383L80.3711 39.0234C85.3125 36.1523 89.4141 33.7891 89.5117 33.7891C89.5898 33.7891 89.6484 34.8242 89.6484 36.1133ZM42.168 41.8164C47.0703 44.6289 51.1523 46.9922 51.2305 47.0703C51.3281 47.1484 47.7539 49.3164 43.3203 51.875L35.2539 56.543L33.7891 56.5234L32.3242 56.5039L25.1562 52.3438C18.0469 48.2227 17.9883 48.1836 18.1836 47.6758C18.3008 47.4023 18.3594 46.7188 18.3203 46.1523L18.2617 45.1367L25.4883 40.9375C29.4727 38.6523 32.832 36.7578 32.9883 36.7383C33.1445 36.7188 37.2852 39.0234 42.168 41.8164Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M59.4921 26.1914C57.0703 26.543 55.3124 28.2031 55.5273 29.9414C56.0156 33.7109 64.0624 34.375 65.8007 30.7812C66.289 29.8047 66.3085 29.5117 65.9374 28.6328C65.1757 26.7969 62.4804 25.7812 59.4921 26.1914ZM63.1445 28.8672C63.9257 29.3164 63.9453 29.8047 63.2226 30.3516C62.4609 30.918 59.3554 30.957 58.5351 30.4102C57.4804 29.7266 57.6562 29.1406 59.1015 28.5937C60.0976 28.2227 62.3046 28.3594 63.1445 28.8672Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M31.1523 43.1641C28.7305 43.6719 27.3438 44.9219 27.3438 46.582C27.3438 48.6719 29.4531 50.0391 32.7148 50.0586C34.6094 50.0781 35.918 49.668 36.875 48.7695C38.6914 47.0703 38.0078 44.5313 35.4688 43.5742C34.2773 43.125 32.2266 42.9297 31.1523 43.1641ZM34.2383 45.5274C36.8945 46.25 35.3516 48.0274 32.2656 47.8125C30.9375 47.7149 29.8047 47.2656 29.6094 46.7383C29.4727 46.4063 30.2148 45.7422 30.957 45.5274C31.7773 45.2734 33.3594 45.2734 34.2383 45.5274Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M62.9883 53.3984C60.4492 53.8086 58.9844 54.2578 57.3047 55.0781C55.5273 55.957 54.4336 56.9922 54.1211 58.1445C53.8281 59.1797 53.8281 81.2695 54.1211 82.3047C54.7461 84.5703 58.4766 86.4844 63.5352 87.1094C66.1328 87.4414 71.8555 87.2656 73.8281 86.7969C75.6836 86.3477 76.4648 86.3477 78.5156 86.8164C79.9023 87.1484 80.8789 87.207 84.5703 87.207C88.3398 87.1875 89.2188 87.1289 90.7227 86.7773C95.1562 85.7422 97.6562 84.1016 98.0664 81.9922C98.3008 80.7227 98.2812 66.6602 98.0273 65.7422C97.5586 64.0234 95.0977 62.3437 91.8945 61.543C89.3555 60.918 87.6172 60.7227 84.4531 60.7227H81.4453V59.4336C81.4453 57.2656 80.3906 55.9961 77.5781 54.7461C75.2734 53.7305 72.7344 53.3008 68.457 53.2227C65.7812 53.1641 64.0625 53.2227 62.9883 53.3984ZM72.168 55.7617C75.7227 56.3086 78.5938 57.5 78.9844 58.6328C79.1406 59.082 79.1016 59.2578 78.6914 59.6875C77.793 60.6641 75.7812 61.4648 72.7539 62.0508C70.0977 62.5586 64.8047 62.5 62.1484 61.9336C59.0039 61.2695 56.6406 60.1367 56.3867 59.1797C56.0547 57.9297 59.1406 56.3867 63.1836 55.7422C65.3711 55.4102 69.8438 55.4102 72.168 55.7617ZM59.5703 63.7305C65.332 65.3711 73.3984 65.0391 77.8711 62.9883C78.457 62.7148 78.9844 62.5 79.0234 62.5C79.0625 62.5 79.1016 63.4961 79.1016 64.707C79.1016 66.875 79.082 66.9336 78.5742 67.4219C74.8828 70.8789 61.2305 70.918 56.9141 67.4805C56.3477 67.0312 56.3477 67.0117 56.2891 64.6484L56.2109 62.2852L57.3633 62.8516C57.9883 63.1641 58.9844 63.5547 59.5703 63.7305ZM89.1797 63.3789C92.6953 63.9844 95.5078 65.293 95.6641 66.3867C95.957 68.3594 88.8867 70.3711 83.0664 69.9805L81.4453 69.8633V66.4844V63.0859H84.4531C86.25 63.0859 88.1445 63.2031 89.1797 63.3789ZM56.7578 70.1172C57.0703 70.4297 59.5898 71.3086 61.3281 71.7187C63.7695 72.2852 69.4727 72.4219 72.4219 71.9922C74.8438 71.6211 76.7578 71.0937 78.1836 70.3906L79.1211 69.9023L79.0625 72.3047L79.0039 74.6875L78.1836 75.3125C76.0352 76.9531 70.4492 77.9102 65.3711 77.5195C60.957 77.1875 57.2461 75.918 56.4844 74.4727C56.2305 74.0039 56.1523 69.9219 56.4062 69.9219C56.4844 69.9219 56.6406 70 56.7578 70.1172ZM95.6641 72.4023L95.6055 74.6875L94.8047 75.293C93.0273 76.6602 88.9062 77.5391 84.3359 77.5391H81.4453V74.8828V72.207L82.9688 72.3437C86.25 72.6172 91.5039 71.8555 94.082 70.7422C94.8047 70.4102 95.4883 70.1562 95.5664 70.1367C95.6445 70.1172 95.6836 71.1523 95.6641 72.4023ZM58.1055 78.3008C60.6641 79.3945 63.0664 79.7656 67.5781 79.7852C70.1562 79.7852 72.1094 79.6875 73.0469 79.5117C74.7852 79.1992 77.3438 78.418 78.3789 77.9102L79.1016 77.5391V79.5898C79.1016 80.7422 79.0039 81.8359 78.9062 82.0312C78.4961 82.8125 76.1328 83.8672 73.4375 84.4922C71.6992 84.9023 65.957 85.0781 63.8477 84.7852C60.5859 84.3555 58.1641 83.5156 57.0117 82.4414L56.25 81.6992V79.5898C56.25 77.9883 56.3086 77.5195 56.5039 77.5977C56.6211 77.6562 57.3633 77.9687 58.1055 78.3008ZM95.2734 82.3633C94.668 83.0078 93.0273 83.75 90.8398 84.3359C89.082 84.8047 88.6719 84.8437 84.4336 84.8437C81.9531 84.8633 79.8438 84.7852 79.7656 84.707C79.668 84.6289 79.8438 84.3555 80.1172 84.1211C81.0547 83.3594 81.4453 82.4414 81.4453 81.0937V79.8828H84.3555C88.6719 79.8828 91.9141 79.3359 94.4336 78.1641L95.6055 77.6172L95.6641 79.7461C95.7031 81.7383 95.6836 81.9336 95.2734 82.3633Z"
                                            fill="#7F7F7F" />
                                    </svg><span class="ml-1 text hoverlist">Petty Cash </span>
                                </a></div> --}}
                            <div class=" text-black-50 hoverbg d-flex justify-content-start"> <a
                                    class="left_margin text-black-50 pb-2" href="{{ route('reimbursement') }}"><svg
                                        class="hoverlist" width="20" height="20" viewBox="0 0 683 683"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M245.733 41.733C218.533 69.0663 218.533 65.733 245.733 92.933C263.2 110.4 266.666 113.333 270.266 113.333C276.4 113.333 281.333 108.8 281.333 103.066C281.333 99.0663 280 96.933 271.733 88.533L262.266 78.6663H317.066C372.533 78.6663 377.333 78.2663 380.8 73.5997C383.6 69.8663 383.066 63.4663 379.6 60.2663C376.533 57.333 376.133 57.333 319.6 57.333C288.266 57.333 262.666 56.933 262.666 56.3997C262.666 55.9997 266.933 51.1997 272 45.8663C279.6 38.133 281.333 35.4663 281.333 32.133C281.333 26.3997 276.133 21.333 270.533 21.333C266.666 21.333 263.6 23.8663 245.733 41.733Z"
                                            fill="#7f7f7f" />
                                        <path
                                            d="M404.666 99.3333C398.8 105.067 400 109.6 410.666 120.533C415.866 125.867 420 130.667 420 131.067C420 131.6 394.266 132 362.933 132H305.733L302.933 135.067C299.6 138.533 299.2 144.8 301.866 148.267C305.333 152.933 310.133 153.333 365.6 153.333H420.4L410.933 163.2C402.8 171.467 401.333 173.733 401.333 177.6C401.333 183.6 405.866 188 412 188C416.133 188 418.666 185.867 436.933 167.6C463.866 140.667 463.733 143.6 439.066 118.4C415.733 94.8 411.466 92.4 404.666 99.3333Z"
                                            fill="#7f7f7f" />
                                        <path
                                            d="M43.9997 212.666C35.733 215.333 28.2663 221.866 24.533 229.866L21.333 236.666V377.2C21.333 480 21.733 519.066 22.933 522.8C25.0663 530.133 32.6663 538.533 40.533 542.133C46.933 545.2 48.7997 545.333 75.0663 545.333H102.666V561.6C102.666 576 103.066 578.8 105.866 584.666C109.2 591.866 115.333 598 122.266 600.933C125.333 602.133 133.333 602.666 150 602.666H173.333V618.933C173.333 633.333 173.733 636.133 176.533 642.133C180.133 650 188.533 657.6 195.866 659.733C203.466 662.133 631.466 662 639.2 659.733C646.933 657.466 657.6 646.4 659.733 638.666C661.066 634 661.333 600.266 661.066 491.333L660.666 350L657.333 344C652.933 336.266 644.533 330 636 328.133C632.266 327.333 620.533 326.666 610.133 326.666H590.933L590.4 309.6C589.866 290.133 588 284.933 578.666 277.066C570.666 270.133 566.133 269.333 536.266 269.333H509.6L509.066 251.6C508.533 231.6 506.666 226.133 497.733 218.8C487.333 210.133 500.8 210.666 264.8 210.8C84.7997 210.8 49.0663 211.2 43.9997 212.666ZM484.8 236.4L488 240.133V377.333C488 475.066 487.6 515.466 486.533 517.733C485.733 519.6 483.6 521.733 481.733 522.533C479.466 523.6 418.4 524 263.866 524H49.1997L45.9997 520.666L42.6663 517.466V379.066C42.6663 228.4 42.2663 236.4 49.8663 233.333C51.333 232.666 148 232.266 267.066 232.4L481.6 232.666L484.8 236.4ZM565.333 293.333C566.8 294.8 568.266 297.333 568.666 298.933C569.066 300.666 569.2 363.733 569.066 439.066L568.666 576.266L565.466 578.8C562.4 581.333 557.066 581.333 346.266 581.333H130.133L127.066 578.4C124.266 575.733 124 574.533 124 560.4V545.333L305.066 545.066L486 544.666L491.333 541.733C497.6 538.4 502.666 533.2 506.133 526.666C508.533 522.266 508.666 516.266 509.066 406.266L509.333 290.666H536C560.8 290.666 562.8 290.8 565.333 293.333ZM636.8 352.4L640 356.133V494.8V633.466L636.666 636.666L633.466 640H417.333H201.2L198 636.666C194.8 633.6 194.666 632.666 194.666 618V602.666H380.4H566.133L573.066 599.2C580.8 595.333 586.8 588 589.2 579.333C590.266 575.6 590.666 539.333 590.666 460.933V347.866L612.133 348.266L633.6 348.666L636.8 352.4Z"
                                            fill="#7f7f7f" />
                                        <path
                                            d="M105.333 254.266C101.067 255.866 98.8 259.199 97.8667 265.199C96 277.866 88.4 285.999 77.0667 287.466C72.5333 288.133 69.0667 289.466 67.0667 291.466L64 294.533V377.733C64 459.599 64 461.066 66.8 464.399C68.8 467.066 71.2 468.133 76.1333 468.799C88.1333 470.399 96.2667 478.533 97.8667 490.533C98.5333 495.466 99.6 497.866 102.267 499.866C105.733 502.666 106.4 502.666 265.333 502.666C424.267 502.666 424.933 502.666 428.4 499.866C431.067 497.866 432.133 495.466 432.8 490.533C434.4 478.533 442.533 470.399 454.533 468.799C459.467 468.133 461.867 467.066 463.867 464.399C466.667 461.066 466.667 459.599 466.667 377.733V294.533L463.6 291.466C461.733 289.599 458.133 288.133 454 287.599C442.4 285.999 434.667 278.133 432.667 265.733C432.133 262.533 430.667 258.666 429.333 257.066L426.933 253.999L267.067 253.733C179.2 253.599 106.4 253.866 105.333 254.266ZM415.067 281.866C420.533 293.733 429.6 302.266 441.733 306.533L445.333 307.999V378.266V448.666L438.4 451.199C429.2 454.399 418.4 465.199 415.2 474.399L412.667 481.333H265.333H118L115.6 474.666C112.4 465.599 101.067 454.266 92 451.066L85.3333 448.666V378.399V308.133L93.3333 304.533C102.8 300.266 110.933 292.133 115.6 281.866L118.8 274.666H265.333H411.867L415.067 281.866Z"
                                            fill="#7f7f7f" />
                                        <path
                                            d="M249.733 327.2C235.333 331.867 221.199 344.933 215.866 358.4C213.333 364.4 212.799 368.667 212.666 378.667C212.666 390.4 213.066 392.133 217.066 400.267C225.066 416.667 237.733 426.533 254.799 430.133C284.533 436.267 312.399 416.8 317.733 386.267C321.599 363.467 308.666 339.6 287.066 329.6C277.733 325.333 259.066 324.133 249.733 327.2ZM282.133 351.467C286.133 353.867 290.133 357.867 292.666 361.867C296.133 367.6 296.666 369.733 296.666 377.867C296.666 385.467 295.999 388.533 293.333 393.333C285.999 406.267 270.666 412.8 256.933 408.8C228.799 400.533 225.066 363.2 250.933 350C260.799 345.067 272.799 345.6 282.133 351.467Z"
                                            fill="#7f7f7f" />
                                    </svg><span class="ml-1 text hoverlist">Reimburse
                                    </span>
                                </a></div>
                        </ul>
                    </li>
                    <li class="removable sidebar-h pettycash ">
                        <a class=" text-black-50 d-flex flex-column align-items-center triangle-container"
                            href="#" aria-expanded="false">
                            <div class="mb-2 ">

                                <svg
                                class="hoverlist" width="40" height="40" viewBox="0 0 100 100"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M53.3008 16.2305C50.0391 18.1836 44.6875 21.3086 41.4062 23.1836C18.0664 36.6016 2.63672 45.5469 2.28516 45.8789C1.97266 46.1914 1.95312 46.9531 1.95312 57.5195C1.95312 66.3867 1.99219 68.8867 2.1875 69.0625C2.71484 69.5703 33.5937 87.3047 33.9453 87.3047C34.3359 87.3047 49.9219 78.4961 51.1328 77.5977C51.8359 77.0703 51.9531 76.4062 51.4062 75.918C51.2109 75.7227 50.8594 75.5859 50.625 75.5859C50.3906 75.5859 46.543 77.6758 42.0703 80.2539L33.9453 84.9023L30.0195 82.6172C27.8516 81.3672 21.4648 77.6758 15.8203 74.4141C10.1758 71.1719 5.23437 68.3008 4.84375 68.0469L4.10156 67.5781V65.4297C4.10156 64.2383 4.16016 63.2812 4.21875 63.2812C4.27734 63.2812 10.957 67.1094 19.0625 71.7969C30.1562 78.2031 33.8672 80.2734 34.1797 80.1758C34.6875 80.0195 50.7617 70.7422 51.2305 70.3516C52.1484 69.5508 51.1523 68.0469 50.0391 68.5352C49.7461 68.6719 46.0156 70.8008 41.7578 73.2617C34.707 77.3438 33.9453 77.7344 33.5547 77.5195C33.3008 77.3828 27.793 74.2188 21.2891 70.4492C14.7852 66.6992 8.26172 62.9297 6.77734 62.0703L4.10156 60.5078V58.2617V56.0156L4.74609 56.3867C17.3828 63.7891 33.6523 73.0469 34.0039 73.0273C34.2578 73.0273 38.2617 70.8203 42.8711 68.1055C50.8984 63.3984 51.2695 63.1641 51.3281 62.5781C51.4062 61.875 50.957 61.3281 50.332 61.3281C50.0977 61.3281 46.3086 63.4375 41.9141 65.9961L33.9258 70.6445L30.7812 68.8281C29.0625 67.832 22.3437 63.9453 15.8789 60.2148L4.10156 53.418V51.0156V48.5938L4.74609 48.9844C5.07812 49.1992 11.6211 52.9883 19.2383 57.4023C31.2305 64.3359 33.2227 65.4297 33.9062 65.4297C34.5117 65.4297 35.1367 65.1758 36.6406 64.2969C37.6953 63.6523 42.9687 60.6055 48.3398 57.4805C57.2461 52.3242 58.1641 51.8164 58.8281 51.9141C59.4727 51.9922 59.5898 51.9336 59.9219 51.3672C60.2148 50.8984 61.4062 50.0977 64.5703 48.2422L68.8476 45.7617L68.9453 48.0859C69.0234 50.0977 69.1016 50.4688 69.4141 50.7031C69.9609 51.0938 70.5078 51.0352 70.9961 50.5859C71.3867 50.2344 71.4453 50.2148 71.6797 50.4883C71.8164 50.6445 72.1289 50.7812 72.3828 50.7812C72.6367 50.7812 76.4844 48.6719 80.957 46.0938C85.4101 43.5156 89.1992 41.3477 89.3555 41.2695C89.6289 41.1719 89.6484 41.4648 89.6094 43.3789L89.5508 45.5859L84.6094 48.4375C81.875 50 79.5703 51.4453 79.4531 51.6406C79.0039 52.4609 79.9219 53.5156 80.8008 53.1836C80.9961 53.1055 83.0273 51.9727 85.332 50.6445C87.6172 49.3164 89.5312 48.2422 89.5703 48.2422C89.6094 48.2422 89.6484 49.2383 89.6484 50.4492V52.6758L86.6797 54.4141C84.375 55.7617 83.6523 56.2695 83.5156 56.6797C83.2812 57.3438 83.7891 58.0078 84.5312 58.0078C85.0195 58.0078 90.8008 54.7656 91.4648 54.1211C91.7773 53.8086 91.8164 53.0469 91.8359 42.5195C91.8555 31.9336 91.8359 31.2109 91.5039 30.8594C91.3086 30.6445 91.0351 30.4688 90.8789 30.4688C90.7226 30.4688 89.1211 29.6289 87.3437 28.5742C72.5781 20.0391 60.7812 13.1836 60.4492 12.9688C60.2344 12.8125 59.8828 12.6953 59.668 12.6953C59.4336 12.6953 56.582 14.2773 53.3008 16.2305ZM73.6719 23.3008C81.3281 27.7344 87.7539 31.4648 87.9492 31.582C88.2617 31.7383 86.8359 32.6367 79.2969 37.0117L70.2539 42.2656L69.2578 41.7188C68.0469 41.0547 67.4805 40.6641 67.5976 40.5273C67.6562 40.4883 69.8828 39.1602 72.5391 37.5977C75.2148 36.0156 77.5976 34.6094 77.8516 34.4336C78.4961 34.0234 78.4961 33.0273 77.832 32.4609C77.207 31.9141 77.207 31.4258 77.832 30.7031C78.3984 30.0195 78.457 29.2773 77.9883 28.8672C77.793 28.6914 74.043 26.4844 69.6289 23.9258L61.6211 19.2969L60.7422 19.4922C60.1172 19.6289 59.6289 19.6289 59.0625 19.4922L58.2617 19.2773L51.3477 23.3008L44.4336 27.3047L43.1641 26.6211C42.4609 26.2305 41.8359 25.8789 41.7578 25.8008C41.6797 25.7422 43.1445 24.8242 44.9805 23.7695C46.8359 22.7148 50.8008 20.3711 53.8086 18.5547C56.8164 16.7578 59.375 15.2539 59.5117 15.2539C59.6484 15.2344 66.0156 18.8672 73.6719 23.3008ZM68.3789 25.8398L75.2539 29.8438L75.2734 31.582L75.293 33.3398L70.2539 36.2891L65.1953 39.2578L55.957 33.9453L46.6992 28.6133L48.3008 27.6953C49.1797 27.1875 51.8359 25.6445 54.1992 24.2773L58.4961 21.7773L60 21.8164L61.5039 21.8555L68.3789 25.8398ZM52.2852 34.5703C59.2383 38.5742 65.5859 42.2461 66.3672 42.7344L67.8125 43.6133L67.0508 44.082C64.7461 45.5078 59.2187 48.6328 59.0234 48.6328C58.7891 48.6328 57.8906 48.125 41.9922 38.9648C37.1094 36.1523 32.5 33.5156 31.7773 33.1055C31.0547 32.7148 30.4687 32.3047 30.5078 32.207C30.625 31.8945 38.9648 27.168 39.2969 27.2461C39.4922 27.2656 45.332 30.5664 52.2852 34.5703ZM30.8008 35.2734C30.7812 35.293 27.3828 37.2461 23.2422 39.6289C19.1016 42.0117 15.5664 44.1406 15.3711 44.3555C14.9219 44.9023 14.9414 45.1758 15.5273 45.8594C16.1523 46.6016 16.1523 47.0117 15.4883 47.6953C14.4531 48.7695 14.4727 48.7891 23.7305 54.1602C31.5625 58.6914 32.168 59.0039 32.8125 58.8867C33.6719 58.7109 34.1016 58.7109 34.9609 58.8867C35.6055 59.0039 36.2695 58.6523 44.707 53.7305L53.7695 48.457L54.6875 48.9844C55.1758 49.2773 55.8008 49.6484 56.0352 49.8047C56.4844 50.0977 56.1328 50.3125 45.332 56.6016C39.1797 60.1758 34.082 63.1055 33.9844 63.1445C33.8086 63.1836 5.46875 46.8359 5.46875 46.6797C5.46875 46.6211 10.5078 43.6719 16.6602 40.0977L27.832 33.6133L29.3359 34.4336C30.1562 34.8828 30.8203 35.2539 30.8008 35.2734ZM89.6484 36.1133V38.418L80.918 43.457C76.0937 46.2305 71.9726 48.6914 71.7187 48.9062L71.2695 49.2969L71.3281 46.7773L71.3867 44.2383L80.3711 39.0234C85.3125 36.1523 89.4141 33.7891 89.5117 33.7891C89.5898 33.7891 89.6484 34.8242 89.6484 36.1133ZM42.168 41.8164C47.0703 44.6289 51.1523 46.9922 51.2305 47.0703C51.3281 47.1484 47.7539 49.3164 43.3203 51.875L35.2539 56.543L33.7891 56.5234L32.3242 56.5039L25.1562 52.3438C18.0469 48.2227 17.9883 48.1836 18.1836 47.6758C18.3008 47.4023 18.3594 46.7188 18.3203 46.1523L18.2617 45.1367L25.4883 40.9375C29.4727 38.6523 32.832 36.7578 32.9883 36.7383C33.1445 36.7188 37.2852 39.0234 42.168 41.8164Z"
                                    fill="#7F7F7F" />
                                <path
                                    d="M59.4921 26.1914C57.0703 26.543 55.3124 28.2031 55.5273 29.9414C56.0156 33.7109 64.0624 34.375 65.8007 30.7812C66.289 29.8047 66.3085 29.5117 65.9374 28.6328C65.1757 26.7969 62.4804 25.7812 59.4921 26.1914ZM63.1445 28.8672C63.9257 29.3164 63.9453 29.8047 63.2226 30.3516C62.4609 30.918 59.3554 30.957 58.5351 30.4102C57.4804 29.7266 57.6562 29.1406 59.1015 28.5937C60.0976 28.2227 62.3046 28.3594 63.1445 28.8672Z"
                                    fill="#7F7F7F" />
                                <path
                                    d="M31.1523 43.1641C28.7305 43.6719 27.3438 44.9219 27.3438 46.582C27.3438 48.6719 29.4531 50.0391 32.7148 50.0586C34.6094 50.0781 35.918 49.668 36.875 48.7695C38.6914 47.0703 38.0078 44.5313 35.4688 43.5742C34.2773 43.125 32.2266 42.9297 31.1523 43.1641ZM34.2383 45.5274C36.8945 46.25 35.3516 48.0274 32.2656 47.8125C30.9375 47.7149 29.8047 47.2656 29.6094 46.7383C29.4727 46.4063 30.2148 45.7422 30.957 45.5274C31.7773 45.2734 33.3594 45.2734 34.2383 45.5274Z"
                                    fill="#7F7F7F" />
                                <path
                                    d="M62.9883 53.3984C60.4492 53.8086 58.9844 54.2578 57.3047 55.0781C55.5273 55.957 54.4336 56.9922 54.1211 58.1445C53.8281 59.1797 53.8281 81.2695 54.1211 82.3047C54.7461 84.5703 58.4766 86.4844 63.5352 87.1094C66.1328 87.4414 71.8555 87.2656 73.8281 86.7969C75.6836 86.3477 76.4648 86.3477 78.5156 86.8164C79.9023 87.1484 80.8789 87.207 84.5703 87.207C88.3398 87.1875 89.2188 87.1289 90.7227 86.7773C95.1562 85.7422 97.6562 84.1016 98.0664 81.9922C98.3008 80.7227 98.2812 66.6602 98.0273 65.7422C97.5586 64.0234 95.0977 62.3437 91.8945 61.543C89.3555 60.918 87.6172 60.7227 84.4531 60.7227H81.4453V59.4336C81.4453 57.2656 80.3906 55.9961 77.5781 54.7461C75.2734 53.7305 72.7344 53.3008 68.457 53.2227C65.7812 53.1641 64.0625 53.2227 62.9883 53.3984ZM72.168 55.7617C75.7227 56.3086 78.5938 57.5 78.9844 58.6328C79.1406 59.082 79.1016 59.2578 78.6914 59.6875C77.793 60.6641 75.7812 61.4648 72.7539 62.0508C70.0977 62.5586 64.8047 62.5 62.1484 61.9336C59.0039 61.2695 56.6406 60.1367 56.3867 59.1797C56.0547 57.9297 59.1406 56.3867 63.1836 55.7422C65.3711 55.4102 69.8438 55.4102 72.168 55.7617ZM59.5703 63.7305C65.332 65.3711 73.3984 65.0391 77.8711 62.9883C78.457 62.7148 78.9844 62.5 79.0234 62.5C79.0625 62.5 79.1016 63.4961 79.1016 64.707C79.1016 66.875 79.082 66.9336 78.5742 67.4219C74.8828 70.8789 61.2305 70.918 56.9141 67.4805C56.3477 67.0312 56.3477 67.0117 56.2891 64.6484L56.2109 62.2852L57.3633 62.8516C57.9883 63.1641 58.9844 63.5547 59.5703 63.7305ZM89.1797 63.3789C92.6953 63.9844 95.5078 65.293 95.6641 66.3867C95.957 68.3594 88.8867 70.3711 83.0664 69.9805L81.4453 69.8633V66.4844V63.0859H84.4531C86.25 63.0859 88.1445 63.2031 89.1797 63.3789ZM56.7578 70.1172C57.0703 70.4297 59.5898 71.3086 61.3281 71.7187C63.7695 72.2852 69.4727 72.4219 72.4219 71.9922C74.8438 71.6211 76.7578 71.0937 78.1836 70.3906L79.1211 69.9023L79.0625 72.3047L79.0039 74.6875L78.1836 75.3125C76.0352 76.9531 70.4492 77.9102 65.3711 77.5195C60.957 77.1875 57.2461 75.918 56.4844 74.4727C56.2305 74.0039 56.1523 69.9219 56.4062 69.9219C56.4844 69.9219 56.6406 70 56.7578 70.1172ZM95.6641 72.4023L95.6055 74.6875L94.8047 75.293C93.0273 76.6602 88.9062 77.5391 84.3359 77.5391H81.4453V74.8828V72.207L82.9688 72.3437C86.25 72.6172 91.5039 71.8555 94.082 70.7422C94.8047 70.4102 95.4883 70.1562 95.5664 70.1367C95.6445 70.1172 95.6836 71.1523 95.6641 72.4023ZM58.1055 78.3008C60.6641 79.3945 63.0664 79.7656 67.5781 79.7852C70.1562 79.7852 72.1094 79.6875 73.0469 79.5117C74.7852 79.1992 77.3438 78.418 78.3789 77.9102L79.1016 77.5391V79.5898C79.1016 80.7422 79.0039 81.8359 78.9062 82.0312C78.4961 82.8125 76.1328 83.8672 73.4375 84.4922C71.6992 84.9023 65.957 85.0781 63.8477 84.7852C60.5859 84.3555 58.1641 83.5156 57.0117 82.4414L56.25 81.6992V79.5898C56.25 77.9883 56.3086 77.5195 56.5039 77.5977C56.6211 77.6562 57.3633 77.9687 58.1055 78.3008ZM95.2734 82.3633C94.668 83.0078 93.0273 83.75 90.8398 84.3359C89.082 84.8047 88.6719 84.8437 84.4336 84.8437C81.9531 84.8633 79.8438 84.7852 79.7656 84.707C79.668 84.6289 79.8438 84.3555 80.1172 84.1211C81.0547 83.3594 81.4453 82.4414 81.4453 81.0937V79.8828H84.3555C88.6719 79.8828 91.9141 79.3359 94.4336 78.1641L95.6055 77.6172L95.6641 79.7461C95.7031 81.7383 95.6836 81.9336 95.2734 82.3633Z"
                                    fill="#7F7F7F" />
                            </svg>
                            </div>
                            <div><span class="text mini-click-non hovercolor">Petty Cash</span></div>
                            <div class="triangle"></div>
                        </a>
                        <ul class="submenu-angle pettycashlist padding-top-pettycash" aria-expanded="false">
                            <div class=" text-black-50 h hoverbg d-flex justify-content-start align-content-start"> <a
                                    class="left_margin  text-black-50 " href="{{ route('pettyCash') }}">

                                    <svg
                                        class="hoverlist" width="20" height="20" viewBox="0 0 100 100"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M53.3008 16.2305C50.0391 18.1836 44.6875 21.3086 41.4062 23.1836C18.0664 36.6016 2.63672 45.5469 2.28516 45.8789C1.97266 46.1914 1.95312 46.9531 1.95312 57.5195C1.95312 66.3867 1.99219 68.8867 2.1875 69.0625C2.71484 69.5703 33.5937 87.3047 33.9453 87.3047C34.3359 87.3047 49.9219 78.4961 51.1328 77.5977C51.8359 77.0703 51.9531 76.4062 51.4062 75.918C51.2109 75.7227 50.8594 75.5859 50.625 75.5859C50.3906 75.5859 46.543 77.6758 42.0703 80.2539L33.9453 84.9023L30.0195 82.6172C27.8516 81.3672 21.4648 77.6758 15.8203 74.4141C10.1758 71.1719 5.23437 68.3008 4.84375 68.0469L4.10156 67.5781V65.4297C4.10156 64.2383 4.16016 63.2812 4.21875 63.2812C4.27734 63.2812 10.957 67.1094 19.0625 71.7969C30.1562 78.2031 33.8672 80.2734 34.1797 80.1758C34.6875 80.0195 50.7617 70.7422 51.2305 70.3516C52.1484 69.5508 51.1523 68.0469 50.0391 68.5352C49.7461 68.6719 46.0156 70.8008 41.7578 73.2617C34.707 77.3438 33.9453 77.7344 33.5547 77.5195C33.3008 77.3828 27.793 74.2188 21.2891 70.4492C14.7852 66.6992 8.26172 62.9297 6.77734 62.0703L4.10156 60.5078V58.2617V56.0156L4.74609 56.3867C17.3828 63.7891 33.6523 73.0469 34.0039 73.0273C34.2578 73.0273 38.2617 70.8203 42.8711 68.1055C50.8984 63.3984 51.2695 63.1641 51.3281 62.5781C51.4062 61.875 50.957 61.3281 50.332 61.3281C50.0977 61.3281 46.3086 63.4375 41.9141 65.9961L33.9258 70.6445L30.7812 68.8281C29.0625 67.832 22.3437 63.9453 15.8789 60.2148L4.10156 53.418V51.0156V48.5938L4.74609 48.9844C5.07812 49.1992 11.6211 52.9883 19.2383 57.4023C31.2305 64.3359 33.2227 65.4297 33.9062 65.4297C34.5117 65.4297 35.1367 65.1758 36.6406 64.2969C37.6953 63.6523 42.9687 60.6055 48.3398 57.4805C57.2461 52.3242 58.1641 51.8164 58.8281 51.9141C59.4727 51.9922 59.5898 51.9336 59.9219 51.3672C60.2148 50.8984 61.4062 50.0977 64.5703 48.2422L68.8476 45.7617L68.9453 48.0859C69.0234 50.0977 69.1016 50.4688 69.4141 50.7031C69.9609 51.0938 70.5078 51.0352 70.9961 50.5859C71.3867 50.2344 71.4453 50.2148 71.6797 50.4883C71.8164 50.6445 72.1289 50.7812 72.3828 50.7812C72.6367 50.7812 76.4844 48.6719 80.957 46.0938C85.4101 43.5156 89.1992 41.3477 89.3555 41.2695C89.6289 41.1719 89.6484 41.4648 89.6094 43.3789L89.5508 45.5859L84.6094 48.4375C81.875 50 79.5703 51.4453 79.4531 51.6406C79.0039 52.4609 79.9219 53.5156 80.8008 53.1836C80.9961 53.1055 83.0273 51.9727 85.332 50.6445C87.6172 49.3164 89.5312 48.2422 89.5703 48.2422C89.6094 48.2422 89.6484 49.2383 89.6484 50.4492V52.6758L86.6797 54.4141C84.375 55.7617 83.6523 56.2695 83.5156 56.6797C83.2812 57.3438 83.7891 58.0078 84.5312 58.0078C85.0195 58.0078 90.8008 54.7656 91.4648 54.1211C91.7773 53.8086 91.8164 53.0469 91.8359 42.5195C91.8555 31.9336 91.8359 31.2109 91.5039 30.8594C91.3086 30.6445 91.0351 30.4688 90.8789 30.4688C90.7226 30.4688 89.1211 29.6289 87.3437 28.5742C72.5781 20.0391 60.7812 13.1836 60.4492 12.9688C60.2344 12.8125 59.8828 12.6953 59.668 12.6953C59.4336 12.6953 56.582 14.2773 53.3008 16.2305ZM73.6719 23.3008C81.3281 27.7344 87.7539 31.4648 87.9492 31.582C88.2617 31.7383 86.8359 32.6367 79.2969 37.0117L70.2539 42.2656L69.2578 41.7188C68.0469 41.0547 67.4805 40.6641 67.5976 40.5273C67.6562 40.4883 69.8828 39.1602 72.5391 37.5977C75.2148 36.0156 77.5976 34.6094 77.8516 34.4336C78.4961 34.0234 78.4961 33.0273 77.832 32.4609C77.207 31.9141 77.207 31.4258 77.832 30.7031C78.3984 30.0195 78.457 29.2773 77.9883 28.8672C77.793 28.6914 74.043 26.4844 69.6289 23.9258L61.6211 19.2969L60.7422 19.4922C60.1172 19.6289 59.6289 19.6289 59.0625 19.4922L58.2617 19.2773L51.3477 23.3008L44.4336 27.3047L43.1641 26.6211C42.4609 26.2305 41.8359 25.8789 41.7578 25.8008C41.6797 25.7422 43.1445 24.8242 44.9805 23.7695C46.8359 22.7148 50.8008 20.3711 53.8086 18.5547C56.8164 16.7578 59.375 15.2539 59.5117 15.2539C59.6484 15.2344 66.0156 18.8672 73.6719 23.3008ZM68.3789 25.8398L75.2539 29.8438L75.2734 31.582L75.293 33.3398L70.2539 36.2891L65.1953 39.2578L55.957 33.9453L46.6992 28.6133L48.3008 27.6953C49.1797 27.1875 51.8359 25.6445 54.1992 24.2773L58.4961 21.7773L60 21.8164L61.5039 21.8555L68.3789 25.8398ZM52.2852 34.5703C59.2383 38.5742 65.5859 42.2461 66.3672 42.7344L67.8125 43.6133L67.0508 44.082C64.7461 45.5078 59.2187 48.6328 59.0234 48.6328C58.7891 48.6328 57.8906 48.125 41.9922 38.9648C37.1094 36.1523 32.5 33.5156 31.7773 33.1055C31.0547 32.7148 30.4687 32.3047 30.5078 32.207C30.625 31.8945 38.9648 27.168 39.2969 27.2461C39.4922 27.2656 45.332 30.5664 52.2852 34.5703ZM30.8008 35.2734C30.7812 35.293 27.3828 37.2461 23.2422 39.6289C19.1016 42.0117 15.5664 44.1406 15.3711 44.3555C14.9219 44.9023 14.9414 45.1758 15.5273 45.8594C16.1523 46.6016 16.1523 47.0117 15.4883 47.6953C14.4531 48.7695 14.4727 48.7891 23.7305 54.1602C31.5625 58.6914 32.168 59.0039 32.8125 58.8867C33.6719 58.7109 34.1016 58.7109 34.9609 58.8867C35.6055 59.0039 36.2695 58.6523 44.707 53.7305L53.7695 48.457L54.6875 48.9844C55.1758 49.2773 55.8008 49.6484 56.0352 49.8047C56.4844 50.0977 56.1328 50.3125 45.332 56.6016C39.1797 60.1758 34.082 63.1055 33.9844 63.1445C33.8086 63.1836 5.46875 46.8359 5.46875 46.6797C5.46875 46.6211 10.5078 43.6719 16.6602 40.0977L27.832 33.6133L29.3359 34.4336C30.1562 34.8828 30.8203 35.2539 30.8008 35.2734ZM89.6484 36.1133V38.418L80.918 43.457C76.0937 46.2305 71.9726 48.6914 71.7187 48.9062L71.2695 49.2969L71.3281 46.7773L71.3867 44.2383L80.3711 39.0234C85.3125 36.1523 89.4141 33.7891 89.5117 33.7891C89.5898 33.7891 89.6484 34.8242 89.6484 36.1133ZM42.168 41.8164C47.0703 44.6289 51.1523 46.9922 51.2305 47.0703C51.3281 47.1484 47.7539 49.3164 43.3203 51.875L35.2539 56.543L33.7891 56.5234L32.3242 56.5039L25.1562 52.3438C18.0469 48.2227 17.9883 48.1836 18.1836 47.6758C18.3008 47.4023 18.3594 46.7188 18.3203 46.1523L18.2617 45.1367L25.4883 40.9375C29.4727 38.6523 32.832 36.7578 32.9883 36.7383C33.1445 36.7188 37.2852 39.0234 42.168 41.8164Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M59.4921 26.1914C57.0703 26.543 55.3124 28.2031 55.5273 29.9414C56.0156 33.7109 64.0624 34.375 65.8007 30.7812C66.289 29.8047 66.3085 29.5117 65.9374 28.6328C65.1757 26.7969 62.4804 25.7812 59.4921 26.1914ZM63.1445 28.8672C63.9257 29.3164 63.9453 29.8047 63.2226 30.3516C62.4609 30.918 59.3554 30.957 58.5351 30.4102C57.4804 29.7266 57.6562 29.1406 59.1015 28.5937C60.0976 28.2227 62.3046 28.3594 63.1445 28.8672Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M31.1523 43.1641C28.7305 43.6719 27.3438 44.9219 27.3438 46.582C27.3438 48.6719 29.4531 50.0391 32.7148 50.0586C34.6094 50.0781 35.918 49.668 36.875 48.7695C38.6914 47.0703 38.0078 44.5313 35.4688 43.5742C34.2773 43.125 32.2266 42.9297 31.1523 43.1641ZM34.2383 45.5274C36.8945 46.25 35.3516 48.0274 32.2656 47.8125C30.9375 47.7149 29.8047 47.2656 29.6094 46.7383C29.4727 46.4063 30.2148 45.7422 30.957 45.5274C31.7773 45.2734 33.3594 45.2734 34.2383 45.5274Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M62.9883 53.3984C60.4492 53.8086 58.9844 54.2578 57.3047 55.0781C55.5273 55.957 54.4336 56.9922 54.1211 58.1445C53.8281 59.1797 53.8281 81.2695 54.1211 82.3047C54.7461 84.5703 58.4766 86.4844 63.5352 87.1094C66.1328 87.4414 71.8555 87.2656 73.8281 86.7969C75.6836 86.3477 76.4648 86.3477 78.5156 86.8164C79.9023 87.1484 80.8789 87.207 84.5703 87.207C88.3398 87.1875 89.2188 87.1289 90.7227 86.7773C95.1562 85.7422 97.6562 84.1016 98.0664 81.9922C98.3008 80.7227 98.2812 66.6602 98.0273 65.7422C97.5586 64.0234 95.0977 62.3437 91.8945 61.543C89.3555 60.918 87.6172 60.7227 84.4531 60.7227H81.4453V59.4336C81.4453 57.2656 80.3906 55.9961 77.5781 54.7461C75.2734 53.7305 72.7344 53.3008 68.457 53.2227C65.7812 53.1641 64.0625 53.2227 62.9883 53.3984ZM72.168 55.7617C75.7227 56.3086 78.5938 57.5 78.9844 58.6328C79.1406 59.082 79.1016 59.2578 78.6914 59.6875C77.793 60.6641 75.7812 61.4648 72.7539 62.0508C70.0977 62.5586 64.8047 62.5 62.1484 61.9336C59.0039 61.2695 56.6406 60.1367 56.3867 59.1797C56.0547 57.9297 59.1406 56.3867 63.1836 55.7422C65.3711 55.4102 69.8438 55.4102 72.168 55.7617ZM59.5703 63.7305C65.332 65.3711 73.3984 65.0391 77.8711 62.9883C78.457 62.7148 78.9844 62.5 79.0234 62.5C79.0625 62.5 79.1016 63.4961 79.1016 64.707C79.1016 66.875 79.082 66.9336 78.5742 67.4219C74.8828 70.8789 61.2305 70.918 56.9141 67.4805C56.3477 67.0312 56.3477 67.0117 56.2891 64.6484L56.2109 62.2852L57.3633 62.8516C57.9883 63.1641 58.9844 63.5547 59.5703 63.7305ZM89.1797 63.3789C92.6953 63.9844 95.5078 65.293 95.6641 66.3867C95.957 68.3594 88.8867 70.3711 83.0664 69.9805L81.4453 69.8633V66.4844V63.0859H84.4531C86.25 63.0859 88.1445 63.2031 89.1797 63.3789ZM56.7578 70.1172C57.0703 70.4297 59.5898 71.3086 61.3281 71.7187C63.7695 72.2852 69.4727 72.4219 72.4219 71.9922C74.8438 71.6211 76.7578 71.0937 78.1836 70.3906L79.1211 69.9023L79.0625 72.3047L79.0039 74.6875L78.1836 75.3125C76.0352 76.9531 70.4492 77.9102 65.3711 77.5195C60.957 77.1875 57.2461 75.918 56.4844 74.4727C56.2305 74.0039 56.1523 69.9219 56.4062 69.9219C56.4844 69.9219 56.6406 70 56.7578 70.1172ZM95.6641 72.4023L95.6055 74.6875L94.8047 75.293C93.0273 76.6602 88.9062 77.5391 84.3359 77.5391H81.4453V74.8828V72.207L82.9688 72.3437C86.25 72.6172 91.5039 71.8555 94.082 70.7422C94.8047 70.4102 95.4883 70.1562 95.5664 70.1367C95.6445 70.1172 95.6836 71.1523 95.6641 72.4023ZM58.1055 78.3008C60.6641 79.3945 63.0664 79.7656 67.5781 79.7852C70.1562 79.7852 72.1094 79.6875 73.0469 79.5117C74.7852 79.1992 77.3438 78.418 78.3789 77.9102L79.1016 77.5391V79.5898C79.1016 80.7422 79.0039 81.8359 78.9062 82.0312C78.4961 82.8125 76.1328 83.8672 73.4375 84.4922C71.6992 84.9023 65.957 85.0781 63.8477 84.7852C60.5859 84.3555 58.1641 83.5156 57.0117 82.4414L56.25 81.6992V79.5898C56.25 77.9883 56.3086 77.5195 56.5039 77.5977C56.6211 77.6562 57.3633 77.9687 58.1055 78.3008ZM95.2734 82.3633C94.668 83.0078 93.0273 83.75 90.8398 84.3359C89.082 84.8047 88.6719 84.8437 84.4336 84.8437C81.9531 84.8633 79.8438 84.7852 79.7656 84.707C79.668 84.6289 79.8438 84.3555 80.1172 84.1211C81.0547 83.3594 81.4453 82.4414 81.4453 81.0937V79.8828H84.3555C88.6719 79.8828 91.9141 79.3359 94.4336 78.1641L95.6055 77.6172L95.6641 79.7461C95.7031 81.7383 95.6836 81.9336 95.2734 82.3633Z"
                                            fill="#7F7F7F" />
                                    </svg>
                                    <span class="ml-1 text hoverlist" style="margin-top: -15px;">Petty Cash
                                    </span></a></div>
                        </ul>
                    </li>
                    <li class="removable sidebar-h clients ">
                        <a class=" text-black-50 d-flex flex-column align-items-center triangle-container"
                            href="#" aria-expanded="false">
                            <div class="mb-2 ">

                                <svg
                                class="hoverlist" width="40" height="40" viewBox="0 0 100 100"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M53.3008 16.2305C50.0391 18.1836 44.6875 21.3086 41.4062 23.1836C18.0664 36.6016 2.63672 45.5469 2.28516 45.8789C1.97266 46.1914 1.95312 46.9531 1.95312 57.5195C1.95312 66.3867 1.99219 68.8867 2.1875 69.0625C2.71484 69.5703 33.5937 87.3047 33.9453 87.3047C34.3359 87.3047 49.9219 78.4961 51.1328 77.5977C51.8359 77.0703 51.9531 76.4062 51.4062 75.918C51.2109 75.7227 50.8594 75.5859 50.625 75.5859C50.3906 75.5859 46.543 77.6758 42.0703 80.2539L33.9453 84.9023L30.0195 82.6172C27.8516 81.3672 21.4648 77.6758 15.8203 74.4141C10.1758 71.1719 5.23437 68.3008 4.84375 68.0469L4.10156 67.5781V65.4297C4.10156 64.2383 4.16016 63.2812 4.21875 63.2812C4.27734 63.2812 10.957 67.1094 19.0625 71.7969C30.1562 78.2031 33.8672 80.2734 34.1797 80.1758C34.6875 80.0195 50.7617 70.7422 51.2305 70.3516C52.1484 69.5508 51.1523 68.0469 50.0391 68.5352C49.7461 68.6719 46.0156 70.8008 41.7578 73.2617C34.707 77.3438 33.9453 77.7344 33.5547 77.5195C33.3008 77.3828 27.793 74.2188 21.2891 70.4492C14.7852 66.6992 8.26172 62.9297 6.77734 62.0703L4.10156 60.5078V58.2617V56.0156L4.74609 56.3867C17.3828 63.7891 33.6523 73.0469 34.0039 73.0273C34.2578 73.0273 38.2617 70.8203 42.8711 68.1055C50.8984 63.3984 51.2695 63.1641 51.3281 62.5781C51.4062 61.875 50.957 61.3281 50.332 61.3281C50.0977 61.3281 46.3086 63.4375 41.9141 65.9961L33.9258 70.6445L30.7812 68.8281C29.0625 67.832 22.3437 63.9453 15.8789 60.2148L4.10156 53.418V51.0156V48.5938L4.74609 48.9844C5.07812 49.1992 11.6211 52.9883 19.2383 57.4023C31.2305 64.3359 33.2227 65.4297 33.9062 65.4297C34.5117 65.4297 35.1367 65.1758 36.6406 64.2969C37.6953 63.6523 42.9687 60.6055 48.3398 57.4805C57.2461 52.3242 58.1641 51.8164 58.8281 51.9141C59.4727 51.9922 59.5898 51.9336 59.9219 51.3672C60.2148 50.8984 61.4062 50.0977 64.5703 48.2422L68.8476 45.7617L68.9453 48.0859C69.0234 50.0977 69.1016 50.4688 69.4141 50.7031C69.9609 51.0938 70.5078 51.0352 70.9961 50.5859C71.3867 50.2344 71.4453 50.2148 71.6797 50.4883C71.8164 50.6445 72.1289 50.7812 72.3828 50.7812C72.6367 50.7812 76.4844 48.6719 80.957 46.0938C85.4101 43.5156 89.1992 41.3477 89.3555 41.2695C89.6289 41.1719 89.6484 41.4648 89.6094 43.3789L89.5508 45.5859L84.6094 48.4375C81.875 50 79.5703 51.4453 79.4531 51.6406C79.0039 52.4609 79.9219 53.5156 80.8008 53.1836C80.9961 53.1055 83.0273 51.9727 85.332 50.6445C87.6172 49.3164 89.5312 48.2422 89.5703 48.2422C89.6094 48.2422 89.6484 49.2383 89.6484 50.4492V52.6758L86.6797 54.4141C84.375 55.7617 83.6523 56.2695 83.5156 56.6797C83.2812 57.3438 83.7891 58.0078 84.5312 58.0078C85.0195 58.0078 90.8008 54.7656 91.4648 54.1211C91.7773 53.8086 91.8164 53.0469 91.8359 42.5195C91.8555 31.9336 91.8359 31.2109 91.5039 30.8594C91.3086 30.6445 91.0351 30.4688 90.8789 30.4688C90.7226 30.4688 89.1211 29.6289 87.3437 28.5742C72.5781 20.0391 60.7812 13.1836 60.4492 12.9688C60.2344 12.8125 59.8828 12.6953 59.668 12.6953C59.4336 12.6953 56.582 14.2773 53.3008 16.2305ZM73.6719 23.3008C81.3281 27.7344 87.7539 31.4648 87.9492 31.582C88.2617 31.7383 86.8359 32.6367 79.2969 37.0117L70.2539 42.2656L69.2578 41.7188C68.0469 41.0547 67.4805 40.6641 67.5976 40.5273C67.6562 40.4883 69.8828 39.1602 72.5391 37.5977C75.2148 36.0156 77.5976 34.6094 77.8516 34.4336C78.4961 34.0234 78.4961 33.0273 77.832 32.4609C77.207 31.9141 77.207 31.4258 77.832 30.7031C78.3984 30.0195 78.457 29.2773 77.9883 28.8672C77.793 28.6914 74.043 26.4844 69.6289 23.9258L61.6211 19.2969L60.7422 19.4922C60.1172 19.6289 59.6289 19.6289 59.0625 19.4922L58.2617 19.2773L51.3477 23.3008L44.4336 27.3047L43.1641 26.6211C42.4609 26.2305 41.8359 25.8789 41.7578 25.8008C41.6797 25.7422 43.1445 24.8242 44.9805 23.7695C46.8359 22.7148 50.8008 20.3711 53.8086 18.5547C56.8164 16.7578 59.375 15.2539 59.5117 15.2539C59.6484 15.2344 66.0156 18.8672 73.6719 23.3008ZM68.3789 25.8398L75.2539 29.8438L75.2734 31.582L75.293 33.3398L70.2539 36.2891L65.1953 39.2578L55.957 33.9453L46.6992 28.6133L48.3008 27.6953C49.1797 27.1875 51.8359 25.6445 54.1992 24.2773L58.4961 21.7773L60 21.8164L61.5039 21.8555L68.3789 25.8398ZM52.2852 34.5703C59.2383 38.5742 65.5859 42.2461 66.3672 42.7344L67.8125 43.6133L67.0508 44.082C64.7461 45.5078 59.2187 48.6328 59.0234 48.6328C58.7891 48.6328 57.8906 48.125 41.9922 38.9648C37.1094 36.1523 32.5 33.5156 31.7773 33.1055C31.0547 32.7148 30.4687 32.3047 30.5078 32.207C30.625 31.8945 38.9648 27.168 39.2969 27.2461C39.4922 27.2656 45.332 30.5664 52.2852 34.5703ZM30.8008 35.2734C30.7812 35.293 27.3828 37.2461 23.2422 39.6289C19.1016 42.0117 15.5664 44.1406 15.3711 44.3555C14.9219 44.9023 14.9414 45.1758 15.5273 45.8594C16.1523 46.6016 16.1523 47.0117 15.4883 47.6953C14.4531 48.7695 14.4727 48.7891 23.7305 54.1602C31.5625 58.6914 32.168 59.0039 32.8125 58.8867C33.6719 58.7109 34.1016 58.7109 34.9609 58.8867C35.6055 59.0039 36.2695 58.6523 44.707 53.7305L53.7695 48.457L54.6875 48.9844C55.1758 49.2773 55.8008 49.6484 56.0352 49.8047C56.4844 50.0977 56.1328 50.3125 45.332 56.6016C39.1797 60.1758 34.082 63.1055 33.9844 63.1445C33.8086 63.1836 5.46875 46.8359 5.46875 46.6797C5.46875 46.6211 10.5078 43.6719 16.6602 40.0977L27.832 33.6133L29.3359 34.4336C30.1562 34.8828 30.8203 35.2539 30.8008 35.2734ZM89.6484 36.1133V38.418L80.918 43.457C76.0937 46.2305 71.9726 48.6914 71.7187 48.9062L71.2695 49.2969L71.3281 46.7773L71.3867 44.2383L80.3711 39.0234C85.3125 36.1523 89.4141 33.7891 89.5117 33.7891C89.5898 33.7891 89.6484 34.8242 89.6484 36.1133ZM42.168 41.8164C47.0703 44.6289 51.1523 46.9922 51.2305 47.0703C51.3281 47.1484 47.7539 49.3164 43.3203 51.875L35.2539 56.543L33.7891 56.5234L32.3242 56.5039L25.1562 52.3438C18.0469 48.2227 17.9883 48.1836 18.1836 47.6758C18.3008 47.4023 18.3594 46.7188 18.3203 46.1523L18.2617 45.1367L25.4883 40.9375C29.4727 38.6523 32.832 36.7578 32.9883 36.7383C33.1445 36.7188 37.2852 39.0234 42.168 41.8164Z"
                                    fill="#7F7F7F" />
                                <path
                                    d="M59.4921 26.1914C57.0703 26.543 55.3124 28.2031 55.5273 29.9414C56.0156 33.7109 64.0624 34.375 65.8007 30.7812C66.289 29.8047 66.3085 29.5117 65.9374 28.6328C65.1757 26.7969 62.4804 25.7812 59.4921 26.1914ZM63.1445 28.8672C63.9257 29.3164 63.9453 29.8047 63.2226 30.3516C62.4609 30.918 59.3554 30.957 58.5351 30.4102C57.4804 29.7266 57.6562 29.1406 59.1015 28.5937C60.0976 28.2227 62.3046 28.3594 63.1445 28.8672Z"
                                    fill="#7F7F7F" />
                                <path
                                    d="M31.1523 43.1641C28.7305 43.6719 27.3438 44.9219 27.3438 46.582C27.3438 48.6719 29.4531 50.0391 32.7148 50.0586C34.6094 50.0781 35.918 49.668 36.875 48.7695C38.6914 47.0703 38.0078 44.5313 35.4688 43.5742C34.2773 43.125 32.2266 42.9297 31.1523 43.1641ZM34.2383 45.5274C36.8945 46.25 35.3516 48.0274 32.2656 47.8125C30.9375 47.7149 29.8047 47.2656 29.6094 46.7383C29.4727 46.4063 30.2148 45.7422 30.957 45.5274C31.7773 45.2734 33.3594 45.2734 34.2383 45.5274Z"
                                    fill="#7F7F7F" />
                                <path
                                    d="M62.9883 53.3984C60.4492 53.8086 58.9844 54.2578 57.3047 55.0781C55.5273 55.957 54.4336 56.9922 54.1211 58.1445C53.8281 59.1797 53.8281 81.2695 54.1211 82.3047C54.7461 84.5703 58.4766 86.4844 63.5352 87.1094C66.1328 87.4414 71.8555 87.2656 73.8281 86.7969C75.6836 86.3477 76.4648 86.3477 78.5156 86.8164C79.9023 87.1484 80.8789 87.207 84.5703 87.207C88.3398 87.1875 89.2188 87.1289 90.7227 86.7773C95.1562 85.7422 97.6562 84.1016 98.0664 81.9922C98.3008 80.7227 98.2812 66.6602 98.0273 65.7422C97.5586 64.0234 95.0977 62.3437 91.8945 61.543C89.3555 60.918 87.6172 60.7227 84.4531 60.7227H81.4453V59.4336C81.4453 57.2656 80.3906 55.9961 77.5781 54.7461C75.2734 53.7305 72.7344 53.3008 68.457 53.2227C65.7812 53.1641 64.0625 53.2227 62.9883 53.3984ZM72.168 55.7617C75.7227 56.3086 78.5938 57.5 78.9844 58.6328C79.1406 59.082 79.1016 59.2578 78.6914 59.6875C77.793 60.6641 75.7812 61.4648 72.7539 62.0508C70.0977 62.5586 64.8047 62.5 62.1484 61.9336C59.0039 61.2695 56.6406 60.1367 56.3867 59.1797C56.0547 57.9297 59.1406 56.3867 63.1836 55.7422C65.3711 55.4102 69.8438 55.4102 72.168 55.7617ZM59.5703 63.7305C65.332 65.3711 73.3984 65.0391 77.8711 62.9883C78.457 62.7148 78.9844 62.5 79.0234 62.5C79.0625 62.5 79.1016 63.4961 79.1016 64.707C79.1016 66.875 79.082 66.9336 78.5742 67.4219C74.8828 70.8789 61.2305 70.918 56.9141 67.4805C56.3477 67.0312 56.3477 67.0117 56.2891 64.6484L56.2109 62.2852L57.3633 62.8516C57.9883 63.1641 58.9844 63.5547 59.5703 63.7305ZM89.1797 63.3789C92.6953 63.9844 95.5078 65.293 95.6641 66.3867C95.957 68.3594 88.8867 70.3711 83.0664 69.9805L81.4453 69.8633V66.4844V63.0859H84.4531C86.25 63.0859 88.1445 63.2031 89.1797 63.3789ZM56.7578 70.1172C57.0703 70.4297 59.5898 71.3086 61.3281 71.7187C63.7695 72.2852 69.4727 72.4219 72.4219 71.9922C74.8438 71.6211 76.7578 71.0937 78.1836 70.3906L79.1211 69.9023L79.0625 72.3047L79.0039 74.6875L78.1836 75.3125C76.0352 76.9531 70.4492 77.9102 65.3711 77.5195C60.957 77.1875 57.2461 75.918 56.4844 74.4727C56.2305 74.0039 56.1523 69.9219 56.4062 69.9219C56.4844 69.9219 56.6406 70 56.7578 70.1172ZM95.6641 72.4023L95.6055 74.6875L94.8047 75.293C93.0273 76.6602 88.9062 77.5391 84.3359 77.5391H81.4453V74.8828V72.207L82.9688 72.3437C86.25 72.6172 91.5039 71.8555 94.082 70.7422C94.8047 70.4102 95.4883 70.1562 95.5664 70.1367C95.6445 70.1172 95.6836 71.1523 95.6641 72.4023ZM58.1055 78.3008C60.6641 79.3945 63.0664 79.7656 67.5781 79.7852C70.1562 79.7852 72.1094 79.6875 73.0469 79.5117C74.7852 79.1992 77.3438 78.418 78.3789 77.9102L79.1016 77.5391V79.5898C79.1016 80.7422 79.0039 81.8359 78.9062 82.0312C78.4961 82.8125 76.1328 83.8672 73.4375 84.4922C71.6992 84.9023 65.957 85.0781 63.8477 84.7852C60.5859 84.3555 58.1641 83.5156 57.0117 82.4414L56.25 81.6992V79.5898C56.25 77.9883 56.3086 77.5195 56.5039 77.5977C56.6211 77.6562 57.3633 77.9687 58.1055 78.3008ZM95.2734 82.3633C94.668 83.0078 93.0273 83.75 90.8398 84.3359C89.082 84.8047 88.6719 84.8437 84.4336 84.8437C81.9531 84.8633 79.8438 84.7852 79.7656 84.707C79.668 84.6289 79.8438 84.3555 80.1172 84.1211C81.0547 83.3594 81.4453 82.4414 81.4453 81.0937V79.8828H84.3555C88.6719 79.8828 91.9141 79.3359 94.4336 78.1641L95.6055 77.6172L95.6641 79.7461C95.7031 81.7383 95.6836 81.9336 95.2734 82.3633Z"
                                    fill="#7F7F7F" />
                            </svg>
                            </div>
                            <div><span class="text mini-click-non hovercolor">Clients</span></div>
                            <div class="triangle"></div>
                        </a>
                        <ul class="submenu-angle clientslist padding-top-clients" aria-expanded="false">
                            <div class=" text-black-50 h hoverbg d-flex justify-content-start align-content-start"> <a
                                    class="left_margin  text-black-50 " href="{{ route('clients') }}">

                                    <svg
                                        class="hoverlist" width="20" height="20" viewBox="0 0 100 100"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M53.3008 16.2305C50.0391 18.1836 44.6875 21.3086 41.4062 23.1836C18.0664 36.6016 2.63672 45.5469 2.28516 45.8789C1.97266 46.1914 1.95312 46.9531 1.95312 57.5195C1.95312 66.3867 1.99219 68.8867 2.1875 69.0625C2.71484 69.5703 33.5937 87.3047 33.9453 87.3047C34.3359 87.3047 49.9219 78.4961 51.1328 77.5977C51.8359 77.0703 51.9531 76.4062 51.4062 75.918C51.2109 75.7227 50.8594 75.5859 50.625 75.5859C50.3906 75.5859 46.543 77.6758 42.0703 80.2539L33.9453 84.9023L30.0195 82.6172C27.8516 81.3672 21.4648 77.6758 15.8203 74.4141C10.1758 71.1719 5.23437 68.3008 4.84375 68.0469L4.10156 67.5781V65.4297C4.10156 64.2383 4.16016 63.2812 4.21875 63.2812C4.27734 63.2812 10.957 67.1094 19.0625 71.7969C30.1562 78.2031 33.8672 80.2734 34.1797 80.1758C34.6875 80.0195 50.7617 70.7422 51.2305 70.3516C52.1484 69.5508 51.1523 68.0469 50.0391 68.5352C49.7461 68.6719 46.0156 70.8008 41.7578 73.2617C34.707 77.3438 33.9453 77.7344 33.5547 77.5195C33.3008 77.3828 27.793 74.2188 21.2891 70.4492C14.7852 66.6992 8.26172 62.9297 6.77734 62.0703L4.10156 60.5078V58.2617V56.0156L4.74609 56.3867C17.3828 63.7891 33.6523 73.0469 34.0039 73.0273C34.2578 73.0273 38.2617 70.8203 42.8711 68.1055C50.8984 63.3984 51.2695 63.1641 51.3281 62.5781C51.4062 61.875 50.957 61.3281 50.332 61.3281C50.0977 61.3281 46.3086 63.4375 41.9141 65.9961L33.9258 70.6445L30.7812 68.8281C29.0625 67.832 22.3437 63.9453 15.8789 60.2148L4.10156 53.418V51.0156V48.5938L4.74609 48.9844C5.07812 49.1992 11.6211 52.9883 19.2383 57.4023C31.2305 64.3359 33.2227 65.4297 33.9062 65.4297C34.5117 65.4297 35.1367 65.1758 36.6406 64.2969C37.6953 63.6523 42.9687 60.6055 48.3398 57.4805C57.2461 52.3242 58.1641 51.8164 58.8281 51.9141C59.4727 51.9922 59.5898 51.9336 59.9219 51.3672C60.2148 50.8984 61.4062 50.0977 64.5703 48.2422L68.8476 45.7617L68.9453 48.0859C69.0234 50.0977 69.1016 50.4688 69.4141 50.7031C69.9609 51.0938 70.5078 51.0352 70.9961 50.5859C71.3867 50.2344 71.4453 50.2148 71.6797 50.4883C71.8164 50.6445 72.1289 50.7812 72.3828 50.7812C72.6367 50.7812 76.4844 48.6719 80.957 46.0938C85.4101 43.5156 89.1992 41.3477 89.3555 41.2695C89.6289 41.1719 89.6484 41.4648 89.6094 43.3789L89.5508 45.5859L84.6094 48.4375C81.875 50 79.5703 51.4453 79.4531 51.6406C79.0039 52.4609 79.9219 53.5156 80.8008 53.1836C80.9961 53.1055 83.0273 51.9727 85.332 50.6445C87.6172 49.3164 89.5312 48.2422 89.5703 48.2422C89.6094 48.2422 89.6484 49.2383 89.6484 50.4492V52.6758L86.6797 54.4141C84.375 55.7617 83.6523 56.2695 83.5156 56.6797C83.2812 57.3438 83.7891 58.0078 84.5312 58.0078C85.0195 58.0078 90.8008 54.7656 91.4648 54.1211C91.7773 53.8086 91.8164 53.0469 91.8359 42.5195C91.8555 31.9336 91.8359 31.2109 91.5039 30.8594C91.3086 30.6445 91.0351 30.4688 90.8789 30.4688C90.7226 30.4688 89.1211 29.6289 87.3437 28.5742C72.5781 20.0391 60.7812 13.1836 60.4492 12.9688C60.2344 12.8125 59.8828 12.6953 59.668 12.6953C59.4336 12.6953 56.582 14.2773 53.3008 16.2305ZM73.6719 23.3008C81.3281 27.7344 87.7539 31.4648 87.9492 31.582C88.2617 31.7383 86.8359 32.6367 79.2969 37.0117L70.2539 42.2656L69.2578 41.7188C68.0469 41.0547 67.4805 40.6641 67.5976 40.5273C67.6562 40.4883 69.8828 39.1602 72.5391 37.5977C75.2148 36.0156 77.5976 34.6094 77.8516 34.4336C78.4961 34.0234 78.4961 33.0273 77.832 32.4609C77.207 31.9141 77.207 31.4258 77.832 30.7031C78.3984 30.0195 78.457 29.2773 77.9883 28.8672C77.793 28.6914 74.043 26.4844 69.6289 23.9258L61.6211 19.2969L60.7422 19.4922C60.1172 19.6289 59.6289 19.6289 59.0625 19.4922L58.2617 19.2773L51.3477 23.3008L44.4336 27.3047L43.1641 26.6211C42.4609 26.2305 41.8359 25.8789 41.7578 25.8008C41.6797 25.7422 43.1445 24.8242 44.9805 23.7695C46.8359 22.7148 50.8008 20.3711 53.8086 18.5547C56.8164 16.7578 59.375 15.2539 59.5117 15.2539C59.6484 15.2344 66.0156 18.8672 73.6719 23.3008ZM68.3789 25.8398L75.2539 29.8438L75.2734 31.582L75.293 33.3398L70.2539 36.2891L65.1953 39.2578L55.957 33.9453L46.6992 28.6133L48.3008 27.6953C49.1797 27.1875 51.8359 25.6445 54.1992 24.2773L58.4961 21.7773L60 21.8164L61.5039 21.8555L68.3789 25.8398ZM52.2852 34.5703C59.2383 38.5742 65.5859 42.2461 66.3672 42.7344L67.8125 43.6133L67.0508 44.082C64.7461 45.5078 59.2187 48.6328 59.0234 48.6328C58.7891 48.6328 57.8906 48.125 41.9922 38.9648C37.1094 36.1523 32.5 33.5156 31.7773 33.1055C31.0547 32.7148 30.4687 32.3047 30.5078 32.207C30.625 31.8945 38.9648 27.168 39.2969 27.2461C39.4922 27.2656 45.332 30.5664 52.2852 34.5703ZM30.8008 35.2734C30.7812 35.293 27.3828 37.2461 23.2422 39.6289C19.1016 42.0117 15.5664 44.1406 15.3711 44.3555C14.9219 44.9023 14.9414 45.1758 15.5273 45.8594C16.1523 46.6016 16.1523 47.0117 15.4883 47.6953C14.4531 48.7695 14.4727 48.7891 23.7305 54.1602C31.5625 58.6914 32.168 59.0039 32.8125 58.8867C33.6719 58.7109 34.1016 58.7109 34.9609 58.8867C35.6055 59.0039 36.2695 58.6523 44.707 53.7305L53.7695 48.457L54.6875 48.9844C55.1758 49.2773 55.8008 49.6484 56.0352 49.8047C56.4844 50.0977 56.1328 50.3125 45.332 56.6016C39.1797 60.1758 34.082 63.1055 33.9844 63.1445C33.8086 63.1836 5.46875 46.8359 5.46875 46.6797C5.46875 46.6211 10.5078 43.6719 16.6602 40.0977L27.832 33.6133L29.3359 34.4336C30.1562 34.8828 30.8203 35.2539 30.8008 35.2734ZM89.6484 36.1133V38.418L80.918 43.457C76.0937 46.2305 71.9726 48.6914 71.7187 48.9062L71.2695 49.2969L71.3281 46.7773L71.3867 44.2383L80.3711 39.0234C85.3125 36.1523 89.4141 33.7891 89.5117 33.7891C89.5898 33.7891 89.6484 34.8242 89.6484 36.1133ZM42.168 41.8164C47.0703 44.6289 51.1523 46.9922 51.2305 47.0703C51.3281 47.1484 47.7539 49.3164 43.3203 51.875L35.2539 56.543L33.7891 56.5234L32.3242 56.5039L25.1562 52.3438C18.0469 48.2227 17.9883 48.1836 18.1836 47.6758C18.3008 47.4023 18.3594 46.7188 18.3203 46.1523L18.2617 45.1367L25.4883 40.9375C29.4727 38.6523 32.832 36.7578 32.9883 36.7383C33.1445 36.7188 37.2852 39.0234 42.168 41.8164Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M59.4921 26.1914C57.0703 26.543 55.3124 28.2031 55.5273 29.9414C56.0156 33.7109 64.0624 34.375 65.8007 30.7812C66.289 29.8047 66.3085 29.5117 65.9374 28.6328C65.1757 26.7969 62.4804 25.7812 59.4921 26.1914ZM63.1445 28.8672C63.9257 29.3164 63.9453 29.8047 63.2226 30.3516C62.4609 30.918 59.3554 30.957 58.5351 30.4102C57.4804 29.7266 57.6562 29.1406 59.1015 28.5937C60.0976 28.2227 62.3046 28.3594 63.1445 28.8672Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M31.1523 43.1641C28.7305 43.6719 27.3438 44.9219 27.3438 46.582C27.3438 48.6719 29.4531 50.0391 32.7148 50.0586C34.6094 50.0781 35.918 49.668 36.875 48.7695C38.6914 47.0703 38.0078 44.5313 35.4688 43.5742C34.2773 43.125 32.2266 42.9297 31.1523 43.1641ZM34.2383 45.5274C36.8945 46.25 35.3516 48.0274 32.2656 47.8125C30.9375 47.7149 29.8047 47.2656 29.6094 46.7383C29.4727 46.4063 30.2148 45.7422 30.957 45.5274C31.7773 45.2734 33.3594 45.2734 34.2383 45.5274Z"
                                            fill="#7F7F7F" />
                                        <path
                                            d="M62.9883 53.3984C60.4492 53.8086 58.9844 54.2578 57.3047 55.0781C55.5273 55.957 54.4336 56.9922 54.1211 58.1445C53.8281 59.1797 53.8281 81.2695 54.1211 82.3047C54.7461 84.5703 58.4766 86.4844 63.5352 87.1094C66.1328 87.4414 71.8555 87.2656 73.8281 86.7969C75.6836 86.3477 76.4648 86.3477 78.5156 86.8164C79.9023 87.1484 80.8789 87.207 84.5703 87.207C88.3398 87.1875 89.2188 87.1289 90.7227 86.7773C95.1562 85.7422 97.6562 84.1016 98.0664 81.9922C98.3008 80.7227 98.2812 66.6602 98.0273 65.7422C97.5586 64.0234 95.0977 62.3437 91.8945 61.543C89.3555 60.918 87.6172 60.7227 84.4531 60.7227H81.4453V59.4336C81.4453 57.2656 80.3906 55.9961 77.5781 54.7461C75.2734 53.7305 72.7344 53.3008 68.457 53.2227C65.7812 53.1641 64.0625 53.2227 62.9883 53.3984ZM72.168 55.7617C75.7227 56.3086 78.5938 57.5 78.9844 58.6328C79.1406 59.082 79.1016 59.2578 78.6914 59.6875C77.793 60.6641 75.7812 61.4648 72.7539 62.0508C70.0977 62.5586 64.8047 62.5 62.1484 61.9336C59.0039 61.2695 56.6406 60.1367 56.3867 59.1797C56.0547 57.9297 59.1406 56.3867 63.1836 55.7422C65.3711 55.4102 69.8438 55.4102 72.168 55.7617ZM59.5703 63.7305C65.332 65.3711 73.3984 65.0391 77.8711 62.9883C78.457 62.7148 78.9844 62.5 79.0234 62.5C79.0625 62.5 79.1016 63.4961 79.1016 64.707C79.1016 66.875 79.082 66.9336 78.5742 67.4219C74.8828 70.8789 61.2305 70.918 56.9141 67.4805C56.3477 67.0312 56.3477 67.0117 56.2891 64.6484L56.2109 62.2852L57.3633 62.8516C57.9883 63.1641 58.9844 63.5547 59.5703 63.7305ZM89.1797 63.3789C92.6953 63.9844 95.5078 65.293 95.6641 66.3867C95.957 68.3594 88.8867 70.3711 83.0664 69.9805L81.4453 69.8633V66.4844V63.0859H84.4531C86.25 63.0859 88.1445 63.2031 89.1797 63.3789ZM56.7578 70.1172C57.0703 70.4297 59.5898 71.3086 61.3281 71.7187C63.7695 72.2852 69.4727 72.4219 72.4219 71.9922C74.8438 71.6211 76.7578 71.0937 78.1836 70.3906L79.1211 69.9023L79.0625 72.3047L79.0039 74.6875L78.1836 75.3125C76.0352 76.9531 70.4492 77.9102 65.3711 77.5195C60.957 77.1875 57.2461 75.918 56.4844 74.4727C56.2305 74.0039 56.1523 69.9219 56.4062 69.9219C56.4844 69.9219 56.6406 70 56.7578 70.1172ZM95.6641 72.4023L95.6055 74.6875L94.8047 75.293C93.0273 76.6602 88.9062 77.5391 84.3359 77.5391H81.4453V74.8828V72.207L82.9688 72.3437C86.25 72.6172 91.5039 71.8555 94.082 70.7422C94.8047 70.4102 95.4883 70.1562 95.5664 70.1367C95.6445 70.1172 95.6836 71.1523 95.6641 72.4023ZM58.1055 78.3008C60.6641 79.3945 63.0664 79.7656 67.5781 79.7852C70.1562 79.7852 72.1094 79.6875 73.0469 79.5117C74.7852 79.1992 77.3438 78.418 78.3789 77.9102L79.1016 77.5391V79.5898C79.1016 80.7422 79.0039 81.8359 78.9062 82.0312C78.4961 82.8125 76.1328 83.8672 73.4375 84.4922C71.6992 84.9023 65.957 85.0781 63.8477 84.7852C60.5859 84.3555 58.1641 83.5156 57.0117 82.4414L56.25 81.6992V79.5898C56.25 77.9883 56.3086 77.5195 56.5039 77.5977C56.6211 77.6562 57.3633 77.9687 58.1055 78.3008ZM95.2734 82.3633C94.668 83.0078 93.0273 83.75 90.8398 84.3359C89.082 84.8047 88.6719 84.8437 84.4336 84.8437C81.9531 84.8633 79.8438 84.7852 79.7656 84.707C79.668 84.6289 79.8438 84.3555 80.1172 84.1211C81.0547 83.3594 81.4453 82.4414 81.4453 81.0937V79.8828H84.3555C88.6719 79.8828 91.9141 79.3359 94.4336 78.1641L95.6055 77.6172L95.6641 79.7461C95.7031 81.7383 95.6836 81.9336 95.2734 82.3633Z"
                                            fill="#7F7F7F" />
                                    </svg>
                                    <span class="ml-1 text hoverlist" style="margin-top: -15px;">Clients
                                    </span></a></div>
                        </ul>
                    </li>
                    <li class="removable sidebar-h accounts ">
                        <a class=" text-black-50 d-flex flex-column align-items-center triangle-container"
                            href="#" aria-expanded="false">
                            <div class="mb-2 ">
                                {{-- <img class="hovercolor " src="/assets/admin/img/logo/report.png" alt="Description of the image"> --}}
                                {{-- <svg class="hovercolor" width="40" height="40" fill="currentColor"
                                    viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.1406 20.7031C13.9258 20.7812 13.6328 21.1133 13.4961 21.4258C13.3398 21.8359 13.2813 29.8047 13.3203 53.7695L13.3789 85.5859L13.8477 85.957C14.2969 86.3281 15.1367 86.3281 49.9219 86.3281C85.293 86.3281 85.5469 86.3281 85.9375 85.9375C86.4453 85.4297 86.4453 84.3555 85.9766 83.9258C85.6836 83.6523 85.1758 83.5938 83.1445 83.5938H80.6641V62.793V41.9727L80.1758 41.5039L79.707 41.0156H74.3164H68.9258L68.457 41.5039L67.9688 41.9727V62.6953V83.3984H66.4063H64.8438V66.6016V49.7852L64.3555 49.3164L63.8867 48.8281H58.4375C53.0078 48.8281 52.9883 48.8281 52.5781 49.2773L52.1484 49.7266V66.5625V83.3984H50.5859H49.0234V70.8008V58.1836L48.5352 57.7148L48.0664 57.2266H42.6758H37.2852L36.8164 57.7148L36.3281 58.1836V70.8984V83.5938H34.7656H33.2031V75.332V67.0508L32.7539 66.6406C32.3047 66.2109 32.168 66.2109 26.8164 66.2109H21.3086L20.918 66.7188C20.5273 67.2266 20.5078 67.4414 20.5078 75.4102V83.5938H18.3594H16.2109V52.5391V21.4648L15.7227 20.9961C15.2344 20.4883 14.8437 20.4102 14.1406 20.7031ZM77.9297 63.5742V83.3984H74.3164H70.7031V63.5742V43.75H74.3164H77.9297V63.5742ZM62.1094 67.5781V83.5938L58.5547 83.5547L54.9805 83.4961L54.9219 67.7734C54.9023 59.1211 54.9219 51.9336 54.9805 51.7969C55.0391 51.6211 55.957 51.5625 58.5938 51.5625H62.1094V67.5781ZM46.2891 71.875V83.5938L42.7344 83.5547L39.1602 83.4961L39.1016 71.8164L39.0625 60.1562H42.6758H46.2891V71.875ZM30.4687 76.1719V83.3984H26.8555H23.2422V76.1719V68.9453H26.8555H30.4687V76.1719Z" />
                                    <path
                                        d="M58.2617 28.5938C56.2891 29.1602 54.5703 29.7461 54.3945 29.8828C53.8281 30.3516 54.043 31.1133 54.9805 32.0312L55.8594 32.8906L54.8438 33.9453C50.5664 38.3008 43.9453 42.8516 37.5977 45.7422C35.2539 46.8164 31.7969 48.2422 30.5664 48.6328C29.4727 48.9844 28.9062 49.5508 28.9062 50.293C28.9062 51.0352 29.4141 51.5625 30.1367 51.5625C31.3086 51.5625 37.207 49.1406 41.6797 46.8164C46.8555 44.1211 51.3281 40.9961 55.6641 37.0508L57.9102 34.9805L58.7891 35.8594C59.7266 36.7578 60.4883 36.9727 60.9375 36.4258C61.3672 35.918 63.0859 28.6719 62.8711 28.2812C62.7148 27.9883 62.0703 27.5195 61.875 27.5586C61.8359 27.5586 60.2148 28.0273 58.2617 28.5938Z" />
                                </svg> --}}
                                <svg class="hovercolor" width="40" height="40" fill="currentColor"
                                    viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_312_2)">
                                        <path
                                            d="M38.3789 0.996094C33.2617 1.69922 29.1797 3.51562 26.1523 6.38672C22.6953 9.6875 20.8984 13.8281 20.5273 19.2578C20.3516 21.8359 20.5273 25.0586 20.9961 27.793L21.3281 29.7266L20.5469 30.5273C19.1406 32.0117 19.0039 33.4375 19.9414 37.2656C20.625 40.0391 21.25 41.8555 22.0117 43.1641C22.6953 44.3555 24.1602 45.8594 24.9023 46.0938C25.4492 46.2695 25.5664 46.4648 26.0547 48.0078C26.6992 49.9609 27.6367 52.0703 28.3789 53.2617C28.9062 54.082 28.9062 54.1016 28.9062 57.9688V61.8555L19.1992 65.625C13.8477 67.6953 8.76953 69.7461 7.92969 70.1953C6.81641 70.7617 5.9375 71.4062 4.90234 72.4609C3.20312 74.1406 2.16797 75.8008 1.40625 78.0273L0.878906 79.5898L0.820312 88.9062L0.761719 98.2422L1.25 98.7305L1.73828 99.2188H43.0273H84.3164L84.8438 98.8086L85.3516 98.418V93.457V88.4961L90.6836 88.4375C95.7617 88.3789 96.0352 88.3594 96.8164 87.9492C97.7148 87.4609 98.457 86.6016 98.9258 85.4883C99.1797 84.8633 99.2188 81.0547 99.2188 52.6172C99.2188 28.7695 99.1602 20.2539 98.9844 19.707C98.6914 18.7109 97.6367 17.4805 96.6016 16.9336L95.8008 16.5039L80.8984 16.4062L65.9961 16.3086L65.5469 15.0195C64.4531 11.9141 62.1484 9.72656 59.1016 8.96484C58.2617 8.75 58.1055 8.61328 57.2852 7.34375C55.1953 4.10156 52.3047 2.20703 48.0273 1.26953C46.2891 0.898438 40.3711 0.722656 38.3789 0.996094ZM47.7344 4.29688C50.9961 5.11719 54.1211 7.48047 55.4492 10.0977C56.0938 11.3867 56.1914 11.4453 58.3008 11.8164C59.4531 12.0117 60.4102 12.5781 61.2891 13.5938C63.7109 16.3281 63.8867 21.9336 61.7773 28.9453C61.1328 31.1328 61.25 31.7773 62.4023 32.2266C63.5547 32.6562 63.6719 32.7734 63.6719 33.457C63.6719 34.7461 62.3047 39.6289 61.4844 41.3086C60.8789 42.5195 60.1758 43.1641 59.4531 43.1641C58.4375 43.1641 58.0469 43.6719 57.5391 45.6055C55.918 51.6992 52.5391 56.4453 48.3789 58.457C44.707 60.2344 41.1328 60.2148 37.3047 58.3594C35.918 57.6953 35.3516 57.2656 33.7891 55.6836C31.2109 53.0664 29.6289 50.1758 28.3398 45.7227C28.0273 44.6094 27.6367 43.6133 27.5 43.5352C27.3633 43.4375 26.9727 43.3594 26.6406 43.3594C25.8008 43.3594 25.4883 43.0469 24.8242 41.6016C24.1797 40.1758 22.7344 35.5273 22.5391 34.2383C22.3828 33.2227 22.8125 32.4219 23.5156 32.4219C24.1211 32.4219 25.0586 31.3281 24.9414 30.7812C23.9453 26.2109 23.6328 23.9648 23.6328 21.25C23.6328 11.9922 28.3203 6.21094 37.4023 4.29688C39.9805 3.76953 45.6445 3.75 47.7344 4.29688ZM96.0352 19.7852C96.3672 20.1172 96.3867 21.6992 96.4453 51.9531C96.4648 73.2617 96.4258 83.7891 96.2891 83.7891C96.1914 83.7891 96.0938 83.9648 96.0938 84.1797C96.0938 84.3945 95.918 84.7461 95.7031 84.9609C95.332 85.332 95.0586 85.3516 90.3516 85.3516H85.3906L85.3125 82.3633C85.2344 79.7852 85.1562 79.1992 84.6875 77.832C83.6328 74.7461 81.3086 71.7969 78.7305 70.293C78.0664 69.9023 73.0078 67.832 67.4805 65.7227L57.4219 61.8555V58.0469V54.2578L58.5742 51.875C59.2188 50.5859 59.9609 48.7891 60.2539 47.9102C60.6836 46.582 60.8594 46.2891 61.2891 46.1328C62.6562 45.6641 64.2188 43.6328 65.2148 41.0352C66.0156 38.9648 66.9922 34.8438 66.9922 33.5547C66.9922 32.3438 66.2891 30.6836 65.5469 30.1953L65.0781 29.9023L65.5664 28.0859C66.1133 25.9375 66.543 23.3984 66.7188 21.0352L66.8555 19.3359L81.2695 19.375C94.8047 19.4336 95.7031 19.4531 96.0352 19.7852ZM34.8828 60.5469C37.5 62.2461 39.9609 62.9688 43.1641 62.9688C47.0703 62.9688 50.5664 61.582 53.4766 58.9062L54.3164 58.1445L54.2578 60.2734L54.1992 62.3828L48.7305 67.1289C45.7227 69.7266 43.1836 71.875 43.0859 71.875C43.0078 71.875 40.4297 69.7852 37.3828 67.2461L31.8359 62.5977V60.3711V58.1641L32.6367 58.8867C33.0664 59.2773 34.082 60.0195 34.8828 60.5469ZM58.2031 65.4492C58.9062 65.7422 59.4531 66.0742 59.4336 66.1523C59.3945 66.4062 55.4688 75.6445 55.3906 75.7422C55.2734 75.8398 46.8359 73.4375 46.6211 73.2422C46.5234 73.1641 48.6328 71.1914 51.2891 68.8672C55.1367 65.5273 56.2305 64.668 56.543 64.7656C56.7578 64.8438 57.5 65.1367 58.2031 65.4492ZM34.8828 69.0234C37.5195 71.25 39.6094 73.1641 39.5117 73.2422C39.1992 73.5156 30.4297 75.8203 30.293 75.6641C30.0781 75.4102 26.3086 66.1914 26.3867 66.1328C26.6211 65.957 29.6289 64.8633 29.8242 64.9023C29.9609 64.9219 32.2266 66.7773 34.8828 69.0234ZM69.1406 69.7266C72.5195 71.0352 75.7812 72.3438 76.3672 72.6172C78.5938 73.7109 80.8398 76.3672 81.6797 78.8867C82.0898 80.1172 82.1094 80.5859 82.1875 88.125L82.2656 96.0938H67.4219H52.5977L50.3125 89.5508C49.0234 85.8398 48.0859 82.8906 48.1836 82.7539C48.4961 82.2266 51.6016 78.3203 51.7969 78.2031C51.9141 78.125 53.0078 78.3203 54.2383 78.6328C56.2695 79.1406 56.5039 79.1602 56.9727 78.9062C57.4023 78.6719 57.8906 77.6758 59.6094 73.5352C62.3633 66.9141 62.2461 67.1289 62.6562 67.2461C62.832 67.2852 65.7617 68.3984 69.1406 69.7266ZM25.7812 73.0469C26.9727 75.8984 28.0859 78.418 28.2227 78.6523C28.6914 79.3555 29.4141 79.3555 31.9531 78.6523L34.3164 78.0078L36.1914 80.4102C37.2461 81.7383 38.0859 82.8906 38.0859 82.9883C38.0859 83.0664 37.0703 86.0156 35.8398 89.5508C34.6094 93.0859 33.5938 95.9961 33.5938 96.0352C33.5938 96.0742 26.9141 96.0938 18.75 96.0938H3.90625V88.418C3.90625 80.0195 3.94531 79.5703 5.07812 77.3633C5.76172 75.9766 7.46094 74.082 8.75 73.2617C10.1172 72.4023 23.3008 67.3438 23.4766 67.6367C23.5352 67.7734 24.5703 70.1953 25.7812 73.0469ZM46.0156 76.3086C47.4609 76.6992 48.6328 77.0703 48.6328 77.1484C48.6328 77.4414 47.3047 79.2578 46.2695 80.3711C45.6641 81.0156 45.0781 81.7383 44.9609 81.9531C44.6875 82.4805 44.9414 83.4961 46.0938 86.7188C46.543 87.9492 47.4805 90.5664 48.1641 92.5195L49.3945 96.0938H43.1641H36.9531L39.1797 89.5312C40.4102 85.9375 41.4062 82.7344 41.4062 82.4609C41.4062 82.0898 40.9961 81.4258 40.0391 80.2734C38.4766 78.3984 37.5977 77.1875 37.7148 77.0703C37.8125 76.9727 42.793 75.625 43.1445 75.6055C43.2812 75.5859 44.5898 75.8984 46.0156 76.3086Z" />
                                        <path
                                            d="M72.1875 26.9727C71.543 27.4805 71.4649 28.6914 72.0704 29.2969C72.4219 29.6484 72.7149 29.6875 74.5704 29.6875C76.1133 29.6875 76.7774 29.6094 77.0899 29.3945C77.9493 28.7891 77.8125 27.2266 76.836 26.7773C76.5625 26.6602 75.5274 26.5625 74.5313 26.5625C72.9883 26.5625 72.6368 26.6211 72.1875 26.9727Z" />
                                        <path
                                            d="M83.0469 26.875C82.793 27.0508 82.5195 27.4023 82.4219 27.6562C82.207 28.2227 82.5195 29.2383 83.0078 29.4922C83.2031 29.6094 84.9805 29.6875 86.9531 29.6875C89.8047 29.6875 90.625 29.6289 90.957 29.3945C91.8164 28.7891 91.6797 27.2266 90.7031 26.7773C90.3906 26.6406 88.9453 26.5625 86.8555 26.5625C84.082 26.5625 83.3984 26.6211 83.0469 26.875Z" />
                                        <path
                                            d="M72.4414 39.082C71.8164 39.3164 71.4062 40.1758 71.6015 40.8984C71.8164 41.7969 72.3437 41.9922 74.6093 41.9922C76.1132 41.9922 76.7773 41.9141 77.0898 41.6992C77.9492 41.0938 77.8125 39.5312 76.8359 39.082C76.25 38.8281 73.164 38.8281 72.4414 39.082Z" />
                                        <path
                                            d="M83.0469 39.1797C82.793 39.3555 82.5195 39.707 82.4219 39.9609C82.207 40.5273 82.5195 41.543 83.0078 41.7969C83.2031 41.9141 84.9805 41.9922 86.9531 41.9922C89.8047 41.9922 90.625 41.9336 90.957 41.6992C91.8164 41.0938 91.6797 39.5312 90.7031 39.082C90.3906 38.9453 88.9453 38.8672 86.8555 38.8672C84.082 38.8672 83.3984 38.9258 83.0469 39.1797Z" />
                                        <path
                                            d="M72.3242 51.4062C71.4062 51.8555 71.289 53.418 72.1289 54.0039C72.7148 54.4141 76.5039 54.4141 77.0898 54.0039C77.9492 53.3984 77.8124 51.8359 76.8359 51.3867C76.2304 51.1133 72.9101 51.1328 72.3242 51.4062Z" />
                                        <path
                                            d="M83.0469 51.4844C82.793 51.6602 82.5195 52.0117 82.4219 52.2656C82.207 52.832 82.5195 53.8477 83.0078 54.1016C83.2031 54.2188 85 54.2969 86.9727 54.2969C90.9961 54.2969 91.2891 54.2188 91.5234 52.9883C91.6211 52.4609 91.543 52.2656 91.0547 51.7578L90.4687 51.1719H86.9727C84.082 51.1719 83.3984 51.2305 83.0469 51.4844Z" />
                                        <path
                                            d="M82.7148 63.8672C82.207 64.4336 82.2656 65.6055 82.8125 66.0547C83.2031 66.3672 83.6914 66.4062 86.914 66.4062C90.2148 66.4062 90.625 66.3672 91.0351 66.0352C91.6015 65.5859 91.6406 64.4531 91.1133 63.8672C90.7812 63.4961 90.5468 63.4766 86.914 63.4766C83.2812 63.4766 83.0468 63.4961 82.7148 63.8672Z" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_312_2">
                                            <rect width="100" height="100" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div><span class="text mini-click-non hovercolor">Accounts</span></div>
                            <div class="triangle"></div>
                        </a>
                        <ul class="submenu-angle accountslist padding-top-accounts" aria-expanded="false">
                            <div class=" text-black-50 h hoverbg d-flex justify-content-start align-content-start"> <a
                                    class="left_margin  text-black-50 " href="{{ route('accounts') }}">
                                    {{-- <svg
                                        style="margin-top: -10px;" class="hoverlist" width="30" height="30"
                                        fill="currentColor" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.1406 20.7031C13.9258 20.7812 13.6328 21.1133 13.4961 21.4258C13.3398 21.8359 13.2813 29.8047 13.3203 53.7695L13.3789 85.5859L13.8477 85.957C14.2969 86.3281 15.1367 86.3281 49.9219 86.3281C85.293 86.3281 85.5469 86.3281 85.9375 85.9375C86.4453 85.4297 86.4453 84.3555 85.9766 83.9258C85.6836 83.6523 85.1758 83.5938 83.1445 83.5938H80.6641V62.793V41.9727L80.1758 41.5039L79.707 41.0156H74.3164H68.9258L68.457 41.5039L67.9688 41.9727V62.6953V83.3984H66.4063H64.8438V66.6016V49.7852L64.3555 49.3164L63.8867 48.8281H58.4375C53.0078 48.8281 52.9883 48.8281 52.5781 49.2773L52.1484 49.7266V66.5625V83.3984H50.5859H49.0234V70.8008V58.1836L48.5352 57.7148L48.0664 57.2266H42.6758H37.2852L36.8164 57.7148L36.3281 58.1836V70.8984V83.5938H34.7656H33.2031V75.332V67.0508L32.7539 66.6406C32.3047 66.2109 32.168 66.2109 26.8164 66.2109H21.3086L20.918 66.7188C20.5273 67.2266 20.5078 67.4414 20.5078 75.4102V83.5938H18.3594H16.2109V52.5391V21.4648L15.7227 20.9961C15.2344 20.4883 14.8437 20.4102 14.1406 20.7031ZM77.9297 63.5742V83.3984H74.3164H70.7031V63.5742V43.75H74.3164H77.9297V63.5742ZM62.1094 67.5781V83.5938L58.5547 83.5547L54.9805 83.4961L54.9219 67.7734C54.9023 59.1211 54.9219 51.9336 54.9805 51.7969C55.0391 51.6211 55.957 51.5625 58.5938 51.5625H62.1094V67.5781ZM46.2891 71.875V83.5938L42.7344 83.5547L39.1602 83.4961L39.1016 71.8164L39.0625 60.1562H42.6758H46.2891V71.875ZM30.4687 76.1719V83.3984H26.8555H23.2422V76.1719V68.9453H26.8555H30.4687V76.1719Z" />
                                        <path
                                            d="M58.2617 28.5938C56.2891 29.1602 54.5703 29.7461 54.3945 29.8828C53.8281 30.3516 54.043 31.1133 54.9805 32.0312L55.8594 32.8906L54.8438 33.9453C50.5664 38.3008 43.9453 42.8516 37.5977 45.7422C35.2539 46.8164 31.7969 48.2422 30.5664 48.6328C29.4727 48.9844 28.9062 49.5508 28.9062 50.293C28.9062 51.0352 29.4141 51.5625 30.1367 51.5625C31.3086 51.5625 37.207 49.1406 41.6797 46.8164C46.8555 44.1211 51.3281 40.9961 55.6641 37.0508L57.9102 34.9805L58.7891 35.8594C59.7266 36.7578 60.4883 36.9727 60.9375 36.4258C61.3672 35.918 63.0859 28.6719 62.8711 28.2812C62.7148 27.9883 62.0703 27.5195 61.875 27.5586C61.8359 27.5586 60.2148 28.0273 58.2617 28.5938Z" />
                                    </svg> --}}
                                    <svg style="margin-top: -8px;" class="hoverlist" width="30" height="20"
                                        fill="currentColor" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.7891 3.33984C12.5781 3.63281 10.8008 4.66797 9.94141 5.60547C9.51172 6.07422 8.86719 7.05078 8.53516 7.77344L7.91016 9.08203L7.85156 16.543L7.79297 24.0234L8.28125 24.5117L8.76953 25H14.5313H20.3125L20.3516 57.9688L20.4102 90.9375L21.1328 92.4219C22.0117 94.1992 23.1445 95.293 24.9609 96.1523L26.2695 96.7773H56.2695H86.25L87.7344 96.0547C89.5117 95.1758 90.6055 94.043 91.4649 92.2266L92.0899 90.918L92.1484 85.8008L92.207 80.6836L91.7188 80.1758C91.25 79.707 91.1524 79.6875 88.5938 79.6875H85.9375L85.8984 44.375L85.8399 9.08203L85.2149 7.77344C84.3555 5.95703 83.2617 4.82422 81.4844 3.94531L80 3.22266L47.2852 3.18359C27.9492 3.18359 14.2383 3.24219 13.7891 3.33984ZM17.0703 6.48438C18.1445 6.79688 19.7656 8.41797 20.0781 9.49219C20.2344 10.0391 20.3125 12.1094 20.3125 16.0938V21.875H15.625H10.9375V16.0938C10.9375 12.1094 11.0156 10.0391 11.1719 9.49219C11.4648 8.49609 13.1055 6.81641 14.0625 6.50391C15 6.21094 16.1133 6.21094 17.0703 6.48438ZM79.5703 6.48438C80.6445 6.79688 82.2656 8.41797 82.5781 9.49219C82.7539 10.1172 82.8125 18.3203 82.8125 45V79.6875H58.3008H33.7695L33.3008 80.1758L32.8125 80.6445V85.1758C32.8125 88.1641 32.7344 89.9805 32.5781 90.5078C32.0703 92.1875 29.9219 93.75 28.125 93.75C26.5039 93.75 24.6484 92.5781 23.9063 91.0742C23.5547 90.3516 23.5352 88.9453 23.4375 49.6875L23.3398 9.0625L22.6367 7.65625L21.9531 6.25H50.3516C72.0898 6.25 78.9453 6.30859 79.5703 6.48438ZM89.0625 86.25C89.0625 88.3984 88.9649 90 88.8281 90.5078C88.5156 91.582 86.8945 93.2031 85.8203 93.5156C85.1953 93.6914 79.0039 93.75 59.7266 93.75H34.4531L35.1367 92.3438L35.8398 90.9375L35.8984 86.875L35.9766 82.8125H62.5195H89.0625V86.25Z" />
                                        <path
                                            d="M29.6875 12.5V14.0625H34.375H39.0625V12.5V10.9375H34.375H29.6875V12.5Z" />
                                        <path
                                            d="M42.1875 12.5V14.0625H43.75H45.3125V12.5V10.9375H43.75H42.1875V12.5Z" />
                                        <path
                                            d="M67.1875 12.5V14.0625H68.75H70.3125V12.5V10.9375H68.75H67.1875V12.5Z" />
                                        <path d="M73.4375 12.5V14.0625H75H76.5625V12.5V10.9375H75H73.4375V12.5Z" />
                                        <path
                                            d="M42.1875 21.875V23.4375H46.875H51.5625V21.875V20.3125H46.875H42.1875V21.875Z" />
                                        <path
                                            d="M54.6875 21.875V23.4375H59.375H64.0625V21.875V20.3125H59.375H54.6875V21.875Z" />
                                        <path
                                            d="M28.6133 27.0508L28.125 27.5195V50V72.4805L28.6133 72.9492L29.082 73.4375H53.125H77.168L77.6367 72.9492L78.125 72.4805V50V27.5195L77.6367 27.0508L77.168 26.5625H53.125H29.082L28.6133 27.0508ZM50 32.8125V35.9375H40.625H31.25V32.8125V29.6875H40.625H50V32.8125ZM62.5 32.8125V35.9375H57.8125H53.125V32.8125V29.6875H57.8125H62.5V32.8125ZM75 32.8125V35.9375H70.3125H65.625V32.8125V29.6875H70.3125H75V32.8125ZM50 54.6875V70.3125H40.625H31.25V54.6875V39.0625H40.625H50V54.6875ZM62.5 54.6875V70.3125H57.8125H53.125V54.6875V39.0625H57.8125H62.5V54.6875ZM75 54.6875V70.3125H70.3125H65.625V54.6875V39.0625H70.3125H75V54.6875Z" />
                                        <path
                                            d="M34.375 43.75V45.3125H35.9375H37.5V43.75V42.1875H35.9375H34.375V43.75Z" />
                                        <path
                                            d="M40.625 43.75V45.3125H43.75H46.875V43.75V42.1875H43.75H40.625V43.75Z" />
                                    </svg>
                                    <span class="ml-1 text hoverlist" style="margin-top: -15px;">Accounting Reports
                                    </span></a></div>
                        </ul>
                    </li>
                    <li class="removable sidebar-h reports mb-5">
                        <a class=" text-black-50 d-flex flex-column align-items-center triangle-container"
                            href="#" aria-expanded="false">
                            <div class="mb-2 ">
                                {{-- <img class="hovercolor " src="/assets/admin/img/logo/report.png" alt="Description of the image"> --}}
                                <svg class="hovercolor" width="40" height="40" fill="currentColor"
                                    viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.1406 20.7031C13.9258 20.7812 13.6328 21.1133 13.4961 21.4258C13.3398 21.8359 13.2813 29.8047 13.3203 53.7695L13.3789 85.5859L13.8477 85.957C14.2969 86.3281 15.1367 86.3281 49.9219 86.3281C85.293 86.3281 85.5469 86.3281 85.9375 85.9375C86.4453 85.4297 86.4453 84.3555 85.9766 83.9258C85.6836 83.6523 85.1758 83.5938 83.1445 83.5938H80.6641V62.793V41.9727L80.1758 41.5039L79.707 41.0156H74.3164H68.9258L68.457 41.5039L67.9688 41.9727V62.6953V83.3984H66.4063H64.8438V66.6016V49.7852L64.3555 49.3164L63.8867 48.8281H58.4375C53.0078 48.8281 52.9883 48.8281 52.5781 49.2773L52.1484 49.7266V66.5625V83.3984H50.5859H49.0234V70.8008V58.1836L48.5352 57.7148L48.0664 57.2266H42.6758H37.2852L36.8164 57.7148L36.3281 58.1836V70.8984V83.5938H34.7656H33.2031V75.332V67.0508L32.7539 66.6406C32.3047 66.2109 32.168 66.2109 26.8164 66.2109H21.3086L20.918 66.7188C20.5273 67.2266 20.5078 67.4414 20.5078 75.4102V83.5938H18.3594H16.2109V52.5391V21.4648L15.7227 20.9961C15.2344 20.4883 14.8437 20.4102 14.1406 20.7031ZM77.9297 63.5742V83.3984H74.3164H70.7031V63.5742V43.75H74.3164H77.9297V63.5742ZM62.1094 67.5781V83.5938L58.5547 83.5547L54.9805 83.4961L54.9219 67.7734C54.9023 59.1211 54.9219 51.9336 54.9805 51.7969C55.0391 51.6211 55.957 51.5625 58.5938 51.5625H62.1094V67.5781ZM46.2891 71.875V83.5938L42.7344 83.5547L39.1602 83.4961L39.1016 71.8164L39.0625 60.1562H42.6758H46.2891V71.875ZM30.4687 76.1719V83.3984H26.8555H23.2422V76.1719V68.9453H26.8555H30.4687V76.1719Z" />
                                    <path
                                        d="M58.2617 28.5938C56.2891 29.1602 54.5703 29.7461 54.3945 29.8828C53.8281 30.3516 54.043 31.1133 54.9805 32.0312L55.8594 32.8906L54.8438 33.9453C50.5664 38.3008 43.9453 42.8516 37.5977 45.7422C35.2539 46.8164 31.7969 48.2422 30.5664 48.6328C29.4727 48.9844 28.9062 49.5508 28.9062 50.293C28.9062 51.0352 29.4141 51.5625 30.1367 51.5625C31.3086 51.5625 37.207 49.1406 41.6797 46.8164C46.8555 44.1211 51.3281 40.9961 55.6641 37.0508L57.9102 34.9805L58.7891 35.8594C59.7266 36.7578 60.4883 36.9727 60.9375 36.4258C61.3672 35.918 63.0859 28.6719 62.8711 28.2812C62.7148 27.9883 62.0703 27.5195 61.875 27.5586C61.8359 27.5586 60.2148 28.0273 58.2617 28.5938Z" />
                                </svg>
                            </div>
                            <div><span class="text mini-click-non hovercolor">Reports</span></div>
                            <div class="triangle"></div>
                        </a>
                        <ul class="submenu-angle reportslist padding-top-reports" aria-expanded="false">
                            <div class=" text-black-50 h hoverbg d-flex justify-content-start align-content-start"> <a
                                    class="left_margin  text-black-50 " href="{{ route('project/report') }}"><svg
                                        style="margin-top: -10px;" class="hoverlist" width="30" height="30"
                                        fill="currentColor" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.1406 20.7031C13.9258 20.7812 13.6328 21.1133 13.4961 21.4258C13.3398 21.8359 13.2813 29.8047 13.3203 53.7695L13.3789 85.5859L13.8477 85.957C14.2969 86.3281 15.1367 86.3281 49.9219 86.3281C85.293 86.3281 85.5469 86.3281 85.9375 85.9375C86.4453 85.4297 86.4453 84.3555 85.9766 83.9258C85.6836 83.6523 85.1758 83.5938 83.1445 83.5938H80.6641V62.793V41.9727L80.1758 41.5039L79.707 41.0156H74.3164H68.9258L68.457 41.5039L67.9688 41.9727V62.6953V83.3984H66.4063H64.8438V66.6016V49.7852L64.3555 49.3164L63.8867 48.8281H58.4375C53.0078 48.8281 52.9883 48.8281 52.5781 49.2773L52.1484 49.7266V66.5625V83.3984H50.5859H49.0234V70.8008V58.1836L48.5352 57.7148L48.0664 57.2266H42.6758H37.2852L36.8164 57.7148L36.3281 58.1836V70.8984V83.5938H34.7656H33.2031V75.332V67.0508L32.7539 66.6406C32.3047 66.2109 32.168 66.2109 26.8164 66.2109H21.3086L20.918 66.7188C20.5273 67.2266 20.5078 67.4414 20.5078 75.4102V83.5938H18.3594H16.2109V52.5391V21.4648L15.7227 20.9961C15.2344 20.4883 14.8437 20.4102 14.1406 20.7031ZM77.9297 63.5742V83.3984H74.3164H70.7031V63.5742V43.75H74.3164H77.9297V63.5742ZM62.1094 67.5781V83.5938L58.5547 83.5547L54.9805 83.4961L54.9219 67.7734C54.9023 59.1211 54.9219 51.9336 54.9805 51.7969C55.0391 51.6211 55.957 51.5625 58.5938 51.5625H62.1094V67.5781ZM46.2891 71.875V83.5938L42.7344 83.5547L39.1602 83.4961L39.1016 71.8164L39.0625 60.1562H42.6758H46.2891V71.875ZM30.4687 76.1719V83.3984H26.8555H23.2422V76.1719V68.9453H26.8555H30.4687V76.1719Z" />
                                        <path
                                            d="M58.2617 28.5938C56.2891 29.1602 54.5703 29.7461 54.3945 29.8828C53.8281 30.3516 54.043 31.1133 54.9805 32.0312L55.8594 32.8906L54.8438 33.9453C50.5664 38.3008 43.9453 42.8516 37.5977 45.7422C35.2539 46.8164 31.7969 48.2422 30.5664 48.6328C29.4727 48.9844 28.9062 49.5508 28.9062 50.293C28.9062 51.0352 29.4141 51.5625 30.1367 51.5625C31.3086 51.5625 37.207 49.1406 41.6797 46.8164C46.8555 44.1211 51.3281 40.9961 55.6641 37.0508L57.9102 34.9805L58.7891 35.8594C59.7266 36.7578 60.4883 36.9727 60.9375 36.4258C61.3672 35.918 63.0859 28.6719 62.8711 28.2812C62.7148 27.9883 62.0703 27.5195 61.875 27.5586C61.8359 27.5586 60.2148 28.0273 58.2617 28.5938Z" />
                                    </svg><span class="ml-1 text hoverlist" style="margin-top: -15px;">Project Report
                                    </span></a></div>
                            {{-- <div class=" text-black-50 h hoverbg d-flex justify-content-start"> <a
                                    class="left_margin text-black-50 pb-2 "  href="#"><svg style="margin-top: -7px;" class="hoverlist" width="30" height="30" viewBox="0 0 260 255" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M117.5 53.4999C140.572 51.1392 161.072 57.1392 179 71.4999C179.333 68.4999 179.667 65.4999 180 62.4999C181.587 61.2729 182.921 61.6062 184 63.4999C184.667 68.4999 184.667 73.4999 184 78.4999C178.259 79.4748 172.425 79.8081 166.5 79.4999C166.286 77.856 166.62 76.356 167.5 74.9999C173.163 75.4191 174.163 74.0857 170.5 70.9999C141.112 53.4273 112.445 54.4273 84.5004 73.9999C55.813 101.062 50.4797 132.229 68.5004 167.5C68.4735 169.704 67.4735 170.538 65.5004 170C63.0443 167.592 61.211 164.759 60.0004 161.5C45.9172 125.335 53.4172 94.5011 82.5004 68.9999C93.0414 61.0579 104.708 55.8912 117.5 53.4999Z" fill="#7f7f7f"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M122.5 80.5C149.759 79.6123 167.926 91.9456 177 117.5C177.977 120.259 177.144 122.259 174.5 123.5C173.522 123.023 172.689 122.357 172 121.5C166.429 98.7915 151.929 87.1248 128.5 86.5C105.701 88.1208 91.5345 100.121 86 122.5C83.6936 123.582 82.1936 122.748 81.5 120C87.5475 98.7836 101.214 85.6169 122.5 80.5Z" fill="#7f7f7f"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M142.5 111.5C151.215 111.299 154.382 115.299 152 123.5C144.5 131 137 138.5 129.5 146C126.97 147.422 124.303 147.755 121.5 147C117 142.5 112.5 138 108 133.5C105.266 124.895 108.433 121.062 117.5 122C120.295 123.793 122.795 125.96 125 128.5C130.729 122.603 136.562 116.936 142.5 111.5Z" fill="#7f7f7f"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M143.5 116.5C144.833 116.5 146.167 116.5 147.5 116.5C147.66 118.199 147.494 119.866 147 121.5C139.958 128.877 132.624 135.877 125 142.5C120.378 138.881 116.045 134.881 112 130.5C111.167 127.333 112.333 126.167 115.5 127C117.833 129.333 120.167 131.667 122.5 134C123.833 134.667 125.167 134.667 126.5 134C132.37 128.298 138.036 122.465 143.5 116.5Z" fill="#7f7f7f"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M191.5 88.5C193.371 88.8588 194.871 89.8588 196 91.5C209.431 119.014 208.431 146.014 193 172.5C168.315 203.28 137.148 212.447 99.5002 200C92.4062 196.706 85.9062 192.54 80.0002 187.5C79.6669 190.5 79.3335 193.5 79.0002 196.5C77.4128 197.727 76.0795 197.394 75.0002 195.5C74.1965 190.249 74.3632 185.082 75.5002 180C81.1571 179.501 86.8238 179.334 92.5002 179.5C92.7137 181.144 92.3804 182.644 91.5002 184C85.8374 183.581 84.8374 184.914 88.5002 188C114.402 203.949 140.735 204.616 167.5 190C197.194 167.917 206.694 139.084 196 103.5C194.333 100.167 192.667 96.8333 191 93.5C190.36 91.735 190.527 90.0683 191.5 88.5Z" fill="#7f7f7f"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M83.5 135.5C85.0174 135.511 86.1841 136.177 87 137.5C94.2028 163.682 111.37 175.182 138.5 172C156.77 167.397 167.936 155.897 172 137.5C174.514 134.823 176.347 135.323 177.5 139C168.246 168.308 148.246 180.975 117.5 177C98.426 170.76 86.426 157.927 81.5 138.5C82.1925 137.482 82.8592 136.482 83.5 135.5Z" fill="#7f7f7f"/>
                                        </svg><span class="ml-1 text hoverlist" style="margin-top: -60px;">Receivables</span></a>
                            </div> --}}
                            {{-- <div class=" text-black-50 h hoverbg d-flex justify-content-start"> <a
                                    class="left_margin text-black-50 pb-2" href="#"><svg
                                        style="margin-top: -7px;" class="hoverlist" width="30" height="25"
                                        viewBox="0 0 200 200" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.889" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M58.4998 61.5C64.8419 61.3338 71.1752 61.5005 77.4998 62C82.3209 65.601 82.6543 69.601 78.4998 74C71.4998 74.6667 64.4998 74.6667 57.4998 74C54.5982 69.5015 54.9315 65.3348 58.4998 61.5Z"
                                            fill="#7f7f7f" />
                                        <path opacity="0.881" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M58.4995 80.5C63.6273 80.1115 68.6273 80.6115 73.4995 82C74.6163 85.0731 74.783 88.2397 73.9995 91.5C73.2491 92.1258 72.4157 92.6258 71.4995 93C67.1662 93.6667 62.8328 93.6667 58.4995 93C54.5574 88.7905 54.5574 84.6239 58.4995 80.5Z"
                                            fill="#7f7f7f" />
                                        <path opacity="0.888" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M164.5 80.5001C167.649 80.2115 170.649 80.7115 173.5 82.0001C178.367 86.5324 182.867 91.3657 187 96.5001C187.755 99.3034 187.422 101.97 186 104.5C181.833 108.667 177.667 112.833 173.5 117C169.206 119.386 165.373 118.886 162 115.5C161.022 112.331 161.522 109.497 163.5 107C151.5 106.667 139.5 106.333 127.5 106C124.606 103.091 123.773 99.5914 125 95.5001C125.903 94.2987 127.069 93.4653 128.5 93.0001C140.167 92.6668 151.833 92.3334 163.5 92.0001C160.681 87.8988 161.014 84.0655 164.5 80.5001Z"
                                            fill="#7f7f7f" />
                                        <path opacity="0.877" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M57.5004 99.5001C62.5115 99.3342 67.5115 99.5008 72.5004 100C75.4309 104.3 75.0975 108.3 71.5004 112C67.1671 112.667 62.8337 112.667 58.5004 112C54.8379 108.173 54.5046 104.006 57.5004 99.5001Z"
                                            fill="#7f7f7f" />
                                        <path opacity="0.841" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M59.4995 117.5C63.5133 117.334 67.5133 117.501 71.4995 118C74.3934 120.909 75.2267 124.409 73.9995 128.5C73.097 129.701 71.9303 130.535 70.4995 131C66.0437 131.867 61.7104 131.534 57.4995 130C55.4958 127.159 54.9958 123.993 55.9995 120.5C57.1446 119.364 58.3112 118.364 59.4995 117.5Z"
                                            fill="#7f7f7f" />
                                        <path opacity="0.918" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M58.4998 136.5C69.1717 136.333 79.8383 136.5 90.4998 137C94.1149 140.659 94.4483 144.659 91.4998 149C80.1665 149.667 68.8331 149.667 57.4998 149C54.5982 144.501 54.9315 140.335 58.4998 136.5Z"
                                            fill="#7f7f7f" />
                                        <path opacity="0.938" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M58.4995 155.5C77.5024 155.333 96.5024 155.5 115.5 156C119.489 159.955 119.489 163.955 115.5 168C96.4995 168.667 77.4995 168.667 58.4995 168C54.5574 163.791 54.5574 159.624 58.4995 155.5Z"
                                            fill="#7f7f7f" />
                                        <path opacity="0.948" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.5 11.5C53.5014 11.3333 93.5014 11.5 133.5 12C134.333 12.8333 135.167 13.6667 136 14.5C136.667 37.8333 136.667 61.1667 136 84.5C132 88.5 128 88.5 124 84.5C123.5 75.1726 123.334 65.8393 123.5 56.5C98.5 56.5 73.5 56.5 48.5 56.5C48.5 95.8333 48.5 135.167 48.5 174.5C73.5 174.5 98.5 174.5 123.5 174.5C123.167 154.156 123.5 133.822 124.5 113.5C128.642 110.593 132.476 110.926 136 114.5C136.667 137.833 136.667 161.167 136 184.5C135.167 185.333 134.333 186.167 133.5 187C93.5 187.667 53.5 187.667 13.5 187C12.6667 186.167 11.8333 185.333 11 184.5C10.3333 127.833 10.3333 71.1667 11 14.5C12.045 13.6266 12.8783 12.6266 13.5 11.5ZM23.5 24.5C27.5 24.5 31.5 24.5 35.5 24.5C35.5 30.5 35.5 36.5 35.5 42.5C31.5 42.5 27.5 42.5 23.5 42.5C23.5 36.5 23.5 30.5 23.5 24.5ZM48.5 24.5C73.5 24.5 98.5 24.5 123.5 24.5C123.5 30.5 123.5 36.5 123.5 42.5C98.5 42.5 73.5 42.5 48.5 42.5C48.5 36.5 48.5 30.5 48.5 24.5ZM23.5 56.5C27.5 56.5 31.5 56.5 35.5 56.5C35.5 95.8333 35.5 135.167 35.5 174.5C31.5 174.5 27.5 174.5 23.5 174.5C23.5 135.167 23.5 95.8333 23.5 56.5Z"
                                            fill="#7f7f7f" />
                                        <path
                                            d="M77.6271 31.2045C77.5779 31.0038 77.5002 30.8277 77.3942 30.6761C77.2881 30.5208 77.1555 30.3902 76.9964 30.2841C76.8411 30.1742 76.6593 30.0928 76.451 30.0398C76.2464 29.983 76.0211 29.9545 75.7749 29.9545C75.2446 29.9545 74.7919 30.0814 74.4169 30.3352C74.0457 30.589 73.7616 30.9545 73.5646 31.4318C73.3714 31.9091 73.2749 32.4848 73.2749 33.1591C73.2749 33.8409 73.3677 34.4242 73.5533 34.9091C73.7389 35.3939 74.0154 35.7652 74.3828 36.0227C74.7502 36.2803 75.2067 36.4091 75.7521 36.4091C76.2332 36.4091 76.6328 36.339 76.951 36.1989C77.273 36.0587 77.5135 35.8598 77.6726 35.6023C77.8317 35.3447 77.9112 35.0417 77.9112 34.6932L78.4567 34.75H75.7976V32.5H80.9567V34.1136C80.9567 35.1742 80.7313 36.0814 80.2805 36.8352C79.8336 37.5852 79.2161 38.161 78.4283 38.5625C77.6442 38.9602 76.7446 39.1591 75.7294 39.1591C74.5968 39.1591 73.6025 38.9186 72.7464 38.4375C71.8904 37.9564 71.2218 37.2708 70.7408 36.3807C70.2635 35.4905 70.0249 34.4318 70.0249 33.2045C70.0249 32.2424 70.1707 31.3902 70.4624 30.6477C70.7578 29.9053 71.1669 29.2784 71.6896 28.767C72.2124 28.2519 72.8165 27.8636 73.5021 27.6023C74.1877 27.3371 74.9226 27.2045 75.7067 27.2045C76.3961 27.2045 77.0362 27.303 77.6271 27.5C78.2218 27.6932 78.7464 27.9697 79.201 28.3295C79.6593 28.6856 80.0286 29.108 80.3089 29.5966C80.5893 30.0852 80.7597 30.6212 80.8203 31.2045H77.6271ZM90.4297 39V27.3636H93.5888V31.9091H97.7706V27.3636H100.93V39H97.7706V34.4545H93.5888V39H90.4297Z"
                                            fill="#7f7f7f" />
                                    </svg><span class="ml-1 text hoverlist"
                                        style="margin-top: -15px;">Payables</span></a></div> --}}
                            <div class=" text-black-50 h hoverbg d-flex justify-content-start"> <a
                                    class="left_margin text-black-50 pb-2" href="{{ route('expense/report') }}">
                                    <svg style="margin-top: -7px;" class="hoverlist" width="30" height="25"
                                        viewBox="0 0 200 200" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.889" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M58.4998 61.5C64.8419 61.3338 71.1752 61.5005 77.4998 62C82.3209 65.601 82.6543 69.601 78.4998 74C71.4998 74.6667 64.4998 74.6667 57.4998 74C54.5982 69.5015 54.9315 65.3348 58.4998 61.5Z"
                                            fill="#7f7f7f" />
                                        <path opacity="0.881" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M58.4995 80.5C63.6273 80.1115 68.6273 80.6115 73.4995 82C74.6163 85.0731 74.783 88.2397 73.9995 91.5C73.2491 92.1258 72.4157 92.6258 71.4995 93C67.1662 93.6667 62.8328 93.6667 58.4995 93C54.5574 88.7905 54.5574 84.6239 58.4995 80.5Z"
                                            fill="#7f7f7f" />
                                        <path opacity="0.888" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M164.5 80.5001C167.649 80.2115 170.649 80.7115 173.5 82.0001C178.367 86.5324 182.867 91.3657 187 96.5001C187.755 99.3034 187.422 101.97 186 104.5C181.833 108.667 177.667 112.833 173.5 117C169.206 119.386 165.373 118.886 162 115.5C161.022 112.331 161.522 109.497 163.5 107C151.5 106.667 139.5 106.333 127.5 106C124.606 103.091 123.773 99.5914 125 95.5001C125.903 94.2987 127.069 93.4653 128.5 93.0001C140.167 92.6668 151.833 92.3334 163.5 92.0001C160.681 87.8988 161.014 84.0655 164.5 80.5001Z"
                                            fill="#7f7f7f" />
                                        <path opacity="0.877" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M57.5004 99.5001C62.5115 99.3342 67.5115 99.5008 72.5004 100C75.4309 104.3 75.0975 108.3 71.5004 112C67.1671 112.667 62.8337 112.667 58.5004 112C54.8379 108.173 54.5046 104.006 57.5004 99.5001Z"
                                            fill="#7f7f7f" />
                                        <path opacity="0.841" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M59.4995 117.5C63.5133 117.334 67.5133 117.501 71.4995 118C74.3934 120.909 75.2267 124.409 73.9995 128.5C73.097 129.701 71.9303 130.535 70.4995 131C66.0437 131.867 61.7104 131.534 57.4995 130C55.4958 127.159 54.9958 123.993 55.9995 120.5C57.1446 119.364 58.3112 118.364 59.4995 117.5Z"
                                            fill="#7f7f7f" />
                                        <path opacity="0.918" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M58.4998 136.5C69.1717 136.333 79.8383 136.5 90.4998 137C94.1149 140.659 94.4483 144.659 91.4998 149C80.1665 149.667 68.8331 149.667 57.4998 149C54.5982 144.501 54.9315 140.335 58.4998 136.5Z"
                                            fill="#7f7f7f" />
                                        <path opacity="0.938" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M58.4995 155.5C77.5024 155.333 96.5024 155.5 115.5 156C119.489 159.955 119.489 163.955 115.5 168C96.4995 168.667 77.4995 168.667 58.4995 168C54.5574 163.791 54.5574 159.624 58.4995 155.5Z"
                                            fill="#7f7f7f" />
                                        <path opacity="0.948" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.5 11.5C53.5014 11.3333 93.5014 11.5 133.5 12C134.333 12.8333 135.167 13.6667 136 14.5C136.667 37.8333 136.667 61.1667 136 84.5C132 88.5 128 88.5 124 84.5C123.5 75.1726 123.334 65.8393 123.5 56.5C98.5 56.5 73.5 56.5 48.5 56.5C48.5 95.8333 48.5 135.167 48.5 174.5C73.5 174.5 98.5 174.5 123.5 174.5C123.167 154.156 123.5 133.822 124.5 113.5C128.642 110.593 132.476 110.926 136 114.5C136.667 137.833 136.667 161.167 136 184.5C135.167 185.333 134.333 186.167 133.5 187C93.5 187.667 53.5 187.667 13.5 187C12.6667 186.167 11.8333 185.333 11 184.5C10.3333 127.833 10.3333 71.1667 11 14.5C12.045 13.6266 12.8783 12.6266 13.5 11.5ZM23.5 24.5C27.5 24.5 31.5 24.5 35.5 24.5C35.5 30.5 35.5 36.5 35.5 42.5C31.5 42.5 27.5 42.5 23.5 42.5C23.5 36.5 23.5 30.5 23.5 24.5ZM48.5 24.5C73.5 24.5 98.5 24.5 123.5 24.5C123.5 30.5 123.5 36.5 123.5 42.5C98.5 42.5 73.5 42.5 48.5 42.5C48.5 36.5 48.5 30.5 48.5 24.5ZM23.5 56.5C27.5 56.5 31.5 56.5 35.5 56.5C35.5 95.8333 35.5 135.167 35.5 174.5C31.5 174.5 27.5 174.5 23.5 174.5C23.5 135.167 23.5 95.8333 23.5 56.5Z"
                                            fill="#7f7f7f" />
                                        <path
                                            d="M77.6271 31.2045C77.5779 31.0038 77.5002 30.8277 77.3942 30.6761C77.2881 30.5208 77.1555 30.3902 76.9964 30.2841C76.8411 30.1742 76.6593 30.0928 76.451 30.0398C76.2464 29.983 76.0211 29.9545 75.7749 29.9545C75.2446 29.9545 74.7919 30.0814 74.4169 30.3352C74.0457 30.589 73.7616 30.9545 73.5646 31.4318C73.3714 31.9091 73.2749 32.4848 73.2749 33.1591C73.2749 33.8409 73.3677 34.4242 73.5533 34.9091C73.7389 35.3939 74.0154 35.7652 74.3828 36.0227C74.7502 36.2803 75.2067 36.4091 75.7521 36.4091C76.2332 36.4091 76.6328 36.339 76.951 36.1989C77.273 36.0587 77.5135 35.8598 77.6726 35.6023C77.8317 35.3447 77.9112 35.0417 77.9112 34.6932L78.4567 34.75H75.7976V32.5H80.9567V34.1136C80.9567 35.1742 80.7313 36.0814 80.2805 36.8352C79.8336 37.5852 79.2161 38.161 78.4283 38.5625C77.6442 38.9602 76.7446 39.1591 75.7294 39.1591C74.5968 39.1591 73.6025 38.9186 72.7464 38.4375C71.8904 37.9564 71.2218 37.2708 70.7408 36.3807C70.2635 35.4905 70.0249 34.4318 70.0249 33.2045C70.0249 32.2424 70.1707 31.3902 70.4624 30.6477C70.7578 29.9053 71.1669 29.2784 71.6896 28.767C72.2124 28.2519 72.8165 27.8636 73.5021 27.6023C74.1877 27.3371 74.9226 27.2045 75.7067 27.2045C76.3961 27.2045 77.0362 27.303 77.6271 27.5C78.2218 27.6932 78.7464 27.9697 79.201 28.3295C79.6593 28.6856 80.0286 29.108 80.3089 29.5966C80.5893 30.0852 80.7597 30.6212 80.8203 31.2045H77.6271ZM90.4297 39V27.3636H93.5888V31.9091H97.7706V27.3636H100.93V39H97.7706V34.4545H93.5888V39H90.4297Z"
                                            fill="#7f7f7f" />
                                    </svg><span class="ml-1 text hoverlist" style="margin-top: -15px;">Expense
                                        Report</span></a></div>
                            <div class=" text-black-50 h hoverbg d-flex justify-content-start"> <a
                                    class="left_margin text-black-50 pb-2" href="{{ route('p_&_l') }}">
                                    <svg class="hoverlist"style="margin-top: -7px;" width="30" height="25"
                                        viewBox="0 0 683 683" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M153.334 172V306.667L192.401 306.4L231.334 306L231.734 171.6L232.001 37.3336H192.667H153.334V172ZM206.401 171.6L206.001 280.667L192.401 281.067L178.667 281.467V172V62.667H192.667H206.667L206.401 171.6Z"
                                            fill="#7f7f7f" />
                                        <path
                                            d="M250.001 77.6003C249.601 78.5336 249.467 130.267 249.601 192.667L250.001 306L289.067 306.4L328.001 306.667V191.334V76.0003H289.334C259.601 76.0003 250.401 76.4003 250.001 77.6003ZM302.667 191.334V281.334H288.667H274.667V192.267C274.667 143.2 275.067 102.667 275.601 102.267C276.001 101.734 282.401 101.334 289.601 101.334H302.667V191.334Z"
                                            fill="#7f7f7f" />
                                        <path
                                            d="M56 218V306.667H95.3333H134.667V218V129.334H95.3333H56V218ZM109.333 218V281.334H95.3333H81.3333V218V154.667H95.3333H109.333V218Z"
                                            fill="#7f7f7f" />
                                        <path
                                            d="M479.201 133.334C473.068 135.734 472.001 139.334 472.001 158.134V175.734L453.201 176.267C434.534 176.667 434.401 176.667 431.201 180.4C426.668 185.734 426.934 192.4 431.868 197.467L435.734 201.334H453.868H472.001V219.467V237.6L475.868 241.467C480.268 245.734 484.801 246.4 490.534 243.334C496.001 240.667 497.334 235.2 497.334 217.2V201.334H514.001C533.334 201.334 537.601 200 539.868 192.934C541.734 187.334 540.268 182.8 535.201 178.8C532.001 176.267 530.001 176 514.534 176H497.601L497.068 157.867L496.668 139.734L492.268 135.867C487.868 132 484.268 131.2 479.201 133.334Z"
                                            fill="#7f7f7f" />
                                        <path
                                            d="M61.3338 331.6C57.6004 332.933 53.4671 337.6 52.6671 341.467C51.7338 345.733 54.8004 352.533 58.5338 354.667C60.2671 355.6 152 356 342 356H622.934L626.8 352.133C633.467 345.467 631.2 335.2 622.4 332.133C618.134 330.667 65.3338 330.133 61.3338 331.6Z"
                                            fill="#7f7f7f" />
                                        <path
                                            d="M352 443.333V508H391.333H430.667V443.333V378.667H391.333H352V443.333ZM405.333 443.333V482.667H391.333H377.333V443.333V404H391.333H405.333V443.333Z"
                                            fill="#7f7f7f" />
                                        <path
                                            d="M449.334 513.333V648L488.401 647.733L527.334 647.333V513.333V379.333L488.401 378.933L449.334 378.667V513.333ZM502.401 513.6L502.667 622.667H488.667H474.667V513.333V403.867L488.401 404.267L502.001 404.667L502.401 513.6Z"
                                            fill="#7f7f7f" />
                                        <path
                                            d="M545.334 467.333V556H584.667H624.001V467.333V378.667H584.667H545.334V467.333ZM598.667 467.333V530.667H584.667H570.667V467.333V404H584.667H598.667V467.333Z"
                                            fill="#7f7f7f" />
                                        <path
                                            d="M144.8 464.667C139.6 469.467 139.6 477.333 144.8 482.667L148 486H197.467H246.934L250.134 482.267C253.6 478.133 254.4 470.267 251.6 466.533C247.867 461.6 245.2 461.333 196.267 461.333H148.4L144.8 464.667Z"
                                            fill="#7f7f7f" />
                                    </svg><span class="ml-1 text hoverlist" style="margin-top: -15px;">P &
                                        L</span></a></div>
                        </ul>
                    </li>


                    {{-- <li class="removable sidebar-h beneficiary">
                        <a class=" text-black-50 d-flex flex-column align-items-center triangle-container"
                            href="#" aria-expanded="false">
                            <div class="mb-2"><svg class="hovercolor" xmlns="http://www.w3.org/2000/svg"
                                    width="36" height="36" fill="currentColor" class="bi bi-person-check"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                    <path
                                        d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                </svg> </div>
                            <div><span class="text mini-click-non">Reports</span></div>
                        </a>
                        <ul class="submenu-angle beneficiarylist padding-top-beneficiary" aria-expanded="false">
                            <div class=" text-black-50"> <a class="left_margin text-black-50 "
                                    href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="20" height="20" fill="currentColor" class="bi bi-person-check"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                        <path
                                            d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                    </svg><span class="ml-1">Project Report </span></a></div>

                        </ul>
                    </li> --}}

                </ul>
            </nav>
        </div>
    </nav>
</div>

<!-- Mobile Menu start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li class="active">
                                <a class="" href="{{ route('dashboard') }}">
                                    <img src="{{ asset('assets/admin/img/icon/dashboard.png') }}" alt="">
                                    <span class="mini-click-non">Dashboard</span>
                                </a>
                            </li>

                            </li>
                            <li><a data-toggle="collapse" data-target="#demo" href="#">Services <span
                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                <ul id="demo" class="collapse dropdown-header-top">
                                    <li><a title="Inbox" href="{{ route('all/services') }}"><span
                                                class="mini-sub-pro">All</span></a></li>
                                    <li><a title="View Mail" href="#"><span
                                                class="mini-sub-pro">Design</span></a></li>
                                    <li><a title="Compose Mail" href="#"><span
                                                class="mini-sub-pro">Construction</span></a></li>
                                    <li><a title="Compose Mail" href="#"><span
                                                class="mini-sub-pro">AIU</span></a></li>
                                    <li><a title="Compose Mail" href="#"><span
                                                class="mini-sub-pro">Bidaa</span></a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Payables <span
                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                <ul id="Pagemob" class="collapse dropdown-header-top">
                                    <li><a href="#">Payables 1</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Receivables <span
                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                <ul id="Pagemob" class="collapse dropdown-header-top">
                                    <li><a href="#">Receivables 1</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Finance <span
                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                <ul id="Pagemob" class="collapse dropdown-header-top">
                                    <li><a href="{{ route('pettyCash') }}">Expenses</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Invoices <span
                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                <ul id="Pagemob" class="collapse dropdown-header-top">
                                    <li><a href="{{ route('invoices') }}">Invoices List</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Quotations <span
                                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                <ul id="Pagemob" class="collapse dropdown-header-top">
                                    <li><a href="{{ route('quotation') }}">Quotations List</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu end -->
