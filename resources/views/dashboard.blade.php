@push('css')
@endpush

@push('js')
    {{--    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"--}}
    {{--            integrity="sha512-L0Shl7nXXzIlBSUUPpxrokqq4ojqgZFQczTYlGjzONGTDAcLremjwaWv5A+EDLnxhQzY5xUZPWLOLqYRkY0Cbw=="--}}
    {{--            crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('/js/dashboard.js') }}"></script>
@endpush

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="fas fa-gauge mr-1"></i>
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">

                        {{--todo--}}
                        <div class="grid grid-cols-6 gap-4 mb-5">
                            <div class="col-span-full">
                                <div class="flex flex-wrap gap-4 justify-center">
                                    <div class="dark:bg-gray-800 bg-white shadow rounded-xl flex gap-4 !p-4">
                                        <div class="flex justify-center items-center">
                                            <div class="text-8xl font-extrabold">
                                                <p class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">
                                                    <i class="fa fa-trophy-alt"></i>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-4">
                                            <div>
                                                <div class="text-6xl font-bold text-center">
                                                    <p class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">
                                                        32</p>
                                                </div>
                                            </div>
                                            <div class="flex gap-4">
                                                <div class="flex flex-col gap-4 text-center font-bold">
                                                    <p class="dark:text-gray-400 text-gray-500 text-xs">Guitar</p>
                                                    <span>44</span>
                                                </div>
                                                <div class="flex flex-col gap-4 text-center font-bold">
                                                    <p class="dark:text-gray-400 text-gray-500 text-xs">Singing</p>
                                                    <span>56</span>
                                                </div>
                                                <div class="flex flex-col gap-4 text-center font-bold">
                                                    <p class="dark:text-gray-400 text-gray-500 text-xs">Drum</p>
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dark:bg-gray-800 bg-white shadow rounded-xl flex gap-4 !p-4">
                                        <div class="flex justify-center items-center">
                                            <div class="text-8xl font-extrabold">
                                                <p class="bg-clip-text text-transparent bg-gradient-to-r from-cyan-500 to-emerald-500">
                                                    <i class="fa-thin fa-money-bill-trend-up"></i>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-4 items-center justify-center">
                                            <div>
                                                <div class="text-6xl font-bold text-center">
                                                    <p class="bg-clip-text text-transparent bg-gradient-to-r from-cyan-500 to-emerald-500">
                                                        8000 $</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
