<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
   <section>
    <h1 class="text-5xl text-center mt-8">Banking In Our
        <span class="font-semibold text-purple-600">Car House Company</span>!!!</h1>
</section>
<main class="w-3/4 mx-auto">
   <!--  Balance and Transaction -->
    <section class="mt-8" >
        <div class="grid grid-cols-3 gap-4  text-white">
         <div class="bg-emerald-400 p-8 rounded ">
             <h3 class="text-2xl font-semibold">Deposit</h3>
             <h4 class="text-4xl">$<span id="deposit-total">00</span></h4>
            </div>

         <div class="bg-green-700 p-8 rounded ">
            <h3 class="text-2xl font-semibold">Withdraw</h3>
            <h4 class="text-4xl">$<span id="withdraw-total">00</span></h4>
        </div>
        <div class="bg-cyan-800 p-8 rounded ">
            <h3 class="text-2xl font-semibold">Balance</h3>
            <h4 class="text-4xl">$<span id="balance-total">00</span></h4>
        </div>
        </div>
    </section>


<!-- Deposit and Withdraw -->

    <section class="mt-8">
        <div class="grid grid-cols-2 gap-4">
          <div class="bg-red-200 p-8 rounded">
            <h3 class="text-2xl">Please Deposit</h3>
            <div>
                <input id ="deposit-input" 
                class="border block border-gray-400 rounded w-3/4 mb-4 px-2 " type="text" placeholder="$ amount u want to deposit">
                    <button id="deposite-button" class="bg-green-300 px-4 py-2 rounded font-medium  "> Deposit </button>
                </div>
              </div><div class="bg-purple-300 p-8 rounded">
                <h3 class="text-2xl">Please Withdraw</h3>
                <div>
                    <input id ="withdraw-input" 
                    class="border block border-gray-400 rounded w-3/4 mb-4 px-2 " type="text" placeholder="$ amount u want to withdraw">
                        <button id="withdraw-button" class="bg-green-700 px-4 py-2 rounded font-medium text-white "> Withdraw </button>
                    </div>
                  </div>
            </div>
    </section>
  
</main>
<div class="text-center">
    <button id="login-submit" class="bg-sky-400 text-black px-2 py-2 rounded font-medium ml-50px  mt-10 "> <a href="index.php"> Back Home</a>  </button>
</div>
</div>
<script src="js/banking.js"></script>
</body>
</html>