function get(obj) {
    return document.getElementById(obj);
}
function switchOne() {
    get("tab-1").style.background = "#fff";
    get("tab-2").style.background = "#e55";
    get("panel-1").style.display = "block";
    get("panel-2").style.display = "none";
}
function switchTwo() {
    get("tab-1").style.background = "#e55";
    get("tab-2").style.background = "#fff";
    get("panel-1").style.display = "none";
    get("panel-2").style.display = "block";
}