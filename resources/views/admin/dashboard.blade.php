<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tableau de bord Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="flex h-screen bg-gray-50">
        <x-admin-sidebar />
        <main class="flex-1 overflow-y-auto p-8">
            <h1 class="text-3xl font-bold text-gray-900 font-poppins">Tableau de bord Admin</h1>
            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-2xl shadow-sm p-6">
                    <p class="text-sm text-gray-600 font-roboto">Total Classes</p>
                    <p class="text-2xl font-bold text-gray-900 font-poppins mt-1">24</p>
                </div>
                <div class="bg-white rounded-2xl shadow-sm p-6">
                    <p class="text-sm text-gray-600 font-roboto">Enseignants</p>
                    <p class="text-2xl font-bold text-gray-900 font-poppins mt-1">48</p>
                </div>
                <div class="bg-white rounded-2xl shadow-sm p-6">
                    <p class="text-sm text-gray-600 font-roboto">Élèves</p>
                    <p class="text-2xl font-bold text-gray-900 font-poppins mt-1">856</p>
                </div>
                <div class="bg-white rounded-2xl shadow-sm p-6">
                    <p class="text-sm text-gray-600 font-roboto">Bulletins générés</p>
                    <p class="text-2xl font-bold text-gray-900 font-poppins mt-1">342</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
