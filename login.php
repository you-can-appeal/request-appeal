<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
  </head>
  
  <style>
  *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }
  
    input[type="submit"]{
        
        padding: 8px 20px;
          width: 100px;
          margin: 10px 0;
          border-radius: 3px;
          border: none;
          background-color: #000;
          color: #fff;
          letter-spacing: 1px;
          cursor: pointer;
          transition: all ease .5s;
    }
    input[type="submit"]:hover{
        background-color: #faefef;
        color: black;
        scale: .97;
    }
    center h6{
      color: #fff;
    }
  </style>
  <body
    style="
      width: 100vw;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      overflow: hidden;
      background-color: #292c2c;
    "
  >
    <h2 style="color: #fff; letter-spacing: 1px; font-weight: 500; margin-bottom: 20px; ">Login</h2>
    <form
      style="
        height: 250px;
        width: 350px;
        border-radius: 5px;
        padding-left: 100px;
        background-color: #ffffffd9;
        box-shadow: 0px 0px 20px 5px rgba(0, 0, 0, 0.3);
        display: flex;
        justify-content: center;
        flex-direction: column;
      "
      action="admin_process_login.php"
      method="POST"
    >
      <label style="margin-bottom: 5px;" for="username">Username:</label>
      <input
        style="width: 70%; border: none; border-radius: 5px; padding: 5px 0"
        type="text"
        name="username"
        id="username"
      />

      <label style="margin-bottom: 5px; margin-top: 5px; "  for="password">Password:</label>
      <input style="width: 70%; border: none; border-radius: 5px; padding: 5px
      0;"
       type="password" 
       name="password"
        id="password" 
        />

      <input
        type="submit"
        value="Login"
        class="btn"
      />
    </form>
    <center> <h6>created with ❤️</h6> </center>
  </body>
</html>
