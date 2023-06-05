<div>
    <div class="bg-gray-200 py-4 mb-16 h-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lq:px-8 flex absolute ">
            <button class="bg-white shadow h-12 px-4 rounded-lg text-gray-700 mr-4" wire:click= "resetFilters">
                <i class="fas fa-archway text-xs mr-2"></i> 
                Todos los cursos
            </button>
        
                <!-- desplegable  categorias -->
            <div class="dropdown-menu mr-4" x-data="{ open: false}">
                <div class="bg-white rounded-lg shadow flex items-center px-1 cursor-pointer" x-on:click="open = true">
                    <button class="block bg-white  h-12 px-4 rounded-lg text-gray-700 mr-4 focus:outline-none overflow-hidden" >
                        <i class="fas fa-tags text-xs mr-2"></i> 
                        Categorias
                    </button>
                    <i class="fas fa-angle-down mr-2"></i> 
                </div>
                    
                <div class="bg-white rounded-lg shadow-xl px-1 relative  mt-8" x-show="open" x-on:click.away="open = false">{{-- esto es con alpine --}}
                    <svg class="absolute bottom-full right-4" width="30" height="20" viewBox="0 0 30 20" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="15, 0 30, 20 0, 20" fill="#FFFFFF"/>
                    </svg>

                    @foreach ($categories as $category)
                    <div class="flex cursor-pointer items-center w-full   transition-colors duration-200 text-normal text-gray-900 rounded hover:bg-blue-500 px-4 py-2 ">
                        <a class=" flex-1 block " wire:click="$set('category_id', {{$category->id}})" x-on:click="open= false">
                            <div class="text-gray-400 text-base">{{$category->name}}</div>
                        </a>
                        <div>
                            <svg width="40" height="20" viewBox="0 0 40 20" xmlns="http://www.w3.org/2000/svg">
                                <line x1="30" y1="2" x2="40" y2="10" stroke="#9CA3AF" />
                                <line x1="30" y1="18" x2="40" y2="10" stroke="#9CA3AF" />
                                <line x1="20" y1="10" x2="40" y2="10" stroke="#9CA3AF" />
                            </svg>
                        </div>
                    </div>                        
                    @endforeach
                     
                </div>
                 
            </div>

                <!-- desplegable  categorias -->
            <div class="dropdown-menu mr-4" x-data="{ open: false}">
                <div class="bg-white rounded-lg shadow flex items-center px-1 cursor-pointer" x-on:click="open = true">
                    <button class="block bg-white  h-12 px-4 rounded-lg text-gray-700 mr-4 focus:outline-none overflow-hidden" >
                        <i class="fas fa-tags text-xs mr-2"></i> 
                        Niveles
                    </button>
                    <i class="fas fa-angle-down mr-2"></i> 
                </div>
                    
                <div class="bg-white rounded-lg shadow-xl px-1 relative  mt-8" x-show="open" x-on:click.away="open = false">{{-- esto es con alpine --}}
                    <svg class="absolute bottom-full right-4" width="30" height="20" viewBox="0 0 30 20" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="15, 0 30, 20 0, 20" fill="#FFFFFF"/>
                    </svg>

                    @foreach ($levels as $level)
                    <div class="flex cursor-pointer items-center w-full   transition-colors duration-200 text-normal text-gray-900 rounded hover:bg-blue-500 px-4 py-2 ">
                        <a  class=" flex-1 block " wire:click="$set('level_id', {{$level->id}})" x-on:click="open= false">
                            <div class="text-gray-400 text-base">{{$level->name}}</div>
                        </a>
                        <div>
                            <svg width="40" height="20" viewBox="0 0 40 20" xmlns="http://www.w3.org/2000/svg">
                                <line x1="30" y1="2" x2="40" y2="10" stroke="#9CA3AF" />
                                <line x1="30" y1="18" x2="40" y2="10" stroke="#9CA3AF" />
                                <line x1="20" y1="10" x2="40" y2="10" stroke="#9CA3AF" />
                            </svg>
                        </div>
                    </div>                        
                    @endforeach
                     
                </div>
            </div>
        </div>

    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-4 gap-x-6 gap-y-10 mt-16">
        @foreach ($courses as $course)
            
            <x-course-card :course="$course"/>{{-- este componente esta en views/components/course-card.blade.php --}}
        @endforeach
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 mb-8">
        {{$courses->links()}}
    </div>
</div>
 