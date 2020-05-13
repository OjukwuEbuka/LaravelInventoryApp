import AJAX_OPERATION, { initMaterializeComponents} from '../util/utility.js';

$(document).ready(function () {

    /**guardian Object Data */
    const guardianObj = {};
    let sessionId = document.querySelector('#sessionId') ? document.querySelector('#sessionId').value : null;
    let schoolId = document.querySelector('#schoolId') ? document.querySelector('#schoolId').value : null;
    // declare an object for all the possible forms or form content
    const formObj = {"staff":{}, "nok":{}, "guardian":{}, "std":{}, "prt":{}, "section":{}, "schDet":{ sessionId, schoolId }};

    /**Initializes DataTable */
    // 

    /**Initializes All Materialize Components */
    initMaterializeComponents();


});
