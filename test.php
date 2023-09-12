<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:400,700'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./src/test.css">
    <title>MBTI Personality Test</title>
</head>
<body>
    <nav>
        <div class="logo">
            <h4>MBTI Personality Test</h4>
        </div>
        <ul class="nav-links">
            <li><a href="#"> Test Page</a></li>
            <li><a href="./exploreindex.php">Explore Index</a></li>
            <li><a href="./counselling.php"> Counselling</a></li>
            <li><a href="logout.php"> Logout</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    
    <div class=questions>
        <ol>
            <li><strong class="lists"> At a party do you: </strong><br>
                <div class="radio">
                    <label>
                        <input type="radio" name="q1" value="e">
                        Interact with many people, including strangers.
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="q1" value="i">
                        Interact with those known to you.
                    </label>
                </div>
            </li>
    
            <li><strong class="lists"> What do you prioritize more? </strong><br>
                <div class="radio">
                    <label>
                        <input type="radio" name="q2" value="t">
                        Principles
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="q2" value="f">
                        Emotions
                    </label>
                </div>
            </li>
    
            <li><strong class="lists"> What is your work style?</strong><br>
                <div class="radio">
                    <label>
                        <input type="radio" name="q3" value="j">
                        I prefer to work towards deadlines. 
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="q3" value="p">
                        I work whenever I feel motivated.
                    </label>
                </div>
            </li>
    
            <li><strong class="lists">Are you more interested in : </strong><br>
                <div class="radio">
                    <label>
                        <input type="radio" name="q4" value="s">
                        What is actual.
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="q4" value="n">
                        What is possible.
                    </label>
                </div>
            </li>
    
            <li><strong class="lists"> While approaching others do you tend to be ......? </strong><br>
                <div class="radio">
                    <label>
                        <input type="radio" name="q5" value="t">
                        Precise
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="q5" value="f">
                        Personal
                    </label>
                </div>
            </li>
    
            <li><strong class="lists"> Are you more: </strong><br>
                <div class="radio">
                    <label>
                        <input type="radio" name="q6" value="j">
                        Punctual
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="q6" value="p">
                        Leisurely
                    </label>
                </div>
            </li>
    
            <li><strong class="lists">While doing ordinary things are you more likely to </strong><br>
                <div class="radio">
                    <label>
                        <input type="radio" name="q7" value="s">
                        Do it the ususal way.
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="q7" value="n">
                        Do it your own way.
                    </label>
                </div>
            </li>
    
            <li><strong class="lists">At parties do you: </strong><br>
                <div class="radio">
                    <label>
                        <input type="radio" name="q8" value="e">
                        Do you tend to enjoy even though its late.
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="q8" value="i">
                        Do you feel like leaving midway.
                    </label>
                </div>
            </li>
    
            <li><strong class="lists"> Do you think writers should:</strong><br>
                <div class="radio">
                    <label>
                        <input type="radio" name="q9" value="s">
                        Say what they mean and mean what they say.
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="q9" value="n">
                        Express things more by use of analogy.
                    </label>
                </div>
            </li>
    
            <li><strong class="lists">Which appeals to you more: </strong><br>
                <div class="radio">
                    <label>
                        <input type="radio" name="q10" value="t">
                        Logical judgments.
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="q10" value="f">
                        Value based judgments.
                    </label>
                </div>
            </li>
    
            <li><strong class="lists">Would you say are more: </strong><br>
                <div class="radio">
                    <label>
                        <input type="radio" name="q11" value="j">
                        Serious and determined.
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="q11" value="p">
                        Easy-going.
                    </label>
                </div>
            </li>
    
            <li><strong class="lists">While in company do you: </strong><br>
                <div class="radio">
                    <label>
                        <input type="radio" name="q12" value="e">
                        Find it easier to initiate convesation.
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="q12" value="i">
                        Wait to be approached.
                    </label>
                </div>
            </li>
    
            <li><strong class="lists">Common sense is:</strong><br>
                <div class="radio">
                    <label>
                        <input type="radio" name="q13" value="s">
                        Rarely questionable.
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="q13" value="n">
                        Freqently questionable.
                    </label>
                </div>
            </li>
    
            <li><strong class="lists">Are you more: </strong><br>
                <div class="radio">
                    <label>
                        <input type="radio" name="q14" value="f">
                        Gentle than firm.
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="q14" value="t">
                        Firm than gentle.
                    </label>
                </div>
            </li>
            
            <li><strong class="lists">Which is more admirable:</strong><br>
                <div class="radio">
                    <label>
                        <input type="radio" name="q15" value="j">
                        The ability to organize and be methodical.
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="q15" value="p">
                        The ability to adapt and make to.
                    </label>
                </div>
            </li>
    
            <li><strong class="lists"> Do you:</strong><br>
                <div class="radio">
                    <label>
                        <input type="radio" name="q16" value="e">
                        Speak easily and at length with strangers.
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="q16" value="i">
                        Find little to say to strangers.
                    </label>
                </div>
            </li>
        </ol>
    </div>
    
    <p id="scroll-down" class="hidden text-center">(<i>scroll down</i>)</p>    
	<p class="text-center"><button id="submit" class="btn btn-primary btn-lg">Calculate Results</button></p>

    <div id="results" class="text-center hidden">
        <br><br>
		<h2 id="type"></h2>
        <p id="type-details" class="type-description hidden">
        	<strong id="type-title"></strong><br>
            <strong><span id="type-percentage"></span> of population</strong><br>
            <span id="type-description"></span><br>
            <a id="type-site" href="exploreindex.php" target="_blank">Learn more about your type here</a>
        </p>
        <p class="pull-left"><span class="badge">E</span> (<span id="eScore"></span>%)</p>
        <p class="pull-right">(<span id="iScore"></span>%) <span class="badge">I</span></p>
        <div class="progress">
        	<div id="eiChart" class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
            <div class="center-bar"></div>
        </div>
	    <br class="clearfix">
        
        <p class="pull-left"><span class="badge">S</span> (<span id="sScore"></span>%)</p>
        <p class="pull-right">(<span id="nScore"></span>%) <span class="badge">N</span></p>
        <div class="progress">
        	<div id="snChart" class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
            <div class="center-bar"></div>
        </div>
        <br class="clearfix">
        
        <p class="pull-left"><span class="badge">T</span> (<span id="tScore"></span>%)</p>
        <p class="pull-right">(<span id="fScore"></span>%) <span class="badge">F</span></p>
        <div class="progress">
        	<div id="tfChart" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
            <div class="center-bar"></div>
        </div>
        <br class="clearfix">
        
        <p class="pull-left"><span class="badge">J</span> (<span id="jScore"></span>%)</p>
        <p class="pull-right">(<span id="pScore"></span>%) <span class="badge">P</span></p>
        <div class="progress">
        	<div id="jpChart" class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
            <div class="center-bar"></div>
        </div>
        <br class="clearfix">
    </div>

    <script src="./javascript/test.js"></script>
</body>
</html>