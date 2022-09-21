<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon"
        href="//cdn.shopify.com/s/files/1/0554/8674/2665/t/3/assets/favicon.png?v=114264457361623262431643043844"
        type="image/png" />
    <title>StylzWorld-Fatima Registration Form</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />

    <style>
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }
    </style>

</head>

<body>

    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                                    alt="Sample photo" class="img-fluid"
                                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase text-center">Payment</h3>

                                    <div class="col-sm-12 col-md-10 col-md-offset-1">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Person</th>
                                                    <th>Price</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="col-md-3">
                                                        <div class="media">
                                                            <span>{{ $customer->name }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="col-md-2 text-left">
                                                        <strong>{{ $customer->family_member }}</strong>
                                                    </td>
                                                    <td class="col-md-3">
                                                        @if ($customer->family_member == 1 || $customer->family_member == 2)
                                                            {{ $customer->family_member }} X $35
                                                        @elseif ($customer->family_member == 3)
                                                            {{ $customer->family_member }} X $30
                                                        @else
                                                            {{ $customer->family_member }} X $25
                                                        @endif
                                                    </td>

                                                    <td class="col-md-2 text-center">
                                                        @php
                                                            if ($customer->family_member == 1 || $customer->family_member == 2) {
                                                                $total = $customer->family_member * 35;
                                                            } elseif ($customer->family_member == 3) {
                                                                $total = $customer->family_member * 30;
                                                            } else {
                                                                $total = $customer->family_member * 25;
                                                            }
                                                        @endphp
                                                        <strong>${{ $total }}</strong>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <strong>Sub Total = </strong>
                                                        <br>
                                                        <strong>Total = </strong>
                                                    </td>
                                                    <td>
                                                        <strong>${{ $customer->order->total_price }}</strong>
                                                        <br>
                                                        <strong>${{ $customer->order->total_price }}</strong>
                                                        <input type="hidden" class="customer_id" name="customer_id"
                                                            value="{{ $customer->id }}">
                                                        <input type="hidden" class="ticket_price" name="ticket_price"
                                                            value="{{ $customer->order->total_price }}">
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                    <form action="{{ route('fatima.order.update') }}" method="GET">
                                        @csrf
                                        <div class="row">
                                            <div class="form-outline col-md-7 mb-4">
                                                <input type="hidden" name="order_id"
                                                    value="{{ $customer->order->id }}">
                                                <input type="text" id="cupon_code"
                                                    class="form-control form-control-lg" name="cupon" />
                                                <label class="form-label" for="cupon_code">Cupon</label>

                                            </div>
                                            <div class="col-md-2">
                                                <button type="submit"
                                                    class="btn btn-warning btn-lg ms-2">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="d-flex justify-content-center pt-3" style="margin-left: 45px;">
                                        {{-- <button type="reset" class="btn btn-light btn-lg">Reset all</button> --}}
                                        {{-- <button type="submit" class="btn btn-warning btn-lg ms-2">Submit
                                                form</button> --}}
                                        @if ($customer->order->total_price == 0)
                                            <button type="buton" class="ticket_button btn btn-warning btn-lg ms-2">Get
                                                Ticket</button>
                                        @else
                                            <div id="paypal-button-container"></div>
                                        @endif

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
    <!-- Sample PayPal credentials (client-id) are included -->
    <script
        src="https://www.paypal.com/sdk/js?client-id=ARVBxaaPrvHevDM105Df68HLV4GBB_PgiYBO4XkO1pBmDeyxus8GVFZ3ad2DAXy8TD-37F9VRsL0ziyj&currency=USD&intent=capture"
        data-sdk-integration-source="integrationbuilder"></script>

    <script>
        const fundingSources = [
            paypal.FUNDING.PAYPAL,
            paypal.FUNDING.CARD
        ]

        for (const fundingSource of fundingSources) {
            const paypalButtonsComponent = paypal.Buttons({
                fundingSource: fundingSource,

                // optional styling for buttons
                // https://developer.paypal.com/docs/checkout/standard/customize/buttons-style-guide/
                style: {
                    shape: 'rect',
                    height: 40,
                },

                // set up the transaction
                createOrder: (data, actions) => {
                    // pass in any options from the v2 orders create call:
                    // https://developer.paypal.com/api/orders/v2/#orders-create-request-body
                    const createOrderPayload = {
                        purchase_units: [{
                            amount: {
                                value: '{{ $total }}',
                            },
                        }, ],
                    }

                    return actions.order.create(createOrderPayload)
                },

                // finalize the transaction
                onApprove: (data, actions) => {
                    const captureOrderHandler = (details) => {
                        const payerName = details.payer.name.given_name
                        console.log('Transaction completed!')

                        var customer_id = $('.customer_id').val();
                        var ticket_price = $('.ticket_price').val();

                        $.ajax({
                            method: "POST",
                            url: "/fatima/order/ticket/",
                            data: {
                                'customer_id': customer_id,
                                'ticket_price': ticket_price,
                                'payment_mode': "paid by Paypal",
                                'payment_id': details.id,

                            },
                            success: function(response) {
                                console.log(response.status);
                                window.location.href = "/";
                            }
                        });
                    }

                    return actions.order.capture().then(captureOrderHandler)
                },

                // handle unrecoverable errors
                onError: (err) => {
                    console.error(
                        'An error prevented the buyer from checking out with PayPal',
                    )
                },
            })

            if (paypalButtonsComponent.isEligible()) {
                paypalButtonsComponent
                    .render('#paypal-button-container')
                    .catch((err) => {
                        console.error('PayPal Buttons failed to render')
                    })
            } else {
                console.log('The funding source is ineligible')
            }
        }
    </script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.ticket_button').click(function() {
            var customer_id = $('.customer_id').val();
            var ticket_price = $('.ticket_price').val();

            $.ajax({
                method: "POST",
                url: "{{ route('fatima.order.ticket') }}",
                data: {
                    'customer_id': customer_id,
                    'ticket_price': ticket_price,
                    'payment_mode': "Free",

                },
                success: function(response) {
                    console.log(response.status);
                    window.location.href = "/";
                }
            });
        })
    </script>
</body>

</html>
