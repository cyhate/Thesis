const btn = document.querySelector('.start-btn');
const stop = document.querySelector('.stop-btn');
const refreshBtn = document.querySelector('.refresh-btn');
const texts = document.querySelector(".texts");

const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
const recognition = new SpeechRecognition();
recognition.interimResults = true;

let p = document.createElement("p");
let isRecognitionOn = false;

recognition.onstart = function() {
  console.log('Voice is activated. You can speak into the microphone.');
};

btn.addEventListener('click', startRecording);
stop.addEventListener('click', stopRecording);
refreshBtn.addEventListener('click', refreshPage);

function startRecording() {
  isRecognitionOn = true;
  recognition.addEventListener("result", handleRecognitionResult);
  recognition.start();
}



function stopRecording() {
  isRecognitionOn = false;
  recognition.removeEventListener("result", handleRecognitionResult);
  recognition.stop();
}

function refreshPage() {
  location.reload();
}

recognition.addEventListener("end", () => {
  if (isRecognitionOn) {
    recognition.start();
  }
});

function handleRecognitionResult(e) {
  texts.appendChild(p);
  const text = Array.from(e.results)
    .map((result) => result[0])
    .map((result) => result.transcript)
    .join("");

  p.innerText = text;
  if (e.results[0].isFinal) {
    if (text.toLowerCase().includes("hello")) {
      p = document.createElement("p");
      p.classList.add("replay");
      p.innerText = "Hello!";
      texts.appendChild(p);
    }
    if (text.toLowerCase().includes("hi")) {
      p = document.createElement("p");
      p.classList.add("replay");
      p.innerText = "Hi!";
      texts.appendChild(p);
    }
    if (text.toLowerCase().includes("how are you")) {
      p = document.createElement("p");
      p.classList.add("replay");
      p.innerText = "I'm doing well, thank you for asking. How about you?";
      texts.appendChild(p);
    }
    if (text.toLowerCase().includes("i am fine") || text.toLowerCase().includes("good")) {
        p = document.createElement("p");
        p.classList.add("replay");
        p.innerText = "Glad to hear that. How can I assist you?";
        texts.appendChild(p);
      }
    if (text.toLowerCase().includes("what's your name") || text.toLowerCase().includes("what is your name")) {
      p = document.createElement("p");
      p.classList.add("replay");
      p.innerText = "My Name is FonesGPT. What's yours?";
      texts.appendChild(p);
    }
if (text.toLowerCase().includes("my name is")) {
  const name = text.split("my name is")[1].trim();
  const p = document.createElement("p");
  p.classList.add("reply");
  p.textContent = `Nice to meet you, ${name}. How can I assist you?`;
  document.querySelector(".texts").appendChild(p);
}
    if (text.toLowerCase().includes("go to the homepage")) {
      p = document.createElement("p");
      p.classList.add("replay");
      p.innerText = "Opening Ηomepage";
      texts.appendChild(p);
      console.log("Opening Youtube");
      window.open("http://localhost/fones/index.php");
    }

    if (text.toLowerCase().includes("open youtube")) {
      p = document.createElement("p");
      p.classList.add("replay");
      p.innerText = "Opening Youtube";
      texts.appendChild(p);
      console.log("Opening Youtube");
      window.open("https://www.youtube.com/");
    }
if (text.toLowerCase().includes("open google")) { 
      p = document.createElement("p");
      p.classList.add("replay");
      p.innerText = "Opening Google";
      texts.appendChild(p);
      console.log("Opening Google");
      window.open("https://www.google.com/");
    }
    if (text.toLowerCase().includes("open facebook")) { 
      p = document.createElement("p");
      p.classList.add("replay");
      p.innerText = "Opening Facebook";
      texts.appendChild(p);
      console.log("Opening Facebook");
      window.open("https://www.facebook.com/");
    }
if (text.toLowerCase().includes("what time is it")) { 
      p = document.createElement("p");
      p.classList.add("replay");
      p.innerText = new Date().toLocaleTimeString();
      texts.appendChild(p);
      console.log("Time: " + new Date().toLocaleTimeString());
    }
if (text.toLowerCase().includes("what day is it")) {
      const now = new Date();
      const options = { weekday: "long", month: "long", day: "numeric" };
      const date = now.toLocaleDateString("en-US", options);
      p = document.createElement("p");
      p.classList.add("replay");
      p.innerText = `Today is ${date}.`;
      texts.appendChild(p);
    }
   if (text.toLowerCase().includes("what is the weather")) {
  const p = document.createElement("p");
  p.classList.add("reply");
  fetch("https://api.openweathermap.org/data/2.5/weather?q=cityname&appid=yourapikey")
    .then(response => response.json())
    .then(data => {
      const weather = data.weather[0].description;
      p.textContent = `The weather is currently ${weather}.`;
      texts.appendChild(p);
    })
    .catch(error => {
      p.textContent = "Sorry, I couldn't fetch the weather information.";
      texts.appendChild(p);
    });
}
//**************GREEK************************
    if (text.toLowerCase().includes("γεία σου")) {
      p = document.createElement("p");
      p.classList.add("replay");
      p.innerText = "Γειά σου!";
      texts.appendChild(p);
    }
    if (text.toLowerCase().includes("γεια")) {
      p = document.createElement("p");
      p.classList.add("replay");
      p.innerText = "Γεια!";
      texts.appendChild(p);
    }
    if (text.toLowerCase().includes("πώς είσαι")|| text.toLowerCase().includes("τι κάνεις")) {
      p = document.createElement("p");
      p.classList.add("replay");
      p.innerText = "Τα πάω καλά, ευχαριστώ που με ρώτησες. Εσύ πως είσαι;";
      texts.appendChild(p);
    }
    if (text.toLowerCase().includes("είμαι καλά") || text.toLowerCase().includes("κάλα")) {
        p = document.createElement("p");
        p.classList.add("replay");
        p.innerText = "Χαίρομαι που το ακούω. Πως μπορώ να σας βοηθήσω;";
        texts.appendChild(p);
      }
    if (text.toLowerCase().includes("ποιο είναι το όνομά σου") || text.toLowerCase().includes("πώς σε λένε")) {
      p = document.createElement("p");
      p.classList.add("replay");
      p.innerText = "Το όνομά μου είναι FonesGPT. Το δικό σου όνομα;";
      texts.appendChild(p);
    }
if (text.toLowerCase().includes("το όνομά μου είναι")) {
  const name = text.split("το όνομά μου είναι")[1].trim();
  const p = document.createElement("p");
  p.classList.add("reply");
  p.textContent = `Χαίρομαι που σε γνωρίζω, ${name}. Πως μπορώ να σας βοηθήσω;`;
  document.querySelector(".texts").appendChild(p);
}
    if (text.toLowerCase().includes("πήγαινε στην αρχική σελίδα")) {
      p = document.createElement("p");
      p.classList.add("replay");
      p.innerText = "Άνοιγμα Αρχικής σελίδα";
      texts.appendChild(p);
      console.log("Opening Youtube");
      window.open("http://localhost/fones/index.php");
    }
    if (text.toLowerCase().includes("άνοιξε το youtube")) {
      p = document.createElement("p");
      p.classList.add("replay");
      p.innerText = "Άνοιγμα του Youtube";
      texts.appendChild(p);
      console.log("Άνοιγμα του Youtube");
      window.open("https://www.youtube.com/");
    }
if (text.toLowerCase().includes("άνοιξε  το google")) { 
      p = document.createElement("p");
      p.classList.add("replay");
      p.innerText = "Άνοιγμα του Google";
      texts.appendChild(p);
      console.log("ανοίγοντας το google");
      window.open("https://www.google.com/");
    }
    if (text.toLowerCase().includes("άνοιξε  το facebook")) { 
      p = document.createElement("p");
      p.classList.add("replay");
      p.innerText = "Άνοιγμα του Facebook";
      texts.appendChild(p);
      console.log("Opening Facebook");
      window.open("https://www.facebook.com/");
    }
if (text.toLowerCase().includes("τι ώρα είναι")) { 
      p = document.createElement("p");
      p.classList.add("replay");
      p.innerText = new Date().toLocaleTimeString();
      texts.appendChild(p);
      console.log("Time: " + new Date().toLocaleTimeString());
    }
if (text.toLowerCase().includes("τι μέρα είναι")) {
      const now = new Date();
      const options = { weekday: "long", month: "long", day: "numeric" };
      const date = now.toLocaleDateString("en-US", options);
      p = document.createElement("p");
      p.classList.add("replay");
      p.innerText = `Σήμερα είναι ${date}.`;
      texts.appendChild(p);
    }
   if (text.toLowerCase().includes("πώς είναι ο καιρός")) {
  const p = document.createElement("p");
  p.classList.add("reply");
  fetch("https://api.openweathermap.org/data/2.5/weather?q=cityname&appid=yourapikey")
    .then(response => response.json())
    .then(data => {
      const weather = data.weather[0].description;
      p.textContent = `Ο καιρός είναι αυτή τη στιγμή ${weather}.`;
      texts.appendChild(p);
    })
    .catch(error => {
      p.textContent = "Δυστυχώς, δεν μπόρεσα να ανακτήσω τις πληροφορίες για τον καιρό.";
      texts.appendChild(p);
    });
}

    p = document.createElement("p");
  }
}




recognition.onerror = function(event) {
  console.error('Speech recognition error occurred:', event.error);
};
