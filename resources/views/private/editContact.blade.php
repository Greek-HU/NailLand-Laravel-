@extends('layoute.private')
@extends('partials.privateNavBar')
@section('content')
<div class="cont pt-4">
    <div class="cont_box">
        <h2>Időpont foglalás</h2>
        <form action="updateContData" method="post">
            @csrf
            @method('PUT')
        <ul >
            <li class="p-2">
                <strong>Cím: </strong>
                <input type="text" name="address" id="" placeholder="{{ auth()->user()->address }}">
                <button type="submit">Mentés</button>
                
            </li>
            <li class="p-2">
                <strong>Email: </strong>
                <span>Email cím</span>
            </li>
            <li class="p-2 pb-3">
                <strong>Tel.: </strong>
                <span>06 20 1234 567</span>
            </li>
        </ul>
        </form>
    </div>
</div> 
@endsection