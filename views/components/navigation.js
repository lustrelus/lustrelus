export class Navigation extends HTMLElement {
    connectedCallback() {
        const nav = document.createElement("nav");
        const title = document.createElement("h2");

        title.innerHTML = "&#9655; Navigation";
        nav.appendChild(title);

        const pages = [
            { name: "Home", id: "home", link: "/home", route: "/"},
            { name: "About me", id: "about", link: "/about", route: "/about" },
            { name: "Socials", id: "socials", link: "/socials", route: "/socials" },
        ];

        for (const page of pages) {
            const button = document.createElement("button");

            button.id = page.id;
            button.innerHTML = `<h3>${page.name}</h3>`;

            button.addEventListener("click", function() {
            Render(`./views${page.link}.php`)
        });

            nav.appendChild(button);
        }
        nav.classList.add("box")
        this.appendChild(nav);
    }
    
};

function Render(page){
    const content = document.getElementById('content')
            fetch(page).then(function (res) {
                if (res.ok) {
                    return res.text();
                }
                throw res;
            }).then(function (text) {
                content.innerHTML = text;
            });
}
