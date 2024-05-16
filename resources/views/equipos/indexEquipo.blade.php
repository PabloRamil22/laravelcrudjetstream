<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Lista de equipos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">

                    <div class="mb-4">
                        <a href="{{ route('equipos.create') }}" class="bg-cyan-500 dark:bg-cyan-700 hover:bg-cyan-600 dark:hover:bg-cyan-800 text-white font-bold py-2 px-4 rounded">Crear Equipo</a>
                    </div>

                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">ID</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Nombre</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Plantilla</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Localidad</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Escudo</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($equipo as $equipo)
                            <tr>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $equipo->id }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $equipo->nombre }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $equipo->plantilla }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $equipo->localidad }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                                    <img src="{{ asset('img/' . $equipo->escudo) }}" alt="Escudo" class="h-16 w-16 object-contain">
                                </td>
                                <td class="border px-4 py-2 text-center">
                                    <div class="flex justify-center">
                                        <a href="{{ route('equipos.edit', $equipo->id) }}" class="bg-violet-500 dark:bg-violet-700 hover:bg-violet-600 dark:hover:bg-violet-800  font-bold py-2 px-4 rounded mr-2">Edit</a>
                                        <button type="button" class="bg-pink-400 dark:bg-pink-600 hover:bg-pink-500 dark:hover:bg-pink-700  font-bold py-2 px-4 rounded" onclick="confirmDelete('{{ $equipo->id }}')">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function confirmDelete(id) {
        alertify.confirm("¿Confirm delete record?",
        function(){
            let form = document.createElement('form');
                    form.method = 'POST';
                    form.action = '/equipos/' + id;
                    form.innerHTML = '@csrf @method("DELETE")';
                    document.body.appendChild(form);
                    form.submit();
            alertify.success('Ok');
        },
        function(){
            alertify.error('Cancel');
        });
}
</script>
