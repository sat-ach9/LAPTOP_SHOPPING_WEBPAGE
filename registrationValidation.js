 
const firstname = document.getElementById("f_name");
const lastname = document.getElementById("l_name");
const email = document.getElementById("e_mail");
const password = document.getElementById("pwd");
const password2 = document.getElementById("cpwd");
const date = document.getElementById("dob");

firstname.addEventListener("input", checkFirstname);
lastname.addEventListener("input", checkLastname);
email.addEventListener("input", checkEmail);
password.addEventListener("input", checkPassword);
password2.addEventListener("input", checkPassword);
date.addEventListener("input", checkDate);

form.addEventListener("submit", (e) => {
  let a = checkFirstname();
  let b = checkLastname();
  let c = checkEmail();
  let d = checkPassword();
  let f = checkDate();
  if (!(a && b && c && d && f)) {
    // form.submit();
    e.preventDefault();
    // window.location.href = form.getAttribute("action");
    //redirecting user to the specified url which is inside action attribute of form tag
  }
});

function checkFirstname() {
  const firstnameValue = firstname.value.trim();
  if (firstnameValue === "") {
    setErrorInput(firstname, "firstname cannot be blank.");
    return false;
  } else {
    setSuccessInput(firstname);
    return true;
  }
}

function checkLastname() {
  const lastnameValue = lastname.value.trim();
  if (lastnameValue === "") {
    setErrorInput(lastname, "lastname cannot be blank.");
    return false;
  } else {
    setSuccessInput(lastname);
    return true;
  }
}

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
  const password2Value = password2.value.trim();
  let regular_expressions =
    /^(?=[^a-z]*[a-z])(?=[^A-Z]*[A-Z])(?=\D*\d)(?=.*?[!#%])[A-Za-z0-9!#%]{8,32}$/;

  if (passwordValue === "") {
    setErrorInput(password, "Password connot be blank.");
    return false;
  } else {
    if (!regular_expressions.test(passwordValue)) {
      setErrorInput(
        password,
        "Enter a password with minimum 8 to 32 characters containing one Uppercase letter, one Lowercase letter, one Number and One Special Character(One of these !#%)"
      );
      return false;
    } else {
      setSuccessInput(password);
      if (password2Value !== passwordValue) {
        setErrorInput(password2, "Password dose not match.");
        return false;
      } else {
        setSuccessInput(password2);
        return true;
      }
    }
  }
}

function checkDate() {
  const dateValue = date.value;
  if (!dateValue) {
    setErrorInput(date, "date cannot be blank.");
    return false;
  } else {
    setSuccessInput(date);
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
