
function darkmode(){

    var SetTheme = document.body;
    SetTheme.classList.toggle("invert");
    var theme;

    if(SetTheme.classList.contains("invert")){
        console.log("Dark mode");
        theme = "DARK";
    }else{
        console.log("Light mode");
        theme = "LIGHT";
    }

    localStorage.setItem("PageTheme", JSON.stringify(theme));

}

let GetTheme = JSON.parse(localStorage.getItem("PageTheme"));
console.log(GetTheme);

if(GetTheme === "DARK"){
    document.body.classList = "invert";
}
