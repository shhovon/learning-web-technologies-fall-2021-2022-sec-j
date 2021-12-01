var count=0;
var name= $("name").val();

function check_name(){		
    if($("#name").val() == '')
    {
        $("#name").css({"border":"1px solid red"});
        $("#name_error").text("Name Must Be Filled!");
        $("#name_error").css({"margin-top":"5px"});
    }
    else
    {
        $("#name").css({"border":"1px solid grey"});
        $("#name_error").text("");
        $("#name_error").css({"margin-top":"0px"});
        count++;
 }
}
 function check_email(){
 var email=$("#email").val();
 if(email=="" || email.indexOf("@")==-1 || email.indexOf(".")==-1)
 {
  $("#email").css({"border":"1px solid red"});
  $("#email_error").text("Email Must Be Filled And Valid!");
  $("#email_error").css({"margin-top":"5px"});
 }
 else
 {
  $("#email").css({"border":"1px solid grey"});
  $("#email_error").text("");
  $("#email_error").css({"margin-top":"0px"});
  count++;
 }
}

 function check_form()
{
 if(count==2)
 {
  return true;
 }
 else
 {
  alert("Error! Check All The Fields");
  return false;
 }
}