<div class="cursor-pointer flex flex-row justify-between p-3 mb-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $transaction->name }}</p>
    <div class="flex flex-col">
        <p class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $transaction->debit == 0 ? 'KES ' . $transaction->credit : '- KES ' . $transaction->debit }}</p>
        <span class="text-xs text-gray-700 dark:text-gray-400">{{ $transaction->created_at }}</span>
    </div>
</div>