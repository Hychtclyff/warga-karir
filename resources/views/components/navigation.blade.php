<nav>
    <div class="flex justify-center px-4 border-b  ">
        <div
            class="flex container mx-auto max-w-7xl px-4 sm:px-6 lg:px-0 h-16 items-center justify-between  w-full bg-white">
            <div class="flex items-center w-1/3">
                <div class="flex-shrink-0 text-gray-800  font-bold text-4xl">
                    <a href="/" :active="request() - > is('blog')">

                        Daftar Profesi RT15

                    </a>
                </div>

            </div>

            <div class="  ml-4 flex items-center md:ml-6 justify-start w-2/3 gap-2 ">
                <form method="GET" action="{{ route('search') }}">

                    <div class="search flex gap-3 text-white ">
                        <input type="text" name="search" id="price" placeholder="Search"
                            class="block group rounded-full w-[40rem]  d-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm/6">
                        <button type="submit" class="bg-gray-800 p-2 rounded-full  border border-gray-800 transition ">
                            search
                        </button>


                    </div>
                </form>
                @guest

                    <x-nav-link href="/login" :active="request()->is('/login')">
                        <span class="hover:text-black ">Login</span>
                    </x-nav-link>
                @endguest
                @auth

                    @auth
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="px-6 py-2 text-black bg-transparent rounded-full shadow-lg hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 transition ease-in-out duration-150">
                                Logout
                            </button>
                        </form>
                    @endauth

                @endauth


            </div>

        </div>
    </div>


</nav>
