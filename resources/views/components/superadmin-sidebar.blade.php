<div class="w-80 h-screen bg-white border-r border-gray-200 flex flex-col font-poppins">
    {{-- Header Section --}}
    <div class="p-6 border-b border-gray-200">
        <div class="flex items-center gap-4">
            <div class="w-14 h-14 bg-blue-primary rounded-xl flex items-center justify-center flex-shrink-0">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-8 h-8 object-contain filter brightness-0 invert">
            </div>
            <div>
                <h1 class="text-xl font-semibold text-gray-900 font-poppins">EduAdmin</h1>
                <p class="text-sm text-gray-500 font-roboto">Super Admin</p>
            </div>
        </div>
    </div>

    {{-- Navigation Menu --}}
    <nav class="flex-1 py-6 px-4">
        <ul class="space-y-2">
            {{-- Tableau de bord --}}
            <li>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group">
                    <svg class="w-5 h-5 text-gray-600 group-hover:text-blue-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    <span class="font-roboto font-medium">Tableau de bord</span>
                </a>
            </li>

            {{-- Établissements (Active State) --}}
            <li>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-blue-primary bg-blue-light rounded-lg transition-colors group">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L3 7v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-9-5zm0 2.18l7 3.89v4.93c0 4.54-3.08 8.79-7 9.86-3.92-1.07-7-5.32-7-9.86V8.07l7-3.89zM10 17l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/>
                    </svg>
                    <span class="font-roboto font-semibold">Établissements</span>
                </a>
            </li>

            {{-- Rôles & Permissions --}}
            <li>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group">
                    <svg class="w-5 h-5 text-gray-600 group-hover:text-blue-primary" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                    </svg>
                    <span class="font-roboto font-medium">Rôles & Permissions</span>
                </a>
            </li>

            {{-- Rapports --}}
            <li>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group">
                    <svg class="w-5 h-5 text-gray-600 group-hover:text-blue-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <span class="font-roboto font-medium">Rapports</span>
                </a>
            </li>

            {{-- Paramètres --}}
            <li>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group">
                    <svg class="w-5 h-5 text-gray-600 group-hover:text-blue-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span class="font-roboto font-medium">Paramètres</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
