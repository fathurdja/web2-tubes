@extends('layouts.app')


@section('content')
<main class="p-7 bg-backgroundPrimary min-h-screen w-full mt-[70px]">
    <div class="flex items-center justify-between">
        <p class="text-3xl font-bold">Edit Products</p>
        <div class="flex gap-2">
            <button
                type="submit"
                form="form"
                class="inline-flex justify-center h-full py-3 text-base font-bold text-white rounded-md bg-primary w-36"
            >
                <p class="-mb-[2px]">Add</p>
            </button>
            <a
                href=""
                class="inline-flex justify-center h-full py-3 text-base font-bold text-white bg-red-500 rounded-md w-36"
            >
                <p class="-mb-[2px]">Delete</p>
            </a>
        </div>
    </div>

    <form
        id="form"
        method="post"
        action="./addProduct.html"
        class="grid grid-cols-5 font-semibold mt-7 gap-x-8 text-md"
    >
        <div
            class="flex flex-col col-span-3 gap-6 px-8 py-6 bg-white border rounded-lg border-borderPrimary"
        >
            <div class="flex flex-col gap-3">
                <label for="product_name">Product Name</label>
                <input
                    type="text"
                    id="product_name"
                    name="product_name"
                    placeholder="Input product name"
                    class="px-5 py-2 border rounded-md border-borderPrimary bg-backgroundPrimary"
                />
            </div>
            <div>
                <fieldset class="flex flex-col gap-3">
                    <p>Category</p>
                    <div class="flex gap-1">
                        <div>
                            <input
                                type="radio"
                                name="category"
                                id="food"
                                class="hidden peer"
                                value="food"
                            />
                            <label
                                role="button"
                                for="food"
                                tabindex="0"
                                class="peer-checked:text-white bg-[#D9D9D9] peer-checked:bg-primary px-6 py-2 text-base rounded-s-md"
                            >
                                Food
                            </label>
                        </div>
                        <div>
                            <input
                                type="radio"
                                name="category"
                                id="drink"
                                class="hidden peer"
                                value="drink"
                            />
                            <label
                                role="button"
                                for="drink"
                                tabindex="0"
                                class="peer-checked:text-white bg-[#D9D9D9] peer-checked:bg-primary px-6 py-2 text-base rounded-e-md"
                            >
                                Drink
                            </label>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="flex flex-col gap-3">
                <label for="price">Price</label>
                <input
                    type="text"
                    id="price"
                    name="price"
                    placeholder="Input price"
                    class="px-5 py-2 border rounded-md border-borderPrimary bg-backgroundPrimary"
                />
            </div>
            <div class="flex flex-col gap-3">
                <label for="stock">Stock</label>
                <input
                    type="text"
                    id="stock"
                    name="stock"
                    placeholder="Input stock"
                    class="px-5 py-2 border rounded-md border-borderPrimary bg-backgroundPrimary"
                />
            </div>
        </div>
        <section
            class="col-span-2 py-6 bg-white border rounded-lg h-fit border-borderPrimary"
        >
            <p class="px-8 text-lg font-bold">Product Image</p>
            <div
                class="h-[1px] border-b border-b-borderPrimary w-full my-4"
            ></div>
            <div class="px-4">
                <label
                    for="image-upload"
                    id="drag-area"
                    class="w-full h-[280px] bg-backgroundPrimary border-2 border-[#D9D9D9] border-dashed rounded-lg overflow-hidden cursor-pointer flex justify-center items-center"
                >
                    <input
                        id="image-upload"
                        name="image"
                        type="file"
                        hidden
                        accept="image/*"
                    />
                    <div
                        id="image-viewer"
                        class="flex flex-col items-center justify-center w-full h-full bg-center bg-no-repeat bg-cover"
                    >
                        <img src="{{ asset('images/imagePlaceholder.png') }}" alt="" />
                        <p class="text-[18px]">
                            Tarik dan lepas atau
                            <span class="text-primary">pilih gambar</span>
                        </p>
                        <p class="text-base text-black/25">
                            Mendukung JPG, JPEG, dan PNG
                        </p>
                    </div>
                </label>
            </div>
        </section>
    </form>
</main>
@endsection

@push('scripts')
    <script src="{{ asset('js/imageUploader.js') }}"></script>
@endpush