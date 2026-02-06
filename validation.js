function validate(){
            let fname = document.getElementById("first").value;
            if(fname=== ""){
                document.getElementById("firstname_error").innerText="please enter your first name";
                return false;
            }

            let lname = document.getElementById("last").value;
            if(lname === ""){
                document.getElementById("lastname_error").innerText="please enter your last name";
                return false;
            }

            let emailid = document.getElementById("email").value;
            if(emailid === ""){
                document.getElementById("email_error").innerText="please enter your email address";
                return false;
            }
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if(!emailid.match(mailformat)){
                document.getElementById("email_error").innerText="Invalid email";
                return false;
            }

            let pw = document.getElementById("password").value;
            if(pw === ""){
                document.getElementById("password_error").innerText="please enter your password";
                return false;
            }
            else{
                if(pw.length < 6){
                    document.getElementById("password_error").innerText = "must be 6 characters long"
                    return false;
                }
            }

            

            return true;
        }