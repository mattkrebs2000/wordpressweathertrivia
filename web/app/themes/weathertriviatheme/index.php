<body class="bg">
    <?php get_header(); ?>


    <div>
        <div class="container" class="hidden">
            <div class="container-fluid">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <p id="title">
                            Geography & Weather
                            <br>Trivia Challenge</p>

                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12">
                    <div class="d-flex justify-content-center">

                        <button id="begin" class="btn btn-primary btn-md">Begin</button>




                    </div>
                </div>
            </div>








            <div id="bottom-Container">
                <div id="waitTime" class="d-flex justify-content-center" class="hidden">"Please wait for a few sections
                    as
                    we retrieve real time data for your question."</div>

                <div id="bottom" class="container">
                    <div class="d-flex justify-content-center">








                        <div id="wins-container">
                            <div id="answerText" class="alsoHidden">
                                <div id="openingStatement"></div>
                                <ul>
                                    <br>
                                    <br>
                                    <li id="firstOption"></li>
                                    <br>
                                    <li id="secondOption"></li>
                                    <br>
                                    <li id="thirdOption"></li>
                                    <br>
                                    <li id="fourthOption"></li>
                                </ul>


                            </div>

                            <container id="hidden" class="hidden">

                                <div class="row">
                                    <div class="col-12">

                                        <div id="lead" class="d-flex justify-content-center">

                                            <span class="stats"> <span id="timeRemaining">
                                                    Time Remaining:<span id="time">30</span> </span>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-center">
                                                <span class="stats">
                                                    <span id="correct2"> Correct: <span id="correct">0</span> &nbsp;
                                                        &nbsp;<span id="incorrect2">
                                                            Incorrect:</span>
                                                        <span id="incorrect">0</span>
                                                    </span>


                                                </span></span></span></span>
                                                <div>


                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>




                                <br>



                                <p id="question"></p>

                                <input type="radio" name="colors" id="myRadio"><span id="loc1"></span><br>

                                <input type="radio" name="colors" id="myRadio2"><span id="loc2"></span><br>

                                <input type="radio" name="colors" id="myRadio3"><span id="loc3"></span><br>

                                <input type="radio" name="colors" id="myRadio4"><span id="loc4"></span><br>


                                <br>

                                <button id="submit">Submit</button>
                            </container>



                        </div>


                    </div>

                </div>


            </div>





            <?php get_footer(); ?>
</body>