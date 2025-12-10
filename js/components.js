import { Navigation } from '/components/navigation.js';
import { Inspiration } from '/components/inspiration.js';

customElements.define(
    "nav-bar",  Navigation);

customElements.define(
    "inpso-bar", Inspiration);

customElements.define(
    "updates-bar",
    class extends HTMLElement {
        connectedCallback() {
            const aside = document.createElement("aside");
            const p = document.createElement("p");
            const updated = document.createElement("h6");
            p.textContent = "This website is in perpetual motion!";
            updated.textContent = "Last updated December 8th 2025"
            aside.appendChild(p);
            aside.appendChild(updated);

            aside.classList.add("box")
            this.appendChild(aside);

        }
    }
);

function leftSide() {
const leftSide = document.getElementById("left-side");

const nav = document.createElement("nav-bar");
leftSide.appendChild(nav);

const inspo = document.createElement("inpso-bar");
leftSide.appendChild(inspo);
}

function rightSide() {
    const rightSide = document.getElementById("right-side");
    const infobox = document.createElement("updates-bar")
    rightSide.appendChild(infobox)
}

function load(){
    leftSide()
    rightSide()
}

load()