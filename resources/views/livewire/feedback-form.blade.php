<div class="z-50 fixed bg-ui-footer-background">
    <form action="{{ route('feedback.store') }}" method="POST" enctype="multipart/form-data">
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
            <input type="hidden" name="display_status" class="form-input peer" placeholder=" " value="Hidden">
            @error('display_status')
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
</div>
