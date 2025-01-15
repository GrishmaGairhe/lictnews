<?php include 'header.php';?>
    <h1 class="font-bold text-3xl">Create Notice</h1>
    <hr class="h-1 bg-red-600">

    <!-- <p class="text-bold text-3xl">Notice Form</p> -->
      <!-- <form action="" class="text-gray-700 font-semibold mt-10">Title of Notice</form> -->
      <form action="#" method="post" class="mt-10">
      <div class="mt-4">
        <label for="text" class="font-semibold text-gray-700">Priority</label>
        <input type="text" id="priority" name="priority" class="mt-1 block py-2 w-full border border-gray-300 rounded-md 
        focus:outline-none focus:ring-1 focus:ring-black focus:border-black" >
        </div>
      <div class="mt-4">
        <label for="date" class="font-semibold text-gray-700">Date</label>
        <input type="date" id="date" name="date" class="mt-1 block py-2 w-full border border-gray-300 rounded-md 
        focus:outline-none focus:ring-1 focus:ring-black focus:border-black" >
        </div> 
      <div class="mt-4">
        <label for="title of notice" class="font-semibold text-gray-700">Title of notice</label>
        <input type="text" id="title" name="title" class="mt-1 block py-2 w-full border border-gray-300 rounded-md 
        focus:outline-none focus:ring-1 focus:ring-black focus:border-black" >
        </div>
        
        <div class="mt-4">
        <label for="notice_content" class="font-semibold text-gray-700">Notice Content</label>
        <input type="text" id="notice" name="notice" class="mt-1 block py-2 w-full border border-gray-300 rounded-md 
        focus:outline-none focus:ring-1 focus:ring-black focus:border-black" >
        </div>
        <div class="flex mt-4 justify-center gap-4">
            <button type="submit" class="p-2 px-5 bg-blue-700 text-white 
            rounded-lg hover:bg-blue-600">Add Notice</button>
            <a href="notice.php" class="p-2 px-8 bg-red-700 text-white hover:bg-red-600 rounded-lg">Cancel</a>
        </div>
         
       
      </form>
          



      