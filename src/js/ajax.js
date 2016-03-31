$(document).ready(function() {
  // Selects the first radiobutton to be checked

  $( "#inlineRadio1" ).prop( "checked", true );
  var $barrelValue = 1;
  // This function retrieves the barrel position chosen by the user
  $("input:radio[name=barrelPosition]").click(function() {
    $barrelValue = $(this).val();
    console.log($barrelValue);
  });

  // AJAX-call to retrieve info from the back-end wheter the user lives or dies
  $("#PullTrigger").click(function(event){
    $.get(
      "./platform-src/index.php",
        { barrelValue: $barrelValue },
          function(data) {
            $('#ResultBox').html(data).hide().fadeIn(3500);
          });
  });
});
