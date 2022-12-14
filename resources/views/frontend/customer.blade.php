<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon"
        href="//cdn.shopify.com/s/files/1/0554/8674/2665/t/3/assets/favicon.png?v=114264457361623262431643043844"
        type="image/png" />
    <title>StylezWorld-Event Management</title>
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
        .card.card-registration {
            padding: 50px;
        }
        
        .reg-padding {
            border: 5px solid #f9f0c2;
        }
        .copyright_text p {
            font-size: 14px;
            text-align: center;
            margin-top: 40px;
        }
    </style>

</head>

<body>

    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0 reg-padding">
                            <div class="col-xl-6">
                                <img src="{{ asset('img/reg.png') }}" alt="Sample photo" class="img-fluid"
                                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase text-center">Registration form</h3>

                                    <form action="{{ route('event_registration.store') }}" method="POST">
                                        @csrf
                                        <div class="form-outline mb-4">
                                            <input type="text" id="name" class="form-control form-control-lg"
                                                name="name" required />
                                            <label class="form-label" for="name">Name</label>

                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="email" id="email"
                                                        class="form-control form-control-lg" name="email" required />
                                                    <label class="form-label" for="email">Email</label>

                                                    @if ($errors->has('email'))
                                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="phone"
                                                        class="form-control form-control-lg" name="phone" required />
                                                    <label class="form-label" for="phone">Phone</label>

                                                    @if ($errors->has('phone'))
                                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">

                                                <select class="select form-select form-control-lg" name="country"
                                                    required>
                                                    <option value="">Country</option>
                                                    <option value="USA">USA</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="UK">UK</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                </select>

                                                @if ($errors->has('country'))
                                                    <span class="text-danger">{{ $errors->first('country') }}</span>
                                                @endif

                                            </div>

                                            <div class="col-md-6 mb-4">

                                                {{-- <select class="select form-select form-control-lg" name="state"
                                                    required>
                                                    <option value="">State</option>
                                                    <option value="Alabama">Alabama</option>
                                                    <option value="Alaska">Alaska</option>
                                                    <option value="Arizona">Arizona</option>
                                                    <option value="Arkansas">Arkansas</option>
                                                    <option value="California">California</option>
                                                    <option value="Colorado">Colorado</option>
                                                    <option value="Connecticut">Connecticut</option>
                                                    <option value="Delaware">Delaware</option>
                                                    <option value="Florida">Florida</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Hawaii">Hawaii</option>
                                                    <option value="Idaho">Idaho</option>
                                                    <option value="Illinois">Illinois</option>
                                                    <option value="Indiana">Indiana</option>
                                                    <option value="Iowa">Iowa</option>
                                                    <option value="Kansas">Kansas</option>
                                                    <option value="Kentucky">Kentucky</option>
                                                    <option value="Louisiana">Louisiana</option>
                                                    <option value="Maine">Maine</option>
                                                    <option value="Maryland">Maryland</option>
                                                    <option value="Massachusetts">Massachusetts</option>
                                                    <option value="Michigan">Michigan</option>
                                                    <option value="Minnesota">Minnesota</option>
                                                    <option value="Mississippi">Mississippi</option>
                                                    <option value="Missouri">Missouri</option>
                                                    <option value="Montana">Montana</option>
                                                    <option value="Nebraska">Nebraska</option>
                                                    <option value="Nevada">Nevada</option>
                                                    <option value="New Hampshire">New Hampshire</option>
                                                    <option value="New Jersey">New Jersey</option>
                                                    <option value="New York">New York</option>
                                                    <option value="North Carolina">North Carolina</option>
                                                    <option value="North Dakota">North Dakota</option>
                                                    <option value="Ohio">Ohio</option>
                                                    <option value="Oklahoma">Oklahoma</option>
                                                    <option value="Oregon">Oregon</option>
                                                    <option value="Pennsylvania">Pennsylvania</option>
                                                    <option value="Rhode Island">Rhode Island</option>
                                                    <option value="South Carolina">South Carolina</option>
                                                    <option value="South Dakota">South Dakota</option>
                                                    <option value="Tennessee">Tennessee</option>
                                                    <option value="Texas">Texas</option>
                                                    <option value="Utah">Utah</option>
                                                    <option value="Vermont">Vermont</option>
                                                    <option value="Virginia">Virginia</option>
                                                    <option value="Washington">Washington</option>
                                                    <option value="West Virginia">West Virginia</option>
                                                    <option value="Wisconsin">Wisconsin</option>
                                                    <option value="Wyoming">Wyoming</option>
                                                </select> --}}
                                                <div class="form-outline">
                                                    <input type="text" id="state"
                                                        class="form-control form-control-lg" name="state" required />
                                                    <label class="form-label" for="state">State</label>

                                                    @if ($errors->has('state'))
                                                        <span class="text-danger">{{ $errors->first('state') }}</span>
                                                    @endif
                                                </div>

                                            </div>

                                        </div>

                                        <div class="form-outline mb-4">

                                            <select class="select form-select form-control-lg" name="family_member"
                                                required>
                                                <option value="">Total Family Members</option>
                                                <option value="1">1 persion</option>
                                                <option value="2">2 persions</option>
                                                <option value="3">3 persions</option>
                                                <option value="4">4 persions</option>
                                                <option value="5">5 persions</option>
                                                <option value="6">6 persions</option>
                                                <option value="7">7 persions</option>
                                                <option value="8">8 persions</option>
                                                <option value="9">9 persions</option>
                                                <option value="10">10 persions</option>
                                            </select>

                                            @if ($errors->has('family_member'))
                                                <span class="text-danger">{{ $errors->first('family_member') }}</span>
                                            @endif
                                        </div>


                                        <div class="d-flex justify-content-end pt-3">
                                            {{-- <button type="reset" class="btn btn-light btn-lg">Reset all</button> --}}
                                            <button type="submit" class="btn btn-warning btn-lg ms-2">Next</button>
                                            {{-- <div id="paypal-button-container"></div> --}}

                                        </div>

                                    </form>
                                    {{-- payment notice --}}
                                    {{-- <div class="payment-notice" style="margin-top: 20px;">
                                        <ul>
                                            <li>Single person ticket price $35</li>
                                            <li>Three person ticket price $30 X 3</li>
                                            <li>Four person ticket price $25 X 4</li>
                                            <li>Avobe Four Person ticket price $25 X abobe</li>
                                        </ul>
                                    </div> --}}
                                    <div class="copyright_text">
                                        <p class="">Powered By <a href="https://stylezworld.com/" target="blank">StylezWorld.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>

</body>

</html>
