<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                No.
            </th>
            <th scope="col" class="px-6 py-3">
                Nomor Reff
            </th>
            <th scope="col" class="px-6 py-3">
                Channel
            </th>
            <th scope="col" class="px-6 py-3">
                Periode
            </th>
            <th scope="col" class="px-6 py-3">
                Paid Date
            </th>
            <th scope="col" class="px-6 py-3">
                Status
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($invoices as $invoice)
            <tr
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $invoice->nomor_reff }}
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $invoice->channel }}
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $invoice->periode }}
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $invoice->paid_date }}
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $invoice->status }}
                </td>
            </tr>
        @endforeach
    </tbody>
    {{ $invoices->links() }}
</table>
