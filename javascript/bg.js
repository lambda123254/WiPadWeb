var parallax1 = document.getElementsByClassName("parallax");
var part1 = document.getElementById("part1");
window.addEventListener("scroll", (event) => {
    let scroll = this.scrollY;
    console.log(scroll);
    scroll = 15 + scroll / 35
    document.getElementById("part1").style.paddingTop = scroll + "vh";
});
