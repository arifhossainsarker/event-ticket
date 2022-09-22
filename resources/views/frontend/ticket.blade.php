<html>

<head>
    <title>Invoice - {{ $ticket->id }}</title>

    <style>
        .content-wrapper {
            background: #FFF;
        }

        .invoice-header {
            background: #f7f7f7;
            padding: 10px 20px 10px 20px;
            border-bottom: 1px solid gray;
        }

        .invoice-right-top h3 {
            padding-right: 20px;
            margin-top: 20px;
            color: #ec5d01;
            font-size: 55px !important;
            font-family: serif;
        }

        .invoice-left-top {
            border: 4px solid #ec5d00;
            padding-left: 20px;
            padding-top: 20px;
            font-style: italic;
            overflow: hidden;
        }

        thead {
            background: #ec5d01;
            color: #FFF;
        }

        .authority h5 {
            margin-top: -10px;
            color: #ec5d01;
            /*text-align: center;*/
        }

        .thanks h4 {
            color: #ec5d01;
            font-size: 25px;
            font-weight: normal;
            font-family: serif;
            margin-top: 20px;
        }

        .site-address p {
            line-height: 6px;
            font-weight: 300;
        }

        .address {
            width: 50%;
            float: left;
        }

        .ticket-details {
            width: 100%;
        }

        .ticket-info {
            width: 50%;
            float: right;
        }
    </style>
</head>

<body>

    <div class="content-wrapper">

        <div class="invoice-description">
            <div class="invoice-left-top float-left">
                <h2 style="text-align: center;">A Quran Night with Mayam and Fatima</h2>
                <h4 style="text-align: center;">Ticket No: {{ $ticket->ticket_no }}</h4>
                <h5 style="text-align: center;">Date: 02-oct-2022</h5>
                <h5 style="text-align: center;">Venue: Gulshan</h5>
                <h5 style="text-align: center;">Name: {{ $ticket->customer->name }}</h5>
                <h5 style="text-align: center;">Email: {{ $ticket->customer->email }}</h5>
                <h5 style="text-align: center;">Phone: {{ $ticket->customer->phone }}</h5>
                <h5 style="text-align: center;"> Total Person: {{ $ticket->customer->family_member }}</h5>
                <h5 style="text-align: center;">Price: @if ($ticket->ticket_price == 0)
                        Free
                    @else
                        {{ $ticket->ticket_price }}
                    @endif
                </h5>

                <div class="ticket-details">
                    <div class="address">
                        <p>
                            <strong>Name: </strong>
                            {{ $ticket->customer->name }}
                        </p>
                        <p>Phone: {{ $ticket->customer->phone }}</p>
                        <p>Email: {{ $ticket->customer->email }}</p>
                    </div>
                    <div class="ticket-info">
                        <p>
                            Total Person: {{ $ticket->customer->family_member }}
                        </p>
                        <p>
                            Price: @if ($ticket->ticket_price == 0)
                                Free
                            @else
                                {{ $ticket->ticket_price }} USD
                            @endif
                        </p>
                    </div>
                </div>

            </div>

            <div class="clearfix"></div>
        </div>

</body>

</html>
