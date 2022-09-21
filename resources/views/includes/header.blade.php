 <header>
     <div class="container">
         <nav class="menu-header">
             <figure class="menu-header">

                 <img src="{{ asset('images/dc-logo.png') }}" alt="logo">

             </figure>
             <!-- LOGICA DINAMICA LISTE -->
             <ul class="menu-header">

                 <li>
                     <a class="menu-heade @if (Route::is('home')) active @endif"
                         href="{{ url('/') }}">Home</a>
                     {{-- <a class="menu-header" href="{{ route('home') }}"></a> --}}
                 </li>
                 <li>

                     <a class="menu-heade @if (Route::is('home')) active @endif"
                         href="{{ url('/comics') }}">Comics</a>
                 </li>
                 <li><a href="">MOVIES</a> </li>
                 <li><a href="">TV</a> </li>
                 <li><a href="">GAMES</a> </li>
                 <li><a href="">COLLECTIBLES</a> </li>
                 <li><a href="">VIDEOS</a> </li>
                 <li><a href="">FANS</a> </li>
                 <li><a href="">NEWS</a> </li>
                 <li><a href="">SHOP</a> </li>

             </ul>
         </nav>
     </div>
 </header>
