/* ===================================================
   MEME DATABASE
   JUST ADD NEW MEMES HERE
=================================================== */

const memeVideos = [
    {
        title: "Luffy using laptop",

        video:
        "https://res.cloudinary.com/deeafkyhs/video/upload/v1778350648/AQOY-YuLOXiZtIgLV1WA7espFvukDh-XT-wORYtt9AedxJkWghn_KTPZ-4urDpy-Gt8hey6sn2nj3iSb7X6X_aWTL8uCFhN5kswIDs67zL8J5g_oyfidx.mp4",

        tags: [
            "Anime",
            "Trending"
        ],

        description:
        "Velocity beat synced meme template."
    },
     {
        title: "virat kohli walking",

        video:
        "https://res.cloudinary.com/deeafkyhs/video/upload/v1778350652/videoplayback_1_dfihaj.mp4",

        tags: [
            "cinematic",
            "attitude",
            "relief"
        ],

        description:
        "virat kohli walking  video templates"
    },

    {
        title: "Ishowspeed reacting meme",

        video:
        "https://res.cloudinary.com/deeafkyhs/video/upload/v1778350645/iShowSpeed_Shocking_-_Green_Screen_720p_ohk8ug.mp4",

        tags: [
            "funny",
            "Instagram"
        ],

        description:
        "Ishowspeed reacting to something"
    },

    {
        title: "Rajanikanth shit meme",

        video:
        "https://res.cloudinary.com/deeafkyhs/video/upload/v1778350636/Rajinikanth_shit_meme_green_screen_720p_vyunqq.mp4",

        tags: [
            "Funny",
            "Trending"
        ],

        description:
        "Rajanikanth shit meme"
    },
    {
        title: "Salman Khan meme template",

        video:
        "https://res.cloudinary.com/du7vnk0na/video/upload/v1778507289/salman_khan_dabang_3_removing_goggles_and_looking_instagram_meme_template_720p_jl2xjg.mp4",

        tags: [
            "movie",
            "Trending"
        ],

        description:
        "Salman khan removing his sunglasses romantically"
    },

    {
        title: "superman praised meme template",

        video:
        "https://res.cloudinary.com/dos0wypkl/video/upload/v1778522977/superman_praised_meme_template_HD_s5y7o9.mp4",

        tags: [
            "cinematics",
            "Trending"
        ],

        description:
        "A superman getting praised by the people surrounding him"
    },

    {
        title: "Skeleton Berserks Roasting Meme Template",

        video:
        "https://res.cloudinary.com/dos0wypkl/video/upload/v1778522977/Skeleton_Berserks_Roasting_Meme_Template_Edit_%EF%B8%8F_nrvckm.mp4",

        tags: [
            "Trending"
        ],

        description:
        "Skeleton Berserks Roasting Meme Template ( Edit )"
    },

    {
        title: "Dexter Doakes Famous Meme template",

        video:
        "https://res.cloudinary.com/dos0wypkl/video/upload/v1778522974/Dexter_Doakes_Famous_Meme_template_shorts_dexter_djd9do.mp4",

        tags: [
            "Instagram",
            "Trending"
        ],

        description:
        "Dexter Doakes Famous Meme template"
    },

    {
        title: "IshowSpeed sleep meme template",

        video:
        "https://res.cloudinary.com/dos0wypkl/video/upload/v1778522967/IshowSpeed_sleep_meme_template._iroehi.mp4",

        tags: [
            "Instagram",
            "Trending"
        ],

        description:
        "IshowSpeed sleep meme template"
    },

    {
        title: "Zoolander Meme Template 4K",

        video:
        "https://res.cloudinary.com/dos0wypkl/video/upload/v1778522963/Zoolander_Meme_Template_4K_60FPS_solw2v.mp4",

        tags: [
            "Instagram",
            "Trending"
        ],

        description:
        "Zoolander Meme Template - staring at someone and walking away"
    },

    {
        title: "Explaining Meme Template",

        video:
        "https://res.cloudinary.com/dos0wypkl/video/upload/v1778522960/Explaining_Meme_Template_vu8tzx.mp4",

        tags: [
            "Instagram",
            "Trending"
        ],

        description:
        "Explaining Meme Template "
    },

    {
        title: "Gunna Writing In Fire Meme Template",

        video:
        "https://res.cloudinary.com/dos0wypkl/video/upload/v1778522959/Gunna_Writing_In_Fire_Meme_Template_FHD_60FPS_vlca4d.mp4",

        tags: [
            "Instagram",
            "Trending"
        ],

        description:
        "Gunna Writing In Fire Meme Template - writning something with fired scripts"
    },

    {
        title: "Skeleton Smoking Meme Template",

        video:
        "https://res.cloudinary.com/dos0wypkl/video/upload/v1778522956/Skeleton_Smoking_Meme_Template_%EF%B8%8F_s4lzdk.mp4",

        tags: [
            "Instagram",
            "Trending"
        ],

        description:
        "Skeleton Smoking Meme Template"
    },

    {
        title: "Patrick Bateman Sigma Meme Template",

        video:
        "https://res.cloudinary.com/dos0wypkl/video/upload/v1778522951/Patrick_Bateman_Sigma_Meme_Template_iu3hlm.mp4",

        tags: [
            "Instagram",
            "Trending"
        ],

        description:
        "Patrick Bateman Sigma Meme Template"
    },

    {
        title: "Homelander Staring And Being Sad",

        video:
        "https://res.cloudinary.com/dos0wypkl/video/upload/v1778522939/Homelander_Staring_And_Being_Sad_Meme_Template_Meme_Templates_By_Tayef_k2gh3l.mp4",

        tags: [
            "Instagram",
            "Trending"
        ],

        description:
        "Homelander Staring And Being Sad meme template"
    }


];

