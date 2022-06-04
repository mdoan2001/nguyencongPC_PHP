var submit = document.getElementById("submit");
var matKhau = document.getElementById("matKhau");
var nhapLaiMatKhau = document.getElementById("nhapLaiMatKhau");
var parentElement = nhapLaiMatKhau.parentElement;

// nhapLaiMatKhau

submit.onclick = function(event) {

    if (matKhau.value != nhapLaiMatKhau.value) {
        event.preventDefault();
        parentElement.classList.add("registration__form-item--err");
    } else {
        parentElement.classList.remove("registration__form-item--err");
    }
}

nhapLaiMatKhau.onfocus = function() {
    parentElement.classList.remove("registration__form-item--err");

}