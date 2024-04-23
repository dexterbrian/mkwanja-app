<div id="add-icon" class="p-2 cursor-pointer">
    <svg  xmlns="http://www.w3.org/2000/svg" height="32" width="28" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
        <path class="fill-gray-900 dark:fill-white" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
    </svg>
</div>

<div id="transaction-modal" class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 z-10">
    <div class="m-6 flex flex-col justify-center h-screen">
        <form class="bg-white dark:bg-gray-800 p-6 rounded shadow-lg" method="POST" action="{{ url('/api/stkPush') }}">
            @csrf
            <h2 class="text-lg font-semibold mb-4 dark:text-white">Enter Amount and Phone Number</h2>
            <input name="amount" type="text" placeholder="Amount" class="w-full border border-gray-200 rounded p-2 mb-4">
            <input name="phone" type="text" placeholder="Phone Number" class="w-full border border-gray-200 rounded p-2 mb-4">
            <input type="submit" class="bg-blue-500 text-white rounded p-2" value="Submit">
            <button type="button" id="transaction-close-button" class="bg-red-500 text-white rounded p-2">Close</button>
        </form>
    </div>
</div>