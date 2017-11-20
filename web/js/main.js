$(function () {
    $('#addLoginForm').on('click',function (event) {

       var pass1=$('#exampleInputPassword1').val();
       var pass2=$('#exampleInputPassword2').val();
       if(pass1!==pass2)
       {
           event.preventDefault();
           $('#textError').text('You enter wrong passwords');
       }
    });




    function wrongPass() {
        $('#wrong_pass>h1').text('Your password is not correct');
    }



$('.articleText').hide();


        $('.testB').on('click',function () {

            $('.articleText').show();
        });
        $('.testB1').on('click',function () {
            $('.articleText').hide();
        })













});




