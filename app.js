const nom= document.getElementById('nomm')
const submit= document.getElementById('inscription')
submit.addEventListener("mouseover" , ()=> {
    if(nom.value== null){
        alert("Veillez remplir le champs nom");
    } else if(nom.value==''){
        alert("Ce champs ne peut pas être vide")
    } else{
        console.log('Valider');
    }
})

