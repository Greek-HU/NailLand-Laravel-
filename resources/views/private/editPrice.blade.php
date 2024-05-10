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
           
            <form action="updateSize/sizeID={{ $newid }}" method="post">
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
                        <td>
                            <select>
                                @foreach ($nailSizes as $nailSize)
                                    @foreach($oldSizes as $oldSize)
                                        <option value="{{ $nailSize->id}}" {{ $oldSize->id == $nailSize->id ? 'selected class="newSize"' : ''}}>{{ $nailSize->size_name}}</option>
                                    @endforeach
                                @endforeach
                            </select>
                        </td>
                       
                        <td class="p-2">
                        @foreach ($oldSizes as $oldSize)
                            <input type="number" name="updatePrice" id="" value="{{$oldSize->price}}">                        
                        @endforeach
                        </td>
                    </tr>
                    
                </tbody> 
            </table>
                <div>
                    <button class="btn btn-success" type="submit">Mentés</button>
                    <a class="btn btn-primary" href="{{route('editService')}}">Vissza</a>
                </div>
            </form>
            

        </div>
    </div>
    @endsection