<?php
function add_js_functions(){
?>
<script>
let games = [0];
let wins = [0];
let losses = [];
let percentage = [0];
let roundedPercentage;
let victory = 0;
let teamNameAssignment = "";
let blankSpaces;
let el;
let listOfGuesses;
let listOfWrongGuesses;
let wrongGuesses;
let ele;
let elem;
let userGuess;
let eleme;
let wg;

document.getElementById('try').className += 'nfl';

function format() {

    jQuery("#try").removeClass();

    document.getElementById('try').className += 'nfl';



    victory = 0;

    const teamNames = [
        "bears",
        "bengals",
        "bills",
        "broncos",
        "browns",
        "buccaneers",
        "cardinals",
        "chargers",
        "chiefs",
        "colts",
        "cowboys",
        "dolphins",
        "eagles",
        "falcons",
        "fortyniners",
        "giants",
        "jaguars",
        "jets",
        "lions",
        "packers",
        "panthers",
        "patriots",
        "raiders",
        "rams",
        "ravens",
        "redskins",
        "saints",
        "seahawks",
        "steelers",
        "texans",
        "titans",
        "vikings",
    ];
    teamNameAssignment = teamNames[Math.floor(Math.random() * teamNames
        .length)];
    blankSpaces = [];
    listOfWrongGuesses = [];

    wg = document.getElementById("firstGuess");
    wg.innerHTML = listOfWrongGuesses;

    for (let i = 0; i < teamNameAssignment.length; i++) {
        blankSpaces[i] = "*";
    }
    el = document.getElementById("teamContainer");
    el.innerHTML = blankSpaces.join(" ");



    listOfGuesses = [];
    listOfWrongGuesses = [];
    wrongGuesses = 5;
    ele = document.getElementById(
        "missedAttemtsLeft");
    ele.innerHTML = wrongGuesses;

    document.getElementById("myAudio").pause();



};
addNFL();
newLetter();


function addNFL() {

    if (!victory === (teamNameAssignment.length - 1)) {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("nfl");
    }
}


function ImagesOfTeams() {




    console.log("teamname " +
        teamNameAssignment + victory + teamNameAssignment.length);


    if (victory === (teamNameAssignment.length - 1) &&
        teamNameAssignment === "bears") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("bears");
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "browns") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("browns");
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "bengals") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("bengals")
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "bills") {

        jQuery("#try").removeClass();
        jQuery("#try").addClass("bills")
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "broncos") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("broncos")
    };


    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "buccaneers") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("buccaneers")
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "cardinals") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("cardinals")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "chargers") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("chargers")
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "chiefs") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("chiefs")
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "colts") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("colts")
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "cowboys") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("cowboys")
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "dolphins") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("dolphins")
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "eagles") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("eagles")
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "falcons") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("falcons")
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "fortyniners") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("fortyniners")
    };


    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "giants") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("giants")
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "jaguars") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("jaguars")
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "jets") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("jets")
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "lions") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("lions")
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "packers") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("packers")
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "panthers") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("panthers")
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "patriots") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("patriots")
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "raiders") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("raiders")
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "rams") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("rams")
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "ravens") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("ravens")
    };


    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "redskins") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("redskins")
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "saints") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("saints")
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "seahawks") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("seahawks")
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "steelers") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("steelers")
    };

    if (victory === teamNameAssignment.length && teamNameAssignment === "texans") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("texans")
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "titans") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("titans")
    };

    if (victory === (teamNameAssignment.length - 1) && teamNameAssignment === "vikings") {
        jQuery("#try").removeClass();
        jQuery("#try").addClass("vikings")

    };
    if (!victory === (teamNameAssignment.length - 1)) {

        jQuery("#try").removeClass();
        jQuery("#try").addClass("nfl")
    };

}

ImagesOfTeams();

function newLetter() {
    document.onkeyup = function(event) {



        if (event.keyCode >= 65 && event.keyCode <= 90) {
            userGuess = event.key.toLowerCase();



            ImagesOfTeams()
            addNFL()


            let doubles = listOfGuesses.includes(userGuess);



            if (doubles === true) {
                alert("That letter has already been guessed. TRY AGAIN");
                return false;
            }

            for (var i = 0; i < teamNameAssignment.length; i++) {
                if (teamNameAssignment[i] === userGuess && doubles === false) {
                    blankSpaces[i] = userGuess;
                    victory++;
                    listOfGuesses.push(userGuess);

                }
            }
            if (teamNameAssignment.indexOf(userGuess) == -1 && !listOfWrongGuesses.includes(" " + userGuess)) {
                listOfWrongGuesses.push(" " + userGuess);
                wrongGuesses--;
                wg = document.getElementById("firstGuess");
                wg.innerHTML = listOfWrongGuesses;

                ("wrong guesses", listOfWrongGuesses);
            }


            if (victory === teamNameAssignment.length) {



                alert(
                    "Congratulations, You Won! Click the button below to play again."
                );

                games++;
                wins++;
                elem = document.getElementById("winTotal");
                elem.innerHTML = wins;

                percentage = (wins / games) * 100;
                roundedPercentage = Math.round(10 * percentage) / 10;

                eleme = document.getElementById("winningPercentage");
                eleme.innerHTML = roundedPercentage;

                document.getElementById("button").innerHTML =
                    "Click Here To Play Again";

            }

            if (wrongGuesses === 0) {
                alert("You lost. The team was " + teamNameAssignment + ". Click the button below to try again!");
                games++;
                losses++;
                elem = document.getElementById("lossTotal");
                elem.innerHTML = " " + losses;

                percentage = (wins / games) * 100;
                roundedPercentage = Math.round(10 * percentage) / 10;

                eleme = document.getElementById("winningPercentage");
                eleme.innerHTML = roundedPercentage;

                document.getElementById("try").style.backgroundImage =
                    "url('./images/" + teamNameAssignment + ".png')";

                document.getElementById("button").innerHTML =
                    "Click Here To Play Again";
            }

            el = document.getElementById("teamContainer");
            el.innerHTML = blankSpaces.join(" ");

            ele = document.getElementById("missedAttemtsLeft");
            ele.innerHTML = " " + wrongGuesses;

            return true;
        } else {
            alert("Please input alphabet characters only");
            return false;
        }
    };
};
</script>
<?php
}



add_action('wp_head','add_js_functions');