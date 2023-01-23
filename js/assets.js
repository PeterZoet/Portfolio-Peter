class Header extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
        <header>
        <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li>
          </ul>
        </div>
      </nav>
        </header>
        `
    }
}

class Footer extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
            <footer>
                <p>My portfolio &copy; 2020</p>
                <p>Check out my <a href="github.com/JustPeter64">GitHub</a></p>
                <p>Check out my <a href="linkedin.com/in/peter-just-1b1b4b1b4">LinkedIn</a></p>
                <p>Send me a quick mail via <a href="mailto:pmjzoetekouw@homtail.com">email</a></p>
            </footer>   
        `;
    }
}


customElements.define('my-header', Header);
customElements.define('my-footer', Footer);
