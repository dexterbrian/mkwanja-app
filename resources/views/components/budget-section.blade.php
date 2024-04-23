<div id="my-budget" class="mx-6 mt-6">
    <div class="flex flex-row">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">My Budget</h2>
      <div class="ml-6 flex flex-column items-end"><span class="text-black dark:text-gray-400 text-xs">KES 200 left to budget</span></div>
    </div>
    <div id="budget-container" class="flex flex-row">
      <div id="add-budget-button" class="flex flex-col justify-center">
        <x-add-budget-button />
      </div>

      <div class="relative w-full flex gap-4 py-3 overflow-x-auto ml-3">
        @foreach ( $budgets as $budget )
          <x-budget-item :budget="$budget"/>
        @endforeach
      </div>
    </div>
  </div>