<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Reservation Details</title>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            min-width: 100%!important;
        }

        .content {
            width: 100%;
            max-width: 600px;
            border: 1px solid #EAE2D1;
        }

        .main {
            padding: 30px 0;
            color: #acbac4;
            line-height: 20px;
            font-family: sans-serif;
        }

        .main a {
            color: #acbac4;
            text-decoration: none;
        }

        .eheader {
            padding: 20px;
        }

        .innerpadding {
            padding: 30px;
        }

        .borderbottom {
            border-bottom: 1px solid #e6eff2;
        }

        .title {
            text-align: center;
            text-transform: uppercase;
        }

        .title a {
            font-size: 30px;
            line-height: 40px;
            color: #fff;
        }

        .subhead {
            text-align: center;
            font-size: 12px;
            color: #fff;
        }

        .h1 {
            text-align: center;
            font-size: 30px;
            color: #fff;
        }

        .h2 {
            padding: 0 0 15px 0;
            font-size: 16px;
            line-height: 28px;
            font-weight: bold;
        }

        .h3 {
            font-size: 15px;
            text-decoration: underline;
        }

        .bodycopy {
            font-size: 14px;
            line-height: 22px;
        }

        .details {
            font-size: 14px;
        }

        .mssg {
            font-size: 12px;
        }

        .footer {
            padding: 20px 30px 15px 30px;
            border-top: 1px solid #f5f5f5;
        }

        .footer a {
            color: #1dc1f8;
        }

        .footercopy {
            font-size: 15px;
            color: #777777;
        }

        .footercopy a {
            color: #1dc1f8;
        }

        .social a {
            font-size: 14px;
        }

@media screen and (max-width: 600px) { .main { padding: 0; } }

    </style>


</head>

<body yahoo bgcolor="#f5eddb">


    <table width="100%" bgcolor="#f5eddb" class="main" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td>

                <table bgcolor="#ffffff" class="content" align="center" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td bgcolor="#1dc1f8" class="eheader">

                            <table class="col425" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                                <tr>
                                    <td height="70">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td class="title" style="padding: 5px 0 0 0;">
                                                    <a href="%site_url%">%site_title%</a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="subhead" style="padding: 0 0 0 3px;">
                                                    Reservation Details - Admin
                                                </td>
                                            </tr>


                                        </table>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>
                    <tr>
                        <td class="innerpadding borderbottom">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td class="h2">
                                        Hello Admin,
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bodycopy">
                                        customer %customer_name% requsted a new reservation at %site_title%
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="innerpadding borderbottom">

                            <table class="col380" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                                <tr>
                                    <td class="h3">Reservation Details:</td>
                                </tr>

                                <tr>
                                    <td class="innerpadding details">

                                        <table class="col380" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">

                                            <tr>
                                                <td>Name</td>
                                                <td>%customer_name%</td>
                                            </tr>

                                            <tr>
                                                <td>Email</td>
                                                <td>%customer_email%</td>
                                            </tr>

                                            <tr>
                                                <td>Phone</td>
                                                <td>%customer_phone%</td>
                                            </tr>

                                            <tr>
                                                <td>Room Type</td>
                                                <td>%roomtype%</td>
                                            </tr>

                                            <tr>
                                                <td>Adults</td>
                                                <td>%adults%</td>
                                            </tr>

                                            <tr>
                                                <td>Children</td>
                                                <td>%children%</td>
                                            </tr>

                                            <tr>
                                                <td>Arrival</td>
                                                <td>%checkin%</td>
                                            </tr>

                                            <tr>
                                                <td>Departure</td>
                                                <td>%checkout%</td>
                                            </tr>

                                            <tr>
                                                <td>Country</td>
                                                <td>%country%</td>
                                            </tr>

                                            <tr>
                                                <td>Comments</td>
                                                <td>%comments%</td>
                                            </tr>

                                        </table>

                                    </td>

                                </tr>

                            </table>

                        </td>
                    </tr>

                    <tr>
                        <td class="innerpadding bodycopy mssg">
                            *Don't forget to contact %customer_name% via email, %customer_email% or click 'reply' in your email browser to make the reservation complete. </td>
                    </tr>
                    <tr>
                        <td class="footer" bgcolor="#f5f5f5">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td align="center" class="footercopy">
                                        2017 &#169; <a href="%site_url%">%site_title%</a> All Rights Reserved.
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" class="social" style="padding: 10px 0 0 0;">
                                        <table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
                                                    <a href="%facebook_link%">
                                                        facebook
                                                    </a>
                                                </td>
                                                <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
                                                    <a href="%twitter_link%">
                                                        twitter
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
</body>

</html>
