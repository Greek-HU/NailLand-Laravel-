@section('serviceBoxs')
<form action="updateType" method="post">
    @csrf
    @method('PUT')
    <table class="table_1">
        <thead>
            <tr>
                @if ( !empty($nailTypes) )
                @foreach ($nailTypes as $nailType)
                <th class="bg-danger-subtle p-4">
                    <input type="text" name="editnailtype" id="" value="{{ $nailType->type }}" size="4">
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
            @if ( !empty($nailSizes) )@foreach ($nailSizes as $nailSize)
            <tr>
                <td></td>
                <th>{{ $nailSize->size_name }}</th>
                @foreach ($nailPrices as $nailPrice)
                <td class="p-2">{{ $nailPrice->price }} Ft.</td>
                @endforeach
            </tr>
            @endforeach
            @endif
            <div>

            </div>
            <tr>
                <td></td>
                <th>

                </th>
                <td></td>
            </tr>

        </tbody>
    </table>
    <div>
        <a href="editSizePrice">
            <div class="text-black text-center d-flex align-items-center justify-content-center">
                <i class="bi bi-pencil"></i>
            </div>
            <span>Szerkeszt</span>
        </a>
    </div>
    <div>
        <button type="submit">Mentés</button>
    </div>
</form>
@endsection