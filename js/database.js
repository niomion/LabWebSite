$('form').on('submit', function (e) {
    e.preventDefault();
    $("#err1").hide();
    $("#err2").hide();
    if ($("#fname").val() === '' || !isEmail($("#email").val()))  {
        if ($("#fname").val() === '') {
        $("#err1").show();
        $("#fname").focus();
        }
        if (!isEmail($("#email").val())) {
        $("#err2").show();
        $("#email").focus(); 
        }
        return false; } 
       else { $.ajax({
        type: 'post',
        url: 'database.php',
        data: $('form').serialize(),
        success: function () {
          alert('Thanks for subscription!');
        }
      });
      $('form').trigger("reset");
    }
});


function isEmail(email) {
    let regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
  }