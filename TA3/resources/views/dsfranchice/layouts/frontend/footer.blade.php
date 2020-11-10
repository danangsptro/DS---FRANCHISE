<div class="ft" id="footer">
    <div class="container-fluid">
        @foreach ($footer as $ft)
            <h1 style="padding-top:3rem ">{{ $ft->judul_footer }}</h1>
            <hr style=" width: 50px; border-top: 3px solid #838383">
            <br>
            <h2>Contact Us</h2>
            <p>{{ $ft->contact_us }}</p>

        @endforeach
    </div>
</div>
