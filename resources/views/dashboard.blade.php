<x-app-layout>
<style>
    .min-h-screen {
    min-height: auto;
}
</style>
    <x-slot name="header">
        <div class="ms-auto" onclick="addbtn()">
            <a href="#modal-task" data-bs-toggle="modal" class="btn btn-secondary" id="add">{{ __('Add New Meal') }}</a>
        </div>
    </x-slot>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-1 py-3">
                        Meal Name
                    </th>
                    <th scope="col" class="px-1 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-1 py-3">
                        {{-- Description --}}
                    </th>
                    <th scope="col" class="px-1 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                {{-- @dd($type) --}}
                @foreach ($type as $coffe)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="flex items-center px-1 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                        <img class="w-10 h-10 rounded-full" src="/images/{{$coffe['image']}}" alt="Jese image">
                        <div class="pl-3">
                            <div class="text-base font-semibold">{{$coffe['name']}}</div>
                        </div>
                    </th>
                    <td class="px-6 py-4">
                        {{$coffe['price']}}DH
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2 truncate"></div>{{$coffe['description']}}
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <a href="#fill-modal" data-bs-toggle="modal" class="font-medium text-green-500 dark:text-blue-500 no-underline" onclick="edite({{$coffe}})">Show</a>
                        <form action="{{url('dishes/delete/'.$coffe->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="delete" class="font-medium text-red-500 dark:text-blue-500 no-underline" id="meal-delete-btn">Delete</button>
                            </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>

<div class="modal fade" id="modal-task">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action= "{{route('dishes.store')}}" enctype="multipart/form-data" id="Meal-modal">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Add Meal</h5>
                    <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                </div>
                <div class="modal-body">
                    <!-- This Input Allows Storing Meals Index  -->
                    <input type="hidden" id="task-id" name="task-id">
                    <div class="row">
                        <div class="mb-3 col">
                            <label class="form-label">Meal image</label>
                            <input type="file" class="form-control" name="image" id="image" />
                        </div>
                        <div class="mb-3 col">
                            <label class="form-label">Meal title</label>
                            <input type="text" class="form-control" name="title" id="name" />
                        </div>

                        <div class="mb-3 col">
                            <label class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" />
                        </div>
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" rows="5" id="description" name="description"></textarea>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" name="update" class="btn btn-warning task-action-btn" id="meal-update-btn">Update</a>
                            <button type="submit" name="save" class="btn btn-primary task-action-btn" id="meal-save-btn">Save</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>

{{-- {{ fill model with information }} --}}

    <div class="modal fade" id="fill-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action= "{{url('meal/'.$coffe->id)}}" enctype="multipart/form-data" id="Meal-modal">
                    @method('PUT')
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold">Add Meal</h5>
                        <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                    </div>
                    <div class="modal-body">
                        <!-- This Input Allows Storing Meals Index  -->
                        <input type="hidden" id="id" name="id">
                        <div class="row">
                            <div class="mb-3 col">
                                <label class="form-label">Meal image</label>
                                <input type="file" class="form-control" name="image" id="image" />
                            </div>
                            <div class="mb-3 col">
                                <label class="form-label">Meal title</label>
                                <input type="text" class="form-control" name="name" id="namee" />
                            </div>

                            <div class="mb-3 col">
                                <label class="form-label">Price</label>
                                <input type="number" class="form-control" id="pricee" name="price" />
                            </div>
                        </div>
                        <div class="mb-0">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="5" id="descriptione" name="description"></textarea>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                                <button type="submit" name="update" class="btn btn-warning task-action-btn" id="meal-update-btn">Update</button>
                                {{-- <button type="submit" name="save" class="btn btn-primary task-action-btn" id="meal-save-btn">Save</button> --}}
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
<script src="/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

