<?php

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<form action="process_form.php" method="POST" class="max-w-sm mx-auto">
    <div class="mb-4">
        <label for="departure" class="block font-medium mb-2">Nơi đi:</label>
        <input type="text" name="departure" id="departure" required class="w-full p-2 border border-gray-300 rounded-md" />
    </div>
    <div class="mb-4">
        <label for="departure_time" class="block font-medium mb-2">Giờ đi:</label>
        <input type="text" name="departure_time" id="departure_time" required class="w-full p-2 border border-gray-300 rounded-md" />
    </div>
    <div class="mb-4">
        <label for="arrival" class="block font-medium mb-2">Nơi đến:</label>
        <input type="text" name="arrival" id="arrival" required class="w-full p-2 border border-gray-300 rounded-md" />
    </div>
    <div class="mb-4">
        <label for="arrival_time" class="block font-medium mb-2">Giờ đến:</label>
        <input type="text" name="arrival_time" id="arrival_time" required class="w-full p-2 border border-gray-300 rounded-md" />
    </div>
    <div class="mb-4">
        <label for="airline" class="block font-medium mb-2">Hãng bay:</label>
        <input type="text" name="airline" id="airline" required class="w-full p-2 border border-gray-300 rounded-md" />
    </div>
    <div class="mb-4">
        <label for="price" class="block font-medium mb-2">Giá:</label>
        <input type="text" name="price" id="price" required class="w-full p-2 border border-gray-300 rounded-md" />
    </div>
    <div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Gửi</button>
    </div>
</form>
</body>

