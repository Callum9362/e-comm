<div class="sidebar min-h-screen top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-gray-900">
    <div class="text-gray-100 text-xl">
        <div class="p-2.5 mt-1 flex items-center">
            <h1 class="font-bold text-gray-200 text-[15px] ml-3">Admin Manager</h1>
        </div>
        <div class="my-2 bg-gray-600 h-[1px]"></div>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
        <a href="{{ route('dashboard') }}" class="text-[15px] ml-4 text-gray-200 font-bold">Home</a>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
        <a href="{{ route('all-orders') }}" class="text-[15px] ml-4 text-gray-200 font-bold">Orders</a>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
        <a href="{{ route('flagged') }}" class="text-[15px] ml-4 text-gray-200 font-bold">Flagged Reviews</a>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
        <a href="{{ route('cancelled') }}" class="text-[15px] ml-4 text-gray-200 font-bold">Cancelled Orders</a>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
        <a href="{{ route('create-coupon') }}" class="text-[15px] ml-4 text-gray-200 font-bold">Create Coupon</a>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
        <a href="{{ route('expired-coupons') }}" class="text-[15px] ml-4 text-gray-200 font-bold">Expired Coupons</a>
    </div>
    <div class="my-4 bg-gray-600 h-[1px]"></div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
        <a href="{{ route('contact') }}" class="text-[15px] ml-4 text-gray-200 font-bold">Contact Us</a>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
        <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
    </div>
</div>
