<nav class="w-full h-[12vh] bg-white flex items-center fixed top-0 left-0 z-50 shadow-sm px-9">
    <p class="text-4xl mr-auto font-bold text-blue-500">Hacks BIO</p>
    
    <ul class="list-none flex gap-[10vw] mr-[10vw]">
        <li><a href="/kontak" class="{{ request()->is('kontak') ? 'font-bold font-sans' : 'font-medium font-sans text-base underline'}} text-1xl no-underline   text-blue-500">Kontak</a></li>
        <li><a href="/homepage" class="{{ request()->is('homepage') ? 'font-bold font-sans ' : 'font-medium font-sans text-base underline'}}  text-1xl no-underline   text-blue-500">Homepage</a></li>
        <li><a href="/hack" class="{{ request()->is('hack') ? 'font-bold font-sans ' : 'font-medium font-sans text-base underline'}}  text-1xl no-underline text-base  text-blue-500">Hack</a></li>
    </ul>
    
    <div class="flex items-center">
        <form class="relative flex items-center">
            <input class="outline-none h-10 pl-4 pr-12 rounded border text-sm border-greys bg-transparent transition duration-150 ease-in-out text-placenav" type="text" placeholder="Cari  biodata tersembunyi">
        </form>
        <a class=" tracking-wide ml-4 text-blue-500 text-base"><a href="{{ url('/') }}">Log Out</a></a>
    </div>
</nav>