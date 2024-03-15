@foreach ($cars as $car)
    <a href="{{ route('cars.show', $car->id) }}" class="flex items-center gap-4 rounded-lg border p-4 transition-all hover:bg-gray-100 dark:hover:bg-gray-800 relative">
        <div class="w-1/4 flex-shrink-0">
            <img class="w-full h-60 object-cover rounded-lg" src="{{ asset('storage/'.$car->photo) }}" alt="{{ $car->brand }} {{ $car->model }}">
        </div>
        <div class="flex flex-col justify-between flex-grow">
            <div>
                <h2 class="font-bold text-xl">{{ $car->model }}</h2>
                <p class="text-base leading-tight">{{ $car->brand }}</p>
            </div>
            <div>
                <p class="font-semibold text-lg">${{ number_format($car->price) }}</p>
            </div>
            <div class="absolute bottom-2 right-2 text-xs text-gray-400">
                {{ $car->created_at->diffForHumans() }}
            </div>
        </div>
    </a>
@endforeach
