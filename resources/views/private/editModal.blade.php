<form action="updatePic/picID={{$id}}" method="post">
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kép szerkesztése</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <div >
                    <img class="rounded" src="{{$picture->imgPlace}}" alt="" height="150">
                </div>
                <div class="p-2">
                    <input type="text" name="newTitle" id="" value="{{$picture->title}}">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégsem</button>
                <button type="submit" class="btn btn-success">Mentés</button>
            </div>
        </div>
    </div>
</div>
</form>
