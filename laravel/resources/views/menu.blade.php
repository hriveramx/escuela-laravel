<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <div class="flex-shrink-0 text-xl font-bold text-blue-600">
                EscuelaLaravel
            </div>

            <!-- Navegación (visible en pantallas medianas en adelante) -->
            <div class="hidden md:flex space-x-6">
                <a href="/" class="text-gray-800 hover:text-blue-600 transition font-medium">Inicio</a>
                <a href="/oferta-educativa" class="text-gray-800 hover:text-blue-600 transition font-medium">Oferta educativa</a>
                <a href="/contacto" class="text-gray-800 hover:text-blue-600 transition font-medium">Contacto</a>
            </div>

            <!-- Botón hamburguesa (visible solo en móvil) -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-gray-600 focus:outline-none">
                    <!-- ícono hamburguesa -->
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Menú móvil (oculto por defecto) -->
        <div id="mobile-menu" class="md:hidden hidden mt-2 space-y-2">
            <a href="/" class="block text-gray-800 hover:text-blue-600 font-medium">Inicio</a>
            <a href="/oferta-educativa" class="block text-gray-800 hover:text-blue-600 font-medium">Oferta educativa</a>
            <a href="/contacto" class="block text-gray-800 hover:text-blue-600 font-medium">Contacto</a>
        </div>
    </div>
</nav>
