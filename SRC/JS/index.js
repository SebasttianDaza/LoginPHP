import RequestData from "./services/RequestData.js";

document.addEventListener('click', (e) => {
    if (e.target.matches("#getoutlogin")) {
        getoutlogin();
    }
    if (e.target.matches("#getoutindex")) {
      geterror(true);
    }
})


const getoutlogin = () => {
    const response = RequestData({
      url: "../SRC/JS/Data.php",
      method: "GET",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
      },
      typeof: "json",
    });
    response.then(data => {
        console.log(data);
        window.location.href = "../index.php";
    })
};


const geterror = (error) => {
    if (error) {
        window.location.href = "../index.php";
        alert("Contraseña o usuario incorrecto");
    }
};