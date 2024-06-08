let music = [
    "We-Don't-Talk-Anymore_320(PaglaSongs)",
    "Incredible_320(PaglaSongs)",
    "Paul-Walker-See-You-Again_320(PaglaSongs)",
    "Taka-Taki_320(PaglaSongs)",
    "Brazilian-Phonk-Mano(PaglaSongs)",
    "One-Day(PaglaSongs)",
    "Waka-Waka_320(PaglaSongs)",
    "Marshmello-Alone_320(PaglaSongs)",
    "Moye Moye_320(PagalWorld.com.sb)",
    "Hare Krishna Mahamantra(PagalWorld.com.sb)",
    "Chupke Se Remix - Debb(PagalWorld.com.sb)",
    "_Tu Hai Kahan_320(PagalWorld.com.sb)",
    "_Soulmate_320(PagalWorld.com.sb)",
    "Dheere Dheere Bol (Hip Hop Trap Mix)_320(PagalWorld.com.sb)",
    "Blue_320(PaglaSongs)",
    "Vanna-Rainelle---YAD-Яд-ENGLISH-VERSION(pagalworld.me.uk)",
    "Heart-over-Mind_320(PaglaSongs)",
    "Memory-Reboot_320(PaglaSongs)",
    "One-Direction-Story-of-My-Life_320(PaglaSongs)",
    "Bewafa x Simulation - DJ Shadow Dubai Mashup 2024(PagalWorld.com.sb)"
];

let progress = document.getElementById("progress");
let song = document.getElementById("song");
let icon = document.getElementById("icon");
let img = document.getElementById("song-img");

let buttons = document.querySelectorAll(".btn");
buttons.forEach(function(button) {
    button.addEventListener("click", function() {
        let music_no = Number(button.value);
        if (music_no >= 0 && music_no < music.length) {
            song.src = "songs/" + music[music_no] + ".mp3";
            song.play();
            icon.src = "icons/video-pause-button.png";
            img.src = "884a408310b28171aa1018f77dee2602.gif";
        } else {
            alert("sorray its not found");
        }
    });
});

song.onloadedmetadata = function() {
    progress.max = song.duration;
    progress.value = song.currentTime;
};

function playPause() {
    if (song.paused) {
        song.play();
        icon.src = "icons/video-pause-button.png";
        img.src = "884a408310b28171aa1018f77dee2602.gif";
    } else {
        song.pause();
        icon.src = "icons/play-button.png";
        img.src = "Screenshot 2024-06-08 164354.png";
    }
}

setInterval(() => {
    if (!song.paused) {
        progress.value = song.currentTime;
    }
}, 500);

progress.oninput = function() {
    song.currentTime = progress.value;
};

function skipBackward() {
    song.currentTime -= 10;
}

function skipForward() {
    song.currentTime += 10;
}
function shuffleMusic() {
}