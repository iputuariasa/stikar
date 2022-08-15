<section style="background-color: #2E0249" class="py-3" id="footer">
    <div class="container">
        <div class="row pb-2 text-center text-white">
            <small>&copy; 2019 Pusat Komputer dan Jaringan SMK TI Bali Global Karangasem</small>
            @auth
                <form action="/logout" method="post">
                @csrf
                    <button type="submit" class="btn btn-link text-decoration-none">Keluar</button>
                </form>
            @else
                <a href="/login" class="text-decoration-none">Admin</a>
            @endauth
        </div>
    </div>
</section>