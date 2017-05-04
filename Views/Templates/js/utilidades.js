function sendEmail(){
  var email=$('input[name=emailcontact]');
  console.log(email);

  email=email[0].value;

  var message=$('textarea[name=messagecontact]');
  console.log(message);

  message=message[0].value;
  console.log(email);
  console.log(message);
  // $.ajax({
  //   url: '../scriptphp/getultimocurso.php',
  //   type: 'GET',
  //   success: function (data) {
  //     var datos = data.split("-");
  //     location.href = URL+"administrativo";
  //     console.log('bien get' + datos);
  //   },
  //     error: function (e) {
  //       console.log('mal get');
  //     }
  //   });
  var formpost = new FormData();

  formpost.append('email', email);
  formpost.append('message', message);

    $.ajax({
      type: 'POST',
      url: "http://localhost/proyecto/dashboard/sendEmail",
      data:formpost,
      contentType: false,
      processData: false,

      success: function (data, textStatus, jqXHR) {
            console.log('-----------------------');
            console.log(data);

      },
      error: function (jqXHR, textStatus, errorThrown) {
                               //alert("didn't work!");
      }
      });

      // $.ajax({
      //   type: 'POST',
      //   url: "./scriptphp/email.php",
      //   data:formpost,
      //   contentType: false,
      //   processData: false,
      //
      //   success: function (data, textStatus, jqXHR) {
      //         console.log('-----------------------');
      //         console.log(data);
      //
      //   },
      //   error: function (jqXHR, textStatus, errorThrown) {
      //                            //alert("didn't work!");
      //   }
      //   });
}


function login(){
  var emaillogin=$('input[name=emaillogin]');
  console.log(emaillogin);

  emaillogin=emaillogin[0].value;

  var passlogin=$('input[name=passlogin]');
  console.log(passlogin);

  passlogin=passlogin[0].value;
  console.log(emaillogin);
  console.log(passlogin);

  var formpost = new FormData();

  formpost.append('emaillogin', emaillogin);
  formpost.append('passlogin', passlogin);
  $.ajax({
    type: 'GET',
    url: "http://localhost/proyecto/dashboard/login",
    data:formpost,
    contentType: false,
    processData: false,

    success: function (data, textStatus, jqXHR) {
          console.log('-----------------------');
          console.log(data);

    },
    error: function (jqXHR, textStatus, errorThrown) {
                             //alert("didn't work!");
    }
    });

}
