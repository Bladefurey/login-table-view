$(document).ready(function(){

    $("#login").click(function(){
       
    if($("#name").val()=="")
    {
        
       // document.getElementById("nameerror").text="Please enter";
        $("#nameerror").text("Please enter username");
    }
    else
    {
        $("#nameerror").text("");  
    }
    if($("#pwd").val()=="")
    {
        
        //document.getElementById("nameerror").text="Please enter";
        $("#pwerror").text("Please enter password");
    }
    else
    {
        $("#pwerror").text(""); 
    }
    if($("#name").val()!="" && $("#pwd").val()!="")
    {
        return true;
    }
    else
        return false;
    })
    
    })