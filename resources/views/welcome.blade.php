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
</head>

<body class="text-gray-800  leading-normal p-8 h-full">
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
        <div class="flex-1 border-0 border-r border-1">
            <div class="w-full flex items-center justify-center  mt-4 mb-8">
                <h2 class="text-gray-900 text-2xl font-semibold">طرف الدفع المتاحة</h2>
            </div>

            <div class="m-4 flex mt-10 min-h-payment-form relative" dir="ltr" id="youcanpay-form">

            </div>

            <button @click="payNow"
                class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <!-- Heroicon name: mini/lock-closed -->
                    <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
                Pay Now
            </button>
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
                showForm() {
                    // this.ycPay = new YCPay(public_key, {
                    //     formContainer: '#youcanpay-form',
                    //     locale: language,
                    //     isSandbox: isSandbox,
                    //     errorContainer: '#error-container',
                    // });

                    // render the form
                    // this.ycPay.renderCreditCardForm();
                },
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
            mounted() {
                // this.showForm()
            }
        })
    </script>
</body>