<!DOCTYPE html>
<html lang="ar" class="h-full" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ __('Payment Confirmation') }} - {{ config('app.name', 'Laravel') }}</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700&display=swap"
        rel="stylesheet">
    <script src="https://pay.youcan.shop/js/ycpay.js"></script>
    <style>
        body {
            font-family: 'Tajawal', sans-serif;
        }
    </style>
</head>

<body class="text-gray-800  leading-normal p-8 h-full">
    <div class="w-full flex items-center justify-center">
        <a href="https://devinweb.com" target="_blank" class="">
            <div class="w-24 h-24 flex items-center justify-center rounded-lg border border-1 border-gray-200">
                <svg class="h-20 w-auto" viewBox="0 0 32 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 9.0807L5 9V38H0.075406L0 9.0807Z"
                        fill="#EA4335">
                    </path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M23.3792 15L0 38.1901L8.74609 47L32 23.5867L23.3792 15Z" fill="#FBBC05"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.6344 0L32 23.3634L23.4471 32L0 8.68018L8.6344 0Z" fill="#4285F4"></path>
                </svg>
            </div>
        </a>
    </div>
    <div id="app" class="h-full flex container mx-auto md:flex">
        <div class="flex-1 flex flex-col p-4">
            <div class="items-start flex text-gray-600">
                <div class="flex cursor-pointer h-8 group items-center justify-start">
                    <div class="h-6 w-6 group-hover:text-gray-800 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="16" height="16"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <span class="text-sm mr-2 group-hover:text-gray-800 mt-1">
                        العودة
                    </span>
                </div>
            </div>
            <div class="mt-8">
                <span class="text-gray-500 text-lg font-normal">الإشتراك في فريق التسيير و التدبير</span>
                <div class="flex items-start justify-start">
                    <span class="text-gray-900 text-4xl font-medium">MAD{{$original_price}}.00</span>
                    <div class="flex flex-col mr-1">
                        <span class="text-gray-500 leading-none">في</span>
                        <span class="text-gray-500 leading-none">الشهر</span>
                    </div>
                </div>
            </div>

            <section class="mt-6">
                <div class="flex flex-start">
                    <div class="w-10 h-10 bg-gray-100 rounded-xl ml-2 border border-1 border-gray-200 overflow-hidden">
                        <img
                            src="https://stripe-camo.global.ssl.fastly.net/78f71532054ad1bbbe84a7bbff50e02cb538b9d7/68747470733a2f2f66696c65732e7374726970652e636f6d2f6c696e6b732f666c5f746573745f634c744c316b506c6b6e6d6d39307273634b4f3834593962">
                    </div>
                    <div class="flex-1 flex-col flex">
                        <div class="flex-1 flex">
                            <div class="flex flex-col flex-1">
                                <span class="text-gray-700 text-sm">فريق التسيير و التدبير</span>
                                <span class="text-gray-500 text-sm">تدفع شهريا</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-gray-900">MAD{{$original_price}}.00</span>
                            </div>
                        </div>
                        <div class="flex-1 flex mt-6">
                            <div class="flex flex-1 justify-between">
                                <span class="text-gray-900">مبلغ إجمالي</span>
                                <div class="flex flex-col">
                                    <span class="text-gray-900">MAD{{$original_price}}.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="h-px my-4 bg-gray-100 w-full"></div>
                        <div class="flex-1 flex">
                            <span class="text-blue-500">إضافة كود الخصم</span>
                        </div>
                        <div class="h-px my-4 bg-gray-100 w-full"></div>
                        <div class="flex-1 flex">
                            <div class="flex flex-1 justify-between">
                                <span class="text-gray-900">المجموع الكلي</span>
                                <div class="flex flex-col">
                                    <span class="text-gray-900">MAD{{$original_price}}.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <div class="flex-1 border-0 border-r border-1 p-4">
            <div class="w-full flex items-center justify-center  mt-4 mb-8">
                <h2 class="text-gray-900 text-2xl font-semibold">طرف الدفع المتاحة</h2>
            </div>
            <div class="flex flex-col items-center">
                <div class="m-4 w-8/12">
                    <button @click="payNow"
                        class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <!-- Heroicon name: mini/lock-closed -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                            </svg>


                        </span>
                        ادفع الآن
                    </button>
                </div>
            </div>

        </div>
    </div>
    <script>
        var payment_url = "{{$payment_url}}"

        var app = new Vue({
            el: '#app',

            data: {
                ycPay: null
            },
            methods: {

                payNow() {
                    location.href = payment_url
                },
                successCallback(data) {
                    console.log('data --->', data)
                    location.href = 'http://youcanpay.test/success'
                },
                errorCallback(data) {
                    console.log('error --->', data)
                    location.href = 'http://youcanpay.test/error'
                }
            },
        })
    </script>
</body>