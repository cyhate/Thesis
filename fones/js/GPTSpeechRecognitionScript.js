const btn = document.querySelector('.start-btn');
const stop = document.querySelector('.stop-btn');
const refreshBtn = document.querySelector('.refresh-btn');
const texts = document.querySelector(".texts");

// Change the API key. Do NOT deploy this API key or upload it to GitHub
const API_KEY = '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';

const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
const recognition = new SpeechRecognition();
recognition.interimResults = true;

let isRecognitionOn = false;

recognition.onstart = function() {
  console.log('Voice is activated. You can speak into the microphone.');
};

var GTPstartbtn = document.getElementById("GTPstartbtn");
var GTPstopbtn = document.getElementById("GTPstopbtn");
var GTPrefreshbtn = document.getElementById("GTPrefreshbtn");

GTPstartbtn.addEventListener('click', startGTPRecording);
GTPstopbtn.addEventListener('click', stopGTPRecording);
GTPrefreshbtn.addEventListener('click', refreshPage);

function startGTPRecording() {
  isRecognitionOn = true;
  recognition.addEventListener("result", handleRecognitionResult);
  recognition.start();
  
  console.log("GTPstart-btn clicked");
    
    var constraints = { audio: true, video:false }

	GTPstartbtn.disabled = true;
	GTPstopbtn.disabled = false;
	GTPrefreshbtn.disabled = false;

	navigator.mediaDevices.getUserMedia(constraints).then(function(stream) {
		console.log("getUserMedia() success, stream created, initializing Recorder.js ...");

		audioContext = new AudioContext();

		document.getElementById("formats").innerHTML="Format: 1 channel pcm @ "+audioContext.sampleRate/1000+"kHz"

		gumStream = stream;
		
		input = audioContext.createMediaStreamSource(stream);

		rec = new Recorder(input,{numChannels:1})

		rec.record()

		console.log("Recording started");

	}).catch(function(err) {
    	GTPstartbtn.disabled = false;
    	GTPstopbtn.disabled = true;
    	GTPrefreshbtn.disabled = true;
	});
}

function stopGTPRecording() {
  isRecognitionOn = false;
  recognition.removeEventListener("result", handleRecognitionResult);
  recognition.stop();
  
  console.log("GTPstopbtn clicked");

	//disable the stop button, enable the record too allow for new recordings
	GTPstartbtn.disabled = false;
	GTPstopbtn.disabled = true;
	GTPrefreshbtn.disabled = false;

	//reset button just in case the recording is stopped while paused
	//pauseButton.innerHTML="Pause";
	
	//tell the recorder to stop the recording
	rec.stop();

	//stop microphone access
	gumStream.getAudioTracks()[0].stop();

	//create the wav blob and pass it on to uploadGTPRecording
	rec.exportWAV(uploadGTPRecording);
}

function refreshPage() {
	
	
	console.log("GTPrefreshbtn clicked");
	
  location.reload();
  
}

recognition.addEventListener("end", () => {
  if (isRecognitionOn) {
    recognition.start();
  }
});

function handleRecognitionResult(e) {
  const text = Array.from(e.results)
    .map((result) => result[0])
    .map((result) => result.transcript)
    .join("");

  if (e.results[0].isFinal) {
    getMessage(text);
  }
}


async function getMessage(text) {
  console.log('Sending message:', text);
  const options = {
    method: 'POST',
    headers: {
      'Authorization': `Bearer ${API_KEY}`,
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({
      model: "gpt-3.5-turbo",
      messages: [{ role: "user", content: text }],
      max_tokens: 100
    })
  };

  try {
    const response = await fetch('https://api.openai.com/v1/chat/completions', options);
    const data = await response.json();
    console.log('Response:', response);
    console.log('Data:', data);

    if (response.ok) {
      if (data.choices && data.choices.length > 0 && data.choices[0].message && data.choices[0].message.content) {
        if (text.trim() !== "") {
          const pElement = document.createElement('p');
          pElement.textContent = text;
          texts.appendChild(pElement);
        }
		
		const messageContent = data.choices[0].message.content;
        const p = document.createElement("p");
        p.classList.add("replay");
        p.innerText = messageContent;
        texts.appendChild(p);

        
      } else {
        console.error('Invalid response format');
      }
    } else {
      console.error('Request failed with status:', response.status);
    }
  } catch (error) {
    console.error('Error:', error);
  }
}



recognition.onerror = function(event) {
  console.error('Speech recognition error occurred:', event.error);
};



function uploadGTPRecording(blob) {
	var url = URL.createObjectURL(blob);
	var filename = new Date().toISOString() + ".wav";

	// create a FormData object and append the blob data with a specific field name
	var formData = new FormData();
	formData.append("audio_dataGPT", blob, filename);

	// send the FormData object to the server using XMLHttpRequest
	var xhr = new XMLHttpRequest();
	xhr.onload = function (e) {
		if (this.readyState === 4) {
			console.log("Server returned:", e.target.responseText);
			// Handle the response from the server here
		}
	};
	xhr.open("POST", "GTPupload.php", true);
	xhr.send(formData);
}


