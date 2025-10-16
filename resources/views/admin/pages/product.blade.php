<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class=" bg-grey-100 font-sans leading-normal tracking-normal">

@include('admin.partials.sidebar')
<div class="lg:pl-64 flex flex-col min-h-screen">
    <header class="bg-white shadow p-4 flex justify-between items-center">

        <div class="text-lg font-semibold">Товари</div>
        <div class="flex items-center">
            <span class="mr-2">User Name</span>
            <img src="https://via.placeholder.com/40" alt="User" class="rounded-full">
        </div>

    </header>

    <main class="flex-1 p-6">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold mb-4">Підтверджені замовлення</h2>
                <p class="text-3xl font-semibold bg-green-100 px-2 py-1 rounded-full text-green-700">5,432</p>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold mb-4">Очікують підтвердження</h2>
                <p class="text-3xl font-semibold bg-yellow-100 px-2 py-1 rounded-full text-yellow-700">$12,345</p>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold mb-4">Скаcовані</h2>
                <p class="text-3xl font-semibold bg-red-100 px-2 py-1 rounded-full text-red-700">87</p>
            </div>


            <div class="relative inline-block">

                <button id="toggle-category-btn"
                        class="text-xs bg-green-100 w-[150px] h-[40px] text-green-800 font-semibold py-2 px-1 rounded-full hover:bg-green-200 transition duration-150">
                    Створити категорію
                </button>

                <div id="category-form-container"
                     class="absolute mt-2 p-3 bg-white border border-gray-200 rounded-lg shadow-xl z-10 w-64 hidden"
                     style="top: 100%; left: 0;">

                    <form action="/categories" method="POST">
                        <label for="category-name-input" class="block text-sm font-medium text-gray-700 mb-1">Назва
                            категорії:</label>

                        <input type="text" id="category-name-input" name="name"
                               placeholder="Введіть назву..."
                               required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-green-500 focus:border-green-500 text-sm mb-3">

                        <button type="submit"
                                class="w-full bg-green-600 text-white text-sm font-medium py-2 rounded-md hover:bg-green-700 transition duration-150">
                            Створити
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="bg-white shadow rounded-lg p-6 m-3 max-w-xl mx-left">

            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold">Таблиця категорій</h2>
                <div class="flex space-x-2">

                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                    <tr class="text-left text-gray-500 text-sm">
                        <th class="px-4 py-2">Id</th>
                        <th class="px-4 py-2">Назва</th>
                        <th class="px-4 py-2">Редагувати</th>
                        <th class="px-4 py-2">Видалити</th>

                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 text-sm text-gray-700">
                    <tr>
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">Електротехніка</td>
                        <td class="px-10 py-2"><a href="#" style="color: blue"><i class="fa-solid fa-pen"></i></a></td>
                        <td class="px-10 py-2"><a href="#" style="color: red"> <i class="fa-solid text-red fa-trash"></i></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="bg-white shadow rounded-lg p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold">Таблиця замовлень</h2>
                <div class="flex space-x-2">
                    <button class="px-3 py-1 border rounded hover:bg-gray-100 transition flex items-center space-x-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2M3 8h18M3 12h18M3 16h18M3 20h18"/>
                        </svg>
                        <span>Filter</span>
                    </button>
                    <button class="px-3 py-1 border rounded hover:bg-gray-100 transition">See all</button>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                    <tr class="text-left text-gray-500 text-sm">
                        <th class="px-4 py-2">Товар</th>
                        <th class="px-4 py-2">Категорія</th>
                        <th class="px-4 py-2">User ID</th>
                        <th class="px-4 py-2">Price</th>
                        <th class="px-4 py-2">Status</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 text-sm text-gray-700">
                    <tr>
                        <td class="px-4 py-2 flex items-center space-x-2">
                            <img src="https://via.placeholder.com/40" alt="Macbook" class="w-10 h-10 rounded">
                            <div>
                                <div class="font-semibold">Macbook pro 13”</div>
                                <div class="text-gray-400 text-xs">2 Variants</div>
                            </div>
                        </td>
                        <td class="px-4 py-2">Laptop</td>
                        <td class="px-4 py-2">12</td>
                        <td class="px-4 py-2">$2399.00</td>
                        <td class="px-4 py-2">
                            <span
                                class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-xs font-semibold">Прийнято</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 flex items-center space-x-2">
                            <img src="https://via.placeholder.com/40" alt="Apple Watch" class="w-10 h-10 rounded">
                            <div>
                                <div class="font-semibold">Apple Watch Ultra</div>
                                <div class="text-gray-400 text-xs">1 Variants</div>
                            </div>
                        </td>
                        <td class="px-4 py-2">Watch</td>
                        <td class="px-4 py-2">12</td>
                        <td class="px-4 py-2">$879.00</td>
                        <td class="px-4 py-2">
                            <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded-full text-xs font-semibold">Очікується</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 flex items-center space-x-2">
                            <img src="https://via.placeholder.com/40" alt="iPad" class="w-10 h-10 rounded">
                            <div>
                                <div class="font-semibold">iPad Pro 3rd Gen</div>
                                <div class="text-gray-400 text-xs">2 Variants</div>
                            </div>
                        </td>
                        <td class="px-4 py-2">Electronics</td>
                        <td class="px-4 py-2">12</td>
                        <td class="px-4 py-2">$1699.00</td>
                        <td class="px-4 py-2">
                            <span
                                class="bg-red-100 text-red-700 px-2 py-1 rounded-full text-xs font-semibold">Скасовано</span>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>

</body>
</html>
