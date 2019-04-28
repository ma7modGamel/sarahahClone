/*function addCardHtmlAfterClick(itemIwillAdd) {
    var itemINeedAddIt = ' <div class="card m-2">    ' +
        '        <div class="card-body border border-success">    ' +
        '            <div class="container">    ' +
        '                <div class="row">    ' +
        '                    <div class="col-1  rounded-circle">    ' +
        '    ' +
        '                        <img src="mariologo.png " style="width: 70px; height: 70px">    ' +
        '                    </div>    ' +
        '                    <div class="col-11 ">    ' +
        '                        <h4 class=" ">' + itemIwillAdd + '</h4>    ' +
        '                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been    ' +
        '                            the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley    ' +
        '                            of type and scrambled it to make a type specimen book.the industry\'s standard dummy text ever since the    ' +
        '                            1500s</span>    ' +
        '                    </div>    ' +
        '    ' +
        '                </div>    ' +
        '            </div>    ' +
        '        </div>    ' +
        '    </div>'
    return itemINeedAddIt;
}

var EditText = document.getElementById('exampleFormControlTextarea1')
var BtnAddNewItem = document.getElementById('BtnAddNewItem');
var containerCards = document.getElementById('containerCards');


BtnAddNewItem.addEventListener('click', function (e) {
    e.preventDefault();
    var valueOfEditText = EditText.value;

    var layoutBack = addCardHtmlAfterClick(valueOfEditText);

    containerCards.innerHTML =containerCards.innerHTML+ layoutBack;

});

*/


/*
var x={
    ageY:function () {

    }
}

console.log(x.ageY);
/*


*/


/*
function Personal(fname, lname, address, ageage, gender) {

    this.firstName = fname;
    this.lastName = lname;
    this.address = address;
    this.ageage = ageage;
    this.gender = gender;


}
*/

//
//
// Personal.prototype.getFullname=function () {
//
//     return this.firstName+" "+this.lastName;
// }
// Personal.prototype.getAge=function () {
//
//     return this.ageage;
// }
//
//
// var x=new Personal('xxx','yyy','fff',50,'ppp');
// console.log(x.getFullname());
// console.log(x.getAge());
// console.log(x.ageage);
// console.log(x.lastName);
// console.log(x.firstName);
// console.log(x.address);
// console.log(x.gender);
// ;


var btnAdd = document.getElementById("BtnAddNewItem");
var et_value = document.getElementById("exampleFormControlTextarea1");
var div_container = document.getElementById("containerCards");

var mMail = document.getElementById("mMail");
var RadioActive = document.getElementById("active");
var RadioDeActive = document.getElementById("deactive");
var count = 100;

function checkStates() {
    var Flag = 0;

    if (RadioActive.checked) {
        Flag = 1;
        return Flag;
    } else {
        Flag = 0;
        return Flag;
    }
}

function addNewCard(etValue) {
    var states = checkStates();

    count = count + 1;
    var sHtml = '';
    var imgState = '';
    ////////////////////////////////////////
    if (states == 0) {

        sHtml = '<span id="span-' + count+'" class=" bg-warning rounded text-light" >deActive</span> ';
        imgState = '<button  class="btn btn-success" id="btnToggle-' + count + '" style="\n' +
            '    margin-bottom: 0px;\n' +
            '    margin-top: 0px;\n' +
            '    padding-bottom: 0px;\n' +
            '    padding-top: 1px;\n' +
            '    padding-right: 4px;\n' +
            '    padding-left: 4px;\n' +
            '    height: 27.979166px;\n' +
            '    border-bottom-width: 1px;"  ><i class="fa fa-eye" ></i>';
    } else if (states == 1) {

        sHtml = '<span id="span-' + count+'" class=" bg-success rounded text-light" >Active</span> ';
        imgState = '<button  class="btn btn-warning" id="btnToggle-' + count + '" style="\n' +
            '    margin-bottom: 0px;\n' +
            '    margin-top: 0px;\n' +
            '    padding-bottom: 0px;\n' +
            '    padding-top: 1px;\n' +
            '    padding-right: 4px;\n' +
            '    padding-left: 4px;\n' +
            '    height: 27.979166px;\n' +
            '    border-bottom-width: 1px;" ><i class="fa fa-eye-slash" ></i>'

    }

    if (etValue == "") {
        alert("enter Mail");

        return "";
    } else if (mMail.value == "") {
        alert("enter text");
        return "";
    } else if (mMail.value != "" && etValue != "") {


        var itemHTML = '<div  class="card m-2" id="card-' + count + '">' +
            '<div class="card-body border border-success"><div class="container"><div class="offset-9"><div  style=" text-align: right ;"> ' + imgState + '' +
            '<button class="m-1 btn btn-danger" style="\n' +
            '    margin-bottom: 0px;\n' +
            '    margin-top: 0px;\n' +
            '    padding-bottom: 0px;\n' +
            '    padding-top: 1px;\n' +
            '    padding-right: 4px;\n' +
            '    padding-left: 4px;\n' +
            '    height: 27.979166px;\n' +
            '    border-bottom-width: 1px;" id="btnclose-' + count + '">' +
            '<i  class="fa fa-window-close" ></i> </button>' +
            '</div></div><div class="row"><div class="col-1  text-center " style="padding-right: 0px; padding-left: 0px;"><img src="mariologo.png " style="width: 70px;height: 70px;margin-bottom: 2px;">' + sHtml + '</div><div class="col-11 "> <h4 class=" ">' + etValue + '</h4> ' + '<span>' + mMail.value + '</span><div class="mt-2 ml-2 "><span class="m-2 d-inline-flex bg-primary text-light rounded"><h6 class="m-2 ">like</h6></span><span class="m-2 d-inline-flex bg-primary text-light rounded"><h6 class="m-2 ">Comment</h6></span><span class="m-2 d-inline-flex bg-primary text-light rounded"><h6 class="m-2 ">Share</h6></span></div></div> </div></div></div></div>';


        return itemHTML;
    }


}


btnAdd.addEventListener('click', function (e) {
    e.preventDefault();
    var flag = checkStates();
    var valOf_ET = et_value.value;
    var valOf_MAil = mMail.value;
    var itemComplet = addNewCard(et_value.value, flag);
    if (itemComplet != "") {
        div_container.innerHTML = div_container.innerHTML + itemComplet;

        var elementRemoved = document.getElementById("card-" + count);
        var btnRemove = document.getElementById("btnclose-" + count);
        btnRemove.addEventListener("click", function (e) {
            e.preventDefault();
            var r = confirm("Press a button!");
            if (r == true) {
                elementRemoved.remove();
            }
        });

        var btnToogle = document.getElementById("btnToggle-" + count);
        var spanId = document.getElementById("span-" + count);

        $(btnToogle).click(function () {

            if($(btnToogle).attr("class")!="btn btn-warning") {
                $(btnToogle).attr("class", "btn btn-warning");
                $(spanId).text("Active");
                $(spanId).attr("class","bg-success rounded text-light")

            } else{

                $(btnToogle).attr("class", "btn btn-success");
                $(spanId).text("DeActive");
                $(spanId).attr("class","bg-warning rounded text-dark")


            }
        });


        et_value.value = "";
        mMail.value = "";
        RadioDeActive.checked = false;
        RadioActive.checked = false;
    }
});



