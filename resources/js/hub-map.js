/**
 * Interactive Hub Map & Location Explorer Controller
 * Manages Nigeria map pin interactions, filtering between Proposed and Pilot Hubs, and card syncing.
 */

export function initHubMap() {
    const locationsSection = document.getElementById('locations');
    if (!locationsSection) return;

    const filterBtns = Array.from(locationsSection.querySelectorAll('.hub-filter-btn'));
    const hubCards = Array.from(locationsSection.querySelectorAll('.hub-card'));
    const mapPins = Array.from(locationsSection.querySelectorAll('.map-pin'));

    // Filter logic
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.getAttribute('data-filter');

            // Update active state of buttons
            filterBtns.forEach(b => {
                b.setAttribute('aria-selected', 'false');
                b.className = 'hub-filter-btn px-5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-all border bg-white/5 text-slate-300 border-white/10 hover:bg-white/10';
            });

            btn.setAttribute('aria-selected', 'true');
            btn.className = 'hub-filter-btn px-5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-all border bg-emerald-600 text-white border-emerald-500 shadow-lg shadow-emerald-600/30';

            // Filter cards
            hubCards.forEach(card => {
                const cardStatus = card.getAttribute('data-status');
                if (filter === 'all' || cardStatus === filter) {
                    card.style.display = 'block';
                    card.classList.remove('opacity-40');
                } else {
                    card.style.display = 'none';
                }
            });

            // Filter pins on the map
            mapPins.forEach(pin => {
                const hubId = pin.getAttribute('data-hub-id');
                const matchingCard = hubCards.find(c => c.getAttribute('data-hub-id') === hubId);
                const status = matchingCard ? matchingCard.getAttribute('data-status') : '';

                if (filter === 'all' || status === filter) {
                    pin.style.display = 'block';
                    pin.style.opacity = '1';
                } else {
                    pin.style.display = 'none';
                }
            });
        });
    });

    // Map Pin click -> highlight corresponding card
    mapPins.forEach(pin => {
        pin.addEventListener('click', () => {
            const hubId = pin.getAttribute('data-hub-id');
            const targetCard = hubCards.find(c => c.getAttribute('data-hub-id') === hubId);
            if (targetCard) {
                // Remove previous highlights
                hubCards.forEach(c => c.classList.remove('ring-2', 'ring-emerald-400', 'bg-white/15'));
                // Highlight target card
                targetCard.classList.add('ring-2', 'ring-emerald-400', 'bg-white/15');
                targetCard.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
        });
    });

    // Card click -> pulse corresponding pin
    hubCards.forEach(card => {
        card.addEventListener('click', () => {
            const hubId = card.getAttribute('data-hub-id');
            const targetPin = mapPins.find(p => p.getAttribute('data-hub-id') === hubId);
            if (targetPin) {
                targetPin.classList.add('scale-125');
                setTimeout(() => targetPin.classList.remove('scale-125'), 500);
            }
        });
    });
}
