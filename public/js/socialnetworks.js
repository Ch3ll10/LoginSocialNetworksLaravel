//Login with social networks.

//animation of facebook
function mOverfb(obj) {
    document.getElementById('fb').src='icons/fb.png'
}
function mOutfb(obj) {
    document.getElementById('fb').src='icons/fb2.png'
}
function fb(){
	window.location.assign("http://localhost:8000/auth/facebook")
}

//animation of twitter
function mOvertr(obj) {
    document.getElementById('tr').src='icons/tr.png'
}
function mOuttr(obj) {
    document.getElementById('tr').src='icons/tr2.png'
}
function tr(){
	window.location.assign("http://localhost:8000/auth/twitter")
}

//animation of google
function mOvergl(obj) {
    document.getElementById('gl').src='icons/gl.png'
}
function mOutgl(obj) {
    document.getElementById('gl').src='icons/gl2.png'
}
function gl(){
	window.location.assign("http://localhost:8000/auth/google")
}