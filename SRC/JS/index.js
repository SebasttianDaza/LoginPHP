
document.addEventListener('click', (e) => {
    if (e.target.matches("#getoutlogin")) {
        getoutlogin();
    }
    if (e.target.matches("#getoutindex")) {
      geterror(true);
    }
    if (e.target.matches("#getinlogin")) {
      getinlogin();
    }
    if (e.target.matches("#getoutindexregister")) {
      geterror(false);
    }
})

const getoutlogin = () => {
  window.location.href = "../index.php?message=logout";
};

const getinlogin = () => {
  window.location.href = "../index.php";
}

const geterror = (error) => {
    if (error) {
      alert("Contraseña o usuario incorrecto");
      window.location.href = "../index.php";
    } 
    if(!error){
      alert("No se ha podido registrar");
      window.location.href = "../index.php";
    }
};