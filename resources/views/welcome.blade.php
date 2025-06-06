<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta name="description"
        content="Hi! I'm Bilal Kerkeni, and this is my portfolio website where you can explore my projects, endeavors, and find my contact details. Discover more about my work and skills!">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <title>Bilal | Home</title>

<body class="bg-[060522]">

    <div id="waves"
        class="h-fit md:h-[73vh] mx-1 md:m-5 md:mt-10 bg-[#061434] shadow-lg shadow-darkBlue-900/20 md:mx-32 rounded-3xl grid grid-cols md:grid-rows-[90%_10%]">
        <div class="grid grid-rows md:grid-cols-[40%_60%] p-2 md:p-10">
            <div>
                <div class="flex justify-center">
                    <img class="md:mx-auto rounded-[120px] h-[400px] w-[400px] object-scale-down" src="images/me.jpg"
                        alt="">
                </div>
                <p class="text-center text-white font-bold font-mono text-xl md:text-3xl sm:m-2">📍Amsterdam</p>
                <p class="text-center text-white font-mono font-bold text-xl md:text-3xl md:m-2">I'm <strong
                        class="text-[#13B9B9]">{{ $age }}</strong> years old</p>
            </div>
            <div class="grid grid-rows-[20%_80%]">
                <pre class='text-center text-white font-black text-[1.8vw] md:text-[1.5vw]'
                    style="line-height: 1; dominant-baseline: hanging; white-space: pre;" font-weight="bold" fill="rgb(198, 198, 198)"
                    fill-opacity="1">
 ____  _ _       _   _  __         _              _ 
