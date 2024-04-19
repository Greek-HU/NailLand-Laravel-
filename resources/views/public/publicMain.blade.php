@extends('layoute.public')
@extends('public.publicNavBar')
@section('content')

<div class="box container-fluid">
        <div class="text">
            <div class="wlc_txt">
                <h1>Üdvözöllek az oldalamon</h1>
                <div class="d-flex">
                    <div class="row">
                        <div class="pic_box col">
                            <img src="{{ asset('img/carousel/pic1.jpg') }}" alt="" class="pic">
                            <img src="{{ asset('img/carousel/pic2.jpg') }}" alt="" class="pic">
                            <img src="{{ asset('img/carousel/pic3.jpg') }}" alt="" class="pic">
                            <img src="{{ asset('img/carousel/pic4.jpg') }}" alt="" class="pic">
                            <img src="{{ asset('img/carousel/pic5.jpg') }}" alt="" class="pic">
                        </div>
                    
                        <div class="text_box col">
                            <p>Sziasztok X Y műkörömépítő vagyok</p>
                            <p>Max 1750 karakter fér ide!!!!<br>
                                Kedves régi és új vendégeim. Szeretettel várlak titeket a megszokott '...' helyemen.
                            Időpontot továbbra is telefonon tudtok egyeztetni a Kapcsolatok menüpont alatt!</p>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
</div>
@endsection