<x-app-layout>

    <x-slot name="header">
        <div class="ms-auto" onclick="addbtn()">
            <a href="#modal-task" data-bs-toggle="modal" class="btn btn-secondary" id="add">{{ __('Add New Meal') }}</a>
        </div>
    </x-slot>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Meal Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">
                    </td>
                    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                        <img class="w-10 h-10 rounded-full" src="/images/machiato.jpg" alt="Jese image">
                        <div class="pl-3">
                            <div class="text-base font-semibold">Machiato Coffee</div>
                        </div>
                    </th>
                    <td class="px-6 py-4">
                        9.99$
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div> delicious
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-red-500 dark:text-blue-500 no-underline">Show</a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">
                    </td>
                    <th scope="row" class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <img class="w-10 h-10 rounded-full" src="/images/CoffeShop.jpg" alt="Jese image">
                        <div class="pl-3">
                            <div class="text-base font-semibold">Coffee</div>
                        </div>
                    </th>
                    <td class="px-6 py-4">
                        7.99$
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div> delicious
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-red-500 dark:text-blue-500 no-underline">Show</a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">
                    </td>
                    <th scope="row" class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <img class="w-10 h-10 rounded-full" src="/images/lait.jpg" alt="Jese image">
                        <div class="pl-3">
                            <div class="text-base font-semibold">Lait</div>
                        </div>
                    </th>
                    <td class="px-6 py-4">
                        5.99$
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div> delicious
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-red-500 dark:text-blue-500 no-underline">Show</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</x-app-layout>

<div class="modal fade" id="modal-task">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action= "inserData" id="Meal-modal" enctype="multipart/form-data">
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
                            <input type="text" class="form-control" name="title" id="title-id" />
                        </div>

                        <div class="mb-3 col">
                            <label class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" />
                        </div>
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" rows="5" id="des" name="des"></textarea>
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

