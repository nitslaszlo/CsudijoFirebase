
import firebase from "firebase/app";
import "firebase/firestore";

const config = {
    apiKey: "AIzaSyBfGOdMnXw0Pg--cl3MJWXBFoA5udw4kqs",
    authDomain: "csudijo-7b2ec.firebaseapp.com",
    databaseURL: "https://csudijo-7b2ec.firebaseio.com",
    projectId: "csudijo-7b2ec",
    storageBucket: "csudijo-7b2ec.appspot.com",
    messagingSenderId: "870570303571",
    appId: "1:870570303571:web:b70a4a07c158aae0"
};

const app = firebase.initializeApp(config);
const db = app.firestore();
// The timestampsInSnapshots setting now defaults to true and you no
// longer need to explicitly set it. In a future release, the setting
// will be removed entirely and so it is recommended that you remove it
// from your firestore.settings() call now.
// db.settings({ timestampsInSnapshots: true });
export default db;
