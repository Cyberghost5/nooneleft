import { initHeroSlider, initNavbar } from './slider';
import { initHubMap } from './hub-map';
import { initForms } from './forms';

document.addEventListener('DOMContentLoaded', () => {
    initNavbar();
    initHeroSlider();
    initHubMap();
    initForms();
});
