<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <x-balance-card />
                <x-budget-section />
                <x-recent-transactions />
                <div class="flex flex-row justify-center">
                    <x-primary-button class="m-3">Receive</x-primary-button>
                    <x-primary-button class="m-3">Send</x-primary-button>
                </div>
                {{-- <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div> --}}

                {{-- <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
                    <form method="POST" action="{{ route('transactions.store') }}">
                        @csrf
                        <textarea
                            name="message"
                            placeholder="{{ __('What\'s on your mind?') }}"
                            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        >{{ old('message') }}</textarea>
                        <x-input-error :messages="$errors->get('message')" class="mt-2" />
                        <x-primary-button class="mt-4">{{ __('Chirp') }}</x-primary-button>
                    </form>
                </div> --}}
            </div>
        </div>
    </div>

    <script>
        // The balance modal
        const balanceModal = document.getElementById('balance-modal');
        const balanceCard = document.getElementById('balance-card');
        const balanceClose = document.getElementById('balance-close-button');
    
        balanceClose.addEventListener('click', function() {
            balanceModal.classList.add('hidden');
        });
        balanceCard.addEventListener('click', function() {
            balanceModal.classList.toggle('hidden');
        });

        // The transaction modal
        const transactionModal = document.getElementById('transaction-modal');
        const addIcon = document.getElementById('add-icon');
        const transactionClose = document.getElementById('transaction-close-button');
    
        transactionClose.addEventListener('click', function() {
            transactionModal.classList.add('hidden');
        });
        addIcon.addEventListener('click', function() {
            transactionModal.classList.toggle('hidden');
        });
    </script>
</x-app-layout>
