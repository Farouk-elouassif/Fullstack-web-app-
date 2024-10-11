<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="imgs/fsttlogo.png">
  <link href="/dist/styles.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="styles.css">
  <title>Sign in</title>
</head>
<body class="flex justify-center items-center h-screen bg-blue-900">
  <div id="container" class="bg-white text-white flex items-center p-4 rounded-md font-medium h-auto w-1/3 flex-row flex-wrap">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5Ak6_2N93Y2JBjgovpAtJ4mXup7tQi9JqTw&s" class="w-1/4 h-1/4 self-center mt-5">
    <div id="signin" class="flex flex-col justify-center items-center w-3/4 text-black">
      <h1 class="font-semibold text-xl">Sign in</h1>
      <form action="" class="w-4/5 m-2 mt-2">
        <label for="">
          <h4 class="mt-4 mb-2">Email</h4>
          <input type="email" placeholder="Veuillz entrer votre email" class=" text-sm font-normal w-full p-1 rounded-md text-black border-2 border-gray-400">
        <label for="" >
          <h4 class="mt-4 mb-2">Password</h4>
          <input type="password" placeholder="Veuillz entrer votre email" class=" text-sm font-normal w-full p-1 rounded-md text-black border-2 border-gray-400">
          <button type="submit" class="bg-yellow-500 w-full p-1 mt-5 rounded-md hover:bg-yellow-600 mb-4">Sign in</button>
        </label>
      </form>
    </div>
  </div>
</body>
</html>