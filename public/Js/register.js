$(document).ready(function () {

 

    $(".login").submit(function (event)
    {
       
        var firstName = $("#firstname").val();
        var lastName = $("#lastname").val();
        var gender = $("#gender").val();
        var email = $("#username").val();
        var password = $("#password").val();
        var conformPassword = $("#conformpassword").val();
        if (firstName == null || firstName == "")
        {
            $("#firstname").css({"color": "red", "border": "red solid 1px"});
            $("#namelocation").html("Please enter your FirstName");
            event.preventDefault();
        } else
        {
           
            $("#namelocation").html('');
        }

        if (lastName == null || lastName == "")
        {
            $("#lastname").css({"color": "red", "border": "red solid 1px"});
            $("#lastnamelocation").html("Please enter your LastName");
            event.preventDefault();
        } else
        {
           
            $("#lastnamelocation").html('');
        }
        if (email == null || email == "")
        {
            $("#username").css({"color": "red", "border": "red solid 1px"});
            $("#emaillocation").html("Please enter your Email Address");
            event.preventDefault();
        } else
        {
          
            $("#emaillocation").html('');
        }

        if (password == null || password == "")
        {
            $("#password").css({"color": "red", "border": "red solid 1px"});
            $("#passwordlocation").html("Please enter your Password");
            event.preventDefault();
        } else
        {
            
            $("#passwordlocation").html('');
        }



        if (conformPassword == null || conformPassword == "")
        {
            $("#conformpassword").css({"color": "red", "border": "red solid 1px"});
            $("#conformpasswordlocation").html("Password Should be Same!");
            event.preventDefault();
        } else
        {
           
            $("#conformpasswordlocation").html('');
        }
        if (gender == null || gender == "")
        {
            $("#gender").css({"color": "red", "border": "red solid 1px"});
            $("#genderlocation").html("Please enter your Gende Id");
            event.preventDefault();
        } else
        {
           
            $("#genderlocation").html('');
        }


    });
       $("#firstname").keyup(function () {
        var FirstName = $("#firstname").val();

        if (FirstName == null || FirstName == "")
        {
            $("#firstname").css({"color": "red", "border": "red solid 1px"});
            $("#namelocation").html("Please enter your FirstName");

        } else
        {
            $("#firstname").css({"color": "blue", "border": "blue solid 1px"}).html("");
            $("#namelocation").html('');
        }

    });
    $("#lastname").keyup(function () {
        var LastName = $("#lastname").val();

        if (LastName == null || LastName == "")
        {
            $("#lastname").css({"color": "red", "border": "red solid 1px"});
            $("#lastnamelocation").html("Please enter your LastName");

        } else
        {
            $("#lastname").css({"color": "blue", "border": "blue solid 1px"}).html("");
            $("#lastnamelocation").html('');
        }

    });
    $("#gender").keyup(function () {
        var Gender = $("#gender").val();

        if (Gender == null || Gender == "")
        {
            $("#gender").css({"color": "red", "border": "red solid 1px"});
            $("#genderlocation").html("Please enter your Gende Id");

        } else
        {
            $("#gender").css({"color": "blue", "border": "blue solid 1px"}).html("");
            $("#genderlocation").html('');
        }

    });

    $("#username").keyup(function () {

        var Email = $("#username");
        var EmailAt = Email.val().indexOf("@");
        var EmailDot = Email.val().indexOf(".");

        if (EmailAt == -1 || EmailDot == -1 || (EmailAt + 2) >= EmailDot)
        {

            $("#username").css({"color": "red", "border": "red solid 1px"});
            $("#emaillocation").html(" should be @,(.)after @, minimum 2 characters after(.), minimum 5 characters before @");

        } else
        {
            $("#username").css({"color": "blue", "border": "blue solid 1px"}).html("");
            $("#emaillocation").html('');
        }
    });
    $("#password").keyup(function () {
        var Password = $("#password").val();

        if (Password == null || Password == "")
        {
            $("#password").css({"color": "red", "border": "red solid 1px"});
            $("#passwordlocation").html("Please enter your Password");

        } else
        {
            $("#password").css({"color": "blue", "border": "blue solid 1px"}).html("");
            $("#passwordlocation").html('');
        }

    });

    $("#conformpassword").keyup(function () {
        var ConformPassword = $("#conformpassword").val();

        if (ConformPassword == null || ConformPassword == "")
        {
            $("#conformpassword").css({"color": "red", "border": "red solid 1px"});
            $("#conformpasswordlocation").html("Password Should be Same!");

        } else
        {
            $("#conformpassword").css({"color": "blue", "border": "blue solid 1px"}).html("");
            $("#conformpasswordlocation").html('');
        }

    });
  
    
    
  

});