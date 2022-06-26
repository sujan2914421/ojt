<?php 
    session_start();
    if(isset($_SESSION['loggedin'])){
        if($_SESSION['loggedin'] != true){
            header("location: http://localhost/ojt/forms/login.php");
        }
    } else{
        if(!isset($_SESSION['loggedin'])){
            header("location: http://localhost/ojt/forms/login.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OJT</title>
    <link rel="stylesheet" href="./css/tailwind.css">
    <style>
        ::-webkit-scrollbar{
            display: none;
        }
    </style>
</head>
<body>
    <div class="relative h-screen w-screen overflow-hidden">
        <div class="relative h-full w-full bg-transparent overflow-hidden">
            <div class="relative h-[100px] bg-white text-black flex items-center px-[100px] justify-between">
                <div class="relative h-auto w-auto flex items-end justify-center capitalize">
                    <div class="relative text-2xl font-extrabold">W</div>
                    <div class="relative text-md font-extrabold">o</div>
                    <div class="relative text-2xl font-extrabold">W</div>
                    <div class="absolute h-auto w-auto text-xs -right-[8px] -top-[6px]">tm</div>
                </div>
                <div class="relative flex items-center gap-[45px]">
                    <div class="relative flex items-center gap-[35px] capitalize font-[400] text-md">
                        <div class="relative cursor-pointer hover:text-[15px] w-[60px] flex items-center justify-center duration-100">home</div>
                        <div class="relative cursor-pointer hover:text-[15px] w-[60px] flex items-center justify-center duration-100">gallery</div>
                        <div class="relative cursor-pointer hover:text-[15px] w-[60px] flex items-center justify-center duration-100">detail</div>
                    </div>
                    <div class="relative flex items-center gap-[20pxcapitalize font-semibold text-sm">
                    </div>
                    <div class="relative h-auto w-auto flex items-center gap-4 opacity-100">
                        <div class="relative h-[40px] w-[140px] rounded-full capitalize font-bold cursor-pointer shadow bg-gradient-to-r from-orange-400 to-orange-600 text-white flex items-center justify-center">
                            Hello!
                        </div>
                        <div class="relative h-[40px] w-[40px] flex items-center justify-center hover:scale-105 cursor-pointer" onclick="showpopup()">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power">
                                <path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
                                <line x1="12" y1="2" x2="12" y2="12"></line>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logoutpopupcontainer h-screen w-screen fixed bg-black/10 backdrop-blur z-30 top-0 left-0 opacity-0 duration-300" style="display:none">
                <div class="relative h-full w-full flex items-center justify-center">
                    <div class="relative h-auto w-[300px] bg-white py-8 rounded-xl flex items-center justify-center">
                        <div class="relative h-auto w-full grid gap-6">
                            <div class="relative h-auto w-auto font-extrabold text-md text-center px-4">Are you sure you want to logout??</div>
                            <div class="relative h-auto w-full flex items-center justify-center gap-4">
                                <div onclick="hidepopup()" class="relative h-auto w-[100px] border-gray-300 border rounded-md cursor-pointer py-3 flex items-center justify-center">no</div>
                                <div onclick="window.location.replace('http://localhost/ojt/forms/logout.php')" class="relative h-auto w-[100px] bg-black text-white rounded-md cursor-pointer py-3 flex items-center justify-center">yes</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative h-[calc(100vh-100px)] w-full overflow-y-auto scrollContainer">
                <div class="relative h-[calc(100vh-100px)] w-full flex items-center bg-[url('https://images.unsplash.com/photo-1504903271097-d7e7c7f5f7ad?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80')] bg-no-repeat bg-cover bg-center text-white">
                    <div class="relative h-full w-1/2 flex items-center px-[100px]">
                        <div class="relative h-auto w-auto grid gap-[20px]">
                            <div class="relative text-7xl font-extrabold">Hello world!</div>
                            <div class="relative text-2xl font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste odit rem</div>
                            <div class="relative h-[50px] w-[350px] font-bold cursor-pointer rounded bg-white text-black flex items-center justify-center select-none">WOW</div>
                        </div>
                    </div>
                </div>
                <div class="relative h-[calc(100vh-100px)] w-full flex items-center justify-center">
                    <div class="relative h-full w-1/2 flex items-center px-[100px]">
                        <div class="relative h-auto w-auto grid gap-[20px]">
                            <div class="relative text-7xl font-extrabold">Our Group</div>
                            <div class="relative text-sm font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste odit rem perspiciatis atque? Rem repellendus nesciunt provident consequuntur, dicta eos earum voluptas magnam itaque eaque at sequi adipisci, ratione impedit!</div>
                        </div>
                    </div>
                    <div class="relative h-auto w-1/2">
                        <div class="relative h-[calc(100vh-100px)] w-full">
                            <div class="relative h-full w-full bg-[url('https://images.unsplash.com/photo-1516886635086-2b3c423c0947?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=465&q=80')] bg-cover"></div>
                        </div>
                    </div>
                </div>
                <div class="relative h-[calc(100vh-100px)] w-full flex items-center justify-center">
                    <div class="relative h-auto w-1/2">
                        <div class="relative h-[calc(100vh-100px)] w-full">
                            <div class="relative h-full w-full bg-[url('https://images.unsplash.com/photo-1516886635086-2b3c423c0947?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=465&q=80')] bg-cover"></div>
                        </div>
                    </div>
                    <div class="relative h-full w-1/2 flex items-center px-[100px]">
                        <div class="relative h-auto w-auto grid gap-[20px]">
                            <div class="relative text-7xl font-extrabold">Our Lab</div>
                            <div class="relative text-sm font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste odit rem perspiciatis atque? Rem repellendus nesciunt provident consequuntur, dicta eos earum voluptas magnam itaque eaque at sequi adipisci, ratione impedit!</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/index.js"></script>
</body>
</html>