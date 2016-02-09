$("body").on("click","#login",function()
{
    var x=$("#userName").val();
    var y=$("#password").val();
    $.ajax({
        url:"../Ajax/Request.php",
        data: "userName="+x+"&password="+y+"&action=cheack",
        type:"POST",
        success: function(msg)
        {
            alert(msg);
        }


    });
//alert(x+""+ y);
});
