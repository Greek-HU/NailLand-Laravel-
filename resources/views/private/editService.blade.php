@extends('layoute.private')
@extends('partials.privateNavBar')
@section('content')

<div id="service" class="services_box">

    <h2 class="">Szolgáltatásaim</h2>
    <div>
        <span>Válasszon betütípust:</span>
        <button class="Permanent">Permanent</button>
        <button class="Poppins">Poppins</button>
        <button class="Playfair">Playfair</button>
        <button class="Lobster">Lobster</button>
    </div>
    
    <div class="d-table m-auto mt-5">
    <div class="d-flex justify-content-end ">
        <button type="button" class="btn btn-primary newBoxBtn">Új elem hozzáadása</button>
    </div>
        @if (session('status'))
        <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif
        <div class="d-flex text-center p-3 table-box">@if ( !empty($nailTypes) )@foreach ($nailTypes as $nailType)
            <form action="updateType" method="post">
                @csrf
                @method('PUT')
                <table class="table_1 rounded">
                    <thead class="rounded-top">
                        <tr class="bg-danger-subtle p-4">
                            <th class="p-4">
                                <input type="text" name="editnailtype" id="" value="{{ $nailType->type }}" size="7">
                            </th>
                            <th class="p-4">{{ $nailType->size_title }}</th>
                            <th class="p-4">{{ $nailType->price_title }}</th>
                            <th class="p-4"></th>
                            <th class="p-4">
                                <a href="typeDestroy/{{$nailType->id}}">
                                        <i class="text-black bi bi-trash3"></i>
                                       
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="shadow p-3 bg-body-primery rounded-bottom">
                        @if ( !empty($nailSizes))
                            @foreach ($nailSizes as $nailSize)
                                    <tr>
                                        <td></td>
                                        <td>{{ $nailSize->size_name }}</td>
                                        <td class="p-2">
                                            @foreach($nailSize->prices as $price)
                                                {{$price->amount}} Ft.
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="editNailData/nailID={{$nailSize->id}}">
                                                    <i class="text-black bi bi-pencil"></i>
                                            </a>
                                        </td>
                                    </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                <div>
                    <button type="submit">Mentés</button>
                </div>
            </form>
            @endforeach
                            @else
                            <p>Nincs megjeleníthető adat.</p>
                            @endif
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
            @include('partials.addBox')
        </div>
    </div>
</div>
    @endsection
    @section('script')
    <script>
        $(document).ready(function () {
        $(document).on('click', '.newBoxBtn', function(){
            $('#addBox').modal('show');

            $.ajax({
                type: "GET",
                url: "/addnewBox",
                success: function(response){
                    $('#newNailType').text(response.nailType.type);
                    $('#newNailSize').val(response.nailType.size_title);
                    $('#newNailPrice').text(response.nailType.price_title);
                    //console.log(response.nailType);
                }
            });
        });
    });
    </script>
    @endsection