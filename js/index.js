//-------------------------------------------------------------- FORMULAIRE --------------------------------------------------------------


function validForm(){ //fonction générale

    if(checkLastName()&&checkLastName()){ //vérification que les fonctions renvoyent true
        console.log("true");

    }else{ //entrée en console si une fonction renvoye "false"
        console.log("false");
    }
}

function checkColorTrue(input){ //fonction de vérification d'input juste
    var input = document.getElementById(input); //change la couleur de l'input
    input.style.border = "1px solid green"; //specifitées du changement de couleur de l'input
}

function checkColorErr(input){ //fonction de vérification d'input faux
    var input = document.getElementById(input); //change la couleur de l'input
    input.style.border = "1px solid red"; //specifitées du changement de couleur de l'input
}

//-------------------------------------------------------------- NOM --------------------------------------------------------------

function checkLastName(){ //création de la fonction pour la vérification du nom

var lastname = document.getElementById("lastname").value; //création de la variable pour la récupération de l'input dans le html

var regEx = /^[a-z]+$/i; //création de l'expression régulière pour la vérification que le nom contient que des lettres et pas de nombres

if(regEx.test(lastname)){ //boucle de vérification si l'entrée utilisateur est juste
   
    var feedbacklastname = document.getElementById("feedbacklastname"); 
    
    checkColorTrue("lastname"); //feedback utilisateur couleur "true"
    feedbacklastname.textContent = "Nom valide"; //feedback utilisateur "true"

    return true; 

    }else if(lastname ==""){ //boucle de vérification si il n'y a pas d'entrée utilisateur 

        var feedbacklastname = document.getElementById("feedbacklastname");

         checkColorErr("lastname"); //feedback utilisateur couleur "false"
         feedbacklastname.textContent = "Veuillez renseigner ce champ"; //feedback utilisateur "vide"

         return false;

    }else{ //boucle de vérification si l'entrée utilisateur est fausse

        var feedbacklastname = document.getElementById("feedbacklastname");

         checkColorErr("lastname"); //feedback utilisateur couleur "false"
         feedbacklastname.textContent = "Nom invalide"; //feedback utilisateur "false"
    
         return false;
    }
}

//-------------------------------------------------------------- PRENOM --------------------------------------------------------------

function checkName(){ //création de la fonction pour la vérification du prénom

    var name = document.getElementById("name").value; //création de la variable pour la récupération de l'input dans le html
    
    var regEx = /^[a-z]+$/i; //création de l'expression régulière pour la vérification que le nom contient que des lettres et pas de nombres
    
    if(regEx.test(name)){ //boucle de vérification si l'entrée utilisateur est juste
       
        var feedbackname = document.getElementById("feedbackname");
    
        checkColorTrue("name"); //feedback utilisateur couleur "true"
        feedbackname.textContent = "Prénom valide"; //feedback utilisateur "true"
    
        return true;
    
        }else if(name ==""){ //boucle de vérification si il n'y a pas d'entrée utilisateur 
    
            var feedbackname = document.getElementById("feedbackname");
    
             checkColorErr("name"); //feedback utilisateur couleur "false"
             feedbackname.textContent = "Veuillez renseigner ce champ"; //feedback utilisateur "vide"
    
             return false;
    
        }else{ //boucle de vérification si l'entrée utilisateur est fausse
    
            var feedbackname = document.getElementById("feedbackname");
    
            checkColorErr("name"); //feedback utilisateur couleur "false"
            feedbackname.textContent = "Prénom invalide"; //feedback utilisateur "false"
        
             return false;
    
        }
    }

