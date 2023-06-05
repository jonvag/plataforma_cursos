<x-app-layout> {{-- esto es el componente livewire que lo llama el archivo /resource/views/layouts/app.blade.php --}}
   {{-- Portada --}}


    <section style="background-position: center;background-size: cover;background-repeat:no-repeat ;max-width: 100%; background-image: url({{asset('img/home/image1.jpg')}})" class="object-cover">
        <div class="max-w-7xl mx-auto px-4 sm:px6 lg:px-8 py-36 object-cover">
            <div class="w-full md:w3/4 lg:w-1/2">

                <h1 class="text-white font-bold text-4xl">Domina la tecnologia con Jonvag </h1>
                <p class="text-white text-lg mt-2">En Jonvag encuenatras los cursos mas actualizados, a toda hora en todo lugar</p>
                <!-- component -->
                @livewire('search')
            </div>
        </div>

    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6 ">CONTENIDO</h1>
        <div class="max-w-7xl mx-auto px-4 sm:px6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-x-6  gap-y-10">
            <article>
                <figure>
                    <img class='rounded-xl h-36 w-full object-cover' src="{{asset('img/home/image2.jpg')}}" alt="">
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700"> Cursos y proyecytos</h1>
                        <p class="text-sm text-gray-500"> asdddddddddddddddddddddddddd assssssssssssssssssssss asdddddddddddddddddddd dddddddd
                            
                        </p> 
                    </header>
                </figure>
            </article>
            <article>
                <figure>
                    <img class='rounded-xl h-36 w-full object-cover' src="{{asset('img/home/image3.jpg')}}" alt="">
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700"> Manuak</h1>
                        <p class="text-sm text-gray-500"> asdddddddddddddddddddddddddd assssssssssssssssssssss asdddddddddddddddddddd dddddddd
                            
                        </p> 
                    </header>
                </figure>
            </article>
            <article>
                <figure>
                    <img class='rounded-xl h-36 w-full object-cover' src="{{asset('img/home/image4.jpg')}}" alt="">
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700"> Blog</h1>
                        <p class="text-sm text-gray-500"> asdddddddddddddddddddddddddd assssssssssssssssssssss asdddddddddddddddddddd dddddddd
                            
                        </p> 
                    </header>
                </figure>
            </article>
            <article>
                <figure>
                    <img class='rounded-xl h-36 w-full object-cover' src="{{asset('img/home/image5.jpg')}}" alt="">
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700"> Desarrollo personal</h1>
                        <p class="text-sm text-gray-500"> asdddddddddddddddddddddddddd assssssssssssssssssssss asdddddddddddddddddddd dddddddd
                            
                        </p> 
                    </header>
                </figure>
            </article>


        </div>
    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">No sabes que curso llevar?</h1>
        <p class="text-center text-white">asdasd asd asa das as </p>
        <div class="flex justify-center">
            <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Catálogo de cursos
            </a>
        </div>
    </section>

    <section class="my-24 ">
        <h1 class="text-center text-gray-600 text-3xl">Últimos Cursos</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Cada semana nuevos cursos </p>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-4 gap-x-6 gap-y-10">
            @foreach ($courses as $course)
                
            <x-course-card :course="$course"/> {{-- este componente esta en views/components/course-card.blade.php --}}
            @endforeach
        </div>
    </section>

</x-app-layout>
