<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-application-logo class="block h-6 w-auto" />

    <h1 class="mt-6 text-2xl font-lg text-gray-900 uppercase">
        USERS
    </h1>

    
</div>
<div class="bg-gray-200 bg-opacity-25 grid gap-6 lg:gap-8 p-6 lg:p-8">
    <table class="min-w-full divide-y divide-gray-200 border-collapse border border-slate-400">
        <thead>
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border border-slate-300">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border border-slate-300">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border border-slate-300">Email</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border border-slate-300">Role</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border border-slate-300">Action</th>
                <!-- Otros encabezados de columnas -->
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @for($i = 0; $i< 10; $i++)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap border border-slate-300">A{{ $i }}</td>
                <td class="px-6 py-4 whitespace-nowrap border border-slate-300">B{{ $i }}</td>
                <td class="px-6 py-4 whitespace-nowrap border border-slate-300">C{{ $i }}</td>
                <td class="px-6 py-4 whitespace-nowrap border border-slate-300">D{{ $i }}</td>
                <td class="px-6 py-4 whitespace-nowrap border border-slate-300">
                    <x-secondary-button class="bg-blue-700" wire:click="changeRole"> Change Role </x-secondary-button>
                
                </td>
                <!-- Otras celdas de datos -->
            </tr>
            @endfor
        </tbody>
    </table>
    
</div>