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
                    <p>{{$picture->title}}</p>
                    <img src="{{$picture->imgPlace}}" alt="" height="250">

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection