<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
    <div class="container w-screen h-screen bg-mainbg flex justify-center items-center  ">
        <div class="form_container bg-white p-5  rounded-lg w-[30rem] max-[600px]:w-[25rem] ">
            <form action="#" method="post" class="registernow flex flex-col" >
                <h3 class="text-3xl font-bold pb-4  text-center ">Welecome to Chatt </h3>
                
                <label class="block pb-4">
                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                        Username
                    </span>
                    <input type="text" name="email" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="med2456" />
                </label>
                <label class="block pb-4">
                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                        Email
                    </span>
                    <input type="email" name="email" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="you@example.com" />
                </label>
                <label class="block pb-4">
                    <span class=" block text-sm font-medium text-slate-700 ">
                        Password
                    </span>
                    <input type="password" name="email" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="password" />
                
                </label>

                <p class="text-sm font-medium text-slate-700 pb-3 ">Select your image</p>

                <label class="block">
                    <span class="sr-only">Choose profile photo</span>
                    <input type="file" class="block w-full text-sm text-slate-500
                    file:mr-4 file:py-2 file:px-4
                    file:rounded-full file:border-0
                    file:text-sm file:font-semibold
                    file:bg-violet-50 file:text-violet-700
                    hover:file:bg-violet-100
                    "/>
                </label>
                <div class="w-full pt-5 ">
                <button type="submit" class="gotochatregister w-full font-semibold rounded-lg h-8 bg-violet-500 text-white  hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 ">
                    Go to chat 
                </button>
                </div>

                <div class="flex gap-3 py-5 justify-center" >
                    <p>Already have an account ? </p> 
                    <a href="login.html" class="text-slate-400">login </a>
                </div>

            </form>
        </div>

    </div>


    <script src="register.js"></script>
    
</body>
</html>