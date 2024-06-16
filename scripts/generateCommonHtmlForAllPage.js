import {selectElementById} from './utils.js';



const pageFooterContainer=selectElementById('page-footer-container-js');
if(pageFooterContainer){
    
    let footerHtml='';

        footerHtml=`
        <div class="page-footer">
        <div class="page-footer-content-1">
        <div><a href="">terms and policy</a></div>
        <div><a href="">customer support</a></div>
        <div><a href=""> contact us</a></div>
        <div><a href="">hell yeah</a></div>
        <div><a href="">insta</a></div>
        <div><a href="">teitter</a></div>
        </div>
        <div class="page-footer-content-2">
        <p>copyright law and shit and goverment under</p>
        </div>

        </div>
        </div>
        `;
    pageFooterContainer.innerHTML+=footerHtml;
};
const searchOptionsDiv=selectElementById('search-options-div');
if(searchOptionsDiv){
    let searchOptionsDivHtml='';

        searchOptionsDivHtml=`
        <input class="input-text-for-searching" type="text"><button class="search-button">searcg</button>
        `;
    searchOptionsDiv.innerHTML+=searchOptionsDivHtml;
}
console.log(selectElementById('search-options-div'));
console.log('hi');

