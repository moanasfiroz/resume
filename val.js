const hamburger = document.querySelector('.hamburger');
const navList = document.querySelector('.nav-list');
 hamburger.addEventListener('click', () => {
    navList.classList.toggle('show');
 });


function validation(){

var Fname = document.getElementById('fname').value;
var Lname = document.getElementById('lname').value;
var Gmail = document.getElementById('email').value;
var City = document.getElementById('city').value;
var Message = document.getElementById('message').value;

if(Fname == ""){

    document.getElementById('main').innerHTML = "Please Fill Frist Name";
    document.getElementById('main').style.color = "red";
    document.getElementById('fname').style.background = "red";
    return;
}else document.getElementById('main').style.color = "transparent";
      document.getElementById('fname').style.background = "";



      if(Lname == ""){

        document.getElementById('main').innerHTML = "Please Fill Last Name";
        document.getElementById('main').style.color = "red";
        document.getElementById('lname').style.background = "red";
        return;
    }else document.getElementById('main').style.color = "transparent";
          document.getElementById('lname').style.background = "";
    
          if(Gmail == ""){

            document.getElementById('main').innerHTML = "Please Fill Gmail";
            document.getElementById('main').style.color = "red";
            document.getElementById('email').style.background = "red";
            return;
        }else document.getElementById('main').style.color = "transparent";
              document.getElementById('email').style.background = "";



              if(City == ""){

                document.getElementById('main').innerHTML = "Please Fill Gmail";
                document.getElementById('main').style.color = "red";
                document.getElementById('city').style.background = "red";
                return;
            }else document.getElementById('main').style.color = "transparent";
                  document.getElementById('city').style.background = "";
    

                  
                  if(Message == ""){

                    document.getElementById('main').innerHTML = "Please Fill Gmail";
                    document.getElementById('main').style.color = "red";
                    document.getElementById('message').style.background = "red";
                    return;
                }else document.getElementById('main').style.color = "transparent";
                      document.getElementById('message').style.background = "";
                      document.getElementById('main').innerHTML = "Just Wait";
                      document.getElementById('main').style.color = "green";
                

                       var location = window.location.href;
                       document.getElementById('error').style.display= "none";
                       alert("Thank you for Send Me Message");
                $.ajax({

                 type: "POST",
                 url : "insert.php",
                 data : {Fname:Fname, Lname:Lname, Gmail:Gmail, City:City, Message:Message, page:location },

                });
                window.location.href = location;
                      
        


}


