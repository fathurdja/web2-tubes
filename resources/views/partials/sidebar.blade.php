<aside class="py-6 w-[240px] bg-white h-screen fixed">
    <div class="flex h-full items-center justify-between flex-col w-full">
        <div class="w-full text-center">
            <p class="font-extrabold text-lg">
                <span class="text-primary">Meow</span>Cafe
            </p>
            <section class="mt-8 flex flex-col">
                <div class="relative px-6">
                    <a
                        href="/"
                        class="p-3 group {{ request()->is('/') ? 'bg-primary text-white' : '' }} items-center flex w-full rounded-md"
                        data-page="{{ request()->is('/') ? 'active' : '' }}"
                    >
                        <div
                            class="bg-primary absolute rounded-e-lg top-0 left-0 h-full w-1 hidden group-data-active:block"
                        ></div>
                        <i class="ri-dashboard-line mr-4 text-lg"></i>
                        <span class="font-semibold">Dashboard</span>
                    </a>
                </div>
                <div class="relative px-6">
                    <a
                        href="/products"
                        class="p-3 group {{ request()->is('products*') ? 'bg-primary text-white' : '' }} items-center flex w-full rounded-md"
                        data-page="{{ request()->is('products*') ? 'active' : '' }}"
                    >
                        <div
                            class="bg-primary absolute rounded-e-lg top-0 left-0 h-full w-1 hidden group-data-active:block"
                        ></div>
                        <i class="ri-microsoft-line mr-4 text-lg"></i>
                        <span class="font-semibold">Products</span>
                    </a>
                </div>
            </section>
            <div class="h-[1px] bg-[#E0E0E0] w-full my-4"></div>
            <section>
                <div class="w-full px-4 mb-4">
                    <span
                        class="px-4 uppercase text-[#202224] font-bold text-sm w-full flex"
                        >Pages</span
                    >
                </div>
                <div class="relative px-6">
                    <a
                        href="/orders"
                        class="p-3 group {{ request()->is('orders') ? 'bg-primary text-white' : '' }} items-center flex w-full rounded-md"
                        data-page="{{ request()->is('orders') ? 'active' : '' }}"
                    >
                        <div
                            class="bg-primary absolute rounded-e-lg top-0 left-0 h-full w-1 hidden group-data-active:block"
                        ></div>
                        <i class="ri-clipboard-line mr-4 text-lg"></i>
                        <span class="font-semibold">Orders</span>
                    </a>
                </div>
            </section>
            {{-- <section>
                <div class="w-full px-4 mb-4">
                    <span
                        class="px-4 uppercase text-[#202224] font-bold text-sm w-full flex"
                        >Pages</span
                    >
                </div>
                <div class="relative px-6">
                    <a
                        href="./orders.html"
                        class="p-3 group data-active:bg-primary items-center flex w-full rounded-md data-active:text-white"
                        data-page="active"
                    >
                        <div
                            class="bg-primary absolute rounded-e-lg top-0 left-0 h-full w-1 hidden group-data-active:block"
                        ></div>
                        <i class="ri-clipboard-line mr-4 text-lg"></i>
                        <span class="font-semibold">Orders</span>
                    </a>
                </div>
            </section> --}}
        </div>
        <div class="w-full px-6">
            <button class="p-3 flex w-full items-center rounded-md">
                <i class="ri-logout-circle-line mr-4 text-lg"></i>
                <span class="font-semibold">Logout</span>
            </button>
        </div>
    </div>
</aside>