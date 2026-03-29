import Typed from "typed.js";

export function initTyped() {
    const elements = document.querySelectorAll('[data-typed]');
    for(const element of elements) {
        const config = element.dataset.config;

        switch(config) {
            case 'hero':
                const typed = new Typed('[data-typed]', {
                    strings: [`Hello, I'm <span class="text-primary">Jack Winstanley</span>.`],
                    typeSpeed: 50,
                    onComplete(self) {
                        self.cursor.remove();
                    }
                });
                break;
        }
    }
}