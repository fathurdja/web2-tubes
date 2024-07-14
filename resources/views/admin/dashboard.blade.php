@extends('layouts.app')

@section('content')
    <main class="p-7 bg-slate-200 min-h-screen w-full mt-[70px]">
        <p class="text-3xl font-bold">Dashboard</p>
        <div class="mt-8">
            <div class="w-full px-8 bg-white h-96 py-9 rounded-xl">
                <p class="text-xl font-bold">Sales Details</p>
                <canvas id="myChart" class="w-full"></canvas>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    @include('partials.chart')
@endpush
