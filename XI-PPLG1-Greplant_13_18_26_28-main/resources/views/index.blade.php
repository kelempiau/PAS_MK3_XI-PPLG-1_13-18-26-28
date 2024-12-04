<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greplant</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-gray-50 to-green-50">
    <header class="bg-white/90 backdrop-blur-sm shadow-lg fixed w-full top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <img src="{{ asset('assets/image/greplant.png') }}" alt="greplant" class="h-14 w-auto">
                </div>
                <nav>
                    <ul class="flex space-x-10">
                        <li><a href="#home" class="text-gray-700 hover:text-green-600 font-medium inline-block">Home</a></li>
                        <li><a href="#about" class="text-gray-700 hover:text-green-600 font-medium inline-block">About</a></li>
                        <li><a href="#contact" class="text-gray-700 hover:text-green-600 font-medium inline-block">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <section id="home" class="pt-32 pb-20 px-6">
            <div class="container mx-auto text-center max-w-4xl">
                <h1 class="text-5xl font-bold mb-6 bg-gradient-to-r from-green-600 to-green-800 bg-clip-text text-transparent">
                    Welcome to GrePlant
                </h1>
                <p class="text-xl text-gray-600 mb-12">
                    Discover the beauty of Indonesia rich plant diversity with us.
                </p>

                <div class="bg-green-100 rounded-lg p-4 mb-16">
                    <p class="text-green-800 font-medium animate-pulse">
                        🌱 Explore the incredible variety of plants in Indonesia 🌿
                    </p>
                </div>

                <h2 class="text-3xl font-bold text-gray-800 mb-8">Explore by Region</h2>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                    @foreach($islands as $island)
                        <a href="{{ route('island.show', $island->id) }}"
                            class="block bg-white rounded-lg shadow-md p-4 text-gray-700 hover:text-green-600 font-medium">
                             {{ $island->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="about" class="py-20 bg-white">
            <div class="container mx-auto px-6 max-w-4xl">
                <h2 class="text-4xl font-bold text-center mb-12 bg-gradient-to-r from-green-600 to-green-800 bg-clip-text text-transparent">
                    About GrePlant
                </h2>

                <div class="prose prose-lg mx-auto">
                    <p class="text-gray-600 leading-relaxed mb-8">
                        GrePlant adalah platform web yang didedikasikan untuk pelestarian dan edukasi tentang kekayaan dan keragaman kehidupan tumbuhan di Indonesia. Dari pohon-pohon raksasa di hutan hujan Kalimantan hingga flora yang berwarna-warni di Sumatra, kami berkomitmen untuk mendekatkan Anda dengan keindahan alam kepulauan ini.
                    </p>

                    <div class="grid md:grid-cols-2 gap-8 my-12">
                        <div class="bg-green-50 p-6 rounded-lg">
                            <h3 class="text-2xl font-bold text-green-800 mb-4">Visi</h3>
                            <p class="text-gray-700">
                                Kami membayangkan dunia di mana setiap individu menyadari nilai keanekaragaman hayati dan berkontribusi dalam pelestarian warisan alam kita.
                            </p>
                        </div>
                        <div class="bg-green-50 p-6 rounded-lg">
                            <h3 class="text-2xl font-bold text-green-800 mb-4">Misi</h3>
                            <p class="text-gray-700">
                                Mendidik, menginspirasi, dan memberdayakan masyarakat agar menghargai dan melestarikan spesies tumbuhan unik yang ada di Indonesia.
                            </p>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Apa yang Kami Lakukan</h3>
                    <ol class="space-y-4 text-gray-700 list-decimal list-inside">
                        <li>
                            <strong>Basis Data Tumbuhan yang Komprehensif:</strong> Katalog yang luas tentang spesies tumbuhan di Indonesia.
                        </li>
                        <li>
                            <strong>Profil Tumbuhan Berdasarkan Wilayah:</strong> Kategorisasi berdasarkan wilayah untuk kemudahan pencarian.
                        </li>
                        <li>
                            <strong>Konten Edukatif:</strong> Artikel, panduan, dan tutorial tentang perawatan tumbuhan.
                        </li>
                    </ol>
                </div>
            </div>
        </section>

        <section id="contact" class="py-20 bg-gray-50">
            <div class="container mx-auto px-6 max-w-xl">
                <h2 class="text-4xl font-bold text-center mb-12 bg-gradient-to-r from-green-600 to-green-800 bg-clip-text text-transparent">
                    Contact Us
                </h2>

                <form action="https://formsubmit.co/gianandraathallahkent@gmail.com" method="POST"
                      class="bg-white rounded-lg shadow-md p-8">
                    <div class="mb-6">
                        <input type="text" name="name" placeholder="Your Name" required
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-transparent outline-none transition-all">
                    </div>
                    <div class="mb-6">
                        <input type="email" name="email" placeholder="Your Email" required
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-transparent outline-none transition-all">
                    </div>
                    <div class="mb-6">
                        <textarea name="message" rows="5" placeholder="Your Message" required
                                  class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-transparent outline-none transition-all"></textarea>
                    </div>
                    <button type="submit"
                            class="w-full bg-gradient-to-r from-green-600 to-green-700 text-white font-medium py-3 rounded-lg hover:from-green-700 hover:to-green-800 transition-all duration-300">
                        Send Message
                    </button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>