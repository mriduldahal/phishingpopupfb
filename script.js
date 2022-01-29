//external linked script cant have <script> </script>

const niranjan = document.querySelector('.niranjan');
const exit = document.querySelector('.exit');
window.onload = function () {
    setTimeout(function () {
        niranjan.style.display = "block"
        //adding somw time of delay
    }, 1000)
}
exit.addEventListener('click', () => {
    niranjan.style.display = "none"
})
