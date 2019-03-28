$(document).ready(() => {
    $("#register-form").submit((event) => {
        event.preventDefault();
        if (!$("#email").hasClass("is-invalid")) event.target.submit();
    });
});

window.checkEmail = () => {
    const email = $("#email").val().trim();
    $("#email").removeClass("is-invalid");

    if (email.length === 0) return;

    axios.post("/register/checkEmail", { email : email}).then((response) => {
        if (response.data.emailExists) $("#email").addClass("is-invalid");
    });
}