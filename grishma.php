<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Tailwind CSS CDN Link -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
        <h2 class="text-2xl font-bold text-center mb-6 text-gray-700">Login to Your Account</h2>

        <form id="login" action="login.php" method="POST">
            <div class="mb-4">
                <label for="username" class="block text-sm font-semibold text-gray-600 mb-2">Username / Email</label>
                <input type="text" id="username" name="username" placeholder="Enter your username or email" required
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-semibold text-gray-600 mb-2">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Login
            </button>

            <div class="text-center mt-4 text-sm text-gray-600">
                Don't have an account? <a href="signup.html" class="text-blue-500 hover:text-blue-700">Sign Up</a>
            </div>
        </form>


    </div>
<!-- <div class="flex justify-center items-center h-screen bg-red-800"> -->
    <!-- <form action="" method="post" class="bg-gray-200 p-10 rounded-lg">
        <h2 class="text-center text-2xl font-bold">Login</h2>
        <div class="mt-5">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="w-full p-2 border-2 border-gray-300 rounded-lg">
        </div>
        <div class="mt-5">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="w-full p-2 border-2 border-gray-300 rounded-lg">
        </div>
        <div class="mt-5">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="w-full p-2 border-2 border-gray-300 rounded-lg">
        </div>
        <div class="mt-5">
            <button type="submit" class="w-full bg-blue-800 text-white p-2 rounded-lg">Login</button>
        </div>
    </form> -->
<!-- </div>  -->
</body>
</html>