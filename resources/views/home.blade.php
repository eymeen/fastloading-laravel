@extends('layouts.app')

@section('content')
<!-- Header -->
<header class="bg-white shadow-sm border-b">
    <div class="container mx-auto px-4 py-4">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-bold text-gray-900">FastStore</h1>
            <nav class="hidden md:flex space-x-6">
                <a href="/product" class="text-gray-600 hover:text-gray-900">Shop</a>
                <a href="/product" class="text-gray-600 hover:text-gray-900">About</a>
                <a href="/product" class="text-gray-600 hover:text-gray-900">Contact</a>
            </nav>
            <div class="flex items-center space-x-4">
                <a href="/product" class="text-gray-600 hover:text-gray-900">
                    🛒 Cart (0)
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-5xl font-bold mb-4">Welcome to FastStore</h2>
        <p class="text-xl mb-8">Discover amazing products at unbeatable prices</p>
        <a href="/product" class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition duration-200">
            Shop Now
        </a>
    </div>
</section>

<!-- Featured Products -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h3 class="text-3xl font-bold text-center mb-12 text-gray-900">Featured Products</h3>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Product 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-200">
                <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                    <span class="text-white text-4xl">📱</span>
                </div>
                <div class="p-4">
                    <h4 class="font-semibold text-lg mb-2">Smartphone Pro</h4>
                    <p class="text-gray-600 text-sm mb-3">Latest technology with amazing features</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-green-600">$699</span>
                        <a href="/product" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-200">
                            View
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-200">
                <div class="h-48 bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center">
                    <span class="text-white text-4xl">💻</span>
                </div>
                <div class="p-4">
                    <h4 class="font-semibold text-lg mb-2">Laptop Ultra</h4>
                    <p class="text-gray-600 text-sm mb-3">High performance for work and gaming</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-green-600">$1,299</span>
                        <a href="/product" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-200">
                            View
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-200">
                <div class="h-48 bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                    <span class="text-white text-4xl">🎧</span>
                </div>
                <div class="p-4">
                    <h4 class="font-semibold text-lg mb-2">Wireless Headphones</h4>
                    <p class="text-gray-600 text-sm mb-3">Premium sound quality with noise cancellation</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-green-600">$199</span>
                        <a href="/product" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-200">
                            View
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-200">
                <div class="h-48 bg-gradient-to-br from-red-400 to-red-600 flex items-center justify-center">
                    <span class="text-white text-4xl">⌚</span>
                </div>
                <div class="p-4">
                    <h4 class="font-semibold text-lg mb-2">Smart Watch</h4>
                    <p class="text-gray-600 text-sm mb-3">Track your fitness and stay connected</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-green-600">$399</span>
                        <a href="/product" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-200">
                            View
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h3 class="text-3xl font-bold text-center mb-12 text-gray-900">Shop by Category</h3>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <a href="/product" class="group bg-gray-100 rounded-lg p-6 text-center hover:bg-gray-200 transition duration-200">
                <div class="text-4xl mb-3">🖥️</div>
                <h4 class="font-semibold">Electronics</h4>
            </a>
            <a href="/product" class="group bg-gray-100 rounded-lg p-6 text-center hover:bg-gray-200 transition duration-200">
                <div class="text-4xl mb-3">👕</div>
                <h4 class="font-semibold">Fashion</h4>
            </a>
            <a href="/product" class="group bg-gray-100 rounded-lg p-6 text-center hover:bg-gray-200 transition duration-200">
                <div class="text-4xl mb-3">🏠</div>
                <h4 class="font-semibold">Home</h4>
            </a>
            <a href="/product" class="group bg-gray-100 rounded-lg p-6 text-center hover:bg-gray-200 transition duration-200">
                <div class="text-4xl mb-3">⚽</div>
                <h4 class="font-semibold">Sports</h4>
            </a>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-16 bg-gray-900 text-white">
    <div class="container mx-auto px-4 text-center">
        <h3 class="text-3xl font-bold mb-4">Stay Updated</h3>
        <p class="text-gray-300 mb-8">Get the latest deals and product updates</p>
        <div class="max-w-md mx-auto flex">
            <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-3 rounded-l-lg text-gray-900">
            <a href="/product" class="bg-blue-600 px-6 py-3 rounded-r-lg hover:bg-blue-700 transition duration-200">
                Subscribe
            </a>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h4 class="font-bold text-lg mb-4">FastStore</h4>
                <p class="text-gray-400">Your trusted online shopping destination</p>
            </div>
            <div>
                <h5 class="font-semibold mb-4">Quick Links</h5>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="/product" class="hover:text-white">Home</a></li>
                    <li><a href="/product" class="hover:text-white">Shop</a></li>
                    <li><a href="/product" class="hover:text-white">About</a></li>
                    <li><a href="/product" class="hover:text-white">Contact</a></li>
                </ul>
            </div>
            <div>
                <h5 class="font-semibold mb-4">Customer Service</h5>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="/product" class="hover:text-white">Help Center</a></li>
                    <li><a href="/product" class="hover:text-white">Returns</a></li>
                    <li><a href="/product" class="hover:text-white">Shipping Info</a></li>
                    <li><a href="/product" class="hover:text-white">Track Order</a></li>
                </ul>
            </div>
            <div>
                <h5 class="font-semibold mb-4">Follow Us</h5>
                <div class="flex space-x-4">
                    <a href="/product" class="text-gray-400 hover:text-white">📘</a>
                    <a href="/product" class="text-gray-400 hover:text-white">🐦</a>
                    <a href="/product" class="text-gray-400 hover:text-white">📷</a>
                </div>
            </div>
        </div>
    </div>
</footer>

@endsection
