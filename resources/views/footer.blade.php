<div style="clear:both; position: relative;" class="footer-basic">
    <footer>
        <ul class="list-inline">
            @if (Session::has('user'))
                <li class="list-inline-item"><a href="/about_us">About Us</a></li>
            @else
                <li class="list-inline-item"><a href="/login">About Us</a></li>
            @endif
            <li class="list-inline-item"><a href="#">Contact Us</a></li>
            <li class="list-inline-item"><a href="#">Terms & Conditions</a></li>
        </ul>
        <p class="copyright">E-Gardezi © 2021</p>
    </footer>
</div>
