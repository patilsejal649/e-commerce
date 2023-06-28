<!DOCTYPE html>
<html lang="en">
<head>
     <!--css link-->
  <link rel="stylesheet" href="style1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jewellery_shopping_website</title>
    <!--bootsrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--font aswsome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>user_registration</title>
</head>
<body>
    <div class="contanier-fluid my-3">
        <h2 class="text-center"> New User Registration</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <!--username-->
   <form action="" method="post" enctype="multipart/form-data">
    <div class="form-outline mb-4">
        <label for="user_username" class="form-label" >Username</label>
        <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="user_username"/>
    </div>
    
   
    <!--password-->
    <div class="form-outline  mb-4">
        <label for="user_password" class="form-label" >password</label>
        <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="user_password"/>
    </div>
   
    <div class="mt-4 pt-2">
        <input type="submit" value="login" class="bg-info py-2 px-3 border-0"  name="user_login" >
        <p class="small fw-bold mt-2 pt-1 mb-0" >don't have and account ?<a href="user_registration.php" class="text-danger" > Register</a></p>
    </div>
   </form>
            </div>
        </div>
    </div>
</body>
</html>