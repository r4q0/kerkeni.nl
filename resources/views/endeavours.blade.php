<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="bg-[#060522]">
    <a class="flex w-20 ml-2 mt-2" href="{{ route('home') }}">
        <svg class="flex h-20 w-20" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
            <path
                d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
        </svg>
    </a>
    <div class="flex justify-center items-center">

        <div class="grid grid-cols-1 w-[70vw] h-[100vh] gap-20">
            <div class="bg-[#061434] rounded-[70px]">
                <h2 class="text-center font-bold font-mono text-8xl text-white pt-10">Kabo Arbitrage</h2>
                <p class="text-white text-xl font-mono max-w-[40vw] pt-10 text-center mx-auto">Kabo Arbitrage is a crypto arbitrage tool that I created during a summer vacation. I work on it from time to time, and it has continued to be moderately profitable. I definitely want to keep working on it.</p>
            </div>
            <div class="bg-[#061434] rounded-[70px]">
                <h2 class="text-center font-bold font-mono text-8xl text-white pt-10">Imagefy</h2>
                <p class="text-white text-xl font-mono max-w-[40vw] pt-10 text-center mx-auto">Imagefy was a Stable Diffusion wrapper I created. I also provided the compute and offered it as a
                    pay-as-you-go service. I made sure to simplify the application because Stable Diffusion is quite
                    complicated and hard to get into. I put an emphasis on user experience and received good feedback. I
                    quit the project due to interest in other endeavors.</p>
            </div>

        </div>
    </div>


</body>
