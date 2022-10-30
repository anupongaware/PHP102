// jQuery Script

$(document).ready(function () {
  // POST method
  $("#send").click(function () {
    var text = $("#text").val();
    var username = $("#username").val();
    $.post(
      "chat_send_text.php",
      {
        username: username,
        text: text,
      },
      function (data, status) {}
    );
  });

  $.get("chat_get_text.php", function (data, status) {
    // alert("Data: " + data + "\nStatus: " + status);
    var json_data = JSON.parse(data);
    for ($i = 0; $i < json_data.length; $i++) {
      $("#content").append("<p>" + json_data[$i] + "</p>");
    }
  });
  // Get message to appear in dashboard
  setInterval(function () {
    // GET Method
    $.get("chat_get_text.php", function (data, status) {
      // alert("Data: " + data + "\nStatus: " + status);
      $("#content").empty();
      var json_data = JSON.parse(data);
      for ($i = 0; $i < json_data.length; $i++) {
        $("#content").append("<p>" + json_data[$i] + "</p>");
      }
    });
  }, 500);
});
