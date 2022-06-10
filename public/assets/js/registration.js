var submit = document.getElementById("submit");
var matKhau = document.getElementById("matKhau");
var nhapLaiMatKhau = document.getElementById("nhapLaiMatKhau");
var parentElement = nhapLaiMatKhau.parentElement;
var div_email = document.getElementById("div-email");


// nhapLaiMatKhau

submit.onclick = function(event) {
    var check = div_email.classList.contains("registration__form-item--err");
    if (check == true) {
        event.preventDefault();
    } else {
        if (matKhau.value != nhapLaiMatKhau.value) {
            event.preventDefault();
            parentElement.classList.add("registration__form-item--err");
        } else {
            parentElement.classList.remove("registration__form-item--err");
        }
    }


}

nhapLaiMatKhau.onfocus = function() {
    parentElement.classList.remove("registration__form-item--err");

}