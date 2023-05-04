let info = []
let alert_arr =[]
let email_format = new RegExp("[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$")
let number_format = new RegExp("[0-9]{10}")
let postcode_format  = new RegExp("[0-9]{5}")



function filterArr(node) {
    message = `${node} must be filled`
    alert_arr.filter(alert => alert != obj[node] )
    console.log(alert_arr)
}
function validateTextValues(node) {
    input_node = document.getElementById(node)
    alert_node = document.getElementsByClassName(node)[0]
    if (input_node.value == "" || input_node.value == null) {
        // alert("value not valid")
        filterArr(node)
        message = `${node} must be filled`
        alert_node.textContent = message
        obj={}
        obj[node] = message
        alert_arr.push(obj)
      //  console.log(alert_arr);
    }
    else {
        alert_node.textContent = ""
        obj = {}
        obj[node] = input_node.value
        info.push(obj)
        
    }
}
function validateSelect(node) {
    input_node = document.getElementById(node)
    alert_node = document.getElementsByClassName(node)[0]
    if (input_node.value == "") {
        // alert("value not valid")
        filterArr(node)
        message = `${node} must be filled`
        alert_node.textContent = message
        obj={}
        obj[node] = message
        alert_arr.push(obj)
        // console.log(alert_arr);
    }
    else {
        alert_node.textContent = ""
        filterArr(node)
        obj = {}
        obj[node] = input_node.value
        info.push(obj)
        
    }
}

function validateEmail(node) {
    input_node = document.getElementById(node)
    alert_node = document.getElementsByClassName(node)[0]
    if (input_node.value == "" || input_node.value == null) {
        message = `${node} must be filled`
        alert_node.textContent = message
        obj={}
        obj[node] = message
        filterArr(node)
        alert_arr.push(obj)
        // console.log(alert_arr);
    }
    else if (email_format.test(input_node.value) == true) {
        alert_node.textContent = ""
                filterArr(node)
        obj = {}
        obj[node] = input_node.value
        info.push(obj)
        
    }
    else {
        message = `enter a valid ${node} `
        alert_node.textContent = message
        filterArr(node)
        obj={}
        obj[node] = message
        alert_arr.push(obj)   
        
    }

}
function validateDOB(node) {
    input_node = document.getElementById(node)
    alert_node = document.getElementsByClassName(node)[0]
    if (input_node.value == "" || input_node.value == null) {
        message = `${node} must be filled`
        alert_node.textContent = message
        obj={}
        obj[node] = message
        filterArr(node)
        alert_arr.push(obj)
        // console.log(alert_arr);
    }
    else if (input_node.value.length   == 10 ) {
        alert_node.textContent = ""
        obj = {}
        obj[node] = input_node.value
        info.push(obj)
        
    }
    else {
        
        message = `enter a valid ${node} `
        alert_node.textContent = message
        filterArr(node)
        obj={}
        obj[node] = message
        alert_arr.push(obj)   
    }

}
function validateNumber(node) {
    input_node = document.getElementById(node)
    alert_node = document.getElementsByClassName(node)[0]
    if (input_node.value == "" || input_node.value == null) {
        message = `${node} must be filled`
        alert_node.textContent = message
        filterArr(node)
        obj={}
        obj[node] = message
       alert_arr.push(obj)
      
    }
    else if (number_format.test(input_node.value)) {
        alert_node.textContent = ""
        obj = {}
        obj[node] = input_node.value
        info.push(obj)
        
    }
    else {
        message = `enter a valid ${node} `
        alert_node.textContent = message
        filterArr(node)
        obj={}
        obj[node] = message
        alert_arr.push(obj)          
    }
}
function validatePostcode(node) {
    input_node = document.getElementById(node)
    alert_node = document.getElementsByClassName(node)[0]
    if (input_node.value == "" || input_node.value == null) {
        message = `${node} must be filled`
        alert_node.textContent = message
        obj={}
        obj[node] = message
        filterArr(node)
        alert_arr.push(obj)
        // console.log(alert_arr);
    }
    else if (postcode_format.test(input_node.value)) {
        alert_node.textContent = ""
        obj = {}
        obj[node] = input_node.value
        info.push(obj)
        
    }
    else {
        message = `enter a valid ${node} `
        alert_node.textContent = message
        filterArr(node)
        obj={}
        obj[node] = message
        alert_arr.push(obj)   
    }

}

