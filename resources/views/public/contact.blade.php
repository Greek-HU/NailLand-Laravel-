@extends('layoute.public')
@extends('public.publicNavBar')
@section('content')
<div class="cont pt-4">
    <div class="cont_box">
        <h2>Időpont foglalás</h2>
        <ul >
            <li class="p-2">
                <strong>Cím: </strong>
                <span>{{auth()->user()->address}}</span>
                <span class="material-symbols-outlined">
save
</span>
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
    </div>
</div> 
@endsection