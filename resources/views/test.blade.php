<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="output.css" rel="stylesheet">
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <aside class="bg-gray-800 text-gray-200 w-64 min-h-screen fixed z-30 inset-y-0 left-0 overflow-y-auto transform -translate-x-full lg:translate-x-0 transition duration-200 ease-in-out" id="sidebar">
        <div class="p-4">
    <div class="text-xl font-bold">Admin Panel</div>
</div>
<nav class="mt-4">
    <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Dashboard</a>
    <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Users</a>
    <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Products</a>
    <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Settings</a>
</nav>

</aside>

    <div class="lg:pl-64 flex flex-col min-h-screen">
        <header class="bg-white shadow p-4 flex justify-between items-center">

        <div class="text-lg font-semibold">Dashboard</div>
        <div class="flex items-center">
            <span class="mr-2">User Name</span>
            <img src="https://via.placeholder.com/40" alt="User" class="rounded-full">
        </div>

            </header>

        <main class="flex-1 p-6">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-bold mb-4">Total Users</h2>
        <p class="text-3xl font-semibold text-blue-600">5,432</p>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-bold mb-4">Total Revenue</h2>
        <p class="text-3xl font-semibold text-green-600">$12,345</p>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-bold mb-4">New Orders</h2>
        <p class="text-3xl font-semibold text-purple-600">87</p>
    </div>

</div>

<div class="mt-6 bg-white rounded-lg shadow-md p-6">
    <h2 class="text-xl font-bold mb-4">Recent Sales</h2>
    <table class="w-full">
        <thead>
            <tr>
                <th class="text-left py-2 border-b">Order ID</th>
                <th class="text-left py-2 border-b">Customer</th>
                <th class="text-left py-2 border-b">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="py-2">#12345</td>
                <td class="py-2">John Doe</td>
                <td class="py-2"><span class="bg-green-200 text-green-800 rounded-full px-2 py-1 text-xs font-bold">Completed</span></td>
            </tr>
            </tbody>
    </table>
</div>
            </main>
    </div>

</body>
</html>