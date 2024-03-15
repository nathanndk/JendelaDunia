<div class="max-w-4xl mx-auto mt-8">
    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
        <img class="w-full h-96 object-cover" src="{{ asset('storage/'.$car->photo) }}" alt="{{ $car->brand }} {{ $car->model }}">
        <div class="p-6">
            <h2 class="text-3xl font-semibold mb-4">{{ $car->brand }} {{ $car->model }}</h2>
            <p class="text-gray-700 mb-2"><strong>Year :</strong> {{ $car->year }}</p>
            <p class="text-gray-700 mb-2"><strong>Price :</strong> ${{ number_format($car->price) }}</p>
            <p class="text-gray-700 mb-2"><strong>Description :</strong> {{ $car->description }}</p>
            <p class="text-gray-700 mb-2"><strong>Seller :</strong> {{ $car->user_id }}</p>
            <div class="flex justify-end">
                <a href="{{ route('cars.edit', $car->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mr-1">Edit</a>
                <form action="{{ route('cars.destroy', $car->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">X</button>
                </form>
            </div>
        </div>
    </div>
</div>
