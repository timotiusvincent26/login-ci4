<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="public/css/output.css">
    <link rel="stylesheet" href="public/css/all.css">

</head>

<body>
    <?php if (session()->getFlashdata('state')) {
        $state = true;
    } else {
        $state = false;
    } ?>
    <img src="public/img/bg.jpg" alt="bg" class="fixed h-full left-0 bottom-0" style="z-index: -1;">
    <div class="w-screen h-screen sm:grid sm:grid-cols-2 sm:gap-0 md:gap-12 py-0 px-8 xl:gap-32 lg:gap-24">
        <div class="sm:flex justify-end items-center hidden">
            <img src="public/img/login.svg" alt="login" style="width: 500px;">
        </div>
        <div class="transform translate-y-48 sm:translate-y-0 flex justify-center items-center">
            <nav class="mr-64 fixed transform translate-x-64 top-0 right-0 -translate-y-48 sm:translate-y-0">
                <ul class="flex pt-8">
                    <li class="mr-2 p-2 rounded-full w-20 text-center font-bold border border-blue-700 duration-300 cursor-pointer bg-gray-200 text-blue-500  hover:bg-gray-500 hover:text-gray-800 hover:border-gray-400" id="login"><a href="<?= 'http://localhost/login-ci4'; ?>">Login</a></li>
                    <li class="mr-2 p-2 rounded-full w-20 text-center font-bold border border-blue-700 duration-300 cursor-pointer bg-blue-500 text-black hover:bg-blue-700 hover:text-gray-300 hover:border-gray-800" id="register"><a href="<?= 'http://localhost/login-ci4/register'; ?>">Register</a></li>
                </ul>
            </nav>
            <form style="width: 450px;" method="POST" action="login/masuk" class="bg-gray-200 py-8 rounded-3xl shadow-2xl">
                <?= csrf_field(); ?>
                <img src="public/img/avatar.svg" alt="avatar" class="w-24 mx-auto">
                <h2 class="text-4xl mt-2 -mb-2 text-center">LOGIN USER</h2>
                <div class="my-4 mx-8 py-2 px-0 border-b-2 <?= ($state) ? 'border-blue-600' : ' border-gray-600'; ?> mt-0" style="display: grid;grid-template-columns: 7% 93%;">
                    <div class="flex justify-center items-center relative h-10">
                        <i class="i fas fa-user <?= ($state) ? 'text-blue-700' : 'opacity-50'; ?> duration-500"></i>
                    </div>
                    <div class="relative h-10">
                        <h5 class="h5 -translate-y-1/2 transform <?= ($state) ? 'text-base' : 'text-xl'; ?> duration-500 absolute text-gray-700" style="position: absolute;left: 10px; <?= ($state) ? 'top:-5px' : 'top:50%'; ?> ;">Username</h5>
                        <input type="text" name="username" class="input absolute w-full h-full top-0 left-0 py-2 px-3 text-lg border-none outline-none" style="background: none;" value="<?= old('username'); ?>">
                    </div>
                </div>
                <span class="text-red-700 ml-8 inline-block transform -translate-y-4">
                    <?php if (isset($validation)) {
                        echo $validation->getError('username');
                    } ?>
                </span>
                <div class="-mt-3 mx-8 py-2 px-0 border-b-2 <?= ($state) ? 'border-blue-600' : ' border-gray-600'; ?> mb-1" style="display: grid;grid-template-columns: 7% 93%;">
                    <div class="flex justify-center items-center relative h-10">
                        <i class="i fas fa-lock <?= ($state) ? 'text-blue-700' : 'opacity-50'; ?> duration-500"></i>
                    </div>
                    <div class="relative h-10">
                        <h5 class="h5 -translate-y-1/2 transform <?= ($state) ? 'text-base' : 'text-xl'; ?> duration-500 absolute text-gray-700" style="position: absolute;left: 10px;<?= ($state) ? 'top:-5px' : 'top:50%'; ?>;">Password</h5>
                        <input type="password" name="password" class="input absolute w-full h-full top-0 left-0 py-2 px-3 text-lg border-none outline-none" style="background: none;" value="<?= old('password'); ?>">
                        <span class="eyes fa fa-eye-slash absolute right-0 transform translate-y-3 cursor-pointer text-gray-700"></span>
                    </div>
                </div>

                <span class="text-red-700 ml-8 inline-block">
                    <?php if (isset($validation)) {
                        echo $validation->getError('password');
                    } ?>
                </span>
                <div class="flex justify-between mb-4 mt-0">
                    <div class="ml-8">
                        <input type="checkbox" class="cursor-pointer">
                        <label for="check" class="sm:text-sm lg:text-base text-base cursor-pointer duration-500 text-gray-700">Remember Me</label>
                    </div>
                    <a href=" #" class="sm:text-sm lg:text-base text-base no-underline text-gray-700 duration-500 hover:text-blue-700 mr-6">Lupa Password?</a>
                </div>
                <div class="flex justify-center my-4">
                    <input type="submit" class="shadow-2xl block h-10 px-40 sm:px-24 md:px-32 lg:px-40 rounded-3xl text-lg outline-none border-none bg-blue-600 cursor-pointer text-gray-300 duration-500 uppercase hover:bg-blue-700 mx-6" value="Login">
                </div>
                <span class="flex justify-center">Atau</span>
                <div class="flex justify-center mt-4 mb-4">
                    <div class="bg-gray-400 flex justify-center py-1 rounded-full w-64 transform hover:scale-105 shadow-2xl duration-300 hover:bg-gray-200">
                        <img src="public/img/google.png" alt="google" width="40" height="40" class="mr-4">
                        <h3 class="flex items-center cursor-pointer hover:text-blue-600">Login with SIPADU</h3>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="bg-gray-400 flex justify-center py-1 rounded-full w-64 transform hover:scale-105 shadow-2xl duration-300 hover:bg-gray-200">
                        <img src="public/img/google.png" alt="google" width="40" height="40" class="mr-4">
                        <h3 class="flex items-center cursor-pointer hover:text-blue-600">Login with Google</h3>
                    </div>
                </div>
            </form>
            <script src="public/js/eye.js"></script>
        </div>
    </div>

    <footer class="bg-black text-white flex justify-center items-center underline h-16 fixed bottom-0 w-screen">Copyright</footer>
    <script src="public/js/main.js"></script>

</body>

</html>