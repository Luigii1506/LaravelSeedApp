$(function () {
    $("#buttonCreateBook").click(function(){ 
        window.location.href = "{{ route('home')}}";
    });
    $('table tr').click(function(){
        window.location = $(this).attr('href');
        return false;
    });
});