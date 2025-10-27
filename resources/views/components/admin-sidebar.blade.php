<div class="w-80 h-screen bg-white border-r border-gray-200 flex flex-col font-poppins">
    {{-- Header Section --}}
    <div class="p-6 border-b border-gray-200">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 bg-blue-primary rounded-2xl flex items-center justify-center flex-shrink-0">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-8 h-8 object-contain">
                </div>
                <div>
                    <h1 class="text-xl font-semibold text-gray-900 font-poppins">Nexus</h1>
                    <p class="text-sm text-gray-500 font-roboto">École Primaire</p>
                </div>
            </div>
            <button class="text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    {{-- Navigation Menu --}}
    <nav class="flex-1 py-6 px-4 overflow-y-auto">
        <ul class="space-y-2">
            {{-- Tableau de bord (Active State) --}}
            <li>
                <a href="#" class="flex items-center gap-3 px-4 py-4 text-white bg-blue-primary rounded-2xl transition-all group shadow-lg shadow-blue-primary/30">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4 13h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zm0 8h6c.55 0 1-.45 1-1v-4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1zm10 0h6c.55 0 1-.45 1-1v-8c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zM13 4v4c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1z"/>
                    </svg>
                    <span class="font-roboto font-semibold">Tableau de bord</span>
                </a>
            </li>

            {{-- Gestion des classes --}}
            <li>
                <a href="#" class="flex items-center gap-3 px-4 py-4 text-gray-700 hover:bg-gray-50 rounded-2xl transition-all group">
                    <svg class="w-6 h-6 text-gray-600 group-hover:text-blue-primary transition-colors" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z"/>
                    </svg>
                    <span class="font-roboto font-medium">Gestion des classes</span>
                </a>
            </li>

            {{-- Gestion des enseignants --}}
            <li>
                <a href="#" class="flex items-center gap-3 px-4 py-4 text-gray-700 hover:bg-gray-50 rounded-2xl transition-all group">
                    <svg class="w-6 h-6 text-gray-600 group-hover:text-blue-primary transition-colors" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                    </svg>
                    <span class="font-roboto font-medium">Gestion des enseignants</span>
                </a>
            </li>

            {{-- Gestion des élèves --}}
            <li>
                <a href="#" class="flex items-center gap-3 px-4 py-4 text-gray-700 hover:bg-gray-50 rounded-2xl transition-all group">
                    <svg class="w-6 h-6 text-gray-600 group-hover:text-blue-primary transition-colors" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/>
                    </svg>
                    <span class="font-roboto font-medium">Gestion des élèves</span>
                </a>
            </li>

            {{-- Décisions de promotion --}}
            <li>
                <a href="#" class="flex items-center gap-3 px-4 py-4 text-gray-700 hover:bg-gray-50 rounded-2xl transition-all group">
                    <svg class="w-6 h-6 text-gray-600 group-hover:text-blue-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                    <span class="font-roboto font-medium">Décisions de promotion</span>
                </a>
            </li>

            {{-- Génération bulletins --}}
            <li>
                <a href="#" class="flex items-center gap-3 px-4 py-4 text-gray-700 hover:bg-gray-50 rounded-2xl transition-all group">
                    <svg class="w-6 h-6 text-gray-600 group-hover:text-blue-primary transition-colors" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/>
                    </svg>
                    <span class="font-roboto font-medium">Génération bulletins</span>
                </a>
            </li>

            {{-- Statistiques --}}
            <li>
                <a href="#" class="flex items-center gap-3 px-4 py-4 text-gray-700 hover:bg-gray-50 rounded-2xl transition-all group">
                    <svg class="w-6 h-6 text-gray-600 group-hover:text-blue-primary transition-colors" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M3.5 18.49l6-6.01 4 4L22 6.92l-1.41-1.41-7.09 7.97-4-4L2 16.99z"/>
                    </svg>
                    <span class="font-roboto font-medium">Statistiques</span>
                </a>
            </li>

            {{-- Emploi du temps --}}
            <li>
                <a href="#" class="flex items-center gap-3 px-4 py-4 text-gray-700 hover:bg-gray-50 rounded-2xl transition-all group">
                    <svg class="w-6 h-6 text-gray-600 group-hover:text-blue-primary transition-colors" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>
                    </svg>
                    <span class="font-roboto font-medium">Emploi du temps</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
