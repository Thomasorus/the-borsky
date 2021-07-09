<script>
    const menuButton = document.querySelector('.mobile-button')
    const main = document.querySelector("main")
    const nav = document.querySelector("nav")
    const clickHandler = function () {
        if(nav.hasAttribute("open")) {
            nav.removeAttribute("open")
            window.setTimeout( function() {
                main.removeAttribute("hidden")
            }, 400 );
        } else {
            nav.setAttribute("open", "")
            main.setAttribute("hidden", "")
            window.setTimeout( function() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0
            }, 100 );
        }
    }
    menuButton.addEventListener('click', clickHandler)
</script>
</body>
</html>