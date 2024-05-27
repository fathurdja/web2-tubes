@extends('layouts.app')

@section('content')
<main class="p-7 bg-backgroundPrimary min-h-screen w-full mt-[70px]">
    <p class="text-3xl font-bold">Orders</p>
    <div class="mt-7 border border-borderPrimary rounded-xl bg-white">
        <table class="w-full">
            <thead class="text-left">
                <tr class="border-b border-borderPrimary">
                    <th class="pl-8 py-4">ID</th>
                    <th class="">Name</th>
                    <th class="">Product</th>
                    <th class="">Category</th>
                    <th class="">Price</th>
                    <th class="">Status</th>
                    <th class="">Action</th>
                </tr>
            </thead>
            <tbody class="table-row-group font-semibold">
                <tr class="border-b-borborder-borderPrimary border-b">
                    <td class="pl-8 py-6">00001</td>
                    <td>Christine Brooks</td>
                    <td>Fried Rice</td>
                    <td>Food</td>
                    <td>Rp25.000</td>
                    <td>
                        <div
                            class="data-complete:bg-success/20 rounded data-complete:text-success px-4 py-[4px] inline-block data-processing:bg-purple/20 data-processing:text-purple"
                            data-status="complete"
                        >
                            Completed
                        </div>
                    </td>
                    <td class="h-full">
                        <div
                            class="inline-flex rounded-lg bg-[#FAFBFD] border border-borderPrimary"
                        >
                            <button class="py-2 px-4 text-black">
                                <i class="ri-check-line"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="border-b-borborder-borderPrimary border-b">
                    <td class="pl-8 py-6">00001</td>
                    <td>Christine Brooks</td>
                    <td>Fried Rice</td>
                    <td>Food</td>
                    <td>Rp25.000</td>
                    <td>
                        <div
                            class="data-complete:bg-success/20 rounded data-complete:text-success px-4 py-[4px] inline-block data-processing:bg-purple/20 data-processing:text-purple"
                            data-status="processing"
                        >
                            Processing
                        </div>
                    </td>
                    <td class="h-full">
                        <div
                            class="inline-flex rounded-lg bg-[#FAFBFD] border border-borderPrimary"
                        >
                            <button class="py-2 px-4 text-black">
                                <i class="ri-check-line"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="border-b-borborder-borderPrimary border-b">
                    <td class="pl-8 py-6">00001</td>
                    <td>Christine Brooks</td>
                    <td>Fried Rice</td>
                    <td>Food</td>
                    <td>Rp25.000</td>
                    <td>
                        <div
                            class="data-complete:bg-success/20 rounded data-complete:text-success px-4 py-[4px] inline-block data-processing:bg-purple/20 data-processing:text-purple"
                            data-status="complete"
                        >
                            Completed
                        </div>
                    </td>
                    <td class="h-full">
                        <div
                            class="inline-flex rounded-lg bg-[#FAFBFD] border border-borderPrimary"
                        >
                            <button class="py-2 px-4 text-black">
                                <i class="ri-check-line"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="border-b-borborder-borderPrimary border-b">
                    <td class="pl-8 py-6">00001</td>
                    <td>Christine Brooks</td>
                    <td>Fried Rice</td>
                    <td>Food</td>
                    <td>Rp25.000</td>
                    <td>
                        <div
                            class="data-complete:bg-success/20 rounded data-complete:text-success px-4 py-[4px] inline-block data-processing:bg-purple/20 data-processing:text-purple"
                            data-status="processing"
                        >
                            Processing
                        </div>
                    </td>
                    <td class="h-full">
                        <div
                            class="inline-flex rounded-lg bg-[#FAFBFD] border border-borderPrimary"
                        >
                            <button class="py-2 px-4 text-black">
                                <i class="ri-check-line"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="border-b-borborder-borderPrimary border-b">
                    <td class="pl-8 py-6">00001</td>
                    <td>Christine Brooks</td>
                    <td>Fried Rice</td>
                    <td>Food</td>
                    <td>Rp25.000</td>
                    <td>
                        <div
                            class="data-complete:bg-success/20 rounded data-complete:text-success px-4 py-[4px] inline-block data-processing:bg-purple/20 data-processing:text-purple"
                            data-status="complete"
                        >
                            Completed
                        </div>
                    </td>
                    <td class="h-full">
                        <div
                            class="inline-flex rounded-lg bg-[#FAFBFD] border border-borderPrimary"
                        >
                            <button class="py-2 px-4 text-black">
                                <i class="ri-check-line"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="border-b-borborder-borderPrimary border-b">
                    <td class="pl-8 py-6">00001</td>
                    <td>Christine Brooks</td>
                    <td>Fried Rice</td>
                    <td>Food</td>
                    <td>Rp25.000</td>
                    <td>
                        <div
                            class="data-complete:bg-success/20 rounded data-complete:text-success px-4 py-[4px] inline-block data-processing:bg-purple/20 data-processing:text-purple"
                            data-status="processing"
                        >
                            Processing
                        </div>
                    </td>
                    <td class="h-full">
                        <div
                            class="inline-flex rounded-lg bg-[#FAFBFD] border border-borderPrimary"
                        >
                            <button class="py-2 px-4 text-black">
                                <i class="ri-check-line"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
@endsection