// var modifier = document.getElementById('apparait');
// var newmdp = document.getElementById('newmdp');

// modifier.addEventListener('click', apparitionNewmdp);

// function apparitionNewmdp() {
//     newmdp.style.display = 'block';
// }

var modifieroffres = document.getElementById('modifieroffres')
var offre = document.getElementById('offre');

modifieroffres.addEventListener('click', apparitionsection3);

function apparitionsection3() {
    section3.style.display = "block";
    offre.style.display = "none"; 
}



// document.getElementById('apparait').onclick = function() {
//     //console.log("dedededed", document.getElementsByClassName('modif-info')); 
//     for(j = 0; j < 2; j++){ 
//     let modif = document.getElementsByClassName('modif-info');
//     modif.disabled = false;

//     console.log("lololol", modif);
//     }
    
// };

var appar = document.getElementById('apparait');
var modif = document.getElementsByClassName('modif-info');

appar.addEventListener('click', modification);

function modification() {

    modif.foreach.disabled = false; 

}



// $('#apparait').on('click',function(){
//     $('.modif-info').prop(disabled, false);
// });
