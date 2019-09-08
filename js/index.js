$('#findMySelect').click(function(event){
    event.preventDefault();

    if ($('#city').val() !=""){
        $.get("./seaper.php?city="+$('#city').val(), function(data){
            if(data == ""){
                $('#fail').fadeIn();
            } else {
                $('#success').html(data).fadeIn();
            }
        });

    } else {
        $('#noCity').fadeIn();
    }

});