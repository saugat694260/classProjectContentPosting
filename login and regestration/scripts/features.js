import {selectElementById} from '../../scripts/utils.js';
const showOrHidePasswordButton=selectElementById('show-or-hide-password-js');
const inputPassword=selectElementById('input-password-js');
let clicked=false;

showOrHidePasswordButton.addEventListener('click',(e)=>{
e.preventDefault();
if(clicked==false){
    showOrHidePasswordButton.textContent='Hide';
    inputPassword.type='text';
    clicked=true;
}
else if(clicked){
    showOrHidePasswordButton.textContent='Show';
    inputPassword.type='password';
    clicked=false;
}
});


