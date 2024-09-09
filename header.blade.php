<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0px;
        }

        .header {
            text-align: center
        }

        .container {
            width: 90%;
            margin: 25px auto;
            display: flex;
            justify-content: center;
            flex-direction: column;
            justify-content: space-between;
        }

        .container img {
            width: 50%;
        }

        .text-center {
            text-align: center;
        }

        button a {
            text-decoration: none;
            color: white;
        }

        @media screen and (max-width:900px) {
            .mobile-responsive {
                display: none !important;
            }

            .container {
                width: 100%;
                margin: 0px !Important;
                box-shadow: none;
                border: none;
            }

            .phone-img {
                width: 70%;
                padding-bottom: 10px;
                margin: auto;
                text-align: center;
            }

            .box {
                padding: 15px;
            }

            p {
                font-size: 16px;
                ;
            }

            .otp-row img {
                width: 36px;
                margin: 10px 0px;
            }

            .mobile {
                flex-direction: column-reverse !important;
                align-items: center !Important;
            }

            .socials {
                width: 60% !Important;
                margin: auto;
            }

            .otp-row {
                width: 85% !Important;
                margin: auto !important;
            }

            button {
                background: linear-gradient(0deg, #FF743C, #FF743C), linear-gradient(0deg, #FF743C, #FF743C);
                /* Green */
                border: none;
                color: white;
                padding: 15px 30px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                border-radius: 10px;
            }
        }

        @media screen and (min-width:900px) {
            .desktop-responsive {
                display: none !important;
            }

            p {
                font-size: 20px;
            }

            .mb-0 {
                margin-bottom: 0px;
            }

            .otp-row img {
                width: 50%;
                margin: 1px;
            }

            .socials {
                width: 15% !Important;
                margin-right:10%; 
            }

            .phone-img {
                width: 30%;
                margin: auto;
                text-align: center;
            }

            button {
                background: linear-gradient(0deg, #FF743C, #FF743C), linear-gradient(0deg, #FF743C, #FF743C);
                /* Green */
                border: none;
                color: white;
                padding: 20px 40px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 20px;
                border-radius: 10px;
            }
        }

        .p-1 {
            padding: 10px;
        }

        .py-4 {
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .box-1 {
            box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.25);
            border: 1px solid rgba(228, 228, 228, 1);
            width: 40%;
            height: 100px;
            margin: 10px auto;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            flex-direction: column;
            border-radius: 10px;
        }

        .otp-row {
            display: flex;
            justify-content: space-evenly;
            width: 90%;
        }
    </style>
</head>