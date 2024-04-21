<div id="my-budget" class="mx-6 mt-6">
    <div class="flex flex-row">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">My Budget</h2>
      <div class="ml-6 flex flex-column items-end"><span class="text-black dark:text-gray-400 text-xs">KES 200 left to budget</span></div>
    </div>
    <div id="budget-container" class="flex flex-row">
      <div id="add-budget-button" class="flex flex-col justify-center">
          <svg id="add-icon" xmlns="http://www.w3.org/2000/svg" height="32" width="28" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#ffffff" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
      </div>

      <div class="relative w-full flex gap-4 py-3 overflow-x-auto ml-3">
        <x-budget-item />
        <x-budget-item />
        <x-budget-item />
      </div>
    </div>
  </div>