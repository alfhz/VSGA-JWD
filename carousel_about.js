document.addEventListener("DOMContentLoaded", function() {
    const carouselData = [
        { src: "media/gallery_1.jpg", title: "GALLERY", subtitle: "Camp" },
        { src: "media/gallery_2.jpg", title: "GALLERY", subtitle: "Campervan" },
        { src: "media/gallery_3.jpg", title: "GALLERY", subtitle: "Gathering" },
        { src: "media/gallery_4.jpg", title: "GALLERY", subtitle: "Hot Spring" },
        { src: "media/gallery_5.jpeg", title: "GALLERY", subtitle: "Outbond" },
    ];

    const indicatorsContainer = document.getElementById("carouselIndicators");
    const innerContainer = document.getElementById("carouselInner");

    carouselData.forEach((item, index) => {
        // Create indicators
        const indicator = document.createElement("button");
        indicator.type = "button";
        indicator.setAttribute("data-bs-target", "#carouselExampleCaption");
        indicator.setAttribute("data-bs-slide-to", index);
        indicator.setAttribute("aria-label", `Slide ${index + 1}`);
        if (index === 0) {
            indicator.classList.add("active");
            indicator.setAttribute("aria-current", "true");
        }
        indicatorsContainer.appendChild(indicator);

        // Create carousel items
        const carouselItem = document.createElement("div");
        carouselItem.classList.add("carousel-item");
        if (index === 0) {
            carouselItem.classList.add("active");
        }

        const img = document.createElement("img");
        img.src = item.src;
        img.classList.add("d-block", "w-100", "carousel_about");
        img.alt = "...";

        const caption = document.createElement("div");
        caption.classList.add("carousel-caption", "d-none", "d-md-block");

        const h5 = document.createElement("h5");
        h5.textContent = item.title;

        const p = document.createElement("p");
        p.textContent = item.subtitle;

        caption.appendChild(h5);
        caption.appendChild(p);
        carouselItem.appendChild(img);
        carouselItem.appendChild(caption);
        innerContainer.appendChild(carouselItem);
    });
});
