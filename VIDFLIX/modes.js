const checkbox = document.getElementById("checkbox")

const body = document.querySelector("body");
const checkboxButton = document.querySelector('checkbox-label');

let modeInStorage = localStorage.getItem("mode");

if(modeInStorage == "light"){
  body.classList.remove("darkmode");
}else if(modeInStorage == "dark"){
  checkbox.click();
  body.classList.add("darkmode");
}

checkbox.addEventListener("change", () => {
  document.body.classList.toggle("dark")
  modeInStorage = localStorage.getItem("mode");
  console.log(modeInStorage)
  if(modeInStorage == "dark"){
    localStorage.setItem("mode","light")
    body.classList.remove("darkmode");
  }else if(modeInStorage == "light"){
    localStorage.setItem("mode","dark")
    body.classList.add("darkmode");
  }else{
    localStorage.setItem("mode","dark")
    body.classList.add("darkmode");
  }
})