<div id="recent-activity" class="mx-6 mt-6">
  <h2 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Transactions</h2>
    <div class="mt-3 h-64 overflow-y-auto">
      <div class="flex flex-col">
        @foreach ( $transactions as $transaction)
          <x-transaction-card :transaction="$transaction"/>
        @endforeach
      </div>
    </div>
  </div>