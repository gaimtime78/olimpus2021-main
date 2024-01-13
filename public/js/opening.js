var firebaseConfig = {
    apiKey: "AIzaSyD-wGs2Ww5QTrQiRJYuN62jGElJKEym6NE",
    authDomain: "olimpuslive.firebaseapp.com",
    projectId: "olimpuslive",
    storageBucket: "olimpuslive.appspot.com",
    messagingSenderId: "259134614314",
    appId: "1:259134614314:web:0aa69fd6a069b3c10f0c53",
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
const db = firebase.database();
const opening_chat = db.ref("/opening");

const user_color = "hsla(" + ~~(360 * Math.random()) + "," + "70%," + "80%,1)";

// tiap ada perubahan di database
opening_chat
	// .limitToLast(1)
	.on("child_added", function (snapshot) {
    const chatbox = document.getElementById("chatbox");
    let msg_el = "";
    msg_el = `<div><b style="color:${snapshot.val().color}">${
        snapshot.val().username
    }</b>: ${snapshot.val().message}</div>`;
    chatbox.innerHTML += msg_el;
	chatbox.scrollTop = chatbox.scrollHeight;
});

// fungsi untuk mengirim message
function sendMessage() {
    opening_chat.push().set({
        username: document.getElementById("username").value,
        message: document.getElementById("message").value,
        color: user_color,
    });
	document.getElementById("message").value = "";
    return false;
}
