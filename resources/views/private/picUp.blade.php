@extends('layoute.private')
@extends('partials.privateNavBar')

@section('content')
<div class="box pb-4">
    <div class="text box_color">
        <div class="text-center form_box">
            <h1>Képfeltöltő űrlap</h1>
            @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <form method="post" enctype="multipart/form-data" action="storeImage">
                @csrf
                <div>
                    <input type="file" name="pictureURL" accept="image/*">
                </div>
                <div>
                    <label for="cim">Cím:</label>
                    <input type="text" name="title">
                </div>
                <div class="fomr_btn">
                    <input class="btn btn-dark" type="submit" value="Feltöltés" name="upload_button">
                </div>
            </form>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="gallery col-12 col-md-8">
                    @foreach ($pictures as $picture)
                    <div class="gallery__column">
                        <div class="gallery__link">
                            <figure class="gallery__thumb">
                                <img src="{{$picture->imgPlace}}" onclick="img_box(this)" alt="Portrait by Jessica Felicio" height="250" class="gallery__image">
                                <figcaption class="gallery__caption">{{$picture->title}}</figcaption>
                            </figure>
                            <!-- Modal Button -->
                            <div class="d-flex justify-content-center">
                                    <a class="btn btn-success" href="editPic/picID={{$picture->id}}" data-bs-toggle="modal" data-bs-target="#editModal">Szerkesztés</a>

                                
                                <a  class="btn btn-danger ms-2" href="#" data-bs-toggle="modal" data-bs-target="#xModal" data-pic-id="{{$picture->id}}" onclick="img_box(this)">
                                    X
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--Delete Modal ->
@foreach ($pictures as $picture)
<form action="destroyPic/picID=" method="post">
<div class="modal fade" id="xModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégsem</button>
                <button type="submit" class="btn btn-primary">Törlés</button>
            </div>
        </div>
    </div>
</div>
</form>
@endforeach-->
@endsection
@extends('private.xmodal')