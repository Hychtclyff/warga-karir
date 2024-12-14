<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>

<body class="bg-[url('/public/img/bg-login.jpg')] bg-cover">
    <section class="flex justify-center items-center h-lvh mx-auto p-32 px-80">

        <div class="flex  flex-col gap-5 bg-gray-300/80 rounded-xl  p-20 w-full h-full ">
            <h1 class="text-7xl font-bold ">Login Admin</h1>
            <div class="flex justify-around w-full h-full items-center">

                <svg width="250" height="211" viewBox="0 0 250 211" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M118.091 209.604H99.865C53.26 209.604 29.964 209.604 15.482 197.166C1 184.729 1 164.708 1 124.677C1 84.6463 1 64.6254 15.482 52.1877C29.964 39.75 53.26 39.75 99.865 39.75H149.304C195.909 39.75 219.218 39.75 233.7 52.1877C244.841 61.7543 247.402 75.8139 248 100.021V116.458"
                        stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M210 176.729H171M171 209.604C160.657 209.604 150.737 206.141 143.423 199.975C136.109 193.81 132 185.448 132 176.729C132 168.01 136.109 159.648 143.423 153.483C150.737 147.318 160.657 143.854 171 143.854M210 209.604C220.343 209.604 230.263 206.141 237.577 199.975C244.891 193.81 249 185.448 249 176.729C249 168.01 244.891 159.648 237.577 153.483C230.263 147.318 220.343 143.854 210 143.854M171 39.75L169.7 36.3529C163.265 19.4771 160.054 11.0392 152.397 6.21751C144.727 1.39584 134.561 1.39584 114.203 1.39584H110.784C90.439 1.39584 80.26 1.39584 72.603 6.21751C64.933 11.0392 61.722 19.4771 55.287 36.3529L54 39.75"
                        stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="w-1/2 ">

                    <form class="space-y-6" action="{{ route('login.store') }}" method="POST">
                        @csrf
                        @error('email')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                        <div>
                            <label for="email" class="block text-sm/6 font-medium text-gray-900">Email
                                address</label>
                            <div class="mt-2">
                                <input type="email" name="email" id="email" autocomplete="email" required
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center justify-between">
                                <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>

                            </div>
                            <div class="mt-2">
                                <input type="password" name="password" id="password" autocomplete="current-password"
                                    required
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>

                        <div>
                            <button type="submit"
                                class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                                in</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
</body>

</html>
