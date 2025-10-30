<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tableau de bord Super Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="flex h-screen bg-gray-50">
        <x-superadmin-sidebar />
        <main class="flex-1 overflow-y-auto p-8">
            <h1 class="text-3xl font-bold text-gray-900 font-poppins">Tableau de bord Super Admin</h1>
            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-2xl shadow-sm p-6">
                    <p class="text-sm text-gray-600 font-roboto">Établissements</p>
                    <p class="text-2xl font-bold text-gray-900 font-poppins mt-1">12</p>
                </div>
                <div class="bg-white rounded-2xl shadow-sm p-6">
                    <p class="text-sm text-gray-600 font-roboto">Total Admins</p>
                    <p class="text-2xl font-bold text-gray-900 font-poppins mt-1">24</p>
                </div>
                <div class="bg-white rounded-2xl shadow-sm p-6">
                    <p class="text-sm text-gray-600 font-roboto">Utilisateurs</p>
                    <p class="text-2xl font-bold text-gray-900 font-poppins mt-1">1,234</p>
                </div>
                <div class="bg-white rounded-2xl shadow-sm p-6">
                    <p class="text-sm text-gray-600 font-roboto">Rapports</p>
                    <p class="text-2xl font-bold text-gray-900 font-poppins mt-1">89</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
