$(documment).ready(function(){
    $('#nameSearch').keyup(function(){
       
       $.ajax({
           type: 'POST',
           url: '../../controller/readstudent.controller.php',
           data: 'keyword='+$(this).val(),
           beforeSend: function(){
               $('nameSearch').css('background','#FFF url(LoaderIcon.gif) no-repeat 165px');
           },
           success: function(data){
               $('#suggestion-box').show();
               $('#suggestion-box').html(data);
               $('#suggestion-box').css('background','#FFF');
           }
       });
        
    });
});


// To select student name
function selectStudent(val) {
    $('#nameSearch').val(val);
    $('#suggestion-box').hide();
}