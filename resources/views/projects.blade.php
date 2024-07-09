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
    <a href="{{ route('home') }}">
        <svg class="flex h-12 m-2" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
            <path
                d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
        </svg>
    </a>
    </div>
    <div class="flex justify-center items-center">
        <div class="grid grid-cols-1 w-[50vw] ">
            <div class=" grid grid-cols-[20%_80%] bg-[#061434] border-2 border-white h-52 m-5 p-4 rounded-2xl">
                <svg class="mx-auto my-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="white"
                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                </svg>
                <h2 class="text-center text-white font-bold text-2xl my-auto font-mono">These projects and the
                    information provided with them are scraped from my GitHub with an application I made.</h2>
            </div>
            @foreach ($projects as $project)
                <div
                    class="bg-[#061434] border-2 border-white text-white h-52 m-5 p-4 rounded-lg grid grid-rows-[23%_77%]">
                    <div class="grid grid-cols-[60%_40%]">
                        <h2 class=" my-auto font-bold font-mono truncate text-center text-2xl">{{ $project['name'] }}</h2>
                        <a class="font-bold font-mono text-center text-2xl my-auto " href="">Repository</a>
                    </div>
                    <div class="grid grid-cols-[60%_40%]">
                        <p class=" my-auto font-mono line-clamp-5 overflow-hidden m-2    text-center text-lg">{{ $project['description'] }}</p>
                        <div class="grid grid-rows-2 text-center m-5"><p class="font-bold text-xl my-auto">Created: 8 Months ago</p> <p class="font-bold text-xl my-auto">Created: 8 Months ago</p></div>
                    </div>
                </div>
            @endforeach

        </div>
</body>

</html>
