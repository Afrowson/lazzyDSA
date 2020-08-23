<div class="flex justify-between items-center bg-green-200  h-10 sm:h-12 md:h-16 lg:h-16 m-0">
    <div style="width: 214px">
        @auth
            <a href="/index" class="float-left bg-teal-800 p-2 mx-2 text-xs sm:text-sm md:text-base  text-black rounded">Deine&nbsp;Helden</a>
        @endauth
        @guest
            <a class=" bg-teal-800 p-2 mx-2 text-black rounded" href="{{ route('register') }}">Register</a>
        @endguest
    </div>

    <div style="width: 257px">
        <a href="/" class="text-black text-sm sm:text-base md:text-xl lg:text-2xl italic uppercase">Das&nbsp;<b>schwarze</b>&nbsp;Auge</a>
    </div>

    <div style="width: 214px" class="float-right">
        @auth
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                {{ csrf_field() }}
                <button class="float-right bg-teal-800 p-2 mx-2 text-xs sm:text-sm md:text-base text-black rounded" type="submit"
                    href="{{ route('logout') }}">Logout</button>
            </form>
        @endauth
        @guest
            <a class="float-right bg-teal-800 p-2 mx-2 text-xs sm:text-sm md:text-base text-black rounded" href="{{ route('login') }}">Login</a>
        @endguest
    </div>
</div>