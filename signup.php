<?php
    include 'components/head.php';
    include 'logic/register.logic.php';
?>
<h1 class="text-center mt-10 text-4xl">Sign Up</h1>
<form action="signin.php" class="mt-10 space-y-4" method="post">
    <div class="flex flex-col">
        <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="email">Fullname</label>
        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" name="fullname" placeholder="Fullname" type="text">
    </div>
    <div class="flex flex-col">
        <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="email">Email</label>
        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" name="email" placeholder="Email" type="text">
    </div>
    <div class="flex flex-col">
        <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="password">Password</label>
        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" name="password" placeholder="******************" type="password">
    </div>
    <div>
        <input class="shadow  bg-blue-900 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" name="submit" type="submit" value="Sign In">
    </div>
</form>

<?php
    include 'components/footer.php'
?>