//-------------------------------------------------------------- MAIL --------------------------------------------------------------


    function checkMail(){ //création de la fonction pour la vérification du mail

        var mail = document.getElementById("mail").value; //création de la variable pour la récupération de l'input dans le html
        
        var regEx = /^[a-z0-9][a-z0-9.-_]+@[a-z0-9.-_]+\.[a-z]{2,}$/; //création de l'expression régulière pour la vérification que le mail commence par une lettre ou un nombre, comporte un arobase, un point et ne finit pas par un caractère spécial
        
        if(regEx.test(mail)){ //boucle de vérification si l'entrée utilisateur est juste
        
            var feedbackmail = document.getElementById("feedbackmail");
        
            checkColorTrue("mail"); //feedback utilisateur couleur "true"
            feedbackmail.textContent = "Mail valide"; //feedback utilisateur "true"
        
            return true;
        
            }else if(mail ==""){ //boucle de vérification si il n'y a pas d'entrée utilisateur 
        
                var feedbackmail = document.getElementById("feedbackmail");
        
                 checkColorErr("mail"); //feedback utilisateur couleur "false"
                 feedbackmail.textContent = "Veuillez renseigner ce champ"; //feedback utilisateur "false"
    
                 return false;
        
            }else{ //boucle de vérification si l'entrée utilisateur est fausse
        
                var feedbackmail = document.getElementById("feedbackmail");
        
                checkColorErr("mail"); //feedback utilisateur couleur "false"
                feedbackmail.textContent = "Mail invalide"; //feedback utilisateur "false"
            
                 return false;
        
            }
        }

//-------------------------------------------------------------- DATE --------------------------------------------------------------


function checkDate(){ //création de la fonction pour la vérification du date

    var date = document.getElementById("date").value; //création de la variable pour la récupération de l'input dans le html
    
    var regEx = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/; //création de l'expression régulière pour la vérification que le date commence par une lettre ou un nombre, comporte un arobase, un point et ne finit pas par un caractère spécial
    
    if(regEx.test(date)){ //boucle de vérification si l'entrée utilisateur est juste
    
        var feedbackdate = document.getElementById("feedbackdate");
    
        checkColorTrue("date"); //feedback utilisateur couleur "true"
        feedbackdate.textContent = "date valide"; //feedback utilisateur "true"
    
        return true;
    
        }else if(date ==""){ //boucle de vérification si il n'y a pas d'entrée utilisateur 
    
            var feedbackdate = document.getElementById("feedbackdate");
    
             checkColorErr("date"); //feedback utilisateur couleur "false"
             feedbackdate.textContent = "Veuillez renseigner ce champ"; //feedback utilisateur "false"

             return false;
    
        }else{ //boucle de vérification si l'entrée utilisateur est fausse
    
            var feedbackdate = document.getElementById("feedbackdate");
    
            checkColorErr("date"); //feedback utilisateur couleur "false"
            feedbackdate.textContent = "Date invalide"; //feedback utilisateur "false"
        
             return false;
    
        }
    }






    //-------------------------------------------------------------- Ville --------------------------------------------------------------

function checkCity(){ //création de la fonction pour la vérification du nom

    var city = document.getElementById("city").value; //création de la variable pour la récupération de l'input dans le html
    
    var regEx = /^[a-z]+$/i; //création de l'expression régulière pour la vérification que le nom contient que des lettres et pas de nombres
    
    if(regEx.test(city)){ //boucle de vérification si l'entrée utilisateur est juste
       
        var feedbackcity = document.getElementById("feedbackcity"); 
        
        checkColorTrue("city"); //feedback utilisateur couleur "true"
        feedbackcity.textContent = "Ville valide"; //feedback utilisateur "true"
    
        return true; 
    
        }else if(city ==""){ //boucle de vérification si il n'y a pas d'entrée utilisateur 
    
            var feedbackcity = document.getElementById("feedbackcity");
    
             checkColorErr("city"); //feedback utilisateur couleur "false"
             feedbackcity.textContent = "Veuillez renseigner ce champ"; //feedback utilisateur "vide"
    
             return false;
    
        }else{ //boucle de vérification si l'entrée utilisateur est fausse
    
            var feedbackcity = document.getElementById("feedbackcity");
    
             checkColorErr("city"); //feedback utilisateur couleur "false"
             feedbackcity.textContent = "Ville invalide"; //feedback utilisateur "false"
        
             return false;
        }
    }
