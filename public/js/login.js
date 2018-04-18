
var s,
Login = {

  settings: {
    email: $("#inputEmail1"),
    password: $("#inputPassword1"),
    submitButton: $("#submitLogin")
  },

  init: function() {
    s = this.settings;
    this.bindUIActions();
  },

  bindUIActions: function() {

    s.submitButton.on("click", function(event) {
      console.log('click submit');
      event.preventDefault();
      Login.loginPost(s.email.val(),s.password.val());
    });

  },

  loginPost: function(email,password) {

    /*$.ajax({
      xhr: function() {
        var xhr = new window.XMLHttpRequest();

        // Upload progress
        xhr.upload.addEventListener("progress", function(evt){
            if (evt.lengthComputable) {
                var percentComplete = evt.loaded / evt.total;
                //Do something with upload progress
                console.log(percentComplete);
            }
       }, false);

       // Download progress
       xhr.addEventListener("progress", function(evt){
           if (evt.lengthComputable) {
               var percentComplete = evt.loaded / evt.total;
               // Do something with download progress
               console.log(percentComplete);
           }
       }, false);

       return xhr;
      },
      url: "/loginSubmit",
      email: email,
      password: password
      
    }).done(function() {
      console.log('hola');
    });*/

    /*$.ajax ({
            type: "POST",
            url: "/loginSubmit",
            data: {
              email: email,
              password: password
            },
        }).done(function(res){

          
        console.log('SUCCESS');

        }).fail(function(){
                   
          console.log('error');
        });*/
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        console.log("hola");
        $.ajax ({
            type: "POST",
            url: "/loginSubmit",
            contentType: "application/json",
            dataType: "json",
            data: {
              email: email,
              password: password
            },
        }).done(function(res){

          
        console.log('SUCCESS');

        }).fail(function(){
                   
          console.log('error');
        });

        /*$.ajax({

            type: "POST",
            url: "http://192.168.10.10/loginSubmit",
            data:{
              email: email,
              password: password
            },
            success: function (data) {
              console.log("helloooooooooo")
                console.log(data);

               
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });*/
     
  }

};


Login.init();




  