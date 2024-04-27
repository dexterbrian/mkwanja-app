<div id="balance-card" class="cursor-pointer block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mx-6">
    <p class="text-center font-normal text-gray-700 dark:text-gray-400">Available Balance</p>
    <h5 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">KES {{ $balance }}</h5>
</div>

<div id="balance-modal" class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 z-10">
    <div class="m-6 flex flex-col justify-center h-screen">
        <form class="bg-white dark:bg-gray-800 p-6 rounded shadow-lg" method="POST" action="{{ url('/api/stkPush') }}">
            @csrf
            <h2 class="text-lg font-semibold mb-4 dark:text-white">Top Up Your Account</h2>
            <input name="amount" type="text" placeholder="Amount" class="w-full border border-gray-200 rounded p-2 mb-4">
            <input name="phone" type="text" placeholder="Phone Number" class="w-full border border-gray-200 rounded p-2 mb-4">
            <input type="submit" class="bg-blue-500 text-white rounded p-2" value="Submit">
            <button type="button" id="balance-close-button" class="bg-red-500 text-white rounded p-2">Close</button>
        </form>
    </div>
</div>