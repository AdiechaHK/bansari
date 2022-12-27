<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bansari Tech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="main.css">
</head>
<body class="bg-gray-200">
    <header class="bg-white shadow-xl py-5">
        <div class="container m-auto flex">
            <img src="BT-logo.png" alt="Bansari Tech logo" class="w-0 md:w-auto max-h-16">
            <div class="grow">&nbsp;</div>
            <ul class="flex text-right">
                <li class="flex ml-4"><a class="px-2 py-4 border-transparent duration-200 hover:border-blue-600 border-b-2" href="#about">About</a></li>
                <li class="flex ml-4"><a class="px-2 py-4 border-transparent duration-200 hover:border-blue-600 border-b-2" href="#services">Services</a></li>
                <li class="flex ml-4"><a class="px-2 py-4 border-transparent duration-200 hover:border-blue-600 border-b-2" href="#products">Products</a></li>
                <li class="flex ml-4"><a class="px-2 py-4 border-transparent duration-200 hover:border-blue-600 border-b-2" href="#contact">Contact</a></li>
            </ul>
            <div class="grow md:grow-0">&nbsp;</div>
        </div>
    </header>
    <section id="welcome" class="main-section flex">
        <div class="m-auto">
            <div class="flex">
                <div>
                    <h1 class="text-3xl mb-10">Bansari Tech Welcomes You !</h1>
                    <p class="text-xl mb-5">We are passionate software engineers, and your technology partner</p>
                    <p class="text-xl mb-5">Your idea and our tech skills will create beautiful products for the society.</p>
                </div>
                <!-- <img class="ml-5" width="100" src="https://4.img-dpreview.com/files/p/E~TS1180x0~articles/3925134721/0266554465.jpeg" alt=""> -->
            </div>
        </div>
    </section>
    <section id="about" class="main-section">
        <div class="sec-container p-5">
            <h1 class="text-3xl mb-10">About Us</h1>
            <p class="mb-3">Motive -- </p>
        </div>    
    </section>
    <!-- 
    <section id="services">
        Services content
    </section>
    <section id="products">
        Product content
    </section>
    <section id="contact">
        Contact us content
    </section>
    <footer>
        Footer content
    </footer>
     -->

    <script>
        const refresh = () => {
            setTimeout(() => {
                console.log('reloading...');
                window.location.reload();
                refresh();
            }, 2000);
        }            
        // refresh();

    </script>
</body>
</html>