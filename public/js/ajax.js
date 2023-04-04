
$("#ident").on('change', function(){
    var table = $("#ident").find(":selected").val();
    console.log(table);
    $.ajax({
        type: "GET",
        url: "/vanssize/"+table,
        dataType: "json",
        success: function(data){
                $.each(data.data, function(key,val) {
                    uk=val.uk
                    eu=val.eu
                    usm=val.usm
                    usw=val.usw
                document.getElementById("size1").innerHTML = val.eu;
                document.getElementById("size2").innerHTML = val.uk;
                document.getElementById("size3").innerHTML = val.usm;
                document.getElementById("size4").innerHTML = val.usw;
                });
       },
        error: function(jqXhr, textStatus, errorMessage){
            console.log(errorMessage)
       }
   })
});



$("#ident2").on('change', function(){
    var table = $("#ident2").find(":selected").val();
    console.log(table);
    $.ajax({
        type: "GET",
        url: "/nikesize/"+table,
        dataType: "json",
        success: function(data){
                $.each(data.data, function(key,val) {
                    uk=val.uk
                    eu=val.eu
                    usm=val.usm
                    usw=val.usw
                document.getElementById("size5").innerHTML = val.eu;
                document.getElementById("size6").innerHTML = val.uk;
                document.getElementById("size7").innerHTML = val.usm;
                document.getElementById("size8").innerHTML = val.usw;
                });
       },
        error: function(jqXhr, textStatus, errorMessage){
            console.log(errorMessage)
       }
   })
});


$("#ident3").on('change', function(){
    var table = $("#ident3").find(":selected").val();
    console.log(table);
    $.ajax({
        type: "GET",
        url: "/adidassize/"+table,
        dataType: "json",
        success: function(data){
                $.each(data.data, function(key,val) {
                    uk=val.uk
                    eu=val.eu
                    usm=val.usm
                    usw=val.usw
                document.getElementById("size9").innerHTML = val.eu;
                document.getElementById("size10").innerHTML = val.uk;
                document.getElementById("size11").innerHTML = val.usm;
                document.getElementById("size12").innerHTML = val.usw;
                });
       },
        error: function(jqXhr, textStatus, errorMessage){
            console.log(errorMessage)
       }
   })
});


$("#ident4").on('change', function(){
    var table = $("#ident4").find(":selected").val();
    console.log(table);
    $.ajax({
        type: "GET",
        url: "/nbsize/"+table,
        dataType: "json",
        success: function(data){
                $.each(data.data, function(key,val) {
                    uk=val.uk
                    eu=val.eu
                    usm=val.usm
                    usw=val.usw
                document.getElementById("size13").innerHTML = val.eu;
                document.getElementById("size14").innerHTML = val.uk;
                document.getElementById("size15").innerHTML = val.usm;
                document.getElementById("size16").innerHTML = val.usw;
                });
       },
        error: function(jqXhr, textStatus, errorMessage){
            console.log(errorMessage)
       }
   })
});
