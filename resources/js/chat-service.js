window.handleChat = function (type) {
    const phone = "6281995421795";

    const messages = {
        rent: "Halo, saya tertarik untuk menyewa kos ini. Apakah masih tersedia?",
        ask: "Halo, saya ingin bertanya tentang kos ini."
    };

    const text = encodeURIComponent(messages[type] || messages.ask);

    const url = `https://wa.me/${phone}?text=${text}`;

    window.open(url, "_blank");

    // close overlay
    document
        .querySelector('[data-overlay="chat-service"]')
        ?.classList.add("hidden");
};