<x-app-layout>
    <x-slot name="header">
        <div class="ms-auto" onclick="addbtn()">
            <a href="#modal-task" data-bs-toggle="modal" class="btn btn-secondary" id="add">{{ __('Add New Meal') }}</a>
        </div>
    </x-slot> 

</x-app-layout>

<div class="modal fade" id="modal-task">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action= "" id="Meal-modal">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Add Meal</h5>
                    <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                </div>
                <div class="modal-body">
                    <!-- This Input Allows Storing Meals Index  -->
                    <input type="hidden" id="task-id" name="task-id">
                    <div class="row">
                        <div class="mb-3 col">
                            <label class="form-label">Meal title</label>
                            <input type="text" class="form-control" name="title" id="title-id" />
                        </div>
                        <div class="mb-3 col">
                            <label class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" />
                        </div>
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" rows="5" id="lyrics" name="Lyrics"></textarea>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" name="delete" class="btn btn-danger task-action-btn" id="meal-delete-btn">Delete</a>
                            <button type="submit" name="update" class="btn btn-warning task-action-btn" id="meal-update-btn">Update</a>
                            <button type="submit" name="save" class="btn btn-primary task-action-btn" id="meal-save-btn">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