/* ===================================================
   VARIABLES
=================================================== */

const templatesGrid =
document.getElementById("templatesGrid");

const loadMoreBtn =
document.getElementById("loadMoreBtn");

const searchInput =
document.getElementById("searchInput");

const filterButtons =
document.querySelectorAll(".filter-btn");

let currentIndex = 0;

let activeFilter = "all";

/* ===================================================
   CREATE CARD
=================================================== */

function createCard(meme){

    const card =
    document.createElement("div");

    card.className =
    "template-card";

    card.dataset.tags =
    meme.tags.join(" ").toLowerCase();

    card.innerHTML = `

    <div class="video-box">

        <video
            controls
            preload="metadata"
            controlsList="nodownload">

            <source
                src="${meme.video}"
                type="video/mp4">

        </video>

    </div>

    <div class="template-content">

        <h3>${meme.title}</h3>

        <p>${meme.description}</p>

        <div class="tags">

            ${meme.tags.map(tag => `

                <span class="tag">
                    ${tag}
                </span>

            `).join("")}

        </div>

        <div class="buttons">

    <a
    href="${meme.video}"
    target="_blank"
    class="btn">

        <i class='bx bx-play'></i>

        Watch

    </a>

    <a
href="${meme.video.replace('/upload/', '/upload/fl_attachment:' + meme.title.replace(/\s+/g,'_') + '/')}"
class="btn">

    <i class='bx bx-download'></i>

    Download

</a>

</div>

    </div>

    `;

    templatesGrid.appendChild(card);

}

/* ===================================================
   LOAD TEMPLATES
=================================================== */

function loadTemplates(number){

    for(let i = 0; i < number; i++){

        if(currentIndex >= memeVideos.length){

            loadMoreBtn.innerText =
            "No More Templates";

            loadMoreBtn.disabled = true;

            return;
        }

        createCard(
            memeVideos[currentIndex]
        );

        currentIndex++;

    }

}

/* ===================================================
   INITIAL LOAD
=================================================== */

loadTemplates(6);

/* ===================================================
   LOAD MORE
=================================================== */

loadMoreBtn.addEventListener("click", () => {

    loadTemplates(4);

});

/* ===================================================
   SEARCH FUNCTION
=================================================== */

searchInput.addEventListener("keyup", () => {

    const value =
    searchInput.value.toLowerCase();

    const cards =
    document.querySelectorAll(".template-card");

    cards.forEach(card => {

        const title =
        card.querySelector("h3")
        .innerText
        .toLowerCase();

        const tags =
        card.dataset.tags;

        const matchSearch =

            title.includes(value) ||
            tags.includes(value);

        const matchFilter =

            activeFilter === "all" ||

            tags.includes(activeFilter);

        if(matchSearch && matchFilter){

            card.style.display =
            "flex";

        }

        else{

            card.style.display =
            "none";

        }

    });

});

/* ===================================================
   FILTER FUNCTION
=================================================== */

filterButtons.forEach(button => {

    button.addEventListener("click", () => {

        document
        .querySelector(".filter-btn.active")
        .classList.remove("active");

        button.classList.add("active");

        activeFilter =
        button.dataset.filter.toLowerCase();

        const cards =
        document.querySelectorAll(".template-card");

        cards.forEach(card => {

            const tags =
            card.dataset.tags;

            const title =
            card.querySelector("h3")
            .innerText
            .toLowerCase();

            const searchValue =
            searchInput.value.toLowerCase();

            const matchSearch =

                title.includes(searchValue) ||

                tags.includes(searchValue);

            const matchFilter =

                activeFilter === "all" ||

                tags.includes(activeFilter);

            if(matchSearch && matchFilter){

                card.style.display =
                "block";

            }

            else{

                card.style.display =
                "none";

            }

        });

    });

});