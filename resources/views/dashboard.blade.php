<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Dashboard</title>

    <!-- Fonts & Tailwind CSS -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-[#D8D8D8] p-4 md:p-8 min-h-screen flex items-center justify-center">

    <!-- Container Utama Dashboard -->
    <div class="w-full max-w-6xl bg-[#ECECEC] rounded-lg shadow-xl overflow-hidden flex flex-col min-h-[720px]">
        
        <!-- Header Judul Atas -->
        <div class="p-4 bg-[#ECECEC] text-gray-700 font-semibold text-lg border-b border-gray-300">
            Admin Dashboard
        </div>

        <div class="flex flex-1">
            
            <!-- ================= SIDEBAR KIRI ================= -->
            <aside class="w-64 bg-white p-6 border-r border-gray-200 flex flex-col justify-between shrink-0">
                <div>
                    <!-- Logo / Brand -->
                    <div class="mb-6">
                        <h2 class="text-xl font-bold text-[#1D72B8]">Dashboard Admin</h2>
                    </div>

                    <!-- User Info Sidebar -->
                    <div class="flex items-center gap-3 mb-8">
                        <div class="relative">
                            <div class="w-9 h-9 rounded-full bg-gray-300 overflow-hidden">
                                <img src="https://ui-avatars.com/api/?name=Success+Awuku&background=random" alt="Avatar" class="w-full h-full object-cover">
                            </div>
                            <span class="w-2.5 h-2.5 bg-emerald-500 rounded-full absolute bottom-0 right-0 border-2 border-white"></span>
                        </div>
                        <span class="text-xs text-gray-400 truncate">Success cocortisan</span>
                    </div>

                    <!-- Navigation Links -->
                    <nav class="space-y-3 text-xs font-medium text-gray-600">
                        <a href="{{ route('dashboard') }}" class="flex items-center justify-between py-1.5 text-gray-800 font-semibold hover:text-[#1D72B8] transition">
                            <span>Dashboard</span>
                            <span class="text-sm">🏠</span>
                        </a>
                        <a href="#" class="flex items-center justify-between py-1.5 hover:text-[#1D72B8] transition">
                            <span>Components</span>
                            <span class="text-sm">👥</span>
                        </a>
                        <a href="#" class="flex items-center justify-between py-1.5 hover:text-[#1D72B8] transition">
                            <span>UI Elements</span>
                            <span class="text-sm">🎛️</span>
                        </a>
                        <a href="#" class="flex items-center justify-between py-1.5 hover:text-[#1D72B8] transition">
                            <span>Form Stuff</span>
                            <span class="text-sm">🖥️</span>
                        </a>
                        <a href="#" class="flex items-center justify-between py-1.5 hover:text-[#1D72B8] transition">
                            <span>Data Table</span>
                            <span class="text-sm">📅</span>
                        </a>
                        <a href="#" class="flex items-center justify-between py-1.5 hover:text-[#1D72B8] transition">
                            <span>Icons</span>
                            <span class="text-sm">📋</span>
                        </a>
                        <a href="#" class="flex items-center justify-between py-1.5 hover:text-[#1D72B8] transition">
                            <span>Sample Page</span>
                            <span class="text-sm">🖥️</span>
                        </a>
                        <a href="#" class="flex items-center justify-between py-1.5 hover:text-[#1D72B8] transition">
                            <span>Extra</span>
                            <span class="text-sm">🗄️</span>
                        </a>
                    </nav>
                </div>
            </aside>

            <!-- ================= KONTEN UTAMA ================= -->
            <div class="flex-1 bg-[#ECECEC] p-6 flex flex-col space-y-6">
                
                <!-- Navbar Top Bar -->
                <header class="bg-white p-3 rounded-lg shadow-sm flex items-center justify-between gap-4">
                    <!-- Search Input -->
                    <div class="flex items-center gap-2 bg-gray-50 px-3 py-1.5 rounded-md border border-gray-100 flex-1 max-w-xs">
                        <span class="text-gray-400 text-xs">🔍</span>
                        <input type="text" placeholder="Search Project" class="bg-transparent border-none text-xs text-gray-600 focus:outline-none w-full">
                    </div>

                    <!-- User Profile & Icons -->
                    <div class="flex items-center gap-4 text-xs">
                        <div class="flex items-center gap-2">
                            <div class="relative">
                                <img src="https://ui-avatars.com/api/?name=Success+Awuku&background=random" class="w-7 h-7 rounded-full" alt="User">
                                <span class="w-2 h-2 bg-emerald-500 rounded-full absolute bottom-0 right-0 border border-white"></span>
                            </div>
                            <span class="text-gray-600 font-medium">Success Cocortisan</span>
                            <span class="text-gray-400">▼</span>
                        </div>

                        <div class="flex items-center gap-3 text-gray-500 ml-2">
                            <button class="relative hover:text-gray-700">
                                ✉️
                                <span class="w-2 h-2 bg-pink-500 rounded-full absolute -top-1 -right-1"></span>
                            </button>
                            <button class="relative hover:text-gray-700">
                                📢
                                <span class="w-2 h-2 bg-pink-500 rounded-full absolute -top-1 -right-1"></span>
                            </button>
                            <button class="hover:text-gray-700">☰</button>
                        </div>
                    </div>
                </header>

                <!-- Section Dashboard Title -->
                <div>
                    <h2 class="text-lg font-bold text-gray-800">Dashboard</h2>
                </div>

                <!-- Section 3 Stat Cards Gradasi -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    
                    <!-- Card 1: Ungu/Pink -->
                    <div class="p-5 rounded-xl bg-gradient-to-r from-[#8E44AD] to-[#C0392B] text-white relative overflow-hidden shadow-md">
                        <div class="relative z-10 space-y-1">
                            <div class="text-lg">💻</div>
                            <p class="text-xs font-light opacity-90">Stock Total</p>
                            <p class="text-xl font-bold tracking-wide">GH₵150,000</p>
                            <p class="text-[10px] opacity-80 pt-2">Increased by 50%</p>
                        </div>
                        <!-- Elemen Lingkaran Hiasan -->
                        <div class="w-24 h-24 bg-white/10 rounded-full absolute -right-4 -bottom-4 backdrop-blur-sm"></div>
                        <div class="w-16 h-16 bg-white/10 rounded-full absolute right-8 -bottom-2 backdrop-blur-sm"></div>
                    </div>

                    <!-- Card 2: Biru -->
                    <div class="p-5 rounded-xl bg-gradient-to-r from-[#2980B9] to-[#3498DB] text-white relative overflow-hidden shadow-md">
                        <div class="relative z-10 space-y-1">
                            <div class="text-lg">💾</div>
                            <p class="text-xs font-light opacity-90">Total Profit</p>
                            <p class="text-xl font-bold tracking-wide">GH₵25,000</p>
                            <p class="text-[10px] opacity-80 pt-2">Increased by 50%</p>
                        </div>
                        <div class="w-24 h-24 bg-white/10 rounded-full absolute -right-4 -bottom-4 backdrop-blur-sm"></div>
                        <div class="w-16 h-16 bg-white/10 rounded-full absolute right-8 -bottom-2 backdrop-blur-sm"></div>
                    </div>

                    <!-- Card 3: Oranye/Merah Muda -->
                    <div class="p-5 rounded-xl bg-gradient-to-r from-[#E67E22] to-[#E74C3C] text-white relative overflow-hidden shadow-md">
                        <div class="relative z-10 space-y-1">
                            <div class="text-lg">🚀</div>
                            <p class="text-xs font-light opacity-90">Unique Visitors</p>
                            <p class="text-xl font-bold tracking-wide">250000</p>
                            <p class="text-[10px] opacity-80 pt-2">Increased by 30%</p>
                        </div>
                        <div class="w-24 h-24 bg-white/10 rounded-full absolute -right-4 -bottom-4 backdrop-blur-sm"></div>
                        <div class="w-16 h-16 bg-white/10 rounded-full absolute right-8 -bottom-2 backdrop-blur-sm"></div>
                    </div>

                </div>

                <!-- Section Standard Data Table -->
                <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-100 flex-1">
                    <h3 class="text-sm font-bold text-gray-800 mb-4">Standard Data Table</h3>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="text-[11px] font-semibold text-gray-500 border-b border-gray-100">
                                    <th class="pb-3">Name</th>
                                    <th class="pb-3">Email</th>
                                    <th class="pb-3">Usertype</th>
                                    <th class="pb-3">Joined</th>
                                    <th class="pb-3 text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody class="text-xs text-gray-600 divide-y divide-gray-50">
                                
                                <tr>
                                    <td class="py-3 font-medium text-gray-700">Obed Ampong</td>
                                    <td class="py-3 text-gray-400">obedampong@gmail.com</td>
                                    <td class="py-3 text-gray-400">Admin</td>
                                    <td class="py-3 text-gray-400">9th April,2020</td>
                                    <td class="py-3 text-center">
                                        <span class="bg-[#2ECC71] text-white text-[10px] font-semibold px-4 py-1 rounded-full inline-block">Pending</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="py-3 font-medium text-gray-700">Anang Parker Ray</td>
                                    <td class="py-3 text-gray-400">anangparker04@gmail.com</td>
                                    <td class="py-3 text-gray-400">Admin</td>
                                    <td class="py-3 text-gray-400">28th March,2020</td>
                                    <td class="py-3 text-center">
                                        <span class="bg-[#2ECC71] text-white text-[10px] font-semibold px-4 py-1 rounded-full inline-block">Pending</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="py-3 font-medium text-gray-700">Abigail Agbenyo</td>
                                    <td class="py-3 text-gray-400">abigailagbe99@gmail.com</td>
                                    <td class="py-3 text-gray-400">Admin</td>
                                    <td class="py-3 text-gray-400">30th March,2020</td>
                                    <td class="py-3 text-center">
                                        <span class="bg-[#2ECC71] text-white text-[10px] font-semibold px-4 py-1 rounded-full inline-block">Pending</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="py-3 font-medium text-gray-700">Crizabella Whyte</td>
                                    <td class="py-3 text-gray-400">bellawhyte@gmail.com</td>
                                    <td class="py-3 text-gray-400">Admin</td>
                                    <td class="py-3 text-gray-400">3rd February, 2020</td>
                                    <td class="py-3 text-center">
                                        <span class="bg-[#2ECC71] text-white text-[10px] font-semibold px-4 py-1 rounded-full inline-block">Pending</span>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>
</html>