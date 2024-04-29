@extends('layoute.private')
@extends('partials.privateNavBar')
@section('content')

<div id="service" class="services_box">

    <h2 class="">Szolgáltatásaim</h2>
    
    <div class="d-table m-auto mt-5">
        @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif
        <div class="d-flex text-center p-3 table-box">
            <form action="updateService" method="post">
            @csrf
            @method('PUT')
            <table class="table_1">
                <thead>
                    <tr>
                        @if ( !empty($nailTypes) )
                        @foreach ($nailTypes as $nailType)
                        <th class="bg-danger-subtle p-4">
                            {{ $nailType->type }}
                        </th>
                        @endforeach
                        @else
                        <p>Nincs megjeleníthető ár.</p>
                        @endif

                        <th class="bg-danger-subtle p-4">Méret</th>
                        <th class="bg-danger-subtle p-4 " scope="col">Ár</th>
                    </tr>
                </thead>
                <tbody class="shadow p-4 mb-5 mx-5 bg-body-primery rounded-bottom">
                    <tr>
                        <th></th>
                        <td><input type="text" name="size" id="" size="1"></td>
                        <td class="p-2"><input type="number" name="price" id=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="text" name="size" id="" size="1"></td>
                        <td class="p-2"><input type="number" name="price" id=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="text" name="size" id="" size="1"></td>
                        <td class="p-2"><input type="number" name="price" id=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="text" name="size" id="" size="1"></td>
                        <td class="p-2"><input type="number" name="price" id=""></td>
                    </tr>
                </tbody> 
            </table>
                <div>
                    <button type="submit">Mentés</button>
                </div>
            </form>
            

        </div>
    </div>
    @endsection