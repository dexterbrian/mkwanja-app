<div id="add-icon" class="p-2 cursor-pointer">
    <svg  xmlns="http://www.w3.org/2000/svg" height="32" width="28" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
        <path class="fill-gray-900 dark:fill-white" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
    </svg>
</div>

{{-- fields: budget name, payee name, paybill or till, amount --}}
<div id="transaction-modal" class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 z-10">
    <div class="m-6 flex flex-col justify-center h-screen">
        <form class="bg-white dark:bg-gray-800 p-6 rounded shadow-lg" method="POST" action="{{ url('/api/stkPush') }}">
            @csrf
            <h2 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Create Budget Item</h2>

            <!-- Budget name -->
            <div>
                <x-text-input id="budgetItemName" class="block mt-1 w-full" type="text" name="budgetItemName" placeholder="Budget Item Name" required autofocus />
                <x-input-error :messages="$errors->get('budgetItemName')" class="mt-2" />
            </div>

            <!-- Payee name -->
            <div>
                <x-text-input id="payeeName" class="block mt-1 w-full" type="text" name="payeeName" placeholder="Payee Name" required />
                <x-input-error :messages="$errors->get('payeeName')" class="mt-2" />
            </div>

            <!-- Amount -->
            <div>
                <x-text-input id="amount" class="block mt-1 w-full" type="number" name="amount" placeholder="Budget Amount" required />
                <x-input-error :messages="$errors->get('payeeName')" class="mt-2" />
            </div>
            
            <!-- Budget Description -->
            <div>
                <x-text-input id="budgetDescription" class="block mt-1 w-full" type="text" name="budgetDescription" placeholder="Budget Description" required />
                <x-input-error :messages="$errors->get('budgetDescription')" class="mt-2" />
            </div>

            <!-- Payee number -->
            <div>
                <x-text-input id="payeeNumber" class="block mt-1 w-full" type="number" name="payeeNumber" placeholder="Phone Number or Mpesa Paybill or Till" required />
                <x-input-error :messages="$errors->get('payeeNumber')" class="mt-2" />
            </div>

            <!-- Payee Type: phone number, paybill or till -->
            <fieldset class="mt-2 text-gray-900 dark:text-white flex flex-row">
                <legend class="text-sm">Payee Type</legend>
                <div class="mt-2 ml-7">
                    <input type="radio" name="payeeType" id="payeeType-phone" value="phone" class="ml-2 mr-2 rounded" required>
                    <label for="payeeType-phone" class="text-sm">Phone</label>
                </div>
                <div class="mt-2 ml-7">
                    <input type="radio" name="payeeType" id="payeeType-paybill" value="paybill" class="ml-2 mr-2 rounded" required>
                    <label for="payeeType-paybill" class="text-sm">Paybill</label>
                </div>
                <div class="mt-2 ml-7">
                    <input type="radio" name="payeeType" id="payeeType-till" value="till" class="ml-2 mr-2 rounded" required>
                    <label for="payeeType-till" class="text-sm">Till</label>
                </div>
            </fieldset>
            <x-input-error :messages="$errors->get('payeeType')" class="mt-2" />

            <!-- Account number -->
            <div class="my-2">
                <x-text-input id="accountNumber" class="block mt-1 w-full" type="number" name="accountNumber" placeholder="Account Number" />
                <x-input-error :messages="$errors->get('accountNumber')" class="mt-2" />
            </div>

            {{-- <input name="amount" type="text" placeholder="Amount" class="w-full border border-gray-200 rounded p-2 mb-4">
            <input name="phone" type="text" placeholder="Phone Number" class="w-full border border-gray-200 rounded p-2 mb-4"> --}}
            <input type="submit" class="bg-blue-500 text-white rounded p-2 mr-2" value="Save Budget">
            <button type="button" id="transaction-close-button" class="bg-red-500 text-white rounded p-2">Close</button>
        </form>
    </div>
</div>