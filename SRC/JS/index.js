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
  const session = {
    type: "logout",
    status: "true",
  };

  RequestData({
    url: "../SRC/JS/Data.php",
    options: {
      method: "GET",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
      },
      body: null,
    },
    sucess: (data) => {
      window.location.href = "../index.php";
      console.log(data);
      requestPost("../../index.php", session);
    },
    showError: (error) => {
      console.log(error);
    }
  });

  /*
  
  */
};

const requestPost = (url, data) => {
  RequestData({
    url: url,
    options: {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    },
    sucess: () => {
      console.log("request");
    },
    showError: (error) => {
      console.log(error);
    },
  });

}


const geterror = (error) => {
    if (error) {
        window.location.href = "../index.php";
        alert("Contraseña o usuario incorrecto");
    }
};