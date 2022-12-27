<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Komjensud</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .body-bg {
            background-color: #028527;
            background-image: linear-gradient(315deg, #028527 0%, #00d157 74%);
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body class="body-bg min-h-screen pt-1 md:pt-10 pb-5 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
    <header class="max-w-lg mx-auto r">

        <img src="{{ asset('komjensud.png') }}" alt="" class=" mx-auto lg:w-72 md:w-56 w-32 ">

    </header>

    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl">Admin Login</h3>
            <p class="text-gray-600 pt-2">Sign in to your account.</p>
        </section>

        <section class="mt-10">
            <form class="flex flex-col" method="POST" action="#">
                @csrf
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email">Email</label>
                    <input type="text" id="email" name="email"
                        class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 transition duration-500 px-3 pb-3 form-control">
                </div>
                @error('email')
                    <small style="color:red">{{ $message }}</small>
                @enderror

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Password</label>
                    <input type="password" id="password" name="password"
                        class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 transition duration-500 px-3 pb-3 form-control">
                </div>
                @error('password')
                    <small style="color:red">{{ $message }}</small>
                @enderror

                <button
                    class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200"
                    type="submit">Sign In</button>
            </form>
        </section>
    </main>



    <footer class="max-w-lg mx-auto flex justify-center text-white">
        <div class="max-w-lg mx-auto text-center mt-6 mb-5">
            <p class="text-white font-bold hover:underline">&copy; HMI Jenderal Sudirman UPN
            </p>
        </div>
    </footer>
</body>

</html>
