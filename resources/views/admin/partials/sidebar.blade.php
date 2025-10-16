<aside
    class="bg-gray-800 text-gray-200 w-64 min-h-screen fixed z-30 inset-y-0 left-0 overflow-y-auto transform -translate-x-full lg:translate-x-0 transition duration-200 ease-in-out"
    id="sidebar">
    <div class="p-4">
        <div class="text-xl font-bold">Admin Panel</div>
    </div>
    <nav class="mt-4">
        <a href="{{ route('admin.users') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Users</a>
        <a href="{{ route('admin.products') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Products</a>
        <a href="{{ route('admin.page.admin_control') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Admin</a>
    </nav>



</aside>
