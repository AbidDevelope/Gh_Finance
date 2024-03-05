<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice Pdf</title>
    <style>
        h4 {
            margin: 0;
        }

        .w-full {
            width: 100%;
        }

        .w-half {
            width: 50%;
        }

        .margin-top {
            margin-top: 1.25rem;
        }

        .footer {
            font-size: 0.875rem;
            padding: 1rem;
            background-color: rgb(241 245 249);
        }

        table {
            width: 100%;
            border-spacing: 0;
        }

        table.products {
            font-size: 0.875rem;
        }

        table.products thead tr {
            background-color: rgb(96 165 250);
        }

        table.products th {
            color: #ffffff;
            padding: 0.5rem;
        }

        table tbody tr.items {
            background-color: rgb(241 245 249);
        }

        table tbody tr.items td {
            padding: 0.5rem;
            text-align: center;
        }

        .total {
            text-align: right;
            margin-top: 1rem;
            font-size: 0.875rem;
        }

        table .w-half-right {
            text-align: right;
        }
    </style>
</head>

<body>

    <table class="w-full">
        <tr>
            <td class="w-half">
                @php
                $imageData = base64_encode(file_get_contents(public_path('assets/admin/img/logo/gh_logo.jpg')));
                @endphp
                <img src="data:image/jpg;base64,{{ $imageData }}" alt="logo" width="200" height="150" />
            </td>
            <td class="w-half">
                <h2 style="text-align: center">Invoice ID: {{ $invoices->invoice_number }}</h2>
            </td>
        </tr>
    </table>

    <div class="margin-top">
        <table class="w-full">
            <tr>
                <td class="w-half">
                    <div>
                        <h4>Bill To:</h4>
                    </div>
                    <div> Name</div>
                    <div> Email  <br>
                        <div> IBRAH COMPANY <br>
                            <div> Address <br>
                                <div> Phone: Mobile</div>
                </td>
                <td class="w-half-right">
                    <table>
                        <thead>
                            <tr>
                                <th><span>Invoice Date </span></th>
                                <td><span>{{ \Carbon\Carbon::parse($invoices->invoice_date)->format('d M Y') }}</span>
                            </tr>
                            <tr>
                                <th><span>Invoice #</span></th>
                                <td><span>{{ $invoices->invoice_number }}</span></td>
                            </tr>
                            <tr>
                                <th><span>Payment Due</span></th>
                                <td><span>000.000</span></td>
                            </tr>
                            <tr>
                                <th><span>Due Date</span></th>
                                <td><span>{{ \Carbon\Carbon::parse($invoices->due_date)->format('d M Y') }}</span>
                            </tr>
                        </thead>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    <div class="margin-top">
        <table class="products table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Description</th>
                    <th>Unit</th>
                    <th>Qty</th>
                    <th>Price/K.D</th>
                    <th>Total/K.D</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoices->invoiceItems as $key => $invoice)
                    <tr class="items">
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $invoice->description }}</td>
                        <td>{{ $invoice->unit }}</td>
                        <td>{{ $invoice->qty }}</td>
                        <td>{{ $invoice->price }}</td>
                        <td>{{ $invoice->total }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="total">
        <p><b>Sub Total : </b>{{ $invoices->subtotal }}</p>
        <p><b>Discount : </b>{{ $invoices->discount }}</p>
        <p><b>Grand Total : </b>{{ $invoices->grandValue }}</p>
    </div>

    <div class="margin-top">
        <table class="products table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>(KUWAITI DINARS FIVE THOUSAND NINE HUNDRED ONLY)</th>
                    <th>PAYMENT DUE</th>
                    <th>{{ $invoices->grandValue}}</th>
                </tr>
            </thead>
            <tbody>
                <tr class="items">
                    <td>1</td>
                    <td>100% PAYMENT UPON JOB COMPLETION & HANDOVER</td>
                    <td></td>
                    <td>{{ $invoices->grandValue }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="footer margin-top">
        <p>
        <h4><b>BENEFICIARY'S BANK DETAILS</b></h4>
        </p>
        <p><b>BENEFICIARY NAME : </b>AG PARTNERS GENERAL TRADING & CONTRACTING</p>
        <p><b>BANK NAME : </b>NATIONAL BANK OF KUWAIT (NBK)</p>
        <p><b>ACCOUNT # : </b>2021637667</p>
        <p><b>IBAN : </b>KW93NBOK0000000000002021637667</p>
    </div>

    <div class="total p-5">
        <div><b>SIGNATURE : </b> ............................................ </div><br>
        <div><b>NAME : </b> ............................................ </div><br>
        <div><b>DATE # : </b> ............................................ </div><br>
        <div><b style=" padding: 5px">AG GENERAL TRAD. & CONT. CO. :</b> </div><br>
    </div>

</body>

</html>
