<?php include 'header.php';?>
<div class="flex min-h-screen justify-center items-center">
    
    <form action="admin/dashboard.php" method="post" class="bg-gray-100 shadow-lg rounded-lg p-10 px-10">
        <h2 class="text-center text-3xl font-bold text-gray-700 mb-6">Login to Your Account</h2>
        <div class="mb-4 w-full">
           <label for="username" class="block  font-semibold text-gray-600 mt-8">Username / Email</label>
           <input type="text" name="username" id="username" placeholder="Enter your username or email address" class="w-full p-4 mt-2
           border border-gray-300 text-lg rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500 ">
        </div>
        <div class="mb-6">
        <label for="password" class="block  font-semibold text-gray-600 mt-8">Password</label>
           <input type="password" name="password" id="password" placeholder="Enter your password" class="w-full p-4 mt-2
           border border-gray-300 text-xl rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500">
           <button type="submit" class="text-lg bg-blue-700 w-full text-white rounded-lg p-4 font-semibold mt-8">Login</button>
          </div>
          <div class="flex px-12">
          <div class="text-gray-700">
          Don't have an account?
          </div>
          <div class=" text-blue-700">
          &nbsp;<a href="">Sign Up</a>
         </div> &nbsp;
          </div>
    </form> 
</div>

<!-- <div class="w-1/2 p-4 bg-gray-100 shadow rounded-lg mx-auto my-10 text-center">
  <h1 class="font-bold text-2xl">Login</h1>
<form action="admin/dashboard.php">
   <input type="email" placeholder="Enter Email Address" class="p-2 w-full rounded-lg">
   <input type="password" placeholder="Enter password" class="p-2 w-full rounded-lg my-2">
   <button type="submit" class="mt-2 w-1/2 bg-blue-700 text-white rounded-lg py-2">
   Login
   </button>
</form>
</div> -->

<?php include 'footer.php'; ?>
