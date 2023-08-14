<?php
// http://localhost/learnPhp/baitapfile/xuat.php
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="dark:bg-gray-900">
        
    <div class="w-full sm:p-6">
        <div class="px-4 md:px-10 py-4 md:py-7 bg-gray-100 dark:bg-gray-700 rounded-tl-lg rounded-tr-lg">
            <div class="sm:flex items-center justify-between">
                <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800 dark:text-white ">Product</p>
                <a href='addproduct.php'>
                <button class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 inline-flex sm:ml-3 mt-4 sm:mt-0 items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                            <p class="text-sm font-medium leading-none text-white">New Product</p>
                </button>
                </a>
            </div>
        </div>
        <div class="bg-white dark:bg-gray-800  shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
            <table class="w-full whitespace-nowrap">
                <thead>
                    <tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800 dark:text-white ">
                        <th class="font-normal text-left pl-4">Product</th>
                        <th class="font-normal text-left pl-12">Progress</th>
                        <th class="font-normal text-left pl-12">Quantity</th>
                        <th class="font-normal text-left pl-20">Price</th>
                        <th class="font-normal text-left pl-20">Deadline</th>
                        <th class="font-normal text-left pl-16">Image</th>
                    </tr>
                </thead>
                <tbody class="w-full">
                    <tr tabindex="0" class="focus:outline-none h-20 text-sm leading-none text-gray-800 dark:text-white  bg-white dark:bg-gray-800  hover:bg-gray-100 dark:hover:bg-gray-900  border-b border-t border-gray-100 dark:border-gray-700 ">
                        <td class="pl-4 cursor-pointer">
                            <div class="flex items-center">
                               
                                <div class="pl-4">
                                    <p class="font-medium">UX Design &amp; Visual Strategy</p>
                                    
                                </div>
                            </div>
                        </td>
                        <td class="pl-12">
                            <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">72%</p>
                            <div class="w-24 h-3 bg-gray-100 dark:bg-gray-700  rounded-full mt-2">
                                <div class="w-20 h-3 bg-green-progress rounded-full"></div>
                            </div>
                        </td>
                        <td class="pl-12">
                            <p class="font-medium">32/47</p>
                            
                        </td>
                        <td class="pl-20">
                            <p class="font-medium">$13,000</p>
                            
                        </td>
                        <td class="pl-20">
                            <p class="font-medium">22.12.21</p>
                            
                        </td>
                        <td class="pl-16">
                            <div class="flex items-center">
                                <img class="shadow-md w-8 h-8 rounded-full" src="https://cdn.tuk.dev/assets/templates/olympus/projects(8).png" alt="collaborator 1" />
                            </div>
                        </td>
                        
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </div>
</body>