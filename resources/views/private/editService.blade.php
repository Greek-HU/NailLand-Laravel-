@extends('layoute.private')
@extends('partials.privateNavBar')
@section('content')
<div id="service" class="services_box">

    <h2 class="" >Szolgáltatásaim</h2>
    <div>
        <span>Válasszon betütípust:</span>
            <button class="Permanent">Permanent</button>
            <button class="Poppins">Poppins</button>
            <button class="Playfair">Playfair</button>
            <button class="Lobster">Lobster</button>
    </div>
    <div class="d-table m-auto mt-5">
    <div class="d-flex text-center p-3 table-box">
        <table class="table_1">
            <thead>
                <tr>
                    <th class="bg-danger-subtle p-4">{{ auth()->service()->nail_type}}</th>
                    <th class="bg-danger-subtle p-4">Méret</th>
                    <th class="bg-danger-subtle p-4 " scope="col">Ár</th>
                </tr>
            </thead>
            <tbody class="shadow p-4 mb-5 mx-5 bg-body-primery rounded-bottom">
                <tr >
                    <th></th>
                    <td>S</td>
                    <td class="p-2">7500 Ft.</td>
                </tr>
                <tr>
                    <td></td>
                    <td>M</td>
                    <td class="p-2">7500 Ft.</td>
                </tr>
                <tr>
                    <td></td>
                    <td>L</td>
                    <td class="p-2">7500 Ft.</td>
                </tr>
                <tr>
                    <td></td>
                    <td>XL</td>
                    <td class="p-2">7500 Ft.</td>
                </tr>
            </tbody>
        </table>
        <table class="table_2">
            <thead>
                <tr>
                    <th class="bg-danger-subtle p-4">Saját köröm</th>
                    <th class="bg-danger-subtle p-4">Ár</th>
                </tr>
            </thead>
            <tbody class="shadow p-4 mb-5 mx-5 bg-body-primery rounded-bottom">
                <tr>
                    <td>Sima manikűr</td>
                    <td class="p-2">2000 Ft.</td>
                </tr>
                <tr>
                    <td>Gél lakk</td>
                    <td class="p-2">4500 Ft.</td>
                </tr>
                <tr>
                    <td class="p-2">Műköröm eltávolítás + Gél lakk</td>
                    <td class="p-2">5000 Ft.</td>
                </tr>
                <tr>
                    <td>Köröm pótlás</td>
                    <td class="p-2">1000 Ft./köröm</td>
                </tr>
                <tr>
                    <td>Mköröm eltávolítás</td>
                    <td class="p-3">2000 Ft.</td>
                </tr>
            </tbody>
        </table>
        
        <table class="table_3">
            <thead class="">
                <tr> 
                    <th class="bg-danger-subtle p-3 col-5">Műköröm építés/töltés - Acryl gél- Gél lakk</th>
                    <th class="bg-danger-subtle p-4">Méret</th>
                    <th class="bg-danger-subtle p-4">Ár</th>
                </tr>
            </thead>
            <tbody class="shadow p-4 mb-5 mx-5 bg-body-primery rounded-bottom">
                <tr>
                    <td></td>
                    <td>S</td>
                    <td class="p-2">5500 Ft.</td>
                </tr>
                <tr>
                    <td></td>
                    <td>M</td>
                    <td class="p-2">6500 Ft.</td>
                </tr>
                <tr>
                    <td></td>
                    <td>L</td>
                    <td class="p-2">7500 Ft.</td>
                </tr>
                <tr>
                    <td></td>
                    <td>XL</td>
                    <td class="p-2">8500 Ft.</td>
                </tr>
            </tbody>
        </table>
    
    </div>
</div>
@endsection