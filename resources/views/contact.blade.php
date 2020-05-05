<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail Lesson</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" />
</head>

<body class="bg-gray-100 flex items-center justify-center h-full p-5">

    <form method="POST" action="/contact" class="bg-white p-6 rounded shadow-md" style="width: 300px">
        @csrf

        <div class="mb-5">
            <label for="email" class="block text-xs uppercase font-semibold mb-1">
                Email Address
            </label>

            <input type="text" id="email" class="border px-2 py-1 text-sm">

            @error('email')
            <div class="text-red-500 text-xs">{{ $message }}</div>
            @enderror

        </div>

        <button type="submit" class="bg-blue-500 text-white rounded-full text-sm w-full">Email me</button>

        @if (session('message'))
        <p class="text-green-500 text-xs mt-2">
            {{ session('message') }}
        </p>
        @endif

    </form>
</body>

</html>