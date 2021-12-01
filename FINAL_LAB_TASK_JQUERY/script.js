$("#submit").click(() => {
  let hasError = false;

  let name = $("#name").val();
  let email = $("#email").val();
  let gender = $("input[name='gender']:checked").val();
  let date = new Date($("#date").val());
  let bloodgroup = $("#bloodgroup").find(":selected").text();

  selectedDegrees = ['ssc', 'hsc', 'bsc', 'msc'].filter(degree => $(`#${degree}`).is(':checked'))

  
  if (name.length < 5) {
    $("#nameError").html("Name is not 5 char long");
    hasError = true;
  } else {
    $("#nameError").html("");
  }

  if (parseInt(date.getFullYear()) > 2003) {
    $("#dateOfBirthError").html(
      "You are not allowed to register as you are not 18 years old"
    );
    hasError = true;
  } else {
    $("#dateOfBirthError").html("");
  }

  if (!hasError) {
    alert("Submission Successfull");
  }
});
