<?php 
    session_start();
    if(isset($_SESSION['loggedin'])){
        if($_SESSION['loggedin'] != false){
            header("location: http://localhost/ojt/");
        }
    }



    if(isset($_POST['submit'])){
        $_SESSION['loggedin'] = true;
        header("location: http://localhost/ojt/");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OJT</title>
    <link rel="stylesheet" href="../css/tailwind.css">
    <style>
        ::-webkit-scrollbar{
            display: none;
        }
    </style>
</head>
<body>
    <div class="relative h-screen w-screen overflow-hidden bg-[url('https://images.unsplash.com/photo-1632517594886-f20515e3616c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80')]">
        <div class="relative h-full w-full flex items-center justify-center bg-gradient-to-tr from-black/60 to-black/40">
            <div class="relative h-auto w-[400px] px-10 py-10 rounded-md bg-white">
                <div class="relative h-auto w-auto">
                    <form action="login.php" method="POST" class="relative h-auto w-full grid gap-8 form">
                        <div class="relative h-auto w-full grid gap-3">
                            <div class="relative h-auto w-full text-xl font-extrabold">Login</div>
                            <div class="relative h-auto w-full text-xs font-normal">Welcome back!</div>
                        </div>
                            <div class="relative h-auto w-full grid gap-4">
                                <div class="relative h-[40px] w-full border border-gray-200 rounded-md flex gap-2 overflow-hidden">
                                    <div class="relative h-full w-[40px] flex items-center justify-center">
                                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </div>
                                    <div class="relative h-full w-[calc(100%-40px)] flex items-center justify-center">
                                        <input type="text" name="username" id="username" class="logindetails relative h-full w-full outline-none text-xs bg-transparent" placeholder="name">
                                    </div>
                                </div>
                                <div class="relative h-[40px] w-full border border-gray-200 rounded-md flex gap-2 overflow-hidden">
                                    <div class="relative h-full w-[40px] flex items-center justify-center">
                                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>
                                    </div>
                                    <div class="relative h-full w-[calc(100%-40px)] flex items-center justify-center">
                                        <input type="password" name="password" id="password" class="logindetails relative h-full w-full outline-none text-xs bg-transparent" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="relative h-[40px] w-full border rounded-md flex gap-2 overflow-hidden bg-black text-white">
                                <div class="relative h-full w-full flex items-center justify-center">
                                    <input type="submit" name="submit" id="submit" class="relative h-full w-full outline-none text-xs bg-transparent cursor-pointer">
                                </div>
                            </div>
                            <div class="relative h-auto w-full flex items-center justify-between">
                                <div class="relative h-auto w-auto text-xs font-normal">Dont have an account??</div>
                                <div onclick="location.replace('http://localhost/ojt/forms/signup.php')" class="relative h-auto w-auto text-xs font-semibold text-blue-500">signup</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/login.js"></script>
</body>
</html>