<script>
    const menuButton = document.querySelector('.mobile-button')
    const content = document.querySelector("main")
    const nav = document.querySelector("nav")
    const clickHandler = function () {
        if(nav.hasAttribute("open")) {
            nav.removeAttribute("open")
        } else {
            nav.setAttribute("open", "")
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