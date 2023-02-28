$.get("https://ipinfo.io", function(response) {
    console.log(response.city, response.country);
    phone = '866666666';
    if (response.city == 'Moscow'){
        phone = '8 800 747 46-77';
    }else if(response.city == 'Krasnodar'){
        phone = '8 800 234 46-77';
    }else if(response.city == null){
        phone = 'Не возможно определить регион'
    }
    $("#phone").html(phone);
    $("#footer_phone").html(phone);
    $("#country").html(response.country);
    $("#state").html(response.region);
    $("#city").html(response.city);
    $("#loc").html(response.loc);
    $("#provaider").html(response.org);

}, "jsonp");