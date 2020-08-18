<?php
function add_js_functions(){
?>
<script>
jQuery(document).ready(function() {

    endWait();

    var pos = 30;
    var minimum;
    var tempArray = [];
    var townArray = [];
    var number1;
    var number2;
    var number3;
    var number4;
    var startedMotion;
    var selectedName;


    var indexOfQuestions = 0;
    var problemsComplete = 0;
    var correct = 0;
    var incorrect = 0;
    var playerAnswer;
    var showThis;
    var startedMotion;
    var nonAnswers = [];







    var Cities = ["Fairbanks, Alaska", "Ulaanbaatar, Mongolia", "Yakutsk, Russia",
        "Harbin, Heilongjiang, China", "International Falls, Minnesota", "Yukon, Canada",
        "Fraser, Colorado", "Sarmiento, Argentina", "Glen Innes, Australia", "Sutherland, South Africa",
        "Erzurum, Turkey", "Dallol, Ethiopia", "Buenos Aires, Argentina", "Wadi Halfa, Sudan",
        "Tel Aviv, Israel", "Melbourne, Australia", "Timbuktu, Mali", "Ghadames, Libya", "Kebili, Tunisia",
        "Las Vegas, Nevada", "Mexico City, Mexico", "Vancouver, Canada", "Paris, France",
        "Barcelona, Spain", "London, England", "Boston, Massachusetts", "Philadelphia, Pennsylvania",
        "Quito, Ecuador", "Nairobi, Kenya", "Cali, Colombia", "Fortaleza, Brazil", "Guayaquil, Ecuador",
        "Medan, Indonesia", "Singapore", "Kuala Lumpur, Malaysia", "Bogota, Colombia"
    ];






    arrayOfTownsToBeUsed = [];


    indexArrayForCitySelectionQ1 = [];

    var q1a1 = "";
    var q1a2 = "";
    var q1a3 = "";
    var q1a4 = "";

    function getNames() {


        for (i = 0; i < 4; i++) {

            var newIndex1 = (Math.floor((Math.random() * 35)))

            if (!indexArrayForCitySelectionQ1.includes(newIndex1)) {
                indexArrayForCitySelectionQ1.push(newIndex1);
            } else {

                i--
            }

        }
        console.log("4 indexes" + indexArrayForCitySelectionQ1)

        var firstIndex1 = indexArrayForCitySelectionQ1[0];
        var secondIndex1 = indexArrayForCitySelectionQ1[1];
        var thirdIndex1 = indexArrayForCitySelectionQ1[2];
        var fourthIndex1 = indexArrayForCitySelectionQ1[3];

        console.log(firstIndex1);
        console.log(secondIndex1);
        console.log(thirdIndex1);
        console.log(fourthIndex1);

        q1a1 = (Cities[firstIndex1]);
        q1a2 = (Cities[secondIndex1]);
        q1a3 = (Cities[thirdIndex1]);
        q1a4 = (Cities[fourthIndex1]);


        // console.log(q1a1);
        // console.log(q1a2);
        // console.log(q1a3);
        // console.log(q1a4);

    }


    function getTemps() {

        var APIKey = "166a433c57516f51dfab1f7edaed8413";

        // "479d6727fd4bd4560275fbd6b4e204cc";

        var queryURL = "https://api.openweathermap.org/data/2.5/weather?" +
            "q=" + q1a1 + "&units=imperial&appid=" + APIKey;


        var queryURL2 = "https://api.openweathermap.org/data/2.5/weather?" +
            "q=" + q1a2 + "&units=imperial&appid=" + APIKey;


        var queryURL3 = "https://api.openweathermap.org/data/2.5/weather?" +
            "q=" + q1a3 + "&units=imperial&appid=" + APIKey;


        var queryURL4 = "https://api.openweathermap.org/data/2.5/weather?" +
            "q=" + q1a4 + "&units=imperial&appid=" + APIKey;




        jQuery.ajax({
                url: queryURL,
                method: "GET"
            })

            .then(function(response) {

                number1 = parseInt(response.main.temp);

                tempArray.push(number1);
                townArray.push(response.name);
                console.log(response.name + number1);


            });

        jQuery.ajax({
                url: queryURL2,
                method: "GET"
            })

            .then(function(response) {

                number2 = parseInt(response.main.temp);

                tempArray.push(number2);
                townArray.push(response.name);
                console.log(response.name + number2);

                // console.log("tempArray" + tempArray);
                // console.log("townArray" + townArray);


            });

        jQuery.ajax({
                url: queryURL3,
                method: "GET"
            })

            .then(function(response) {

                number3 = parseInt(response.main.temp);

                tempArray.push(number3);
                townArray.push(response.name);
                console.log(response.name + number3);

                // console.log("tempArray" + tempArray);
                // console.log("townArray" + townArray);



                // console.log("tempArray" + tempArray);
                // console.log("townArray" + townArray);

            });

        jQuery.ajax({
                url: queryURL4,
                method: "GET"
            })

            .then(function(response) {


                number4 = parseInt(response.main.temp);

                tempArray.push(number4);
                townArray.push(response.name);
                console.log(response.name + number4);

                // console.log("tempArray" + tempArray);
                // console.log("townArray" + townArray);

                console.log("tempArray" + tempArray);
                console.log("townArray" + townArray);



            });


    };

























    function findCities() {
        var selectedCities = [];
        for (i = 0; i < 4; i++) {


        }




    }



    function scoring() {

        if (minimum == playerAnswer) {

            correct++;
            document.getElementById("correct").innerHTML = correct;






        } else if (minimum > playerAnswer || minimum < playerAnswer) {

            incorrect++;
            document.getElementById("incorrect").innerHTML = incorrect;







        }




    }





    //    jQuery("#temperature").html(json.main.temp);
    //         var newNumber=json.main.temp-273.15;
    //         var newNumber2=newNumber*(1.8);
    //         var fTemp=newNumber2+32;

    function findMinimum() {
        minimum = Math.min.apply(null, tempArray);

        showThis = `Result: min: ${minimum}`;
    }








    jQuery("#submit").on("click", function() {




        findMinimum();


        var x = document.getElementById("myRadio").value;



        var y = document.getElementById("myRadio2").value;

        var w = document.getElementById("myRadio3").value;

        var z = document.getElementById("myRadio4").value;


        if (document.getElementById('myRadio4').checked) {

            console.log("myRadio4" + z);
            playerAnswer = z;

            selectedName = (jQuery("#loc4").text());

            // document.getElementById("demo").innerHTML=z;
        } else if (document.getElementById('myRadio').checked) {

            console.log("myRadio" + x)
            playerAnswer = x;

            selectedName = (jQuery("#loc1").text());


            // document.getElementById("demo").innerHTML=x;

        } else if (document.getElementById('myRadio2').checked) {

            console.log("myRadio" + y)
            playerAnswer = y;

            selectedName = (jQuery("#loc2").text());


            // document.getElementById("demo").innerHTML=y;

        } else if (document.getElementById('myRadio3').checked) {

            console.log("myRadio" + w)
            playerAnswer = w;

            selectedName = (jQuery("#loc3").text());

        }




        function removeRed() {


            // jQuery("#bottom").addClass("bottom2");


            jQuery("#hidden").addClass("hidden");
        }











        console.log("playerAnswer" + playerAnswer);
        console.log("minimum" + minimum);

        function textOption() {
            if (minimum == playerAnswer) {

                textAfterCAnswer();

            } else {
                textAfterIAnswer();

            }
        }
        textOption();



        function textAfterCAnswer() {

            jQuery("#answerText").removeClass("alsoHidden");

            jQuery("#openingStatement").html("You answered " + selectedName +
                " which was correct. Take a look at all of the options you had to choose from.");

            jQuery("#firstOption").html(townArray[0] + ": " + tempArray[0] + " degrees farenheit");

            jQuery("#secondOption").html(townArray[1] + ": " + tempArray[1] + " degrees farenheit");

            jQuery("#thirdOption").html(townArray[2] + ": " + tempArray[2] + " degrees farenheit");

            jQuery("#fourthOption").html(townArray[3] + ": " + tempArray[3] + " degrees farenheit");






        }


        function textAfterIAnswer() {

            jQuery("#answerText").removeClass("alsoHidden");


            jQuery("#openingStatement").html("You answered " + selectedName +
                " which was incorrect. Take a look at all of the options you had to choose from.");

            jQuery("#firstOption").html(townArray[0] + ": " + tempArray[0] + " degrees farenheit");

            jQuery("#secondOption").html(townArray[1] + ": " + tempArray[1] + " degrees farenheit");

            jQuery("#thirdOption").html(townArray[2] + ": " + tempArray[2] + " degrees farenheit");

            jQuery("#fourthOption").html(townArray[3] + ": " + tempArray[3] + " degrees farenheit");


        }



        // textAfterAnswer();

        function removeAnswerText() {

            jQuery("#answerText").addClass("alsoHidden");

            jQuery("#openingStatement").html("");

            jQuery("#firstOption").html("");

            jQuery("#secondOption").html("");

            jQuery("#thirdOption").html("");

            jQuery("#fourthOption").html("");
        }

        setTimeout(removeAnswerText, 11000);

        setTimeout(scoring, 1000);
        problemsComplete++


        selectedName = "";
        arrayOfTownsToBeUsed.length = 0;
        tempArray.length = 0;
        townArray.length = 0;
        indexArrayForCitySelectionQ1.length = 0;
        jQuery("#myRadio").prop("checked", false);
        jQuery("#myRadio2").prop("checked", false);
        jQuery("#myRadio3").prop("checked", false);
        jQuery("#myRadio4").prop("checked", false);

        document.getElementById("time").innerHTML = " ";
        pos = 0;





        console.log("4 indexes" + indexArrayForCitySelectionQ1);









        console.log("problemsComplete" + problemsComplete);

        if (problemsComplete < 3000) {


            startWait();
            removeRed();
            setTimeout(problemOne, 1000 * 8);



        } else {

            textOption();
            setTimeout(startWait, 1000);
            setTimeout(removeRed, 1000);


            function finalStatement() {
                jQuery("#answerText").text("The Game Has Ended. You got " + correct + " correct and " +
                    incorrect + "incrorrect. ");
            }

            jQuery("#submit").addClass("alsohidden");



            setTimeout(finalStatement, 8000)



        };



    });





    function windClock() {

        var startedMotion = setInterval(timerRestart, 1000);

        function timerRestart() {


            if (pos == 0) {
                clearInterval(startedMotion);
                document.getElementById("time").innerHTML = " ";
            } else
                pos--;
            document.getElementById("time").innerHTML = " " + pos;

        }

    }










    function assessProblem() {




    }

    function endWait() {
        jQuery("#waitTime").addClass("hidden");
    }


    function startWait() {
        jQuery("#waitTime").removeClass("hidden");

    }

    function reset() {

        pos = 30;
        document.getElementById("time").innerHTML = pos;
    }

    function problemOne() {






        startWait();
        getNames();
        getTemps();
        setTimeout(remaining, 3000);
        setTimeout(reset, 3500);
        setTimeout(windClock, 3500);
        setTimeout(endWait, 3000);




        //figure out how to access temps for the numbers inside val.().
        function remaining() {


            var objectToChange2 = document.getElementById("timeRemaining");
            var objectToChange3 = document.getElementById("time");
            var objectToChange4 = document.getElementById("correct2");
            var objectToChange5 = document.getElementById("myRadio");
            var objectToChange6 = document.getElementById("myRadio2");
            var objectToChange7 = document.getElementById("myRadio3");
            var objectToChange8 = document.getElementById("myRadio4");
            var objectToChange9 = document.getElementById("loc1");
            var objectToChange10 = document.getElementById("loc2");
            var objectToChange11 = document.getElementById("loc3");
            var objectToChange12 = document.getElementById("loc4");
            var objectToChange13 = document.getElementById("question");
            var objectToChange14 = document.getElementById("submit");




            var pos2 = -20;
            var startedMotion2 = setInterval(frame2, 10);

            function frame2() {
                if (pos2 == 100) {
                    clearInterval(startedMotion2);
                } else
                    pos2++;

                objectToChange2.style.opacity = pos2 + "%";
                objectToChange3.style.opacity = pos2 + "%";
                objectToChange4.style.opacity = pos2 + "%";
                objectToChange5.style.opacity = pos2 + "%";
                objectToChange6.style.opacity = pos2 + "%";
                objectToChange7.style.opacity = pos2 + "%";
                objectToChange8.style.opacity = pos2 + "%";
                objectToChange9.style.opacity = pos2 + "%";
                objectToChange10.style.opacity = pos2 + "%";
                objectToChange11.style.opacity = pos2 + "%";
                objectToChange12.style.opacity = pos2 + "%";
                objectToChange13.style.opacity = pos2 + "%";
                objectToChange14.style.opacity = pos2 + "%";





            }
            frame2()

















            jQuery("#myRadio").val(number1);
            console.log($("#myRadio").val());
            jQuery("#myRadio2").val(number2);
            jQuery("#myRadio3").val(number3);
            jQuery("#myRadio4").val(number4);

            jQuery('#bottom').css({
                'opacity': '0.8'
            });
            jQuery('#bottom').css({
                'display': 'block'
            });

            // $("#bottom").removeClass("bottom2");


            jQuery("#hidden").removeClass("hidden");

            document.getElementById("question").textContent = "Which of these places is currently the coldest?";

            document.getElementById("loc1").textContent = " " + q1a1;
            document.getElementById("loc2").textContent = " " + q1a2;
            document.getElementById("loc3").textContent = " " + q1a3;
            document.getElementById("loc4").textContent = " " + q1a4;

            //scoring -- if numbers are the same correct ++ else if they are different -- incoorect ++ 

            //clear values of q1a1, q1a2 q1a3 q1a4 and create a new for loop for iddentifying new values. 
        }
    }

    jQuery("#begin").on("click", function() {


        startWait();
        setTimeout(problemOne, 1000 * .1);
        jQuery("#begin").addClass("bottom2");


    });



});
</script>
<?php
}



add_action('wp_head','add_js_functions');