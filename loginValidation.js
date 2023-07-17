const form = document.getElementById("form");
const email = document.getElementById("e_mail");
const password = document.getElementById("pwd");

email.addEventListener("input", checkEmail);
password.addEventListener("input", checkPassword);

form.addEventListener("submit", (e) => {
  let x = checkEmail();
  let y = checkPassword();
  if (!(x && y)) {
    e.preventDefault();
  }
});

function checkEmail() {
  const emailValue = email.value.trim();
  let regular_expressions =
    /^[A-Za-z0-9](([a-zA-Z0-9,=\.!\-#|\$%\^&\*\+/\?_`\{\}~]+)*)@(?:[0-9a-zA-Z-]+\.)+[a-zA-Z]{2,9}$/;
  if (emailValue === "") {
    setErrorInput(email, "Email cannot be blank.");
    return false;
  } else {
    if (!regular_expressions.test(emailValue)) {
      setErrorInput(email, "Enter valid Email");
      return false;
    } else {
      setSuccessInput(email);
      return true;
    }
  }
}

function checkPassword() {
  const passwordValue = password.value.trim();

  if (passwordValue === "") {
    setErrorInput(password, "Password connot be blank.");
    return false;
  } else {
    setSuccessInput(password);
    return true;
  }
}

function setErrorInput(input, errorMessage) {
  const formControl = input.parentElement;
  const small = formControl.querySelector(".msg");

  small.innerText = errorMessage;
  formControl.classList.remove("success");
  formControl.classList.add("error");
}

function setSuccessInput(input) {
  const formControl = input.parentElement;
  formControl.classList.remove("error");
  formControl.classList.add("success");
}
