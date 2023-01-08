<?php

class Form
{

    public function createRegisterForm()
    {
        echo self::formRegister();
    }

    public function createLoginForm()
    {
        echo self::formLogin();
    }

    private function formRegister()
    {
        return '
        <div class="font-sans min-h-screen antialiased bg-gray-900 pt-24 pb-5">
        <div class="flex flex-col justify-center sm:w-96 sm:m-auto mx-5 mb-5 space-y-8">
        <form  @submit.prevent="registerAction()" >
//        @submit.prevent="registerAction()"

        <div class="flex flex-col bg-white p-10 rounded-lg shadow space-y-6">
        
        <h1 class="font-bold text-xl text-center"> Create new acccount </h1> 
        
        <div class="flex flex-col space-y-1">
        <input type="text" name="username" x-model="username" class="border-2 rounded px-3 py-2 w-full focus:outline-none focus:border-blue-400 focus:shadow" placeholder="Username" />
         </div> 
         
          <div class="flex flex-col space-y-1">
            <input type="text" name="email"  x-model="email" class="border-2 rounded px-3 py-2 w-full focus:outline-none focus:border-blue-400 focus:shadow" placeholder="Email" />
          </div>
          
          <div class="flex flex-col space-y-1">
        <input type="password" name="password"  x-model="password" class="border-2 rounded px-3 py-2 w-full focus:outline-none focus:border-blue-400 focus:shadow" placeholder="Password" />
         </div>
          
           <div class="flex flex-col-reverse sm:flex-row sm:justify-between items-center">
        <a href="login.php" class="inline-block text-blue-500 hover:text-blue-800 hover:underline">Have an account? Loggin here</a>
        <button type="submit" class="bg-blue-500 text-white font-bold px-5 py-2 rounded focus:outline-none shadow hover:bg-blue-700 transition-colors">Create</button>
        </div>
          
           </div>
            </form>
            
        </div>
        </div>
        ';
    }

    private function formLogin()
    {
        return '
        <div class="font-sans min-h-screen antialiased bg-gray-900 pt-24 pb-5">
        <div class="flex flex-col justify-center sm:w-96 sm:m-auto mx-5 mb-5 space-y-8">
        <form action="login-action.php" method="post">
        <div class="flex flex-col bg-white p-10 rounded-lg shadow space-y-6">
        
        <h1 class="font-bold text-xl text-center"> log in </h1> 
        
         
          <div class="flex flex-col space-y-1">
            <input type="text" name="email"  x-model="email" class="border-2 rounded px-3 py-2 w-full focus:outline-none focus:border-blue-400 focus:shadow" placeholder="Email" />
          </div>
          
          <div class="flex flex-col space-y-1">
        <input type="password" name="password"  x-model="password" class="border-2 rounded px-3 py-2 w-full focus:outline-none focus:border-blue-400 focus:shadow" placeholder="Password" />
         </div>
          
           <div class="flex flex-col-reverse sm:flex-row sm:justify-between items-center">
        <a href="register.php" class="inline-block text-blue-500 hover:text-blue-800 hover:underline">don`t Have an account? Create new acccount</a>
        <button type="submit" class="bg-blue-500 text-white font-bold px-5 py-2 rounded focus:outline-none shadow hover:bg-blue-700 transition-colors">Login</button>
        </div>
          
           </div>
            </form>
        </div>
        </div>
        ';
    }


}

