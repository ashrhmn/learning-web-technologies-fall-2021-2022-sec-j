$("#submit").click(() => {
  let name = $("#name").val();
  let email = $("#email").val();
  let gender = $("input[name='gender']:checked").val();
  let date = new Date($("#date").val());
  console.log(date);
  if (email.length < 5) {
    $("#emailError").html("Error email");
  }
});
