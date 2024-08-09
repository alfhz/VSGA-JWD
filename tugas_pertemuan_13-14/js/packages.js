// HANDLE CREATE PACKAGE
document.addEventListener("DOMContentLoaded", function () {
  const cardData = [
    {
      title: "CAMP",
      features: [
        "Camping area with a natural forest experience",
        "Free mineral water",
        "Free electricity",
        "Price doesn't include tent and vehicle parking",
      ],
      images: [
        "../media/camp_1.jpeg",
        "../media/camp_2.jpeg",
        "../media/camp_3.jpeg",
      ],
      price: "Rp. 65,000/person",
    },
    {
      title: "CAMPERVAN",
      features: [
        "Campervan with comfortable interior",
        "Includes kitchen and bathroom facilities",
        "Free parking and electricity",
        "Price doesn't include fuel and extra mileage",
      ],
      images: [
        "../media/campervan_1.jpeg",
        "../media/campervan_2.jpeg",
        "../media/campervan_3.jpeg",
      ],
      price: "Rp. 120,000/person",
    },
    {
      title: "GLAMPING",
      features: [
        "Glamping with comfortable interior",
        "Includes kitchen and bathrooms",
        "Free parking, electricity and wifi",
        "Free bundle of firewood",
      ],
      images: [
        "../media/glamping_1.jpeg",
        "../media/glamping_2.jpeg",
        "../media/glamping_3.jpeg",
      ],
      price: "Rp. 500,000/person",
    },
    {
      title: "LUXURY CAMP",
      features: [
        "Camp private with good view",
        "Includes comfortable tent and facilities",
        "Free mineral water",
        "Free parking and electricity",
      ],
      images: [
        "../media/luxury_1.jpeg",
        "../media/luxury_2.jpeg",
        "../media/luxury_3.jpeg",
      ],
      price: "Rp. 225,000/person",
    },
    {
      title: "HOT SPRING",
      features: [
        "Our hot springs feature several pools of various sizes, all sourced directly from the natural hot spring of Mount Patuha. Provide therapeutic benefits, promoting relaxation and rejuvenation.",
      ],
      images: [
        "../media/hot_spring_1.jpeg",
        "../media/hot_spring_2.jpeg",
        "../media/hot_spring_3.jpeg",
      ],
      price: "Rp. 35,000/person",
    },
    {
      title: "PAINT BALL",
      features: [
        "Fun activities with groups, suitable for gathering. Engage in different game scenarios, from capture the flag to last man standing, and enjoy an exhilarating and memorable adventure.",
      ],
      images: ["../media/pb_1.jpeg", "../media/pb_2.jpeg", "../media/pb_3.jpg"],
      price: "Rp. 135,000/person",
    },
  ];

  const cardsContainer = document.getElementById("cardsContainer");

  cardData.forEach((card, cardIndex) => {
    // CREATE CARD
    const col = document.createElement("div");
    col.classList.add("col");

    const cardElement = document.createElement("div");
    cardElement.classList.add("card");
    cardElement.style.width = "18rem";

    // CREATE CAROUSEL
    const carouselId = `carouselExampleCaptions${cardIndex}`;
    const carousel = document.createElement("div");
    carousel.id = carouselId;
    carousel.classList.add("carousel", "slide", "carousel_2");

    // CREATE INDICATOR
    const indicatorsContainer = document.createElement("div");
    indicatorsContainer.classList.add("carousel-indicators");
    card.images.forEach((_, index) => {
      const indicator = document.createElement("button");
      indicator.type = "button";
      indicator.setAttribute("data-bs-target", `#${carouselId}`);
      indicator.setAttribute("data-bs-slide-to", index);
      indicator.setAttribute("aria-label", `Slide ${index + 1}`);
      if (index === 0) {
        indicator.classList.add("active");
        indicator.setAttribute("aria-current", "true");
      }
      indicatorsContainer.appendChild(indicator);
    });

    // CREATE CAROUSEL INNER
    const innerContainer = document.createElement("div");
    innerContainer.classList.add("carousel-inner");
    card.images.forEach((imageSrc, index) => {
      const carouselItem = document.createElement("div");
      carouselItem.classList.add("carousel-item");
      if (index === 0) carouselItem.classList.add("active");

      const img = document.createElement("img");
      img.src = imageSrc;
      img.classList.add("d-block", "w-100");
      img.alt = "Image";

      const caption = document.createElement("div");
      caption.classList.add("carousel-caption", "d-none", "d-md-block");

      const h5 = document.createElement("h5");
      h5.textContent = card.title;

      caption.appendChild(h5);
      carouselItem.appendChild(img);
      carouselItem.appendChild(caption);
      innerContainer.appendChild(carouselItem);
    });

    // CONTROL EVENT CAROUSEL
    const prevControl = document.createElement("button");
    prevControl.classList.add("carousel-control-prev");
    prevControl.type = "button";
    prevControl.setAttribute("data-bs-target", `#${carouselId}`);
    prevControl.setAttribute("data-bs-slide", "prev");

    const prevIcon = document.createElement("span");
    prevIcon.classList.add("carousel-control-prev-icon");
    prevIcon.setAttribute("aria-hidden", "true");

    const prevVisuallyHidden = document.createElement("span");
    prevVisuallyHidden.classList.add("visually-hidden");
    prevVisuallyHidden.textContent = "Previous";

    prevControl.appendChild(prevIcon);
    prevControl.appendChild(prevVisuallyHidden);

    const nextControl = document.createElement("button");
    nextControl.classList.add("carousel-control-next");
    nextControl.type = "button";
    nextControl.setAttribute("data-bs-target", `#${carouselId}`);
    nextControl.setAttribute("data-bs-slide", "next");

    const nextIcon = document.createElement("span");
    nextIcon.classList.add("carousel-control-next-icon");
    nextIcon.setAttribute("aria-hidden", "true");

    const nextVisuallyHidden = document.createElement("span");
    nextVisuallyHidden.classList.add("visually-hidden");
    nextVisuallyHidden.textContent = "Next";

    nextControl.appendChild(nextIcon);
    nextControl.appendChild(nextVisuallyHidden);

    // APPEND TO CAROUSEL
    carousel.appendChild(indicatorsContainer);
    carousel.appendChild(innerContainer);
    carousel.appendChild(prevControl);
    carousel.appendChild(nextControl);

    const cardBody = document.createElement("div");
    cardBody.classList.add("card-body");

    const h5 = document.createElement("h5");
    h5.classList.add("card-title");
    h5.textContent = card.price;

    const ul = document.createElement("ul");
    ul.classList.add("card-text");
    card.features.forEach((feature) => {
      const li = document.createElement("li");
      li.textContent = feature;
      ul.appendChild(li);
    });

    const bookButton = document.createElement("a");
    bookButton.href = "../view/form_packages.php";
    bookButton.classList.add("btn", "btn_book");
    bookButton.textContent = "BOOK NOW";

    // SAVE PRICE AND PACKAGES TO LOCALSTORAGE
    bookButton.addEventListener("click", () => {
      localStorage.setItem("selectedPackage", card.title);
      localStorage.setItem(
        "selectedPackagePrice",
        card.price
          .replace("Rp. ", "")
          .replace("/person", "")
          .replace(/[^0-9]/g, "")
      );
    });

    cardBody.appendChild(h5);
    cardBody.appendChild(ul);
    cardBody.appendChild(bookButton);

    cardElement.appendChild(carousel);
    cardElement.appendChild(cardBody);
    col.appendChild(cardElement);

    cardsContainer.appendChild(col);
  });
});
