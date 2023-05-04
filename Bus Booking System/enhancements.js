// enhancements.js

enhancement_1 = "Using session storage to save and transport data between diffrent pages"




enhancement_2 = "Dynamically insert HTML elements with the relevent data"
`function productlist1() {
    var select = document.getElementById("product");

    var options = ["Lahore-Karachi Business Class", "Fiat Panda", "Fiat 500", "Proton Iriz"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
}`


enhancement_3 = "Changing values dynamically in response to events"
`function change() {
    var product = document.getElementById("product").value;
    sessionStorage.product = product;
    document.getElementById("subject").value = "RE: Enquiry on " + sessionStorage.product;
}`

enhancement_4 =" using RegEx to validated inputs"
`let info = []
let alert_arr =[]
let email_format = new RegExp("[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$")
let number_format = new RegExp("[0-9]{10}")
let postcode_format  = new RegExp("[0-9]{5}")
`

enhancement_5 = "creteing custom form elements and action for better and optimized forms "