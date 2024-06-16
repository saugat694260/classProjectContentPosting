//for id
export function selectElementById(id){
    let element=document.getElementById(id);
    return element;
}
//for tagname
export function selectElementByTagName(tag){
    let element=document.getElementsByTagName(tag);
    return element;
}