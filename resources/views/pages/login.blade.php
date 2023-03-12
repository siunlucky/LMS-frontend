<!doctype html>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
</head>

<body class="font-poppins">
    <div class="grid grid-cols-2">
        <div class="bg-[#D9D9D9] h-screen"></div>
        <div class="mx-[168px] flex flex-col items-center justify-center">
            <h1 class="text-[40px] font-semibold leading-[75px]">Masuk ke LMS</h1>
            <div class="mt-[30px] w-full">
                <form action="">
                    <div class="flex flex-col ">
                        <label for="" class="hidden">Email</label>
                        <input type="email" class="border border-[#00000080] rounded-[10px] p-3.5"
                            placeholder="Email">
                    </div>
                    <div class="mt-[20px] flex flex-col relative">
                        <label for="" class="hidden">Password</label>
                        <input type="password" class="border border-[#00000080] rounded-[10px] p-3.5"
                            placeholder="Password">
                        <button class="absolute right-5 inset-y-2.5">

                            <img src="/assets/images/show.png" width="20" height="20" class="ml-4"
                                alt="">
                        </button>


                    </div>
                    <div class="mt-[20px] flex flex-col relative">
                        <label for="" class="hidden">Confirm Password</label>
                        <input type="password" class="border border-[#00000080] rounded-[10px] p-3.5"
                            placeholder="Confirm Password">
                        <button class="absolute right-5 inset-y-2.5">

                            <img src="/assets/images/show.png" width="20" height="20" class="ml-4"
                                alt="">
                        </button>
                    </div>
                    <div class="mt-[18px] flex items-center">
                        <input type="checkbox" class="h-[23px] w-[23px] border border-[#00000080] rounded-[10px]">
                        <label for="" class="text-[15px] font-normal mt-1 ml-3 leading-[22.5px]">Remember
                            Me</label>
                    </div>

                    <div class="flex justify-center">
                        <button
                            class="bg-[#D9D9D9] w-[300px] h-14 mt-5 border border-[#000000] rounded-[10px]">Continue</button>
                    </div>

                    <div class="mt-5 text-center">
                        <span class="inline-block border-t border-gray-400 w-[190px] mb-1"></span>
                        <span class="px-3 font-medium text-gray-500">Or</span>
                        <span class="inline-block border-t border-gray-400 w-[190px] mb-1"></span>
                    </div>

                    <div class="mt-[18px] flex items-center">
                        <button class="flex items-center border border-[#00000080] rounded-[10px] p-3 w-full">

                            <img src="/assets/images/google.png" width="40" height="40" class="ml-4"
                                alt="">
                            <span class="ml-5">Login using Google</span>
                        </button>
                    </div>

                    <div class="mt-[18px] flex items-center">
                        <button class="flex items-center border border-[#00000080] rounded-[10px] p-3 w-full">
                            <img src="/assets/images/facebook.png" class="w-[40px] h-[40px] ml-4" alt="">
                            <span class="ml-5">Login using Facebook</span>
                        </button>
                    </div>

                    <div class="flex justify-center mt-[18px]">
                        <span>Don't have an account? <a href="/register"><u>Register</u></a></span>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>
