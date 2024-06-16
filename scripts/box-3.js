import {selectElementById} from './utils.js';
const box3MainContainer=selectElementById('box-3-main-container-js');
const sun=document.createElement("div");
sun.classList.add('sun');
box3MainContainer.appendChild(sun);

const containerWidth=box3MainContainer.offsetWidth;
const containerHeight=box3MainContainer.offsetHeight;

let starsNumbers=80;
for(let i=0;i<=starsNumbers;i++){
    const randomContainerWidth=Math. random() * (containerWidth -0) + 0;
    const randomContainerHeight=Math. random() * (containerHeight/3 -0) + 0;

    const randomNumbers=Math. random() * (6 -0) + 0;

    const stars=document.createElement("div");
    stars.setAttribute("id","stars"+i);
    stars.setAttribute("class","stars");
    box3MainContainer.appendChild(stars);
    
    selectElementById('stars'+i).style.left=randomContainerWidth+"px";
    selectElementById('stars'+i).style.bottom=randomContainerHeight+"px";
    selectElementById('stars'+i).classList.add("animate-stars");
    selectElementById('stars'+i).style.width=randomNumbers+"px";
    selectElementById('stars'+i).style.height=randomNumbers+"px";
    //test(i);
    
}


/**
 * function test(i){
  setInterval(()=>{

    const randomNumbers=Math. random() * (8 -0) + 0;
    selectElementById('stars'+i).style.width=randomNumbers+"px";
    selectElementById('stars'+i).style.height=randomNumbers+"px";
  },1000);
}
 */
