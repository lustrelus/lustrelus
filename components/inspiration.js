export class Inspiration extends HTMLElement {
    connectedCallback() {
        const aside = document.createElement("aside")
        const title = document.createElement("h2");

        title.innerHTML = "&#9655; Inspirations";
        aside.appendChild(title);

        const inspirations = [
            { name: 'LuvstarKei', link: 'https://luvstarkei.com/', image: 'https://i0.wp.com/luvstarkei.com/wp-content/uploads/2024/11/LuvstarKeiButton-1.png?resize=88%2C31&ssl=1'},
            { name: 'Confetti Cake', link: 'https://confetticake.neocities.org/', image: 'https://confetticake.neocities.org/images/misc/button.gif'},
            { name: 'PetraPixel', link: 'https://petrapixel.neocities.org/', image: 'https://cdn.jsdelivr.net/gh/petracoding/petrapixel.neocities.org@latest/public/assets/img/linkback.webp'}
        ];

        for (const inspo of inspirations) {
            const a = document.createElement("a");

            a.href = inspo.link;
                        a.target = '_blank';
            const image = document.createElement('img')
            image.src = inspo.image
            a.appendChild(image);
            if (inspo.image != ''){

            } else {
            a.innerHTML = `<h3>${inspo.name}</h3>`;
            }

            aside.appendChild(a);
        }
        aside.classList.add('box');
        this.appendChild(aside);
    }
}