<!-- Modal -->
<div
    id="{{ $id }}"
    class="fixed inset-0 z-50 hidden items-center justify-center modal">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/60"></div>

    <!-- Contenido -->
    <div class="relative z-10 w-full max-w-3xl mx-4 rounded-xl bg-white shadow-xl">

        <!-- Header -->
        <div class="flex items-center justify-between border-b px-6 py-4">
            <h2 class="text-xl font-semibold">
                {{ $title }}
            </h2>

            <button
                id="close-modal"
                class="rounded p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                ✕
            </button>
        </div>

        <!-- Body -->
        <div class="p-6" id="modal-content">
            <!-- Content for modal -->
        </div>

        <!-- Footer -->
        <div class="flex justify-end items-center gap-3 border-t px-6 py-4">
            <div id="modal-function">
                <!-- Content btn function for modal -->
            </div>

            <div>
                <button
                    id="btn-close"
                    class="rounded-lg border px-4 py-2 hover:bg-gray-100">
                    Close
                </button>
            </div>
            

        </div>

    </div>

</div>
