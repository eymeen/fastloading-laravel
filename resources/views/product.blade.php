@extends('layouts.app')

@section('content')
<!-- Header -->
<header class="bg-white shadow-sm border-b">
    <div class="container mx-auto px-4 py-4">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-bold text-gray-900">FastStore</h1>
            <nav class="hidden md:flex space-x-6">
                <a href="/" class="text-gray-600 hover:text-gray-900">Home</a>
                <a href="/product" class="text-blue-600 font-semibold">Shop</a>
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

<!-- Breadcrumb -->
<div class="bg-gray-50 py-4">
    <div class="container mx-auto px-4">
        <nav class="text-sm">
            <a href="/" class="text-blue-600 hover:text-blue-800">Home</a>
            <span class="mx-2 text-gray-500">/</span>
            <span class="text-gray-700">Product Details</span>
        </nav>
    </div>
</div>

<!-- Product Details -->
<div class="container mx-auto px-4 py-12">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Product Image -->
            <div class="space-y-4">
                <div class="aspect-square bg-gradient-to-br from-blue-400 to-purple-600 rounded-lg flex items-center justify-center">
                    <span class="text-white text-8xl">📱</span>
                </div>
                <div class="grid grid-cols-4 gap-2">
                    <div class="aspect-square bg-gradient-to-br from-blue-300 to-blue-500 rounded-md flex items-center justify-center">
                        <span class="text-white text-2xl">📱</span>
                    </div>
                    <div class="aspect-square bg-gradient-to-br from-purple-300 to-purple-500 rounded-md flex items-center justify-center">
                        <span class="text-white text-2xl">📱</span>
                    </div>
                    <div class="aspect-square bg-gradient-to-br from-pink-300 to-pink-500 rounded-md flex items-center justify-center">
                        <span class="text-white text-2xl">📱</span>
                    </div>
                    <div class="aspect-square bg-gradient-to-br from-indigo-300 to-indigo-500 rounded-md flex items-center justify-center">
                        <span class="text-white text-2xl">📱</span>
                    </div>
                </div>
            </div>

            <!-- Product Info -->
            <div class="space-y-6">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">Smartphone Pro Max</h1>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="flex text-yellow-400">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <span class="text-gray-600">(127 reviews)</span>
                    </div>
                    <p class="text-3xl font-bold text-green-600">$699.99</p>
                    <p class="text-gray-500 line-through">$899.99</p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-2">Description</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Experience the future with our latest Smartphone Pro Max. Featuring cutting-edge technology,
                        an amazing camera system, and lightning-fast performance. Perfect for work, entertainment,
                        and staying connected with loved ones.
                    </p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-3">Features</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center"><span class="mr-2">✅</span> 6.7-inch Super Retina Display</li>
                        <li class="flex items-center"><span class="mr-2">✅</span> Triple-camera system with 4K video</li>
                        <li class="flex items-center"><span class="mr-2">✅</span> A16 Bionic chip for ultimate performance</li>
                        <li class="flex items-center"><span class="mr-2">✅</span> All-day battery life</li>
                        <li class="flex items-center"><span class="mr-2">✅</span> 5G connectivity</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-3">Color</h3>
                    <div class="flex space-x-3">
                        <button class="w-10 h-10 rounded-full bg-blue-500 border-2 border-blue-600"></button>
                        <button class="w-10 h-10 rounded-full bg-purple-500 border-2 border-gray-300"></button>
                        <button class="w-10 h-10 rounded-full bg-pink-500 border-2 border-gray-300"></button>
                        <button class="w-10 h-10 rounded-full bg-gray-800 border-2 border-gray-300"></button>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-3">Storage</h3>
                    <div class="grid grid-cols-3 gap-3">
                        <button class="px-4 py-2 border-2 border-blue-600 text-blue-600 rounded-lg font-semibold">128GB</button>
                        <button class="px-4 py-2 border-2 border-gray-300 text-gray-600 rounded-lg">256GB</button>
                        <button class="px-4 py-2 border-2 border-gray-300 text-gray-600 rounded-lg">512GB</button>
                    </div>
                </div>

                <div class="space-y-4">
                    <button class="w-full bg-blue-600 text-white py-4 rounded-lg font-semibold text-lg hover:bg-blue-700 transition duration-200">
                        Add to Cart - $699.99
                    </button>
                    <button class="w-full border-2 border-gray-300 text-gray-700 py-4 rounded-lg font-semibold hover:bg-gray-50 transition duration-200">
                        Add to Wishlist ❤️
                    </button>
                </div>

                <div class="bg-blue-50 border-l-4 border-blue-400 p-4">
                    <p class="text-blue-700 text-sm">
                        ✨ This page is cached using Laravel Response Cache for optimal performance!
                        Navigation powered by Turbo.js for lightning-fast browsing.
                    </p>
                </div>

                <div class="pt-6 border-t">
                    <a href="/" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold">
                        ← Back to Store
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Related Products -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h3 class="text-2xl font-bold mb-8">Related Products</h3>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-200">
                <div class="h-40 bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                    <span class="text-white text-3xl">🎧</span>
                </div>
                <div class="p-4">
                    <h4 class="font-semibold mb-2">Wireless Headphones</h4>
                    <p class="text-green-600 font-bold">$199</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-200">
                <div class="h-40 bg-gradient-to-br from-red-400 to-red-600 flex items-center justify-center">
                    <span class="text-white text-3xl">⌚</span>
                </div>
                <div class="p-4">
                    <h4 class="font-semibold mb-2">Smart Watch</h4>
                    <p class="text-green-600 font-bold">$399</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-200">
                <div class="h-40 bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center">
                    <span class="text-white text-3xl">💻</span>
                </div>
                <div class="p-4">
                    <h4 class="font-semibold mb-2">Laptop Ultra</h4>
                    <p class="text-green-600 font-bold">$1,299</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-200">
                <div class="h-40 bg-gradient-to-br from-orange-400 to-orange-600 flex items-center justify-center">
                    <span class="text-white text-3xl">🔌</span>
                </div>
                <div class="p-4">
                    <h4 class="font-semibold mb-2">Fast Charger</h4>
                    <p class="text-green-600 font-bold">$49</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
