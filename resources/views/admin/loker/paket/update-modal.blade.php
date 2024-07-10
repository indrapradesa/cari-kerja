<!-- Main modal -->
<div id="updateProductModal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Update Paket
                </h3>
                <button type="button"
                    class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="updateProductModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form id="myFormUpdate" action="{{ route('admin.packages.update') }}" method="post">
                    @csrf
                    <div class="mb-4 grid gap-4 sm:grid-cols-2">
                        <input type="hidden" id="id" name="id" readonly>
                        <div>
                            <label for="name_package"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Paket</label>
                            <input id="name_package" name="name_package" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                >
                        </div>
                        <div>
                            <label for="max_posting"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Max.
                                Posting</label>
                            <input id="max_posting" name="max_posting" type="number"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                min="1"
                                >
                        </div>
                        <div>
                            <label for="max_highlight"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Max.
                                Highlight</label>
                            <input id="max_highlight" name="max_highlight" type="number"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                 min="1"
                                >
                        </div>
                        <div>
                            <label for="day_duration"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Durasi (hari)</label>
                            <input id="day_duration" name="day_duration" type="number"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                 min="1"
                                >
                        </div>
                        <div>
                            <label for="price"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                            <input id="price" name="price" type="number"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                 required
                                >
                        </div>
                        <div>
                            <label for="discount"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diskon</label>
                            <input id="discount" name="discount" type="number"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                >
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button type="submit" id="updateButton"
                            class="text-white bg-yellow-500 hover:bg-yellow-700 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Update Paket
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const form = document.getElementById('myFormUpdate');
    const updateButton = document.getElementById('updateButton');

    // Tambahkan event listener untuk click event pada tombol submit
    updateButton.addEventListener('click', function() {
        // Periksa apakah semua input yang diperlukan telah diisi
        if (form.checkValidity()) {
            // Jika ya, ganti konten tombol dengan ikon animasi loading saat proses submit dimulai
            this.innerHTML = `
            <svg aria-hidden="true" role="status" class="inline w-4 h-4 me-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
            </svg>
            Loading...
            `;

            // Atur atribut 'disabled' untuk meng-disable tombol selama proses loading
            // this.disabled = true;
            this.style.cursor = 'not-allowed';
            // Lakukan proses submit atau permintaan fetch di sini
            // ...
        } else {
            // Jika ada input yang sifatnya required tidak diisi, tampilkan pesan kesalahan atau lakukan penanganan yang sesuai
            alert('Please fill in all required fields.');
        }
    });
</script>
