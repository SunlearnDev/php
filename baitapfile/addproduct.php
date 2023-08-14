<?php 
// http://localhost/learnPhp/baitapfile/addproduct.php
if (isset($_POST['submit'])){
    if (isset($_POST['product']) && isset($_POST['progress']) && isset($_POST['quantity']) 
        && isset($_POST['deadline']) && isset($_POST['price']) && isset($_POST['img']) && isset($_POST['name'])){
                $name = $_POST['name'].'.txt';
                $product = $_POST['product'];
                $progress = $_POST['progress'];
                $quantity = $_POST['quantity'];
                $deadline = $_POST['deadline'];
                $price = $_POST['price'];
                $img = $_POST['img'];
                if(file_exists($name)){
                    $file = fopen($name, 'a');
                }else{
                    $file = fopen($name, 'w');
                }
                if($file){
                    fwrite($file, $product);
                    fwrite($file, $progress);
                    fwrite($file, $quantity);
                    fwrite($file, $deadline,);
                    fwrite($file, $price);
                    fwrite($file, $img);
                } 
                
                fclose($file);
        }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body >
        
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">New Product</h2>
        </div>
      
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-6" action="#" method="POST">
          <div>
              <label for="name" class="block text-sm font-medium leading-6 text-gray-900"> Name txt</label>
              <div class="mt-2">
                <input id="name" name="name" type="text"  required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>
          <div>
          <div>
              <label for="product" class="block text-sm font-medium leading-6 text-gray-900"> Product</label>
              <div class="mt-2">
                <input id="product" name="product" type="text"  required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>
          <div>
              <label for="progress" class="block text-sm font-medium leading-6 text-gray-900"> Progress</label>
              <div class="mt-2">
                <input id="progress" name="progress" type="text"  required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>
            
            <div>
                <label for="quantity" class="block text-sm font-medium leading-6 text-gray-900"> Quantity</label>
                <div class="mt-2">
                  <input id="quantity" name="quantity" type="text"  required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>
              <div>
                <label for="price" class="block text-sm font-medium leading-6 text-gray-900"> Price</label>
                <div class="mt-2">
                  <input id="price" name="price" type="text"  required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>
              <div>
                <label for="deadline" class="block text-sm font-medium leading-6 text-gray-900"> Deadline	</label>
                <div class="mt-2">
                  <input id="deadline" name="deadline" type="text"  required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>
              <div>
                <label for="img" class="block text-sm font-medium leading-6 text-gray-900">Url Image</label>
                <div class="mt-2">
                  <input id="img" name="img" type="text"  required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>
            
      
            <div>
              <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
          </form>
      
          
        </div>
      </div>
</body>