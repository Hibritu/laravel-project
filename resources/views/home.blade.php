<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Restaurant Management System for managing customers, items, and orders.">
    <meta name="keywords" content="restaurant, management, customers, items, orders">
    <meta name="author" content="Your Name">
    <title>Restaurant Management System</title>
    <!-- Include compiled CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<!-- Add Font Awesome CDN link in the head -->



<body class="bg-gray-100">
    <!-- Navigation Bar -->
    <nav>
    <div class="container mx-auto flex justify-between items-center">
        <a href="/" class="text-black text-lg font-bold">Restaurant Management System</a>
        <div class="space-x-4">
            <a href="/" class="text-black hover:text-gray-200"><i class="fas fa-home"></i> Home</a>
            <a href="/customers" class="text-black hover:text-gray-200"><i class="fas fa-users"></i> Customers</a>
            <a href="/items" class="text-black hover:text-gray-200"><i class="fas fa-utensils"></i> Items</a>
            <a href="/orders" class="text-black hover:text-gray-200"><i class="fas fa-clipboard-list"></i> Orders</a>
        </div>
    </div>


        <img src="images/banner/Banner-3.jpg" alt="Customers" class="rounded-lg w-full h-50 object-cover">
    </nav>

    <div class="container mx-auto p-8">
    <h2 class="text-3xl font-bold text-center text-gray-800">Today's Specials</h2>
    <div class="flex flex-row md:flex-row gap-8 mt-8">
        <!-- Menu Item 1 -->
        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 flex-1">
            <img src="images/banner/Restaurant.jpg" alt="Customers" class="rounded-lg w-full h-70 object-cover">
            <h3 class="text-xl font-bold mt-4 text-gray-800">Customers</h3>
            <p class="mt-2 text-gray-600">Manage your customers efficiently.</p>
            <a href="/customers"  class="btn btn-primary text-blue mt-4 text-blue-700 font-bold hover:text-blue-900">manage Customers</a>
        </div>

        <!-- Menu Item 2 -->
        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 flex-1">
            <img src="images/banner/burger.jpg" alt="Items" class="rounded-lg w-full h-70 object-cover">
            <h3 class="text-xl font-bold mt-4 text-gray-800">Items</h3>
            <p class="mt-2 text-gray-600">Manage your menu items with ease.</p>
            <a href="/items"  class="btn btn-primary mt-4 text-blue-700 font-bold hover:text-blue-900 ">manage items</a>
        </div>

        <!-- Menu Item 3 -->
        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 flex-1">
            <img src="images/banner/order.jpg" alt="Orders" class="rounded-lg w-full h-70 object-cover">
            <h3 class="text-xl font-bold mt-4 text-gray-800">Orders</h3>
            <p class="mt-2 text-gray-600">Track and manage customer orders.</p>
            <a href="/orders" class="mt-4 text-blue-700 font-bold hover:text-blue-900"> Manage Orders</a>
            


                

        </div>
    </div>
</div>
    <!-- Footer -->
    <footer class="bg-blue-600 text-black p-6 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 Delicious Bites. All rights reserved.</p>
        </div>
    </footer>

    <!-- Include compiled JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>