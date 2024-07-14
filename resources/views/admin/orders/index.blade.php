@extends('layouts.app')

@section('content')
    <main class="p-7 bg-backgroundPrimary min-h-screen w-full mt-[70px]">
        <p class="text-3xl font-bold">Orders Status And Reservation</p>
        <div class="bg-white border mt-7 border-borderPrimary rounded-xl">
            <table class="w-full">
                <thead class="text-left">
                    <tr class="border-b border-borderPrimary">
                        <th class="py-4 pl-8">No</th>
                        <th class="">Name</th>
                        <th class="">Table</th>
                        <th class="">Phone</th>
                        <th class="">Date</th>
                        <th class="">Status</th>
                        <th class="">Action</th>
                    </tr>
                </thead>
                <tbody class="table-row-group font-semibold">
                    @foreach ($reservations as $index => $order)
                    <tr class="border-b border-b-borborder-borderPrimary">
                        <td class="py-6 pl-8">{{ $index+1 }}</td>
                        <td>{{ $order->nama }}</td>
                        <td>{{ ucwords($order->table) }}</td>
                        <td>{{ ucwords($order->phone)  }}</td>
                        <td>{{ $order->date }}</td>
                        <td>
                            <div class="data-complete:bg-success/20 rounded data-complete:text-success px-4 py-[4px] inline-block data-processing:bg-purple/20 data-processing:text-purple"
                                data-status="{{ $order->status === 'processing' ? 'processing' : 'complete' }}">
                                {{ Str::ucfirst($order->status) }}
                            </div>
                            
                        </td>
                        <td class="h-full">
                            <div class="inline-flex rounded-lg bg-[#FAFBFD] border border-borderPrimary">
                                <div class="w-[1px] bg-bordeborder-borderPrimary h-10"></div>
                                <form action="{{ route('orders.complete', $order->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="px-4 py-2">
                                        <i class="ri-check-line"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
            </div>
            {{-- <div class="mt-5">
                {{ $reservations->links() }}
            </div> --}}
    </main>
@endsection
