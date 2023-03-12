@extends('.layouts.main')
@section('pages')
    <div class="p-5">
        <div class="flex items-center">
            <div class="mx-3 overflow-hidden rounded-full w-28 h-28">
                <img class="object-cover object-center w-full h-full" src="/assets/images/profile1.jpeg" alt="">
            </div>
            <div class="ml-5">
                <span class="font-normal text-[20px]">Hey, Ryan Valdo!</span>
                <h1 class="font-bold text-[30px] ">It’s time to Study!</span>
            </div>
        </div>

        <h4 class="text-[18px] leading-[37.5px] font-normal mt-10">My Progress</h4>
        <div class="grid grid-cols-2 gap-4 mt-3">
            <div class="bg-[#D9D9D9] p-2 px-5 rounded-[25px]">
                <h1 class="font-semibold text-[20px] leading-[52.5px]">Business Management</h1>
                <div class="mt-5">
                    <span class="float-right">50%</span>
                    <progress class="w-full h-[10px] progress" value="50" max="100"></progress>
                </div>
            </div>
            <div class="bg-[#D9D9D9] p-2 px-5 rounded-[25px]">
                <h1 class="font-semibold text-[20px] leading-[52.5px]">Laravel Framework</h1>
                <div class="mt-5">
                    <span class="float-right">80%</span>
                    <progress class="w-full h-[10px] progress" value="80" max="100"></progress>
                </div>
            </div>
            <div class="bg-[#D9D9D9] p-2 px-5 rounded-[25px]">
                <h1 class="font-semibold text-[20px] leading-[52.5px]">Web Development</h1>
                <div class="mt-5">
                    <span class="float-right">20%</span>
                    <progress class="w-full h-[10px] progress" value="20" max="100"></progress>
                </div>
            </div>
            <div id="skeleton-card-template" role="status" class="bg-[#D9D9D9] animate-pulse p-2 px-5 rounded-[25px]">
                <h1 class="h-4 mt-2 bg-gray-400 rounded-full dark:bg-gray-700 w-48 mb-4"></h1>
                <div class="mt-[50px] flex flex-col items-end">
                    <div class="w-[50px] h-3 mb-4 bg-gray-400 rounded-full dark:bg-gray-700 "></div>
                    <div class="h-3 w-full bg-gray-400 rounded-full dark:bg-gray-700 "></div>
                </div>
            </div>
        </div>
    </div>
@endsection