| __ )(_) | __ _| | | |/ /___ _ __| | _ ___ _ __ (_)
|  _ \| | |/ _` | | | ' // _ \ '__| |/ / _ \ '_ \| |
| |_) | | | (_| | | | . \  __/ |  |   <  __/ | | | |
|____/|_|_|\__,_|_| |_|\_\___|_|  |_|\_\___|_| |_|_|
</pre>
                <div
                    class="mx-auto text-center max-w-[75%] text-[2.4vw] md:text-[1.7vw] text-white font-bold mt-4 font-mono grid place-items-center">
                    <p class="">Hi, I’m Bilal. I’m from Amsterdam. I’m into AI, especially the infrastructure
                        behind it, and I love building cool, impactful projects. If you have an interesting idea you
                        think I could help with, feel free to reach out!
                    </p>

                </div>
            </div>
        </div>
        <div class="text-white font-bold text-center grid grid-rows gap-1 md:grid-cols-[20%_20%_60%] font-mono ">
            <a href="https://github.com/r4q0" class="text-center items-center flex mx-auto text-lg md:text-2xl">
                <svg class="h-6 w-6 md:h-10 md:w-10 " viewBox="0 0 98 96"xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M48.854 0C21.839 0 0 22 0 49.217c0 21.756 13.993 40.172 33.405 46.69 2.427.49 3.316-1.059 3.316-2.362 0-1.141-.08-5.052-.08-9.127-13.59 2.934-16.42-5.867-16.42-5.867-2.184-5.704-5.42-7.17-5.42-7.17-4.448-3.015.324-3.015.324-3.015 4.934.326 7.523 5.052 7.523 5.052 4.367 7.496 11.404 5.378 14.235 4.074.404-3.178 1.699-5.378 3.074-6.6-10.839-1.141-22.243-5.378-22.243-24.283 0-5.378 1.94-9.778 5.014-13.2-.485-1.222-2.184-6.275.486-13.038 0 0 4.125-1.304 13.426 5.052a46.97 46.97 0 0 1 12.214-1.63c4.125 0 8.33.571 12.213 1.63 9.302-6.356 13.427-5.052 13.427-5.052 2.67 6.763.97 11.816.485 13.038 3.155 3.422 5.015 7.822 5.015 13.2 0 18.905-11.404 23.06-22.324 24.283 1.78 1.548 3.316 4.481 3.316 9.126 0 6.6-.08 11.897-.08 13.526 0 1.304.89 2.853 3.316 2.364 19.412-6.52 33.405-24.935 33.405-46.691C97.707 22 75.788 0 48.854 0z"
                        fill="white" />
                </svg>
                <p class="p-1">Github</p>
            </a>

            <a class="text-center items-center flex mx-auto text-lg md:text-2xl"
                href="https://www.linkedin.com/in/bilal-user/">
                <svg class="inline-block h-6 w-6 md:h-9 md:w-9" viewBox="0 0 16 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" color="#0077B5"
                        d="M1.26125 0C0.564678 0 0 0.564678 0 1.26125V13.8737C0 14.5703 0.564678 15.135 1.26125 15.135H13.8738C14.5703 15.135 15.135 14.5703 15.135 13.8737V1.26125C15.135 0.564678 14.5703 0 13.8738 0H1.26125ZM4.64204 3.36562C4.64677 4.16967 4.04492 4.6651 3.33073 4.66155C2.65793 4.65801 2.07145 4.12237 2.075 3.36681C2.07855 2.65617 2.6402 2.08506 3.36976 2.10161C4.10995 2.11817 4.64677 2.6609 4.64204 3.36562ZM7.80268 5.68551H5.68379H5.6826V12.8829H7.92208V12.715C7.92208 12.3956 7.92183 12.076 7.92158 11.7564C7.9209 10.904 7.92015 10.0506 7.92452 9.19846C7.9257 8.99154 7.93511 8.77637 7.98834 8.57885C8.18812 7.84102 8.85154 7.36452 9.59172 7.48165C10.067 7.55606 10.3815 7.83161 10.5139 8.27977C10.5956 8.55994 10.6323 8.86146 10.6358 9.15356C10.6454 10.0344 10.644 10.9153 10.6427 11.7962C10.6422 12.1072 10.6417 12.4183 10.6417 12.7292V12.8817H12.8883V12.7091C12.8883 12.3291 12.8881 11.9491 12.8879 11.5691C12.8875 10.6194 12.8869 9.66967 12.8895 8.71961C12.8906 8.29036 12.8446 7.86709 12.7393 7.45205C12.5821 6.8348 12.2569 6.32399 11.7284 5.95512C11.3535 5.6926 10.942 5.52352 10.4821 5.5046C10.4297 5.50242 10.3769 5.49957 10.3238 5.4967C10.0887 5.48399 9.84961 5.47108 9.62477 5.51642C8.98153 5.6453 8.41641 5.93973 7.98951 6.45878C7.93991 6.51831 7.89139 6.57876 7.81899 6.66899L7.80268 6.68942V5.68551ZM2.25481 12.8853H4.48368V5.6902H2.25481V12.8853Z"
                        fill="currentColor"></path>
                </svg>
                <p class="p-1">Linkedin</p>
            </a>
            <div class="text-[#63B3ED] text-center items-center flex mx-auto text-lg md:text-2xl underline">
                <a href="mailto:bilal@kerkeni.com">bilal@kerkeni.nl</a>
            </div>
        </div>
    </div>

    <div class="mx-1 md:mx-32 grid grid-cols-[35%_65%] ">
        <div class="m-5 md:m-10 grid grid-rows md:grid-cols-[60%_40%]">
            <div class="text-left font-bold text-md md:text-xl font-mono">
                <h2 class="text-white font-bold text-xl md:text-2xl mb-5">Skills</h2>
                <p class="text-white">CSS</p>
                <p class="text-white">Docker</p>
                <p class="text-white">Embedded Systems</p>
                <p class="text-white">Html</p>
                <p class="text-white">Javascript</p>
                <p class="text-white">Laravel</p>
                <p class="text-white">MYSQL</p>
                <p class="text-white">PHP</p>
                <p class="text-white">Python</p>
                <p class="text-white">Stable Diffusion</p>
                <p class="text-white">Tailwind</p>
            </div>
            <div class="text-center text-white font-bold font-mono text-md md:text-xl">
                <h2 class="text-xl md:text-2xl mb-5">Languages</h2>
                <p>Dutch 🇳🇱</p>
                <p>English 🇬🇧</p>
                <p>Arabic 🇹🇳</p>
                <p>Spanish 🇪🇸</p>
            </div>
        </div>
        <div>
            <h2 class="m-5 md:mt-10 text-center font-mono text-white font-bold text-xl md:text-4xl">Experience</h2>
            <div class="grid grid-cols md:grid-rows-[70%_30%]">
                <div class="grid grid-cols md:grid-rows-2 md:mx-32">
                    <div class="grid grid-rows md:grid-cols-2">
                        <div class="text-white text-center font-bold font-mono">
                            <h2 class="text-3xl mt-8 mb-2">Accuselect</h2>
                            <p class="text-lg max-w-50 mx-auto">Software Engineer</p>
                            <p class="text-center text-lg mx-auto">Mar 2024 - Mar 2025</p>
                            <p>1 Year</p>
                        </div>
                        <div class="text-white text-center font-bold font-mono">
                            <h2 class="text-3xl mt-8 mb-2">T-Portal</h2>
                            <p class="text-lg max-w-50 mx-auto">Software Engineer</p>
                            <p class="text-center text-lg mx-auto">Dec 2022 - Feb 2024</p>
                            <p>2 Years</p>
                        </div>
                    </div>
                    <div class="grid grid-rows md:grid-cols-2">
                        <div class="text-white text-center font-bold font-mono">
                            <h2 class="text-3xl mt-8 mb-2">Triple</h2>
                            <p class="text-lg max-w-50 mx-auto">Young Professional</p>
                            <p class="text-center text-lg mx-auto">May 2022 - Nov 2022</p>
                            <p>7 Months</p>
                        </div>
                        <div class="text-white text-center font-bold font-mono">
                            <h2 class="text-3xl mt-8 mb-2">T-Portal</h2>
                            <p class="text-lg max-w-50 mx-auto">Intern</p>
                            <p class="text-center text-lg mx-auto">Feb 2022 - Jul 2022</p>
                            <p>6 Months</p>
                        </div>
                    </div>
                    <div class="grid w-full my-4 justify-center">
                        <a href="{{ route('projects') }}" class="hover:cursor-pointer">
                            <button
                                class="mx-auto w-[30vw] md:w-[15vw] rounded-xl font-mono text-[4vw] md:text-[1.5vw] bg-white border-b-[#0E0940] border-l-[#0E0940] border-b-4 border-l-4 text-black px-6 py-3 font-bold transition-all duration-300 translate-x-[-4px] translate-y-[8px] shadow-[4px_-4px_0px_#0E0940] hover:translate-x-[0px] hover:translate-y-[0px] hover:shadow-none hover:border-4 border-4 border-[#0E0940] hover:cursor-pointer">
                                Projects
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
