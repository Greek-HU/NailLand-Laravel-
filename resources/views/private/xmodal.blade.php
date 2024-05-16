
<form action="{{ route('destroyPic', [$picture->id]) }} " method="get">
  @csrf
  @method('DELETE')
<div class="modal fade" id="xModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            </div>
            <div class="modal-body">
            
            {{$picture->id}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégsem</button>
                <button type="submit" class="btn btn-primary">Törlés</button>
            </div>
        </div>
    </div>
</div>
</form>

