@section('privateNavBar')
<div class="navbar">
        <div class="logo">
            <img src="{{ asset('img/carousel/logo.jpg') }}" class="logo justify-content-start" alt="Körmös logó">
        </div>

        <div class="nav_links">

            <a href="/" class="fst_pg">Kezdőlap</a>
            <a href="editService" class="services">Szolgáltatások</a>
            <a href="gallery" class="gall_on">Galéria</a>
            <a href="upload">Képfeltöltés</a>
            <div class="d-flex justify-content-end">
                <a href="editContForm" class="contact d-flex align-items-end justify-content-end">Elérhetőség</a>
            </div>
        </div>
        <a href="javascript:void(0);" class="icon text-center" onclick="mobil_navbar()">
            <i class="fa fa-bars"></i>
          </a>
    </div>
@endsection