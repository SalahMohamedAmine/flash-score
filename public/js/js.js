$(function()
{
    if($('.info').attr("data-info") == "index")
    {
       start();
    }

    var timer ;
    function start()
  {
    timer = setInterval(send, 1000);
    console.log("sended");
  }         

    $.ajax({
        url: "http://127.0.0.1:8000/foot2" ,
        type: "GET",
        dataType: "html",

    }).done(function (data) {
        
           
            var c = $(".table");
            c.empty();
            c.append(data.toString());
            
            
        });

        function stop()
        {
          clearInterval(timer);
        }

});