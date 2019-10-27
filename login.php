<style>
  h1 {
      font-family:Times New Roman;
      color:white;
      text-shadow: 0px 0px 0px black, 0 0 0px black, 0 0 0px black ;
      text-align: center;
      
   }
</style>

<style> 
  #main {
      width:300px;
      height:220px;
      padding-top: 10px;
      display: -webkit-flex; /* Safari */
      -webkit-flex-flow: row wrap; /* Safari 6.1+ */
      -webkit-align-content: space-around; /* Safari 7.0+ */
      display: flex;
      flex-flow: row wrap;
      align-content: space-around;
      margin: auto;
      padding-left: 5px;
  }
  
  #main div {
      width:300px;
      height:150px;   
   }
</style>
<h1>Login</h1>
<div id="main">
<div style="background:linear-gradient(white,#fff );border:solid thick #fff; padding: 30px; margin: auto;">
  <form action="login2.php" method="post" onsubmit="return semak()">
    <table style= "margin: auto">
      <tr>
        <td>Username: <br><br></td>
        <td><input type="text" name="username" id="username" /><br><br></td>
      </tr>
      <tr>
        <td>Password: <br><br></td>
        <td><input type="password" name="password" id="password" /><br><br></td>
      </tr>
      <tr>
        <td colspan="2" style="text-align:center;padding-left: 10px;">
          <input type="submit" value="Login" />
        </td>
      </tr>
    </table>
  </form>
  <p id="geer" onclick="myFunction()">Forgot your password?</p>
</div>
<script>
  function myFunction() {
      alert("Please call to Resume Creater 01161670078 or email to resume@gmail.com");          
  }
</script>
<script>
  function semak(){
      if($('#username').val()==''){
          alert('Please enter your username')
          $('#id').focus()
          return false
      }else if($('#password').val()==''){
          alert('Please enter your password')
          $('password').focus()
          return false
      }else{
          return true
      }
  }
</script>