<div>
    @if ($message = Session::get('info'))
        <div id="notify" style="visibility: visible">
            <div class="fixed top-0 bg-black w-full h-screen opacity-40"></div>
            <div class="notification z-50 bg-ui-footer-background p-4 rounded" role="alert">
                <div class="">
                    <img class="h-20 mx-auto" src="{{ asset('/images/icon/check.png') }}" alt="">
                </div>
                <div class="mt-4 text-center text-base text-ui-footer-text-darker">Your message has been recorded.</div>
            </div>
        </div>
        <script>
            function hideMessageBox() {
                document.getElementById('notify').style.visibility = "hidden";
            }
            setTimeout('hideMessageBox()', 3000);
        </script>
    @endif
</div>