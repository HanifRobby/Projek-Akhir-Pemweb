function validasi() {
    event.preventDefault();

    var password =
        document.forms.testForm.password.value;
    var email =
        document.forms.testForm.email.value;
    var check =
        document.forms.testForm.myCheckbox;
    var regEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;  //Javascript reGex for Email Validation.
    
    if(password.length <6){
        alert("Password minimal 6 karakter!");
        password.focus();
        return false;

    }
    
    if(email == "" || !regEmail.test(email)) {
        window.alert("Tolong masukkan email yang valid!");
        email.focus();
        return false;
    }

    if(!check.checked){
        alert("Tolong baca dan setujui syarat dan ketentuan terlebih dahulu!");
        check.focus();
        return false;
    }

    alert("Data yang Anda masukkan valid!");
    document.forms.testForm.submit();

    return true;
}