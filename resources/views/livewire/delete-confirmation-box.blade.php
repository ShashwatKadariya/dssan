<div id="deleteBox" class="hidden">
    <div class="fixed top-0 bg-black w-full h-screen opacity-40"></div>
    <div tabindex="-1" aria-hidden="true" class="delete-box">
        <div class="p-8 text-center rounded-sm shadow-sm bg-gray-50 border">
            <button type="button"
                class="text-gray-600 absolute top-2.5 right-2.5 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-gray-600 hover:text-white"
                data-modal-toggle="deleteModal" onclick="document.getElementById('deleteBox').className = 'hidden'">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <p class="my-1 text-gray-600 text-left text-lg">Are you sure you want to delete?</p>
            <p class="text-xs text-gray-500 text-left">If you delete this row, you can't recover it.</p>
            <div class="mt-8 flex items-center justify-end space-x-4">
                <button data-modal-toggle="deleteModal" type="button"
                    class="py-1 px-2 text-sm font-medium text-gray-600 rounded border border-gray-600 hover:bg-gray-600 hover:text-white"
                    onclick="document.getElementById('deleteBox').className = 'hidden'">Cancel
                </button>
                <button data-modal-toggle="deleteModal" type="button"
                    class="py-1 px-2 text-sm font-medium text-white bg-red-500 rounded hover:bg-red-600"
                    onclick='confirmDelete()'>Delete
                </button>
            </div>
        </div>
    </div>
</div>
