//Gestion du Regex dans le formulaire de contact par Max la Menace
//Dans un premier temps nous allons récupèrer les valeurs de chaque input du formulaire de contact

const userName = document.getElementById("name");
const userEmail = document.querySelector ("#mail");
const userMessage = document.querySelector("#msg");


//Nous allons initier les variables de validation

let nameValid = false;
let emailValid = false;
let messageValid = false;

//Nous allons mettre les expressions régulières (Regex) pour chaque champs du formulaire

const UserRegex = /^[a-zA-Z-]{3,23}$/;
const EmailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}$/;
const MessageRegex = /^[^<>{}$]{24,}$/;

//Nous allons faire une fonction addClass qui permet de renvoyer true ou false

function addClass(input , regex , value) {
    // console.log(arrayCompare.test(input.value));

    if (regex.test(value) === false) {
        //Si la value n'est pas conforme au regex, nous ajoutons une class "is-invalid" à notre input qui est dans le DOM
        input.classList.add("is-invalid");
        //Puis nous lui retirons la class "is-valid"
        input.classList.remove("is-valid");
    } else {
        //Dans le cas contraire, c'est-à-dire que la value est conforme au regex, nous ajoutons la class "is-valid" à notre input
        input.classList.add("is-valid");
        //Puis nous lui retirons la class "is-invalid"
        input.classList.remove("is-invalid");
    }
};

//Nous allons faire les écouteurs d'événement permettant d'écouter les événnements lorsque l'utilisateur rentre une donnée dans les inputs

userName.addEventListener("input", (e)=> {
    addClass(userName, UserRegex, e.target.value);
    if (userName.classList.contains("is-valid")) {
        nameValid = true;
    } else {
        nameValid = false;
    }
});

userEmail.addEventListener("input", (e)=> {
    addClass(userEmail, EmailRegex,  e.target.value);
    if (userEmail.classList.contains("is-valid")) {
        emailValid = true;
    } else {
        emailValid = false;
    }
});

userMessage.addEventListener("input", (e)=> {
    addClass(userMessage, MessageRegex, e.target.value);
    if (userMessage.classList.contains("is-valid")) {
        messageValid = true;
    } else {
        messageValid = false;
    }
});

//Maintenant nous allons gérer la soumission du formulaire, c'est-à-dire lorsque l'utilisateur clique sur le bouton envoyer
//récupération de la balise form qui contient tout le formulaire de contact
const form = document.querySelector('#formID');

//On initie la fonction qui permettra d'écouter l'événement submit, lorsque l'utilisateur soumettra le formulaire
form.addEventListener("submit", (e)=>{
    //on bloque la soumission automatique du formulaire
    e.preventDefault();

    //Nous vérifions que chaque champs du formulaire soit correct, si tout est correct tu envoyer le mail (&& firstnameValid && phonenumberValid && emailValid && subjectValid && messageValid)
    if (nameValid) {
        //Nous devons récupèrer les infos du formulaire
        let name = userName.value;
        let email = userEmail.value;
        // let sujet = userSubject.value;
        let discribe = userMessage.value;
        
        //Nous allons mettre ces informations dans un object appeler infoContact
        let infoContact = {
            name : name,
            email : email,
            // sujet : sujet,
            discribe : discribe,
        };

        //Nous allons faire la gestion d'envoie de mail
        Email.send({
            SecureToken : "fb807934-7f6c-47ac-8546-ce6f703c25db",
            To : "scellier.yoann@gmail.com",
            From : "scellier.yoann@gmail.com",
            Subject : 'hello world',
            Body: "Nom: " + infoContact.name + ", email: " + infoContact.email + ", message: " + infoContact.discribe
        }).then(
            message => alert("Votre message a bien été envoyé !"),
            error => alert("Une erreur s'est produite lors de l'envoi du message : " + error)
        );
    } else {
        //Sinon le programme lance une alert pour demander à l'utilisateur de rentrer correctement les champs du formulaire 
        alert ("Tout les champs ne sont pas rentrés ou ne sont pas valide, merci de rentrer correctement les champs du formulaire");
    }
});