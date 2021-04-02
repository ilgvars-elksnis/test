function validation() {
    var email = document.getElementById('email').value;
    var button = document.getElementById('button');
    var errorText = document.getElementById('error');
    var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,5}$/;
    var co = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.co$/;
    

    if (email.match(pattern)) {
        button.removeAttribute("disabled")
        errorText.innerHTML = "";
    }

   
    else {
        errorText.innerText = "Please provide valid e-mail address"
        button.setAttribute("disabled", true)
    }

    if (email.match(co)) {
        button.setAttribute("disabled", true)
        errorText.innerHTML = "We are not accepting subscriptions from Colombia emails";
    }

    if (email == "") {
        button.setAttribute("disabled", true)
        errorText.innerHTML = "Email address is required";
    }

    if (document.getElementById('box').checked === false) {
        errorText.innerText = "You must accept terms and conditions"
        button.setAttribute("disabled", true)
    }
    
    

}

 const form = document.getElementById('form');
 const congrats = document.getElementById ('congrats')

 form.addEventListener("submit", (validation) =>{
     validation.preventDefault();
     validation = true ;
     form.classList.add('hidden');
     congrats.classList.remove('hidden')
 } )


