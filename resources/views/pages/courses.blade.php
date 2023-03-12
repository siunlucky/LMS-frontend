@extends('.layouts.main')
@section('pages')
    <div class="p-5">
        <div class="flex justify-around mx-48 mt-4 font-normal">
            <a href="" class="flex flex-col items-center">
                <span>All</span>
                <div class="w-2 h-2 bg-black rounded-full"></div>
            </a>
            <a href="" class="">
                <span>In Progress</span>
            </a>
            <a href="" class="">
                <span>Overdue</span>
            </a>
            <a href="" class="">
                <span>Not Started</span>
            </a>
            <a href="" class="">
                <span class="">Completed</span>
            </a>
            <a href="" class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                    <path d="M7 11h10v2H7zM4 7h16v2H4zm6 8h4v2h-4z"></path>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-2 gap-4 mt-16 content">
            <div class="bg-[#D9D9D9] p-2 px-5 rounded-[25px] flex">
                <div class="w-20">
                    <img src="/assets/images/book.png" alt="">
                </div>
                <h1 class="font-semibold text-[20px] ml-7 leading-[52.5px]">Business Management</h1>
            </div>

            <div class="bg-[#D9D9D9] p-2 px-5 rounded-[25px] flex content">
                <div class="w-20">
                    <img src="/assets/images/book.png" alt="">
                </div>
                <h1 class="font-semibold text-[20px] ml-7 leading-[52.5px]">Business Management</h1>
            </div>

            <div class="bg-[#D9D9D9] p-2 px-5 rounded-[25px] flex content">
                <div class="w-20">
                    <img src="/assets/images/book.png" alt="">
                </div>
                <h1 class="font-semibold text-[20px] ml-7 leading-[52.5px]">Business Management</h1>
            </div>

            <div id="skeleton-card-template" class="bg-[#D9D9D9] p-2 px-5 rounded-[25px] flex">
                <div role="status" class="animate-pulse space-y-0 space-x-8 flex items-center">
                    <div class="flex items-center justify-center w-[80px] h-full bg-gray-400 rounded dark:bg-gray-700">
                        <svg class="w-12 h-12 text-gray-200" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                            fill="currentColor" viewBox="0 0 640 512">
                            <path
                                d="M480 80C480 35.82 515.8 0 560 0C604.2 0 640 35.82 640 80C640 124.2 604.2 160 560 160C515.8 160 480 124.2 480 80zM0 456.1C0 445.6 2.964 435.3 8.551 426.4L225.3 81.01C231.9 70.42 243.5 64 256 64C268.5 64 280.1 70.42 286.8 81.01L412.7 281.7L460.9 202.7C464.1 196.1 472.2 192 480 192C487.8 192 495 196.1 499.1 202.7L631.1 419.1C636.9 428.6 640 439.7 640 450.9C640 484.6 612.6 512 578.9 512H55.91C25.03 512 .0006 486.1 .0006 456.1L0 456.1z" />
                        </svg>
                    </div>
                    <div class="">
                        <div class="h-3.5 bg-gray-400 rounded-full dark:bg-gray-700 w-[250px] mb-11"></div>
                    </div>
                    <span class="sr-only">Loading...</span>
                </div>
            </div>



        </div>

    </div>
@endsection

@section('scripts')
@endsection
