<footer class="">
    @include("partials.mainFooter")
    <div class="container text-white d-flex justify-content-between my-4">
        <div class="d-flex">
            <div> 
                <h3>DC COMICS</h3>
                <ul>
                    @for($i=0;$i<6;$i++)
                    <li><a href="">lorem</a></li>
                    @endfor
                </ul>
                <h3>DC COMICS</h3>
                    <ul>
                        @for($i=0;$i<6;$i++)
                            <li><a href="">lorem</a></li>
                        @endfor
                    </ul>
            </div>
            <div>
                <h3>DC COMICS</h3>
                <ul>
                    @for($i=0;$i<10;$i++)
                        <li><a href="">lorem</a></li>
                    @endfor
                </ul>
            </div>
            <div>
                <h3>DC COMICS</h3>
                <ul>
                    @for($i=0;$i<10;$i++)
                        <li><a href="">lorem</a></li>
                    @endfor
                </ul>
            </div>
        </div>
        <div class="block-right">
            <img src="{{ Vite::asset("resources/img/dc-logo-bg.png") }}" alt="">
        </div>
    </div>

    <div class="bg-dark py-4 ">
        <div class="container d-flex justify-content-between">
            <button class="border border-primary bg-transparent text-white p-3">SIGN-UP NOW!</button>
            <div class="d-flex">
                <h1 class="text-primary py-2">FOLLOW US</h1>
                <img src="{{ Vite::asset("resources/img/footer-facebook.png") }}" alt="">
                <img src="{{ Vite::asset("resources/img/footer-periscope.png") }}" alt="">
                <img src="{{ Vite::asset("resources/img/footer-pinterest.png") }}" alt="">
                <img src="{{ Vite::asset("resources/img/footer-twitter.png") }}" alt="">
                <img src="{{ Vite::asset("resources/img/footer-youtube.png") }}" alt="">
            </div>
        </div>
    </div>
</footer>