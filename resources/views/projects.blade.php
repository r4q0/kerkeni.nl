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
    <div class="flex justify-center items-center">
    <div class="grid grid-cols-1 w-[50vw] ">
            @foreach ($projects as $project)
                <div class="bg-[#061434] border-2 border-white h-[20vh] m-5 p-4 rounded-lg">
                    <h1 class="text-white
                        text-2xl">{{ $project['name'] }}</h1>
                    </div>
            @endforeach
            
    </div>

</body>

</html>
