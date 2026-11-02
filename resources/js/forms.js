/**
 * Forms Tab Switcher & Dynamic Navigation Controller
 */

export function initForms() {
    const partnerBtn = document.getElementById('tab-btn-partner');
    const contactBtn = document.getElementById('tab-btn-contact');
    const partnerPanel = document.getElementById('panel-partner');
    const contactPanel = document.getElementById('panel-contact');

    if (!partnerBtn || !contactBtn || !partnerPanel || !contactPanel) return;

    function selectPartnerTab() {
        partnerBtn.setAttribute('aria-selected', 'true');
        partnerBtn.className = 'flex-1 py-3 sm:py-4 px-4 text-center rounded-2xl font-bold text-xs sm:text-sm transition-all bg-white text-emerald-800 shadow-sm border border-slate-200/50 flex items-center justify-center gap-2';
        
        contactBtn.setAttribute('aria-selected', 'false');
        contactBtn.className = 'flex-1 py-3 sm:py-4 px-4 text-center rounded-2xl font-medium text-xs sm:text-sm transition-all text-slate-600 hover:text-slate-900 flex items-center justify-center gap-2';

        partnerPanel.classList.remove('hidden');
        partnerPanel.classList.add('block');
        contactPanel.classList.remove('block');
        contactPanel.classList.add('hidden');
    }

    function selectContactTab() {
        contactBtn.setAttribute('aria-selected', 'true');
        contactBtn.className = 'flex-1 py-3 sm:py-4 px-4 text-center rounded-2xl font-bold text-xs sm:text-sm transition-all bg-white text-emerald-800 shadow-sm border border-slate-200/50 flex items-center justify-center gap-2';
        
        partnerBtn.setAttribute('aria-selected', 'false');
        partnerBtn.className = 'flex-1 py-3 sm:py-4 px-4 text-center rounded-2xl font-medium text-xs sm:text-sm transition-all text-slate-600 hover:text-slate-900 flex items-center justify-center gap-2';

        contactPanel.classList.remove('hidden');
        contactPanel.classList.add('block');
        partnerPanel.classList.remove('block');
        partnerPanel.classList.add('hidden');
    }

    partnerBtn.addEventListener('click', selectPartnerTab);
    contactBtn.addEventListener('click', selectContactTab);

    // Auto-select tab based on hash in URL
    function checkHash() {
        const hash = window.location.hash;
        if (hash === '#contact' || hash === '#contact-form') {
            selectContactTab();
        } else if (hash === '#partner-form' || hash === '#partners' || hash === '#partner') {
            selectPartnerTab();
        }
    }

    window.addEventListener('hashchange', checkHash);
    checkHash();

    // Check if there are contact errors or contact success message on page load
    const contactErrors = contactPanel.querySelectorAll('.text-rose-600');
    const contactSuccess = document.getElementById('contact-success-banner');
    if (contactErrors.length > 0 || contactSuccess) {
        selectContactTab();
    }

    // Intercept clicks on links pointing to #partner-form or #contact-form
    document.querySelectorAll('a[href="#partner-form"], a[href="#partners"]').forEach(link => {
        link.addEventListener('click', () => {
            selectPartnerTab();
        });
    });

    document.querySelectorAll('a[href="#contact"], a[href="#contact-form"]').forEach(link => {
        link.addEventListener('click', () => {
            selectContactTab();
        });
    });
}
