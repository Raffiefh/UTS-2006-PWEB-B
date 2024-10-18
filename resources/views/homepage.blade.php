@extends('component.template')
@section('Judul','Homepage')
{{-- @section('content')
    <p>Hello World</p>
@endsection --}}
@include('component.navigasi')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body style="background-image: url('img/CODE2.jpg');">
    <main class="relative w-full h-screen">
        <div class="absolute z-20 inset-0 flex flex-col items-center justify-center text-white">
            <h2 class="text-primary font-inter text-[3.2vw] tracking-wider font-medium mb-[5vh]">WELCOME TO HACKS BIO!</h2>
            <button class="font-sans w-[18rem] h-[5rem] text-[1.7rem] bg-yellowbut font-bold rounded-1 cursor-pointer bg-white text-blue-600 rounded-xl mb-[4vh]">DAFTAR</button>
            <h2 class="text-primary font-sans text-[1.6vw] tracking-wider font-medium">Amankan akun kamu dengan cara bergabung lebih ke Premium</h2>
            <h2 class="text-primary font-sans text-[1.6vw] tracking-wider font-medium mb-[5vh]">Nikmati berbagai Akses hackingmu dengan lebih menarik !!</h2>
        </div>
    </main>
</body>
</html>
@include('component.footer')