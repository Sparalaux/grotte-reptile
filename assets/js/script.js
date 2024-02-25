const button = document.getElementById('commencez');
button.addEventListener('click', test);

function test(){
    var sessionValue = '<%=$_SESSION["personnage"]%>';
    const aventure = document.getElementById("jeu")
    aventure.innerHTML = "<p>test</p>";
}