<!-- car_edit_card.blade.php -->

<div class="max-w-4xl mx-auto mt-8">
    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
        <div class="p-6">
            <h2 class="text-3xl font-semibold mb-4">Edit Car</h2>
            <form action="{{ route('cars.update', $car->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 gap-4">
                    <div>
                        <label for="brand" class="text-base font-medium text-gray-700">Brand</label>
                        <input type="text" name="brand" id="brand" autocomplete="brand" required value="{{ $car->brand }}" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-base border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="model" class="text-base font-medium text-gray-700">Model</label>
                        <input type="text" name="model" id="model" autocomplete="model" required value="{{ $car->model }}" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-base border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="year" class="text-base font-medium text-gray-700">Year</label>
                        <input type="number" name="year" id="year" autocomplete="year" required value="{{ $car->year }}" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-base border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="price" class="text-base font-medium text-gray-700">Price</label>
                        <input type="number" name="price" id="price" autocomplete="price" required value="{{ $car->price }}" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-base border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="description" class="text-base font-medium text-gray-700">Description</label>
                        <textarea name="description" id="description" autocomplete="description" required class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-base border-gray-300 rounded-md">{{ $car->description }}</textarea>
                    </div>
                    <div>
                        <label for="photo" class="text-base font-medium text-gray-700">Photo</label>
                        <input type="file" name="photo" id="photo" autocomplete="photo" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-base border-gray-300 rounded-md">
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
