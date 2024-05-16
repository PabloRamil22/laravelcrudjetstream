<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bienvenido a la Federación de tu tía Pepa') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                    <div>
                        <img src="{{ asset('img/logo.jpg') }}" alt="Logo FTPF" class="h-20 w-auto mx-auto mb-6">
                    </div>

                    <div class="text-lg text-gray-700 dark:text-gray-300">
                        <p>Bienvenido a la página oficial de la Federación de tu tía Pepa de Fútbol (FTPF). Somos la institución responsable de organizar y regular el fútbol en un lugar, desde la Liga de algún lugar hasta las competiciones de categorías de algún planeta X.</p>
                    </div>
                </div>

                <div class="bg-gray-50 dark:bg-gray-700 grid grid-cols-1 md:grid-cols-2 gap-4 py-6 px-6 sm:px-20">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md">
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Noticias Recientes</h3>
                            <p class="text-gray-700 dark:text-gray-300">Mantente al tanto de las últimas noticias, eventos y novedades en el mundo del fútbol en algún lugar.</p>
                            <a href="#" class="text-blue-600 dark:text-blue-400 font-semibold hover:underline mt-4 inline-block">Leer más</a>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md">
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Próximos Partidos</h3>
                            <p class="text-gray-700 dark:text-gray-300">Consulta los próximos partidos de la Liga de tu tía Pepa, la Copa de alguien y otras competiciones importantes.</p>
                            <a href="#" class="text-blue-600 dark:text-blue-400 font-semibold hover:underline mt-4 inline-block">Ver calendario</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
