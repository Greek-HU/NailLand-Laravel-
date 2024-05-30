<form action="createnewBox" method="post">
    @csrf
    <div class="modal fade" id="addBox" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Új elem hozzáadása</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body text-center">
                    <table class="table_1 rounded">

                        <thead class="rounded-top">
                            <tr class="bg-danger-subtle p-4">
                                <th class="p-4">
                                    <input type="text" name="newNailType" id="newNailType" size="7" class="text-center" placeholder="Köröm neve">
                                </th><br>
                                <th class="p-4">
                                    <input type="text" name="newNailSize" id="newNailSize" size="4" class="text-center" value="Méret">
                                </th>
                                <th class="p-4">
                                    <input type="text" name="newNailPrice" id="newNailPrice" size="4"  class="text-center" value="Ár">
                                </th>
                            </tr>
                        </thead>
                        <div>
                        </div>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégsem</button>
                    <button type="submit" class="btn btn-success">Mentés</button>
                </div>
            </div>
        </div>
    </div>
</form>