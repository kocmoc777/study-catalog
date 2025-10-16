<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

@include('admin.partials.sidebar')

<div class="lg:pl-64 flex flex-col min-h-screen">
    <header class="bg-white shadow p-4 flex justify-between items-center">
        <div class="text-lg font-semibold">Користувачі</div>
        <div class="flex items-center">
            <span class="mr-2">User Name</span>
            <img src="https://via.placeholder.com/40" alt="User" class="rounded-full">
        </div>
    </header>

    <main class="flex-1 p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold mb-4">Загально користувачів</h2>
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
            <h2 class="text-xl font-bold mb-4">Таблиця користувачів</h2>
            <table class="w-full">
                <thead>
                <tr>
                    <th class="text-left py-2 border-b">ID</th>
                    <th class="text-left py-2 border-b">Ім'я</th>
                    <th class="text-left py-2 border-b">Статус пошти</th>
                    <th class="text-left py-2 border-b">Створено</th>
                    <th class="text-left py-2 border-b">Видалено</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="py-2">#1</td>
                    <td class="py-2">John Doe</td>
                    <td class="py-2"><span class="bg-green-200 text-green-800 rounded-full px-2 py-1 text-xs font-bold">Підтвержено</span></td>
                    <td class="py-2">12.08.2025</td>
                    <td class="py-2">12.08.2025</td>
                </tr>
                <tr>
                    <td class="py-2">#2</td>
                    <td class="py-2">John Doe</td>
                    <td class="py-2"><span class="bg-red-200 text-red-800 rounded-full px-2 py-1 text-xs font-bold">Очікується</span></td>
                    <td class="py-2">12.08.2025</td>
                </tr>
                <tr>
                    <td class="py-2">#3</td>
                    <td class="py-2">John Doe</td>
                    <td class="py-2"><span class="bg-green-200 text-green-800 rounded-full px-2 py-1 text-xs font-bold">Підтвержено</span></td>
                    <td class="py-2">12.08.2025</td>
                </tr>
                <tr>
                    <td class="py-2">#4</td>
                    <td class="py-2">John Doe</td>
                    <td class="py-2"><span class="bg-green-200 text-green-800 rounded-full px-2 py-1 text-xs font-bold">Підтвержено</span></td>
                    <td class="py-2">12.08.2025</td>
                </tr>
                </tbody>
            </table>
        </div>

    </main>
</div>

</body>
</html>

