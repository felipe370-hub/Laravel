<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contato') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-2xl">
                <div class="p-8 text-gray-900 dark:text-gray-100">
                    <h1 class="text-4xl font-extrabold mb-6 text-center">Contato</h1>
                    <p class="mb-6 text-center text-gray-600 dark:text-gray-300">Entre em contato conosco preenchendo o formulário abaixo:</p>

                    <form class="bg-gray-50 dark:bg-gray-700 shadow-inner rounded-xl p-6 space-y-5">
                        <input type="text" placeholder="Seu nome" class="w-full border border-gray-300 dark:border-gray-600 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <input type="email" placeholder="Seu e-mail" class="w-full border border-gray-300 dark:border-gray-600 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <textarea placeholder="Sua mensagem" class="w-full border border-gray-300 dark:border-gray-600 rounded-lg p-3 h-32 resize-none focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-3 rounded-lg shadow-lg transition-colors duration-300">
                            Enviar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
