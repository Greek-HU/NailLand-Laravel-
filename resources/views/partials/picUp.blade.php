@extends('layoute.private')
@extends('partials.privateNavBar')
@section('content')
<div class="box pb-4">
        <div class="text box_color">
            <div class="text-center form_box">
                <h1>Képfeltöltő űrlap</h1>
                 
                <form method="post" enctype="multipart/form-data">
                    <div>
                        <input type="file" name="picture" accept="image/*">
                    </div>
                    <div >
                        <label for="cim">Cím:</label>
                        <input type="text" name="title">
                    </div>
                    <div class="fomr_btn">
                        <input class="btn btn-dark" type="submit" value="Feltöltés" name="upload_button">
                    </div>
                </form>
            </div>
            </div>
            </div>
    </div>
@endsection