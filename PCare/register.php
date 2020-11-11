<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Register Page</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
 <style>
 	body {
   margin: 0;
   padding: 0;
   background: url(gambar/hewan2.jpg); 
   background-size: cover;
   background-position: center;
   background-repeat: no-repeat;
   background-attachment: fixed;
   font-family: sans-serif;
 }
 .login {
   position: fixed;
   top: 50%;
   left: 75%;
   transform: translate(-30%, -50%);
   background: rgba(4, 29, 23, 0.5);
   padding: 50px;
   width: 270px;
   box-shadow: 0px 0px 25px 10px black;
   border-radius: 15px;
 }
 .avatar {
   font-size: 30px ;
   background: #c78555;
   width: 50px;
   height: 50px;
   line-height: 50px;
   position: fixed;
   left: 50%;
   top: 0;
   transform: translate(-50%, -50%);
   text-align: center;
   border-radius: 50%;
 }
 .login h2 {
   text-align: center;
   color: white;
   font-size: 30px;
   font-family: sans-serif;
   letter-spacing: 3px;
   padding-top: 0;
   margin-top: -20px;
 }
 .box-login {
   display: flex;
   justify-content:space-between;
   margin: 10px;
   border-bottom: 2px solid white;
   padding: 8px 0;
 }
 .box-login i {
   font-size: 23px;
   color: white;
   padding: 5px 0;
 }
 .box-login input {
   width: 85%;
   padding: 5px 0;
   background: none;
   border: none;
   outline: none;
   color: white;
   font-size: 18px;
 }
  .box-login select {
   width: 85%;
   padding: 5px 0;
   background: none;
   border: none;
   outline: none;
   color: white;
   font-size: 18px;
 }
 .box-login input::placeholder {
   color: white;
 }
 .btn-login
 .box-login input:hover{
   background: rgba(10, 10, 10,s 0.5);
 }
 .btn-login {
   margin-left: 10px;
   margin-bottom: 20px;
   background: none;
   border: 1px solid white;
   width: 92.5%;
   padding: 10px;
   color: white;
   font-size: 18px;
   letter-spacing: 3px;
   cursor: pointer;
   }
 .btn-login:hover{
   background: rgba(12, 30, 15, 0.5);
 }
 .bottom {
   margin-left: 10px;
   margin-right: 10px;
   display: flex;
   justify-content: space-between;
 }
 .bottom a {
   color: white;
   font-size: 15px;
   text-decoration: none;
 }
 .bottom a:hover {
 text-decoration: underline;
 }
 </style>
      <div class="login">
          <div class="avatar">
            <i class="fa fa-dog"></i>
          </div>
          <h2>Sign Up</h2>
          <form action="prosesreg.php" method="post" name="form">      
          <div class="box-login">
            <i class="fas fa-envelope-open-text"></i>
            <input type="text" name="username" placeholder="Email">
          </div>
          <div class="box-login">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
          <div class="box-login">
            <i class="fas fa-address-card"></i>
            <input type="text" name="alamat" placeholder="Alamat">
          </div>
          <div>
            <div class="box-login">   
            <i class="fas fa-star"></i>
            <select style="background: none; border: none; width: 213px" name="level">
            <option>Hak Akses</option>
            <option>User</option>
            </select>
          </div>
          <button type="submit" name="register-submit" class="btn-login">Sign Up</button>
          <div class="bottom">
            <a href="login.php">Back to Login</a>
            <a href="#">Forgot Password</a>
          </div>
        </form>
      </div>
  </head>
  </html>