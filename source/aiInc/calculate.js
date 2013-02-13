// JavaScript Document

var satMath;
var satVerbal;
var satComposite;
var satEquivalent;
var actScore;
var satScore;
var academicIndex;
var hsGPA;
var weighted = false;
var CSR;
var aiFloor = 183.0;

function calculateSAT(){

    document.getElementById('satComposite').value = "";
    satMath = +document.getElementById('satMath').value;
		if (satMath <= 0 || satMath > 800) {
			document.getElementById('satComposite').value = "Math score is not valid.";
			satMath = 0;
			checkOtherSatScore(satEquivalent);
		}
    satVerbal = +document.getElementById('satVerbal').value;
		if (satVerbal <= 0 || satVerbal > 800) {
			document.getElementById('satComposite').value = "Verbal score is not valid.";
			satVerbal = 0;
			checkOtherSatScore(satEquivalent);
		}
    satComposite = satMath + satVerbal;
    
    if (satMath > 0 && satVerbal > 0 )
        {
            if (satComposite >= satScores[0] && satComposite <= 1600)
            {
                satScore = satComposite;
                document.getElementById('satComposite').value = satScore;
                calculateAI();
            } else document.getElementById('satComposite').value = "SAT scores are not valid.";
                
        } 
};

function getSatEquivalent(){
    actScore = document.getElementById('actScore').value;
    
    if (actScore < actScores[0] || actScore > "36")
        {
			satScore = 0;
            document.getElementById('satEquivalent').value = "ACT Score is not valid.";
			if ( satComposite > 0)
			{
				satScore = satComposite;
			}
            calculateAI();
        } else
        {
            satScore = +satScores[actScores.indexOf(actScore)];
            document.getElementById('satEquivalent').value = satScore;
            calculateAI();
        }
};

function calculateAI(){
    hsGPA = +document.getElementById('hsGPA').value;
	if ( hsGPA < 1.3 ) { hsGPA = 0; } 	// All GPAs less than 1.3 are treated as F (0.0).
    weighted = document.getElementById('gpaWeighted').checked;
    if (weighted)
        CSR = weightedCSRs[weightedGPAs.indexOf(Math.floor(hsGPA * 10) / 10)];
      else
        CSR = unweightedCSRs[unweightedGPAs.indexOf(Math.floor(hsGPA * 10) / 10)];
    
    if(satScore < satScores[0] || satScore > "1600")
    {
		satNotValid();
    } else if (document.getElementById('hsGPA').value == "")
        {
            document.getElementById('aiResult').innerHTML = "Please enter a valid high school GPA.";
			document.getElementById('aiResult').style.color = "lightgray";
        } else
    {
		document.getElementById('aiResult').style.color = "";
        academicIndex = ( satScore / 20 ) + CSR + ( (satScore / 20 ) + CSR ) / 2;
		academicIndex = Math.round(academicIndex * 10) / 10;
		document.getElementById('aiResult').innerHTML = academicIndex;
		
		if (academicIndex >= aiFloor){ 										// if above the floor, green checkmark.
			document.getElementById('aiResult').innerHTML += "<span style='color:green'> &#x2714; </span>"; 
			// document.getElementById('aiResult').style.color = "green";   // makes the whole line green.
		}	else{															// if below the floor, red X.
			document.getElementById('aiResult').innerHTML += "<span style='color:red'> &#x2718; </span>";
			
			// document.getElementById('aiResult').style.color = "red";     // makes the whole line red.
		}
		document.getElementById('aiResult').innerHTML += '<br/><a onclick="showCalculation()" >Click here for Academic Index Calculation.</a>';
		
		if (isNaN(academicIndex)){											// usually this happens if you press
			alert("Calculation error.  Please refresh the page.");			// back or forward in the browser.
		}

        //document.getElementById('aiResult').innerHTML = "hsGPA = " + hsGPA + "( " + satScore + "/ 20 ) + " + CSR + " + ( (" + satScore + " / 20 ) + " + CSR + " ) / 2 = " + academicIndex;  // debugging AI Calculation
    }
        
};

function satNotValid(){
	document.getElementById('aiResult').innerHTML = "Please give a valid test score.";
	document.getElementById('aiResult').style.color = "lightgray";
};

function checkOtherSatScore(sat){
	if (sat > 530){
		satScore = sat;
		calculateAI();
	} else satNotValid();
};

function resetData(id){
	document.getElementById(id).value = "-";
};



function showCalculation(){
	alert(
	//"Academic Index = " + hsGPA + "( " + satScore + "/ 20 ) + " + CSR + " + ( (" + satScore + " / 20 ) + " + CSR + " ) / 2 = " + academicIndex
		"\nAcademic Index = SAT*/2 + CSR + ( (SAT/2) + CSR ) / 2"
		+ "\nAcademic Index = " + satScore / 10 + "/2 + " + CSR + " + ( (" + satScore / 10 + "/2) + " + CSR + " ) / 2"
		+ "\nAcademic Index = " + satScore / 20 + " + " + CSR + " + ( " + satScore / 20 + " + " + CSR + " ) / 2"
		+ "\nAcademic Index = " + satScore / 20 + " + " + CSR + " + " + ((satScore / 20) + CSR) / 2 
		+ "\nAcademic Index = " + academicIndex
		+ "\n\nSAT* = Sum of critical reading and math SAT scores with "
		+ "last zero dropped off to correlate to the 20 - 80 scale."

		);
};
