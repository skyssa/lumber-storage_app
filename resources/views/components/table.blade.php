<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">ID</th>
                <th scope="col" class="px-6 py-3">NAME</th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">TYPE</th>
                <th scope="col" class="px-6 py-3">Price</th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Quantity</th>
                <th scope="col" class="px-6 py-3">ACTION</th>
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>
