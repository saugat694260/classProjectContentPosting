import {selectElementById} from './utils.js';
const openPostContainerBtn=selectElementById('open-post-container-js');
const postingContainer=selectElementById('posting-container-js');
const textArea=selectElementById('textArea-for-posting-js');


textArea.value.trim();

let openPostContainerBtnClicked=false;
openPostContainerBtn.addEventListener('click',()=>{

    if(openPostContainerBtnClicked==false){
        postingContainer.classList.add("show");
        openPostContainerBtnClicked=true;
    }
    else{
        postingContainer.classList.remove("show");
        openPostContainerBtnClicked=false;
    }
});


