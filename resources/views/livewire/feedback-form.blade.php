<div id="feedbackForm" class="hidden">
    <div class="fixed top-0 bg-black w-full h-screen opacity-40"></div>
    <div class="feedback-form z-50 p-6 bg-ui-white rounded-uihalf">
        <button type="button" class="text-black absolute top-2.5 right-2.5"
            onclick="document.getElementById('feedbackForm').className = 'hidden'">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close modal</span>
        </button>
        <form action="{{ route('feedback.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <p class="font-semibold">GET IN TOUCH</p>
            <p class="text-xs mb-3">Your message may be displayed as feedback.</p>
            <div class="relative z-0 w-full mb-6 group">
                <input required type="text" name="full_name"
                    class="block py-2.5 px-0 w-full text-sm text-ui-footer-text bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-ui-footer-text peer"
                    placeholder=" ">
                <label
                    class="peer-focus:font-medium absolute text-sm text-ui-footer-text duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-ui-footer-text-darker peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Full
                    Name*</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input required type="email" name="email"
                    class="block py-2.5 px-0 w-full text-sm text-ui-footer-text bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-ui-footer-text peer"
                    placeholder=" ">
                <label
                    class="peer-focus:font-medium absolute text-sm text-ui-footer-text duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-ui-footer-text-darker peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                    address*</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input required type="text" name="batch"
                    class="block py-2.5 px-0 w-full text-sm text-ui-footer-text bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-ui-footer-text peer"
                    placeholder=" ">
                <label
                    class="peer-focus:font-medium absolute text-sm text-ui-footer-text duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-ui-footer-text-darker peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Batch*</label>
            </div>
            <div class="relative z-0 w-full mb-3 group">
                <label class="text-sm text-ui-footer-text">Message*</label>
                <textarea required rows="2" name="message"
                    class="block mt-2 p-2 w-full text-sm border-2 border-gray-300 focus:outline-none focus:ring-0"></textarea>
            </div>
            <input type="hidden" name="display_status" value="Hidden">
            <div class="relative z-0 w-full mb-6 group">
                <label class="text-sm text-ui-footer-text">Image</label>
                <input type="file" name="image"
                    class="block py-2.5 px-0 w-full text-sm text-ui-footer-text bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-ui-footer-text peer"
                    accept="image/*">
            </div>
            <button type="submit"
                class="mt-2 text-white bg-black font-semibold text-sm py-2 text-center w-full">Submit</button>
        </form>
    </div>
</div>
