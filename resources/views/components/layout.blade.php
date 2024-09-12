<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-full h-20 p-5 bg-UIP-blue shadow flex items-center px-10">
        <div class="flex items-center gap-4">
            <div class="w-10 h-10 bg-black/10 rounded-full">
                <a target="_blank" href="https://www.uip.ph/">
                    <img src="./img/uip-icons/UIP_solidA.png">
                </a>
            </div>
            <div class="text-white lg:text-2xl text-xl font-medium font-poppins"><a target="_blank"
                    href="https://www.uip.ph/">UIP Inc.</a></div>
        </div>
    </div>
    
    <?php echo $slot ?>
</body>
</html>