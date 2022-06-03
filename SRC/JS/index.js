document.addEventListener('click', (e) => {
    if (e.target.matches("#getoutlogin")) {
        getoutlogin();
    }
    if (e.target.matches("#getoutindex")) {
      geterror(true);
    }
})

const getoutlogin = () => {
  window.location.href = "../SRC/JS/index.php?remove=true";
};

const geterror = (error) => {
    if (error) {
        window.location.href = "../index.php";
        alert("Contraseña o usuario incorrecto");
    }
};