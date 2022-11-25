<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>php-badwords</title>
</head>
<body>
    <div class='d-flex justify-content-center mt-5'>       
        
      <form action="./risposta.php" method='post'>
         <h3 class='text-center'>Inserisci il testo</h3>
         <textarea name="text" id="" cols="40" rows="5"></textarea> 

         <div class="d-block mt-3"></div>

         <input placeholder='Inserisci una parola '  type="text" name="censura" id="">
         <button class='btn btn-primary'>Invia</button> 
      </form>

    </div>
</body>
</html>