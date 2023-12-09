$(document).ready(function(){
  $('#submitbtn').click(function(){
    var username = $('#username').val();
    var password = $('#password').val();
    console.log(username);
    console.log(password);
    if(username != '' && password != ''){
      $.ajax({
        url:"http://localhost/guvi/php/login.php",
        method:"POST",
        data:{username:username,password:password},
        success:function(data){
          console.log(data);
          console.log(data);
          console.log(typeof(data));
          if(data == 'Yes'){
            alert("wrong details1");
          }else{
            window.location.href = "profile.html";
          }
        } 
      })
    }
  })
})