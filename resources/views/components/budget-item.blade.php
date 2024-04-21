{{-- <img class="h-48 aspect-video rounded-sm object-cover object-center dark:bg-gray-500" src="https://source.unsplash.com/random/241x361/?1" alt="Image 1"> --}}
<div class="h-28 aspect-video bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <p class="m-4 font-normal text-gray-700 dark:text-gray-400">{{ $budget->name }}</p>
    <p class="m-4 text-xl font-bold tracking-tight text-gray-900 dark:text-white">KES {{ $budget->amount }}</p>
    {{-- <h5 class="m-2 font-normal text-gray-700 dark:text-gray-400">Percentage</h5> --}}
</div>