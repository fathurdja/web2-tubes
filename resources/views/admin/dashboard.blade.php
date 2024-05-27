@extends('layouts.app')

@section('content')
<main class="p-7 bg-backgroundPrimary min-h-screen w-full mt-[70px]">
    <p class="text-3xl font-bold">Dashboard</p>
    <div class="mt-7 grid grid-cols-4 gap-x-7">
        <div
            class="flex flex-col justify-between flex-grow w-full bg-white p-4 h-40 rounded-xl"
        >
            <div class="inline-flex justify-between items-start">
                <div class="font-semibold">Total Drink</div>
                <div>
                    <i
                        class="ri-group-fill text-3xl bg-purple/20 text-purple p-4 rounded-3xl"
                    ></i>
                </div>
            </div>
            <div class="flex justify-between items-end">
                <div>
                    <i class="ri-funds-line text-lg text-success"></i>
                </div>
                <p class="text-2xl font-bold">26</p>
            </div>
        </div>
        <div
            class="flex flex-col justify-between flex-grow w-full bg-white p-4 h-40 rounded-xl"
        >
            <div class="inline-flex justify-between items-start">
                <div class="font-semibold">Total Food</div>
                <div>
                    <i
                        class="ri-line-chart-line text-3xl bg-success/20 text-success p-4 rounded-3xl"
                    ></i>
                </div>
            </div>
            <div class="flex justify-between items-end">
                <div>
                    <i class="ri-funds-line text-lg text-success"></i>
                </div>
                <p class="text-2xl font-bold">10</p>
            </div>
        </div>
        <div
            class="flex flex-col justify-between flex-grow w-full bg-white p-4 h-40 rounded-xl"
        >
            <div class="inline-flex justify-between items-start">
                <div class="font-semibold">Total Order</div>
                <div>
                    <i
                        class="ri-box-3-fill text-3xl bg-warning/20 text-warning p-4 rounded-3xl"
                    ></i>
                </div>
            </div>
            <div class="flex justify-between items-end">
                <div>
                    <i class="ri-funds-line text-lg text-success"></i>
                </div>
                <p class="text-2xl font-bold">10293</p>
            </div>
        </div>
        <div
            class="flex flex-col justify-between flex-grow w-full bg-white p-4 h-40 rounded-xl"
        >
            <div class="inline-flex justify-between items-start">
                <div class="font-semibold">Total Income</div>
                <div>
                    <i
                        class="ri-history-fill text-3xl bg-error/20 text-error p-4 rounded-3xl"
                    ></i>
                </div>
            </div>
            <div class="flex justify-between items-end">
                <div>
                    <i class="ri-funds-line text-lg text-success"></i>
                </div>
                <p class="text-2xl font-bold">Rp.200.040</p>
            </div>
        </div>
    </div>
    <div class="mt-10">
        <div class="w-full h-96 bg-white px-8 py-9 rounded-xl">
            <p class="text-xl font-bold">Sales Details</p>
            <canvas id="myChart" class="w-full"></canvas>
        </div>
    </div>
</main>
@endsection

@push('scripts')
    @include('partials.chart')
@endpush

