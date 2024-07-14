<aside class="min-h-full p-6 mt-6 bg-white w-72 rounded-xl">
    <p class="font-bold">Category</p>
    <div class="flex flex-col mt-4 gap-y-1">
        <a href="/home"
            class="flex justify-between px-4 py-3 font-semibold rounded {{ request()->is('home') ? 'bg-red-600 text-white' : 'text-textPrimary' }}">
            <div>
                <i class="mr-3 ri-restaurant-line"></i>
                <span>Food</span>
            </div>
            <span class="{{ request()->is('/home') ? 'text-white' : 'text-textPrimary/60' }}">{{ $foodCount }}</span>
        </a>
        <a href="/drink"
            class="flex justify-between px-4 py-3 font-semibold rounded {{ request()->is('drink*') ? 'bg-red-600 text-white' : 'text-textPrimary' }}">
            <div>
                <i class="mr-3 ri-goblet-line"></i>
                <span>Drink</span>
            </div>
            <span class="{{ request()->is('drink*') ? 'text-white' : 'text-primary/80' }}">{{ $drinkCount }}</span>
        </a>
        <a href="{{ route('cart') }}"
            class="flex justify-between px-4 py-3 font-semibold rounded {{ request()->is('cart') ? 'bg-red-600 text-white' : 'text-textPrimary' }}">
            <div>
                <i class="mr-3 ri-shopping-cart-line"></i>
                <span>Cart</span>
            </div>
            <span class="{{ request()->is('cart') ? 'text-white' : 'text-primary/80' }}">{{ $totalOrders }}</span>
        </a>
    </div>
</aside>
