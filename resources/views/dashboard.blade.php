<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-900 dark:text-gray-100 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-3xl font-semibold mb-4">Notas de Compra</h2>
                    @if ($transactions->isEmpty())
                        <p class="text-gray-600 dark:text-gray-400">No hay notas de compra disponibles.</p>
                    @else
                        <ul class="list-disc pl-5 space-y-2">
                            @foreach ($transactions as $transaction)
                                <li class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg shadow">
                                    {{ $transaction->description }}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
