@extends('layouts.app')

@section('content')
<main class="p-7 bg-backgroundPrimary min-h-screen w-full mt-[70px]">
    <div class="flex justify-between items-center">
        <p class="text-3xl font-bold">Products</p>
        <a
            href="/products/create"
            class="bg-primary text-white font-bold h-full text-base w-36 inline-flex py-3 rounded-md justify-center"
        >
            <p class="-mb-[2px]">Add</p>
        </a>
    </div>
    <div class="mt-7 border border-borderPrimary rounded-xl bg-white">
        <table class="w-full table-fixed">
            <thead class="text-left">
                <tr class="border-b border-borderPrimary">
                    <th class="w-2/12 text-center py-4">Image</th>
                    <th class="w-3/12">Product Name</th>
                    <th class="w-3/12">Category</th>
                    <th class="w-3/12">Price</th>
                    <th class="w-3/12">Stock</th>
                    <th class="w-2/12">Action</th>
                </tr>
            </thead>
            <tbody class="table-row-group font-semibold">
                <tr class="border-b-bordeborder-borderPrimary border-b">
                    <td class="py-6 flex justify-center">
                        <img src="{{asset('images/friedrice.png')}}" alt="" />
                    </td>
                    <td>Fried Rice</td>
                    <td>Food</td>
                    <td>Rp25.000</td>
                    <td>10</td>
                    <td class="h-full">
                        <div
                            class="inline-flex rounded-lg bg-[#FAFBFD] border border-borderPrimary"
                        >
                            <a href="/products/edit" class="py-2 px-4 text-black">
                                <i class="ri-edit-box-line"></i>
                            </a>
                            <div
                                class="w-[1px] bg-bordeborder-borderPrimary h-10"
                            ></div>
                            <button class="py-2 px-4 text-red-500">
                                <i class="ri-delete-bin-line"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="border-b-bordeborder-borderPrimary border-b">
                    <td class="py-6 flex justify-center">
                        <img src="{{asset('images/friedrice.png')}}" alt="" />
                    </td>
                    <td>Fried Rice</td>
                    <td>Food</td>
                    <td>Rp25.000</td>
                    <td>10</td>
                    <td class="h-full">
                        <div
                            class="inline-flex rounded-lg bg-[#FAFBFD] border border-borderPrimary"
                        >
                            <a href="/products/edit" class="py-2 px-4 text-black">
                                <i class="ri-edit-box-line"></i>
                            </a>
                            <div
                                class="w-[1px] bg-bordeborder-borderPrimary h-10"
                            ></div>
                            <button class="py-2 px-4 text-red-500">
                                <i class="ri-delete-bin-line"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="border-b-bordeborder-borderPrimary border-b">
                    <td class="py-6 flex justify-center">
                        <img src="../images/friedrice.png" alt="" />
                    </td>
                    <td>Fried Rice</td>
                    <td>Food</td>
                    <td>Rp25.000</td>
                    <td>10</td>
                    <td class="h-full">
                        <div
                            class="inline-flex rounded-lg bg-[#FAFBFD] border border-borderPrimary"
                        >
                            <a href="./editProduct.html" class="py-2 px-4 text-black">
                                <i class="ri-edit-box-line"></i>
                            </a>
                            <div
                                class="w-[1px] bg-bordeborder-borderPrimary h-10"
                            ></div>
                            <button class="py-2 px-4 text-red-500">
                                <i class="ri-delete-bin-line"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="border-b-bordeborder-borderPrimary border-b">
                    <td class="py-6 flex justify-center">
                        <img src="{{asset('images/friedrice.png')}}" alt="" />
                    </td>
                    <td>Fried Rice</td>
                    <td>Food</td>
                    <td>Rp25.000</td>
                    <td>10</td>
                    <td class="h-full">
                        <div
                            class="inline-flex rounded-lg bg-[#FAFBFD] border border-borderPrimary"
                        >
                            <a href="/products/edit" class="py-2 px-4 text-black">
                                <i class="ri-edit-box-line"></i>
                            </a>
                            <div
                                class="w-[1px] bg-bordeborder-borderPrimary h-10"
                            ></div>
                            <button class="py-2 px-4 text-red-500">
                                <i class="ri-delete-bin-line"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="border-b-bordeborder-borderPrimary border-b">
                    <td class="py-6 flex justify-center">
                        <img src="{{asset('images/friedrice.png')}}" alt="" />
                    </td>
                    <td>Fried Rice</td>
                    <td>Food</td>
                    <td>Rp25.000</td>
                    <td>10</td>
                    <td class="h-full">
                        <div
                            class="inline-flex rounded-lg bg-[#FAFBFD] border border-borderPrimary"
                        >
                            <a href="./editProduct.html" class="py-2 px-4 text-black">
                                <i class="ri-edit-box-line"></i>
                            </a>
                            <div
                                class="w-[1px] bg-bordeborder-borderPrimary h-10"
                            ></div>
                            <button class="py-2 px-4 text-red-500">
                                <i class="ri-delete-bin-line"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="border-b-bordeborder-borderPrimary border-b">
                    <td class="py-6 flex justify-center">
                        <img src="{{asset('images/friedrice.png')}}" alt="" />
                    </td>
                    <td>Fried Rice</td>
                    <td>Food</td>
                    <td>Rp25.000</td>
                    <td>10</td>
                    <td class="h-full">
                        <div
                            class="inline-flex rounded-lg bg-[#FAFBFD] border border-borderPrimary"
                        >
                            <a href="./editProduct.html" class="py-2 px-4 text-black">
                                <i class="ri-edit-box-line"></i>
                            </a>
                            <div
                                class="w-[1px] bg-bordeborder-borderPrimary h-10"
                            ></div>
                            <button class="py-2 px-4 text-red-500">
                                <i class="ri-delete-bin-line"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
@endsection