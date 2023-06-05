<x-app-layout> {{-- esto es el componente livewire que lo llama el archivo /resource/views/layouts/app.blade.php --}}
 {{-- Portada --}}
    <section style="background-position: center;background-size: cover;background-repeat:no-repeat ;max-width: 100%;background-image: url({{asset('img/home/image5.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px6 lg:px-8 py-36 object-cover">
            <div class="w-full md:w3/4 lg:w-1/2">

                <h1 class="text-white font-bold text-4xl">Domina la tecnologia con Jonvag </h1>
                <p class="text-white text-lg mt-2">En Jonvag encuenatras los cursos mas actualizados, a toda hora en todo lugar</p>
                <!-- component -->
                @livewire('search')

            </div>
        </div>

    </section>

    @livewire('course-index')

</x-app-layout>