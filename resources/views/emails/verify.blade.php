<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style type="text/css">
        /* Reset styles */
        body {
            margin: 0;
            padding: 0;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        p {
            display: block;
            margin: 13px 0;
        }

        /* General styles */
        body {
            background: #f9f9f9;
        }

        /* Responsive styles */
        @media only screen and (max-width: 480px) {
            @-ms-viewport {
                width: 320px;
            }

            @viewport {
                width: 320px;
            }
        }

        /* Font styles */
        #outlook a {
            padding: 0;
        }

        .ReadMsgBody,
        .ExternalClass {
            width: 100%;
        }

        .ExternalClass * {
            line-height: 100%;
        }

        /* Main container */
        .container {
            max-width: 640px;
            margin: 0 auto;
        }

        /* Header */
        .header {
            background-color: #ffffff;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            overflow: hidden;
        }

        /* Logo */
        .logo {
            text-align: center;
            padding: 57px;
        }

        .logo img {
            width: 300px;
        }

        /* Content */
        .content {
            background: #ffffff;
            padding: 40px 70px;
            text-align: left;
        }

        /* Footer */
        .footer {
            background: transparent;
            padding: 20px 0px;
        }
    </style>
    <!--[if !mso]><!-->
    <style type="text/css">
        @media only screen and (min-width: 480px) {

            .mj-column-per-100,
            * [aria-labelledby="mj-column-per-100"] {
                width: 100% !important;
            }
        }
    </style>
    <!--<![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="https://i.postimg.cc/QCtQsQXG/smk.png" alt="" />
            </div>
        </div>

        <div class="content">
            <h2>Tautan ini aktif selama 4 jam</h2>
            <h4 style="font-weight: 700; color: #000000;">Aktivasi Akun Anda</h4>
            <p>
                Terimakasih {{ $data['user'] }} telah mendaftar di <span style="color: #000000;">Tracer Study SMKN 2
                    PENAJAM,</span>
            </p>
            <table role="presentation" cellpadding="0" cellspacing="0" style="border-collapse: separate" align="center"
                border="0">
                <tbody>
                    <tr>

                        <td style="border: none; border-radius: 3px; color: white; cursor: auto; padding: 15px 19px;"
                            align="center" valign="middle" bgcolor="#1D9375">
                            <a href="{{ route('verification.account', $data['id']) }}"
                                style="text-decoration: none; line-height: 100%; background: ##1D9375; color: white; font-family: Ubuntu, Helvetica, Arial, sans-serif; font-size: 15px; font-weight: normal; text-transform: none; margin: 0px;"
                                target="_blank">
                                Verifikasi
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="footer"></div>
    </div>
</body>

</html>
