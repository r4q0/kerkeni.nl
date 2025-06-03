<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <title>Bilal | Home</title>
</head>

<body class="bg-[#060522]">
    <a class="flex w-14 md:w-20 ml-2 mt-2" href="{{ route('home') }}">
        <svg class="flex h-20 w-20" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
            <path
                d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
        </svg>
    </a>
    <div class="flex justify-center items-center">
        <div class="grid grid-cols-1 w-[100vw] md:w-[60vw] ">
            <div
                class="grid grid-rows md:grid-cols-[15%_85%] bg-[#061434] border-2 border-white md:h-52 m-5 p-4 rounded-2xl">
                <svg class="mx-auto my-auto w-[9vw]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="white"
                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                </svg>
                <div class="grid grid-rows-[90%_10%]">
                    <h2 class="text-center text-white p-5 pb-0 font-bold text-[3vw] md:text-2xl my-auto font-mono">These
                        projects and the
                        information provided with them are scraped from my GitHub with an application I made.</h2>
                    <p class="text-[#FF0000] text-center">Private projects are not included</p>
                </div>
            </div>
            @foreach ($projects as $project)
                <div
                    class="bg-[#061434] border-2 border-white text-white md:h-52 m-5 p-4 rounded-lg grid grid-rows-[23%_77%]">
                    <div class="grid grid-rows md:grid-cols-[60%_40%]">
                        <h2 class="my-auto font-bold font-mono truncate text-center text-2xl">{{ $project['name'] }}
                        </h2>
                        <a class="mx-auto inline-flex items-center font-bold font-mono text-center text-2xl my-auto "
                            href="{{ $project['url'] }}">
                            <svg class="mt-5 md:mt-0 h-9 w-9 flex p-1 m-0 "
                                viewBox="0 0 98 96"xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M48.854 0C21.839 0 0 22 0 49.217c0 21.756 13.993 40.172 33.405 46.69 2.427.49 3.316-1.059 3.316-2.362 0-1.141-.08-5.052-.08-9.127-13.59 2.934-16.42-5.867-16.42-5.867-2.184-5.704-5.42-7.17-5.42-7.17-4.448-3.015.324-3.015.324-3.015 4.934.326 7.523 5.052 7.523 5.052 4.367 7.496 11.404 5.378 14.235 4.074.404-3.178 1.699-5.378 3.074-6.6-10.839-1.141-22.243-5.378-22.243-24.283 0-5.378 1.94-9.778 5.014-13.2-.485-1.222-2.184-6.275.486-13.038 0 0 4.125-1.304 13.426 5.052a46.97 46.97 0 0 1 12.214-1.63c4.125 0 8.33.571 12.213 1.63 9.302-6.356 13.427-5.052 13.427-5.052 2.67 6.763.97 11.816.485 13.038 3.155 3.422 5.015 7.822 5.015 13.2 0 18.905-11.404 23.06-22.324 24.283 1.78 1.548 3.316 4.481 3.316 9.126 0 6.6-.08 11.897-.08 13.526 0 1.304.89 2.853 3.316 2.364 19.412-6.52 33.405-24.935 33.405-46.691C97.707 22 75.788 0 48.854 0z"
                                    fill="white" />
                            </svg>
                            <p class="mt-5 md:mt-0 md:m-0 p-0">Repository</p>
                        </a>
                    </div>
                    <div class="grid grid-rows md:grid-cols-[60%_40%]">
                        <p class="my-auto mb-5 md:mb2 font-mono line-clamp-5 overflow-hidden m-2 text-center text-lg">
                            {{ $project['description'] }}</p>
                        <div class="font-mono grid grid-rows-2 text-center m-5">
                            <p class="font-bold text-xl my-auto">Last Commit: {{ $project['updated'] }}</p>
                            <p class="font-bold text-xl my-auto">Created: {{ $project['created'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
</body>

</html>
