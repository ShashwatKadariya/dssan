<div class="mt-auto text-sm bg-off-white">
    <footer class="px-5 py-3 sm:px-8 sm:py-5 sm:flex sm:flex-row-reverse sm:gap-4">
        <section class="sm:basis-3/4">
            <form action="{{ route('feedback.store') }}" method="POST" enctype="multipart/form-data" class="w-2/4">
                @csrf
                <p class="text-deep-blue text-lg font-semibold pb-2">Connect with us</p>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="full_name" class="form-input peer" placeholder=" ">
                    <label class="form-label">Full Name</label>
                    @error('full_name')
                        <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                    @enderror
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="email" name="email" class="form-input peer" placeholder=" ">
                    <label class="form-label">Email address</label>
                    @error('email')
                        <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                    @enderror
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="subject" class="form-input peer" placeholder=" ">
                    <label class="form-label">Subject</label>
                    @error('subject')
                        <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                    @enderror
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="batch" class="form-input peer" placeholder=" ">
                    <label class="form-label">Batch</label>
                    @error('batch')
                        <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                    @enderror
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="message" class="form-input peer" placeholder=" ">
                    <label class="form-label">Message</label>
                    @error('message')
                        <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                    @enderror
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-input peer" accept="image/*"
                        onchange="previewImage(event)">
                    <img id="preview" class="hidden mt-2 w-20 h-20 rounded-full">
                </div>
                <button type="submit" class="create-btn">Submit</button>
            </form>
        </section>
        <hr class="m-2 sm:hidden">
        <section class="sm:basis-1/2 text-gray-700">
            <a href="https://deerwalk.edu.np/sifalschool/">
                <img src="{{ asset('images/logo/dsslogo.png') }}" alt="dsslogo"
                    class="max-w-[8rem] sm:max-w-[10rem] pb-2">
            </a>
            <p>Sifal, Kathmandu, Nepal</p>
            <p><a href="mailto: contact@sifal.deerwalk.edu.np">contact@sifal.deerwalk.edu.np</p></a>
            <p><a href="tel:01-4591240">01-4591240</a> | <a href="tel: +977 985-1064445">+977 985-1064445</a></p>
            <div class="sm:hidden py-2 text-very-deep-orange">
                <a class="pr-4" href="#">Facebook</a><a class="pr-4" href="#">Instagram</a><a
                    class="pr-4" href="#">Twitter</a><a href="#">Youtube</a>
            </div>
        </section>
    </footer>
    <p class="text-center text-gray-500">&#169; Deerwalk Sifal School</p>
</div>
