<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontak</title>
    @vite('resources/css/app.css')
</head>
<body style="background-image: url('img/CODE.jpg');">
    <div class="flex justify-center items-center h-screen">
        <div class="bg-white p-[9vh]  rounded-lg shadow-md w-[32vw]">
            <h1 class="text-[2.5vw] font-bold text-center mb-5">LOGIN</h1>
            <div class="flex justify-around items-center space-x-8 mx-24">
                <p class="text-[1.5vw] underline" ><a href="link-disabled">Login</a></p>
                <p class="text-[1.5vw]"><a href="{{ url('/register') }}">Register</a></p>
            </div>
            <form class="mt-4">
            <div class="mb-4">
                <label for="nama" class="block text-gray-700 font-bold mb-2">Nama:</label>
                <input type="text" id="nama" name="nama" class="border rounded-md px-4 py-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                <input type="email" id="email" name="email" class="border rounded-md px-4 py-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">Password:</label>
                <input type="password" id="password" name="password" class="border rounded-md px-4 py-2 mb-4 w-full" required>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-md"><a href="{{ url('/kontak') }}">Login<a></button>
            </div>
            </form>
        </div>
    </div>
</body>
</html>