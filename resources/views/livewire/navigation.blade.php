<nav class="bg-broccoli-500" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <!-- Mobile menu button-->
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <button x-on:click="open = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-broccoli-700 hover:bg-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>

            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>

            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        
        <!-- Logotipo -->
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">        
          <a href="/" class="flex-shrink-0 flex items-center">
            <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
            <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow">
          </a>          
        </div>
        
        <!-- Enlaces --> 
        <div class="hidden sm:block sm:ml-6">
          <div class="flex space-x-4">            
            <a href="#" class="bg-white text-broccoli-600 px-3 py-2 rounded-full text-sm font-medium" aria-current="page">Home</a>

            <a href="#" class="text-white hover:bg-white/50 hover:text-broccoli-700 px-3 py-2 rounded-full text-sm font-medium">Nuestros amigos</a>

            <a href="#" class="text-white hover:bg-white/50 hover:text-broccoli-700 px-3 py-2 rounded-full text-sm font-medium">¿Nos ayudas?</a>

            <a href="#" class="text-white hover:bg-white/50 hover:text-broccoli-700 px-3 py-2 rounded-full text-sm font-medium">Nosotras</a>
            
            @auth
              <!-- Profile dropdown -->
                <div class="ml-3 relative" x-data="{ open: false }"> 
                    <div>
                        <button  x-on:click="open = true" type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
                        </button>
                    </div>
    
                    <div x-show="open" x-on:click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <a href="{{route('profile.show')}}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Mi perfil</a>
                        
                        <a href="" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Dashboard</a>   
                  
                        <form method="POST" action="{{ route('logout') }}">
                        @csrf
                            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2" onclick="event.preventDefault();
                                                    this.closest('form').submit();">Cerrar sesión</a>
                        </form>
                    </div>
                </div>
            </div>
            @endauth
          
          </div>
        
        </div>
        
      </div>
    </div>
  
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu" x-show="open" x-on:click.away="open = false">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <a href="#" class="bg-white text-broccoli-600 block px-3 py-2 rounded-full text-base font-medium" aria-current="page">Home</a>

        <a href="#" class="text-white hover:bg-white/50 hover:text-broccoli-700 block px-3 py-2 rounded-full text-base font-medium">Nuestros amigos</a>
        
        <a href="#" class="text-white hover:bg-white/50 hover:text-broccoli-700 block px-3 py-2 rounded-full text-base font-medium">¿Nos ayudas?</a>

        <a href="#" class="text-white hover:bg-white/50 hover:text-broccoli-700 block px-3 py-2 rounded-full text-base font-medium">Nosotras</a>

      </div>
    </div>
  </nav>  