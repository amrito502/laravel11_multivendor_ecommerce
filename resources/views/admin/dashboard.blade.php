@extends('admin.master')

@section('admin')
<div class="container mx-auto px-4 py-6">
    <div class="flex flex-wrap -m-2 mb-6">
        <!-- Dashboard Summary Cards -->
        <div class="w-full sm:w-1/2 lg:w-1/4 p-2">
            <div class="bg-gradient-to-tr from-indigo-500 to-purple-500 text-white rounded-xl shadow-lg p-5 hover:scale-[1.02] transition-transform duration-300">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-white bg-opacity-20 p-3 rounded-full">
                        <i class="fa-solid fa-users text-2xl"></i>
                    </div>
                    <span class="text-sm opacity-80">Today</span>
                </div>
                <h3 class="text-sm font-medium opacity-90">Total Users</h3>
                <p class="text-3xl font-bold">500</p>
            </div>
        </div>
    
        <div class="w-full sm:w-1/2 lg:w-1/4 p-2">
            <div class="bg-gradient-to-tr from-emerald-500 to-teal-500 text-white rounded-xl shadow-lg p-5 hover:scale-[1.02] transition-transform duration-300">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-white bg-opacity-20 p-3 rounded-full">
                        <i class="fa-solid fa-box-open text-2xl"></i>
                    </div>
                    <span class="text-sm opacity-80">Monthly</span>
                </div>
                <h3 class="text-sm font-medium opacity-90">Total Orders</h3>
                <p class="text-3xl font-bold">1,250</p>
            </div>
        </div>
    
        <div class="w-full sm:w-1/2 lg:w-1/4 p-2">
            <div class="bg-gradient-to-tr from-yellow-400 to-orange-500 text-white rounded-xl shadow-lg p-5 hover:scale-[1.02] transition-transform duration-300">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-white bg-opacity-20 p-3 rounded-full">
                        <i class="fa-solid fa-sack-dollar text-2xl"></i>
                    </div>
                    <span class="text-sm opacity-80">This Week</span>
                </div>
                <h3 class="text-sm font-medium opacity-90">Total Revenue</h3>
                <p class="text-3xl font-bold">$9,800</p>
            </div>
        </div>
    
        <div class="w-full sm:w-1/2 lg:w-1/4 p-2">
            <div class="bg-gradient-to-tr from-pink-500 to-rose-500 text-white rounded-xl shadow-lg p-5 hover:scale-[1.02] transition-transform duration-300">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-white bg-opacity-20 p-3 rounded-full">
                        <i class="fa-solid fa-store text-2xl"></i>
                    </div>
                    <span class="text-sm opacity-80">Active</span>
                </div>
                <h3 class="text-sm font-medium opacity-90">Vendors</h3>
                <p class="text-3xl font-bold">48</p>
            </div>
        </div>
    </div>
    
    <!-- Dashboard Summary Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
      
         <!-- Total Users Card -->
         <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-indigo-500 hover:shadow-lg transition-shadow duration-300">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Total Users</p>
                        <p class="text-2xl font-bold mt-1">1,250</p>
                        <p class="text-xs text-green-500 mt-2 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                            </svg>
                            12% from last month
                        </p>
                    </div>
                    <div class="bg-indigo-100 p-3 rounded-full">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Orders Card -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-emerald-500 hover:shadow-lg transition-shadow duration-300">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Total Orders</p>
                        <p class="text-2xl font-bold mt-1">3,450</p>
                        <p class="text-xs text-green-500 mt-2 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                            </svg>
                            8% from last month
                        </p>
                    </div>
                    <div class="bg-emerald-100 p-3 rounded-full">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Revenue Card -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-amber-500 hover:shadow-lg transition-shadow duration-300">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Total Revenue</p>
                        <p class="text-2xl font-bold mt-1">$24,780</p>
                        <p class="text-xs text-green-500 mt-2 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                            </svg>
                            15% from last month
                        </p>
                    </div>
                    <div class="bg-amber-100 p-3 rounded-full">
                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Active Vendors Card -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-rose-500 hover:shadow-lg transition-shadow duration-300">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Active Vendors</p>
                        <p class="text-2xl font-bold mt-1">68</p>
                        <p class="text-xs text-green-500 mt-2 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                            </svg>
                            5% from last month
                        </p>
                    </div>
                    <div class="bg-rose-100 p-3 rounded-full">
                        <svg class="w-6 h-6 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>


         <!-- Total Users Card -->
         <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-indigo-500 hover:shadow-lg transition-shadow duration-300">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Total Users</p>
                        <p class="text-2xl font-bold mt-1">1,250</p>
                        <p class="text-xs text-green-500 mt-2 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                            </svg>
                            12% from last month
                        </p>
                    </div>
                    <div class="bg-indigo-100 p-3 rounded-full">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Orders Card -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-emerald-500 hover:shadow-lg transition-shadow duration-300">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Total Orders</p>
                        <p class="text-2xl font-bold mt-1">3,450</p>
                        <p class="text-xs text-green-500 mt-2 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                            </svg>
                            8% from last month
                        </p>
                    </div>
                    <div class="bg-emerald-100 p-3 rounded-full">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Revenue Card -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-amber-500 hover:shadow-lg transition-shadow duration-300">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Total Revenue</p>
                        <p class="text-2xl font-bold mt-1">$24,780</p>
                        <p class="text-xs text-green-500 mt-2 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                            </svg>
                            15% from last month
                        </p>
                    </div>
                    <div class="bg-amber-100 p-3 rounded-full">
                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Active Vendors Card -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden border-l-4 border-rose-500 hover:shadow-lg transition-shadow duration-300">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Active Vendors</p>
                        <p class="text-2xl font-bold mt-1">68</p>
                        <p class="text-xs text-green-500 mt-2 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                            </svg>
                            5% from last month
                        </p>
                    </div>
                    <div class="bg-rose-100 p-3 rounded-full">
                        <svg class="w-6 h-6 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Orders Table & Chart -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <!-- Recent Orders Table -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                <h2 class="text-lg font-semibold text-gray-800">Recent Orders</h2>
                <a href="#" class="text-sm text-indigo-600 hover:text-indigo-800 font-medium">View All</a>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#ORD1001</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">John Doe</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Completed</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$120.50</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#ORD1002</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Jane Smith</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$95.00</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#ORD1003</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Alex Johnson</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Completed</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$240.00</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#ORD1004</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Emily Davis</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Shipped</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$75.90</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#ORD1005</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Michael Brown</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Cancelled</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$150.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Orders Chart -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-lg font-semibold text-gray-800">Monthly Orders</h2>
                <div class="flex space-x-2">
                    <button class="px-3 py-1 text-xs bg-indigo-100 text-indigo-700 rounded-md">This Year</button>
                    <button class="px-3 py-1 text-xs bg-gray-100 text-gray-700 rounded-md">Last Year</button>
                </div>
            </div>
            <canvas id="ordersChart" height="250"></canvas>
        </div>
    </div>

    <!-- Additional Sections -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Top Products -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden col-span-1">
            <div class="px-6 py-4 border-b border-gray-100">
                <h2 class="text-lg font-semibold text-gray-800">Top Products</h2>
            </div>
            <div class="divide-y divide-gray-200">
                <div class="px-6 py-4 flex items-center hover:bg-gray-50 transition-colors duration-150">
                    <div class="flex-shrink-0 h-10 w-10 bg-gray-200 rounded-md flex items-center justify-center">
                        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-900">Wireless Headphones</p>
                        <p class="text-sm text-gray-500">45 sales</p>
                    </div>
                    <div class="ml-auto text-sm font-medium text-green-600">$1,200</div>
                </div>
                <div class="px-6 py-4 flex items-center hover:bg-gray-50 transition-colors duration-150">
                    <div class="flex-shrink-0 h-10 w-10 bg-gray-200 rounded-md flex items-center justify-center">
                        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-900">Smartphone X</p>
                        <p class="text-sm text-gray-500">32 sales</p>
                    </div>
                    <div class="ml-auto text-sm font-medium text-green-600">$9,600</div>
                </div>
                <div class="px-6 py-4 flex items-center hover:bg-gray-50 transition-colors duration-150">
                    <div class="flex-shrink-0 h-10 w-10 bg-gray-200 rounded-md flex items-center justify-center">
                        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-900">Laptop Pro</p>
                        <p class="text-sm text-gray-500">28 sales</p>
                    </div>
                    <div class="ml-auto text-sm font-medium text-green-600">$14,000</div>
                </div>
                <div class="px-6 py-4 flex items-center hover:bg-gray-50 transition-colors duration-150">
                    <div class="flex-shrink-0 h-10 w-10 bg-gray-200 rounded-md flex items-center justify-center">
                        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-900">Smart Watch</p>
                        <p class="text-sm text-gray-500">25 sales</p>
                    </div>
                    <div class="ml-auto text-sm font-medium text-green-600">$1,250</div>
                </div>
            </div>
        </div>

        <!-- Recent Activities -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden col-span-1">
            <div class="px-6 py-4 border-b border-gray-100">
                <h2 class="text-lg font-semibold text-gray-800">Recent Activities</h2>
            </div>
            <div class="divide-y divide-gray-200">
                <div class="px-6 py-4 hover:bg-gray-50 transition-colors duration-150">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center">
                            <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-900">New order #ORD1006</p>
                            <p class="text-sm text-gray-500">Order placed by Sarah Wilson</p>
                            <p class="text-xs text-gray-400 mt-1">2 minutes ago</p>
                        </div>
                    </div>
                </div>
                <div class="px-6 py-4 hover:bg-gray-50 transition-colors duration-150">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-green-100 flex items-center justify-center">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-900">Payment received</p>
                            <p class="text-sm text-gray-500">$240.00 for order #ORD1003</p>
                            <p class="text-xs text-gray-400 mt-1">15 minutes ago</p>
                        </div>
                    </div>
                </div>
                <div class="px-6 py-4 hover:bg-gray-50 transition-colors duration-150">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-900">Order shipped</p>
                            <p class="text-sm text-gray-500">Order #ORD1004 has been shipped</p>
                            <p class="text-xs text-gray-400 mt-1">1 hour ago</p>
                        </div>
                    </div>
                </div>
                <div class="px-6 py-4 hover:bg-gray-50 transition-colors duration-150">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-amber-100 flex items-center justify-center">
                            <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-900">Low stock alert</p>
                            <p class="text-sm text-gray-500">Wireless Headphones stock is low</p>
                            <p class="text-xs text-gray-400 mt-1">3 hours ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vendor Performance -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden col-span-1">
            <div class="px-6 py-4 border-b border-gray-100">
                <h2 class="text-lg font-semibold text-gray-800">Top Vendors</h2>
            </div>
            <div class="divide-y divide-gray-200">
                <div class="px-6 py-4 flex items-center hover:bg-gray-50 transition-colors duration-150">
                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center overflow-hidden">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Vendor">
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-900">TechGadgets Inc.</p>
                        <p class="text-sm text-gray-500">45 orders | $5,600</p>
                    </div>
                    <div class="ml-auto">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">4.8 ★</span>
                    </div>
                </div>
                <div class="px-6 py-4 flex items-center hover:bg-gray-50 transition-colors duration-150">
                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center overflow-hidden">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Vendor">
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-900">FashionHub</p>
                        <p class="text-sm text-gray-500">38 orders | $3,200</p>
                    </div>
                    <div class="ml-auto">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">4.7 ★</span>
                    </div>
                </div>
                <div class="px-6 py-4 flex items-center hover:bg-gray-50 transition-colors duration-150">
                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center overflow-hidden">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Vendor">
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-900">HomeEssentials</p>
                        <p class="text-sm text-gray-500">32 orders | $2,800</p>
                    </div>
                    <div class="ml-auto">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">4.6 ★</span>
                    </div>
                </div>
                <div class="px-6 py-4 flex items-center hover:bg-gray-50 transition-colors duration-150">
                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center overflow-hidden">
                        <img src="https://randomuser.me/api/portraits/men/42.jpg" alt="Vendor">
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-900">ElectroWorld</p>
                        <p class="text-sm text-gray-500">28 orders | $4,100</p>
                    </div>
                    <div class="ml-auto">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">4.5 ★</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('ordersChart').getContext('2d');
    const ordersChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [
                {
                    label: '2023',
                    data: [120, 190, 170, 220, 250, 210, 280, 240, 300, 320, 350, 380],
                    backgroundColor: 'rgba(79, 70, 229, 0.7)',
                    borderRadius: 4
                },
                {
                    label: '2022',
                    data: [90, 120, 140, 160, 180, 150, 200, 180, 220, 240, 260, 290],
                    backgroundColor: 'rgba(199, 210, 254, 0.7)',
                    borderRadius: 4
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    mode: 'index',
                    intersect: false,
                }
            },
            scales: {
                x: {
                    grid: {
                        display: false
                    }
                },
                y: { 
                    beginAtZero: true,
                    grid: {
                        drawBorder: false
                    }
                }
            },
            interaction: {
                mode: 'nearest',
                axis: 'x',
                intersect: false
            }
        }
    });
</script>
@endsection