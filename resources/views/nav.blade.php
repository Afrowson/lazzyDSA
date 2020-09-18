<div class="flex justify-around items-center bg-green-200  h-10 sm:h-12 md:h-16 lg:h-16 m-0">
    <div >
        @auth
            <a href="/index"
                class="float-left bg-green-600 p-2 mx-2 text-xs sm:text-sm md:text-base  text-black rounded">Deine&nbsp;Helden</a>
        @endauth
        @guest
            <a class=" bg-green-600 py-2 px-3 mx-2 text-xs sm:text-sm md:text-base text-black rounded"
                href="{{ route('register') }}">Register</a>
        @endguest
    </div>

    <div class="absolute" >
        <a href="/" class="text-black text-sm sm:text-base md:text-xl lg:text-2xl italic uppercase">
            Das&nbsp;<b>schwarze</b>&nbsp;Auge
        </a>
    </div>

    <div class="float-right">
        @auth
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                {{ csrf_field() }}
                <button class="float-right bg-green-600 py-2 px-4 mx-2 text-xs sm:text-sm md:text-base text-black rounded"
                    type="submit" href="{{ route('logout') }}">Logout</button>
            </form>
        @endauth
        @guest
            <a class="float-right bg-green-600 py-2 px-4 mx-2 text-xs sm:text-sm md:text-base text-black rounded"
                href="{{ route('login') }}">Login</a>
        @endguest
    </div>
</div>
