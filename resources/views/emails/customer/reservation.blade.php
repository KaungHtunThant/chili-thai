@extends('layouts.email')
@section('custom_css')
    <style>
        .email-container {
            background-color: #f4f4f4;
            padding: 40px;
        }

        .email-content {
            background: #ffffff;
            max-width: 600px;
        }

        .email-header {
            padding: 32px;
            max-width: 100vw;
        }

        .email-logo {
            max-width: 100%;
            height: auto;
        }

        .email-title {
            color: #333;
            text-align: left;
            font-size: 18px;
            font-family: sans-serif;
        }

        .email-text {
            color: #555;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }

        .email-button {
            background: #222222;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
            width: auto;
        }

        .email-button:hover {
            background: #444444;
        }

        .email-button:active {
            color: #fff;
        }

        .email-button:focus {
            color: #fff;
        }

        .email-footer-title {
            color: #555;
            text-align: center;
            font-size: 15px;
            font-family: sans-serif;
            padding-top: 10px;
        }

        .email-footer-text {
            color: #555;
            text-align: center;
            font-size: 12px;
            font-family: sans-serif;
        }

        .email-footer-note {
            color: #555;
            text-align: left;
            font-size: 12px;
            font-family: sans-serif;
        }
    </style>
@endsection

@section('content')
    <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0" class="email-container">
        <tr>
            <td align="center">
                <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0" class="email-content">
                    <tr>
                        <td align="center" class="email-header">
                            <img src="{{ storage('/img/logo.png') }}" alt="logo" class="email-logo">
                            <h1 class="email-title">Dear <!-- first Name -->!</h1>
                            <p class="email-text">Thank you for your reservation at Chili Thai Cuisine. We are delighted to
                                confirm your reservation as follows:</p>
                            <ul class="email-text">
                                <li>
                                    First_Name: {{ $reservation->first_name }}
                                </li>
                                <li>
                                    Last_Name: {{ $reservation->last_name }}
                                </li>
                                <li>
                                    Date: {{ $reservation->date }}
                                </li>
                                <li>
                                    Time: {{ $reservation->time }}
                                </li>
                                <li>
                                    Party_size: {{ $reservation->pax }}
                                </li>
                                <li>
                                    Any special request: {{ $reservation->notes }}
                                </li>
                            </ul>
                            <p class="email-text"> If you have any question, please contact us anytime!</p>
                            <a href="{{ config('app.url') }}" class="email-button">Contact Us</a>
                            <p class="email-text"> Thank you for using our service!</p>
                            <p class="email-text"> Regards,<br> Chili Thai Cuisine</p>
                            <hr>
                            <h2 class="email-footer-title">Contact Us</h2>
                            <p class="email-footer-text"> 730 Apollo Dr #110, Lino Lakes, MN 55014</p>
                            <p class="email-footer-text"> +16517808803</p>
                            <p class="email-footer-note">If you're having trouble clicking the contact us button, copy and
                                paste the URL below into your web browser.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
@endsection
