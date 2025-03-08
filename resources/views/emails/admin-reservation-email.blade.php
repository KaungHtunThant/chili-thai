@extends('layouts.email')
@section('custom_css')
    <style>
        .email-container {
            background-color: #f4f4f4;
            padding: 40px;
        }

        .email-content {
            background-color: #ffffff;
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
            font-size: 20px;
            text-align: left;
            font-family: sans-serif;
        }

        .email-text {
            color: #555;
            font-size: 16px;
            text-align: left;
            font-family: sans-serif;
        }

        .email-footer {
            color: #555;
            font-size: 14px;
            text-align: center;
            font-family: sans-serif;
        }
    </style>
@endsection

@section('content')
    <table role="presentation" cellspacing="0" cellpadding="0" width="100%" border="0" class="email-container">
        <tr>
            <td align="center">
                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" class="email-content">
                    <tr>
                        <td align="center" class="email-header">
                            <img src="./img/logo.png" alt="logo" class="email-logo">
                            <h1 class="email-title">Hello, admin!</h1>
                            <p class="email-text">You have a new reservation. Please check the following details for
                                reservation:</p>
                            <ul>
                                <li>
                                    First_Name: {{ $reservation->first_name }}
                                </li>
                                <li>
                                    Last_Name: {{ $reservation->last_name }}
                                </li>
                                <li>
                                    Email: {{ $reservation->email }}
                                </li>
                                <li>
                                    Phone Number: {{ $reservation->phone }}
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
                            <p class="email-text">Thanks you for using our service!</p>
                            <p class="email-text">Regards,<br>Admin Team</p>
                            <hr>
                            <p class="email-footer">Contact customer for confirm reservation and more details.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
@endsection
