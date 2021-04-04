const username = document.getElementById("username");
const password = document.getElementById("password");
const saveInfoBtn = document.getElementById("saveInfoBtn");



addEventListener("keyup", () => {
    saveInfoBtn.disabled = !username.value;
    saveInfoBtn.disabled = !password.value;
});



saveUserInfo = e => {
    console.log("click");
    e.preventDefault();


    };
