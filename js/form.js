$(document).ready(function () {
  $("form").on("submit", function (e) {
    e.preventDefault();

    var form = $(this);

    var name = form.find('input[name="name"]').val();
    var email = form.find('input[name="email"]').val();
    var password = form.find('input[name="password"]').val();

    $.ajax({
      type: "POST",
      url: "form1.php",
      data: {
        name: name,
        email: email,
        password: password,
      },
      success: function (response) {
        alert("Data added successfully!");

        $(".add").load(location.href + " .add");
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error("Error submitting the form:", textStatus, errorThrown);
      },
    });
  });
});
