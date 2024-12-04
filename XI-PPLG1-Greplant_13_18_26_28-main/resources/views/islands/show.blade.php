<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wpidth=device-width, initial-scale=1.0">
    <title>{{ $island->name }} - Plants</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-full flex flex-col bg-gradient-to-br from-gray-50 to-green-50">
    <header class="bg-white/90 backdrop-blur-sm shadow-lg fixed w-full top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <img src="{{ asset('assets/image/greplant.png') }}" alt="greplant" class="h-14 w-auto">
                </div>
                <nav>
                    <ul class="flex space-x-10">
                        <li><a href="/" class="text-gray-700 hover:text-green-600 font-medium inline-block">Home</a></li>
                        <li><a href="#about" class="text-gray-700 hover:text-green-600 font-medium inline-block">About</a></li>
                        <li><a href="#contact" class="text-gray-700 hover:text-green-600 font-medium inline-block">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main class="flex-grow container mx-auto px-6 pt-28 pb-16">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h1 class="text-5xl font-bold text-gray-800 mb-6 bg-gradient-to-r from-green-600 to-green-800 bg-clip-text text-transparent">
                    Plants in {{ $island->name }}
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    {{ $island->description }}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach($plants as $plant)
                <div class="group bg-white rounded-xl shadow-md overflow-hidden">
                        @if($plant->image)
                            <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                                <img
                                    src="{{ asset('storage/' . $plant->image) }}"
                                    alt="{{ $plant->name }}"
                                    class="w-full h-64 object-cover">
                            </div>
                        @endif
                        <div class="p-8">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-3">
                                {{ $plant->name }}
                            </h3>
                            <p class="text-sm italic text-gray-600 mb-4 font-medium">
                                {{ $plant->scientific_name }}
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                {{ $plant->description }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>
</html>