function validateForm(e) {
    addEnquiry();
    // var fields = document.querySelectorAll("label")
    // for (var field of fields) {
    //    let node = field.attributes.for.nodeValue
    //    if ( node == "fname" || node == "lname" || node == "street" || node == "city") {
    //        validateTextValues(node)
    //    }
    //    else if (node == "email") {
    //        validateEmail(node)
    //    }
    //    else if (node == "DOB") {
    //        validateDOB(node)
    //    }
    //    else if (node == "number") {
    //     validateNumber(node)
    //   }
    //     else if (node == "postcode") {
    //         validatePostcode(node)
    //     }
    //     else if (node == "state") {
    //         validateSelect(node)
    //     }
    //     else if (node == "product") {
    //         validateSelect(node)
    //     }
    // }

    // if (alert_arr.length !== 0) {
    // alert_message = ""
    // for (i=0;i<alert_arr.length;i++) {
    //     for (key in alert_arr[i]){
    //          alert_message +=  alert_arr[i][key] + "\n"
    //     }
    // }

    // alert(alert_message)
    // }
    // else {
    //     preview_data = ""
    //     for (i=0;i<info.length;i++) {
    //         for (key in info[i]){
    //              preview_data +=  info[i][key] + "\n"
    //         }
    //     }
    //     submit_req = confirm(preview_data);
    //     if (submit_req == true) {

    //         addEnquiry();
    //     }
    // } 

 }

 function addEnquiry(){
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var dob = document.getElementById("DOB").value;
    var number = document.getElementById("number").value;
    var email = document.getElementById("email").value;
    var street = document.getElementById("street").value;
    var city = document.getElementById("city").value;
    var state = document.getElementById("state").value;
    var postcode = document.getElementById("postcode").value;
    var subject = document.getElementById("subject").value;
    var product = document.getElementById("product").value;
    var comment = document.getElementById("comment").value;

    $.ajax({
        type: 'post',
        url: 'enquiry.php',
        data: { 
            fname: fname,
            lname: lname,
            dob: dob,
            number: number,
            email: email,
            street: street,
            city: city,
            state: state,
            postcode: postcode,
            subject: subject,
            product: product,
            comment: comment
        },
        success: function (response) {
            var response = JSON.parse(response);
            if (response.success == 1) {
                alert(response.message);
                // form = document.getElementById("form")
                // form.submit()  
                window.open('mailto:102763363@students.swinburne.edu.my');
                location.reload();
            }
            else {
                alert(response.message);
            }
        },
        error: function () {
          console.log("Something went wrong");
        }
     });
 }

 function showDropdown(){
    dropdown_btn = document.getElementsByClassName("dropdown-content")[0]
    
    dropdown_btn.classList.toggle("display");
 }


function storeProduct(productName) {
    var options = ["Lahore-Karachi Business Class", "Lahore-Karachi Economy Class", "Lahore-Islamabad Business Class", "Lahore-Islamabad Economy Class","Lahore-Multan Economy Class", "Lahore-Multan Business Class", "Karachi-Lahore Economy Class", "Karachi-Lahore Business Class","Karachi-Islamabad Economy Class", "Karachi-Islamabad Business Class", "Karachi-Multan Economy Class", "Karachi-Multan Business Class","Multan-Lahore Economy Class", "Multan-Lahore Business Class", "Multan-Karachi Economy Class", "Multan-Karachi Business Class","Multan-Islamabad Business Class","Multan-Islamabad Economy Class","Islamabad-Lahore Economy Class","Islamabad-Lahore Business Class","Islamabad-Karachi Economy Class","Islamabad-Karachi Business Class","Islamabad-Multan Economy Class","Islamabad-Multan Business Class"];
    options.forEach(array);

    function array(value) {
        if (value == productName) {
            sessionStorage.productIndex = options.indexOf(value);
        }
    }
}

function storeSub() {
    document.getElementById("product").selectedIndex = sessionStorage.productIndex;

    var product = document.getElementById("product").value;

    sessionStorage.subject = product;
    document.getElementById("subject").value = "RE: Enquiry on " + sessionStorage.subject;
}

function productlist1() {
    var select = document.getElementById("product");

    var options = ["Lahore-Karachi Business Class", "Lahore-Karachi Economy Class", "Lahore-Islamabad Business Class", "Lahore-Islamabad Economy Class","Lahore-Multan Business Class","Lahore-Multan Economy Class"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
}

function productlist2() {
    var select = document.getElementById("product");

    var options = ["Karachi-Lahore Economy Class", "Karachi-Lahore Business Class", "Karachi-Islamabad Business Class", "Karachi-Islamabad Economy Class","Karachi-Multan Business Class","Karachi-Multan Economy Class"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
}

function productlist3() {
    var select = document.getElementById("product");

    var options = ["Islamabad-Lahore Business Class", "Islamabad-Lahore Economy Class", "Islamabad-Karachi Business Class", "Islamabad-Karchi Economy Class","Islamabad-Multan Business Class","Islamabad-Multan Economy Class"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
}

function productlist4() {
    var select = document.getElementById("product");

    var options = ["Multan-Lahore Business Class", "Multan-Lahore Economy Class", "Multan-Karachi Business Class", "Multan-Karchi Economy Class","Multan-Islamabad Business Class","Multan-Islamabad Economy Class"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
}

function change() {
    var product = document.getElementById("product").value;
    sessionStorage.product = product;
    document.getElementById("subject").value = "RE: Enquiry on " + sessionStorage.product;
}
function storeitem(product_id) {
    sessionStorage.setItem("product_id", product_id);
    window.location.replace("enquiry.php");
}
function displayitem() {
    document.getElementById("subject").value = "RE: Enquiry on " + sessionStorage.getItem("product_id");
    document.getElementById("product").value =  sessionStorage.getItem("product_id");
}

function initalise() {
    var formElement = document.getElementById("form"); 
    displayitem();
    formElement.onsubmit = validate; 
}

window.onload = initalise;