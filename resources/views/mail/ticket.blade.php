<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Regulated Advice</title>
    <style type="text/css">
        @import url(http://fonts.googleapis.com/css?family=Lato:400);

        /* Take care of image borders and formatting */

        img {
            max-width: 600px;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        a {
            text-decoration: none;
            border: 0;
            outline: none;
            color: #21BEB4;
        }

        a img {
            border: none;
        }

        /* General styling */

        td,
        h1,
        h2,
        h3 {
            font-family: Helvetica, Arial, sans-serif;
            font-weight: 400;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: none;
            width: 100%;
            height: 100%;
            color: #37302d;
            background: #ffffff;
        }

        table {
            background:
        }

        h1,
        h2,
        h3 {
            padding: 0;
            margin: 0;
            color: #ffffff;
            font-weight: 400;
        }

        h3 {
            color: #21c5ba;
            font-size: 24px;
        }
    </style>

    <style type="text/css" media="screen">
        @media screen {

            /* Thanks Outlook 2013! http://goo.gl/XLxpyl*/
            td,
            h1,
            h2,
            h3 {
                font-family: 'Lato', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
            }
        }
    </style>

    <style type="text/css" media="only screen and (max-width: 480px)">
        /* Mobile styles */
        @media only screen and (max-width: 480px) {
            table[class="w320"] {
                width: 320px !important;
            }

            table[class="w300"] {
                width: 300px !important;
            }

            table[class="w290"] {
                width: 290px !important;
            }

            td[class="w320"] {
                width: 320px !important;
            }

            td[class="mobile-center"] {
                text-align: center !important;
            }

            td[class="mobile-padding"] {
                padding-left: 20px !important;
                padding-right: 20px !important;
                padding-bottom: 20px !important;
            }
        }
    </style>
</head>

<body class="body" style="padding:0; margin:0; display:block; background:#ffffff; -webkit-text-size-adjust:none"
    bgcolor="#ffffff">
    <table align="center" cellpadding="0" cellspacing="0" width="100%" height="100%">
        <tr>
            <td align="center" valign="top" bgcolor="#ffffff" width="100%">

                <table cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                        <td style="border-bottom: 3px solid #baca2a;" width="100%">
                            <center>
                                <table cellspacing="0" cellpadding="0" width="500" class="w320">
                                    <tr>
                                        <td valign="top" style="padding:10px 0; text-align:left;"
                                            class="mobile-center">
                                            A Night of Quran with Maryan & Fatima
                                        </td>
                                    </tr>
                                </table>
                            </center>
                        </td>
                    </tr>

                    <tr>
                        <td valign="top">
                            <center>
                                <table cellspacing="0" cellpadding="0" width="500" class="w320">
                                    <tr>
                                        <td>

                                            <table cellspacing="0" cellpadding="0" width="100%">
                                                <tr>
                                                    <td class="mobile-padding" style="text-align:left;">
                                                        <br>
                                                        <p>Thank you for purchasing the ticket(s). We hope to see you
                                                            soon In Shaa Allah</p>
                                                        <a style="background: rgb(0, 45, 128); color: #fff; padding: 5px; margin: 10px 0;"
                                                            href="{{ url('event.ticket', $id) }}">Download Ticket</a>
                                                        <br><br>
                                                        {{-- <p>Regards, <br>Event Management</p>

                                                        Powered By <a
                                                            href="https://stylezworld.com/">StylezWorld.com</a> --}}

                                                        <a href="https://stylezworld.com/">
                                                            <img src="{{ asset('img/mail-footer.jpg') }}"
                                                                alt="">
                                                        </a>

                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                </table>
                            </center>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>

</html>
