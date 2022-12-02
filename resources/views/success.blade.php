<!DOCTYPE html>
<html lang="ar" class="h-full" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ __('Payment Confirmation') }} - {{ config('app.name', 'Laravel') }}</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://github.com/Kamonlojn/svg-icons-animate/blob/master/svg-icons-animate.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qs/6.11.0/qs.js"
        integrity="sha512-QXQgo/rJDUE26PrRHxhISwratdyZi9e/zvnlv72Mk6W3lmTa5YiiVaR9cYxNRjQIZXzAShwslz6rkOttv90g6g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        body {
            font-family: 'Tajawal', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
        }

        .svg-box {
            display: inline-block;
            position: relative;
            width: 150px;
        }

        .green-stroke {
            stroke: #7CB342;
        }

        .red-stroke {
            stroke: #FF6245;
        }

        .yellow-stroke {
            stroke: #FFC107;
        }


        .circular circle.path {
            stroke-dasharray: 330;
            stroke-dashoffset: 0;
            stroke-linecap: round;
            opacity: 0.4;
            animation: 0.7s draw-circle ease-out;
        }

        /*------- Checkmark ---------*/
        .checkmark {
            stroke-width: 6.25;
            stroke-linecap: round;
            position: absolute;
            /* top: 56px; */
            left: 49px;
            width: 52px;
            height: 40px;
        }

        .checkmark path {
            animation: 1s draw-check ease-out;
        }

        @keyframes draw-circle {
            0% {
                stroke-dasharray: 0, 330;
                stroke-dashoffset: 0;
                opacity: 1;
            }

            80% {
                stroke-dasharray: 330, 330;
                stroke-dashoffset: 0;
                opacity: 1;
            }

            100% {
                opacity: 0.4;
            }
        }

        @keyframes draw-check {
            0% {
                stroke-dasharray: 49, 80;
                stroke-dashoffset: 48;
                opacity: 0;
            }

            50% {
                stroke-dasharray: 49, 80;
                stroke-dashoffset: 48;
                opacity: 1;
            }

            100% {
                stroke-dasharray: 130, 80;
                stroke-dashoffset: 48;
            }
        }

        /*---------- Cross ----------*/

        .cross {
            stroke-width: 6.25;
            stroke-linecap: round;
            position: absolute;
            /* left: 49px; */
            width: 52px;
            height: 40px;
        }

        .cross .first-line {
            animation: 0.7s draw-first-line ease-out;
        }

        .cross .second-line {
            animation: 0.7s draw-second-line ease-out;
        }

        @keyframes draw-first-line {
            0% {
                stroke-dasharray: 0, 56;
                stroke-dashoffset: 0;
            }

            50% {
                stroke-dasharray: 0, 56;
                stroke-dashoffset: 0;
            }

            100% {
                stroke-dasharray: 56, 330;
                stroke-dashoffset: 0;
            }
        }

        @keyframes draw-second-line {
            0% {
                stroke-dasharray: 0, 55;
                stroke-dashoffset: 1;
            }

            50% {
                stroke-dasharray: 0, 55;
                stroke-dashoffset: 1;
            }

            100% {
                stroke-dasharray: 55, 0;
                stroke-dashoffset: 70;
            }
        }

        .alert-sign {
            stroke-width: 6.25;
            stroke-linecap: round;
            position: absolute;
            top: 40px;
            left: 68px;
            width: 15px;
            height: 70px;
            animation: 0.5s alert-sign-bounce cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .alert-sign .dot {
            stroke: none;
            fill: #FFC107;
        }

        @keyframes alert-sign-bounce {
            0% {
                transform: scale(0);
                opacity: 0;
            }

            50% {
                transform: scale(0);
                opacity: 1;
            }

            100% {
                transform: scale(1);
            }
        }

        .green-stroke {
            stroke: #10B981;
        }

        .red-stroke {
            stroke: #EF4444;
        }

        .yellow-stroke {
            stroke: #F59E0B;
        }
    </style>

</head>

<body class="text-gray-800  leading-normal p-8 h-full">
    <div id="app" class="h-full  w-1/2 flex container mx-auto md:flex">
        <div class="flex-1 flex flex-col p-4 relative">
            <div class="w-full flex items-center justify-center">
                <div class="w-full flex items-center justify-center flex-col">
                    <div class="w-40 h-40 flex items-center justify-center relative">
                        <svg class="circular green-stroke flex items-center justify-center">
                            <circle class="path" cx="75" cy="75" r="50" fill="none" stroke-width="5"
                                stroke-miterlimit="10" />
                        </svg>
                        <svg class="checkmark green-stroke">
                            <g transform="matrix(0.79961,8.65821e-32,8.39584e-32,0.79961,-489.57,-205.679)">
                                <path class="checkmark__check" fill="none"
                                    d="M616.306,283.025L634.087,300.805L673.361,261.53" />
                            </g>
                        </svg>
                    </div>
                    <div class="mt-8 flex items-center flex-col">
                        <span class="text-gray-500 text-lg font-normal mb-4">@{{successMessage}}</span>
                        <div class="flex items-center justify-center">
                            <span class="text-gray-900 text-2xl font-medium">رمز العملية</span>
                            <span class="text-gray-500 leading-none mr-2">@{{transaction_id}}</span>
                        </div>

                        <div class="flex-1 flex mt-8">
                            <a href="{{ url('/') }}" class="text-blue-500">العودة للصفحة الرئيسية</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        var app = new Vue({
            el: '#app',

            data: {
                successMessage: "",
                defaultMessage: "تمت العميلة بنجاح !",
                transaction_id: ""
            },
            computed: {

            },
            methods: {


            },
            mounted() {
                const queryString = Qs.parse(window.location.search.replace('?', ''));
                this.successMessage = queryString?.response?.message || this.defaultMessage
                this.transaction_id = queryString?.response?.transaction_id || queryString?.transaction_id
            }
        })
    </script>
</body>